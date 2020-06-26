<table id="uiTable" class="table">
    <thead>
        <tr>
            <th> </th>
            <th style="text-align:center;"> On-role </th>
            <th style="text-align:center;"> Outsource </th>
            <th style="text-align:center;"> External </th>
            <th style="text-align:center;"> Trainee </th>
            <th style="text-align:center;"> Total </th>
        </tr>
    </thead>
    <tbody>
        @forelse($user_project_details as $project)
        <tr>
            <th>{{$project->name}}</th>
            <td style="text-align:center;">
                <a href="javascript:;" class="popovers" data-container="body" data-trigger="hover" data-html="true"
                    data-content="
                            <table style='border: 1px solid black;' class='table-bordered'>
                                <tr style='font-size:13px;'>
                                    <th style='border: 1px solid black;padding:2px;'>User</th>
                                    <th style='border: 1px solid black;padding:2px;'>DAS Id</th>
                                    <th style='border: 1px solid black;padding:2px;'>User Name</th>
                                    <th style='border: 1px solid black;padding:2px;'>Emp Code</th>
                                </tr>
                                @if($selected_location == 'all')
                                @forelse($project->users->where('onrole', 1) as $user)
                                <tr style='font-size:12px;'>
                                    <?php 
                                    if($user->photo=='') 
                                        $photo='uploads/users/'.$user->gender.".png"; 
                                    else 
                                        $photo='uploads/users/'.$user->photo; 
                                    ?>
                                    <td style='border: 1px solid black; padding:2px;'><img class='user-pic rounded' src='{{asset($photo)}}' style='width:30px;'></td>
                                    <td style='border: 1px solid black; padding:2px;'>{{$user->das_id}}</td>
                                    @if($user->date_of_resignation != null)
                                    <td style='color:red;border: 1px solid black; padding:2px;'>{{$user->name}}</td>
                                    @else
                                    <td style='border: 1px solid black; padding:2px;'>{{$user->name}}</td>
                                    @endif
                                    <td style='border: 1px solid black; padding:2px;'>{{$user->emp_code}}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td style='border: 1px solid black; padding:2px;font-size:12px;text-align:center;' colspan='4'>No User Found</td>
                                </tr>
                                @endforelse
                                @else
                                @forelse($project->users->where('onrole', 1)->where('employee_location',$selected_location) as $user)
                                <tr style='font-size:12px;'>
                                    <?php 
                                    if($user->photo=='') 
                                        $photo='uploads/users/'.$user->gender.".png"; 
                                    else 
                                        $photo='uploads/users/'.$user->photo; 
                                    ?>
                                    <td style='border: 1px solid black; padding:2px;'><img class='user-pic rounded' src='{{asset($photo)}}' style='width:30px'></td>
                                    <td style='border: 1px solid black; padding:2px;'>{{$user->das_id}}</td>
                                    @if($user->date_of_resignation != null)
                                    <td style='color:red;border: 1px solid black; padding:2px;'>{{$user->name}}</td>
                                    @else
                                    <td style='border: 1px solid black; padding:2px;'>{{$user->name}}</td>
                                    @endif
                                    <td style='border: 1px solid black; padding:2px;'>{{$user->emp_code}}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td style='border: 1px solid black; padding:2px;font-size:12px;text-align:center;' colspan='4'>No User Found</td>
                                </tr>
                                @endforelse
                                @endif
                            </table>" data-original-title="User Details">
                    @if($selected_location == 'all')
                    {{ $project->users->where('onrole', 1)->count() }}<br />
                    @else
                    {{ $project->users->where('onrole', 1)->where('employee_location',$selected_location)->count() }}<br />
                    @endif
                </a>
            </td>
            <td style="text-align:center;">
                <a href="javascript:;" class="popovers" data-container="body" data-trigger="hover" data-html="true"
                    data-content="
                            <table style='border: 1px solid black;' class='table-bordered'>
                                <tr style='font-size:13px;'>
                                    <th style='border: 1px solid black;padding:2px;'>User</th>
                                    <th style='border: 1px solid black;padding:2px;'>DAS Id</th>
                                    <th style='border: 1px solid black;padding:2px;'>User Name</th>
                                    <th style='border: 1px solid black;padding:2px;'>Emp Code</th>
                                </tr>
                                @if($selected_location == 'all')
                                @forelse($project->users->where('onrole', 2) as $user)
                                <tr style='font-size:12px;'>
                                    <?php 
                                    if($user->photo=='') 
                                        $photo='uploads/users/'.$user->gender.".png"; 
                                    else 
                                        $photo='uploads/users/'.$user->photo; 
                                    ?>
                                    <td style='border: 1px solid black; padding:2px;'><img class='user-pic rounded' src='{{asset($photo)}}' style='width:30px'></td>
                                    <td style='border: 1px solid black; padding:2px;'>{{$user->das_id}}</td>
                                    @if($user->date_of_resignation != null)
                                    <td style='color:red;border: 1px solid black; padding:2px;'>{{$user->name}}</td>
                                    @else
                                    <td style='border: 1px solid black; padding:2px;'>{{$user->name}}</td>
                                    @endif
                                    <td style='border: 1px solid black; padding:2px;'>{{$user->emp_code}}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td style='border: 1px solid black; padding:2px;font-size:12px;text-align:center;' colspan='4'>No User Found</td>
                                </tr>
                                @endforelse
                                @else
                                @forelse($project->users->where('onrole', 2)->where('employee_location',$selected_location) as $user)
                                <tr style='font-size:12px;'>
                                    <?php 
                                    if($user->photo=='') 
                                        $photo='uploads/users/'.$user->gender.".png"; 
                                    else 
                                        $photo='uploads/users/'.$user->photo; 
                                    ?>
                                    <td style='border: 1px solid black; padding:2px;'><img class='user-pic rounded' src='{{asset($photo)}}' style='width:30px;'></td>
                                    <td style='border: 1px solid black; padding:2px;'>{{$user->das_id}}</td>
                                    @if($user->date_of_resignation != null)
                                    <td style='color:red;border: 1px solid black; padding:2px;'>{{$user->name}}</td>
                                    @else
                                    <td style='border: 1px solid black; padding:2px;'>{{$user->name}}</td>
                                    @endif
                                    <td style='border: 1px solid black; padding:2px;'>{{$user->emp_code}}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td style='border: 1px solid black; padding:2px;font-size:12px;text-align:center;' colspan='4'>No User Found</td>
                                </tr>
                                @endforelse
                                @endif
                            </table>" data-original-title="User Details">
                            @if($selected_location == 'all')
                            {{ $project->users->where('onrole', 2)->count() }}<br />
                            @else
                            {{ $project->users->where('onrole', 2)->where('employee_location',$selected_location)->count() }}<br />
                            @endif
                </a>
            </td>
            <td style="text-align:center;">
                <a href="javascript:;" class="popovers" data-container="body" data-trigger="hover" data-html="true"
                    data-content="
                            <table style='border: 1px solid black;' class='table-bordered'>
                                <tr style='font-size:13px;'>
                                    <th style='border: 1px solid black;padding:2px;'>User</th>
                                    <th style='border: 1px solid black;padding:2px;'>DAS Id</th>
                                    <th style='border: 1px solid black;padding:2px;'>User Name</th>
                                    <th style='border: 1px solid black;padding:2px;'>Emp Code</th>
                                </tr>
                                @if($selected_location == 'all')
                                @forelse($project->users->where('onrole', 3) as $user)
                                <tr style='font-size:12px;'>
                                    <?php 
                                    if($user->photo=='') 
                                        $photo='uploads/users/'.$user->gender.".png"; 
                                    else 
                                        $photo='uploads/users/'.$user->photo; 
                                    ?>
                                    <td style='border: 1px solid black; padding:2px;'><img class='user-pic rounded' src='{{asset($photo)}}' style='width:30px;'></td>
                                    <td style='border: 1px solid black; padding:2px;'>{{$user->das_id}}</td>
                                    @if($user->date_of_resignation != null)
                                    <td style='color:red;border: 1px solid black; padding:2px;'>{{$user->name}}</td>
                                    @else
                                    <td style='border: 1px solid black; padding:2px;'>{{$user->name}}</td>
                                    @endif
                                    <td style='border: 1px solid black; padding:2px;'>{{$user->emp_code}}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td style='border: 1px solid black; padding:2px;font-size:12px;text-align:center;' colspan='4'>No User Found</td>
                                </tr>
                                @endforelse
                                @else
                                @forelse($project->users->where('onrole', 3)->where('employee_location',$selected_location) as $user)
                                <tr style='font-size:12px;'>
                                    <?php 
                                    if($user->photo=='') 
                                        $photo='uploads/users/'.$user->gender.".png"; 
                                    else 
                                        $photo='uploads/users/'.$user->photo; 
                                    ?>
                                    <td style='border: 1px solid black; padding:2px;'><img class='user-pic rounded' src='{{asset($photo)}}' style='width:30px;'></td>
                                    <td style='border: 1px solid black; padding:2px;'>{{$user->das_id}}</td>
                                    @if($user->date_of_resignation != null)
                                    <td style='color:red;border: 1px solid black; padding:2px;'>{{$user->name}}</td>
                                    @else
                                    <td style='border: 1px solid black; padding:2px;'>{{$user->name}}</td>
                                    @endif
                                    <td style='border: 1px solid black; padding:2px;'>{{$user->emp_code}}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td style='border: 1px solid black; padding:2px;font-size:12px;text-align:center;' colspan='4'>No User Found</td>
                                </tr>
                                @endforelse
                                @endif
                            </table>" data-original-title="User Details">
                            @if($selected_location == 'all')
                    {{ $project->users->where('onrole', 3)->count() }}<br />
                    @else
                    {{ $project->users->where('onrole', 3)->where('employee_location',$selected_location)->count() }}<br />
                    @endif
                </a>
            </td>
            <td style="text-align:center;">
                <a href="javascript:;" class="popovers" data-container="body" data-trigger="hover" data-html="true"
                    data-content="
                            <table style='border: 1px solid black;' class='table-bordered'>
                                <tr style='font-size:13px;'>
                                    <th style='border: 1px solid black;padding:2px;'>User</th>
                                    <th style='border: 1px solid black;padding:2px;'>DAS Id</th>
                                    <th style='border: 1px solid black;padding:2px;'>User Name</th>
                                    <th style='border: 1px solid black;padding:2px;'>Emp Code</th>
                                </tr>
                                @if($selected_location == 'all')
                                @forelse($project->users->where('onrole', 4) as $user)
                                <tr style='font-size:12px;'>
                                    <?php 
                                    if($user->photo=='') 
                                        $photo='uploads/users/'.$user->gender.".png"; 
                                    else 
                                        $photo='uploads/users/'.$user->photo; 
                                    ?>
                                    <td style='border: 1px solid black; padding:2px;'><img class='user-pic rounded' src='{{asset($photo)}}' style='width:30px;'></td>
                                    <td style='border: 1px solid black; padding:2px;'>{{$user->das_id}}</td>
                                    @if($user->date_of_resignation != null)
                                    <td style='color:red;border: 1px solid black; padding:2px;'>{{$user->name}}</td>
                                    @else
                                    <td style='border: 1px solid black; padding:2px;'>{{$user->name}}</td>
                                    @endif
                                    <td style='border: 1px solid black; padding:2px;'>{{$user->emp_code}}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td style='border: 1px solid black; padding:2px;font-size:12px;text-align:center;' colspan='4'>No User Found</td>
                                </tr>
                                @endforelse
                                @else
                                @forelse($project->users->where('onrole', 4)->where('employee_location',$selected_location) as $user)
                                <tr style='font-size:12px;'>
                                    <?php 
                                    if($user->photo=='') 
                                        $photo='uploads/users/'.$user->gender.".png"; 
                                    else 
                                        $photo='uploads/users/'.$user->photo; 
                                    ?>
                                    <td style='border: 1px solid black; padding:2px;'><img class='user-pic rounded' src='{{asset($photo)}}' style='width:30px;'></td>
                                    <td style='border: 1px solid black; padding:2px;'>{{$user->das_id}}</td>
                                    @if($user->date_of_resignation != null)
                                    <td style='color:red;border: 1px solid black; padding:2px;'>{{$user->name}}</td>
                                    @else
                                    <td style='border: 1px solid black; padding:2px;'>{{$user->name}}</td>
                                    @endif
                                    <td style='border: 1px solid black; padding:2px;'>{{$user->emp_code}}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td style='border: 1px solid black; padding:2px;font-size:12px;text-align:center;' colspan='4'>No User Found</td>
                                </tr>
                                @endforelse
                                @endif
                            </table>" data-original-title="User Details">
                            @if($selected_location == 'all')
                    {{ $project->users->where('onrole', 4)->count() }}<br />
                    @else
                    {{ $project->users->where('onrole', 4)->where('employee_location',$selected_location)->count() }}<br />
                    @endif
                </a>
            </td>
            <th style="text-align:center;">
            @if($selected_location == 'all')
            {{ $project->users->where('onrole', 1)->count()
                    +$project->users->where('onrole', 2)->count()
                    +$project->users->where('onrole', 3)->count()
                    +$project->users->where('onrole', 4)->count() }}
            @else
            {{ $project->users->where('onrole', 1)->where('employee_location',$selected_location)->count()
                    +$project->users->where('onrole', 2)->where('employee_location',$selected_location)->count()
                    +$project->users->where('onrole', 3)->where('employee_location',$selected_location)->count()
                    +$project->users->where('onrole', 4)->where('employee_location',$selected_location)->count() }}
            @endif
            </th>
        </tr>
        @empty
        <tr>
            <td style="text-align:center;">No Data</td>
        </tr>
        @endforelse
        <tr>
            <th> Total </th>
            @if($selected_location == 'all')
            <th style="text-align:center;">
                {{$users->where('onrole',1)->whereIn('project_id',$user_project_details->pluck('id') )->count()}} </th>
            <th style="text-align:center;">
                {{$users->where('onrole',2)->whereIn('project_id',$user_project_details->pluck('id') )->count()}} </th>
            <th style="text-align:center;">
                {{$users->where('onrole',3)->whereIn('project_id',$user_project_details->pluck('id') )->count()}} </th>
            <th style="text-align:center;">
                {{$users->where('onrole',4)->whereIn('project_id',$user_project_details->pluck('id') )->count()}} </th>
            <th style="color:blue;font-size:18px;text-align:center;">
                {{$users->whereIn('onrole',[1,2,3,4])->whereIn('project_id',$user_project_details->pluck('id') )->count()}}
            </th>
            @else
            <th style="text-align:center;">
                {{$users->where('onrole',1)->where('employee_location',$selected_location)->whereIn('project_id',$user_project_details->pluck('id') )->count()}} </th>
            <th style="text-align:center;">
                {{$users->where('onrole',2)->where('employee_location',$selected_location)->whereIn('project_id',$user_project_details->pluck('id') )->count()}} </th>
            <th style="text-align:center;">
                {{$users->where('onrole',3)->where('employee_location',$selected_location)->whereIn('project_id',$user_project_details->pluck('id') )->count()}} </th>
            <th style="text-align:center;">
                {{$users->where('onrole',4)->where('employee_location',$selected_location)->whereIn('project_id',$user_project_details->pluck('id') )->count()}} </th>
            <th style="color:blue;font-size:18px;text-align:center;">
                {{$users->whereIn('onrole',[1,2,3,4])->where('employee_location',$selected_location)->whereIn('project_id',$user_project_details->pluck('id') )->count()}}
            </th>
            @endif
        </tr>
    </tbody>
</table>
