@extends('layouts.app')

@section('header_styles')
<link href="{{ asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}" rel="stylesheet" type="text/css" />
@stop

@section('content')

<div class="page-container">
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="container">
            <ul class="page-breadcrumb breadcrumb">
                <li>
                    <a href="{{url('/home')}}">Home</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>My Profile</span>
                </li>
                </ul>
                <div class="page-content-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN PROFILE SIDEBAR -->
                            <div class="profile-sidebar">
                                <!-- PORTLET MAIN -->
                                <div class="col-md-3">
                                <div class="col-md-12">
                                    <div class="portlet light profile-sidebar-portlet ">
                                        <!-- SIDEBAR USERPIC -->
                                        <div class="profile-userpic">
                                        <div class="caption-subject font-blue-madison bold uppercase"> User Avatar </div><br>
                                            @if($user->photo)
                                            <img src="{{ asset('uploads/users/'.$user->photo)}}" class="img-responsive">
                                            @else
                                            <img src="{{ asset('assets/layouts/layout3/img/'.lcfirst($user->gender).'.png')}}" class="img-responsive">
                                            @endif
                                        </div>
                                        <!-- END SIDEBAR USERPIC -->
                                        <!-- SIDEBAR USER TITLE -->
                                        <div class="profile-usertitle">
                                            <div class="profile-usertitle-name bold">{{$user->name}} </div>
                                            <div class="profile-usertitle-job">{{$user->designation}}</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="portlet light profile-sidebar-portlet ">
                                        <div class="profile-usertitle">
                                            <div class="caption-subject font-blue-madison bold uppercase"> My Cell(s) </div><br>
                                            @foreach($auth_cells as $auth_cell)
                                            <div >{{$auth_cell->name}}</div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="portlet light profile-sidebar-portlet ">
                                        <div class="profile-usertitle">
                                            <div class="caption-subject font-blue-madison bold uppercase"> My Project(s) </div><br>
                                            @foreach($projects as $project)
                                            <div >{{$project->name}}</div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="portlet light profile-sidebar-portlet ">
                                        <div class="profile-usertitle">
                                        <div class="caption-subject font-blue-madison bold uppercase"> Current Sprint(s) </div><br>
                                            @foreach($auth_cells as $cell)
                                            @if($current_sprints->where('developmentcell_id', $cell->id)->count()!=0)
                                            <div>{{$cell->name}} : Sprint {{$current_sprints->where('developmentcell_id', $cell->id)->sortByDesc('id')->first()->name}}</div>
                                            @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                </div>

                                <!-- <div class="col-md-8">
                                    
                                </div> -->
                                <!-- END BEGIN PROFILE SIDEBAR -->
                                <!-- BEGIN PROFILE CONTENT -->
                                <div class="col-md-9">
                                <div class="profile-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="portlet light ">
                                                <div class="portlet-title tabbable-line">
                                                    <div class="caption caption-md">
                                                        <i class="icon-globe theme-font hide"></i>
                                                        <span
                                                            class="caption-subject font-blue-madison bold uppercase">Profile
                                                            Account</span>
                                                    </div>
                                                    <ul class="nav nav-tabs">
                                                        <li class="" id="personal_info">
                                                            <a href="#tab_1_1" data-toggle="tab">Personal Info</a>
                                                        </li>
                                                        <li class="" id="change_avatar">
                                                            <a href="#tab_1_2" data-toggle="tab">Change Avatar</a>
                                                        </li>
                                                        <li class="" id="change_password">
                                                            <a href="#tab_1_3" data-toggle="tab">Change Password</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="portlet-body">
                                                    <div class="tab-content">
                                                        <!-- PERSONAL INFO TAB -->
                                                        <div class="tab-pane" id="tab_1_1">
                                                            <form role="form" method="post" action="{{ route('edit-profile') }}">
                                                                @csrf
                                                                <div class="form-group">
                                                                    <label class="control-label">Name</label>
                                                                    <input type="text" name="name" class="form-control" value="{{$user->name}}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Email</label>
                                                                    <input type="text" name="email" class="form-control" value="{{$user->email}}"> 
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Das ID</label>
                                                                    <input type="text" name="das_id" class="form-control" value="{{$user->das_id}}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Employee Number</label>
                                                                    <input type="text" name="emp_code" class="form-control" value="{{$user->emp_code}}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Gender</label>
                                                                    <select class="form-control" name='gender'>
                                                                        <option value="Male" {{ old('gender')??$user->gender=='Male'?'selected':''}}> Male</option>
                                                                        <option value="Female" {{ old('gender')??$user->gender=='Female'?'selected':''}}> Female</option>
                                                                        <option value="Others" {{ old('gender')??$user->gender=='Others'?'selected':''}}> Others</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Mobile Number</label>
                                                                    <input type="text" name="mobile_number" class="form-control" value="{{$user->mobile_number}}"> 
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Designation</label>
                                                                    <input type="text" name="designation" class="form-control" value="{{$user->designation}}"> 
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Date of Birth</label>
                                                                    <input class="form-control date-picker" name="date_of_birth" value="{{ old('date_of_birth')??$user->date_of_birth??'' }}" placeholder="DD-MM-YYYY">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Date of Joining</label>
                                                                    <input class="form-control date-picker" name="date_of_joining" value="{{ old('date_of_joining')??$user->date_of_joining??'' }}" placeholder="DD-MM-YYYY">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Address</label> 
                                                                    <textarea class="form-control" name="address" type="text">{{$user->address}}</textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Role Type</label>
                                                                    <select class="form-control" name="onrole">
                                                                       @if( old('onrole')=='1' || old('onrole')=='2'  ||old('onrole')=='3' || old('onrole')=='4' )
                                                                       <option value="1" {{ old('onrole')=='1'?'selected':'' }}>Onrole</option>
                                                                       <option value="2" {{ old('onrole')=='2'?'selected':'' }}>Outsource</option>
                                                                       <option value="3" {{ old('onrole')=='3'?'selected':'' }}>Contract</option>
                                                                       <option value="4" {{ old('onrole')=='4'?'selected':'' }}>Trinee</option>
                                                                       @else
                                                                       <option value="1" {{ $user->onrole=='1'?'selected':'' }}>Onrole</option>
                                                                       <option value="2" {{ $user->onrole=='2'?'selected':'' }}>Outsource</option>
                                                                       <option value="3" {{ $user->onrole=='3'?'selected':'' }}>Contract</option>
                                                                       <option value="4" {{ $user->onrole=='4'?'selected':'' }}>Trinee</option>
                                                                       @endif
                                                                   </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Contract End Date</label>
                                                                    <input class="form-control date-picker" name="contract_enddate" value="{{ old('contract_enddate')??$user->contract_enddate??'' }}" placeholder="DD-MM-YYYY">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Emergency Contact Number</label>
                                                                    <input class="form-control" name="emergency_mobile" type="text" value="{{$user->emergency_mobile}}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Employee Location</label>
                                                                    <select class="form-control" name="employee_location">
                                                                        @foreach($location as $loc)
                                                                        <option value="{{$loc->id}}" {{ old('employee_location')??$user->employee_location==$loc->id?'selected':''}}> {{$loc->location_name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Blood Group</label>
                                                                    <input class="form-control" name="blood_group" type="text" value="{{$user->blood_group}}">
                                                                </div>
                                                                <div class="margiv-top-10">
                                                                    <button type="submit" class="btn green">Save Changes</button>
                                                                    <button type="button" onclick="window.location='{{ url('/home') }}'" class="btn default">Cancel</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <!-- END PERSONAL INFO TAB -->
                                                        <!-- CHANGE AVATAR TAB -->
                                                        <div class="tab-pane" id="tab_1_2">
                                                            <form role="form" method="post" action="{{ route('set-profile-photo') }}" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="form-group">
                                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                            @if($user->photo)
                                                                            <img src="{{ asset('uploads/users/'.$user->photo)}}" class="img-responsive">
                                                                            @else
                                                                            <img src="{{ asset('assets/layouts/layout3/img/'.lcfirst($user->gender).'.png')}}" class="img-responsive">
                                                                            @endif
                                                                        </div>
                                                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
                                                                        </div>
                                                                        <div>
                                                                            <span class="btn default btn-file">
                                                                                <span class="fileinput-new"> Select image </span>
                                                                                <span class="fileinput-exists"> Change </span>
                                                                                <input type="file" name="photo"> 
                                                                            </span>
                                                                            <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix margin-top-10">
                                                                    </div>
                                                                </div>
                                                                <div class="margin-top-10">
                                                                    <button type="submit" class="btn green">Submit</button>
                                                                    <button type="button" onclick="window.location='{{ url('/home') }}'" class="btn default">Cancel</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <!-- END CHANGE AVATAR TAB -->
                                                        <!-- CHANGE PASSWORD TAB -->
                                                        <div class="tab-pane" id="tab_1_3">
                                                            <form role="form" method="post" action="{{ route('reset-password') }}">
                                                                @csrf
                                                                <div class="form-group {{ $errors->has('current_password')?'has-error':'' }}">
                                                                    <label class="control-label">Current Password</label>
                                                                    <input type="password" name="current_password" class="form-control">
                                                                    @if ($errors->has('current_password'))
                                                                    <span class="help-block">{{ $errors->first('current_password') }}</span>
                                                                    @endif 
                                                                </div>
                                                                <div class="form-group {{ $errors->has('new_password')?'has-error':'' }}">
                                                                    <label class="control-label">New Password</label>
                                                                    <input type="password" name="new_password" class="form-control">
                                                                    @if ($errors->has('new_password'))
                                                                    <span class="help-block">{{ $errors->first('new_password') }} </span>
                                                                    @endif
                                                                </div>
                                                                <div class="form-group {{ $errors->has('retype_new_password')?'has-error':'' }}">
                                                                    <label class="control-label">Re-type New Password</label>
                                                                    <input type="password" name="retype_new_password" class="form-control">                                                        
                                                                    @if ($errors->has('retype_new_password'))
                                                                    <span class="help-block">{{ $errors->first('retype_new_password') }}</span>
                                                                    @endif 
                                                                </div>
                                                                <div class="margin-top-10">
                                                                    <button type="submit" class="btn green">Change Password</button>
                                                                    <button type="button" onclick="window.location='{{ url('/home') }}'" class="btn default">Cancel</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <!-- END CHANGE PASSWORD TAB -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- END PROFILE CONTENT -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom_scripts')
<script src="{{ asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') }}"></script>
<script src="{{ asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script>
    if (jQuery().datepicker) {
        $('.date-picker').datepicker({
            rtl: App.isRTL(),
            orientation: "left",
            autoclose: true,
            format: 'dd-mm-yyyy'
        });
    }
    @if( old('tab') == false )
    $('#personal_info a').click();
    @else
    $('#{{ old('tab') }} a').click();
    @endif
</script>
@endsection
