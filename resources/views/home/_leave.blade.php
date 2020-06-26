<style type="text/css">
.bgimg{
    background-image: url('assets/extra/autum.jpg');
    background-size: cover; 
    background-repeat:no-repeat; 
}
#tab_1_2 img
{
  max-width: 40%;
  max-height: 40%;
  margin: auto;
  display: block;
}
</style>

    <div class="portlet light ">
        <div class="portlet-title tabbable-line">
            <div class="caption">
                <i class="icon-globe font-dark hide"></i>
                <span class="caption-subject font-green bold uppercase">Leave/Holiday</span>
            </div>
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#tab_1_1" class="active" data-toggle="tab"> Leave </a>
                </li>
                <li>
                    <a href="#tab_1_2" data-toggle="tab"> Holiday </a>
                </li>
            </ul>
        </div>
        <div class="portlet-body">
            <!--BEGIN TABS-->
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1_1">
                    <div class="scroller" style="height: 355px;" data-always-visible="1" data-rail-visible="0">
                        <ul class="feeds">
                            @foreach($leaves as $leave)  
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm 
                                            @if($leave->status=='Pending')
                                            label-warning
                                            @elseif($leave->status=='Approved')
                                            label-success
                                            @else
                                            label-danger
                                            @endif
                                            ">
                                                <i class="fa fa-bullhorn"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc">
                                                {{$leave->from_date}} &nbsp;&nbsp;&nbsp;
                                                {{$leave->to_date}} &nbsp;&nbsp;&nbsp;
                                                {{$leave->user_name}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date">{{$leave->status}}</div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="tab-pane bgimg" id="tab_1_2">
                    <div class="scroller" style="height: 355px;" data-always-visible="1" data-rail-visible="0">
                        <img src="{{ asset('assets/extra/holiday.png') }}" />
                        <ul class="feeds">
                        @foreach($holiday as $holiday)
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-info">
                                                <i class="fa fa-bell-o"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc">
                                                {{$holiday->date}} &nbsp;&nbsp;&nbsp;
                                                ({{date('D', strtotime($holiday->date)) }}) &nbsp;&nbsp;&nbsp;
                                                {{ucwords($holiday->holiday_name)}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"></div>
                                </div>
                            </li>
                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
