<div class="portlet light tasks-widget ">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-share font-dark hide"></i>
            <span class="caption-subject font-green bold uppercase">Tasks</span>
            <span class="caption-helper"></span>
        </div>
        <div class="actions">
            <a class="btn btn-circle btn-icon-only btn-default tooltips" href="javascript:;" onclick="gotoForm()"
                data-original-title="Add Mytask">
                <i class="icon-plus"></i>
            </a>
            <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;"> </a>
        </div>
    </div>
    <div class="portlet-body">
        <div class="task-content">
            <div class="scroller" style="height: 312px;" data-always-visible="1" data-rail-visible1="1">
                <!-- START TASK LIST -->
                <ul class="task-list">
                    <li>
                        <table id="task_list" class="table">
                            <thead>
                                <th data-field="state" data-checkbox="true"></th>
                                <th>Task Name</th>
                                <th>Due Date</th>
                                <th>Task Type</th>
                            </thead>
                            <tbody id="runtimeTask">
                                @include('home._taskmytask')
                            </tbody>
                        </table>
                    </li>
                </ul>
                <!-- END START TASK LIST -->
            </div>
        </div>
        <div class="task-footer">
            <div class="btn-arrow-link pull-right">
                <a href="{{url('/task')}}">Sprint Tasks</a>
                <i class="icon-arrow-right"></i>
            </div>
            <div class="clearfix"></div>
            <div class="btn-arrow-link pull-right">
                <a href="{{url('/mytask')}}">My Tasks</a>
                <i class="icon-arrow-right"></i>
                
            </div>
            <button type="button" class="btn btn-circle btn-xs green" onclick="taskComplete()">Done</button>
        </div>
    </div>
</div>
