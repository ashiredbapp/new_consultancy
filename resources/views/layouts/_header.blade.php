       <div class="page-header">
           <!-- BEGIN HEADER TOP -->
           <div class="page-header-top">
               <div class="container">
                   <!-- BEGIN LOGO -->
                   <div class="page-logo">
                       <a href="{{url('/home')}}">
                           <img src="{{ asset('assets/legend_foundation_logo_icon.png') }}" width="20%" alt="logo"
                               class="logo-default">
                       </a>
                   </div>
                   <!-- END LOGO -->
                   <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                   <a href="javascript:;" class="menu-toggler"></a>
                   <!-- END RESPONSIVE MENU TOGGLER -->
                   <!-- BEGIN TOP NAVIGATION MENU -->
                   <div class="top-menu">
                       <ul class="nav navbar-nav pull-right">
                           <!-- BEGIN USER LOGIN DROPDOWN -->
                           <li class="dropdown dropdown-user dropdown-dark">
                               <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"
                                   data-hover="dropdown" data-close-others="true">
                                   @auth
                                   @if( Auth::user()->photo )
                                   <img width="45px" alt="" class="img-circle"
                                       src="{{ url('uploads/users/'.Auth::user()->photo) }}">
                                   @else
                                   @if( Auth::user()->gender === 'Male' )
                                   <img alt="" class="img-circle"
                                       src="{{ asset('assets/layouts/layout3/img/male.png') }}">
                                   @else
                                   <img alt="" class="img-circle"
                                       src="{{ asset('assets/layouts/layout3/img/female.png') }}">
                                   @endif
                                   @endif
                                   <span
                                       class="username username-hide-mobile">{{ Auth::user()->name??Auth::user()->email }}</span>
                                   @endauth
                                   @guest
                                   <img alt="" class="img-circle"
                                       src="{{ asset('assets/layouts/layout3/img/male.png') }}">
                                   <span class="username username-hide-mobile">Guest</span>
                                   @endguest
                               </a>
                               <ul class="dropdown-menu dropdown-menu-default">
                                   <li>
                                       <a href="{{('user-profile')}}">
                                           <i class="icon-user"></i> My Profile </a>
                                   </li>
                                   <!-- <li>
                                       <a data-toggle="modal" href="#change_password">
                                           <i class="icon-energy font-green-jungle"></i> Change Password </a>
                                   </li> -->
                                   <li>
                                       <a href="#" onclick="event.preventDefault(); $('#logout-form').submit();">
                                           <i class="icon-key"></i>
                                           Logout
                                        </a>
                                        <form id="logout-form" action="{{  ('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                        </form>
                                   </li>
                               </ul>
                           </li>
                           <!-- END USER LOGIN DROPDOWN -->
                       </ul>
                   </div>
                   <!-- END TOP NAVIGATION MENU -->
               </div>
           </div>
           <!-- END HEADER TOP -->
           <!-- BEGIN HEADER MENU -->

           <div class="page-header-menu">
               <div class="container">
                   <!-- BEGIN MEGA MENU -->
                   <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
                   <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
                   <div class="hor-menu  ">

                       <ul class="nav navbar-nav">
                           <li class="menu-dropdown classic-menu-dropdown">
                               <a href="{{ ('home')}}">
                                   <i class="fa fa-home" style="font-size:28px"></i>
                                   <span class="arrow"></span>
                               </a>
                           </li>
                           <li class="menu-dropdown classic-menu-dropdown">

                                <a href="index.php" class="nav-link ">
                                    <b> Apartment</b>
                                   <span class="arrow"></span>
                               </a>

                           </li>
                           <li class="menu-dropdown classic-menu-dropdown">
                               <a><b> Flat's</b>
                                   <span class="arrow"></span>
                               </a>

                           </li>

                           <li class="menu-dropdown classic-menu-dropdown">
                               <a><b>Accounts</b>
                                   <span class="arrow"></span>
                               </a>

                           </li>
                           <li class="menu-dropdown classic-menu-dropdown">
                               <a><b>Helpline No's</b>
                                   <span class="arrow"></span>
                               </a>

                           </li>
                           <li class="menu-dropdown classic-menu-dropdown">
                               <a><b>MOM</b>
                                   <span class="arrow"></span>
                               </a>

                           </li>
                           <li class="menu-dropdown classic-menu-dropdown">
                               <a href="{{ ('upcoming-enhancement.index')}}" class="nav-link bold">
                                   Shopping
                               </a>
                           </li>
                           <li class="menu-dropdown classic-menu-dropdown">
                            <a href="{{ route('user') }}"><b>Users</b>
                                <span class="arrow"></span>
                            </a>

                        </li>

                       </ul>
                   </div>
                   <!-- END MEGA MENU -->
               </div>
           </div>
           <!-- END HEADER MENU -->
       </div>
       <!-- END HEADER -->
