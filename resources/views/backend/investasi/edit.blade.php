@extends('layouts.app')

@section('title')
    Halaman Edit Investasi
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <form action="{{ route('investasi.update', ['invest_id' => $investasi->invest_id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="card-header">
                        <div class="d-flex flex-row align-items-center">
                            <h3>Update Data Investasi</h3>
                            <a href="{{ route('investasi.index') }}" class="btn btn-sm btn-primary ml-auto">Back</a>
                            <button type="submit" class="btn btn-sm btn-primary">Save</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="p-4">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        Judul Investasi
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="judul_investasi" id=""
                                            aria-describedby="helpId" placeholder="Investasi 1"
                                            value="{!! old('judul_investasi', $investasi->judul_investasi) !!}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        Bahasa
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <select class="form-control" name="isBahasa" value="{!! old('isBahasa') !!}">
                                            <option value="{{ $investasi->isBahasa }}">
                                                @if ($investasi->isBahasa == 0)
                                                    Indonesia
                                                @elseif($investasi->isBahasa == 1)
                                                    Inggris
                                                @else
                                                    No Language
                                                @endif
                                            </option>
                                            <option value='0'>Indonesia</option>
                                            <option value='1'>Inggris</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        Tipe Sektor
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <select name="fk_sector" id="fk_sector" class="form-control">
                                        @foreach ($sectors as $fk_sector => $sectorTitle)
                                            <option value="{{ $fk_sector }}" {{ $investasi->fk_sector == $fk_sector ? 'selected=selected' : '' }}>
                                                {{ $sectorTitle['title'] }}
                                            </option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        Image
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <div class="mb-3"><img class="img-thumbnail"
                                                src="@if (empty($investasi->image)) {{ url('img/default-image.png') }}
                                        @else
                                        {{ url('') }}/invest/thumbnail/{{ $investasi->image }} @endif">
                                        </div>
                                        <input type="file" class="form-control-file" name="image" id=""
                                            placeholder="" aria-describedby="fileHelpId">
                                        <small>Leave empty if you don't want to change</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        Mini Deskripsi
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="mini_deskripsi" id=""
                                            aria-describedby="helpId" placeholder="" value="{!! old('mini_deskripsi', $investasi->mini_deskripsi) !!}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        Project Value
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="project_value" id=""
                                            aria-describedby="helpId" placeholder="" value="{!! old('project_value', $investasi->project_value) !!}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        Kategori
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <select class="form-control" name="kategori">
                                            <option selected value="{!! $investasi->kategori !!}">{!! $investasi->kategori !!}
                                            </option>
                                            <option value="building">Building</option>
                                            <option value="landscape">Landscape</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        Investment Type
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="investment_type" id=""
                                            aria-describedby="helpId" placeholder="investment type"
                                            value="{!! old('investment_type') !!}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        Author
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="author" id=""
                                            aria-describedby="helpId" placeholder="author"
                                            value="{!! old('author') !!}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        Author Image
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <div class="mb-3"><img class="img-thumbnail"
                                                src="@if (empty($investasi->author_image)) {{ url('img/default-image.png') }}
                                        @else
                                        {{ url('') }}/invest/thumbnail/{{ $investasi->author_image }} @endif">
                                        </div>
                                        <input type="file" class="form-control-file" name="author_image"
                                            id="" placeholder="" aria-describedby="fileHelpId">
                                        <small>Leave empty if you don't want to change</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        Job Title
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="job_title" id=""
                                            aria-describedby="helpId" placeholder="job title"
                                            value="{!! old('job_title') !!}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        Lokasi
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="searchmap" name="lokasi"
                                            value="{!! old('lokasi', $investasi->lokasi) !!}" /><br />
                                        <div id="map-canvas" style="height: 400px;"></div>
                                        <div class="row mt-2">
                                            <div class="col-lg-6">Long: <input name="long" id="lng"
                                                    type="text" class="form-control"
                                                    value="{{ $investasi->long ?? '' }}" /></div>
                                            <div class="col-lg-6">Lat: <input name="lat" id="lat"
                                                    type="text" class="form-control"
                                                    value="{{ $investasi->lat ?? '' }}" /></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        Project Description
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <textarea name="project_desc" class="form-control my-editor">{!! old('project_desc', $investasi->project_desc) !!}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        Investment Scheme
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <textarea name="invest_scheme" class="form-control my-editor">{!! old('invest_scheme', $investasi->invest_scheme) !!}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        IRR
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input class="form-control" name="irr" id=""
                                            aria-describedby="helpId" placeholder="" value="{!! old('irr', $investasi->irr) !!}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        NPV
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input class="form-control" name="npv" id=""
                                            aria-describedby="helpId" placeholder="" value="{!! old('npv', $investasi->npv) !!}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        Payback Period
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input class="form-control" name="payback_period" id=""
                                            aria-describedby="helpId" placeholder="" value="{!! old('payback_period', $investasi->payback_period) !!}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        Support File
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <div class="mb-3">
                                            @if (empty($investasi->support_file))
                                                Belum Ada File
                                            @else
                                                <a href="{{ URL::to('/invest/file/') }}/{{ $investasi->support_file }}"
                                                    target="_blank">{{ $investasi->support_file }}</a>
                                            @endif
                                        </div>
                                        <input type="file" class="form-control-file" name="support_file"
                                            id="" placeholder="" aria-describedby="fileHelpId">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
            </div>
            </form>
        </div>

    </div>
    </div>
@stop

@section('bottom-content')
    <script>
        var editor_config = {
            path_absolute: "/",
            selector: "textarea.my-editor",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            relative_urls: false,
            file_browser_callback: function(field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName(
                    'body')[0].clientWidth;
                var y = window.innerHeight || document.documentElement.clientHeight || document
                    .getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'filemanager?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Files";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                    file: cmsURL,
                    title: 'Filemanager',
                    width: x * 0.8,
                    height: y * 0.8,
                    resizable: "yes",
                    close_previous: "no"
                });
            }
        };

        tinymce.init(editor_config);
    </script>


    <script type="text/javascript">
        // Get the dropdown elements
        const isBahasaDropdown = document.querySelector('select[name="isBahasa"]');
        const fkSectorDropdown = document.getElementById('fk_sector');

        // Define the sectors data
        const sectors = {!! json_encode($sectors) !!};

        // Convert sectors object into an array
        const sectorsArray = Object.entries(sectors).map(([id, sector]) => ({
            id: parseInt(id),
            ...sector
        }));
        
        console.log(sectors)

        function populateFkSectorDropdown() {
            // Clear existing options in fkSector dropdown
            fkSectorDropdown.innerHTML = '';

            // Get the selected value of isBahasa dropdown and convert it to an integer
            const isBahasaValue = parseInt(isBahasaDropdown.value, 10);

            // Filter sectors based on isBahasa condition
            const filteredSectors = sectorsArray.filter((sector) => {
                return sector.isBahasa == isBahasaValue;
            });

            // Add options to fkSector dropdown
            filteredSectors.forEach((sector) => {
                const option = document.createElement('option');
                option.value = sector.id;
                option.textContent = sector.title;
                fkSectorDropdown.appendChild(option);
            });
        }




        // Event listener for isBahasa dropdown change
        isBahasaDropdown.addEventListener('change', function() {
            // Populate fkSector dropdown based on the selected value of isBahasa dropdown
            populateFkSectorDropdown();
        });

        // Trigger the change event initially to populate the fkSector dropdown based on the initial value of isBahasa dropdown
        isBahasaDropdown.dispatchEvent(new Event('change'));


        // $(function() {

        //   // Inisiasi Geo Location
        //   if (!navigator.geolocation) {
        //   	console.log("Maaf, Browser Anda tidak Support Geolocation.");
        //   } else {
        //   	navigator.geolocation.getCurrentPosition(success, error);
        //   }

        //   // START: Notifikasi Sukses Geolocation
        //   function success(position) {
        //     // Inisiasi Variabel
        //     var map, marker,


        //     // Tampilkan ke Textbox
        //     $("#lat").val(latitude);
        //     $("#lng").val(longitude);
        //     $("#Biodata_koordinat").val(latitude + "," + longitude);


        //     var curLocation = [0, 0];
        //     if (curLocation[0] == 0 && curLocation[1] == 0) {
        //     	curLocation = [latitude, longitude];
        //     }

        //     var overlays = {};
        //     //Init BaseMaps
        //     //Init BaseMaps
        //     var basemaps = {
        //     	"Peta Satelit": L.tileLayer('https://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
        //     		maxZoom: 20,
        //     		subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
        //     		attribution: 'Map data &copy; Google | Map By <a href="https://idraxy.web.app" target="_blank">Draxgist & Team</a>'
        //     	}),
        //     	"Peta Jalan": L.tileLayer('https://{s}.google.com/vt/lyrs=m@221097413,traffic&x={x}&y={y}&z={z}', {
        //     		maxZoom: 20,
        //     		minZoom: 2,
        //     		subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
        //     		attribution: 'Map data &copy; Google | Map By <a href="https://idraxy.web.app" target="_blank">Draxgist & Team</a>'
        //     	}),

        //     }


        //     var mapOptions = {
        // 		zoomControl: true,
        // 		attributionControl: false,
        // 		center: [latitude, longitude],
        // 		zoom: 22,
        // 		layers: [
        // 		basemaps["Peta Jalan"]
        // 		]
        // 	};


        //     //Render Main Map

        //     var map = L.map("map-canvas", mapOptions);
        //     // L.Control.geocoder().addTo(map);
        //     L.control.layers(basemaps, null, {
        //     	position: 'topright'
        //     }).addTo(map);
        //     var boundary = new L.geoJson();
        //     boundary.addTo(map);


        //     var school = L.icon({
        //     	iconUrl: '/image/pdp.png',
        //     	iconSize: [40, 45],
        //     	shadowAnchor: [4, 62],
        //     	iconAnchor: [22, 45],
        //     	popupAnchor: [-3, -45]
        //     });

        //     L.circle([latitude, longitude], 300, {
        //     	color: '#8e44ad',
        //     	fillColor: '#9b59b6',
        //     	fillOpacity: 0.2
        //     }).addTo(map).bindPopup("Lokasi Anda Sekarang Radius 300 M");

        //     //Handle Map click to Display Lat/Lng
        //     map.on("click", function(e) {
        //     	$("#Biodata_koordinat").html(e.latlng.lat + ", " + e.latlng.lng);
        //     	$("#Biodata_koordinat").show();
        //     });


        //     var marker = new L.marker(curLocation, {
        //     	draggable: "true"
        //     });

        //     marker.on("dragend", function(event) {
        //     	var position = marker.getLatLng();
        //     	marker
        //     	.setLatLng(position, {
        //     		draggable: "true"
        //     	})
        //     	marker.bindPopup('<b><big>Titik Koordinat Lokasi Anda Sekarang</big> <br> Apabila Tidak Sesuai Silahkan Geser Icon Ini <br> <big>(' + position.lat + ',' + position.lng + ')</big></b>').openPopup();
        //     	$("#Biodata_koordinat").val(position.lat + "," + position.lng).keyup();
        //     	$("#lat").val(position.lat).keyup();
        //     	$("#lng").val(position.lng).keyup();
        //     });

        //     $("#Biodata_koordinat").change(function() {

        //         var position = [latitude + ',' + longitude];

        //     	marker.setLatLng(position, {
        //     		draggable: "true"
        //     	})
        //     	.bindPopup(position)
        //     	.update();
        //     	map.panTo(position);
        //     });

        //     map.addLayer(marker);

        //     marker.bindPopup('<b><big>Titik Koordinat Lokasi Anda Sekarang</big> <br> Apabila Tidak Sesuai Silahkan Geser Icon Ini <br> <big>(' +  + ',' +  + ')</big></b>').openPopup();
        //   }
        //   // END: Notifikasi Sukses Geolocation

        //   // START: Notifikasi Error Geolocation
        //   function error() {
        //   	alert('Gagal Mendapatkan Geolocation, Silahkan Gunakan Browser Google Chrome.');
        //   }
        //   // END: Notifikasi Error Geolocation




        // });
    </script>
    <script>
        var defaultLat = parseFloat('{{ $investasi->lat ?? 0 }}');
        var defaultLng = parseFloat('{{ $investasi->long ?? 0 }}');

        var defaultZoom = 12;

        var map = L.map('map-canvas').setView([defaultLat, defaultLng], defaultZoom); // Set the initial view

        // Add the OpenStreetMap tile layer
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Map data © OpenStreetMap contributors'
        }).addTo(map);

        var marker = L.marker([defaultLat, defaultLng], {
            draggable: true
        }).addTo(map);

        var geocoder = L.Control.geocoder({
            defaultMarkGeocode: false
        }).on('markgeocode', function(e) {
            var location = e.geocode.center;
            marker.setLatLng(location);
            document.getElementById('lat').value = location.lat.toFixed(6);
            document.getElementById('lng').value = location.lng.toFixed(6);
        }).addTo(map);

        // Update the latitude and longitude inputs when the marker is dragged
        marker.on('dragend', function(e) {
            var latlng = marker.getLatLng();
            document.getElementById('lat').value = latlng.lat.toFixed(6);
            document.getElementById('lng').value = latlng.lng.toFixed(6);
        });

        map.on('click', function(e) {
            marker.setLatLng(e.latlng);
            document.getElementById('lat').value = e.latlng.lat.toFixed(6);
            document.getElementById('lng').value = e.latlng.lng.toFixed(6);
        });

        // Search functionality
        $('#searchmap').on('keydown', function(e) {
            if (e.keyCode === 13) { // Enter key
                e.preventDefault();
                var query = $(this).val();
                if (query.trim() !== '') {
                    var geocoder = L.Control.Geocoder.nominatim();
                    geocoder.geocode(query, function(results) {
                        if (results.length > 0) {
                            var latlng = results[0].center;
                            marker.setLatLng(latlng);
                            map.setView(latlng, defaultZoom);
                            document.getElementById('lat').value = latlng.lat.toFixed(6);
                            document.getElementById('lng').value = latlng.lng.toFixed(6);
                        } else {
                            console.log('Location not found');
                        }
                    });
                }
            }
        });
    </script>





@stop

@section('top-content')
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.9.11/tinymce.min.js"
        integrity="sha512-3tlegnpoIDTv9JHc9yJO8wnkrIkq7WO7QJLi5YfaeTmZHvfrb1twMwqT4C0K8BLBbaiR6MOo77pLXO1/PztcLg=="
        crossorigin="anonymous"></script>
    <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDP7xsz79ZSjqSafWVZEPNsWblL3ucY-ms&libraries=places"
        type="text/javascript"></script>-->
    <style>
        #map-canvas {
            width: 100%;
            height: 500px;
        }
    </style>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.6.0/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
@stop
