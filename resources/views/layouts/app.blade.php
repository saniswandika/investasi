<!-- =========================================================
* Argon Dashboard PRO v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard-pro
* Copyright 2019 Creative Tim (https://www.creative-tim.com)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Vaganza CMS - @yield('title')</title>
    <!-- Favicon -->
    <link rel="icon" href="{{url('')}}/img/icon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{url('')}}/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="{{url('')}}/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Page plugins -->

@yield('top-content')

<!-- Argon CSS -->
    <link rel="stylesheet" href="{{url('')}}/css/argon.css?v=1.1.0" type="text/css">

</head>

<body>
@include('sweetalert::alert')
<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header d-flex align-items-center">
            <a class="navbar-brand" href="{{url('')}}">
                <div class="d-flex align-content-center">
                    <img src="{{url('img/logo-west-java-investment@2x.png')}}" class="mr-2" style="width: 130px; height: auto">
                </div>
            </a>
            <div class="ml-auto">
                <!-- Sidenav toggler -->
                <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link @if(Request::segment(1) === 'home') active @endif" href="{{route('home')}}">
                            <i class="ni ni-shop text-primary"></i>
                            <span class="nav-link-text">Dashboards</span>
                        </a>
                    </li>
                    @if(Auth::user()->role == 'user dinas')
                        <li class="nav-item">
                            <a class="nav-link @if(Request::segment(1) === 'investasi') active @endif" href="{{route('investasi.index')}}">
                                <i class="ni ni-send text-orange"></i>
                                <span class="nav-link-text">Peluang Investasi</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link @if(Request::segment(1) === 'industri') active @endif" href="{{route('industri.index')}}">
                                <i class="ni ni-box-2 text-primary"></i>
                                <span class="nav-link-text">Industri</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link @if(Request::segment(1) === 'publikasi') active @endif" href="{{route('publikasi.index')}}">
                                <i class="ni ni-chat-round text-yellow"></i>
                                <span class="nav-link-text">Publikasi</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link @if(Request::segment(1) === 'fintech') active @endif" href="{{route('fintech.index')}}">
                                <i class="ni ni-credit-card text-blue"></i>
                                <span class="nav-link-text">Fintech</span>
                            </a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link @if(Request::segment(2) === 'users') active @endif" href="#navbar-examples" data-toggle="collapse" role="button"
                               aria-expanded="false" aria-controls="navbar-examples">
                                <i class="ni ni-circle-08 text-orange"></i>
                                <span class="nav-link-text">Users</span>
                            </a>
                            <div class="collapse" id="navbar-examples">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{route('users.index')}}" class="nav-link">User List</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('users.create')}}" class="nav-link">Add User</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link @if(Request::segment(1) === 'investasi') active @endif" href="{{route('investasi.index')}}">
                                <i class="ni ni-send text-orange"></i>
                                <span class="nav-link-text">Peluang Investasi</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link @if(Request::segment(1) === 'WJIS Registration') active @endif" href="{{route('wjisRegistration.index')}}">
                                <i class="ni ni-single-02"></i>
                                <span class="nav-link-text">WJIS Registration</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link @if(Request::segment(1) === 'Why Invest') active @endif" href="{{route('whyinvest.index')}}">
                                <i class="ni ni-money-coins text-green"></i>
                                <span class="nav-link-text">Why Invest</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link @if(Request::segment(1) === 'westjavasectormanagement') active @endif" href="{{route('westjavasectormanagement.index')}}">
                                <i class="ni ni-shop text-blue"></i>
                                <span class="nav-link-text">West Java Sector Management</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(Request::segment(1) === 'agenda') active @endif" href="{{route('agenda.index')}}">
                                <i class="ni ni-watch-time text-red"></i>
                                <span class="nav-link-text">Agenda</span>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link @if(Request::segment(1) === 'EconomyGraphic') active @endif" href="{{route('economyGraphic.index')}}">
                                <i class="ni ni-chart-bar-32 text-green"></i>
                                <span class="nav-link-text">Economy Graphic</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link @if(Request::segment(1) === 'EconomyStatistic') active @endif" href="{{route('economyStatistic.index')}}">
                                <i class="ni ni-chart-pie-35 text-primary"></i>
                                <span class="nav-link-text">Economy Statistic</span>
                            </a>
                        </li>

                        <!-- <li class="nav-item">
                            <a class="nav-link @if(Request::segment(1) === 'userdinas') active @endif" href="{{route('userdinas.index')}}">
                                <i class="ni ni-briefcase-24 text-yellow"></i>
                                <span class="nav-link-text">User Dinas</span>
                            </a>
                        </li> -->

                        <li class="nav-item">
                            <a class="nav-link @if(Request::segment(1) === 'profile') active @endif" href="{{route('profile.index')}}">
                                <i class="ni ni-square-pin text-orange"></i>
                                <span class="nav-link-text">Region (Kab Kota)</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link @if(Request::segment(1) === 'memberusaha') active @endif" href="{{route('memberusaha.index')}}">
                                <i class="ni ni-badge text-primary"></i>
                                <span class="nav-link-text">Pelaku Usaha</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link @if(Request::segment(1) === 'industri') active @endif" href="#navbar-industri" data-toggle="collapse" role="button"
                               aria-expanded="false" aria-controls="navbar-industri">
                                <i class="ni ni-box-2 text-primary"></i>
                                <span class="nav-link-text">Industri</span>
                            </a>
                            <div class="collapse" id="navbar-industri">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{route('industri.index')}}" class="nav-link">Daftar Industri</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('industri-new.index')}}" class="nav-link">New Industrial Zone</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link @if(Request::segment(1) === 'infrastructure') active @endif" href="{{route('infrastructure.index')}}">
                                <i class="ni ni-building text-success"></i>
                                <span class="nav-link-text">Infrastruktur</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link @if(Request::segment(1) === 'artikel') active @endif" href="{{route('artikel.index')}}">
                                <i class="ni ni-archive-2 text-blue"></i>
                                <span class="nav-link-text">Artikel</span>
                            </a>
                        </li>

                        
                        <li class="nav-item">
                            <a class="nav-link @if(Request::segment(1) === 'homepage') active @endif" href="{{route('homepage.index')}}">
                                <i class="ni ni-shop text-green"></i>
                                <span class="nav-link-text">Homepage</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link @if(Request::segment(1) === 'banner') active @endif" href="{{route('banner.index')}}">
                                <i class="ni ni-ungroup text-red"></i>
                                <span class="nav-link-text">Banner</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link @if(Request::segment(1) === 'publikasi') active @endif" href="{{route('publikasi.index')}}">
                                <i class="ni ni-chat-round text-yellow"></i>
                                <span class="nav-link-text">Presentation Book</span>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link @if(Request::segment(1) === 'fintech') active @endif" href="{{route('fintech.index')}}">
                                <i class="ni ni-credit-card text-blue"></i>
                                <span class="nav-link-text">Fintech</span>
                            </a>
                        </li> -->

                        <li class="nav-item">
                            <a class="nav-link @if(Request::segment(1) === 'comodities') active @endif" href="#navbar-comodities" data-toggle="collapse" role="button"
                               aria-expanded="false" aria-controls="navbar-comodities">
                                <i class="ni ni-planet text-primary"></i>
                                <span class="nav-link-text">Trading Commodities</span>
                            </a>
                            <div class="collapse" id="navbar-comodities">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{route('comodities.index')}}" class="nav-link">Commodities</a>
                                    </li>
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#" class="nav-link">Commodities Company</a>--}}
{{--                                    </li>--}}
                                </ul>
                            </div>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link @if(Request::segment(1) === 'tourism') active @endif" href="{{route('tourism.index')}}">
                                <i class="ni ni-spaceship text-green"></i>
                                <span class="nav-link-text">Tourism</span>
                            </a>
                        </li> -->
                        <!-- <li class="nav-item">
                            <a class="nav-link @if(Request::segment(2) === 'newsletter') active @endif" href="{{route('backend.newsletter.index')}}">
                                <i class="ni ni-email-83 text-red"></i>
                                <span class="nav-link-text">Newsletter</span>
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link @if(Request::segment(1) === 'settings') active @endif" href="{{route('settings')}}">
                                <i class="ni ni-ui-04 text-warning"></i>
                                <span class="nav-link-text">Settings</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link @if(Request::segment(1) === 'files') active @endif" href="{{route('filemanager')}}">
                                <i class="ni ni-folder-17 text-success"></i>
                                <span class="nav-link-text">Filemanager</span>
                            </a>
                        </li>

                       
                    @endif
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- Main content -->
<div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-default border-bottom">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Navbar links -->
                <ul class="navbar-nav align-items-center ml-md-auto">
                    <li class="nav-item d-xl-none">
                        <!-- Sidenav toggler -->
                        <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin"
                             data-target="#sidenav-main">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav align-items-center ml-auto ml-md-0">
                    @guest
                        <li class="nav-item d-none d-lg-block ml-lg-4">
                            <a href="{{url('login')}}" class="btn btn-neutral btn-icon">
               <span class="btn-inner--icon">
                 <i class="fas fa-lock mr-2"></i>
               </span>
                                <span class="nav-link-inner--text">{{__('Login')}}</span>
                            </a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="btn btn-default" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                <div class="media align-items-center">
                                  <span class="avatar avatar-sm rounded-circle">
                                    <img alt="Image placeholder"
                                         src="@if (empty(Auth::user()->photo))
                                         {{url('https://ui-avatars.com/api/?name=')}}{{Auth::user()->name}}
                                         @else
                                         {{url('')}}/users/{{Auth::user()->photo}}
                                         @endif">
                                  </span>
                                    <div class="media-body  ml-2  d-none d-lg-block">
                                        <span class="mb-0 text-sm  font-weight-bold">{{ Auth::user()->name }}</span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu  dropdown-menu-right ">
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Hello {{ Auth::user()->name }}!</h6>
                                </div>
                                <a href="{{route('home')}}" class="dropdown-item">{{__('Dashboard')}}</a>
                                <a href="{{route('users.show',['id'=>Auth::user()->id])}}" class="dropdown-item">{{__('Profile')}}</a>
                                <a href="#" class="dropdown-item">{{__('Settings')}}</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-default pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">@yield('title')</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif

                @yield('head-content')

            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">

    @yield('content')

    <!-- Footer -->
        <footer class="footer pt-0">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6">
                    <div class="copyright text-center text-lg-left text-muted">
                        &copy; 2020 <a href="https://www.vaganza.co.id" class="font-weight-bold ml-1"
                                       target="_blank">Vaganza Digital</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<!-- Argon Scripts -->
<!-- Core -->
<script src="{{url('')}}/vendor/jquery/dist/jquery.min.js"></script>
<script src="{{url('')}}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{url('')}}/vendor/js-cookie/js.cookie.js"></script>
<script src="{{url('')}}/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="{{url('')}}/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
<!-- Optional JS -->
<script src="{{url('')}}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{url('')}}/vendor/chart.js/dist/Chart.extension.js"></script>

@yield('bottom-content')

<!-- Argon JS -->
<script src="{{url('')}}/js/argon.js?v=1.1.0"></script>
</body>

</html>