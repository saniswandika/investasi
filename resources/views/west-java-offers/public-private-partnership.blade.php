@extends('layouts.frontend')

@section('content')
    <div class="jumbotron jumbotron-fluid nav-margin" style="background-image:
            /* top, transparent red */
            linear-gradient(151deg,
            rgba(52,122,74, 0.60),
            rgba(253,196,38, 0.10)
            ),
            /* your image */
            url('{{url('')}}/old-assets/frontend/images/toll-road-image-2.jpg'); background-size: cover; background-position: center top; background-repeat: no-repeat; background-attachment: fixed; height: 500px">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-lg-6 text-white">
                    <h1 class="display-1 text-warning">02</h1>
                    <h3 class="display-3 text-white">@lang('front.public-partnership-project-Public Private Partnership Project')</h3>
                    <p class="lead">@lang('front.public-partnership-project-We open')</p>
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
                                <img src="{{url('')}}/img/frontend/ppp_page-0001.jpg" class="w-100 d-block mb-4">
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
    {{--                        <div class="row">--}}
    {{--                            <div class="col-lg-4">--}}
    {{--                                <h3>@lang('front.public-partnership-project-Cooperation')</h3>--}}
    {{--                                <img src="{{url('img/ppp1.png')}}" class="w-100 h-auto mt-4" alt="">--}}
    {{--                            </div>--}}
    {{--                            <div class="col-lg-8">--}}
    {{--                                <h1>@lang('front.public-partnership-project-Advantages')</h1>--}}
    {{--                                <div class="line-style mb-4">--}}
    {{--                                    <div class="line-style-3"></div>--}}
    {{--                                    <div class="line-style-2"></div>--}}
    {{--                                </div>--}}
    {{--                                <div class="card">--}}
    {{--                                    <div class="card-body">--}}
    {{--                                        <h2>@lang('front.public-partnership-project-Goverment Support')</h2>--}}
    {{--                                        <p>--}}
    {{--                                            @lang('front.public-partnership-project-Viability')--}}
    {{--                                        </p>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="card">--}}
    {{--                                    <div class="card-body">--}}
    {{--                                        <h2>@lang('front.public-partnership-project-Goverment Guarantee')</h2>--}}
    {{--                                        <p>--}}
    {{--                                            @lang('front.public-partnership-project-The aim')--}}
    {{--                                        </p>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="card">--}}
    {{--                                    <div class="card-body">--}}
    {{--                                        <h2>@lang('front.public-partnership-project-West Java PPP Node')</h2>--}}
    {{--                                        <p>--}}
    {{--                                            @lang('front.public-partnership-project-An institution')--}}
    {{--                                        </p>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}

    {{--                            <div class="col-lg-12 mt-5">--}}
    {{--                                <h1>@lang('front.public-partnership-project-West Java Public Private Partnership')</h1>--}}
    {{--                                <div class="line-style">--}}
    {{--                                    <div class="line-style-3"></div>--}}
    {{--                                    <div class="line-style-2"></div>--}}
    {{--                                </div>--}}
    {{--                                <div id='map' class="w-100 nav-margin mt-3" style='height: 600px;'></div>--}}
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
    <script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet'/>

    <style>
        #marker2 {
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

        .mapboxgl-ctrl-bottom-right{
            z-index: 0 !important;
        }

    </style>
@stop

@section('bottom-content')
    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoidmFnYW56YWRpZ2l0YWwiLCJhIjoiY2tldDZwYmhzM3c4eDJ1bzd1bnR1bXAxeCJ9.8lNjmRMZl7gC6YUdxQl2eQ';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/vaganzadigital/cketdvgn48z3119s6z4ld8mnx',
            center: [ 107.1914729,-6.8525437], // starting position
            zoom: 7.5 // starting zoom
        });
        map.addControl(new mapboxgl.NavigationControl());

        var monument = [107.0172909, -6.971318];
        var monument2 = [108.1748799, -6.517043];

        // create the popup
        var popup = [];

        popup[1] = new mapboxgl.Popup({ offset: 25 }).setHTML(
            '<h3 class="mb-1 pb-0">Public Street Lighting</h3><a href="{{route('investment-oportunity.show',['slug'=>1])}}" class="btn btn-primary btn-sm">View</a><a href="#" class="btn btn-primary btn-sm">Direction</a></div>'
        );

        popup[2] = new mapboxgl.Popup({ offset: 25 }).setHTML(
            '<h3 class="mb-1 pb-0">Legok Nangka Solid Waste Treatment Plan</h3><a href="{{route('investment-oportunity.show',['slug'=>1])}}" class="btn btn-primary btn-sm">View</a><a href="#" class="btn btn-primary btn-sm">Direction</a></div>'
        );

        // create DOM element for the marker
        var el = document.createElement('div');
        el.id = 'marker2';

        var el2 = document.createElement('div');
        el2.id = 'marker2';

        var marker = [];

        // create the marker
        marker[1] = new mapboxgl.Marker(el)
            .setLngLat(monument)
            .setPopup(popup[1]) // sets a popup on this marker
            .addTo(map);

        // create the marker
        marker[2] = new mapboxgl.Marker(el2)
            .setLngLat(monument2)
            .setPopup(popup[2]) // sets a popup on this marker
            .addTo(map);

        function flyToPos(lng, lat, zoom, id) {

            for(var i = 1; i < 3; i++){
                popup[i].remove();
            }

            map.flyTo({
// These options control the ending camera position: centered at
// the target, at zoom level 9, and north up.
                center: [lng,lat],
                zoom: zoom,
                bearing: 0,

// These options control the flight curve, making it move
// slowly and zoom out almost completely before starting
// to pan.
                speed: 1.5, // make the flying slow
                curve: 1, // change the speed at which it zooms out

// This can be any easing function: it takes a number between
// 0 and 1 and returns another number between 0 and 1.
                easing: function(t) {
                    return t;
                },

// this animation is considered essential with respect to prefers-reduced-motion
                essential: true

            });
            popup[id].addTo(map);
        }


    </script>
@stop
