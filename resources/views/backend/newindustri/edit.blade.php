@extends('layouts.app')

@section('title')
    Halaman Edit New Industri
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <form action="{{route('industri-new.update',['id'=>$industri->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="card-header">
                        <div class="d-flex flex-row align-items-center">
                            <h3>Update Data New Industri</h3>
                            <a href="{{route('industri-new.index')}}" class="btn btn-sm btn-primary ml-auto">Back</a>
                            <button type="submit" class="btn btn-sm btn-primary">Save</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="p-4">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        Nama Industri
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input type="text"
                                               class="form-control" name="name" id="" aria-describedby="helpId"
                                               placeholder="PT. BIJB" value="{!! old('name', $industri->name) !!}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        Luas Area
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input type="number"
                                               class="form-control" name="area" id="" aria-describedby="helpId"
                                               placeholder="14000" value="{!! old('area', $industri->area) !!}">
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
                                        <input type="text" class="form-control" id="searchmap" name="location" value="{!! old('location', $industri->location) !!}"><br>
                                        <div id="map-canvas"></div>
                                        <div class="row mt-2">
                                            <div class="col-lg-6">Long: <input name="long" id="lng" type="text" class="form-control" value="{!! old('long', $industri->long) !!}" id="exampleFormControlInput1"></div>
                                            <div class="col-lg-6">Lat: <input name="lat" id="lat" type="text" class="form-control" value="{!! old('lat', $industri->lat) !!}" id="exampleFormControlInput1"></div>
                                        </div>
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
                                        <div class="mb-3"><img class="img-thumbnail" src="@if (empty($industri->image))
                                            {{url('img/default-image.png')}}
                                            @else
                                            {{url('')}}/img/new-industry/thumbnail/{{$industri->image}}
                                            @endif"></div>
                                        <input type="file" class="form-control-file" name="image" id="" placeholder=""
                                               aria-describedby="fileHelpId">
                                        <small>Leave empty if you don't want to change</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        Link
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input type="text"
                                               class="form-control" name="link" id="" aria-describedby="helpId"
                                               placeholder="https://investasi.jabarprov.go.id" value="{!! old('link', $industri->link) !!}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        Deskripsi
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <textarea name="desc"
                                                  class="form-control my-editor">{!! old('desc', $industri->desc) !!}</textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
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
            file_browser_callback: function (field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;

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

    //     var map = new google.maps.Map(document.getElementById('map-canvas'),{
    // 		center:{
    //             lat: <?php echo $industri['lat']; ?>,
    //             lng: <?php echo $industri['long']; ?>
    //         },
    // 		zoom:10
    // 	});
    // 	var marker = new google.maps.Marker({
    // 		position: {
    // 			lat: <?php echo $industri['lat']; ?>,
    //             lng: <?php echo $industri['long']; ?>
    // 		},
    // 		map: map,
    // 		draggable: true
    // 	});
    // 	var searchBox = new google.maps.places.SearchBox(document.getElementById('searchmap'));
    // 	google.maps.event.addListener(searchBox,'places_changed',function(){
    // 		var places = searchBox.getPlaces();
    // 		var bounds = new google.maps.LatLngBounds();
    // 		var i, place;
    // 		for(i=0; place=places[i];i++){
    //   			bounds.extend(place.geometry.location);
    //   			marker.setPosition(place.geometry.location); //set marker position new...
    //   		}
    //   		map.fitBounds(bounds);
    //   		map.setZoom(15);
    // 	});
    // 	google.maps.event.addListener(marker,'position_changed',function(){
    // 		var lat = marker.getPosition().lat();
    // 		var lng = marker.getPosition().lng();
    // 		$('#lat').val(lat);
    // 		$('#lng').val(lng);
    // 	});
    </script>

    <script type="text/javascript">
	$(function() {

      // Inisiasi Geo Location
      if (!navigator.geolocation) {
      	console.log("Maaf, Browser Anda tidak Support Geolocation.");
      } else {
      	navigator.geolocation.getCurrentPosition(success, error);
      }

      // START: Notifikasi Sukses Geolocation
      function success(position) {
        // Inisiasi Variabel
        var map, marker,
                	latitude = <?php echo $industri['lat']; ?>,
        	longitude = <?php echo $industri['long']; ?>;
        
        // Tampilkan ke Textbox
        $("#lat").val(latitude);
        $("#lng").val(longitude);
        $("#Biodata_koordinat").val(latitude + "," + longitude);


        var curLocation = [0, 0];
        if (curLocation[0] == 0 && curLocation[1] == 0) {
        	curLocation = [latitude, longitude];
        }

        var overlays = {};
        //Init BaseMaps
        //Init BaseMaps
        var basemaps = {
        	"Peta Satelit": L.tileLayer('https://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
        		maxZoom: 20,
        		subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
        		attribution: 'Map data &copy; Google | Map By <a href="https://idraxy.web.app" target="_blank">Draxgist & Team</a>'
        	}),
        	"Peta Jalan": L.tileLayer('https://{s}.google.com/vt/lyrs=m@221097413,traffic&x={x}&y={y}&z={z}', {
        		maxZoom: 20,
        		minZoom: 2,
        		subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
        		attribution: 'Map data &copy; Google | Map By <a href="https://idraxy.web.app" target="_blank">Draxgist & Team</a>'
        	}),

        }


        var mapOptions = {
    		zoomControl: true,
    		attributionControl: false,
    		center: [latitude, longitude],
    		zoom: 22,
    		layers: [
    		basemaps["Peta Jalan"]
    		]
    	};
        

        //Render Main Map

        var map = L.map("map-canvas", mapOptions);
        // L.Control.geocoder().addTo(map);
        L.control.layers(basemaps, null, {
        	position: 'topright'
        }).addTo(map);
        var boundary = new L.geoJson();
        boundary.addTo(map);


        var school = L.icon({
        	iconUrl: '/image/pdp.png',
        	iconSize: [40, 45],
        	shadowAnchor: [4, 62],
        	iconAnchor: [22, 45],
        	popupAnchor: [-3, -45]
        });

        L.circle([latitude, longitude], 300, {
        	color: '#8e44ad',
        	fillColor: '#9b59b6',
        	fillOpacity: 0.2
        }).addTo(map).bindPopup("Lokasi Anda Sekarang Radius 300 M");

        //Handle Map click to Display Lat/Lng
        map.on("click", function(e) {
        	$("#Biodata_koordinat").html(e.latlng.lat + ", " + e.latlng.lng);
        	$("#Biodata_koordinat").show();
        });


        var marker = new L.marker(curLocation, {
        	draggable: "true"
        });

        marker.on("dragend", function(event) {
        	var position = marker.getLatLng();
        	marker
        	.setLatLng(position, {
        		draggable: "true"
        	})
        	marker.bindPopup('<b><big>Titik Koordinat Lokasi Anda Sekarang</big> <br> Apabila Tidak Sesuai Silahkan Geser Icon Ini <br> <big>(' + position.lat + ',' + position.lng + ')</big></b>').openPopup();
        	$("#Biodata_koordinat").val(position.lat + "," + position.lng).keyup();
        	$("#lat").val(position.lat).keyup();
        	$("#lng").val(position.lng).keyup();
        });

        $("#Biodata_koordinat").change(function() {

            var position = [latitude + ',' + longitude];
        	
        	marker.setLatLng(position, {
        		draggable: "true"
        	})
        	.bindPopup(position)
        	.update();
        	map.panTo(position);
        });

        map.addLayer(marker);

        marker.bindPopup('<b><big>Titik Koordinat Lokasi Anda Sekarang</big> <br> Apabila Tidak Sesuai Silahkan Geser Icon Ini <br> <big>(' +  + ',' +  + ')</big></b>').openPopup();
      }
      // END: Notifikasi Sukses Geolocation

      // START: Notifikasi Error Geolocation
      function error() {
      	alert('Gagal Mendapatkan Geolocation, Silahkan Gunakan Browser Google Chrome.');
      }
      // END: Notifikasi Error Geolocation
    });
  </script>
@stop

@section('top-content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.9.11/tinymce.min.js" integrity="sha512-3tlegnpoIDTv9JHc9yJO8wnkrIkq7WO7QJLi5YfaeTmZHvfrb1twMwqT4C0K8BLBbaiR6MOo77pLXO1/PztcLg==" crossorigin="anonymous"></script>
    <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDP7xsz79ZSjqSafWVZEPNsWblL3ucY-ms&libraries=places" type="text/javascript"></script>-->
    <style>
     #map-canvas{
         width:100%;
         height:500px;
     }
    </style>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.6.0/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
@stop
