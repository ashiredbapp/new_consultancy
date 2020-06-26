<div class="col-md-9">
<div class="col-md-3">
    <!-- BEGIN WIDGET THUMB -->
    <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
        <h4 class="widget-thumb-heading">
            <li>
                <a href="{{url('/epic')}}">Epics</a>                
            </li>
        </h4>
        <div class="widget-thumb-wrap">
        <img class="widget-thumb-icon bg-blue" src="{{ asset('uploads/icons/Epic-icon.png') }}">
            <div class="widget-thumb-body">
                <span class="widget-thumb-subtitle">
                </span>
                <span class="widget-thumb-body-stat" data-counter="counterup" data-value="{{$totalEpics}}">{{$totalEpics}}</span>
            </div>
        </div>
    </div>
    <!-- END WIDGET THUMB -->
</div>
<div class="col-md-3">
    <!-- BEGIN WIDGET THUMB -->
    <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
        <h4 class="widget-thumb-heading">
            <li>
                <a href="{{url('/feature')}}">Features</a>                
            </li>
        </h4>
        <!--<ul class="page-breadcrumb breadcrumb">-->
        <div class="widget-thumb-wrap">
        <img class="widget-thumb-icon bg-blue" src="{{ asset('uploads/icons/feature-icon.png') }}">
            <div class="widget-thumb-body">
                <span class="widget-thumb-subtitle">
                </span>
                <span class="widget-thumb-body-stat" data-counter="counterup" data-value="{{$totalFeatures}}">{{$totalFeatures}}</span>
            </div>
        </div>
    </div>
    <!-- END WIDGET THUMB -->
</div>

<div class="col-md-3">
    <!-- BEGIN WIDGET THUMB -->
    <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
        <h4 class="widget-thumb-heading"> 
            <li>
                <a href="{{url('/story')}}">Stories</a>                
            </li>
        </h4>
        <div class="widget-thumb-wrap">
        <img class="widget-thumb-icon bg-blue" src="{{ asset('uploads/icons/story-icon.png') }}">
            <div class="widget-thumb-body">
                <span class="widget-thumb-subtitle">
                </span>
                <span class="widget-thumb-body-stat" data-counter="counterup" data-value="{{$totalStories}}">{{$totalStories}}</span>
            </div>
        </div>
    </div>
    <!-- END WIDGET THUMB -->
</div>
<div class="col-md-3">
    <!-- BEGIN WIDGET THUMB -->
    <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
        <h4 class="widget-thumb-heading"> 
            <li>
                <a href="{{url('/task')}}">Tasks</a>                
            </li>
        </h4>
        <div class="widget-thumb-wrap">
        <img class="widget-thumb-icon bg-blue" src="{{ asset('uploads/icons/task-icon.png') }}">
            <div class="widget-thumb-body">
                <span class="widget-thumb-subtitle">
                </span>
                <span class="widget-thumb-body-stat" data-counter="counterup" data-value="{{$totalTasks}}">{{$totalTasks}}</span>
            </div>
        </div>
    </div>
    <!-- END WIDGET THUMB -->
</div>
</div>
<div class="col-md-3">
    <!-- BEGIN WIDGET THUMB -->
    <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
        <h4 class="widget-thumb-heading"> 
            <li>
                <a href="{{route('task.index',['assigned'=>1])}}">Tasks assigned to me</a>                
            </li>
        </h4>
        <div class="widget-thumb-wrap">
        <img class="widget-thumb-icon bg-blue" src="{{ asset('uploads/icons/task-icon.png') }}">
            <div class="widget-thumb-body">
                <span class="widget-thumb-subtitle">
                </span>
                <span class="widget-thumb-body-stat" data-counter="counterup" data-value="{{$assigned_tasks}}">{{$assigned_tasks}}</span>
            </div>
        </div>
    </div>
    <!-- END WIDGET THUMB -->
</div>

