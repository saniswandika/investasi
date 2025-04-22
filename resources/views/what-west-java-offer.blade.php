@extends('layouts.frontend')

@section('content')
    <div class="jumbotron jumbotron-fluid nav-margin" style="background-image:
            /* top, transparent red */
            linear-gradient(151deg,
            rgba(52,122,74, 0.60),
            rgba(253,196,38, 0.10)
            ),
            /* your image */
            url('{{url('')}}/old-assets/frontend/images/front-hero-bg-3.png'); background-size: cover; background-position: center top; background-repeat: no-repeat; background-attachment: fixed; height: 500px">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-lg-6 text-white">
                    <h1 class="display-2 text-warning">@lang('front.what-west-java-offer-what')</h1>
                    <h3 class="display-4 text-white">@lang('front.what-west-java-offer-Features')</h3>
                    <div class="line-style mb-4">
                        <div class="line-style-3"></div>
                        <div class="line-style-2"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="section mt--6">
        <div class="container">

            <div class="row">

                <div class="col-lg-4 mb-4">
                    <div class="card h-100 card-lift--hover shadow border-0">
                        <a href="{{route('front.infrastructure')}}"><img class="card-img-top card-img-sm" src="{{url('old-assets/frontend/images/toll-road-image-1.jpg')}}" alt=""></a>
                        <div class="card-body">
                            <div class="d-flex flex-row justify-content-center align-items-center">
                                <h1 class="display-2 text-primary mr-3">1.</h1>
                                <div><a href="{{route('front.infrastructure')}}"><h4 class="h3 text-success text-uppercase">@lang('front.infrastructure-Infrastructure Investment')</h4></a>
                                    <div class="line-style">
                                        <div class="line-style-1"></div>
                                        <div class="line-style-2"></div>
                                    </div>
                                </div>
                            </div>
                            <p class="description mt-3 mb-0 pb-0">@lang('front.infrastructure-West Java')</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="card h-100 card-lift--hover shadow border-0">
                        <a href="{{route('front.publicpartnership')}}"><img class="card-img-top card-img-sm" src="{{url('old-assets/frontend/images/industry-image-1.jpg')}}" alt=""></a>
                        <div class="card-body">
                            <div class="d-flex flex-row justify-content-center align-items-center">
                                <h1 class="display-2 text-primary mr-3">2.</h1>
                                <div><a href="{{route('front.publicpartnership')}}"><h4 class="h3 text-success text-uppercase">@lang('front.public-partnership-project-Public Private Partnership Project')</h4></a>
                                    <div class="line-style">
                                        <div class="line-style-1"></div>
                                        <div class="line-style-2"></div>
                                    </div>
                                </div>
                            </div>
                            <p class="description mt-3 mb-0 pb-0">@lang('front.public-partnership-project-We open')</p></div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="card h-100 card-lift--hover shadow border-0">
                        <a href="{{route('front.newindustrial')}}"><img class="card-img-top card-img-sm" src="{{url('old-assets/frontend/images/special-image-1.jpg')}}" alt=""></a>
                        <div class="card-body">
                            <div class="d-flex flex-row justify-content-center align-items-center">
                                <h1 class="display-2 text-primary mr-3">3.</h1>
                                <div><a href="{{route('front.newindustrial')}}"><h4 class="h3 text-success text-uppercase">@lang('front.new-industrial-zones-New')</h4></a>
                                    <div class="line-style">
                                        <div class="line-style-1"></div>
                                        <div class="line-style-2"></div>
                                    </div>
                                </div>
                            </div>
                            <p class="description mt-3 mb-0 pb-0">@lang('front.new-industrial-zones-West Java')</p></div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="card h-100 card-lift--hover shadow border-0">
                        <a href="{{route('front.tradingcomodities')}}"><img class="card-img-top card-img-sm" src="{{url('old-assets/frontend/images/trading-image-1.jpg')}}" alt=""></a>
                        <div class="card-body">
                            <div class="d-flex flex-row justify-content-center align-items-center">
                                <h1 class="display-2 text-primary mr-3">4.</h1>
                                <div><a href="{{route('front.tradingcomodities')}}"><h4 class="h3 text-success text-uppercase">@lang('front.trading-comodities-Trading Commodities')</h4></a>
                                    <div class="line-style">
                                        <div class="line-style-1"></div>
                                        <div class="line-style-2"></div>
                                    </div>
                                </div>
                            </div>
                            <p class="description mt-3 mb-0 pb-0">@lang('front.trading-comodities-Explore')</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="card h-100 card-lift--hover shadow border-0">
                        <a href="{{route('front.tourisminvestment')}}"><img class="card-img-top card-img-sm" src="{{url('old-assets/frontend/images/tourism-image-1.jpg')}}" alt=""></a>
                        <div class="card-body">
                            <div class="d-flex flex-row justify-content-center align-items-center">
                                <h1 class="display-2 text-primary mr-3">5.</h1>
                                <div><a href="{{route('front.tourisminvestment')}}"><h4 class="h3 text-success text-uppercase">@lang('front.tourism-investment-Tourism Investment')</h4></a>
                                    <div class="line-style">
                                        <div class="line-style-1"></div>
                                        <div class="line-style-2"></div>
                                    </div>
                                </div>
                            </div>
                            <p class="description mt-3 mb-0 pb-0">@lang('front.tourism-investment-With a widely')</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="card h-100 card-lift--hover shadow border-0">
                        <a href="{{route('front.digitalprovince')}}"><img class="card-img-top card-img-sm" src="{{url('old-assets/frontend/images/digital-inclusive-image-1.jpg')}}" alt=""></a>
                        <div class="card-body">
                            <div class="d-flex flex-row justify-content-center align-items-center">
                                <h1 class="display-2 text-primary mr-3">6.</h1>
                                <div><a href="{{route('front.digitalprovince')}}"><h4 class="h3 text-success text-uppercase">@lang('front.digital-province-West Java')</h4></a>
                                    <div class="line-style">
                                        <div class="line-style-1"></div>
                                        <div class="line-style-2"></div>
                                    </div>
                                </div>
                            </div>
                            <p class="description mt-3 mb-0 pb-0">@lang('front.digital-province-Helping')</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="card h-100 card-lift--hover shadow border-0">
                        <a href="{{route('front.socialdevelopment')}}"><img class="card-img-top card-img-sm" src="{{url('old-assets/frontend/images/social-program-image-1.jpg')}}" alt=""></a>
                        <div class="card-body">
                            <div class="d-flex flex-row justify-content-center align-items-center">
                                <h1 class="display-2 text-primary mr-3">7.</h1>
                                <div><a href="{{route('front.socialdevelopment')}}"><h4 class="h3 text-success text-uppercase">@lang('front.social-development-Social Development Program')</h4></a>
                                    <div class="line-style">
                                        <div class="line-style-1"></div>
                                        <div class="line-style-2"></div>
                                    </div>
                                </div>
                            </div>
                            <p class="description mt-3 mb-0 pb-0">@lang('front.social-development-Besides')</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="card h-100 card-lift--hover shadow border-0">
                        <a href="{{route('front.statedownedenterprise')}}"><img class="card-img-top card-img-sm" src="{{url('old-assets/frontend/images/state-owned-image.jpg')}}" alt=""></a>
                        <div class="card-body">
                            <div class="d-flex flex-row justify-content-center align-items-center">
                                <h1 class="display-2 text-primary mr-3">8.</h1>
                                <div><a href="{{route('front.statedownedenterprise')}}"><h4 class="h3 text-success text-uppercase">@lang('front.stated-owned-enterprise-West Java & National State-Owned Enterprise')</h4></a>
                                    <div class="line-style">
                                        <div class="line-style-1"></div>
                                        <div class="line-style-2"></div>
                                    </div>
                                </div>
                            </div>
                            <p class="description mt-3 mb-0 pb-0">@lang('front.stated-owned-enterprise-West Java')</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('layouts.about-west-java')

@stop

@section('top-content')

@stop

@section('bottom-content')

@stop
