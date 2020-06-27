<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>{{env('APP_NAME')}}</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="{{ asset('assets1/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets1/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets1/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets1/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{ asset('assets1/global/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets1/global/plugins/select2/css/select2-bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        @yield('header_styles')
        @stack('page_styles')

        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{ asset('assets1/global/css/components.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{ asset('assets1/global/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets1/global/plugins/bootstrap-toastr/toastr.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="{{ asset('assets1/layouts/layout3/css/layout.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets1/layouts/layout3/css/themes/default.min.css') }}" rel="stylesheet" type="text/css" id="style_color" />
        <link href="{{ asset('assets1/layouts/layout3/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="{{ asset('legend_foundation_logo_icon.png') }}" />
    </head>
    <!-- END HEAD -->

       @if(\Request::route()->getName() !='epic.360')
    <body class="page-container-bg-solid">
        @else
    <body class="page-container-bg-solid page-header-top-fixed">
        @endif
        @include('layouts._header')
                <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
              @yield('content')
            </div>
            <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTAINER -->
        @include('layouts._footer')
        <!--[if lt IE 9]>
        <script src="{{ asset('assets1/global/plugins/respond.min.js') }}"></script>
        <script src="{{ asset('assets1/global/plugins/excanvas.min.js') }}"></script>
        <![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="{{ asset('assets1/global/plugins/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('assets1/global/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets1/global/plugins/js.cookie.min.js') }}"></script>
        <script src="{{ asset('assets1/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}"></script>
        <script src="{{ asset('assets1/global/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('assets1/global/plugins/jquery.blockui.min.js') }}"></script>
        <script src="{{ asset('assets1/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{ asset('assets1/global/plugins/select2/js/select2.full.min.js') }}"></script>
        @yield('page_scripts')
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="{{ asset('assets1/global/plugins/moment.min.js') }}"></script>
        <script src="{{ asset('assets1/global/plugins/bootstrap-toastr/toastr.min.js') }}"></script>
        <script src="{{ asset('assets1/global/scripts/app.min.js') }}"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        @yield('custom_scripts')
        @yield('custom_scripts1')
        <script>
        $(document).ready(function(){
          $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
          $('form').find('select').select2();
          $('.page-title').hide();
          @if(session()->has('welcome'))
          toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-center",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "3000",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
          }
          toastr["info"]("{{ session('welcome') }}", "Welcome")
          @endif
          @if(session()->has('success'))
          toastr.success("{{ session('success') }}", "Success")
          @endif
        });
    $(".export_link").on("click",function() {
        var table = $('#'+$(this).data('id')).DataTable();
        var count = table.page.info().recordsDisplay;
        var limit = parseInt("{{ config('global.excel_download_limit') }}");
        var url = $(this).attr("data-src");

        if (!count)
            toastr.error("Empty Data in Table");
        else if(count >= limit)
        {
            var dialog = bootbox.dialog({
                title: 'Only '+limit+' Latest Records Will be Downloaded to Continue Press Download Button',
                message: 'Direct Download for more than '+limit+' Records are Disabled Press Full Download Button to get Detailed Report',
                buttons: {
                    cancel: {
                        label: "Cancel",
                        className: 'btn-danger',
                        callback: function(){
                        }
                    },
                    noclose: {
                        label: "Download",
                        className: 'btn-info',
                        callback: function(){
                            $.redirect("{{ url('/excelDownload') }}?url=",{'url': url});
                            return true;
                        }
                    },
                    ok: {
                        label: "Full Download",
                        className: 'btn-warning',
                        callback: function(){
                            bootbox.confirm({
                                message: "<table><tr><td>Report Description:</td><td><input maxlength=40 class='input-large form-control' type='text' name='report_name'/></td></tr><tr><td colspan=2>&nbsp;</td></tr><tr><td>Email ID:</td><td><input maxlength=45 class='form-control' type='text' name='email_id'/></td></tr></table>",
                                callback: function (result) {
                                    if( result )
                                    {
                                        $.ajax({
                                            url: "{{ url('bulk-download-ui')}}",
                                            data:{
                                                'email'      : $('[name="email_id"]').val(),
                                                'description': $('[name="report_name"]').val(),
                                                'records'    : count,
                                                'sqlquery'   : url,
                                            },
                                            success:function(response)
                                            {
                                                if(response == 'success')
                                                    toastr.success('You Will Receive Downloaded Copy By Mail Shortly');
                                                else
                                                    toastr.error('Something went wrong...!');
                                            },
                                            error: function()
                                            {
                                                toastr.error('Something went wrong..!');
                                            }
                                        });
                                    }
                                    else
                                        toastr.error('Please Enter valid Email Address..!')
                                }.bind(this)
                            });
                        }
                    }
                }
            });
        }
        else
            $.redirect("{{ url('/excelDownload') }}?url=", {'url': url });
    });

    (function ($) {
      'use strict';
      $.redirect = function (url, values, method, target, traditional) {
        method = (method && ["GET", "POST", "PUT", "DELETE"].indexOf(method.toUpperCase()) !== -1) ? method.toUpperCase() : 'POST';

        url = url.split("#");
        var hash = url[1] ? ("#" + url[1]) : "";
        url = url[0];

        if (!values) {
          var obj = $.parseUrl(url);
          url = obj.url;
          values = obj.params;
        }

        var form = $('<form>')
        .attr("method", method)
        .attr("action", url + hash);

        var formInput = $('<input>')
        .attr("type","hidden")
        .attr("name","_token")
        .attr("value","{{ csrf_token() }}");

        if (target) {
          form.attr("target", target);
        }

        var submit = {}; //Create a symbol
        form[0][submit] = form[0].submit;
        iterateValues(values, [], form, null, traditional);
        $('body').append(form);
        $('form').append(formInput);
        form[0][submit]();
      };

      $.parseUrl = function (url) {

        if (url.indexOf('?') === -1) {
          return {
            url: url,
            params: {}
          };
        }
        var parts = url.split('?'),
        query_string = parts[1],
        elems = query_string.split('&');
        url = parts[0];

        var i, pair, obj = {};
        for (i = 0; i < elems.length; i+= 1) {
          pair = elems[i].split('=');
          obj[pair[0]] = pair[1];
        }

        return {
          url: url,
          params: obj
        };
      };

      var getInput = function (name, value, parent, array, traditional) {
        var parentString;
        if (parent.length > 0) {
          parentString = parent[0];
          var i;
          for (i = 1; i < parent.length; i += 1) {
            parentString += "[" + parent[i] + "]";
          }

          if (array) {
            if (traditional)
            name = parentString;
            else
            name = parentString + "[]";
          } else {
            name = parentString + "[" + name + "]";
          }
        }

        return $("<input>").attr("type", "hidden")
        .attr("name", name)
        .attr("value", value);
      };

      var iterateValues = function (values, parent, form, array, traditional) {
        var i, iterateParent = [];
        Object.keys(values).forEach(function(i) {
          if (typeof values[i] === "object") {
            iterateParent = parent.slice();
            if (array) {
              iterateParent.push('');
            } else {
              iterateParent.push(i);
            }
            iterateValues(values[i], iterateParent, form, Array.isArray(values[i]), traditional);
          } else {
            form.append(getInput(i, values[i], parent, array, traditional));
          }
        });
      };
    }(window.jQuery || window.Zepto || window.jqlite));

        </script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="{{ asset('assets1/layouts/layout3/scripts/layout.min.js') }}"></script>
        <script src="{{ asset('assets1/layouts/global/scripts/quick-sidebar.min.js') }}"></script>
        <script src="{{ asset('assets1/global/plugins/bootbox/bootbox.min.js') }}"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>
</html>
