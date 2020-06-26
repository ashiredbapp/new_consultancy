@extends('layouts.app')

@section('content')
@include('utilities.datatableStyle')
@include('utilities.datatableScripts')

<!-- BEGIN PAGE HEAD-->
<div class="page-head">
    <div class="container">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1>User <small>User & statistics</small>
            </h1>
        </div>
        <!-- END PAGE TITLE -->
    </div>
</div>
<!-- END PAGE HEAD-->
<!-- BEGIN PAGE CONTENT BODY -->
<div class="page-content">
    <div class="container">
        <!-- BEGIN PAGE BREADCRUMBS -->
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="{{ url('/home') }}">Dashboard</a>
            </li>


        </ul>
        <!-- END PAGE BREADCRUMBS -->
        <!-- BEGIN PAGE CONTENT INNER -->
        <div class="row widget-row">
            <div class="col-md-4">
                <!-- BEGIN WIDGET THUMB -->
                <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                    <h4 class="widget-thumb-heading">Balance Amount</h4>
                    <div class="widget-thumb-wrap">
                        <i class="widget-thumb-icon bg-green icon-bulb"></i>
                        <div class="widget-thumb-body">
                            <span class="widget-thumb-subtitle">INR</span>
                            <span class="widget-thumb-body-stat" data-counter="counterup" data-value="7,644">7,644</span>
                        </div>
                    </div>
                </div>
                <!-- END WIDGET THUMB -->
            </div>
            <div class="col-md-4">
                <!-- BEGIN WIDGET THUMB -->
                <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                    <h4 class="widget-thumb-heading">Cash Received</h4>
                    <div class="widget-thumb-wrap">
                        <i class="widget-thumb-icon bg-red icon-layers"></i>
                        <div class="widget-thumb-body">
                            <span class="widget-thumb-subtitle">INR</span>
                            <span class="widget-thumb-body-stat" data-counter="counterup" data-value="1,293">1,293</span>
                        </div>
                    </div>
                </div>
                <!-- END WIDGET THUMB -->
            </div>
            <div class="col-md-4">
                <!-- BEGIN WIDGET THUMB -->
                <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                    <h4 class="widget-thumb-heading">Cash Spent</h4>
                    <div class="widget-thumb-wrap">
                        <i class="widget-thumb-icon bg-purple icon-screen-desktop"></i>
                        <div class="widget-thumb-body">
                            <span class="widget-thumb-subtitle">INR</span>
                            <span class="widget-thumb-body-stat" data-counter="counterup" data-value="815">815</span>
                        </div>
                    </div>
                </div>
                <!-- END WIDGET THUMB -->
            </div>

        </div>

        <div class="row">
        <div class="col-md-6 col-sm-6">
            <div class="portlet light ">
                <div class="portlet-title">
                    <div class="caption ">
                        <span class="caption-subject font-dark bold uppercase">Expense Distribution</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="dashboard_amchart_4" class="CSSAnimationChart" style="overflow: hidden; text-align: left;"><div class="amcharts-main-div" style="position: relative;"><div class="amcharts-chart-div" style="overflow: hidden; position: relative; text-align: left; width: 515px; height: 500px; padding: 0px;"><svg version="1.1" style="position: absolute; width: 515px; height: 500px; top: 0.200012px; left: -0.399963px;"><desc>JavaScript chart by amCharts 3.17.1</desc><g><path cs="100,100" d="M0.5,0.5 L514.5,0.5 L514.5,499.5 L0.5,499.5 Z" fill="#FFFFFF" stroke="#000000" fill-opacity="0" stroke-width="1" stroke-opacity="0"></path></g><g></g><g></g><g></g><g></g><g></g><g><g><path cs="1000,1000" d=" M257.5,265 L248.9479887911797,211.30181834535546 A81,54,0,0,1,257.4999999999999,211 L257.5,265 Z" fill="#26335d" stroke-opacity="0" fill-opacity="1" transform="translate(0,0)"></path><path cs="1000,1000" d=" M257.5,265 L248.9479887911797,211.30181834535546 A81,54,0,0,1,257.4999999999999,211 L257.5,265 Z" fill="#26335d" stroke-opacity="0" fill-opacity="1" transform="translate(0,-10)"></path><path cs="1000,1000" d=" M257.5,250 L257.5,265 L248.9479887911797,211.30181834535546 L248.9479887911797,196.30181834535546 L257.5,250 Z" fill="#26335d" stroke-opacity="0" fill-opacity="1"></path><path cs="1000,1000" d=" M257.4999999999999,196 L257.4999999999999,211 L257.5,265 L257.5,250 L257.4999999999999,196 Z" fill="#26335d" stroke-opacity="0" fill-opacity="1"></path><path cs="1000,1000" d=" M257.5,250 L248.9479887911797,196.30181834535546 A81,54,0,0,1,257.4999999999999,196 L257.5,250 Z" fill="#2f4074" stroke="#FFFFFF" stroke-width="2" stroke-opacity="0.4" fill-opacity="1"></path><path cs="100,100" d="M253.5,196.5 L252.5,153.5 L244.5,153.5" fill="none" stroke-opacity="0.3" stroke="#000000" visibility="visible"></path></g><g><path cs="1000,1000" d=" M257.5,265 L233.04070871471663,213.52080001561941 A81,54,0,0,1,248.9479887911797,211.30181834535546 L257.5,265 Z" fill="#a4688a" stroke-opacity="0" fill-opacity="1" transform="translate(0,0)"></path><path cs="1000,1000" d=" M257.5,265 L233.04070871471663,213.52080001561941 A81,54,0,0,1,248.9479887911797,211.30181834535546 L257.5,265 Z" fill="#a4688a" stroke-opacity="0" fill-opacity="1" transform="translate(0,-10)"></path><path cs="1000,1000" d=" M257.5,250 L257.5,265 L233.04070871471663,213.52080001561941 L233.04070871471663,198.52080001561941 L257.5,250 Z" fill="#a4688a" stroke-opacity="0" fill-opacity="1"></path><path cs="1000,1000" d=" M248.9479887911797,196.30181834535546 L248.9479887911797,211.30181834535546 L257.5,265 L257.5,250 L248.9479887911797,196.30181834535546 Z" fill="#a4688a" stroke-opacity="0" fill-opacity="1"></path><path cs="1000,1000" d=" M257.5,250 L233.04070871471663,198.52080001561941 A81,54,0,0,1,248.9479887911797,196.30181834535546 L257.5,250 Z" fill="#cd82ad" stroke="#FFFFFF" stroke-width="2" stroke-opacity="0.4" fill-opacity="1"></path><path cs="100,100" d="M241.5,197.5 L237.5,173.5 L229.5,173.5" fill="none" stroke-opacity="0.3" stroke="#000000" visibility="visible"></path></g><g><path cs="1000,1000" d=" M257.5,265 L204.1332615726946,224.37712067958876 A81,54,0,0,1,233.04070871471663,213.52080001561941 L257.5,265 Z" fill="#a3393a" stroke-opacity="0" fill-opacity="1" transform="translate(0,0)"></path><path cs="1000,1000" d=" M257.5,265 L204.1332615726946,224.37712067958876 A81,54,0,0,1,233.04070871471663,213.52080001561941 L257.5,265 Z" fill="#a3393a" stroke-opacity="0" fill-opacity="1" transform="translate(0,-10)"></path><path cs="1000,1000" d=" M257.5,250 L257.5,265 L204.1332615726946,224.37712067958876 L204.1332615726946,209.37712067958876 L257.5,250 Z" fill="#a3393a" stroke-opacity="0" fill-opacity="1"></path><path cs="1000,1000" d=" M233.04070871471663,198.52080001561941 L233.04070871471663,213.52080001561941 L257.5,265 L257.5,250 L233.04070871471663,198.52080001561941 Z" fill="#a3393a" stroke-opacity="0" fill-opacity="1"></path><path cs="1000,1000" d=" M257.5,250 L204.1332615726946,209.37712067958876 A81,54,0,0,1,233.04070871471663,198.52080001561941 L257.5,250 Z" fill="#cc4748" stroke="#FFFFFF" stroke-width="2" stroke-opacity="0.4" fill-opacity="1"></path><path cs="100,100" d="M218.5,203.5 L208.5,192.5 L200.5,192.5" fill="none" stroke-opacity="0.3" stroke="#000000" visibility="visible"></path></g><g><path cs="1000,1000" d=" M257.5,265 L177.586255983331,256.186033375292 A81,54,0,0,1,204.1332615726946,224.37712067958876 L257.5,265 Z" fill="#6a924e" stroke-opacity="0" fill-opacity="1" transform="translate(0,0)"></path><path cs="1000,1000" d=" M257.5,265 L177.586255983331,256.186033375292 A81,54,0,0,1,204.1332615726946,224.37712067958876 L257.5,265 Z" fill="#6a924e" stroke-opacity="0" fill-opacity="1" transform="translate(0,-10)"></path><path cs="1000,1000" d=" M257.5,250 L257.5,265 L177.586255983331,256.186033375292 L177.586255983331,241.18603337529203 L257.5,250 Z" fill="#6a924e" stroke-opacity="0" fill-opacity="1"></path><path cs="1000,1000" d=" M204.1332615726946,209.37712067958876 L204.1332615726946,224.37712067958876 L257.5,265 L257.5,250 L204.1332615726946,209.37712067958876 Z" fill="#6a924e" stroke-opacity="0" fill-opacity="1"></path><path cs="1000,1000" d=" M257.5,250 L177.586255983331,241.18603337529203 A81,54,0,0,1,204.1332615726946,209.37712067958876 L257.5,250 Z" fill="#84b761" stroke="#FFFFFF" stroke-width="2" stroke-opacity="0.4" fill-opacity="1"></path><path cs="100,100" d="M187.5,224.5 L170.5,217.5 L162.5,217.5" fill="none" stroke-opacity="0.3" stroke="#000000" visibility="visible"></path></g><g opacity="1"><path cs="1000,1000" d=" M257.5,265 L257.5,211 A81,54,0,0,1,288.39838368808324,314.9167746708414 L257.5,265 Z" fill="#5292b0" stroke-opacity="0" fill-opacity="1" transform="translate(0,0)"></path><path cs="1000,1000" d=" M257.5,265 L257.5,211 A81,54,0,0,1,288.39838368808324,314.9167746708414 L257.5,265 Z" fill="#5292b0" stroke-opacity="0" fill-opacity="1" transform="translate(0,-10)"></path><path cs="1000,1000" d=" M257.5,250 L257.5,265 L257.5,211 L257.5,196 L257.5,250 Z" fill="#5292b0" stroke-opacity="0" fill-opacity="1"></path><path cs="1000,1000" d=" M288.39838368808324,299.9167746708414 L288.39838368808324,314.9167746708414 L257.5,265 L257.5,250 L288.39838368808324,299.9167746708414 Z" fill="#5292b0" stroke-opacity="0" fill-opacity="1"></path><path cs="1000,1000" d=" M257.5,250 L257.5,196 A81,54,0,0,1,288.39838368808324,299.9167746708414 L257.5,250 Z" fill="#67b7dc" stroke="#FFFFFF" stroke-width="2" stroke-opacity="0.4" fill-opacity="1"></path><path cs="100,100" d="M337.5,240.5 L356.5,237.5 L364.5,237.5" fill="none" stroke-opacity="0.3" stroke="#000000" visibility="visible"></path></g><g><path cs="1000,1000" d=" M257.5,265 L288.39838368808324,314.9167746708414 A81,54,0,0,1,177.586255983331,256.186033375292 L257.5,265 Z" fill="#caaa00" stroke-opacity="0" fill-opacity="1" transform="translate(0,0)"></path><path cs="1000,1000" d=" M257.5,265 L288.39838368808324,314.9167746708414 A81,54,0,0,1,177.586255983331,256.186033375292 L257.5,265 Z" fill="#caaa00" stroke-opacity="0" fill-opacity="1" transform="translate(0,-10)"></path><path cs="1000,1000" d=" M257.5,250 L257.5,265 L288.39838368808324,314.9167746708414 L288.39838368808324,299.9167746708414 L257.5,250 Z" fill="#caaa00" stroke-opacity="0" fill-opacity="1"></path><path cs="1000,1000" d=" M177.586255983331,241.18603337529203 L177.586255983331,256.186033375292 L257.5,265 L257.5,250 L177.586255983331,241.18603337529203 Z" fill="#caaa00" stroke-opacity="0" fill-opacity="1"></path><path cs="1000,1000" d=" M257.5,250 L288.39838368808324,299.9167746708414 A81,54,0,0,1,177.586255983331,241.18603337529203 L257.5,250 Z" fill="#fdd400" stroke="#FFFFFF" stroke-width="2" stroke-opacity="0.4" fill-opacity="1"></path><path cs="100,100" d="M207.5,292.5 L195.5,302.5 L187.5,302.5" fill="none" stroke-opacity="0.3" stroke="#000000" visibility="visible"></path></g></g><g></g><g><g><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(368,237)" style="pointer-events: none;" visibility="visible"><tspan y="6" x="0">Lithuania: 43.77%</tspan></text><rect x="0.5" y="0.5" width="108" height="19" rx="0" ry="0" stroke-width="0" fill="#FFFFFF" stroke="#FFFFFF" fill-opacity="0.005" stroke-opacity="0.005" transform="translate(368,232)"></rect></g><g><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(183,302)" style="pointer-events: none;" visibility="visible"><tspan y="6" x="0">Ireland: 33.84%</tspan></text><rect x="0.5" y="0.5" width="97" height="19" rx="0" ry="0" stroke-width="0" fill="#FFFFFF" stroke="#FFFFFF" fill-opacity="0.005" stroke-opacity="0.005" transform="translate(91,297)"></rect></g><g><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(158,217)" style="pointer-events: none;" visibility="visible"><tspan y="6" x="0">Germany: 10.94%</tspan></text><rect x="0.5" y="0.5" width="108" height="19" rx="0" ry="0" stroke-width="0" fill="#FFFFFF" stroke="#FFFFFF" fill-opacity="0.005" stroke-opacity="0.005" transform="translate(54,212)"></rect></g><g><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(196,192)" style="pointer-events: none;" visibility="visible"><tspan y="6" x="0">Australia: 6.57%</tspan></text><rect x="0.5" y="0.5" width="100" height="19" rx="0" ry="0" stroke-width="0" fill="#FFFFFF" stroke="#FFFFFF" fill-opacity="0.005" stroke-opacity="0.005" transform="translate(101,186)"></rect></g><g><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(225,173)" style="pointer-events: none;" visibility="visible"><tspan y="6" x="0">UK: 3.20%</tspan></text><rect x="0.5" y="0.5" width="67" height="19" rx="0" ry="0" stroke-width="0" fill="#FFFFFF" stroke="#FFFFFF" fill-opacity="0.005" stroke-opacity="0.005" transform="translate(229,167)"></rect></g><g><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(240,153)" style="pointer-events: none;" visibility="visible"><tspan y="6" x="0">Latvia: 1.68%</tspan></text><rect x="0.5" y="0.5" width="84" height="19" rx="0" ry="0" stroke-width="0" fill="#FFFFFF" stroke="#FFFFFF" fill-opacity="0.005" stroke-opacity="0.005" transform="translate(244,148)"></rect></g></g><g></g><g></g><g></g><g></g><g><g></g></g><g></g><g></g><g></g></svg><a href="http://www.amcharts.com/javascript-charts/" title="JavaScript charts" style="position: absolute; text-decoration: none; color: rgb(0, 0, 0); font-family: Verdana; font-size: 11px; opacity: 0.7; display: block; left: 5px; top: 5px;">JS chart by amCharts</a></div></div></div>
                </div>
            </div>
        </div>


        <div class="col-md-6 col-sm-6">
            <div class="portlet light ">
                <div class="portlet-title">
                    <div class="caption caption-md">
                        <i class="icon-bar-chart font-dark hide"></i>
                        <span class="caption-subject font-dark bold uppercase">Last Five Transaction</span>

                    </div>

                </div>
                <div class="portlet-body">

                    <div class="table-scrollable table-scrollable-borderless">
                        <table class="table table-hover table-light">
                            <thead>
                                <tr class="uppercase">
                                    <th colspan="2">By </th>
                                    <th> Date </th>
                                    <th> Towards </th>
                                    <th> For </th>
                                    <th> Amount </th>
                                </tr>
                            </thead>
                            <tbody><tr>
                                <td class="fit">
                                    <img class="user-pic rounded" src="../assets/pages/media/users/avatar4.jpg"> </td>
                                <td>
                                    <a href="javascript:;" class="primary-link">Brain</a>
                                </td>
                                <td> $345 </td>
                                <td> 45 </td>
                                <td> 124 </td>
                                <td>
                                    <span class="bold theme-font">80%</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="fit">
                                    <img class="user-pic rounded" src="../assets/pages/media/users/avatar5.jpg"> </td>
                                <td>
                                    <a href="javascript:;" class="primary-link">Nick</a>
                                </td>
                                <td> $560 </td>
                                <td> 12 </td>
                                <td> 24 </td>
                                <td>
                                    <span class="bold theme-font">67%</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="fit">
                                    <img class="user-pic rounded" src="../assets/pages/media/users/avatar6.jpg"> </td>
                                <td>
                                    <a href="javascript:;" class="primary-link">Tim</a>
                                </td>
                                <td> $1,345 </td>
                                <td> 450 </td>
                                <td> 46 </td>
                                <td>
                                    <span class="bold theme-font">98%</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="fit">
                                    <img class="user-pic rounded" src="../assets/pages/media/users/avatar7.jpg"> </td>
                                <td>
                                    <a href="javascript:;" class="primary-link">Tom</a>
                                </td>
                                <td> $645 </td>
                                <td> 50 </td>
                                <td> 89 </td>
                                <td>
                                    <span class="bold theme-font">58%</span>
                                </td>
                            </tr>
                        </tbody></table>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="row">

        <div class="col-md-6 col-sm-6">
            <div class="portlet light portlet-fit ">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-directions font-green hide"></i>
                        <span class="caption-subject bold font-dark uppercase">Minutes of Meeting </span>
                    </div>
                    <div class="actions">
                        <div class="btn-group btn-group-devided" data-toggle="buttons">
                            <label class="btn green btn-outline btn-circle btn-sm active">
                                <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                            <label class="btn  green btn-outline btn-circle btn-sm">
                                <input type="radio" name="options" class="toggle" id="option2">Tools</label>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="cd-horizontal-timeline mt-timeline-horizontal loaded">
                        <div class="timeline mt-timeline-square">
                            <div class="events-wrapper">
                                <div class="events" style="width: 1800px;">
                                    <ol>
                                        <li>
                                            <a href="#0" data-date="16/01/2014" class="border-after-blue bg-after-blue selected" style="left: 120px;">Expo 2016</a>
                                        </li>
                                        <li>
                                            <a href="#0" data-date="28/02/2014" class="border-after-blue bg-after-blue" style="left: 300px;">New Promo</a>
                                        </li>
                                        <li>
                                            <a href="#0" data-date="20/04/2014" class="border-after-blue bg-after-blue" style="left: 480px;">Meeting</a>
                                        </li>
                                        <li>
                                            <a href="#0" data-date="20/05/2014" class="border-after-blue bg-after-blue" style="left: 600px;">Launch</a>
                                        </li>
                                        <li>
                                            <a href="#0" data-date="09/07/2014" class="border-after-blue bg-after-blue" style="left: 780px;">Party</a>
                                        </li>
                                        <li>
                                            <a href="#0" data-date="30/08/2014" class="border-after-blue bg-after-blue" style="left: 960px;">Reports</a>
                                        </li>
                                        <li>
                                            <a href="#0" data-date="15/09/2014" class="border-after-blue bg-after-blue" style="left: 1020px;">HR</a>
                                        </li>
                                        <li>
                                            <a href="#0" data-date="01/11/2014" class="border-after-blue bg-after-blue" style="left: 1200px;">IPO</a>
                                        </li>
                                        <li>
                                            <a href="#0" data-date="10/12/2014" class="border-after-blue bg-after-blue" style="left: 1380px;">Board</a>
                                        </li>
                                        <li>
                                            <a href="#0" data-date="19/01/2015" class="border-after-blue bg-after-blue" style="left: 1500px;">Revenue</a>
                                        </li>
                                        <li>
                                            <a href="#0" data-date="03/03/2015" class="border-after-blue bg-after-blue" style="left: 1680px;">Dinner</a>
                                        </li>
                                    </ol>
                                    <span class="filling-line bg-blue" aria-hidden="true" style="transform: scaleX(0.0839375);"></span>
                                </div>
                                <!-- .events -->
                            </div>
                            <!-- .events-wrapper -->
                            <ul class="cd-timeline-navigation mt-ht-nav-icon">
                                <li>
                                    <a href="#0" class="prev inactive btn blue md-skip">
                                        <i class="fa fa-chevron-left"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="next btn blue md-skip">
                                        <i class="fa fa-chevron-right"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- .cd-timeline-navigation -->
                        </div>
                        <!-- .timeline -->
                        <div class="events-content">
                            <ol>
                                <li class="selected" data-date="16/01/2014">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Expo 2016 Launch</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_2.jpg">
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Lisa Bold</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">23 February 2014</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod mi felis, aliquam at iaculis eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis mi felis, aliquam
                                            at iaculis eu, onsectetur adipiscing elit finibus eu ex. Integer efficitur leo eget dolor tincidunt, et dignissim risus lacinia. Nam in egestas onsectetur adipiscing elit nunc. Suspendisse
                                            potenti</p>
                                        <a href="javascript:;" class="btn btn-circle dark btn-outline">Read More</a>
                                        <a href="javascript:;" class="btn btn-circle btn-icon-only green pull-right">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </div>
                                </li>
                                <li data-date="28/02/2014">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Sending Shipment</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_3.jpg">
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Hugh Grant</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">28 February 2014 : 10:15 AM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo
                                            eget dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                            odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                            dignissim luctus risus sed sodales.</p>
                                        <a href="javascript:;" class="btn btn-circle btn-outline green-jungle">Download Shipment List</a>
                                        <div class="btn-group dropup pull-right">
                                            <button class="btn btn-circle blue-steel dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="false"> Actions
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                                <li>
                                                    <a href="javascript:;">Action </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">Another action </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">Something else here </a>
                                                </li>
                                                <li class="divider"> </li>
                                                <li>
                                                    <a href="javascript:;">Separated link </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li data-date="20/04/2014">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Blue Chambray</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_1.jpg">
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue">Rory Matthew</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">20 April 2014 : 10:45 PM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo
                                            eget dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                            odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                            dignissim luctus risus sed sodales.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus
                                            veritatis qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                        <a href="javascript:;" class="btn btn-circle red">Read More</a>
                                    </div>
                                </li>
                                <li data-date="20/05/2014">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Timeline Received</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_2.jpg">
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">20 May 2014 : 12:20 PM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo
                                            eget dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                            odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                            dignissim luctus risus sed sodales.</p>
                                        <a href="javascript:;" class="btn btn-circle green-turquoise">Read More</a>
                                    </div>
                                </li>
                                <li data-date="09/07/2014">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Event Success</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_1.jpg">
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Matt Goldman</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">9 July 2014 : 8:15 PM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde.</p>
                                        <a href="javascript:;" class="btn btn-circle btn-outline purple-medium">View Summary</a>
                                        <div class="btn-group dropup pull-right">
                                            <button class="btn btn-circle green dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="false"> Actions
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                                <li>
                                                    <a href="javascript:;">Action </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">Another action </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">Something else here </a>
                                                </li>
                                                <li class="divider"> </li>
                                                <li>
                                                    <a href="javascript:;">Separated link </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li data-date="30/08/2014">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Conference Call</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_1.jpg">
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Rory Matthew</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">30 August 2014 : 5:45 PM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <img class="timeline-body-img pull-left" src="../assets/pages/media/blog/5.jpg" alt="">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus
                                            veritatis qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus
                                            veritatis qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus
                                            veritatis qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                        <a href="javascript:;" class="btn btn-circle red">Read More</a>
                                    </div>
                                </li>
                                <li data-date="15/09/2014">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Conference Decision</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_5.jpg">
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Jessica Wolf</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">15 September 2014 : 8:30 PM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <img class="timeline-body-img pull-right" src="../assets/pages/media/blog/6.jpg" alt="">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus
                                            veritatis qui ut.</p>
                                        <a href="javascript:;" class="btn btn-circle green-sharp">Read More</a>
                                    </div>
                                </li>
                                <li data-date="01/11/2014">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Timeline Received</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_2.jpg">
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">1 November 2014 : 12:20 PM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo
                                            eget dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                            odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                            dignissim luctus risus sed sodales.</p>
                                        <a href="javascript:;" class="btn btn-circle green-turquoise">Read More</a>
                                    </div>
                                </li>
                                <li data-date="10/12/2014">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Timeline Received</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_2.jpg">
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">10 December 2014 : 12:20 PM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo
                                            eget dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                            odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                            dignissim luctus risus sed sodales.</p>
                                        <a href="javascript:;" class="btn btn-circle green-turquoise">Read More</a>
                                    </div>
                                </li>
                                <li data-date="19/01/2015">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Timeline Received</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_2.jpg">
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">19 January 2015 : 12:20 PM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo
                                            eget dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                            odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                            dignissim luctus risus sed sodales.</p>
                                        <a href="javascript:;" class="btn btn-circle green-turquoise">Read More</a>
                                    </div>
                                </li>
                                <li data-date="03/03/2015">
                                    <div class="mt-title">
                                        <h2 class="mt-content-title">Timeline Received</h2>
                                    </div>
                                    <div class="mt-author">
                                        <div class="mt-avatar">
                                            <img src="../assets/pages/media/users/avatar80_2.jpg">
                                        </div>
                                        <div class="mt-author-name">
                                            <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                        </div>
                                        <div class="mt-author-datetime font-grey-mint">3 March 2015 : 12:20 PM</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-content border-grey-steel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo
                                            eget dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                            odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                            dignissim luctus risus sed sodales.</p>
                                        <a href="javascript:;" class="btn btn-circle green-turquoise">Read More</a>
                                    </div>
                                </li>
                            </ol>
                        </div>
                        <!-- .events-content -->
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-6 col-sm-6">
            <div class="portlet light ">
                <div class="portlet-title">
                    <div class="caption caption-md">
                        <i class="icon-bar-chart font-dark hide"></i>
                        <span class="caption-subject font-dark bold uppercase">Member Activity</span>
                        <span class="caption-helper">weekly stats...</span>
                    </div>
                    <div class="actions">
                        <div class="btn-group btn-group-devided" data-toggle="buttons">
                            <label class="btn btn-transparent green btn-outline btn-circle btn-sm active">
                                <input type="radio" name="options" class="toggle" id="option1">Today</label>
                            <label class="btn btn-transparent green btn-outline btn-circle btn-sm">
                                <input type="radio" name="options" class="toggle" id="option2">Week</label>
                            <label class="btn btn-transparent green btn-outline btn-circle btn-sm">
                                <input type="radio" name="options" class="toggle" id="option2">Month</label>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="row number-stats margin-bottom-30">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="stat-left">
                                <div class="stat-chart">
                                    <!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
                                    <div id="sparkline_bar"><canvas width="113" height="55" style="display: inline-block; width: 113px; height: 55px; vertical-align: top;"></canvas></div>
                                </div>
                                <div class="stat-number">
                                    <div class="title"> Total </div>
                                    <div class="number"> 2460 </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="stat-right">
                                <div class="stat-chart">
                                    <!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
                                    <div id="sparkline_bar2"><canvas width="107" height="55" style="display: inline-block; width: 107px; height: 55px; vertical-align: top;"></canvas></div>
                                </div>
                                <div class="stat-number">
                                    <div class="title"> New </div>
                                    <div class="number"> 719 </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-scrollable table-scrollable-borderless">
                        <table class="table table-hover table-light">
                            <thead>
                                <tr class="uppercase">
                                    <th colspan="2"> MEMBER </th>
                                    <th> Earnings </th>
                                    <th> CASES </th>
                                    <th> CLOSED </th>
                                    <th> RATE </th>
                                </tr>
                            </thead>
                            <tbody><tr>
                                <td class="fit">
                                    <img class="user-pic rounded" src="../assets/pages/media/users/avatar4.jpg"> </td>
                                <td>
                                    <a href="javascript:;" class="primary-link">Brain</a>
                                </td>
                                <td> $345 </td>
                                <td> 45 </td>
                                <td> 124 </td>
                                <td>
                                    <span class="bold theme-font">80%</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="fit">
                                    <img class="user-pic rounded" src="../assets/pages/media/users/avatar5.jpg"> </td>
                                <td>
                                    <a href="javascript:;" class="primary-link">Nick</a>
                                </td>
                                <td> $560 </td>
                                <td> 12 </td>
                                <td> 24 </td>
                                <td>
                                    <span class="bold theme-font">67%</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="fit">
                                    <img class="user-pic rounded" src="../assets/pages/media/users/avatar6.jpg"> </td>
                                <td>
                                    <a href="javascript:;" class="primary-link">Tim</a>
                                </td>
                                <td> $1,345 </td>
                                <td> 450 </td>
                                <td> 46 </td>
                                <td>
                                    <span class="bold theme-font">98%</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="fit">
                                    <img class="user-pic rounded" src="../assets/pages/media/users/avatar7.jpg"> </td>
                                <td>
                                    <a href="javascript:;" class="primary-link">Tom</a>
                                </td>
                                <td> $645 </td>
                                <td> 50 </td>
                                <td> 89 </td>
                                <td>
                                    <span class="bold theme-font">58%</span>
                                </td>
                            </tr>
                        </tbody></table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>


    <!-- END PAGE CONTENT BODY -->
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
@endsection

@section('custom_scripts')

@stop
