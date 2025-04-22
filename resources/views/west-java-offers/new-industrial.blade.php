@extends('layouts.frontend')

@section('content')
    <div class="jumbotron jumbotron-fluid nav-margin" style="background-image:
            /* top, transparent red */
            linear-gradient(151deg,
            rgba(52,122,74, 0.60),
            rgba(253,196,38, 0.10)
            ),
            /* your image */
            url('{{url('')}}/old-assets/frontend/images/front-hero-bg-4b.jpg'); background-size: cover; background-position: center top; background-repeat: no-repeat; background-attachment: fixed; height: 500px">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-lg-6 text-white">
                    <h1 class="display-1 text-warning">03</h1>
                    <h3 class="display-3 text-white">@lang('front.new-industrial-zones-New')</h3>
                    <p class="lead">@lang('front.new-industrial-zones-West Java')</p>
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

                            <div class="col-lg-3 pb-3">
                                <div class="card bg-warning h-100">
                                    <div class="card-body text-center">
                                        @lang('front.new-industrial-zones-INDUSTRIAL ESTATES')
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 pb-3">
                                <div class="card bg-warning h-100">
                                    <div class="card-body text-center">
                                        @lang('front.new-industrial-zones-TOTAL AREA')</div>
                                </div>
                            </div>

                            <div class="col-lg-3 pb-3">
                                <div class="card bg-warning h-100">
                                    <div class="card-body text-center">
                                        @lang('front.new-industrial-zones-REMAINING LAND')</div>
                                </div>
                            </div>

                            <div class="col-lg-3 pb-3">
                                <div class="card bg-warning h-100">
                                    <div class="card-body text-center">
                                        @lang('front.new-industrial-zones-TENANTS')</div>
                                </div>
                            </div>

                            <div class="col-12 mt-5">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h1>@lang('front.new-industrial-zones-List')</h1>
                                        <div class="line-style mb-4">
                                            <div class="line-style-3"></div>
                                            <div class="line-style-2"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 text-lg-right">
                                        <a class="btn btn-primary" href="{{route('front.industries')}}">West Java's
                                            Industrial Map</a>
                                    </div>
                                </div>
                                <div class="table-responsive py-4">
                                    <table class="table table-flush" id="datatable-basic">
                                        <thead class="thead-light">
                                        <tr>
                                            <th>Industrial Estate Name</th>
                                            <th>Company Name</th>
                                            <th>Location</th>
                                            <th>Size (Ha)</th>
                                            <th>Tenants</th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th>Industrial Estate Name</th>
                                            <th>Company Name</th>
                                            <th>Location</th>
                                            <th>Size (Ha)</th>
                                            <th>Tenants</th>
                                        </tr>
                                        </tfoot>
                                        <tbody>
                                        @foreach($industri as $i)
                                            <tr>
                                                <th>{{$i->name}}</th>
                                                <th>{{$i->company_name}}</th>
                                                <th>{{$i->location}}</th>
                                                <th>{{$i->total_area}}</th>
                                                <th>{{$i->total_salable_area}}</th>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="col-lg-12 mt-5">
                                <h1>Rebana Metropolitan</h1>
                                <div class="line-style">
                                    <div class="line-style-3"></div>
                                    <div class="line-style-2"></div>
                                </div>
                                <div id='map' class="w-100 nav-margin mt-3" style='height: 600px;'></div>

                                <div class="container mt-5">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                @foreach($industry as $i)
                                                    <div class="col-lg-3 mb-4">
                                                        <div class="card h-100 card-lift--hover shadow border-0">
                                                            <a href="#map" onclick="flyToPos({{$i->long}}, {{$i->lat}}, 12, {{$i->id}})"><img class="card-img-top card-img-sm" src="{{url('')}}/img/new-industry/thumbnail/{{$i->image}}" alt=""></a>
                                                            <div class="card-body">
                                                                <a href="#map" onclick="flyToPos(flyToPos({{$i->long}}, {{$i->lat}}, 12, {{$i->id}}))"><h4 class="h3 text-success text-uppercase">{{$i->name}}</h4></a>
                                                                <div class="line-style">
                                                                    <div class="line-style-1"></div>
                                                                    <div class="line-style-2"></div>
                                                                </div>
                                                                <p class="card-text">
                                                                    <span class="font-semibold font-s-small">{{$i->area}} Ha</span><br>
                                                                    <span class="font-semibold font-s-small">{!! $i->desc !!}</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                            {{--                                            <div class="row mt-4 p-4">--}}
                                            {{--                                                <div class="col-lg-12 d-flex justify-content-center">--}}
                                            {{--                                                    {{$industry->appends(Request::except('page'))->links()}}--}}
                                            {{--                                                </div>--}}
                                            {{--                                            </div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="section">
                                <div class="container-large">
                                    <div class="mb-4 pr-4">
                                        <h1>@lang('front.new-industrial-zones-Benefit')</h1>
                                        <div class="line-style">
                                            <div class="line-style-3"></div>
                                            <div class="line-style-2"></div>
                                        </div>
                                    </div>
                                    <div class="d-block">
                                        <div class="card shadow border-0 mb-4">
                                            <div class="card-body card-body-normal">
                                                <div class="d-flex align-items-center">
                                                    <img src="{{url('')}}/old-assets/frontend/images/icon-energy.png"
                                                         width="50" height="50" class="mr-4 flex-shrink-0"/>
                                                    <div>
                                                        <div class="d-block font-semibold">@lang('front.new-industrial-zones-Power Suply')</div>
                                                        <div class="mb-0 font-s-small">@lang('front.new-industrial-zones-Guaranteed')
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card shadow border-0 mb-4">
                                            <div class="card-body card-body-normal">
                                                <div class="d-flex align-items-center">
                                                    <img src="{{url('')}}/old-assets/frontend/images/icon-water.png"
                                                         width="50" height="50" class="mr-4 flex-shrink-0"/>
                                                    <div>
                                                        <div class="d-block font-semibold">@lang('front.new-industrial-zones-Water')</div>
                                                        <div class="mb-0 font-s-small">@lang('front.new-industrial-zones-Regional Water')
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card shadow border-0 mb-4">
                                            <div class="card-body card-body-normal">
                                                <div class="d-flex align-items-center">
                                                    <img src="{{url('')}}/old-assets/frontend/images/icon-data.png"
                                                         width="50" height="50" class="mr-4 flex-shrink-0"/>
                                                    <div>
                                                        <div class="d-block font-semibold">@lang('front.new-industrial-zones-Data Center')</div>
                                                        <div class="mb-0 font-s-small">@lang('front.new-industrial-zones-Initial').
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card shadow border-0 mb-4">
                                            <div class="card-body card-body-normal">
                                                <div class="d-flex align-items-center">
                                                    <img src="{{url('')}}/old-assets/frontend/images/icon-sez.png"
                                                         width="50" height="50" class="mr-4 flex-shrink-0"/>
                                                    <div>
                                                        <div class="d-block font-semibold">@lang('front.new-industrial-zones-SEZ')</div>
                                                        <div class="mb-0 font-s-small">@lang('front.new-industrial-zones-Provincial support')
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card shadow border-0 mb-4">
                                            <div class="card-body card-body-normal">
                                                <div class="d-flex align-items-center">
                                                    <img src="{{url('')}}/old-assets/frontend/images/icon-permit.png"
                                                         width="50" height="50" class="mr-4 flex-shrink-0"/>
                                                    <div>
                                                        <div class="d-block font-semibold">@lang('front.new-industrial-zones-Permit & License')</div>
                                                        <div class="mb-0 font-s-small">@lang('front.new-industrial-zones-Fully')
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
                                        <h1>@lang('front.new-industrial-zones-Impact')</h1>
                                        <div class="line-style">
                                            <div class="line-style-3"></div>
                                            <div class="line-style-2"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <div class="font-s-xlarge font-semibold color-gradation">10</div>
                                            <div class="font-s-medium font-semibold">@lang('front.new-industrial-zones-Potential')
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="font-s-xlarge font-semibold color-gradation">6.857</div>
                                            <div class="font-s-medium font-semibold">@lang('front.new-industrial-zones-Potential Companies')</div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="font-s-xlarge font-semibold color-gradation">13</div>
                                            <div class="font-s-medium font-semibold">@lang('front.new-industrial-zones-Potential Companies')</div>
                                            <div class="font-s-small">@lang('front.new-industrial-zones-Potential Industry Sectors')
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="font-s-xlarge font-semibold color-gradation">38.352 ha</div>
                                            @lang('front.new-industrial-zones-Potential Residential Area')
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            @lang('front.new-industrial-zones-Potential Residential')
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section section-large">
                                <div class="container-large">
                                    <div class="mb-4 pr-4">
                                        <h1>@lang('front.new-industrial-zones-Special Economic Zone')</h1>
                                        <div class="line-style">
                                            <div class="line-style-3"></div>
                                            <div class="line-style-2"></div>
                                        </div>
                                    </div>
                                    @lang('front.new-industrial-zones-A bounded')
                                </div>
                                <div class="line-separator"></div>
                                <div class="container-large">
                                    <div class="row">
                                        <div class="col-md-12 mb-5">
                                            <div class="mb-2 pr-4">
                                                <h2>@lang('front.new-industrial-zones-Incentives and Convenience')</h2>
                                                <div class="line-style">
                                                    <div class="line-style-3"></div>
                                                    <div class="line-style-2"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="d-block mb-3">
                                                        <h4 class="d-block font-semibold text-primary">1. @lang('front.new-industrial-zones-1')</h4>
                                                        <p>@lang('front.new-industrial-zones-We provide')</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="d-block mb-3">
                                                        <h4 class="d-block font-semibold text-primary">2. @lang('front.new-industrial-zones-2')</h4>
                                                        <p>@lang('front.new-industrial-zones-We provide multiple tax')</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="d-block mb-3">
                                                        <h4 class="d-block font-semibold text-primary">3. @lang('front.new-industrial-zones-3')</h4>
                                                        <p>@lang('front.new-industrial-zones-We provide convenience in import')</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="d-block mb-3">
                                                        <h4 class="d-block font-semibold text-primary">4. @lang('front.new-industrial-zones-4')</h4>
                                                        <p>@lang('front.new-industrial-zones-We provide full access')</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="d-block mb-3">
                                                        <h4 class="d-block font-semibold text-primary">5.
                                                            @lang('front.new-industrial-zones-5')</h4>
                                                        <p> @lang('front.new-industrial-zones-We provide convenience in immigration services')</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="d-block mb-3">
                                                        <h4 class="d-block font-semibold text-primary">6.
                                                            @lang('front.new-industrial-zones-6')</h4>
                                                        <p>@lang('front.new-industrial-zones-We provide authority')</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="d-block mb-3">
                                                        <h4 class="d-block font-semibold text-primary">7. @lang('front.new-industrial-zones-7')</h4>
                                                        <p>@lang('front.new-industrial-zones-We provide you full assistance')</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="line-separator"></div>
                            <!-- <div class="container-large">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="section--header-custom mb-2 pr-4">
                        <h2>Seven Location in West Java are developed as Special Economic Zone that provide unique value proposition.</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="card shadow border-0 mb-4">
                        <img src="{{url('')}}/old-assets/frontend/images/sez-image-1.jpg" class="card-img-top">
                        <div class="card-body card-body-normal">
                            <div class="card-title font-semibold">Integrated Tourism</div>
                            <p class="card-text">Location: West bandung</p>
                            <ul>
                                <li>2.800 Ha</li>
                                <li>Water Fishery City</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow border-0 mb-4">
                        <img src="{{url('')}}/old-assets/frontend/images/sez-image-2.jpg" class="card-img-top">
                        <div class="card-body card-body-normal">
                            <div class="card-title font-semibold">Water-Fishery City</div>
                            <p class="card-text">Location: Walini</p>
                            <ul>
                                <li>2.800 Ha</li>
                                <li>Water Fishery City</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow border-0 mb-4">
                        <img src="{{url('')}}/old-assets/frontend/images/sez-image-3.jpg" class="card-img-top">
                        <div class="card-body card-body-normal">
                            <div class="card-title font-semibold">Science Technopolis</div>
                            <p class="card-text">Location: Sukabumi</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow border-0 mb-4">
                        <img src="{{url('')}}/old-assets/frontend/images/sez-image-4.jpg" class="card-img-top">
                        <div class="card-body card-body-normal">
                            <div class="card-title font-semibold">Logistic Center</div>
                            <p class="card-text">Location: Subang</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow border-0 mb-4">
                        <img src="{{url('')}}/old-assets/frontend/images/sez-image-5.jpg" class="card-img-top">
                        <div class="card-body card-body-normal">
                            <div class="card-title font-semibold"><a href="http://investasi.jabarprov.go.id/frontend/investment_content/429">Aero City</a></div>
                            <p class="card-text">Location: Kertajati</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow border-0 mb-4">
                        <img src="{{url('')}}/old-assets/frontend/images/sez-image-6.jpg" class="card-img-top">
                        <div class="card-body card-body-normal">
                            <div class="card-title font-semibold"><a href="http://investasi.jabarprov.go.id/frontend/investment_content/427">Water-Tourism City</a></div>
                            <p class="card-text">Location: Jatigede</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow border-0 mb-4">
                        <img src="{{url('')}}/old-assets/frontend/images/sez-image-7.jpg" class="card-img-top">
                        <div class="card-body card-body-normal">
                            <div class="card-title font-semibold">Coastal City</div>
                            <p class="card-text">Location: Pangandaran</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
                                <div class="container-large">
                                    <img src="{{url('')}}/old-assets/frontend/images/new-special-zone.JPG"
                                         class="w-100 d-block" style="margin-bottom: 80px;">
                                    <img src="{{url('')}}/old-assets/frontend/images/pangandaran-zone.JPG"
                                         class="w-100 d-block" style="margin-bottom: 80px;">
                                    <img src="{{url('')}}/old-assets/frontend/images/sukabumi-zone.JPG"
                                         class="w-100 d-block" style="margin-bottom: 24px;">
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
    <link rel="stylesheet" href="{{url('')}}/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{url('')}}/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="{{url('')}}/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css">

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
    <script src="{{url('')}}/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{url('')}}/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{url('')}}/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{url('')}}/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="{{url('')}}/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="{{url('')}}/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="{{url('')}}/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="{{url('')}}/vendor/datatables.net-select/js/dataTables.select.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#datatable-basic').DataTable({
                "pagingType": "numbers"
            });
        });
    </script>

    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoidmFnYW56YWRpZ2l0YWwiLCJhIjoiY2tldDZwYmhzM3c4eDJ1bzd1bnR1bXAxeCJ9.8lNjmRMZl7gC6YUdxQl2eQ';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/vaganzadigital/cketdvgn48z3119s6z4ld8mnx',
            center: [ 107.1914729,-6.8525437], // starting position
            zoom: 7.5// starting zoom
        });
        map.addControl(new mapboxgl.NavigationControl());

                @foreach($industry as $i)
        var monument{{$i->id}} = [{{$i->long}}, {{$i->lat}}];
        @endforeach

        // create the popup

        var popup = [];
        @foreach($industry as $i)
            popup[{{$i->id}}] = new mapboxgl.Popup({ offset: 25 }).setHTML(
            '<h3 class="mb-1 pb-0">{{$i->name}}</h3><small class="mt-0 mb-3">{{$i->name}}</small><div class="mt-2"><a href="#" class="btn btn-primary btn-sm">View</a><a href="{{$i->link}}" class="btn btn-primary btn-sm">Direction</a></div>'
        );
        @endforeach

        // create DOM element for the marker
                @foreach($industry as $i)
        var el{{$i->id}} = document.createElement('div');
        el{{$i->id}}.id = 'marker2';
                @endforeach

        var marker = [];

        // create the marker
        @foreach($industry as $i)
            marker[{{$i->id}}] = new mapboxgl.Marker(el{{$i->id}})
            .setLngLat(monument{{$i->id}})
            .setPopup(popup[{{$i->id}}]) // sets a popup on this marker
            .addTo(map);
        @endforeach

        function flyToPos(lng, lat, zoom, id) {

            for(var i = {{$i->id-1}}; i < {{$i->id}}; i++){
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
