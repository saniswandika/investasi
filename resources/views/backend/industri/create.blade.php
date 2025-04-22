@extends('layouts.app')

@section('title')
    Halaman Tambah Industri
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <form action="{{route('industri.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-header">
                        <div class="d-flex flex-row align-items-center">
                            <h3>Tambah Industri</h3>
                            <a href="{{route('industri.index')}}" class="btn btn-sm btn-primary ml-auto">Back</a>
                            <button type="submit" class="btn btn-sm btn-primary">Save</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="nav-wrapper">
                            <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-briefcase-24 mr-2"></i>General Information</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-bulb-61 mr-2"></i>Current Status</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"><i class="ni ni-building mr-2"></i>Estate Information</a>
                                </li>
                            </ul>
                        </div>
                        <div class="p-4">
                            <div class="card shadow">
                                <div class="card-body">
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
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
                                                               placeholder="Kawasan Industri Jawa Barat" value="{!! old('name') !!}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        Kode Industri
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <input type="text"
                                                               class="form-control" name="code" id="" aria-describedby="helpId"
                                                               placeholder="KIJB" value="{!! old('code') !!}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        Location
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="searchmap" name="location"><br>
                                                        <div id="map-canvas"></div>
                                                        <div class="row mt-2">
                                                            <div class="col-lg-6">Long: <input name="long" id="lng" type="text" class="form-control" value="{!! old('lang') !!}" id="exampleFormControlInput1"></div>
                                                            <div class="col-lg-6">Lat: <input name="lat" id="lat" type="text" class="form-control" value="{!! old('lat') !!}" id="exampleFormControlInput1"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        Industry Image
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <input type="file" class="form-control-file" name="image2" id="" placeholder=""
                                                               aria-describedby="fileHelpId">
                                                        <small>*max 2 mb</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        Map Image
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <input type="file" class="form-control-file" name="image" id="" placeholder=""
                                                               aria-describedby="fileHelpId">
                                                        <small>*max 2 mb</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        Company
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <input type="text"
                                                               class="form-control" name="company_name" id="" aria-describedby="helpId"
                                                               placeholder="PT. Bogorindo Cemerlang" value="{!! old('company_name') !!}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        Site Office Address
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <input type="text"
                                                               class="form-control" name="office_address" id="" aria-describedby="helpId"
                                                               placeholder="Jl. Olympic Raya Kavling B, Sentul, Bogor 16810" value="{!! old('office_address') !!}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        Phone
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <input type="text"
                                                               class="form-control" name="phone" id="" aria-describedby="helpId"
                                                               placeholder="" value="{!! old('phone') !!}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        Fax
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <input type="text"
                                                               class="form-control" name="fax" id="" aria-describedby="helpId"
                                                               placeholder="" value="{!! old('fax') !!}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        Website
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <input type="text"
                                                               class="form-control" name="website" id="" aria-describedby="helpId"
                                                               placeholder="" value="{!! old('website') !!}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        Email
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <input type="email"
                                                               class="form-control" name="email" id="" aria-describedby="helpId"
                                                               placeholder="" value="{!! old('email') !!}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        President Director
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <input type="text"
                                                               class="form-control" name="presdir" id="" aria-describedby="helpId"
                                                               placeholder="" value="{!! old('presdir') !!}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        Director
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <input type="text"
                                                               class="form-control" name="director" id="" aria-describedby="helpId"
                                                               placeholder="" value="{!! old('director') !!}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        Contact Person
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <input type="text"
                                                               class="form-control" name="contact_person" id="" aria-describedby="helpId"
                                                               placeholder="" value="{!! old('contact_person') !!}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        Distance To Jakarta
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <input type="text"
                                                               class="form-control" name="distance_to_jkt" id="" aria-describedby="helpId"
                                                               placeholder="33 km south direction via Jagorawi toll road" value="{!! old('distance_to_jkt') !!}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        Distance To Harbour
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <input type="text"
                                                               class="form-control" name="distance_to_harbour" id="" aria-describedby="helpId"
                                                               placeholder="Tanjung Priok 50km" value="{!! old('distance_to_harbour') !!}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        Distance To Airport
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <input type="text"
                                                               class="form-control" name="distance_to_airport" id="" aria-describedby="helpId"
                                                               placeholder="Soekarno-Hatta 70km" value="{!! old('distance_to_airport') !!}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        Total Area
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <input type="text"
                                                               class="form-control" name="total_area" id="" aria-describedby="helpId"
                                                               placeholder="" value="{!! old('total_area') !!}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        Total Develop Area
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <input type="text"
                                                               class="form-control" name="total_develop_area" id="" aria-describedby="helpId"
                                                               placeholder="" value="{!! old('total_develop_area') !!}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        Total Salable Area
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <input type="text"
                                                               class="form-control" name="total_salable_area" id="" aria-describedby="helpId"
                                                               placeholder="" value="{!! old('total_salable_area') !!}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        Total Available Area
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <input type="text"
                                                               class="form-control" name="total_available_area" id="" aria-describedby="helpId"
                                                               placeholder="" value="{!! old('total_available_area') !!}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        Facilities
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text"
                                                               class="form-control" name="facilities" id="" aria-describedby="helpId"
                                                               placeholder="" value="{!! old('facilities') !!}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        Water Supply Source
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text"
                                                               class="form-control" name="ui_ws_source" id="" aria-describedby="helpId"
                                                               placeholder="" value="{!! old('ui_ws_source') !!}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        Water Supply Capacity
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text"
                                                               class="form-control" name="ui_ws_capacity" id="" aria-describedby="helpId"
                                                               placeholder="" value="{!! old('ui_ws_capacity') !!}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        Electricity Source
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text"
                                                               class="form-control" name="ui_el_source" id="" aria-describedby="helpId"
                                                               placeholder="" value="{!! old('ui_el_source') !!}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        Electricity Capacity
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text"
                                                               class="form-control" name="ui_el_capacity" id="" aria-describedby="helpId"
                                                               placeholder="" value="{!! old('ui_el_capacity') !!}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        Telecomunication Source
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text"
                                                               class="form-control" name="ui_tel_source" id="" aria-describedby="helpId"
                                                               placeholder="" value="{!! old('ui_tel_source') !!}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        Telecomunication Capacity
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text"
                                                               class="form-control" name="ui_tel_capacity" id="" aria-describedby="helpId"
                                                               placeholder="" value="{!! old('ui_tel_capacity') !!}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        Fiber Optic Source
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text"
                                                               class="form-control" name="ui_fo_source" id="" aria-describedby="helpId"
                                                               placeholder="" value="{!! old('ui_fo_source') !!}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        Fiber Optic Capacity
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text"
                                                               class="form-control" name="ui_fo_capacity" id="" aria-describedby="helpId"
                                                               placeholder="" value="{!! old('ui_fo_capacity') !!}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        Gas Source
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text"
                                                               class="form-control" name="ui_gas_source" id="" aria-describedby="helpId"
                                                               placeholder="" value="{!! old('ui_gas_source') !!}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        Gas Capacity
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text"
                                                               class="form-control" name="ui_gas_capacity" id="" aria-describedby="helpId"
                                                               placeholder="" value="{!! old('ui_gas_capacity') !!}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        Selling Price - Industrial Land
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text"
                                                               class="form-control" name="ei_selling_industrial_land" id="" aria-describedby="helpId"
                                                               placeholder="" value="{!! old('ei_selling_industrial_land') !!}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        Selling Price - Warehouse
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text"
                                                               class="form-control" name="ei_selling_warehouse" id="" aria-describedby="helpId"
                                                               placeholder="" value="{!! old('ei_selling_warehouse') !!}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        Other Charges - Service Charge
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text"
                                                               class="form-control" name="ei_charge_service" id="" aria-describedby="helpId"
                                                               placeholder="" value="{!! old('ei_charge_service') !!}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        Other Charges - Water
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text"
                                                               class="form-control" name="ei_charge_water" id="" aria-describedby="helpId"
                                                               placeholder="" value="{!! old('ei_charge_water') !!}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        Other Charges - Electricity
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text"
                                                               class="form-control" name="ei_charge_electricity" id="" aria-describedby="helpId"
                                                               placeholder="" value="{!! old('ei_charge_electricity') !!}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        Other Charges - Gas
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text"
                                                               class="form-control" name="ei_charge_gas" id="" aria-describedby="helpId"
                                                               placeholder="" value="{!! old('ei_charge_gas') !!}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        Other Charges - Telecomunication
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text"
                                                               class="form-control" name="ei_charge_tel" id="" aria-describedby="helpId"
                                                               placeholder="" value="{!! old('ei_charge_tel') !!}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        Other Charges - Fiber Optic
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text"
                                                               class="form-control" name="ei_charge_fo" id="" aria-describedby="helpId"
                                                               placeholder="" value="{!! old('ei_charge_fo') !!}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        Number Of Companies
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text"
                                                               class="form-control" name="number_oc" id="" aria-describedby="helpId"
                                                               placeholder="" value="{!! old('number_oc') !!}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
    // 	var map = new google.maps.Map(document.getElementById('map-canvas'),{
    // 		center:{
    // 			lat: -6.917463899999999,
    //         	lng: 107.6191228
    // 		},
    // 		zoom:10
    // 	});
    // 	var marker = new google.maps.Marker({
    // 		position: {
    // 			lat: -6.917463899999999,
    //         	lng: 107.6191228
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
        var map, marker;
        var latitude = <?php echo isset($industri['lat']) ? $industri['lat'] : 0; ?>;
    var longitude = <?php echo isset($industri['long']) ? $industri['long'] : 0; ?>;
        
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
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDP7xsz79ZSjqSafWVZEPNsWblL3ucY-ms&libraries=places" type="text/javascript"></script>
    <style>
     #map-canvas{
         width:100%;
         height:500px;
     }
    </style>
@stop
