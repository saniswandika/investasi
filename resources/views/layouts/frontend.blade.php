<!doctype html>
<html lang="en">

<head>
    <!--

      __     ___    ____    _    _   _ _____   _
      \ \   / / \  / ___|  / \  | \ | |__  /  / \
       \ \ / / _ \| |  _  / _ \ |  \| | / /  / _ \
        \ V / ___ \ |_| |/ ___ \| |\  |/ /_ / ___ \
       __\_/_/_ _\_\____/_/___\_\_| \_/____/_/   \_\
      |  _ \_ _/ ___|_ _|_   _|/ \  | |
      | | | | | |  _ | |  | | / _ \ | |
      | |_| | | |_| || |  | |/ ___ \| |___
      |____/___\____|___| |_/_/   \_\_____|

      Created 2019 by Vaganza Digital
      www.vaganza.co.id


            -->
    <title>West Java Investment Partnership</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Icons -->
    <link href="{{ url('') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link
        href="{{ url('') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

    <link rel="icon" href="{{ url('') }}/img/investasi-favicon.png" type="image/png">

    <link rel="stylesheet" href="{{ url('') }}/old-assets/frontend/css/style.css">

    <!-- Argon CSS -->
    <link type="text/css" href="{{ url('') }}/css/argon.css" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-145056801-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-145056801-1');
    </script> --}}

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XL19332NT0"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-XL19332NT0');
    </script>


    @yield('top-content')
</head>
<body>
@include('sweetalert::alert')
<nav id="navbar-main"
     class="navbar navbar-horizontal navbar-main navbar-expand-lg navbar-light bg-white mt-0 fixed-top shadow py-2">
    <div class="container">
        <a class="navbar-brand" href="{{ url('') }}">
            <img src="{{ url('img/logo-west-java-investment@2x.png') }}" style="width: 100px; height: auto">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse"
                aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ url('') }}">
                            <img src="{{ url('img/logo-west-java-investment@2x.png') }}">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse"
                                data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false"
                                aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="{{ route('front.visionmission') }}" class="nav-link">
                        <span class="nav-link-inner--text">@lang('front.vision&mission')</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('front.companies') }}" class="nav-link">
                        <span class="nav-link-inner--text">@lang('front.companies')</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('front.industries') }}" class="nav-link">
                        <span class="nav-link-inner--text">@lang('front.industries')</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('articles.index') }}" class="nav-link">
                        <span class="nav-link-inner--text">@lang('front.articles')</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('profiles.index') }}" class="nav-link">
                        <span class="nav-link-inner--text">@lang('front.profiles')</span>
                    </a>
                </li>
                <li class="nav-item d-flex align-items-center">
                    <select class="form-control form-control-sm bg-transparent stroke-white text-dark" data-width="fit"
                            onchange="location = this.value;">
                        <option value="{{ route('setlanguage', ['key' => 'EN']) }}" @if (Lang::locale() === 'EN')
                        selected
                                @endif
                        >
                            EN
                        </option>
                        <option
                                value="{{ route('setlanguage', ['key' => 'id']) }}"
                                @if (Lang::locale() === 'id')
                                selected
                                @endif>
                            ID
                        </option>
                    </select>
                </li>
            </ul>
            <hr class="d-lg-none"/>
            <ul class="navbar-nav align-items-lg-center">
                @guest
                    <li class="nav-item d-none d-lg-block ml-lg-4">
                        <a href="{{ url('login') }}" class="btn btn-neutral btn-icon">
               <span class="btn-inner--icon">
                 <i class="fas fa-lock mr-2"></i>
               </span>
                            <span class="nav-link-inner--text text-primary ">{{ __('Login') }}</span>
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
                         {{ url('https://ui-avatars.com/api/?name=') }}{{ Auth::user()->name }}
                         @else
                         {{ url('') }}/users/thumbnail/{{ Auth::user()->photo }}
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
                            @if (\Illuminate\Support\Facades\Auth::user()->role === 'member usaha')
                                <a href="{{ route('member.index') }}" class="dropdown-item">{{ __('Dashboard') }}</a>
                            @else
                                <a href="{{ route('home') }}" class="dropdown-item">{{ __('Dashboard') }}</a> @endif


                            <a class="dropdown-item"
        href="{{ route('logout') }}"
        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
    {{ __('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    </div>
    </li>
@endguest
</ul>
</div>
</div>
</nav>
<!-- Main content -->
<div class="main-content">
    @yield('content')
</div>
<!-- Footer -->
<footer class="py-5 bg-white" id="footer-main">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-lg-3">
                        <img src="{{ url('img/logo-west-java-investment@2x.png') }}">
                    </div>
                    <div class="col-lg-3">
                        <div class="list-group">
                            <a href="{{ route('front.inglance') }}"
                                class="list-group-item border-0 p-0 mb-2 list-group-item-action font-weight-600">@lang('front.vision-mission-About West Java')</a>
                            <a href="{{ route('front.infrastructure') }}"
                                class="list-group-item border-0 p-0 mb-2 list-group-item-action font-weight-600">@lang('front.vision-mission-Infrastructure')</a>
                            <a href="{{ route('front.industries') }}"
                                class="list-group-item border-0 p-0 mb-2 list-group-item-action font-weight-600">@lang('front.vision-mission-Industries')</a>
                            <a href="{{ route('front.tradingcomodities') }}"
                                class="list-group-item border-0 p-0 mb-2 list-group-item-action font-weight-600">@lang('front.vision-mission-Trading')</a>
                            <a href="{{ route('front.tourisminvestment') }}"
                                class="list-group-item border-0 p-0 mb-2 list-group-item-action font-weight-600">@lang('front.vision-mission-Tourism')</a>
                            <a href="https://wjis.co.id"
                                class="list-group-item border-0 p-0 mb-2 list-group-item-action font-weight-600">@lang('front.vision-mission-WJI Summit')</a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="list-group">
                            <a href="{{ route('investment-oportunity.index') }}"
                                class="list-group-item border-0 p-0 mb-2 list-group-item-action font-weight-600">@lang('front.vision-mission-Investment')</a>
                            {{--                            <a href="#" class="list-group-item border-0 p-0 mb-2 list-group-item-action font-weight-600">Our Products</a> --}}
                            <a href="{{ route('articles.index') }}"
                                class="list-group-item border-0 p-0 mb-2 list-group-item-action font-weight-600">@lang('front.vision-mission-News & Article')</a>
                            {{--                            <a href="#" class="list-group-item border-0 p-0 mb-2 list-group-item-action font-weight-600">Event & Promotion</a> --}}
                            <a href="{{ route('publication.index') }}"
                                class="list-group-item border-0 p-0 mb-2 list-group-item-action font-weight-600">@lang('front.vision-mission-Publication')</a>
                            <a href="{{ route('front.fintech') }}"
                                class="list-group-item border-0 p-0 mb-2 list-group-item-action font-weight-600">@lang('front.vision-mission-Fintech')</a>
                            <a href="{{ route('contact') }}"
                                class="list-group-item border-0 p-0 mb-2 list-group-item-action font-weight-600">@lang('front.vision-mission-Contact')</a>
                            <a href="{{ url('') }}/file/book.pdf" target="_blank"
                                class="list-group-item border-0 p-0 mb-2 list-group-item-action font-weight-600">@lang('front.vision-mission-Download')</a>
                        </div>
                    </div>
                    {{--                    <div class="col-lg-2"> --}}
                    {{--                        <div class="list-group"> --}}
                    {{--                            <a href="#" class="list-group-item border-0 p-0 mb-2 list-group-item-action font-weight-600">Fintech</a> --}}
                    {{--                            <a href="#" class="list-group-item border-0 p-0 mb-2 list-group-item-action font-weight-600">Contact Us</a> --}}
                    {{--                            <a href="#" class="list-group-item border-0 p-0 mb-2 list-group-item-action font-weight-600">Download</a> --}}
                    {{--                        </div> --}}
                    {{--                    </div> --}}
                    <div class="col-lg-3">
                        <form action="{{ route('newsletter.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <h3 class="mb-3">Subscribe Newsletter</h3>
                                <input type="email" class="form-control form-control-sm" name="email"
                                    id="" aria-describedby="helpId" placeholder="Write your email here">
                            </div>
                            <button class="btn btn-default">@lang('front.vision-mission-Subscribe')</button>
                        </form>
                    </div>
                </div>
                <hr>
            </div>
            <div class="col-lg-6">
                <div class="copyright text-center text-xl-left text-sm text-muted">
                    &copy; 2020 West Java Investment. All Rights Reserved.
                </div>
            </div>
            <div class="col-lg-6">
                <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="https://www.facebook.com/" target="_blank"
                            data-toggle="tooltip" title="" data-original-title="Like us on Facebook">
                            <i class="text-lg fab fa-facebook-square"></i>
                            <span class="nav-link-inner--text d-lg-none">Facebook</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="https://www.instagram.com/" target="_blank"
                            data-toggle="tooltip" title="" data-original-title="Follow us on Instagram">
                            <i class="text-lg fab fa-instagram"></i>
                            <span class="nav-link-inner--text d-lg-none">Instagram</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="https://twitter.com/" target="_blank"
                            data-toggle="tooltip" title="" data-original-title="Follow us on Twitter">
                            <i class="text-lg fab fa-twitter-square"></i>
                            <span class="nav-link-inner--text d-lg-none">Twitter</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<!-- Core -->
<script src="{{ url('') }}/vendor/jquery/dist/jquery.min.js"></script>
<script src="{{ url('') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ url('') }}/vendor/js-cookie/js.cookie.js"></script>
<script src="{{ url('') }}/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="{{ url('') }}/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
<!-- Optional JS -->
<script src="{{ url('') }}/vendor/onscreen/dist/on-screen.umd.min.js"></script>

<!-- Argon JS -->
<script src="{{ url('') }}/js/argon.min.js"></script>

@yield('bottom-content')

</body>

</html>
