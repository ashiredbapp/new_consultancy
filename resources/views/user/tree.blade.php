
@section('content')
<div id="tree">
    <ul>
        <li id="epic">Epic
            <ul>
                @foreach($employee as $emp)
                @foreach($permission as $id)
                    @if($emp->parent_id==66 && $emp->id==$id)
                        <li id="{{$emp->id}}" aria-selected="true">{{$emp->display_name}}</li>
                    @endif
                @endforeach
                @endforeach
            </ul>
        </li>
        <li id="feature">Feature
            <ul>
                @foreach($employee as $emp)
                    @if($emp->parent_id==101)
                        <li id="{{$emp->id}}">{{$emp->display_name}}</li>
                    @endif
                @endforeach
            </ul>
        </li>
        <li id="story">Story
            <ul>
            @foreach($permission as $id)
                @foreach($employee as $emp)
                    @if($emp->parent_id==102)
                     @if($emp->id==$id)
                        <li id="{{$emp->id}}">{{$emp->display_name}}</li>
                     @endif
                    @endif
                @endforeach
                @endforeach
            </ul>
        </li>
        <li id="task">Task
            <ul>
                @foreach($employee as $emp)
                    @if($emp->parent_id==103)
                        <li id="{{$emp->id}}">{{$emp->display_name}}</li>
                    @endif
                @endforeach
            </ul>
        </li>
        <li id="user">User
            <ul>
                @foreach($employee as $emp)
                    @if($emp->parent_id==105)
                        <li id="{{$emp->id}}">{{$emp->display_name}}</li>
                    @endif
                @endforeach
            </ul>
        </li>
        <li id="role">Role
            <ul>
                @foreach($employee as $emp)
                    @if($emp->parent_id==111)
                        <li id="{{$emp->id}}">{{$emp->display_name}}</li>
                    @endif
                @endforeach
            </ul>
        </li>
        <li id="user_cell_role">User Cell Role
            <ul>
                @foreach($employee as $emp)
                    @if($emp->parent_id==106)
                        <li id="{{$emp->id}}">{{$emp->display_name}}</li>
                    @endif
                @endforeach
            </ul>
        </li>
        <li id="user_task">User Task
            <ul>
                @foreach($employee as $emp)
                    @if($emp->parent_id==104)
                        <li id="{{$emp->id}}">{{$emp->display_name}}</li>
                    @endif
                @endforeach
            </ul>
        </li>
        <li id="user_cell_map">User Cell Map
            <ul>
                @foreach($employee as $emp)
                    @if($emp->parent_id==109)
                        <li id="{{$emp->id}}">{{$emp->display_name}}</li>
                    @endif
                @endforeach
            </ul>
        </li>
        <li id="permission">Permission
            <ul>
                @foreach($employee as $emp)
                    @if($emp->parent_id==115)
                        <li id="{{$emp->id}}">{{$emp->display_name}}</li>
                    @endif
                @endforeach
            </ul>
        </li>
        <li id="cell_role_permission">Cell Role Permission
            <ul>
                @foreach($employee as $emp)
                    @if($emp->parent_id==116)
                        <li id="{{$emp->id}}">{{$emp->display_name}}</li>
                    @endif
                @endforeach
            </ul>
        </li>
        <li id="reporting_manager">Reporting Manager
            <ul>
                @foreach($employee as $emp)
                    @if($emp->parent_id==110)
                        <li id="{{$emp->id}}">{{$emp->display_name}}</li>
                    @endif
                @endforeach
            </ul>
        </li>
        <li id="leave">Leave Apply
            <ul>
                @foreach($employee as $emp)
                    @if($emp->parent_id==112)
                        <li id="{{$emp->id}}">{{$emp->display_name}}</li>
                    @endif
                @endforeach
            </ul>
        </li>
        <li id="holiday">Holiday
            <ul>
                @foreach($employee as $emp)
                    @if($emp->parent_id==114)
                        <li id="{{$emp->id}}">{{$emp->display_name}}</li>
                    @endif
                @endforeach
            </ul>
        </li>
        <li id="location">Location
            <ul>
                @foreach($employee as $emp)
                    @if($emp->parent_id==113)
                        <li id="{{$emp->id}}">{{$emp->display_name}}</li>
                    @endif
                @endforeach
            </ul>
        </li>
        <li id="retrospective">Retrospective
            <ul>
                @foreach($employee as $emp)
                    @if($emp->parent_id==108)
                        <li id="{{$emp->id}}">{{$emp->display_name}}</li>
                    @endif
                @endforeach
            </ul>
        </li>
        <li id="sprint">Sprint
            <ul>
                @foreach($employee as $emp)
                    @if($emp->parent_id==107)
                        <li id="{{$emp->id}}">{{$emp->display_name}}</li>
                    @endif
                @endforeach
            </ul>
        </li>
        <li id="delivery_unit">Delivery Unit
            <ul>
                @foreach($employee as $emp)
                    @if($emp->parent_id==121)
                        <li id="{{$emp->id}}">{{$emp->display_name}}</li>
                    @endif
                @endforeach
            </ul>
        </li>
        <li id="project">Project
            <ul>
                @foreach($employee as $emp)
                    @if($emp->parent_id==124)
                        <li id="{{$emp->id}}">{{$emp->display_name}}</li>
                    @endif
                @endforeach
            </ul>
        </li>
    </ul>
</div>
@endsection
