@extends('layouts.frontend')

@section('content')
    <div id='map' class="w-100 nav-margin" style='height: 600px;'></div>

    <section class="section section-lg pt-lg-0 mt--5 pb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="row">
                        @foreach($investasi as $i)
                            <div class="col-lg-3 mb-4">
                                <div class="card h-100 card-lift--hover shadow border-0">
                                    <a href="#" onclick="flyToPos({{$i->long}}, {{$i->lat}}, 12, {{$i->invest_id}})"><img class="card-img-top card-img-sm" src="@if(empty($i->image)){{url('img/view-8.jpg')}}@else{{url('')}}/invest/thumbnail/{{$i->image}}@endif" alt=""></a>
                                    <div class="card-body">
                                        <a href="#" onclick="flyToPos({{$i->long}}, {{$i->lat}}, 12, {{$i->invest_id}})"><h4 class="h3 text-success text-uppercase">{{$i->judul_investasi}}</h4></a>
                                        <div class="line-style">
                                            <div class="line-style-1"></div>
                                            <div class="line-style-2"></div>
                                        </div>
                                        <p class="description mt-3 mb-0 pb-0">Project Value:</p>
                                        <p>@if(empty($i->project_value))Not Yet @else IDR. {{number_format($i->project_value, 0,',','.')}} @endif</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row mt-4 p-4">
                        <div class="col-lg-12 d-flex justify-content-center">
                            {{$investasi->appends(Request::except('page'))->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.invest-west-java')

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
                @foreach($investasi as $i)
        var monument{{$i->invest_id}} = [{{$i->long}}, {{$i->lat}}];
        @endforeach

        // create the popup
        var popup = [];
        @foreach($investasi as $i)
            popup[{{$i->invest_id}}] = new mapboxgl.Popup({ offset: 25 }).setHTML(
            '<h3 class="mb-1 pb-0">{{$i->judul_investasi}}</h3><small class="mt-0 mb-3">Project Value: IDR {{number_format($i->project_value, 0, ',','.')}}</small><div class="mt-2"><a href="{{route('investment-oportunity.show',['slug'=>$i->slug])}}" class="btn btn-primary btn-sm">View</a><a href="https://www.google.com/maps?q=loc:{{$i->lat}},{{$i->long}}" class="btn btn-primary btn-sm" target="_blank">Direction</a></div>'
        );
        @endforeach

        // create DOM element for the marker
                @foreach($investasi as $i)
        var el{{$i->invest_id}} = document.createElement('div');
        el{{$i->invest_id}}.id = 'marker2';
                @endforeach

        var marker = [];

        // create the marker
        @foreach($investasi as $i)
            marker[{{$i->invest_id}}] = new mapboxgl.Marker(el{{$i->invest_id}})
            .setLngLat(monument{{$i->invest_id}})
            .setPopup(popup[{{$i->invest_id}}]) // sets a popup on this marker
            .addTo(map);
        @endforeach

        function flyToPos(lng, lat, zoom, id) {

            for(var i = {{$i->invest_id}}; i < {{$i->invest_id+$investasi->count()-1}}; i++){
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