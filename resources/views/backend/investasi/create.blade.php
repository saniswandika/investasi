@extends('layouts.app')

@section('title')
    Halaman Tambah Investasi
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <form action="{{ route('investasi.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-header">
                        <div class="d-flex flex-row align-items-center">
                            <h3>Tambah Investasi</h3>
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
                                            value="{!! old('judul_investasi') !!}">
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
                                            <option value='0'>Indonesia</option>
                                            <option value='1'>Inggris</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="fk_sector">Tipe Sektor</label>
                                    </div>
                                </div>
                                <div class="col-md-10">
    <div class="form-group">
        <select class="form-control" id="fk_sector" name="fk_sector">
            @foreach ($sectors as $fk_sector => $sectorTitle)
                                                <option value="{{ $fk_sector }}"
                                                    {{ old('fk_sector') == $fk_sector ? 'selected' : '' }}>
                                                    $sectorTitle->title
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
                                        <input type="file" class="form-control-file" name="image" id=""
                                            placeholder="" aria-describedby="fileHelpId">
                                        <small>*max 100 mb</small>
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
                                            aria-describedby="helpId" placeholder="Deskripsi singkat max 150 kata"
                                            value="{!! old('mini_deskripsi') !!}">
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
                                            aria-describedby="helpId" placeholder="0" value="{!! old('project_value') !!}">
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
                                        <select class="form-control" name="kategori" value="{!! old('kategori') !!}">
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
                                        <input type="file" class="form-control-file" name="author_image"
                                            id="" placeholder="" aria-describedby="fileHelpId">
                                        <small>*max 100 mb</small>
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
                                        <input type="text" class="form-control" id="searchmap" name="lokasi"><br>
                                        <div id="map-canvas" style="height: 400px;"></div>
                                        <div class="row mt-2">
                                            <div class="col-lg-6">Long: <input name="long" id="lng"
                                                    type="text" class="form-control" value="{!! old('lang') !!}"
                                                    id="exampleFormControlInput1"></div>
                                            <div class="col-lg-6">Lat: <input name="lat" id="lat"
                                                    type="text" class="form-control" value="{!! old('lat') !!}"
                                                    id="exampleFormControlInput1"></div>
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
                                        <textarea name="project_desc" class="form-control my-editor">{!! old('project_desc') !!}</textarea>
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
                                        <textarea name="invest_scheme" class="form-control my-editor">{!! old('invest_scheme') !!}</textarea>
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
                                        <input type="text" class="form-control" name="irr" id=""
                                            aria-describedby="helpId" placeholder="IRR" value="{!! old('irr') !!}">
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
                                        <input type="text" class="form-control" name="npv" id=""
                                            aria-describedby="helpId" placeholder="NPV" value="{!! old('npv') !!}">
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
                                        <input type="text" class="form-control" name="payback_period" id=""
                                            aria-describedby="helpId" placeholder="Payback Period"
                                            value="{!! old('payback_period') !!}">
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
                                        <input type="file" class="form-control-file" name="support_file"
                                            id="" placeholder="" aria-describedby="fileHelpId">
                                        <small>*max 100 mb</small>
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

    <script>
        // Add this script in your HTML
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    <script type="text/javascript">
        // Get the dropdown elements
        const isBahasaDropdown = document.querySelector('select[name="isBahasa"]');
        const fkSectorDropdown = document.getElementById('fk_sector');

        // Define the sectors data
        const sectors = {!! json_encode($sectors) !!};
        
        console.log(sectors)

        // Convert sectors object into an array
        const sectorsArray = Object.entries(sectors).map(([id, sector]) => ({
            id: parseInt(id),
            ...sector
        }));

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
    </script>


    <script>
        // Initialize the map OPEN Street
        var map = L.map('map-canvas').setView([-6.902485, 107.618033], 8); // Set the initial view

        // Add the OpenStreetMap tile layer
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Map data © OpenStreetMap contributors',
        }).addTo(map);

        // Add a marker to the map
        var marker = L.marker([-6.902485, 107.618033], {
            draggable: true
        }).addTo(map);

        // Update the latitude and longitude inputs when the marker is dragged
        marker.on('dragend', function(e) {
            var latlng = marker.getLatLng();
            $('#lat').val(latlng.lat);
            $('#lng').val(latlng.lng);
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
                            map.setView(latlng);
                            $('#lat').val(latlng.lat);
                            $('#lng').val(latlng.lng);
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
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDP7xsz79ZSjqSafWVZEPNsWblL3ucY-ms&libraries=places"
        type="text/javascript"></script> -->
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
