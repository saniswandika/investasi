@extends('layouts.frontend')

@section('content')
    <div class="jumbotron jumbotron-fluid nav-margin" style="background-image:
            /* top, transparent red */
            linear-gradient(151deg,
            rgba(52,122,74, 0.60),
            rgba(253,196,38, 0.10)
            ),
            /* your image */
            url('{{url('')}}/old-assets/frontend/images/front-hero-village.jpg'); background-size: cover; background-position: center top; background-repeat: no-repeat; background-attachment: fixed; height: 500px">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-lg-6 text-white">
                    <h1 class="display-1 text-warning">06</h1>
                    <h3 class="display-3 text-white">@lang('front.digital-province-West Java')</h3>
                    <p class="lead">@lang('front.digital-province-Helping')</p>
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

                        <div class="container-large">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="sticky-top" style="top: 5em">
                                        <img src="{{url('')}}/old-assets/frontend/images/logo-desa-digital.png" class="w-75 d-inline-block h-auto mb-4"/>
                                        <p>
                                            @lang('front.digital-province-Digital Village aim')
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card shadow border-0 mb-3">
                                        <div class="p-3">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 bg-green p-2 mr-3 rounded">
                                                    <h5 class="mb-0 color-white">01</h5>
                                                </div>
                                                <div>
                                                    <h5 class="font-semibold mb-0">@lang('front.digital-province-WiFi Transmiter and Router')</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card shadow border-0 mb-3">
                                        <div class="p-3">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 bg-green p-2 mr-3 rounded">
                                                    <h5 class="mb-0 color-white">02</h5>
                                                </div>
                                                <div>
                                                    <h5 class="font-semibold mb-0">@lang('front.digital-province-Village\'s Social Media')</h5>
                                                    <ul class="list-horizontal font-small">
                                                        <li>Promotions</li>
                                                        <li>News</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card shadow border-0 mb-3">
                                        <div class="p-3">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 bg-green p-2 mr-3 rounded">
                                                    <h5 class="mb-0 color-white">03</h5>
                                                </div>
                                                <div>
                                                    <h5 class="font-semibold mb-0">@lang('front.digital-province-Village\'s Chiefs WhatsApp Group')</h5>
                                                    <ul class="list-horizontal font-small">
                                                        <li>Major</li>
                                                        <li>Governor</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card shadow border-0 mb-3">
                                        <div class="p-3">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 bg-green p-2 mr-3 rounded">
                                                    <h5 class="mb-0 color-white">04</h5>
                                                </div>
                                                <div>
                                                    <h5 class="font-semibold mb-0">@lang('front.digital-province-Village\'s Residents WhatsApp Group')</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card shadow border-0 mb-3">
                                        <div class="p-3">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 bg-green p-2 mr-3 rounded">
                                                    <h5 class="mb-0 color-white">05</h5>
                                                </div>
                                                <div>
                                                    <h5 class="font-semibold mb-0">@lang('front.digital-province-Village Service Software')</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card shadow border-0 mb-3">
                                        <div class="p-3">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 bg-green p-2 mr-3 rounded">
                                                    <h5 class="mb-0 color-white">06</h5>
                                                </div>
                                                <div>
                                                    <h5 class="font-semibold mb-0">@lang('front.digital-province-Digital Business')</h5>
                                                    <ul class="list-horizontal font-small">
                                                        <li>Commodities Trading</li>
                                                        <li>Content Creator</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card shadow border-0 mb-3">
                                        <div class="p-3">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 bg-green p-2 mr-3 rounded">
                                                    <h5 class="mb-0 color-white">07</h5>
                                                </div>
                                                <div>
                                                    <h5 class="font-semibold mb-0">@lang('front.digital-province-Agricultural Based Software')</h5>
                                                    <ul class="list-horizontal font-small">
                                                        <li>E-Fishery</li>
                                                        <li>E-Drip Irrigation</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card shadow border-0">
                                        <div class="p-3">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 bg-green p-2 mr-3 rounded">
                                                    <h5 class="mb-0 color-white">08</h5>
                                                </div>
                                                <div>
                                                    <h5 class="font-semibold mb-0">@lang('front.digital-province-Village Command Center')</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="line-separator"></div>
                        <div class="container-large">
                            <div class="mb-4 pr-4">
                                <h1>@lang('front.digital-province-Digital Village Potential Theme')</h1>
                                <div class="line-style">
                                    <div class="line-style-3"></div>
                                    <div class="line-style-2"></div>
                                </div>
                            </div>
                            <div class="card-group-custom card-group-shadow card-group-25 ">
                                <div class="card-item mb-4">
                                    <div class="card-item--inner">
                                        <img src="{{url('')}}/old-assets/frontend/images/digital-village-1.jpg" class="block w-100">
                                        <div class="card-body card-body-normal">
                                            <div class="font-semibold font-s-medium mb-2 color-green">@lang('front.digital-province-Smart Catfish Village')</div>
                                            <p class="font-s-small mb-0">@lang('front.digital-province-Collaborative')</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-item mb-4">
                                    <div class="card-item--inner">
                                        <img src="{{url('')}}/old-assets/frontend/images/digital-village-2.jpg" class="block w-100">
                                        <div class="card-body card-body-normal">
                                            <div class="font-semibold font-s-medium mb-2 color-green">@lang('front.digital-province-Digital Learning')</div>
                                            <p class="font-s-small mb-0">@lang('front.digital-province-Enhancing')</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-item mb-4">
                                    <div class="card-item--inner">
                                        <img src="{{url('')}}/old-assets/frontend/images/digital-village-3.jpg" class="block w-100">
                                        <div class="card-body card-body-normal">
                                            <div class="font-semibold font-s-medium mb-2 color-green">@lang('front.digital-province-Art & Design Village')</div>
                                            <p class="font-s-small mb-0">@lang('front.digital-province-Providing')</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-item mb-4">
                                    <div class="card-item--inner">
                                        <img src="{{url('')}}/old-assets/frontend/images/digital-village-4.jpg" class="block w-100">
                                        <div class="card-body card-body-normal">
                                            <div class="font-semibold font-s-medium mb-2 color-green">@lang('front.digital-province-Virtual Administration')</div>
                                            <p class="font-s-small mb-0">@lang('front.digital-province-Providing high')</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="line-separator"></div>
                        <div class="container-large">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="mb-4 pr-4">
                                        <h1>@lang('front.digital-province-Investment Opportunities')</h1>
                                        <div class="line-style">
                                            <div class="line-style-3"></div>
                                            <div class="line-style-2"></div>
                                        </div>
                                    </div>
                                    <div class="d-block w-100">
                                        <div class="font-s-large font-semibold color-green">@lang('front.digital-province-Hardware')</div>
                                        <div class="">@lang('front.digital-province-We encourage')</div>
                                    </div>
                                    <div class="line-separator line-separator--small"></div>
                                    <div class="d-block w-100">
                                        <div class="font-s-large font-semibold color-green">@lang('front.digital-province-Software')</div>
                                        <div class="">@lang('front.digital-province-We propose')</div>
                                    </div>
                                    <div class="line-separator line-separator--small"></div>
                                    <div class="d-block w-100">
                                        <div class="font-s-large font-semibold color-green">@lang('front.digital-province-Co-working Space')</div>
                                        <div class="">@lang('front.digital-province-We invite')</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <img src="{{url('')}}/old-assets/frontend/images/digital-infrastructure-pie.png" class="w-100 d-block mx-auto pl-5 pr-5">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



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
