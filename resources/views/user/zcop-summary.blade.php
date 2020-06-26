@extends('layouts.app')

@section('header_styles')

@stop

@section('content')
<div class="portlet-body">
    <div class="portlet-body">
        <div style="display:inline-block;margin-left:50px;">
            <h3><b> Zcop Summary </b></h3>
        </div>&nbsp;
        <div style="display:inline-block;margin-left:900px;" class="btn-group">
            <a class="btn blue btn-outline btn-circle btn-sm" href="javascript:;" data-toggle="dropdown"
                data-hover="dropdown" data-close-others="true"> Filter by Location
                <i class="fa fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu pull-right">
                <li class="choose_loc">
                    <a id="all" style="color:#0066A1;" href="javascript:;"> All </a>
                </li>
                @foreach($locations as $location)
                <li class="choose_loc">
                    <a data-value="{{$location->location_name}}" id="{{$location->id}}" style="color:#0066A1;" href="javascript:;"> {{$location->location_name}} </a>
                </li>
                @endforeach
            </ul>
        </div>
        <div id="head_info" style="display:none;margin-left:50px;"><b></b></div>
    </div>
    <div class="wrapper table-scrollable">
        <div id="table_div" class="table-responsive container-fluid">
            @include('user.zcop-summary-table')
        </div>
    </div>
</div>
@endsection
@section('custom_scripts')
<script>
    $('.choose_loc a').click(function(){
        $.ajax({ 
            type:'get',
            dataType: 'html',
            data: {
            selected_loc: $(this).attr('id'),
            },
            url: "{{ url('zcop-summary-table') }}",
            beforeSend: function (xhr) {
                App.blockUI({
                    target: '.container-fluid',
                    animate: true
                });
            }
        }).done(function (data) {
            $('#table_div').html(data);
        }).always(function () {
            App.unblockUI('.container-fluid');
            $('.popovers').popover();
      });
    });
</script>
@stop

