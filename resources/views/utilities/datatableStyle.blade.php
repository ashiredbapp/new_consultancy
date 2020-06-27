@section('header_styles')

@parent
  <link href="{{ asset('assets1/global/plugins/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('assets1/global/plugins/jquery-multi-select/css/multi-select.css') }}" rel="stylesheet" type="text/css"/>
  <style>
  .pagination>li>a {
    float: none !important ;
  }
  </style>
@stop
