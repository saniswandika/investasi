@extends('layouts.frontend')

@section('content')
    <!-- Header -->

    <div class="jumbotron jumbotron-fluid nav-margin" style="background-image:
    /* top, transparent red */
    linear-gradient(151deg,
      rgba(0,167,229, 0.95),
      rgba(253,196,38, 0.40)
    ),
    /* your image */
    url('https://images.unsplash.com/photo-1599520556865-74c64872ed74?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1648&q=80'); background-size: cover; background-position: center top; background-repeat: no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-white">
                    <h1 class="display-3 text-white">{{$investasi->judul_investasi}}</h1>
                    <p><small>{{$investasi->mini_deskripsi}}</small></p>
                    <div class="line-style mb-2">
                        <div class="line-style-1"></div>
                        <div class="line-style-2"></div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <p class="mb-1">Project Value: @if(empty($investasi->project_value))Not Yet @else IDR. {{number_format($investasi->project_value, 0,',','.')}} @endif</p>
                            <p class="mb-1">Project Category: Building</p>
                        </div>
                        <div class="col-6">
                            <p class="mb-1">Location: {{$investasi->lokasi}}</p>
                        </div>
                    </div>
                    <div>
                        <div class="mt-4" id="share"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div id='map' class="w-100 mb-5" style='height: 250px;'></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt--6">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <nav class="breadcrumb mb-0">
                        <a class="breadcrumb-item" href="{{route('front.home')}}">Home</a>
                        <a class="breadcrumb-item" href="{{route('investment-oportunity.index')}}">Investment Oportunities</a>
                        <span class="breadcrumb-item active">{{$investasi->judul_investasi}}</span>
                    </nav>
                    <div class="card-body">
                        <div class="nav-wrapper mb-4">
                            <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text"
                                role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab"
                                       data-toggle="tab" href="#tabs-icons-text-1" role="tab"
                                       aria-controls="tabs-icons-text-1" aria-selected="true"><i
                                            class="ni ni-world mr-2"></i>Project Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab"
                                       href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2"
                                       aria-selected="false"><i class="ni ni-briefcase-24 mr-2"></i>Investment Scheme</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab"
                                       href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3"
                                       aria-selected="false"><i class="ni ni-folder-17 mr-2"></i>Support File</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel"
                                 aria-labelledby="tabs-icons-text-1-tab">
                                {!! $investasi-> project_desc!!}
                            </div>
                            <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel"
                                 aria-labelledby="tabs-icons-text-2-tab">
                                {!! $investasi-> invest_scheme!!}
                            </div>
                            <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel"
                                 aria-labelledby="tabs-icons-text-3-tab">
                                 <a class="btn btn-primary mb-3" href="{{url('')}}/invest/file/{{$investasi->support_file}}" target="_blank">Download File</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="pb-6 pt-4">
        <div class="container">
            <div class="row row-grid align-items-center">
                <div class="col-md-7 order-md-2">
                    <div class="glide">
                        <div class="glide__track pl-5" data-glide-el="track">
                            <ul class="glide__slides">
                                @foreach($invest as $i)
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
                                                <h3 class="card-title pb-0 mb-0">IDR. {{number_format($i->project_value, 0,',','.')}}</h3>

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
                        <h1>Investment Opportunity</h1>
                        <p>Various kinds of investment opportunities exist in West Java.</p>
                        <a href="{{route('investment-oportunity.index')}}" class="btn btn-success">View All</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.invest-west-java')

@stop

@section('top-content')
    <link rel="stylesheet" href="{{url('css/glide/glide.core.css')}}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet'/>

    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.css" />

    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-flat.css" />

    <style>
        #marker {
            background-image: url('{{url('img/investment-point@2x.png')}}');
            background-size: contain;
            background-position: center bottom;
            background-repeat: no-repeat;
            width: 50px;
            height: 50px;
            cursor: pointer;
        }

        .mapboxgl-popup {
            max-width: 200px;
        }

        .mapboxgl-ctrl-bottom-right {
            z-index: 0 !important;
        }

        .jssocials-share-link { border-radius: 50%; }

    </style>
@stop

@section('bottom-content')
    <script src="{{url('js/glide/glide.js')}}"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.min.js"></script>
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
        mapboxgl.accessToken = 'pk.eyJ1IjoidmFnYW56YWRpZ2l0YWwiLCJhIjoiY2tldDZwYmhzM3c4eDJ1bzd1bnR1bXAxeCJ9.8lNjmRMZl7gC6YUdxQl2eQ';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/vaganzadigital/cketdvgn48z3119s6z4ld8mnx',
            center: [{{$investasi->long}}, {{$investasi->lat}}], // starting position
            zoom: 7.5 // starting zoom
        });
        map.addControl(new mapboxgl.NavigationControl());

        var monument = [{{$investasi->long}}, {{$investasi->lat}}];

        // create the popup
        popup = new mapboxgl.Popup({offset: 25}).setHTML(
            '<h5 class="mb-1 pb-0">{{$investasi->judul_investasi}}</h5><a href="#" class="btn btn-primary btn-sm">Direction</a></div>'
        );

        // create DOM element for the marker
        var el = document.createElement('div');
        el.id = 'marker';

        // create the marker
        marker = new mapboxgl.Marker(el)
            .setLngLat(monument)
            .setPopup(popup) // sets a popup on this marker
            .addTo(map);

        popup.addTo(map);
    </script>

    <script>
        $("#share").jsSocials({
            showLabel: false,
            showCount: false,
            shares: ["email", "twitter", "facebook", "linkedin", "whatsapp"]
        });
    </script>
@stop
