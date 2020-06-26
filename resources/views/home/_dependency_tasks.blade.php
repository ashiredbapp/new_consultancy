<div class="portlet light ">
    <div class="portlet-title">
        <div class="caption caption-md">
            <i class="icon-bar-chart font-dark hide"></i>
            <span class="caption-subject font-dark bold uppercase">Tasks dependent on my cell</span>
        </div>
    </div>
    <div class="portlet-body">
        <div class="table-scrollable table-scrollable-borderless">
            <table class="table table-hover table-light">
                <thead>
                    <tr class="uppercase">
                        <th> Cell </th>
                        <th> Task </th>
                        <th> Task Description</th>
                    </tr>
                </thead>
                <tbody> 
                @foreach( $dependency_tasks as $each)    
                    <tr> 
                        <td>{{$cell_name->where('id', $each->dependency_cell_id)->first()->name}}</td>
                        <td> {{$each->name}} </td>
                        <td> {{$each->description}} </td> 
                    </tr> 
                @endforeach 
                </tbody>
            </table>
        </div>
    </div>
</div>
