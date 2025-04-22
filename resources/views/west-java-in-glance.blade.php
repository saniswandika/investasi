@extends('layouts.frontend')

@section('content')
    <div class="jumbotron jumbotron-fluid nav-margin" style="background-image:
            /* top, transparent red */
            linear-gradient(151deg,
            rgba(52,122,74, 0.60),
            rgba(253,196,38, 0.10)
            ),
            /* your image */
            url('{{url('')}}/old-assets/frontend/images/front-hero-bg-2.png'); background-size: cover; background-position: center top; background-repeat: no-repeat; background-attachment: fixed; height: 500px">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-lg-6 text-white">
                    <h1 class="display-2 text-warning">@lang('front.west-java-in-a-glance-West Java In Glance')</h1>
                    <h3 class="display-4 text-white">@lang('front.west-java-in-a-glance-Features')</h3>
                    <div class="line-style mb-4">
                        <div class="line-style-3"></div>
                        <div class="line-style-2"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mt--6">
                    <div class="card-body">
                        <div class="section section-large">
                            <div class="container">
                                <img src="{{url('')}}/img/frontend/West Java In Glance_page-0001.jpg" class="w-100 d-block mb-4">
                                <img src="{{url('')}}/img/frontend/West Java In Glance_page-0002.jpg" class="w-100 d-block mb-4">
                                <img src="{{url('')}}/img/frontend/West Java In Glance_page-0003.jpg" class="w-100 d-block mb-4">
                                <img src="{{url('')}}/img/frontend/West Java In Glance_page-0004.jpg" class="w-100 d-block mb-4">
                                {{--                                <div class="row mb-4">--}}
                                {{--                                    <div class="col-md-6">--}}
                                {{--                                        <h1>@lang('front.west-java-in-a-glance-Demographic Condition')</h1>--}}
                                {{--                                        <div class="line-style mb-4">--}}
                                {{--                                            <div class="line-style-3"></div>--}}
                                {{--                                            <div class="line-style-2"></div>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                    <div class="col-md-6">--}}
                                {{--                                        <div class="row">--}}
                                {{--                                            <div class="col-md-6">--}}
                                {{--                                                <p>@lang('front.west-java-in-a-glance-Population Growth') <span class="font-semibold">1.34%</span></p>--}}
                                {{--                                            </div>--}}
                                {{--                                            <div class="col-md-6">--}}
                                {{--                                                <p>@lang('front.west-java-in-a-glance-The Population')</p>--}}
                                {{--                                            </div>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                {{--                                <div class="text-muted font-s-small mb-2 font-semibold swipe-info-more">--}}
                                {{--                                    <div class="d-flex align-items-center">--}}
                                {{--                                        <i class="material-icons md-18 mr-1">info</i>Swipe left to see more!--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                {{--                                <div class="card-number counter">--}}
                                {{--                                    <div class="card-number--item highlight">--}}
                                {{--                                        <div class="card-number--top">--}}
                                {{--                                            WEST JAVA--}}
                                {{--                                        </div>--}}
                                {{--                                        <div  class="card-number--center">--}}
                                {{--                                            <span class="counter-value" data-count="48">48</span>--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="card-number--bottom">--}}
                                {{--                                            MILLION--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                    <div class="card-number--item">--}}
                                {{--                                        <div class="card-number--top">--}}
                                {{--                                            SOUTH KOREA--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="card-number--center">--}}
                                {{--                                            <span class="counter-value" data-count="51">51</span>--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="card-number--bottom">--}}
                                {{--                                            MILLION--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                    <div class="card-number--item">--}}
                                {{--                                        <div class="card-number--top">--}}
                                {{--                                            SAUDI ARABIA--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="card-number--center">--}}
                                {{--                                            <span class="counter-value" data-count="33">33</span>--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="card-number--bottom">--}}
                                {{--                                            MILLION--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                    <div class="card-number--item">--}}
                                {{--                                        <div class="card-number--top">--}}
                                {{--                                            AUSTRALIA--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="card-number--center">--}}
                                {{--                                            <span class="counter-value" data-count="25">25</span>--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="card-number--bottom">--}}
                                {{--                                            MILLION--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                    <div class="card-number--item">--}}
                                {{--                                        <div class="card-number--top">--}}
                                {{--                                            MALAYSIA--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="card-number--center">--}}
                                {{--                                            <span class="counter-value" data-count="32">32</span>--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="card-number--bottom">--}}
                                {{--                                            MILLION--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                {{--                                <div class="block mt-2 font-s-medium">--}}
                                {{--                                    @lang('front.west-java-in-a-glance-West Java have')--}}
                                {{--                                </div>--}}
                                {{--                                <hr>--}}
                                {{--                                <div class="row mb-4">--}}
                                {{--                                    <div class="col-md-6">--}}
                                {{--                                        <h1>@lang('front.west-java-in-a-glance-Socioeconomic Condition')</h1>--}}
                                {{--                                        <div class="line-style mb-4">--}}
                                {{--                                            <div class="line-style-3"></div>--}}
                                {{--                                            <div class="line-style-2"></div>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                    <div class="col-md-6">--}}
                                {{--                                        <p>@lang('front.west-java-in-a-glance-over')</p>--}}
                                {{--                                        <hr>--}}
                                {{--                                        <p>@lang('front.west-java-in-a-glance-around')</p>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                {{--                                <div class="text-muted font-s-small mb-2 font-semibold swipe-info-more">--}}
                                {{--                                    <div class="d-flex align-items-center">--}}
                                {{--                                        <i class="material-icons md-18 mr-1">info</i>Swipe left to see more!--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                {{--                                <div class="card-number counter">--}}
                                {{--                                    <div class="card-number--item highlight">--}}
                                {{--                                        <div class="card-number--top" data-cn-top="GROWTH">--}}
                                {{--                                            ECONOMIC--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="card-number--center card-number--percentage">--}}
                                {{--                                            <span class="counter-value" data-count="5.50">5.50</span>--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="card-number--bottom">--}}
                                {{--                                            Indonesia QI-2019 (5.18%)--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                    <div class="card-number--item">--}}
                                {{--                                        <div class="card-number--top" data-cn-top="GROWTH">--}}
                                {{--                                            TOURISM--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="card-number--center card-number--percentage">--}}
                                {{--                                            <span class="counter-value" data-count="7.09">12.55</span>--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="card-number--bottom">--}}
                                {{--                                            International tourist arrival--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                    <div class="card-number--item">--}}
                                {{--                                        <div class="card-number--top" data-cn-top="GROWTH">--}}
                                {{--                                            INDUSTRIAL--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="card-number--center card-number--percentage">--}}
                                {{--                                            <span class="counter-value" data-count="6.68">6.86</span>--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="card-number--bottom">--}}
                                {{--                                            from 2017 to 2018--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                    <div class="card-number--item">--}}
                                {{--                                        <div class="card-number--top">--}}
                                {{--                                            HDI--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="card-number--center card-number--percentage">--}}
                                {{--                                            <span class="counter-value" data-count="70.69">71.30</span>--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="card-number--bottom">--}}
                                {{--                                            Categorize as high--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                    <div class="card-number--item">--}}
                                {{--                                        <div class="card-number--top">--}}
                                {{--                                            GDRP--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="card-number--center card-number--percentage">--}}
                                {{--                                            <span class="counter-value" data-count="13">13.23</span>--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="card-number--bottom">--}}
                                {{--                                            of Indonesia's GDP--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                {{--                                <div class="block mt-2 font-s-medium">--}}
                                {{--                                    Source: West Java Regional Bureau of Statistic, 2018--}}
                                {{--                                </div>--}}
                            </div>
                        </div>
                    </div>

                    {{--                    <div class="row p-3">--}}
                    {{--                        <div class="col-lg-6 p-5"--}}
                    {{--                             style="background-image: url('{{url('')}}/old-assets/frontend/images/image-1.png'); background-size: cover; background-repeat: no-repeat">--}}
                    {{--                        </div>--}}
                    {{--                        <div class="col-lg-6 p-5 bg-success">--}}
                    {{--                            <div class="content text-white my-5">--}}
                    {{--                                <h1 class="display-2 text-warning">@lang('front.west-java-in-a-glance-West Java in Number')</h1>--}}
                    {{--                                <div class="line-style mb-4">--}}
                    {{--                                    <div class="line-style-3"></div>--}}
                    {{--                                    <div class="line-style-2"></div>--}}
                    {{--                                </div>--}}
                    {{--                                <p>--}}
                    {{--                                    @lang('front.west-java-in-a-glance-having')--}}
                    {{--                                </p>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}

                    {{--                    <div class="container-large mb-5 p-4 mt--6">--}}
                    {{--                        <div class="card shadow border-0">--}}
                    {{--                            <div class="card-body card-body--large">--}}
                    {{--                                <div class="row col-spacing-mobile csm-large">--}}
                    {{--                                    <div class="col-md-4">--}}
                    {{--                                        <div class="font-s-medium font-semibold block mb-4 text-success display-4">@lang('front.west-java-in-a-glance-TOTAL WORKFORCE')</div>--}}
                    {{--                                        <div class="block mb-4">--}}
                    {{--                                            <div class="font-s-large font-semibold display-4">22,64 million</div>--}}
                    {{--                                            <div class="mb-2">(August 2018)</div>--}}
                    {{--                                            <div class="badge badge-pill badge-warning font-semibold">INDONESIA: 131,01 MILLION</div>--}}
                    {{--                                        </div>--}}
                    {{--                                        <div class="block mb-4">--}}
                    {{--                                            <div class="font-s-medium font-semibold">@lang('front.west-java-in-a-glance-Unemployment Rate')</div>--}}
                    {{--                                            <div class="font-s-large font-semibold display-4">8,17%</div>--}}
                    {{--                                            <div>(August 2018)</div>--}}
                    {{--                                            <div class="mb-2">2nd highest after Banten</div>--}}
                    {{--                                            <div class="badge badge-pill badge-warning font-semibold">INDONESIA: 5,34%</div>--}}
                    {{--                                        </div>--}}
                    {{--                                        <div class="block pr-2">--}}
                    {{--                                            <div class="font-s-medium font-semibold">@lang('front.west-java-in-a-glance-Unemployment Rate Based on Educational Level')</div>--}}
                    {{--                                            <div class="font-s-large font-semibold display-4">16,97%</div>--}}
                    {{--                                            <div class="badge badge-pill badge-warning font-semibold">INDONESIA: 8,92%</div>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                    <div class="col-md-4">--}}
                    {{--                                        <div class="font-s-medium font-semibold block mb-4 text-success display-4">@lang('front.west-java-in-a-glance-POOR PEOPLE')</div>--}}
                    {{--                                        <div class="block mb-4">--}}
                    {{--                                            <div class="font-s-large font-semibold display-4">3,54 million</div>--}}
                    {{--                                            <div class="mb-2">(September 2018)</div>--}}
                    {{--                                            <div class="mb-2">@lang('front.west-java-in-a-glance-3rd')</div>--}}
                    {{--                                            <div class="badge badge-pill badge-warning font-semibold">INDONESIA: 25,95 MILLION</div>--}}
                    {{--                                        </div>--}}
                    {{--                                        <div class="block mb-4">--}}
                    {{--                                            <div class="font-s-medium font-semibold">@lang('front.west-java-in-a-glance-Poor People Based on Location')</div>--}}
                    {{--                                            <div class="mb-2">Urban 2,34 million</div>--}}
                    {{--                                            <div class="mb-2">Rural 1,2 million</div>--}}
                    {{--                                        </div>--}}
                    {{--                                        <div class="block">--}}
                    {{--                                            <div class="font-s-medium font-semibold">@lang('front.west-java-in-a-glance-GINI Ratio')</div>--}}
                    {{--                                            <div class="font-s-large font-semibold display-4">0,405</div>--}}
                    {{--                                            @lang('front.west-java-in-a-glance-The highest')--}}
                    {{--                                            <div class="badge badge-pill badge-warning font-semibold">INDONESIA: 0,384</div>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                    <div class="col-md-4">--}}
                    {{--                                        <div class="font-s-medium font-semibold block mb-4 text-success display-4">@lang('front.west-java-in-a-glance-HDI Indicator')</div>--}}
                    {{--                                        <h5 class="m-0 mb-3">Average Length of School</h5>--}}
                    {{--                                        <div class="block mb-4">--}}
                    {{--                                            <div class="font-s-large font-semibold display-4">8.14 year</div>--}}
                    {{--                                            <div class="mb-2">Grow 0.91% from 2017</div>--}}
                    {{--                                            <div class="mb-2">20th among other provinces</div>--}}
                    {{--                                            <div class="badge badge-pill badge-warning font-semibold">INDONESIA: 8.10 year</div>--}}
                    {{--                                        </div>--}}
                    {{--                                        <div class="block mb-4">--}}
                    {{--                                            <div class="font-s-large font-semibold display-4">12.42 year</div>--}}
                    {{--                                            <div class="mb-2">Grow 0.98% from 2017</div>--}}
                    {{--                                            <div class="mb-2">20th among other provinces</div>--}}
                    {{--                                            <div class="badge badge-pill badge-warning font-semibold">INDONESIA: 12.85 year</div>--}}
                    {{--                                        </div>--}}
                    {{--                                        <h5 class="m-0 mb-3">@lang('front.west-java-in-a-glance-Life Expectancy')</h5>--}}
                    {{--                                        <div class="block mb-4">--}}
                    {{--                                            <div class="font-s-large font-semibold display-4">72.47 year</div>--}}
                    {{--                                            @lang('front.west-java-in-a-glance-Grow 0.73')--}}
                    {{--                                            <div class="badge badge-pill badge-warning font-semibold">INDONESIA: 71.06 year</div>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>

    @include('layouts.about-west-java')

@stop

@section('top-content')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"/>
@stop

@section('bottom-content')
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.counter').slick({
                infinite: false,
                slidesToShow: 4,
                slidesToScroll: 1
            });
        });
    </script>
@stop
