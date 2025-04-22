@extends('layouts.frontend')

@section('content')
    <!-- Header -->
    <div class="header bg-primary pt-5 pb-7"
         style="background-image: url('{{url('img/bg-atas-01.jpg')}}');background-size: cover; background-repeat: no-repeat; background-attachment: fixed">
        <div class="container mt-5 pt-5">
            <div class="header-body">
                <div class="row align-items-center">
                    <div class="col-lg-8 py-5 mb-5">
                        <div class="pr-5">
                            <h3 class="display-4 text-white font-weight-light">@lang('front.WELCOME TO')</h3>
                            <h1 class="display-2 text-white font-weight-bold mb-0">@lang('front.WEST JAVA DIGITAL PROMOTION')</h1>
                            <h2 class="display-4 text-white font-weight-light">@lang('front.An opportunity portfolio of West java\'s potential projects and commodities')</h2>
                            <div class="mt-5">
                                <a href="{{route('front.inglance')}}" class="btn btn-neutral text-warning my-2">@lang('front.About Us')</a>
                                <a href="{{route('articles.index')}}" class="btn btn-warning my-2">@lang('front.Explore News')</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                    </div>
                </div>
            </div>
        </div>
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                 xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-success" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>
    <section class="section section-lg pt-lg-0 mt--8 bg-success pb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card h-100 card-lift--hover shadow border-0">
                                <img class="card-img-top card-img-sm" src="{{url('img/investasi-jawabarat-1.jpeg')}}"
                                     alt="">
                                <div class="card-body">
                                    <h4 class="h3 text-success text-uppercase">@lang('front.WEST JAVA IN A GLANCE')</h4>
                                    <div class="line-style">
                                        <div class="line-style-1"></div>
                                        <div class="line-style-2"></div>
                                    </div>
                                    <p class="description mt-3 mb-0 pb-0">@lang('front.Features visualized data on the Socioeconomic and Demographic of West Java')</p>
                                </div>
                                <div class="card-footer">
                                    <a href="{{route('front.inglance')}}">@lang('front.Learn More')</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card h-100 card-lift--hover shadow border-0">
                                <img class="card-img-top card-img-sm" src="{{url('img/view-8.jpg')}}" alt="">
                                <div class="card-body">
                                    <h4 class="h3 text-success text-uppercase">@lang('front.WHY YOU SHOULD INVEST?')</h4>
                                    <div class="line-style">
                                        <div class="line-style-1"></div>
                                        <div class="line-style-2"></div>
                                    </div>
                                    <p class="description mt-3 mb-0 pb-0">@lang('front.Features visualized data on Market Potential and Infrastructure Readiness of West Java')</p>
                                </div>
                                <div class="card-footer">
                                    <a href="{{route('front.why-should-invest')}}">@lang('front.Learn More')</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card h-100 card-lift--hover shadow border-0">
                                <img class="card-img-top card-img-sm" src="{{url('img/gedungsate.jpg')}}" alt="">
                                <div class="card-body">
                                    <h4 class="h3 text-success text-uppercase">@lang('front.WHAT DOES WEST JAVA OFFERS')</h4>
                                    <div class="line-style">
                                        <div class="line-style-1"></div>
                                        <div class="line-style-2"></div>
                                    </div>
                                    <p class="description mt-3 mb-0 pb-0">@lang('front.Learn more about many potential investment in West Java from Infrastructure to Tourism')</p>
                                </div>
                                <div class="card-footer">
                                    <a href="{{route('front.what-west-java-offer')}}">@lang('front.Learn More')</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-default">
        <div class="container">
            <div class="row text-center justify-content-center text-white">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-4">
                            <img src="{{url('img/ridwan-kamil-governor.png')}}" alt="" class="w-100">
                        </div>
                        <div class="col-8 d-flex flex-column justify-content-center text-left">
                            <h2 class="text-warning">Moch. Ridwan Kamil</h2>
                            <p>@lang('front.Governor of West Java')</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-4">
                            <img src="{{url('img/uu-vice-governor.png')}}" alt="" class="w-100">
                        </div>
                        <div class="col-8 d-flex flex-column justify-content-center text-left">
                            <h2 class="text-warning">Uu Ruzhanul Ulum</h2>
                            <p>@lang('front.Vice Governor of West Java')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card" style="background-image:
                            /* top, transparent red */
                            linear-gradient(151deg,
                            rgba(22,99,160, 1),
                            rgba(253,196,38, 0.5)
                            ),
                            /* your image */
                            url('{{url('')}}/img/jawa barat triangle__1568002496867__w923.png'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                        <div class="card-body h-100 d-flex align-items-end py-5">
                            <div class="col-8">
                                <h1 class="text-warning display-2">Rebana Metropolitan</h1>
                                <div class="line-style">
                                    <div class="line-style-1"></div>
                                    <div class="line-style-2"></div>
                                </div>
                                <p class="text-white mt-3">@lang('front.Provincial Government is building the newest industrial area in the eastern part of West Java called Rebana Golden Triangle. This area will be a hub between Cirebon City, Patimban Seaport and West Java International Airport.')</p>
                                <a href="{{url('')}}/file/Rebana Book V5 27102020.pdf" class="btn btn-primary">View Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-4">
        <div class="container">
            <div class="row text-white">
                <div class="col-lg-6 mb-5">
                    <h1>@lang('front.News & Articles')</h1>
                    <div class="line-style">
                        <div class="line-style-1"></div>
                        <div class="line-style-2"></div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5 text-lg-right">
                    <a href="{{route('articles.index')}}" class="btn btn-success">@lang('front.View All')</a>
                </div>
                @if($latest)
                    <div class="col-lg-7 mb-3">
                        <div class="card shadow-lg">
                            <div class="row no-gutters">
                                <div class="col-lg-12">
                                    <span class="badge badge-pill badge-success position-absolute" style="left: 3%; top: 3%">{{date('d-m-Y H:i:s', strtotime($latest->created_at))}}</span>
                                    <img class="card-img-top" src="@if ($latest->users_id === 0)
                                    {{$latest->image}}
                                    @else
                                    {{url('')}}/img/artikel/thumbnail/{{$latest->image}}
                                    @endif" style="height: 260px; object-fit: cover" alt="">
                                    <div class="card-body">
                                        <a href="{{route('articles.show',['slug'=>$latest->slug])}}"><h5 class="text-primary">{{$latest->judul}}</h5></a>
                                        <p class="text-secondary"><small>Ekonomi</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="col-lg-5">
                    <div class="row">

                        @foreach($artikel as $a)
                            <div class="col-lg-12">
                                <div class="card shadow-lg">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <span class="badge badge-pill badge-success position-absolute" style="left: 3%; top: 3%">{{date('d-m-Y H:i:s', strtotime($a->created_at))}}</span>
                                            <img src="@if ($a->users_id === 0)
                                            {{$a->image}}
                                            @else
                                            {{url('')}}/img/artikel/thumbnail/{{$a->image}}
                                            @endif" class="card-img" style="height:120px; width:100%; object-fit: cover">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <a href="{{route('articles.show',['slug'=>$a->slug])}}"><h5 class="text-primary">{{Str::limit($a->judul , 60) }}</h5></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section class="pb-6 pt-4">
        <div class="container">
            <div class="row row-grid align-items-center">
                <div class="col-md-7 order-md-2">
                    <div class="glide">
                        <div class="glide__track pl-5" data-glide-el="track">
                            <ul class="glide__slides">
                                @foreach($investasi as $i)
                                    <li class="glide__slide">
                                        <div class="card shadow">
                                            <img class="card-img-top card-img-sm"
                                                 src="{{url('')}}/invest/thumbnail/{{$i->image}}"
                                                 alt="">
                                            <div class="card-body pb-0">
                                                <h5 class="mb-0 text-secondary">Investment</h5>
                                                <h3 class="card-title mb-2 pb-0">{{$i->judul_investasi}}</h3>
                                                <div class="line-style">
                                                    <div class="line-style-1"></div>
                                                    <div class="line-style-2"></div>
                                                </div>
                                                <h5 class="mb-0 mt-3 text-secondary">Project Value</h5>
                                                <h3 class="card-title pb-0 mb-0">@if(empty($i->project_value))Not Yet @else IDR. {{number_format($i->project_value, 0,',','.')}} @endif</h3>

                                            </div>
                                            <div class="card-footer border-white">
                                                <a class="btn btn-warning btn-sm" href="{{route('investment-oportunity.show',['slug'=>$i->slug])}}">View Projects</a>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="glide__arrows text-center" data-glide-el="controls">
                            <button class="glide__arrow glide__arrow--left" data-glide-dir="<"
                                    style="left: 40%; bottom: -120px;"><i class="ni ni-bold-left text-default"></i>
                            </button>
                            <button class="glide__arrow glide__arrow--right" data-glide-dir=">" style="bottom: -120px;">
                                <i class="ni ni-bold-right text-default"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 order-md-1">
                    <div class="pr-md-5">
                        <h1>@lang('front.Investment Opportunity')</h1>
                        <p>@lang('front.Various kinds of investment opportunities exist in West Java')</p>
                        <a href="{{route('investment-oportunity.index')}}" class="btn btn-success">@lang('front.View All')</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-3">
                    <h1>@lang('front.West Java\'s Sectoral and Region Profiles')</h1>
                </div>
                <div class="col-lg-6 mb-3 text-lg-right">
                    <a href="{{route('profiles.index')}}" class="btn btn-success">@lang('front.View All')</a>
                </div>
                @foreach($profile as $p)
                    <div class="col-4 col-lg-2 mb-2">
                        <div class="card h-100 card-lift--hover shadow">
                            <div class="card-body text-center">
                                <a href="{{route('profiles.show',['slug'=>$p->slug])}}"><img class="w-100 h-auto"
                                                                                             src="{{url('')}}/img/profile/thumbnail/{{$p->image}}"
                                                                                             alt=""></a>
                                <div class="p-2"></div>
                                <a href="{{route('profiles.show',['slug'=>$p->slug])}}"><p class="mb-0">{{$p->name}}</p></a>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @include('layouts.invest-west-java')

@stop

@section('top-content')
    <link rel="stylesheet" href="{{url('css/glide/glide.core.css')}}">
    <style>
        /* Add the below transitions to allow a smooth color change similar to lyft */
        .navbar {
            background: rgb(250, 250, 250) !important; /* IE */
            background: rgba(250, 250, 250, 0) !important; /* NON-IE */
            -webkit-transition: all 0.6s ease-out;
            -moz-transition: all 0.6s ease-out;
            -o-transition: all 0.6s ease-out;
            -ms-transition: all 0.6s ease-out;
            transition: all 0.6s ease-out;

        }

        .navbar.scrolled {
            background: rgb(250, 250, 250) !important; /* IE */
            background: rgba(250, 250, 250, 1) !important; /* NON-IE */
        }

        .nav-link-inner--text{
            color: white;
        }

        .nav-link-inner--text.scrolled{
            color: rgba(0, 0, 0, 0.6);
        }
    </style>
@stop

@section('bottom-content')
    <script src="{{url('js/glide/glide.js')}}"></script>
    <script>
        <!-- javascript for the init -->

        // Carousel
        new Glide('.glide', {
            type: 'carousel',
            startAt: 0,
            focusAt: 2,
            perTouch: 1,
            perView: 2
        }).mount();
    </script>

    <script>
        /**
         * Listen to scroll to change header opacity class
         */
        function checkScroll(){
            var startY = $('.navbar').height() * 2; //The point where the navbar changes in px

            if($(window).scrollTop() > startY){
                $('.navbar').addClass("scrolled");
                $('.nav-link-inner--text').addClass("scrolled");
            }else{
                $('.navbar').removeClass("scrolled");
                $('.nav-link-inner--text').removeClass("scrolled");
            }
        }

        if($('.navbar').length > 0){
            $(window).on("scroll load resize", function(){
                checkScroll();
            });
        }
    </script>
@stop
