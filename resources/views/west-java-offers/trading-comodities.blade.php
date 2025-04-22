@extends('layouts.frontend')

@section('content')
    <div class="jumbotron jumbotron-fluid nav-margin" style="background-image:
            /* top, transparent red */
            linear-gradient(151deg,
            rgba(52,122,74, 0.60),
            rgba(253,196,38, 0.10)
            ),
            /* your image */
            url('{{url('')}}/old-assets/frontend/images/trading-head-banner.jpg'); background-size: cover; background-position: center top; background-repeat: no-repeat; background-attachment: fixed; height: 500px">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-lg-6 text-white">
                    <h1 class="display-1 text-warning">04</h1>
                    <h3 class="display-3 text-white">@lang('front.trading-comodities-Trading Commodities')</h3>
                    <p class="lead">@lang('front.trading-comodities-Explore')</p>
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
                        <div class="row">
                            <div class="col-lg-5">
                                <img style="width: 100%; height: 300px; object-fit: cover"
                                     src="{{url('old-assets/frontend/images/bromo-image.jpg')}}" class="rounded" alt="">
                            </div>
                            <div class="col-lg-7">
                                <h1>@lang('front.trading-comodities-Resources')</h1>
                                <div class="line-style mb-4">
                                    <div class="line-style-3"></div>
                                    <div class="line-style-2"></div>
                                </div>
                                <p class="lead">
                                    @lang('front.trading-comodities-Located')
                                </p>
                            </div>

                            <div class="col-lg-12">
                                <hr>
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <div class="font-s-xlarge font-semibold" style="color:#00806A">180</div>
                                        <div class="font-s-medium font-semibold">@lang('front.trading-comodities-180')
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="font-s-xlarge font-semibold" style="color:#00806A">70%</div>
                                        <div class="font-s-medium font-semibold">@lang('front.trading-comodities-70%')</div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="font-s-xlarge font-semibold" style="color:#00806A">67</div>
                                        <div class="font-s-medium font-semibold">@lang('front.trading-comodities-67')
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <div class="font-s-xlarge font-semibold" style="color:#00806A">2.5</div>
                                        <div class="font-s-medium font-semibold">@lang('front.trading-comodities-2.5')
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="font-s-xlarge font-semibold" style="color:#00806A">92</div>
                                        <div class="font-s-medium font-semibold">@lang('front.trading-comodities-92')
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="font-s-xlarge font-semibold" style="color:#00806A">36</div>
                                        <div class="font-s-medium font-semibold">@lang('front.trading-comodities-36')
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 mt-5">
                                <hr>
                                <div class="row">
                                    @foreach($resources as $r)
                                        <div class="col-lg-3 mb-4">
                                            <div class="card card-lift--hover">
                                                <img src="{{url('')}}/img/commodities/thumbnail/{{$r->image}}"
                                                     class="block card-img-top w-100">
                                                <div class="card-body card-body-normal">
                                                    <div class="card-title font-semibold font-s-medium">{{$r->name}}</div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="d-block font-s-small font-semibold">@lang('front.trading-comodities-content-Plantation Area')
                                                            </div>
                                                            <div class="d-block font-s-medium font-semibold">{{$r->plant_area}}</div>
                                                            <div class="d-block font-s-small">Thousand Ha</div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="d-block font-s-small font-semibold">@lang('front.trading-comodities-content-Production')</div>
                                                            <div class="d-block font-s-medium font-semibold">{{$r->production}}</div>
                                                            <div class="d-block font-s-small">Thousand Ton/Year</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <h1>@lang('front.trading-comodities-Coffee Production Area')</h1>
                                        <div class="line-style">
                                            <div class="line-style-3"></div>
                                            <div class="line-style-2"></div>
                                        </div>
                                        <p class="mt-3 lead">
                                            @lang('front.trading-comodities-West Java')
                                        </p>
                                    </div>
                                    <div class="col-lg-4">
                                        <h3 class="display-3 text-primary">Arabica</h3>
                                        <div class="card">
                                            <div class="card-body p-3">
                                                <h4 class="text-success mb-0">Total District</h4>
                                                <h3 class="mt-0 display-4">17 District</h3>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body p-3">
                                                <h4 class="text-success mb-0">Total Area</h4>
                                                <h3 class="mt-0 display-4">17.733 HA</h3>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body p-3">
                                                <h4 class="text-success mb-0">@lang('front.trading-comodities-content-Production')</h4>
                                                <h3 class="mt-0 display-4">9.975 TON</h3>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-4">
                                        <h3 class="display-3 text-primary">Robusta</h3>
                                        <div class="card">
                                            <div class="card-body p-3">
                                                <h4 class="text-success mb-0">Total District</h4>
                                                <h3 class="mt-0 display-4">12 District</h3>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body p-3">
                                                <h4 class="text-success mb-0">Total Area</h4>
                                                <h3 class="mt-0 display-4">25.364 HA</h3>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body p-3">
                                                <h4 class="text-success mb-0">@lang('front.trading-comodities-content-Production')</h4>
                                                <h3 class="mt-0 display-4">10.887 TON</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        Puntang Mountain, Cikuray, Papandayan, Caringin, Patuha, Halu, Beser,
                                        Burangrang, Manglayang, Tangkuban Parahu, Mekarwangi, Malabar, Cibeber, Pasundan
                                        Honey,Andungsari.
                                    </div>
                                </div>
                                <div id='map' class="w-100 nav-margin mt-3" style='height: 600px;'></div>
                            </div>
                            <div class="col-lg-12">
                                <hr>

                                <div class="row">
                                    <div class="col-lg-12 mb-4">
                                        <h1>@lang('front.trading-comodities-Tropical Fruits')</h1>
                                        <div class="line-style">
                                            <div class="line-style-3"></div>
                                            <div class="line-style-2"></div>
                                        </div>
                                    </div>
                                    @foreach($fruits as $f)
                                        <div class="col-lg-3 mb-4">
                                            <div class="card h-100 card-lift--hover">
                                                <img src="{{url('')}}/img/commodities/thumbnail/{{$f->image}}"
                                                     class="card-img-top block w-100">
                                                <div class="card-body card-body-normal">
                                                    <div class="card-title font-semibold font-s-large">{{$f->name}}</div>
                                                    <div class="block mb-3">
                                                        <div class="font-semibold font-s-medium">{{number_format($f->production, 0, ',','.')}}</div>
                                                        <div class="font-semibold font-s-small">KW/YEAR</div>
                                                    </div>
                                                    <div class="text-muted">{{$f->location}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="d-block">Source: West Java Crops and Horticulture Office, 2018</div>
                                <hr>
                            </div>
                            <div class="col-lg-4">
                                <div class="col-lg-12 mb-4">
                                    <h1>@lang('front.trading-comodities-West Java Stated')</h1>
                                    <div class="line-style">
                                        <div class="line-style-3"></div>
                                        <div class="line-style-2"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-6 mb-4">
                                        <div class="card h-100 card-lift--hover">
                                            <img src="{{url('')}}/old-assets/frontend/images/tropical-fruits-1.jpg"
                                                 class="card-img-top block w-100">
                                            <div class="card-body card-body-normal">
                                                <a href="#"><div class="card-title text-dark display-4 mb-0">Mango</div></a>
                                                <div>
                                                    <span
                                                            class="badge badge-pill badge-primary mb-4">PT. Agro Jabar</span>
                                                </div>
                                                <div class="text-muted">
                                                    <ul>
                                                        <li>
                                                            Location: Purwakarta
                                                        </li>
                                                        <li>
                                                            Investment Value: IDR 6.000.000
                                                        </li>
                                                        <li>
                                                            Total Area: 4 HA
                                                        </li>
                                                        <li>
                                                            Factory Capacity: 120 Tons/week
                                                        </li>
                                                        <li>
                                                            Project Status: TBC
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-4">
                                        <div class="card h-100 card-lift--hover">
                                            <img src="{{url('')}}/old-assets/frontend/images/tropical-fruits-2.jpg"
                                                 class="card-img-top block w-100">
                                            <div class="card-body card-body-normal">
                                                <a href="#"><div class="card-title text-dark display-4 mb-0">Mangoosten</div></a>
                                                <div>
                                                    <span
                                                            class="badge badge-pill badge-primary mb-4">PTPN VIII</span>
                                                </div>
                                                <div class="text-muted">Investment about USD 638.000 in 93 HA. The productivity is around 1.142 kh/HA on average.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-block">Source: West Java Crops and Horticulture Office, 2018</div>
                                <hr>
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

        .mapboxgl-ctrl-bottom-right {
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
            center: [107.1914729, -6.8525437], // starting position
            zoom: 7.5 // starting zoom
        });
        map.addControl(new mapboxgl.NavigationControl());

                @foreach($coffee as $c)
        var monument{{$c->id}} = [{{$c->long}}, {{$c->lat}}];
        @endforeach

        // create the popup
        var popup = [];

        @foreach($coffee as $c)
            popup[{{$c->id}}] = new mapboxgl.Popup({ offset: 25 }).setHTML(
            '<h3 class="mb-1 pb-0">{{$c->location}}</h3><span class="badge badge-pill badge-primary mt-0">{{$c->name}}</span><div class="mt-3 text-sm">{{$c->plant_area}} HA, {{$c->production}} TON</div>'
        );
        @endforeach

        // create DOM element for the marker
                @foreach($coffee as $c)
        var el{{$c->id}} = document.createElement('div');
        el{{$c->id}}.id = 'marker2';
                @endforeach

        var marker = [];

        // create the marker
        @foreach($coffee as $c)
            marker[{{$c->id}}] = new mapboxgl.Marker(el{{$c->id}})
            .setLngLat(monument{{$c->id}})
            .setPopup(popup[{{$c->id}}]) // sets a popup on this marker
            .addTo(map);
        @endforeach

        function flyToPos(lng, lat, zoom, id) {

            for (var i = 1; i < 3; i++) {
                popup[i].remove();
            }

            map.flyTo({
// These options control the ending camera position: centered at
// the target, at zoom level 9, and north up.
                center: [lng, lat],
                zoom: zoom,
                bearing: 0,

// These options control the flight curve, making it move
// slowly and zoom out almost completely before starting
// to pan.
                speed: 1.5, // make the flying slow
                curve: 1, // change the speed at which it zooms out

// This can be any easing function: it takes a number between
// 0 and 1 and returns another number between 0 and 1.
                easing: function (t) {
                    return t;
                },

// this animation is considered essential with respect to prefers-reduced-motion
                essential: true

            });
            popup[id].addTo(map);
        }


    </script>
@stop