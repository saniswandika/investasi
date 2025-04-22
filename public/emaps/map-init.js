$(function () {

    //Map Initialization
    let map = new mapboxgl.Map({
        container: 'map',
        style: 'https://basemaps.cartocdn.com/gl/voyager-gl-style/style.json',
        zoom: 8,
        center: [107.009647, -6.742887]
    });

    let allData = {}

    //loadLayers
    let loadLayers = (ctg, pls, thrower) => {
        let promises = []
        let promisesRef = []
        let contentData = {}
        let existingPlanningStatus = []
        let uniquePls = []
        //remove all layers
        let allLayers = map.getStyle().layers
        allLayers.forEach(function (item, index) {
            if (item.id.startsWith('jabar_')) {
                map.off('click',item.id,featureClick)
                map.off('mouseenter',item.id,hoverFeature)
                map.off('mouseleave',item.id,hoverFeatureEnd)
                map.removeLayer(item.id)
                map.removeSource(item.source)
            }
        })

        if($('.mapboxgl-popup')){
            $('.mapboxgl-popup').empty()
        }
        //Collect promises
        dataStore.forEach(function (item, index) {
            if (item.category == ctg && (pls == item.planningStatus || pls == 0)) {
                promises.push(
                    axios({
                        url: item.source
                    })
                )
                existingPlanningStatus.push(item.planningStatus)
                promisesRef.push(item)
            }
        })

        $.each(existingPlanningStatus, function(i, el){
            if($.inArray(el, uniquePls) === -1) uniquePls.push(el);
        });
        uniquePls = uniquePls.sort()

        if(thrower == 'ctg'){
            $('#planningStatus').empty()
            if(uniquePls.length!=0){
                $('#planningStatus').append('<div class="menuActive" planningId="0">Show All</div>')
                uniquePls.forEach(function(itm,idx){
                    generatePlanningStatus(itm)
                })
            } else {
                $('#planningStatus').append('<span>No Data.</span>')
            }

        }

        //Apply results
        axios.all(promises).then(function (res) {
            $('#sidebarContent').empty()
            $('.pointIcons').remove()
            res.forEach(function (item, index) {
                let type = ""
                let paint = {}

                let findKey = false

                for (var key in contentData) {
                    if (key == promisesRef[index].title) {
                        contentData[key].push({
                            ref: promisesRef[index],
                            features: item.data.features
                        })
                        findKey = true
                    }
                }

                if (findKey == false) {
                    if (contentData[promisesRef[index].title] == undefined) {
                        contentData[promisesRef[index].title] = []
                    }
                    contentData[promisesRef[index].title].push({
                        ref: promisesRef[index],
                        features: item.data.features
                    })
                }

                if (promisesRef[index].type == "Point") {
                    type = 'circle'
                    paint = {
                        'circle-radius':15,
                        'circle-color': promisesRef[index].color
                    }
                    item.data.features.forEach(function(item2,index2){
                        var el = document.createElement('a');
                        el.className = 'pointIcons';
                        el.style.width ='30px';
                        el.style.height = '30px';
                        el.style.padding = '4px';
                        el.style.marginLeft='-15px'
                        el.style.marginTop='-15px'
                        el.style.borderRadius = '300px';
                        el.style.backgroundColor= promisesRef[index].color
                        el.style.display = 'flex'
                        el.style.cursor = 'pointer'
                        el.style['align-items'] = 'center'
                        el.style['justify-content'] = 'center'
                        el.setAttribute('properties',JSON.stringify(item2.properties))
                        el.setAttribute('data-layer',JSON.stringify(promisesRef[index].id_layer))
                        el.setAttribute('coordinate',JSON.stringify(item2.geometry.coordinates))
                        el.setAttribute('href','#itemActive')
                        var el2 = document.createElement('img');
                        el2.setAttribute('src', promisesRef[index].source_icon);
                        el2.style.width ='100%';
                        el.appendChild(el2)
                        let marker = new mapboxgl.Marker(el)
                            .setLngLat(item2.geometry.coordinates)
                            .addTo(map);
                    })
                } else if (promisesRef[index].type == "Polyline") {
                    type = 'line'
                    paint = {
                        'line-width': 4,
                        'line-color': promisesRef[index].color
                    }
                    map.addSource('jabar_' + promisesRef[index].id_layer, {
                        type: 'geojson',
                        data: item.data
                    })
                    map.addLayer(
                        {
                            id: 'jabar_' + promisesRef[index].id_layer,
                            type: type,
                            source: 'jabar_' + promisesRef[index].id_layer,
                            paint: paint,
                            "layout": {
                                "line-join": "round",
                                "line-cap": "round"
                            },
                        }
                    )

                    map.on('click', 'jabar_' + promisesRef[index].id_layer, featureClick)
                    map.on('mouseenter', 'jabar_' + promisesRef[index].id_layer, hoverFeature)
                    map.on('mouseleave', 'jabar_' + promisesRef[index].id_layer, hoverFeatureEnd)
                }

            })

        }).finally(() => {
            allData = contentData
            renderContent(contentData)
        })
    }

    function featureClick(e){
        let lng = e.lngLat.lng
        let lat = e.lngLat.lat
        if($(window).width() < 800){
            lat = lat-0.4
        }
        map.flyTo({
            center: [lng,lat],
            speed: 0.8,
            curve: 1,
            easing: function(t) {
                return t
            }
        })

        if(e.features[0].properties.detail!=undefined){
            var popup = new mapboxgl.Popup()
                .setLngLat([e.lngLat.lng,e.lngLat.lat])
                .setHTML('<div>'+e.features[0].properties.name+'</div><div>'+e.features[0].properties.detail+'</div><div><a href="http://'+e.features[0].properties.link+'" target="_blank">Visit Link</a></div>')
                .addTo(map);
        }else{
            var popup = new mapboxgl.Popup()
                .setLngLat([e.lngLat.lng,e.lngLat.lat])
                .setHTML('<div>'+e.features[0].properties.name+'</div><div><a href="http://'+e.features[0].properties.link+'" target="_blank">Visit Link</a></div>')
                .addTo(map);
        }
        highlightFeature(e)
    }

    function featureClickFromList(feature){
        let lng = 0
        let lat = 0
        if(feature.geometry.type=="Point"){
            lng = feature.geometry.coordinates[0]
            lat = feature.geometry.coordinates[1]
        }else{
            lng = feature.geometry.coordinates[0][0]
            lat = feature.geometry.coordinates[0][1]
        }
        if($(window).width() < 800){
            lat = lat-0.4
        }
        map.flyTo({
            center: [lng,lat],
            speed: 0.8,
            curve: 1,
            easing: function(t) {
                return t
            }
        })

        if(feature.properties.detail!=undefined){
            var popup = new mapboxgl.Popup()
                .setLngLat([lng,lat])
                .setHTML('<div>'+feature.properties.name+'</div><div>'+feature.properties.detail+'</div><div><a href="http://'+feature.properties.link+'" target="_blank">Visit Link</a></div>')
                .addTo(map);
        }else{
            var popup = new mapboxgl.Popup()
                .setLngLat([lng,lat])
                .setHTML('<div>'+feature.properties.name+'</div><div><a href="http://'+feature.properties.link+'" target="_blank">Visit Link</a></div>')
                .addTo(map);
        }
    }

    //remove layer
    function removeLayer(id){
        if(map.getLayer(id)){
            map.removeSource(id)
            map.removeLayer(id)
        }
    }

    function hoverFeatureEnd(){
        map.getCanvas().style.cursor = ''
        if(map.getLayer("hovered")){
            map.removeSource("hovered")
            map.removeLayer("hovered")
        }
    }

    function hoverFeature(e){
        map.getCanvas().style.cursor = 'pointer'
        if(map.getLayer("hovered")){
            map.removeSource("hovered")
            map.removeLayer("hovered")
        }

        if(e.features[0].geometry.type=="LineString"){
            map.addSource('hovered', {
                "type":"geojson",
                "data": e.features[0]
            });
            map.addLayer({
                "id": "hovered",
                "type": "line",
                "source": "hovered",
                "layout": {
                    "line-join": "round",
                    "line-cap": "round"
                },
                "paint": {
                    "line-color":"white",
                    "line-width": 8,
                    "line-opacity":0.6
                }
            });
        }
    }

    function highlightFeature(e){
        if(map.getLayer("selectedRoad")){
            map.removeSource("selectedRoad")
            map.removeLayer("selectedRoad")
        }
        map.addSource('selectedRoad', {
            "type":"geojson",
            "data": e.features[0]
        });
        map.addLayer({
            "id": "selectedRoad",
            "type": "line",
            "source": "selectedRoad",
            "layout": {
                "line-join": "round",
                "line-cap": "round"
            },
            "paint": {
                "line-color":"yellow",
                "line-width": 8,
                "line-opacity":0.6
            }
        });
        $('.sidebarLeft_content--item').removeAttr('id')
        $('.sidebarLeft_content--item').each(function(){
            if(('jabar_'+$(this).attr('data-layer'))==e.features[0].layer.id && $(this).text()==e.features[0].properties.name){
                $(this).attr('id','itemActive')
            }
        })
    }


    function highlightFeaturePoint(popupData,popupCoordinate,layerId){
        $('.sidebarLeft_content--item').removeAttr('id')
        $('.sidebarLeft_content--item').each(function(){
            if(('"'+$(this).attr('data-layer')+'"')==layerId && $(this).text()==popupData.name){
                $(this).attr('id','itemActive')
            }
        })
    }

    function highlightFeatureFromList(feature){
        if($('.mapboxgl-popup')){
            $('.mapboxgl-popup').empty()
        }
        if(map.getLayer("selectedRoad")){
            map.removeSource("selectedRoad")
            map.removeLayer("selectedRoad")
        }

        if(feature.geometry.type=="Point"){

        }else{
            map.addSource('selectedRoad', {
                "type":"geojson",
                "data": feature
            });
            map.addLayer({
                "id": "selectedRoad",
                "type": "line",
                "source": "selectedRoad",
                "layout": {
                    "line-join": "round",
                    "line-cap": "round"
                },
                "paint": {
                    "line-color":"yellow",
                    "line-width": 8,
                    "line-opacity":0.6
                }
            });
        }

        featureClickFromList(feature)
    }

    let renderContent = (val) => {
        for (key in val) {
            if (val[key][0].ref.source_icon == "") {
                $('#sidebarContent').append('<div class="sidebarLeft_content--title">' + key + '</div>')
            } else {
                $('#sidebarContent').append('<div class="sidebarLeft_content--title"><div class="titleIcon"><img src="' + val[key][0].ref.source_icon + '" width="100%"/></div>' + key + '</div>')
            }
            val[key].forEach(function (item, index) {
                let planningStatusName = plsLookup(item.ref.planningStatus)
                $('#sidebarContent').append('<div class="sidebarLeft_content--status" style="color:' + item.ref.color + ';"><div style="background-color:' + item.ref.color + '" class="indicator"></div>' + planningStatusName + '</div>')
                item.features.forEach(function (item2, index2) {
                    $('#sidebarContent').append('<div class="sidebarLeft_content--item" data-layer="'+item.ref.id_layer+'" data-feature="'+index2+'">' + item2.properties.name + '</div><hr style="margin:0px 0;"/>')

                })

            })

        }

        //list on click
        $('.sidebarLeft_content--item').on('click', function(){
            $('.sidebarLeft_content--item').removeAttr('id')
            $(this).attr('id','itemActive');
            let id_layer = $(this).attr('data-layer')
            let feature = $(this).attr('data-feature')

            for(let key in allData){
                for(let key2 in allData[key]){
                    if(allData[key][key2].ref.id_layer==id_layer){
                        let features = allData[key][key2].features[feature]
                        highlightFeatureFromList(features)
                    }
                }
            }
        })

    }

    //first loaded
    map.on('style.load', function () {
        loadLayers(1, 0,'ctg')
    })

    //lookup category
    let plsLookup = (val) => {
        let plsName = ""
        planningStatus.forEach((item, index) => {
            if (item.id == val) {
                plsName = item.name
            }
        })
        return plsName
    }

    //----- Category
    let selectedCategory = {}
    let selectedPlanningStatus = { id: 0 }
    let generateCategory = (item) => {
        $('#category').append('<a class="dropdown-item category" categoryId="' + item.id + '">' + item.name + '</a>')
    }
    category.forEach(function (item, index) {
        generateCategory(item)
    })

    selectedCategory = category[0]
    $('#dropdownTitle').text(category[0].name)

    $('.dropdown-item.category').on('click', function () {
        if(map.getLayer("selectedRoad")){
            map.removeSource("selectedRoad")
            map.removeLayer("selectedRoad")
        }

        $('#dropdownTitle').text($(this).text())
        selectedCategory = {
            id: $(this).attr('categoryId'),
            name: $(this).text()
        }
        loadLayers(selectedCategory.id, 0,'ctg')
    })

    //------ Planning
    let generatePlanningStatus = (item) => {
        $('#planningStatus').append('<div planningId="' + item + '">' + plsLookup(item) + '</div>')
    }

    $('.sidebarLeft_menu--container').on('click','div', function () {
        removeLayer("selectedRoad")
        $('.sidebarLeft_menu--container > div').removeClass('menuActive')
        selectedPlanningStatus = {
            id: $(this).attr('planningId'),
            name: $(this).text()
        }
        $(this).addClass('menuActive')
        loadLayers(selectedCategory.id, selectedPlanningStatus.id,'pls')
    })

    //point click
    $('.mapboxgl-canvas-container').on('click','.pointIcons',function(){

        let popupData = JSON.parse($(this).attr('properties'))
        let popupCoordinate = JSON.parse($(this).attr('coordinate'))
        let layerId = $(this).attr('data-layer')
        if($(window).width() < 800){
            popupCoordinate[1]=popupCoordinate[1]-0.4
            var popup = new mapboxgl.Popup()
                .setLngLat([popupCoordinate[0],popupCoordinate[1]+0.4])
                .setHTML('<div>'+popupData.name+'</div><div>'+popupData.detail+'</div><div><a href="http://'+popupData.link+'" target="_blank">Visit Link</a></div>')
                .addTo(map);
        }else{
            var popup = new mapboxgl.Popup()
                .setLngLat([popupCoordinate[0],popupCoordinate[1]])
                .setHTML('<div>'+popupData.name+'</div><div>'+popupData.detail+'</div><div><a href="http://'+popupData.link+'" target="_blank">Visit Link</a></div>')
                .addTo(map);
        }
        map.flyTo({
            center: [popupCoordinate[0],popupCoordinate[1]],
            speed: 0.8,
            curve: 1,
            easing: function(t) {
                return t
            }
        })
        highlightFeaturePoint(popupData,popupCoordinate,layerId)
    })

    //mobile
    $('.mobilePreview').on('click',function(){
        $(this).hide()
        $('.mapContainer').css('visibility','visible')
        $('.mapContainer').css('z-index','9999')
    })
    $('.closeButton').on('click', function(){
        $('.mobilePreview').show();
        $('.mapContainer').css('visibility','hidden')
        $('.mapContainer').css('z-index','-9999')
    })

    $(window).on('resize', function(){
        var win = $(this); //this = window
        if (win.width() >= 800) {
            $('.mobilePreview').hide();
            $('.mapContainer').css('visibility','visible')
            $('.mapContainer').css('z-index','9999')
        }else{
            $('.mobilePreview').show();
            $('.mapContainer').css('visibility','hidden')
            $('.mapContainer').css('z-index','-9999')
        }
    });

});



