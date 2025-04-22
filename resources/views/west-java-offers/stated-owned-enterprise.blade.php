@extends('layouts.frontend')

@section('content')
    <div class="jumbotron jumbotron-fluid nav-margin" style="background-image:
            /* top, transparent red */
            linear-gradient(151deg,
            rgba(52,122,74, 0.60),
            rgba(253,196,38, 0.10)
            ),
            /* your image */
            url('{{url('')}}/old-assets/frontend/images/front-hero-bg-6.png'); background-size: cover; background-position: center top; background-repeat: no-repeat; background-attachment: fixed; height: 500px">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-lg-6 text-white">
                    <h1 class="display-1 text-warning">08</h1>
                    <h3 class="display-3 text-white">@lang('front.stated-owned-enterprise-West Java & National State-Owned Enterprise')</h3>
                    <p class="lead">@lang('front.stated-owned-enterprise-West Java')</p>
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
                                <div class="col-md-12">
                                    <div class="mb-4 pr-4">
                                        <h1>@lang('front.stated-owned-enterprise-West Java Stated-Owned Enterprise')</h1>
                                        <div class="line-style">
                                            <div class="line-style-3"></div>
                                            <div class="line-style-2"></div>
                                        </div>
                                    </div>
                                    <p>@lang('front.stated-owned-enterprise-The development')</p>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <h3 class="font-semibold color-green">
                                        @lang('front.stated-owned-enterprise-Non-Financial Sector')
                                    </h3>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="d-block w-100">
                                        <div class="list-with-icon">
                                            <div class="list-with-icon--icon">
                                                <img src="{{url('')}}/old-assets/frontend/images/non-financial-sector/nfs-1.jpg"/>
                                            </div>
                                            <div>
                                                <div class="font-semibold d-block">PT. BANDARUDARA INTERNATIONAL JAWA BARAT</div>
                                                <div class="font-s-small">@lang('front.stated-owned-enterprise-Business Core: Managing Airport Business Area')<br><a href="http://www.bijb.co.id" target="_blank">www.bijb.co.id</a></div>
                                            </div>
                                        </div>
                                        <div class="list-with-icon">
                                            <div class="list-with-icon--icon">
                                                <img src="{{url('')}}/old-assets/frontend/images/non-financial-sector/nfs-2.jpg"/>
                                            </div>
                                            <div>
                                                <div class="font-semibold d-block">PT. JASA DAN KEPARIWISATAAN JABAR</div>
                                                <div class="font-s-small">@lang('front.stated-owned-enterprise-Business Core: Tourism Service and Destination')<br><a href="http://www.jaswitabar.co.id" target="_blank">www.jaswitabar.co.id</a></div>
                                            </div>
                                        </div>
                                        <div class="list-with-icon">
                                            <div class="list-with-icon--icon">
                                                <img src="{{url('')}}/old-assets/frontend/images/non-financial-sector/nfs-3.jpg"/>
                                            </div>
                                            <div>
                                                <div class="font-semibold d-block">PT. JASA SARANA</div>
                                                <div class="font-s-small">@lang('front.stated-owned-enterprise-Business Core: Infrastructure Investment Holding Company')<br><a href="http://www.jasa-sarana.co.id" target="_blank">www.jasa-sarana.co.id</a></div>
                                            </div>
                                        </div>
                                        <div class="list-with-icon">
                                            <div class="list-with-icon--icon">
                                                <img src="{{url('')}}/old-assets/frontend/images/non-financial-sector/nfs-4.jpg"/>
                                            </div>
                                            <div>
                                                <div class="font-semibold d-block">PT. TIRTA GEMAH RIPAH</div>
                                                <div class="font-s-small">@lang('front.stated-owned-enterprise-Business Core: Water Resources Management')<br><a href="http://www.tirtagemahripah.co.id" target="_blank">www.tirtagemahripah.co.id</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="d-block w-100">
                                        <div class="list-with-icon">
                                            <div class="list-with-icon--icon">
                                                <img src="{{url('')}}/old-assets/frontend/images/non-financial-sector/nfs-5.jpg"/>
                                            </div>
                                            <div>
                                                <div class="font-semibold d-block">PT. MIGAS HULU JABAR</div>
                                                <div class="font-s-small">@lang('front.stated-owned-enterprise-Business Core: Upstream Oil and Gas Operation')<br><a href="http://www.migashulujabar.co.id" target="_blank">www.migashulujabar.co.id</a></div>
                                            </div>
                                        </div>
                                        <div class="list-with-icon">
                                            <div class="list-with-icon--icon">
                                                <img src="{{url('')}}/old-assets/frontend/images/non-financial-sector/nfs-6.jpg"/>
                                            </div>
                                            <div>
                                                <div class="font-semibold d-block">PT. MIGAS HILIR JABAR</div>
                                                <div class="font-s-small">@lang('front.stated-owned-enterprise-Business Core: Downstream Oil and Gas Operation')</div>
                                            </div>
                                        </div>
                                        <div class="list-with-icon">
                                            <div class="list-with-icon--icon">
                                                <img src="{{url('')}}/old-assets/frontend/images/non-financial-sector/nfs-7.jpg"/>
                                            </div>
                                            <div>
                                                <div class="font-semibold d-block">PT. AGRONESIA</div>
                                                <div class="font-s-small">@lang('front.stated-owned-enterprise-Business Core: Agri Product Cultivation')<br><a href="http://www.ptagronesia.com" target="_blank">www.ptagronesia.com</a></div>
                                            </div>
                                        </div>
                                        <div class="list-with-icon">
                                            <div class="list-with-icon--icon">
                                                <img src="{{url('')}}/old-assets/frontend/images/non-financial-sector/nfs-8.jpg"/>
                                            </div>
                                            <div>
                                                <div class="font-semibold d-block">PT. AGRO JABAR</div>
                                                <div class="font-s-small">@lang('front.stated-owned-enterprise-Business Core: Agri Business')<br><a href="http://www.agrojabar.com" target="_blank">www.agrojabar.com</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <h3 class="font-semibold color-green">
                                        @lang('front.stated-owned-enterprise-Financial Sector')
                                    </h3>
                                </div>
                                <!-- Rural Bank & Microcredit -->
                                <div class="col-md-6 mb-3">
                                    <h5 class="mb-3 color-green">@lang('front.stated-owned-enterprise-Rural Bank & Microcredit')</h5>
                                    <div class="d-block w-100">
                                        <div class="list-with-icon">
                                            <div class="list-with-icon--icon">
                                                <img src="{{url('')}}/old-assets/frontend/images/financial-sector/fs-1.jpg"/>
                                            </div>
                                            <div>
                                                <div class="font-semibold d-block">PT. BPR ARTA GALUH MANDIRI</div>
                                                <div class="font-s-small">JABAR KAB.CIAMIS</div>
                                            </div>
                                        </div>
                                        <div class="list-with-icon">
                                            <div class="list-with-icon--icon">
                                                <img src="{{url('')}}/old-assets/frontend/images/financial-sector/fs-2.jpg"/>
                                            </div>
                                            <div>
                                                <div class="font-semibold d-block">PT. BPR WIBAWA MUKTI</div>
                                                <div class="font-s-small">JABAR KAB.BEKASI</div>
                                            </div>
                                        </div>
                                        <div class="list-with-icon">
                                            <div class="list-with-icon--icon">
                                                <img src="{{url('')}}/old-assets/frontend/images/financial-sector/fs-3.jpg"/>
                                            </div>
                                            <div>
                                                <div class="font-semibold d-block">PT. BPR KARYA UTAMA</div>
                                                <div class="font-s-small">JABAR KAB.SUBANG</div>
                                            </div>
                                        </div>
                                        <div class="list-with-icon">
                                            <div class="list-with-icon--icon">
                                                <img src="{{url('')}}/old-assets/frontend/images/financial-sector/fs-4.jpg"/>
                                            </div>
                                            <div>
                                                <div class="font-semibold d-block">PT.BPR INTAN</div>
                                                <div class="font-s-small">JABAR KAB. GARUT</div>
                                            </div>
                                        </div>
                                        <div class="list-with-icon">
                                            <div class="list-with-icon--icon">
                                                <img src="{{url('')}}/old-assets/frontend/images/financial-sector/fs-5.jpg"/>
                                            </div>
                                            <div>
                                                <div class="font-semibold d-block">PT. BPR CIPATUJAH</div>
                                                <div class="font-s-small">JABAR KAB. TASIKMALAYA</div>
                                            </div>
                                        </div>
                                        <div class="list-with-icon">
                                            <div class="list-with-icon--icon">
                                                <img src="{{url('')}}/old-assets/frontend/images/financial-sector/fs-6.jpg"/>
                                            </div>
                                            <div>
                                                <div class="font-semibold d-block">PT BPR MAJALENGKA</div>
                                                <div class="font-s-small">JABAR</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <!-- Insurance and Banking -->
                                <div class="col-md-6 mb-3">
                                    <h5 class="mb-3 color-green">@lang('front.stated-owned-enterprise-Insurance and Banking')</h5>
                                    <div class="d-block w-100">
                                        <div class="list-with-icon">
                                            <div class="list-with-icon--icon">
                                                <img src="{{url('')}}/old-assets/frontend/images/financial-sector/fs-7.jpg"/>
                                            </div>
                                            <div>
                                                <div class="font-semibold d-block">PT. JAMKRIDA JABAR</div>
                                                <div class="font-s-small">@lang('front.stated-owned-enterprise-Business Core: Credit Insurance')<br><a href="http://www.jamkrida-jabar.co.id"></a>www.jamkrida-jabar.co.id</div>
                                            </div>
                                        </div>
                                        <div class="list-with-icon">
                                            <div class="list-with-icon--icon">
                                                <img src="{{url('')}}/old-assets/frontend/images/financial-sector/fs-8.jpg"/>
                                            </div>
                                            <div>
                                                <div class="font-semibold d-block">PT. BPD JAWA BARAT DAN BANTEN, TBK</div>
                                                <div class="font-s-small">@lang('front.stated-owned-enterprise-Business Core: Finance and Banking')<br><a href="http://www.bankbjb.co.id"></a>www.bankbjb.co.id</div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <h5 class="mb-3 color-green">And other subsidiaries including:</h5>
                                    <div class="d-block w-100">
                                        <div class="list-with-icon">
                                            <div class="list-with-icon--icon">
                                                <img src="{{url('')}}/old-assets/frontend/images/financial-sector/16.jpg"/>
                                            </div>
                                            <div>
                                                <div class="font-semibold d-block">PD Regional Rural Bank (BPR)</div>
                                            </div>
                                        </div>
                                        <div class="list-with-icon">
                                            <div class="list-with-icon--icon">
                                                <img src="{{url('')}}/old-assets/frontend/images/financial-sector/14.jpg"/>
                                            </div>
                                            <div>
                                                <div class="font-semibold d-block">Microcredit Institutions</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                        <div class="line-separator"></div>
                        <div class="container-large">
                            <div class="section--header-custom row mb-4">
                                <div class="col-md-8">
                                    <div class="mb-4 pr-4">
                                        <h1>@lang('front.stated-owned-enterprise-Provincial Owned Enterprise Strategic Projects')</h1>
                                        <div class="line-style">
                                            <div class="line-style-3"></div>
                                            <div class="line-style-2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-block w-100">
                                        <div class="list-with-icon list-with-icon--wide">
                                            <div class="list-with-icon--icon">
                                                <img src="{{url('')}}/old-assets/frontend/images/icon-strategy-1.png"/>
                                            </div>
                                            <div>
                                                <div class="font-semibold d-block color-green">@lang('front.stated-owned-enterprise-AEROCITY DEVELOPMENT')</div>
                                                <div class="font-s-small">@lang('front.stated-owned-enterprise-Located')</div>
                                            </div>
                                        </div>
                                        <div class="list-with-icon list-with-icon--wide">
                                            <div class="list-with-icon--icon">
                                                <img src="{{url('')}}/old-assets/frontend/images/icon-strategy-2.png"/>
                                            </div>
                                            <div>
                                                <div class="font-semibold d-block color-green">@lang('front.stated-owned-enterprise-INTEGRATED ENERGY STORAGE')</div>
                                                <div class="font-s-small">@lang('front.stated-owned-enterprise-Owned')</div>
                                            </div>
                                        </div>
                                        <div class="list-with-icon list-with-icon--wide">
                                            <div class="list-with-icon--icon">
                                                <img src="{{url('')}}/old-assets/frontend/images/icon-strategy-3.png"/>
                                            </div>
                                            <div>
                                                <div class="font-semibold d-block color-green">@lang('stated-owned-enterprise-TRANSMISSION PIPE')</div>
                                                <div class="font-s-small">@lang('front.stated-owned-enterprise-The project')</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-block w-100">
                                        <div class="list-with-icon list-with-icon--wide">
                                            <div class="list-with-icon--icon">
                                                <img src="{{url('')}}/old-assets/frontend/images/icon-economic-6.png"/>
                                            </div>
                                            <div>
                                                <div class="font-semibold d-block color-green">@lang('front.stated-owned-enterprise-TOLL ROAD CONSTRUCTION')</div>
                                                <div class="font-s-small">@lang('front.stated-owned-enterprise-Aiming')</div>
                                            </div>
                                        </div>
                                        <div class="list-with-icon list-with-icon--wide">
                                            <div class="list-with-icon--icon">
                                                <img src="{{url('')}}/old-assets/frontend/images/icon-strategy-4.png"/>
                                            </div>
                                            <div>
                                                <div class="font-semibold d-block color-green">@lang('front.stated-owned-enterprise-GURILAPS')</div>
                                                <div class="font-s-small">@lang('front.stated-owned-enterprise-The development2')</div>
                                            </div>
                                        </div>
                                        <div class="list-with-icon list-with-icon--wide">
                                            <div class="list-with-icon--icon">
                                                <img src="{{url('')}}/old-assets/frontend/images/icon-strategy-5.png"/>
                                            </div>
                                            <div>
                                                <div class="font-semibold d-block color-green">@lang('front.stated-owned-enterprise-DRINKING WATER SUPPLY')</div>
                                                <div class="font-s-small">@lang('front.stated-owned-enterprise-The population')</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="line-separator"></div>
                        <div class="container-large">
                            <div class="section--header-custom row mb-4">
                                <div class="col-md-8">
                                    <div class="mb-4 pr-4">
                                        <h1>@lang('front.stated-owned-enterprise-State-Owned Enterprise')</h1>
                                        <div class="line-style">
                                            <div class="line-style-3"></div>
                                            <div class="line-style-2"></div>
                                        </div>
                                    </div>
                                    <p>@lang('front.stated-owned-enterprise-As the home')</p>
                                </div>
                                <div class="col-md-12">
                                    <img src="{{url('')}}/old-assets/frontend/images/stateowned-enterprise.JPG" class="d-block w-100 mt-4">
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
