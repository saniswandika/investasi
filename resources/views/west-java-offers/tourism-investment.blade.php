@extends('layouts.frontend')

@section('content')
    <div class="jumbotron jumbotron-fluid nav-margin" style="background-image:
            /* top, transparent red */
            linear-gradient(151deg,
            rgba(52,122,74, 0.60),
            rgba(253,196,38, 0.10)
            ),
            /* your image */
            url('{{url('')}}/old-assets/frontend/images/tourism-hero-image-1.jpg'); background-size: cover; background-position: center top; background-repeat: no-repeat; background-attachment: fixed; height: 500px">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-lg-6 text-white">
                    <h1 class="display-1 text-warning">05</h1>
                    <h3 class="display-3 text-white">@lang('front.tourism-investment-Tourism Investment')</h3>
                    <p class="lead">@lang('front.tourism-investment-With a widely')</p>
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
                            <div class="section--header-custom row mb-4">
                                <div class="col-md-6">
                                    <h1>@lang('front.tourism-investment-West Java Tourism Factsheet')</h1>
                                    <div class="line-style">
                                        <div class="line-style-3"></div>
                                        <div class="line-style-2"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <p class="font-s-medium">@lang('front.tourism-investment-The beauty')</p>
                                    <p class="lead" style="color:#00806A">@lang('front.tourism-investment-1.469')</p>
                                    <p class="lead" style="color:#00806A">@lang('front.tourism-investment-990')</p>
                                    <p class="lead" style="color:#00806A">@lang('front.tourism-investment-19')</p>
                                    <p class="lead" style="color:#00806A">@lang('front.tourism-investment-40')</p>
                                    <p class="lead" style="color:#00806A">@lang('front.tourism-investment-11')</p>
                                    <p class="lead" style="color:#00806A">@lang('front.tourism-investment-500')</p>
                                    <p class="lead" style="color:#00806A">@lang('front.tourism-investment-1000')</p>
                                </div>
                            </div>
                            <img src="{{url('')}}/old-assets/frontend/images/tourism-image-grid-1.jpg" class="d-block rounded-lg rounded shadow w-100 h-auto"/>
                        </div>
                        <div class="line-separator mb-3"></div>
                        <h1>@lang('front.tourism-investment-West Java Tourism Map')</h1>
                        <div class="line-style">
                            <div class="line-style-3"></div>
                            <div class="line-style-2"></div>
                        </div>
                        <div id='map' class="w-100 nav-margin mb-4 mt-3" style='height: 600px;'></div>
                        <hr>
                        <div class="container-large">
                            <h1>@lang('front.tourism-investment-Tourism Map Profile')</h1>
                            <div class="line-style mb-4">
                                <div class="line-style-3"></div>
                                <div class="line-style-2"></div>
                            </div>
                            <div class="card-group-custom card-group-shadow card-group-25 ">
                                @foreach($maptourism as $m)
                                    <div class="card-item mb-4">
                                        <div class="card card-lift--hover">
                                            <a href="#map" onclick="flyToPos({{$m->long}}, {{$m->lat}}, 12, {{$m->id}})">
                                                <img src="{{url('')}}/img/tourism/thumbnail/{{$m->image}}" class="block w-100 card-img-top">
                                            </a>
                                            <div class="card-body card-body-normal">
                                                <div class="font-semibold font-s-small">{{$m->name}}</div>
                                                <div class="font-s-small text-muted">{{$m->category}}</div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="line-separator"></div>
                        <div class="container-large">
                            <h1>@lang('front.tourism-investment-Future Tourism Development')</h1>
                            <div class="line-style mb-4">
                                <div class="line-style-3"></div>
                                <div class="line-style-2"></div>
                            </div>
                            <div class="card-group-custom card-group-shadow card-group-25 ">
                                @foreach($futuretourism as $f)
                                    <div class="card-item mb-4">
                                        <div class="card card-lift--hover">
                                            <a href="{{$f->link}}" target="_blank"><img src="{{url('')}}/img/tourism/thumbnail/{{$f->image}}" class="block w-100 card-img-top"></a>
                                            <div class="card-body card-body-normal">
                                                <div class="font-semibold font-s-small">{{$f->name}}</div>
                                                <div class="font-s-small text-muted">{{$f->category}}</div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="line-separator"></div>
                        <div class="container-large">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="section--header-custom mb-2 pr-4">
                                        <h1>@lang('front.tourism-investment-Investment Opportunities')</h1>
                                    </div>
                                    <div class="d-block w-100">
                                        <div class="font-s-large font-semibold color-green">@lang('front.tourism-investment-Accessibility')</div>
                                        <div class="">@lang('front.tourism-investment-We encourage')</div>
                                    </div>
                                    <div class="line-separator line-separator--small"></div>
                                    <div class="d-block w-100">
                                        <div class="font-s-large font-semibold color-green">@lang('front.tourism-investment-Attraction')</div>
                                        <div class="">@lang('front.tourism-investment-We propose')</div>
                                    </div>
                                    <div class="line-separator line-separator--small"></div>
                                    <div class="d-block w-100">
                                        <div class="font-s-large font-semibold color-green">@lang('front.tourism-investment-Amenities')</div>
                                        <div class="">@lang('front.tourism-investment-We invite')</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <img src="{{url('')}}/old-assets/frontend/images/3a-tourism.png" class="w-100 d-block mx-auto pl-5 pr-5">
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

                @foreach($maptourism as $i)
        var monument{{$i->id}} = [{{$i->long}}, {{$i->lat}}];
        @endforeach

        // create the popup
        var popup = [];
        @foreach($maptourism as $i)
            popup[{{$i->id}}] = new mapboxgl.Popup({ offset: 25 }).setHTML(
            '<h3 class="mb-1 pb-0">{{$i->name}}</h3><a href="{{$i->link}}" class="btn btn-primary btn-sm" target="_blank">View</a><a href="https://www.google.com/maps?q=loc:{{$i->lat}},{{$i->long}}" class="btn btn-primary btn-sm" target="_blank">Direction</a></div>'
        );
        @endforeach

        @foreach($maptourism as $i)
        // create DOM element for the marker
        var el{{$i->id}} = document.createElement('div');
        el{{$i->id}}.id = 'marker2';
                @endforeach

        var marker = [];

        // create the marker
        @foreach($maptourism as $i)
            marker[{{$i->id}}] = new mapboxgl.Marker(el{{$i->id}})
            .setLngLat(monument{{$i->id}})
            .setPopup(popup[{{$i->id}}]) // sets a popup on this marker
            .addTo(map);
        @endforeach

        function flyToPos(lng, lat, zoom, id) {

            for(var i = {{$i->id-$i->id+1}}; i < {{$i->id}}; i++){
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