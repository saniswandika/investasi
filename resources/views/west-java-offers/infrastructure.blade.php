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
                    <h1 class="display-1 text-warning">01</h1>
                    <h3 class="display-3 text-white">@lang('front.infrastructure-Infrastructure Investment')</h3>
                    <p class="lead">West Java is thriving in building hundreds of infrastructure including Toll Road, Railway, Airport, Seaport, LRT, Energy, Utility and more.</p>
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
                                <img src="{{url('')}}/img/frontend/what does west java offer_page-0001.jpg" class="w-100 d-block mb-4">
                                <img src="{{url('')}}/img/frontend/what does west java offer_page-0002.jpg" class="w-100 d-block mb-4">
                                <img src="{{url('')}}/img/frontend/what does west java offer_page-0003.jpg" class="w-100 d-block mb-4">
                                <img src="{{url('')}}/img/frontend/what does west java offer_page-0004.jpg" class="w-100 d-block mb-4">
                                <img src="{{url('')}}/img/frontend/what does west java offer_page-0005.jpg" class="w-100 d-block mb-4">
                                <img src="{{url('')}}/img/frontend/what does west java offer_page-0006.jpg" class="w-100 d-block mb-4">
                                <img src="{{url('')}}/img/frontend/what does west java offer_page-0007.jpg" class="w-100 d-block mb-4">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--    <div class="container">--}}
    {{--        <div class="row">--}}
    {{--            <div class="col-12">--}}

    {{--                <div class="card mt--6">--}}
    {{--                    <div class="card-body">--}}
    {{--                        <div class="section section-large">--}}
    {{--                            <div class="container">--}}

    {{--                                <!-- #Embed Start -->--}}
    {{--                                <div class="embedContainer">--}}
    {{--                                    <div class="mobilePreview">--}}
    {{--                                        <div>--}}
    {{--                                            <b>--}}
    {{--                                                Tap to see Investment<br/> Mapping Details</b>--}}
    {{--                                        </div>--}}
    {{--                                        <img src="{{url('')}}/emaps/assets/preview.jpg"/>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="mapContainer">--}}
    {{--                                        <div class="closeButton">X</div>--}}
    {{--                                        <div class="sidebarLeft">--}}
    {{--                                            <div class="sidebarLeft_title">--}}
    {{--                                                <div class="sidebarLeft_title--text">@lang('front.infrastructure-Infrastructure Investment Map')</div>--}}
    {{--                                                <div style="display:flex;justify-content:space-between;width:100%;margin-top:10px;align-items:center">--}}
    {{--                                                    <div>Category</div>--}}
    {{--                                                    <div style="display:flex; align-items: center;"><span id="dropdownTitle"></span>--}}
    {{--                                                        <div class="dropdown" style="margin-left:5px;">--}}
    {{--                                                            <button class="dropdownBtnNew" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
    {{--                                                                <i class="fa fa-angle-down"></i>--}}
    {{--                                                            </button>--}}
    {{--                                                            <div id="category" class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">--}}
    {{--                                                            </div>--}}
    {{--                                                        </div>--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <div class="sidebarLeft_menu">--}}
    {{--                                                <div id="planningStatus" class="sidebarLeft_menu--container">--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <div class="sidebarLeft_content">--}}
    {{--                                                <div id="sidebarContent" class="sidebarLeft_content--container">--}}
    {{--                                                    <div style="padding:20px">Loading Data..</div>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                        <div id="map"></div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <!-- #Embed Finish -->--}}

    {{--                                <div class="container-large my-6">--}}
    {{--                                    <div class="row ">--}}
    {{--                                        <div class="col-md-12 col-sm-12 order-md-first">--}}
    {{--                                            <h1 class="font-semibold block mb-4">@lang('front.infrastructure-Other Prospective Project')</h1>--}}
    {{--                                            <div class="line-style mb-4">--}}
    {{--                                                <div class="line-style-3"></div>--}}
    {{--                                                <div class="line-style-2"></div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="row">--}}
    {{--                                        <div class="col-md-4">--}}
    {{--                                            <div class="list-custom-1 no-dots">--}}
    {{--                                                <div class="list-item bg-success p-3 mb-3 rounded text-white">--}}
    {{--                                                    <div class="d-flex align-items-center h-100 w-100 justify-content-between"></div>--}}
    {{--                                                    <div class="text-left">@lang('front.infrastructure-Creative Hub')</div>--}}
    {{--                                                </div>--}}
    {{--                                                <div class="list-item bg-success p-3 mb-3 rounded text-white">--}}
    {{--                                                    <div class="d-flex align-items-center h-100 w-100 justify-content-between"></div>--}}
    {{--                                                    <div class="text-left">@lang('front.infrastructure-Transit Oriented Development')</div>--}}
    {{--                                                </div>--}}
    {{--                                                <div class="list-item bg-success p-3 mb-3 rounded text-white">--}}
    {{--                                                    <div class="d-flex align-items-center h-100 w-100 justify-content-between"></div>--}}
    {{--                                                    <div class="text-left">@lang('front.infrastructure-Command Center')</div>--}}
    {{--                                                </div>--}}
    {{--                                                <div class="list-item bg-success p-3 mb-3 rounded text-white">--}}
    {{--                                                    <div class="d-flex align-items-center h-100 w-100 justify-content-between"></div>--}}
    {{--                                                    <div class="text-left">@lang('front.infrastructure-Sport Center')</div>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="col-md-4">--}}
    {{--                                            <div class="list-custom-1 no-dots">--}}
    {{--                                                <div class="list-item bg-success p-3 mb-3 rounded text-white">--}}
    {{--                                                    <div class="d-flex align-items-center h-100 w-100 justify-content-between"></div>--}}
    {{--                                                    <div class="text-left">@lang('front.infrastructure-Affordable Housing')</div>--}}
    {{--                                                </div>--}}
    {{--                                                <div class="list-item bg-success p-3 mb-3 rounded text-white">--}}
    {{--                                                    <div class="d-flex align-items-center h-100 w-100 justify-content-between"></div>--}}
    {{--                                                    <div class="text-left">@lang('front.infrastructure-Football Stadium')</div>--}}
    {{--                                                </div>--}}
    {{--                                                <div class="list-item bg-success p-3 mb-3 rounded text-white">--}}
    {{--                                                    <div class="d-flex align-items-center h-100 w-100 justify-content-between"></div>--}}
    {{--                                                    <div class="text-left">@lang('front.infrastructure-University')</div>--}}
    {{--                                                </div>--}}
    {{--                                                <div class="list-item bg-success p-3 mb-3 rounded text-white">--}}
    {{--                                                    <div class="d-flex align-items-center h-100 w-100 justify-content-between"></div>--}}
    {{--                                                    <div class="text-left">@lang('front.infrastructure-Hospital')</div>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="col-md-4">--}}
    {{--                                            <div class="list-custom-1 no-dots">--}}
    {{--                                                <div class="list-item bg-success p-3 mb-3 rounded text-white">--}}
    {{--                                                    <div class="d-flex align-items-center h-100 w-100 justify-content-between"></div>--}}
    {{--                                                    <div class="text-left">@lang('front.infrastructure-Science Techno Park')</div>--}}
    {{--                                                </div>--}}
    {{--                                                <div class="list-item bg-success p-3 mb-3 rounded text-white">--}}
    {{--                                                    <div class="d-flex align-items-center h-100 w-100 justify-content-between"></div>--}}
    {{--                                                    <div class="text-left">@lang('front.infrastructure-Village Road')</div>--}}
    {{--                                                </div>--}}
    {{--                                                <div class="list-item bg-success p-3 mb-3 rounded text-white">--}}
    {{--                                                    <div class="d-flex align-items-center h-100 w-100 justify-content-between"></div>--}}
    {{--                                                    <div class="text-left">@lang('front.infrastructure-Hospital')</div>--}}
    {{--                                                </div>--}}
    {{--                                                <div class="list-item bg-success p-3 mb-3 rounded text-white">--}}
    {{--                                                    <div class="d-flex align-items-center h-100 w-100 justify-content-between"></div>--}}
    {{--                                                    <div class="text-left">@lang('front.infrastructure-Irrigation Work')</div>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}

    {{--                                <hr>--}}

    {{--                                <div class="section section-small">--}}
    {{--                                    <div class="container-large">--}}
    {{--                                        <div class="section--header-custom row mb-4">--}}
    {{--                                            <div class="col-md-6">--}}
    {{--                                                <h1>@lang('front.infrastructure-West Java Strategic Project')</h1>--}}
    {{--                                            </div>--}}
    {{--                                            <div class="col-md-6">--}}
    {{--                                                <div class="row">--}}
    {{--                                                    <div class="col-md-6">--}}
    {{--                                                        <p><span class="font-small">Total Project</span><br> <span class="font-semibold" style="font-size:3.5rem;">209</span><br><span class="font-small">Project</span></p>--}}
    {{--                                                    </div>--}}
    {{--                                                    <div class="col-md-6">--}}
    {{--                                                        <p><span class="font-small">USD</span><br> <span class="font-semibold" style="font-size:3.5rem;">59.9</span><br><span class="font-small">Billion</span></p>--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                        <img src="{{url('')}}/old-assets/frontend/images/west-java-strategic-project.png" class="w-100 d-block mb-4">--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}

    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}


    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

    @include('layouts.about-west-java')

@stop

@section('top-content')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"/>

    <!-- #Prerequisite 1 -  Mapbox CSS -->
    <link rel="stylesheet" type="text/css" href="https://api.tiles.mapbox.com/mapbox-gl-js/v0.38.0/mapbox-gl.css">

    <!-- #Prerequisite 2 -  Map-style - (custom css) -->
    <link rel="stylesheet" type="text/css" href="{{url('')}}/emaps/css/map-style.css">
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

    <!-- Mapbox GL JS-->
    <script src="https://api.tiles.mapbox.com/mapbox-gl-js/v0.38.0/mapbox-gl.js"></script>

    <!-- AXIOS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>

    <!-- #DATA -->
    <script src="{{url('')}}/emaps/store.js"></script>

    <!-- #Map Script-->
    <script src="{{url('')}}/emaps/map-init.js"></script>
@stop
