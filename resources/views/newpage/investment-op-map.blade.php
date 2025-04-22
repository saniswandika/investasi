@extends('layouts.frontendnew')

@section('content')
    <div id="map" class="relative z-10 md:h-700 h-960"></div>

    <div class="absolute md:top-25 md:left-10 top-0 left-0 z-20 bg-white p-6 ">
        <div class="flex flex-col justify-center gap-4 ">
            <p class="font-roboto font-bold text-4xl text-blue-800">
                Investment Opportunities
            </p>
            <div class="flex gap-20 items-center">
                <div class="radio-item">
                    <input type="radio" id="ritema" name="ritem" value="ropt1"
                        data-link="{{ route('front.investment.v2') }}">
                    <label for="ritema">List</label>
                </div>

                <div class="radio-item">
                    <input type="radio" id="ritemb" name="ritem" value="ropt2" checked>
                    <label for="ritemb">Map</label>
                </div>
            </div>
            <div class="mt-10">
                <p class="font-robot text-2xl font-bold text-blue-800">
                    Choose investment type
                </p>
            </div>
            <div class="flex flex-col justify-center">
                <ul class="text-lg text-blue-800 font-roboto flex flex-col gap-4">
                    @foreach($sector as $item)
                        <a href="{{ url('/investment-opportunities-map?sector=')}}{{$item->Id}}">
                            <div class="flex items-center justify-between cursor-pointer">
                                <li>{{ $item->title }}</li>
                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                            </div>
                        </a>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize the map
            var map = L.map('map').setView([-6.934469, 107.604958], 9);

            // Add a tile layer (optional)
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: 'Map data © <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
                maxZoom: 14,
            }).addTo(map);

            // Create an array to hold all the markers
            var markers = [];

            @foreach ($investasi->data as $item)
                // Create a marker for each item
                var marker = L.marker([{{$item->lat}}, {{$item->long}}]);
                
                // Bind a popup to the marker
                marker.bindPopup('<button id="popupButton">{{ $item->judul_investasi }}</button>');
                
                // Add the marker to the array
                markers.push(marker);
            @endforeach

            // Add all markers to the map
            var group = L.layerGroup(markers);
            group.addTo(map);
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            $('input[type="radio"]').click(function() {
                if ($(this).is(':checked')) {
                    var link = $(this).data('link');
                    window.location.href = link;
                }
            });
        });
    </script>
    @include('newpage.speak-to-us')

    @include('newpage.footer')

    @include('newpage.copyright')
@stop


@section('top-content')


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet.js"></script>


@stop
