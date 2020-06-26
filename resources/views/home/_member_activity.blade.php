<div class="portlet light ">
    <div class="portlet-title">
        <div class="caption caption-md">
            <i class="icon-bar-chart font-dark hide"></i>
            <span class="caption-subject font-green bold uppercase">Member Activity</span>
            <span class="caption-helper">Sprint stats...</span>
        </div>
    </div>
    <div class="portlet-body">
        <div class="row number-stats margin-bottom-30">
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="stat-left">
                    <div class="stat-chart">
                        <!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
                        <div id="sparkline_bar">
                            <canvas width="113" height="55" style="display: inline-block; width: 113px; height: 55px; vertical-align: top;">
                            </canvas>
                        </div>
                    </div>
                    <div class="stat-number">
                        <div class="title"> Total Estimate </div>
                        <div class="number"> {{$totalEstimate}} </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="stat-right">
                    <div class="stat-chart">
                        <!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
                        <div id="sparkline_bar2">
                            <canvas width="107" height="55" style="display: inline-block; width: 107px; height: 55px; vertical-align: top;">
                            </canvas>
                        </div>
                    </div>
                    <div class="stat-number">
                        <div class="title"> Burndown </div>
                        <div class="number"> {{$totalBurndown}} </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-scrollable table-scrollable-borderless">
            <table class="table table-hover table-light">
                <thead>
                    <tr class="uppercase">
                        <th colspan="2"> MEMBER </th>
                        <th> Tasks Assigned</th>
                        <th> Size </th>
                        <th> Completed </th>
                        <th> Size </th>
                        <th> Percentage </th>
                    </tr>
                </thead>
                <tbody> 
                    @foreach($data as $thisData) 
                        @foreach($users as $user) 
                        @php 
                            $number = ($thisData['completed_count']/$thisData['count']) * 100; 
                        @endphp 
                    <tr> 
                        @if($user->id == $thisData['user_id']) 
                        <td class="fit">
                            <?php 
                                if($user->photo=='') 
                                    $photo='uploads/users/'.$user->gender.".png"; 
                                else 
                                    $photo='uploads/users/'.$user->photo; 
                            ?>
                            <img class="user-pic rounded" src="{{asset($photo)}}">
                        </td>
                        <td>
                            <a href="javascript:;" class="primary-link">{{$user->name}}</a>
                        </td>
                        <td>{{$thisData['count']}}</td>
                        <td> {{$thisData['size']}} </td>
                        <td> {{$thisData['completed_count']}} </td>
                        <td> {{$thisData['completed_size']}} </td>
                        <td> <span class="bold theme-font">{{number_format((float)$number, 2, '.', '')}}%</span> </td> 
                        @endif 
                    </tr> 
                    @endforeach 
                @endforeach 
                </tbody>
            </table>
        </div>
    </div>
</div>
