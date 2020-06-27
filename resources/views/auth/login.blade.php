<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />

    <title>
        {{env('APP_NAME')}}
    </title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="refresh" content="60" />

    <!-- Global Mandatory Styles -->
    <link href="{{ asset('assets1/layouts/layout/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets1/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets1/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets1/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets1/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- END Global Mandatory Styles -->

    <!-- Page Level Styles -->
    <link href="{{ asset('assets1/global/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets1/global/plugins/select2/css/select2-bootstrap.min.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- END Page Level Styles -->

    <!-- Theme Global Styles -->
    <link href="{{ asset('assets1/global/css/components.min.css') }}" rel="stylesheet" id="style_components"
        type="text/css" />
    <link href="{{ asset('assets1/global/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- END Theme Global Styles -->

    <!-- Page Level Styles -->
    <link href="{{ asset('assets1/pages/css/login-5.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- END Page Level Styles -->

    <!-- Custom Styles -->
    <link href="{{ asset('assets1/layouts/layout/css/custom.css') }}" rel="stylesheet" type="text/css" />
    <!-- End Custom Styles -->

    <link rel="shortcut icon" href="{{ asset('legend_foundation_logo_icon.png') }}" />

</head>
<!-- END HEAD -->

<body class=" login">
    <!-- BEGIN : LOGIN PAGE 5-1 -->
    <div class="user-login-5">
        <div class="row bs-reset">
            <div class="col-md-6 bs-reset">
                <div class="login-bg" style="background-image:url(assets1/images/human-hand.jpg)"></div>
            </div>
            <div class="col-md-6 login-container bs-reset">
                <img class="login-logo login-6" src="{{ asset('assets/images/logo.png') }}"
                    style="width: 200px;margin-top:2px;" />
                <div class="login-content">

                    <h1>Login</h1>
                    @if(session()->has('success'))
                    <div class="alert alert-success">
                        <h5>{{ session()->get('success') }}</h5>
                    </div>
                    {{session()->forget('success')}}
                    @endif
                    @if(session()->has('failure'))
                    <div class="alert alert-danger">
                        <h5>{{ session()->get('failure') }}</h5>
                    </div>
                    {{session()->forget('failure')}}
                    @endif

                    <!-- Form -->
                    <form class="login-form" autocomplete="off" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="alert alert-danger display-hide">
                            <button class="close" data-close="alert"></button>
                            <span>Enter email and password. </span>
                        </div>
                        @if ($errors->has('email') || $errors->has('password'))
                        <div class="alert alert-danger">
                            <button class="close" data-close="alert"></button>
                            <span>
                                {{ $errors->first('email') }} {{ $errors->first('password') }}
                            </span>
                        </div>
                        @endif

                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group form-md-line-input has-info">
                                    <div class="input-icon">
                                        <input style="padding-left: 34px;" id="email" type="text" name="email"
                                            value="{{ old('email') }}"
                                            class="form-control form-control-solid form-group" placeholder="Username"
                                            required />
                                        <div class="form-control-focus"> </div>
                                        <i class="fa fa-user"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-6">
                                <div class="form-group form-md-line-input has-info">
                                    <div class="input-icon right">
                                        <input id="password" type="password" name="password"
                                            class="form-control form-control-solid form-group" placeholder="Password"
                                            required />
                                        <div class="form-control-focus"> </div>
                                        <i class="fa fa-key"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 text-right">
                                <div class="forgot-password">
                                    <a href="javascript:;" id="forget-password" class="forget-password">Forgot
                                        Password?</a>
                                </div>
                                <button class="btn green" type="submit">Sign In</button>
                            </div>
                        </div>
                    </form>


                    <!-- BEGIN FORGOT PASSWORD FORM -->
                    <form class="forget-form" method="POST" autocomplete="off" style="display:none;" action="{{ url('user-reset-password') }}">
                        @csrf

                        <h3 class="font-green">Forgot Password ?</h3>
                        <p style="margin:15px 0 5px 0;"> Enter your email below to reset your password. </p>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="forget_email" type="text" class="form-control form-control-solid form-group"
                                placeholder="Enter your Email" name="email" value="{{ old('email') }}" required />
                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong style="font-weight: 500;font-size: 12px;">{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-actions">
                            <button type="button" id="back-btn" class="btn green btn-outline">Back</button>
                            <button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
                        </div>
                    </form>
                    <!-- END Form -->

                    <div class="margin-top-60 block-quote">
                        <hr>
                        <h4 class="block">Quote for the day!</h4>
                        <p>
                            <i class="fa fa-quote-left left-quote"></i>
                            @php
                            $quote=Util::quoteForTheDay(rand(1,10));
                            @endphp
                            <font color=#FF1493><b>{{ $quote['quote']}}</b></font>
                            <i class="fa fa-quote-right right-quote"></i>
                            <span class="text-right">
                                <font color=black><b> {{ $quote['author']}}</b></font>
                            </span>
                        </p>
                    </div>
                </div>

                <div class="login-footer">
                    <div class="row bs-reset">
                        <div class="col-xs-5 bs-reset">
                            <div class="login-copyright text-right">
                                <p>{{\Carbon\Carbon::today(session('user_zone'))->format('Y')}} &copy; {{  config('app.name')}}</p>
                            </div>
                        </div>
                        <div class="col-xs-7 bs-reset">
                            <div class="login-copyright text-right">
                                <p>All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END : LOGIN PAGE 5-1 -->

    <!--[if lt IE 9]>
          <script src="{{ asset('assets1/global/plugins/respond.min.js') }}"></script>
          <script src="{{ asset('assets1/global/plugins/excanvas.min.js') }}"></script>
          <script src="{{ asset('assets1/global/plugins/ie8.fix.min.js') }}"></script>
          <![endif]-->

    <!-- Core Plugins -->
    <script src="{{ asset('assets1/global/plugins/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets1/global/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets1/global/plugins/js.cookie.min.js') }}"></script>
    <script src="{{ asset('assets1/global/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('assets1/global/plugins/jquery.blockui.min.js') }}"></script>
    <script src="{{ asset('assets1/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
    <!-- END Core Plugins -->

    <!-- Page level Plugins -->
    <script src="{{ asset('assets1/global/plugins/jquery-validation/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets1/global/plugins/jquery-validation/js/additional-methods.min.js') }}"></script>
    <script src="{{ asset('assets1/global/plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets1/global/plugins/backstretch/jquery.backstretch.min.js') }}"></script>
    <!-- END Page level Plugins -->

    <!-- Theme Global Scripts -->
    <script src="{{ asset('assets1/global/scripts/app.min.js') }}"></script>
    <!-- END Theme Global Scripts -->

    <!-- Page Level Scripts -->
    <script src="{{ asset('assets1/pages/scripts/login-5.js') }}"></script>
    <!-- END Page Level Scripts -->
</body>
</html>
