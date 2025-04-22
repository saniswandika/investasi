//Static stored state
//------------------

/*
source : static link JSON data
type : Polyline / Point
source_icon: Icon pada Title
*/

let dataStore = [
    {
        id_layer:'Toll_Road_Existing',
        source:'./inf/json/toll_road/1',
        type:'Polyline',
        color:'#33A044',
        opacity:'1',
        source_icon:'',
        category:'1',
        planningStatus:'1',
        title:'Toll Road Existing'
    },
    {
        id_layer:'Toll_Road_On_Planning',
        source:'./inf/json/toll_road/2',
        type:'Polyline',
        color:'#DB237A',
        opacity:'1',
        source_icon:'',
        category:'1',
        planningStatus:'3',
        title:'Toll Road On Planning'
    },
    {
        id_layer:'Toll_Road_On_Construction',
        source:'./inf/json/toll_road/3',
        type:'Polyline',
        color:'#1C93CE',
        opacity:'1',
        source_icon:'',
        category:'1',
        planningStatus:'4',
        title:'Toll Road On Construction'
    },
    //Railway
    {
        id_layer:'Railway_Existing',
        source:'./inf/json/railway/1',
        type:'Polyline',
        color:'#33A044',
        opacity:'1',
        source_icon:'',
        category:'2',
        planningStatus:'1',
        title:'Railway Existing'
    },
    {
        id_layer:'Railway_On_Planning',
        source:'./inf/json/railway/2',
        type:'Polyline',
        color:'#DB237A',
        opacity:'1',
        source_icon:'',
        category:'2',
        planningStatus:'3',
        title:'Railway On Planning'
    },
    {
        id_layer:'Railway_Construction',
        source:'./inf/json/railway/3',
        type:'Polyline',
        color:'#1C93CE',
        opacity:'1',
        source_icon:'',
        category:'2',
        planningStatus:'4',
        title:'Railway On Construction'
    },
    {
        id_layer:'High_Speed_Train',
        source:'./inf/json/railway_hst/3',
        type:'Polyline',
        color:'#FCC400',
        opacity:'1',
        source_icon:'',
        category:'2',
        planningStatus:'9',
        title:'High Speed Train'
    },
    //Airport
    {
        id_layer:'Airport',
        source:'./inf/json/airport/1',
        type:'Point',
        color:'#FFCA00',
        opacity:'1',
        source_icon:'./emaps/assets/airport.png',
        category:'3',
        planningStatus:'5',
        title:'Airport'
    },
    {
        id_layer:'Seaport',
        source:'./inf/json/seaport/1',
        type:'Point',
        color:'#0085CD',
        opacity:'1',
        source_icon:'./emaps/assets/seaport.png',
        category:'3',
        planningStatus:'6',
        title:'Seaport'
    },
    {
        id_layer:'High_Speed_Train',
        source:'./inf/json/hst/1',
        type:'Point',
        color:'#1BAAE4',
        opacity:'1',
        source_icon:'./emaps/assets/hst.png',
        category:'3',
        planningStatus:'7',
        title:'High Speed Train'
    },
    {
        id_layer:'LRT',
        source:'./inf/json/lrt/1',
        type:'Point',
        color:'#008D4E',
        opacity:'1',
        source_icon:'./emaps/assets/lrt.png',
        category:'3',
        planningStatus:'8',
        title:'LRT'
    },
    {
        id_layer:'Energy_Solid_Waste_On_Planning',
        source:'./inf/json/solid_waste/2',
        type:'Point',
        color:'#265A3E',
        opacity:'0.7',
        source_icon:'./emaps/assets/solid_waste.png',
        category:'4',
        planningStatus:'3',
        title:'Solid Waste Plan Treatment'
    },
    {
        id_layer:'Energy_Solid_Waste_Construction',
        source:'./inf/json/solid_waste/3',
        type:'Point',
        color:'#265A3E',
        opacity:'0.7',
        source_icon:'./emaps/assets/solid_waste.png',
        category:'4',
        planningStatus:'4',
        title:'Solid Waste Plan Treatment'
    },
    {
        id_layer:'Energy_Solid_Waste_Existing',
        source:'./inf/json/solid_waste/1',
        type:'Point',
        color:'#265A3E',
        opacity:'0.7',
        source_icon:'./emaps/assets/solid_waste.png',
        category:'4',
        planningStatus:'1',
        title:'Solid Waste Plan Treatment'
    },
    {
        id_layer:'Dam_Existing',
        source:'./inf/json/dam/1',
        type:'Point',
        color:'#0085CD',
        opacity:'0.7',
        source_icon:'./emaps/assets/dam.png',
        category:'4',
        planningStatus:'1',
        title:'DAM'
    },
    {
        id_layer:'Hydro_Power_Plant_1_Existing',
        source:'./inf/json/hpp1/1',
        type:'Point',
        color:'#FCC400',
        opacity:'0.7',
        source_icon:'./emaps/assets/hydro_power_plant.png',
        category:'4',
        planningStatus:'1',
        title:'Hydro Power Plant'
    },
    {
        id_layer:'Geothermal_Power_Plant_Existing',
        source:'./inf/json/hpp2/1',
        type:'Point',
        color:'#7EB235',
        opacity:'0.7',
        source_icon:'./emaps/assets/geothermal_power_plant.png',
        category:'4',
        planningStatus:'1',
        title:'Geothermal Power Plant'
    },
    {
        id_layer:'Geothermal_Power_Plant_On_Construction',
        source:'./inf/json/hpp2/3',
        type:'Point',
        color:'#7EB235',
        opacity:'0.7',
        source_icon:'./emaps/assets/geothermal_power_plant.png',
        category:'4',
        planningStatus:'4',
        title:'Geothermal Power Plant'
    },
    {
        id_layer:'Regional_Water_Treatment_Plant_On_Planning',
        source:'./inf/json/rwtp1/2',
        type:'Point',
        color:'#5DCDF4',
        opacity:'0.7',
        source_icon:'./emaps/assets/regional_water_treatment_plant_1.png',
        category:'4',
        planningStatus:'3',
        title:'Regional Water Treatment Plant 1'
    },
    {
        id_layer:'Regional_Water_Treatment_Plant2_Existing',
        source:'./inf/json/rwtp2/1',
        type:'Point',
        color:'#3CAA9A',
        opacity:'0.7',
        source_icon:'./emaps/assets/regional_water_treatment_plant_2.png',
        category:'4',
        planningStatus:'1',
        title:'Regional Water Treatment Plant 2'
    },
    {
        id_layer:'Regional_Water_Treatment_Plant3_Existing',
        source:'./inf/json/rwtp3/1',
        type:'Point',
        color:'#FFDE00',
        opacity:'0.7',
        source_icon:'./emaps/assets/regional_water_treatment_plant_3.png',
        category:'4',
        planningStatus:'1',
        title:'Regional Water Treatment Plant 3'
    },
]

let category = [
    {
        id:1,
        name:'Toll Road'
    },
    {
        id:2,
        name:'Railway'
    },
    {
        id:3,
        name:'Airport, Port, High Speed Train & LRT'
    },
    {
        id:4,
        name:'Energy & Utility'
    }
]

let planningStatus = [
    {
        id:1,
        name:'Existing'
    },
    {
        id:2,
        name:'On Development'
    },
    {
        id:3,
        name:'On Planning'
    },
    {
        id:4,
        name:'On Construction'
    },
    {
        id:5,
        name:'Airport'
    },
    {
        id:6,
        name:'Port'
    },
    {
        id:7,
        name:'High Speed Train'
    },
    {
        id:8,
        name:'LRT'
    },
    {
        id:9,
        name:'Railway High Speed Train'
    },

]
