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
                    <h1 class="display-3 text-white">[{{$industri->code}}]</h1>
                    <p>{{$industri->name}}</p>
                    <div class="line-style mb-2">
                        <div class="line-style-1"></div>
                        <div class="line-style-2"></div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <p class="mb-1">Location: {{$industri->location}}</p>
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
                        <a class="breadcrumb-item" href="{{route('front.industries')}}">Industries</a>
                        <span class="breadcrumb-item active">[{{$industri->code}}]</span>
                    </nav>
                    <img class="w-100 h-auto" src="@if(empty($industri->image))https://3.bp.blogspot.com/-jI1KRyOaswE/VLd7KmADEvI/AAAAAAAADOI/cGE6Z4Zu7AQ/s1600/map.jpg @else{{url('')}}/img/industry/{{$industri->image}} @endif" alt="">
                    <div class="card-body">
                        <div class="nav-wrapper mb-4">
                            <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text"
                                role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab"
                                       data-toggle="tab" href="#tabs-icons-text-1" role="tab"
                                       aria-controls="tabs-icons-text-1" aria-selected="true"><i
                                            class="ni ni-book-bookmark mr-2"></i>General Information</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab"
                                       href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2"
                                       aria-selected="false"><i class="ni ni-cart mr-2"></i>Current Status
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab"
                                       href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3"
                                       aria-selected="false"><i class="ni ni-zoom-split-in mr-2"></i>Estate Information</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel"
                                 aria-labelledby="tabs-icons-text-1-tab">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Company</th>
                                        <th>{{$industri->company_name}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td scope="row">Site Office Address</td>
                                        <td>{{$industri->office_address}}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Phone</td>
                                        <td>{{$industri->phone}}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Fax</td>
                                        <td>{{$industri->fax}}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Website</td>
                                        <td>{{$industri->website}}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Email</td>
                                        <td>{{$industri->email}}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">President Director</td>
                                        <td>{{$industri->presdir}}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Director</td>
                                        <td>{{$industri->director}}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Contact Person</td>
                                        <td>{{$industri->contact_person}}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Distance to Jakarta</td>
                                        <td>{{$industri->distance_to_jkt}}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Distance to Harbour</td>
                                        <td>{{$industri->distance_to_harbour}}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Distance to Harbour</td>
                                        <td>{{$industri->distance_to_airport}}</td>
                                    </tr>
                                    </tbody>
                                    <thead>
                                    <tr>
                                        <th>Plan Area</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td scope="row">Total Area</td>
                                        <td>{{$industri->total_area}}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Total Developed Area</td>
                                        <td>{{$industri->total_develop_area}}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Total Salable Area</td>
                                        <td>{{$industri->total_salable_area}}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Total Available Area</td>
                                        <td>{{$industri->total_available_area}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel"
                                 aria-labelledby="tabs-icons-text-2-tab">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>1. Facilities</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td scope="row">{{$industri->facilities}}</td>
                                    </tr>
                                    </tbody>
                                    <thead>
                                    <tr>
                                        <th>2. Utilities & Infrastructure</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td scope="row"><b>Water Supply</b></td>
                                        <td scope="row"></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Source</td>
                                        <td scope="row">{{$industri->ui_ws_source}}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Capacity</td>
                                        <td scope="row">{{$industri->ui_ws_capacity}}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row"><b>Electricity</b></td>
                                        <td scope="row"></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Source</td>
                                        <td scope="row">{{$industri->ui_el_source}}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Capacity</td>
                                        <td scope="row">{{$industri->ui_el_capacity}}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row"><b>Telecomunication</b></td>
                                        <td scope="row"></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Source</td>
                                        <td scope="row">{{$industri->ui_tel_source}}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Capacity</td>
                                        <td scope="row">{{$industri->ui_tel_capacity}}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row"><b>Fiber Optic</b></td>
                                        <td scope="row"></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Source</td>
                                        <td scope="row">{{$industri->ui_fo_source}}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Capacity</td>
                                        <td scope="row">{{$industri->ui_fo_capacity}}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row"><b>Gas</b></td>
                                        <td scope="row"></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Source</td>
                                        <td scope="row">{{$industri->ui_gas_source}}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Capacity</td>
                                        <td scope="row">{{$industri->ui_gas_capacity}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel"
                                 aria-labelledby="tabs-icons-text-3-tab">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>1. Selling Price</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td scope="row">Industrial Land</td>
                                        <td>{{$industri->ei_selling_industrial_land}}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Warehouse</td>
                                        <td>{{$industri->ei_selling_warehouse}}</td>
                                    </tr>
                                    </tbody>
                                    <thead>
                                    <tr>
                                        <th>2. Other Charges</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td scope="row">Service Charge</td>
                                        <td>{{$industri->ei_charge_service}}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Water</td>
                                        <td>{{$industri->ei_charge_water}}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Electricity</td>
                                        <td>{{$industri->ei_charge_electricity}}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Gas</td>
                                        <td>{{$industri->ei_charge_gas}}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Telecominication</td>
                                        <td>{{$industri->ei_charge_tel}}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Fiber Optic</td>
                                        <td>{{$industri->ei_charge_fo}}</td>
                                    </tr>
                                    </tbody>
                                    <thead>
                                    <tr>
                                        <th>3. Number of Companies</th>
                                        <th>{{$industri->number_oc}}</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.invest-west-java')

@stop

@section('top-content')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet'/>

    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.css" />

    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-flat.css" />

    <style>
        #marker {
            background-image: url('{{url('img/production (2).png')}}');
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
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.min.js"></script>

    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoidmFnYW56YWRpZ2l0YWwiLCJhIjoiY2tldDZwYmhzM3c4eDJ1bzd1bnR1bXAxeCJ9.8lNjmRMZl7gC6YUdxQl2eQ';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/vaganzadigital/cketdvgn48z3119s6z4ld8mnx',
            center: [107.0172909, -6.971318], // starting position
            zoom: 7.5 // starting zoom
        });
        map.addControl(new mapboxgl.NavigationControl());

        var monument = [{{$industri->long}}, {{$industri->lat}}];

        // create the popup
        popup = new mapboxgl.Popup({offset: 25}).setHTML(
            '<h5 class="mb-1 pb-0">[{{$industri->code}}]</h5><a href="#" class="btn btn-primary btn-sm">Direction</a></div>'
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
