<div class="col-md-12">
    <div class="portlet light">
        <div class="portlet-title">
            <div class="caption">
                <div style="display:inline-block;" class="caption-subject font-green bold uppercase">Task Backlog</div>
            </div>
        </div>
        <div class="portlet-body">
            <div id="backlog_div">
                <table id="task_list" class="table table-sm">
                    <thead>
                        <tr>
                            <th>Task</th>
                            <th>Start</th>
                            <th>End</th>
                            <th>Size</th>
                            <th>Cell</th>
                            <th>Sprint</th>
                            <th>Status</th>
                            <th>Actual</th>
                            <th style="text-align:center;">Actual Date</th>
                        </tr>
                    </thead>
                    @foreach($my_tasks as $task)
                        <tbody>
                            @php
                            $_stausArray = ['ToDo', 'Started', 'Completed', 'SIT', 'UAT', 'Pre Production',
                            'Production']
                            @endphp
                            <tr data-task="{{$task->id}}">
                                <td style="padding:1px;">{{$task->name}}</td>
                                <td style="padding:1px;">{{$task->start_date}}</td>
                                <td style="padding:1px;">{{$task->end_date}}</td>
                                <td style="padding:1px;text-align:center;">{{$task->size}}</td>
                                <td style="padding:1px;">{{$auth_cells->where('id',$task->cell_id)->first()->name??''}}
                                </td>
                                <td style="padding:1px;">
                                    <select style="padding:1px;" name="sprint" class="btn btn-mini sprint">
                                        <option style="padding:1px;" value=""> Select Sprint </option>
                                        @foreach($sprints->where('developmentcell_id',$task->cell_id) as $sprint)
                                        <option style="padding:1px;" value="{{ $sprint->id}}"
                                            {{ $sprint->id==$task->sprint_id?'selected':'' }}>Sprint {{$sprint->name}}
                                        </option>
                                        @endforeach
                                    </select>
                                </td>
                                <td style="padding:1px;">
                                    <select data-id="{{$task->id}}" style="padding:1px;" name="dev_status"
                                        class="btn btn-mini status">
                                        @foreach($_stausArray as $_each)
                                        <option style="padding:1px;" value="{{ $_each }}"
                                            {{ $task->dev_status === $_each ? 'selected' : '' }}>{{ $_each }}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="actual" style="padding:1px;text-align:center;">
                                    <select data-id="{{$task->id}}" style="padding:1px;" name="actual"
                                        class="btn btn-mini actuals">
                                        @foreach(range(1,13) as $_each)
                                        <option style="padding:1px;" value="{{ $_each }}"
                                            {{ $task->actual === $_each ? 'selected' : '' }}>{{ $_each }}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td style="padding:1px;">
                                    <input class="btn btn-mini date-picker actual_end_date"
                                        value="{{ Carbon\Carbon::now()->format('d-m-Y') }}" placeholder="DD-MM-YYYY">
                                </td>
                                <td>
                                    <button class="btn btn-circle btn-primary btn-xs update"  id="{{ $task->id }}"
                                        aria-expanded="false">
                                        Update <i style="color:#39ff14;" class="fa fa-check"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

