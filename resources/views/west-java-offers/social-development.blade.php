@extends('layouts.frontend')

@section('content')
    <div class="jumbotron jumbotron-fluid nav-margin" style="background-image:
            /* top, transparent red */
            linear-gradient(151deg,
            rgba(52,122,74, 0.60),
            rgba(253,196,38, 0.10)
            ),
            /* your image */
            url('{{url('')}}/old-assets/frontend/images/toll-road-image-2.jpg'); background-size: cover; background-position: center top; background-repeat: no-repeat; background-attachment: fixed; height: 500px">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-lg-6 text-white">
                    <h1 class="display-1 text-warning">07</h1>
                    <h3 class="display-3 text-white">@lang('front.social-development-Social Development Program')</h3>
                    <p class="lead">@lang('front.social-development-Besides')</p>
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

                        <div class="section section-large">
                            <div class="container-large">
                                <div class="row mb-4">
                                    <div class="col-md-7">
                                        <div class="mb-4 pr-4">
                                            <h1>@lang('front.social-development-Inclusive')</h1>
                                            <div class="line-style">
                                                <div class="line-style-3"></div>
                                                <div class="line-style-2"></div>
                                            </div>
                                        </div>
                                        <p class="lead">@lang('front.social-development-We want')</p>
                                    </div>
                                    <div class="col-md-5" style="margin-bottom: 32px;">
                                        <div class="row mb-3">
                                            <div class="col text-center mb-2">
                                                <div class="block pl-3 pr-3">
                                                    <img src="{{url('')}}/old-assets/frontend/images/icon-economic-1.png" class="block w-100 mx-auto">
                                                    <h5 class="font-semibold block mt-2">@lang('front.social-development-Growing')</h5>
                                                </div>
                                            </div>
                                            <div class="col text-center">
                                                <div class="block pl-3 pr-3">
                                                    <img src="{{url('')}}/old-assets/frontend/images/icon-economic-2.png" class="block w-100 mx-auto">
                                                    <h5 class="font-semibold block mt-2">@lang('front.social-development-Parcitipatory')</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb03">
                                            <div class="col text-center mb-2">
                                                <div class="block pl-3 pr-3">
                                                    <img src="{{url('')}}/old-assets/frontend/images/icon-economic-3.png" class="block w-100 mx-auto">
                                                    <h5 class="font-semibold block mt-2">@lang('front.social-development-Equitable')</h5>
                                                </div>
                                            </div>
                                            <div class="col text-center">
                                                <div class="block pl-3 pr-3">
                                                    <img src="{{url('')}}/old-assets/frontend/images/icon-economic-4.png" class="block w-100 mx-auto">
                                                    <h5 class="font-semibold block mt-2">@lang('front.social-development-Sustainable')</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section section-small">
                            <div class="container-large">
                                <img src="{{url('')}}/old-assets/frontend/images/economic-growth.JPG" class="w-100 d-block">
                            </div>
                        </div>
                        <div class="section section-large">
                            <div class="container-large">
                                <div class="mb-4 pr-4">
                                    <h1>@lang('front.social-development-The Programs')</h1>
                                    <div class="line-style">
                                        <div class="line-style-3"></div>
                                        <div class="line-style-2"></div>
                                    </div>
                                </div>
                                <div class="card-group-custom card-group-shadow card-group-20">
                                    <div class="card-item mb-4 card-lift--hover">
                                        <div class="card-item--inner">
                                            <div class="card-body card-body-normal">
                                                <img src="{{url('')}}/old-assets/frontend/images/icon-economic-6.png" class="w-50 mb-3">
                                                <div class="card-title font-semibold font-s-medium">@lang('front.social-development-Infrastructure')</div>
                                                <div class="block font-s-small">
                                                    @lang('front.social-development-Provide')
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-item mb-4 card-lift--hover">
                                        <div class="card-item--inner">
                                            <div class="card-body card-body-normal">
                                                <img src="{{url('')}}/old-assets/frontend/images/icon-economic-7.png" class="w-50 mb-3">
                                                <div class="card-title font-semibold font-s-medium">@lang('front.social-development-Human Resources')</div>
                                                <div class="block font-s-small">
                                                    @lang('front.social-development-Improving')
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-item mb-4 card-lift--hover">
                                        <div class="card-item--inner">
                                            <div class="card-body card-body-normal">
                                                <img src="{{url('')}}/old-assets/frontend/images/icon-economic-8.png" class="w-50 mb-3">
                                                <div class="card-title font-semibold font-s-medium">@lang('front.social-development-Integration')</div>
                                                <div class="block pb-2 mb-2 border-bottom font-s-small">
                                                    @lang('front.social-development-Integrating potential')
                                                </div>
                                                <div class="block font-s-small">
                                                    @lang('front.social-development-Integrating potential')
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-item mb-4 card-lift--hover">
                                        <div class="card-item--inner">
                                            <div class="card-body card-body-normal">
                                                <img src="{{url('')}}/old-assets/frontend/images/icon-economic-9.png" class="w-50 mb-3">
                                                <div class="card-title font-semibold font-s-medium">@lang('front.social-development-Villages')</div>
                                                <div class="block pb-2 mb-2 border-bottom font-s-small">
                                                    @lang('front.social-development-Revitalization on villages')
                                                </div>
                                                <div class="block pb-2 mb-2 border-bottom font-s-small">
                                                    @lang('front.social-development-One Village One Product')
                                                </div>
                                                <div class="block font-s-small">
                                                    @lang('front.social-development-One Village One Company')
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-item mb-4 card-lift--hover">
                                        <div class="card-item--inner">
                                            <div class="card-body card-body-normal">
                                                <img src="{{url('')}}/old-assets/frontend/images/icon-economic-10.png" class="w-50 mb-3">
                                                <div class="card-title font-semibold font-s-medium">@lang('front.social-development-Economic Centers')</div>
                                                <div class="block font-s-small">
                                                    @lang('front.social-development-Developing')
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="line-separator"></div>
                            <div class="container-large">
                                <img src="{{url('')}}/old-assets/frontend/images/program-dev-1.jpg" class="block w-100 mb-4"/>
                                <div class="card-group-custom card-group-shadow card-group-33 ">
                                    <div class="card-item mb-3">
                                        <div class="card-item--inner">
                                            <div class="p-3">
                                                <div class="d-flex align-items-start">
                                                    <div class="flex-shrink-0 bg-green p-2 mr-3 rounded">
                                                        <h5 class="mb-0 color-white">01</h5>
                                                    </div>
                                                    <div class="block w-100">
                                                        <h5 class="font-semibold mb-1">Management</h5>
                                                        <div class="d-block bg-medium-grey p-1 pl-3 pr-3 rounded w-100">Village Worker</div>
                                                        <div>CEO</div>
                                                        <ul class="list-horizontal font-small">
                                                            <li>Universities</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-item mb-3">
                                        <div class="card-item--inner">
                                            <div class="p-3">
                                                <div class="d-flex align-items-start">
                                                    <div class="flex-shrink-0 bg-green p-2 mr-3 rounded">
                                                        <h5 class="mb-0 color-white">02</h5>
                                                    </div>
                                                    <div class="block w-100">
                                                        <h5 class="font-semibold mb-1">Marketing</h5>
                                                        <div class="d-block bg-medium-grey p-1 pl-3 pr-3 rounded w-100">Offtaker's Forum</div>
                                                        <div>Digital Commerce</div>
                                                        <ul class="list-horizontal font-small">
                                                            <li>Bukalapak</li>
                                                            <li>Tokopedia</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-item mb-3">
                                        <div class="card-item--inner">
                                            <div class="p-3">
                                                <div class="d-flex align-items-start">
                                                    <div class="flex-shrink-0 bg-green p-2 mr-3 rounded">
                                                        <h5 class="mb-0 color-white">03</h5>
                                                    </div>
                                                    <div class="block w-100">
                                                        <h5 class="font-semibold mb-1">Capital</h5>
                                                        <div class="d-block bg-medium-grey p-1 pl-3 pr-3 rounded w-100">Provincial Gov.</div>
                                                        <div>Financial Services</div>
                                                        <ul class="list-horizontal font-small">
                                                            <li>CSR</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-item mb-3">
                                        <div class="card-item--inner">
                                            <div class="p-3">
                                                <div class="d-flex align-items-start">
                                                    <div class="flex-shrink-0 bg-green p-2 mr-3 rounded">
                                                        <h5 class="mb-0 color-white">04</h5>
                                                    </div>
                                                    <div class="block w-100">
                                                        <h5 class="font-semibold mb-1">Product</h5>
                                                        <div class="d-block bg-medium-grey p-1 pl-3 pr-3 rounded w-100">Potential Availability</div>
                                                        <ul class="list-horizontal font-small">
                                                            <li>Agriculture</li>
                                                            <li>Plantation</li>
                                                            <li>Tourism</li>
                                                            <li>Fisheries</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-item mb-3">
                                        <div class="card-item--inner">
                                            <div class="p-3">
                                                <div class="d-flex align-items-start">
                                                    <div class="flex-shrink-0 bg-green p-2 mr-3 rounded">
                                                        <h5 class="mb-0 color-white">05</h5>
                                                    </div>
                                                    <div class="block w-100">
                                                        <h5 class="font-semibold mb-1">Mentor</h5>
                                                        <div class="d-block bg-medium-grey p-1 pl-3 pr-3 rounded w-100">Trading Chamber</div>
                                                        <div>State Owned Enterprises</div>
                                                        <ul class="list-horizontal font-small">
                                                            <li>Young Enterpreneur Associaton</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-3">
                                        <div class="d-flex align-items-center">
                                            <img src="{{url('')}}/old-assets/frontend/images/West_Java_coa.png" width="60" class="mr-2">
                                            <div class="font-semibold">
                                                <h6 class="m-0 font-semibold">Leading Sector:</h6>
                                                <h5 class="m-0 font-semibold">Rural and Community Development Office</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="line-separator"></div>
                            <div class="container-large">
                                <img src="{{url('')}}/old-assets/frontend/images/program-dev-2.jpg" class="block w-100 mb-4"/>
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <p>@lang('front.social-development-OPOP')</p><p>@lang('front.social-development-OPOP aim')</p>
                                        <div class="row mt-4">
                                            <div class="col-lg-3">
                                                <div class="d-flex align-items-center">
                                                    <img src="{{url('')}}/old-assets/frontend/images/West_Java_coa.png" width="60" class="mr-2">
                                                    <div class="font-semibold">
                                                        <h6 class="m-0 font-semibold">Leading Sector:</h6>
                                                        <h5 class="m-0 font-semibold">Cooperative and Small Enterprise Office</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="{{url('')}}/old-assets/frontend/images/opop-image-1.jpg" class="d-block w-100"/>
                                    </div>
                                </div>
                            </div>
                            <div class="line-separator"></div>
                            <div class="container-large">
                                <img src="{{url('')}}/old-assets/frontend/images/program-dev-3.jpg" class="block w-100 mb-4"/>
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <p>@lang('front.social-development-MICRO FINANCING PROGRAM')</p>
                                        <p>@lang('front.social-development-In implementing')</p>
                                        <p>@lang('front.social-development-As the experience')</p>
                                        <p><span class="font-semibold">West Java Financing Program in Number (Jan-May 2019)</span><p>
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td>Loan</td>
                                                <td>: 225.000 USD</td>

                                            </tr>
                                            <tr>
                                                <td>Potentital Loan</td>
                                                <td>: 400.000 USD</td>

                                            </tr>
                                            <tr>
                                                <td style="padding-right: 12px;">Number of Account</td>
                                                <td>: 1.361 Creditors</td>
                                            </tr>
                                            <tr>
                                                <td>NPL   </td>
                                                <td>: 0%</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <p style="font-size:.8rem;">*creditor candidates are under the training for enterpreneurship<p>
                                        <div class="row mt-4">
                                            <div class="col-lg-3">
                                                <div class="d-flex align-items-center">
                                                    <img src="{{url('')}}/old-assets/frontend/images/West_Java_coa.png" width="60" class="mr-2">
                                                    <div class="font-semibold">
                                                        <h6 class="m-0 font-semibold">Leading Sector:</h6>
                                                        <h5 class="m-0 font-semibold">Rural and Community Development Office</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="{{url('')}}/old-assets/frontend/images/mesra-program-1.jpg" class="d-block w-100"/>
                                    </div>
                                </div>
                            </div>
                            <div class="line-separator"></div>
                            <div class="container-large">
                                <img src="{{url('')}}/old-assets/frontend/images/quickresponse-1.JPG" class="d-block w-100 mb-4"/>
                            </div>
                            <div class="line-separator"></div>
                            <div class="container-large">
                                <!-- Social Program - 1 -->
                                <div class="row">
                                    <!-- Social & Environment -->
                                    <div class="col-md-4">
                                        <!-- Social -->
                                        <h4 class="font-semibold d-block mb-3">@lang('front.social-development-Social')</h4>
                                        <div class="d-block w-100">
                                            <div class="list-with-icon">
                                                <div class="list-with-icon--icon">
                                                    <img src="{{url('')}}/old-assets/frontend/images/icon-3/icon-social-1.jpg"/>
                                                </div>
                                                <div>
                                                    <div class="font-semibold color-green d-block">@lang('front.social-development-Jabar Quick Response')</div>
                                                    <div class="font-s-small">@lang('front.social-development-Fulfillment')</div>
                                                </div>
                                            </div>
                                            <div class="list-with-icon">
                                                <div class="list-with-icon--icon">
                                                    <img src="{{url('')}}/old-assets/frontend/images/icon-3/icon-social-2.jpg"/>
                                                </div>
                                                <div>
                                                    <div class="font-semibold color-green d-block">@lang('front.social-development-Housing Renovation')</div>
                                                    <div class="font-s-small">@lang('front.social-development-Renovation')</div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <!-- Environtment -->
                                        <h4 class="font-semibold d-block mb-3">@lang('front.social-development-Environment')</h4>
                                        <div class="d-block w-100">
                                            <div class="list-with-icon">
                                                <div class="list-with-icon--icon">
                                                    <img src="{{url('')}}/old-assets/frontend/images/icon-3/icon-social-3.jpg"/>
                                                </div>
                                                <div>
                                                    <div class="font-semibold color-green d-block">@lang('front.social-development-River Normalization')</div>
                                                    <div class="font-s-small">@lang('front.social-development-Dredging')</div>
                                                </div>
                                            </div>
                                            <div class="list-with-icon">
                                                <div class="list-with-icon--icon">
                                                    <img src="{{url('')}}/old-assets/frontend/images/icon-3/icon-social-4.jpg"/>
                                                </div>
                                                <div>
                                                    <div class="font-semibold color-green d-block">@lang('front.social-development-Tree Planting/ Forest Conservation')</div>
                                                    <div class="font-s-small">@lang('front.social-development-Planting forest')</div>
                                                </div>
                                            </div>
                                            <div class="list-with-icon">
                                                <div class="list-with-icon--icon">
                                                    <img src="{{url('')}}/old-assets/frontend/images/icon-3/icon-social-5.jpg"/>
                                                </div>
                                                <div>
                                                    <div class="font-semibold color-green d-block">@lang('front.social-development-Retaining Wall')</div>
                                                    <div class="font-s-small">@lang('front.social-development-Construction')</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <!-- Education -->
                                    <div class="col-md-4">
                                        <!-- Education -->
                                        <h4 class="font-semibold d-block mb-3">@lang('front.social-development-Education')</h4>
                                        <div class="d-block w-100">
                                            <div class="list-with-icon">
                                                <div class="list-with-icon--icon">
                                                    <img src="{{url('')}}/old-assets/frontend/images/icon-3/icon-social-6.jpg"/>
                                                </div>
                                                <div>
                                                    <div class="font-semibold color-green d-block">@lang('front.social-development-Classroom')</div>
                                                    <div class="font-s-small">@lang('front.social-development-Construction2')</div>
                                                </div>
                                            </div>
                                            <div class="list-with-icon">
                                                <div class="list-with-icon--icon">
                                                    <img src="{{url('')}}/old-assets/frontend/images/icon-3/icon-social-7.jpg"/>
                                                </div>
                                                <div>
                                                    <div class="font-semibold color-green d-block">@lang('front.social-development-Smart Class')</div>
                                                    <div class="font-s-small">@lang('front.social-development-Procurement')</div>
                                                </div>
                                            </div>
                                            <div class="list-with-icon">
                                                <div class="list-with-icon--icon">
                                                    <img src="{{url('')}}/old-assets/frontend/images/icon-3/icon-social-8.jpg"/>
                                                </div>
                                                <div>
                                                    <div class="font-semibold color-green d-block">@lang('front.social-development-Vocational School and Industry Integration')</div>
                                                    <div class="font-s-small">@lang('front.social-development-Employment')</div>
                                                </div>
                                            </div>
                                            <div class="list-with-icon">
                                                <div class="list-with-icon--icon">
                                                    <img src="{{url('')}}/old-assets/frontend/images/icon-3/icon-social-9.jpg"/>
                                                </div>
                                                <div>
                                                    <div class="font-semibold color-green d-block">@lang('front.social-development-Library Corner')</div>
                                                    <div class="font-s-small">@lang('front.social-development-Construction3')</div>
                                                </div>
                                            </div>
                                            <div class="list-with-icon">
                                                <div class="list-with-icon--icon">
                                                    <img src="{{url('')}}/old-assets/frontend/images/icon-3/icon-social-10.jpg"/>
                                                </div>
                                                <div>
                                                    <div class="font-semibold color-green d-block">@lang('front.social-development-Scholarship')</div>
                                                    <div class="font-s-small">@lang('front.social-development-Providing')</div>
                                                </div>
                                            </div>
                                            <div class="list-with-icon">
                                                <div class="list-with-icon--icon">
                                                    <img src="{{url('')}}/old-assets/frontend/images/icon-3/icon-social-11.jpg"/>
                                                </div>
                                                <div>
                                                    <div class="font-semibold color-green d-block">@lang('front.social-development-Kolecer (Smart Literation Box)')</div>
                                                    <div class="font-s-small">@lang('front.social-development-Provision')</div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                    <br>
                                    <!-- Health -->
                                    <div class="col-md-4">
                                        <!-- Health -->
                                        <h4 class="font-semibold d-block mb-3">@lang('front.social-development-Health')</h4>
                                        <div class="d-block w-100">
                                            <div class="list-with-icon">
                                                <div class="list-with-icon--icon">
                                                    <img src="{{url('')}}/old-assets/frontend/images/icon-3/icon-social-12.jpg"/>
                                                </div>
                                                <div>
                                                    <div class="font-semibold color-green d-block">@lang('front.social-development-Ambulance')</div>
                                                    <div class="font-s-small">@lang('front.social-development-Provision of ambulances')</div>
                                                </div>
                                            </div>
                                            <div class="list-with-icon">
                                                <div class="list-with-icon--icon">
                                                    <img src="{{url('')}}/old-assets/frontend/images/icon-3/icon-social-13.jpg"/>
                                                </div>
                                                <div>
                                                    <div class="font-semibold color-green d-block">@lang('front.social-development-Home-health-care Layad Rawat')</div>
                                                    <div class="font-s-small">@lang('front.social-development-Provision of two-wheeled')</div>
                                                </div>
                                            </div>
                                            <div class="list-with-icon">
                                                <div class="list-with-icon--icon">
                                                    <img src="{{url('')}}/old-assets/frontend/images/icon-3/icon-social-14.jpg"/>
                                                </div>
                                                <div>
                                                    <div class="font-semibold color-green d-block">@lang('front.social-development-Maternal and Child Health Center')</div>
                                                    <div class="font-s-small">@lang('front.social-development-Development')</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <br>
                                <!-- Social Program - 2 -->
                                <div class="row">
                                    <!-- Purchasing Power Enhancement -->
                                    <div class="col-md-4">
                                        <h4 class="font-semibold d-block mb-3">@lang('front.social-development-Economic Enhancement')</h4>
                                        <div class="d-block w-100">
                                            <div class="list-with-icon">
                                                <div class="list-with-icon--icon">
                                                    <img src="{{url('')}}/old-assets/frontend/images/icon-3/icon-social-15.jpg"/>
                                                </div>
                                                <div>
                                                    <div class="font-semibold color-green d-block">@lang('front.social-development-One Pesantren One Product')</div>
                                                    <div class="font-s-small">@lang('front.social-development-Development of business in Pesantren')</div>
                                                </div>
                                            </div>
                                            <div class="list-with-icon">
                                                <div class="list-with-icon--icon">
                                                    <img src="{{url('')}}/old-assets/frontend/images/icon-3/icon-social-16.jpg"/>
                                                </div>
                                                <div>
                                                    <div class="font-semibold color-green d-block">@lang('front.social-development-One Village One Company2')</div>
                                                    <div class="font-s-small">@lang('front.social-development-Development of business')</div>
                                                </div>
                                            </div>
                                            <div class="list-with-icon">
                                                <div class="list-with-icon--icon">
                                                    <img src="{{url('')}}/old-assets/frontend/images/icon-3/icon-social-17.jpg"/>
                                                </div>
                                                <div>
                                                    <div class="font-semibold color-green d-block">@lang('front.social-development-Micro Financing')</div>
                                                    <div class="font-s-small">@lang('front.social-development-Providing loan')</div>
                                                </div>
                                            </div>
                                            <div class="list-with-icon">
                                                <div class="list-with-icon--icon">
                                                    <img src="{{url('')}}/old-assets/frontend/images/icon-3/icon-social-18.jpg"/>
                                                </div>
                                                <div>
                                                    <div class="font-semibold color-green d-block">@lang('front.social-development-Fishery Facilities')</div>
                                                    <div class="font-s-small">@lang('front.social-development-Providing facilities')</div>
                                                </div>
                                            </div>
                                            <div class="list-with-icon">
                                                <div class="list-with-icon--icon">
                                                    <img src="{{url('')}}/old-assets/frontend/images/icon-3/icon-social-18.jpg"/>
                                                </div>
                                                <div>
                                                    <div class="font-semibold color-green d-block">@lang('front.social-development-Breeding Facilities')</div>
                                                    <div class="font-s-small">@lang('front.social-development-Providing facilities2')</div>
                                                </div>
                                            </div>
                                            <div class="list-with-icon">
                                                <div class="list-with-icon--icon">
                                                    <img src="{{url('')}}/old-assets/frontend/images/icon-3/icon-social-18.jpg"/>
                                                </div>
                                                <div>
                                                    <div class="font-semibold color-green d-block">@lang('front.social-development-Farming Facilities')</div>
                                                    <div class="font-s-small">@lang('front.social-development-Providing facilities3')</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <!-- Environmental Infrastructure and Sanitation -->
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h4 class="font-semibold d-block mb-3">@lang('front.social-development-Public and Enviromental Utilities')</h4>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="d-block w-100">
                                                    <div class="list-with-icon">
                                                        <div class="list-with-icon--icon">
                                                            <img src="{{url('')}}/old-assets/frontend/images/icon-3/icon-social-19.jpg"/>
                                                        </div>
                                                        <div>
                                                            <div class="font-semibold color-green d-block">@lang('front.social-development-Village Road')</div>
                                                            <div class="font-s-small">@lang('front.social-development-Construction4')</div>
                                                        </div>
                                                    </div>
                                                    <div class="list-with-icon">
                                                        <div class="list-with-icon--icon">
                                                            <img src="{{url('')}}/old-assets/frontend/images/icon-3/icon-social-20.jpg"/>
                                                        </div>
                                                        <div>
                                                            <div class="font-semibold color-green d-block">@lang('front.social-development-Street Lighting for Villages')</div>
                                                            <div class="font-s-small">@lang('front.social-development-Provision')</div>
                                                        </div>
                                                    </div>
                                                    <div class="list-with-icon">
                                                        <div class="list-with-icon--icon">
                                                            <img src="{{url('')}}/old-assets/frontend/images/icon-3/icon-social-21.jpg"/>
                                                        </div>
                                                        <div>
                                                            <div class="font-semibold color-green d-block">@lang('front.social-development-Semi Permanent Bridge')</div>
                                                            <div class="font-s-small">@lang('front.social-development-Construction5')</div>
                                                        </div>
                                                    </div>
                                                    <div class="list-with-icon">
                                                        <div class="list-with-icon--icon">
                                                            <img src="{{url('')}}/old-assets/frontend/images/icon-3/icon-social-22.jpg"/>
                                                        </div>
                                                        <div>
                                                            <div class="font-semibold color-green d-block">@lang('front.social-development-Public Toilet')</div>
                                                            <div class="font-s-small">@lang('front.social-development-Construction6')</div>
                                                        </div>
                                                    </div>
                                                    <div class="list-with-icon">
                                                        <div class="list-with-icon--icon">
                                                            <img src="{{url('')}}/old-assets/frontend/images/icon-3/icon-social-23.jpg"/>
                                                        </div>
                                                        <div>
                                                            <div class="font-semibold color-green d-block">@lang('front.social-development-Energy Efficient Lightning')</div>
                                                            <div class="font-s-small">@lang('front.social-development-Provision2')</div>
                                                        </div>
                                                    </div>
                                                    <div class="list-with-icon">
                                                        <div class="list-with-icon--icon">
                                                            <img src="{{url('')}}/old-assets/frontend/images/icon-3/icon-social-24.jpg"/>
                                                        </div>
                                                        <div>
                                                            <div class="font-semibold color-green d-block">@lang('front.social-development-Green Space')</div>
                                                            <div class="font-s-small">@lang('front.social-development-Construction7')</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="d-block w-100">
                                                    <div class="list-with-icon">
                                                        <div class="list-with-icon--icon">
                                                            <img src="{{url('')}}/old-assets/frontend/images/icon-3/icon-social-25.jpg"/>
                                                        </div>
                                                        <div>
                                                            <div class="font-semibold color-green d-block">@lang('front.social-development-Court')</div>
                                                            <div class="font-s-small">@lang('front.social-development-Construction8')</div>
                                                        </div>
                                                    </div>
                                                    <div class="list-with-icon">
                                                        <div class="list-with-icon--icon">
                                                            <img src="{{url('')}}/old-assets/frontend/images/icon-3/icon-social-26.jpg"/>
                                                        </div>
                                                        <div>
                                                            <div class="font-semibold color-green d-block">@lang('front.social-development-Rolling Road Barrier')</div>
                                                            <div class="font-s-small">@lang('front.social-development-Provision3')</div>
                                                        </div>
                                                    </div>
                                                    <div class="list-with-icon">
                                                        <div class="list-with-icon--icon">
                                                            <img src="{{url('')}}/old-assets/frontend/images/icon-3/icon-social-27.jpg"/>
                                                        </div>
                                                        <div>
                                                            <div class="font-semibold color-green d-block">@lang('front.social-development-Village Border Monument')</div>
                                                            <div class="font-s-small">@lang('front.social-development-Construction9')</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <br>
                                <!-- Social Program - 3 -->
                                <div class="row">
                                    <!-- Religion Related Program -->
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <h4 class="font-semibold d-block mb-3">@lang('front.social-development-Religious Program')</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="d-block w-100">
                                                    <div class="list-with-icon">
                                                        <div class="list-with-icon--icon">
                                                            <img src="{{url('')}}/old-assets/frontend/images/icon-3/icon-social-28.jpg"/>
                                                        </div>
                                                        <div>
                                                            <div class="font-semibold color-green d-block">@lang('front.social-development-House Prayer')</div>
                                                            <div class="font-s-small">@lang('front.social-development-Construction10 of house of Prayer')</div>
                                                        </div>
                                                    </div>
                                                    <div class="list-with-icon">
                                                        <div class="list-with-icon--icon">
                                                            <img src="{{url('')}}/old-assets/frontend/images/icon-3/icon-social-29.jpg"/>
                                                        </div>
                                                        <div>
                                                            <div class="font-semibold color-green d-block">@lang('front.social-development-Boarding Room for Pesantren')</div>
                                                            <div class="font-s-small">@lang('front.social-development-Construction11')</div>
                                                        </div>
                                                    </div>
                                                    <div class="list-with-icon">
                                                        <div class="list-with-icon--icon">
                                                            <img src="{{url('')}}/old-assets/frontend/images/icon-3/icon-social-30.jpg"/>
                                                        </div>
                                                        <div>
                                                            <div class="font-semibold color-green d-block">@lang('front.social-development-Maghrib For Reciting Quran')</div>
                                                            <div class="font-s-small">@lang('front.social-development-Activating')</div>
                                                        </div>
                                                    </div>
                                                    <div class="list-with-icon">
                                                        <div class="list-with-icon--icon">
                                                            <img src="{{url('')}}/old-assets/frontend/images/icon-3/icon-social-30.jpg"/>
                                                        </div>
                                                        <div>
                                                            <div class="font-semibold color-green d-block">@lang('front.social-development-One Village One Hafiz')</div>
                                                            <div class="font-s-small">@lang('front.social-development-Activating2')</div>
                                                        </div>
                                                    </div>
                                                    <div class="list-with-icon">
                                                        <div class="list-with-icon--icon">
                                                            <img src="{{url('')}}/old-assets/frontend/images/icon-3/icon-social-31.jpg"/>
                                                        </div>
                                                        <div>
                                                            <div class="font-semibold color-green d-block">@lang('front.social-development-Allowance for Ulama')</div>
                                                            <div class="font-s-small">@lang('front.social-development-Providing2')</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="d-block w-100">
                                                    <div class="list-with-icon">
                                                        <div class="list-with-icon--icon">
                                                            <img src="{{url('')}}/old-assets/frontend/images/icon-3/icon-social-31.jpg"/>
                                                        </div>
                                                        <div>
                                                            <div class="font-semibold color-green d-block">@lang('front.social-development-English for Ulama')</div>
                                                            <div class="font-s-small">@lang('front.social-development-Providing3')</div>
                                                        </div>
                                                    </div>
                                                    <div class="list-with-icon">
                                                        <div class="list-with-icon--icon">
                                                            <img src="{{url('')}}/old-assets/frontend/images/icon-3/icon-social-32.jpg"/>
                                                        </div>
                                                        <div>
                                                            <div class="font-semibold color-green d-block">@lang('front.social-development-Subuh Jamaah (Congregational Prayer at Dawn)')</div>
                                                            <div class="font-s-small">@lang('front.social-development-Activating3')</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <!-- Other Development Program -->
                                    <div class="col-md-4">
                                        <!-- Other Development Program -->
                                        <h4 class="font-semibold d-block mb-3">@lang('front.social-development-Other Development Program')</h4>
                                        <div class="d-block w-100">
                                            <div class="list-with-icon">
                                                <div class="list-with-icon--icon">
                                                    <img src="{{url('')}}/old-assets/frontend/images/icon-3/icon-social-33.jpg"/>
                                                </div>
                                                <div>
                                                    <div class="font-semibold color-green d-block">@lang('front.social-development-Rural Multipurpose Car')</div>
                                                    <div class="font-s-small">@lang('front.social-development-Provision5')</div>
                                                </div>
                                            </div>
                                            <div class="list-with-icon">
                                                <div class="list-with-icon--icon">
                                                    <img src="{{url('')}}/old-assets/frontend/images/icon-3/icon-social-34.jpg"/>
                                                </div>
                                                <div>
                                                    <div class="font-semibold color-green d-block">@lang('front.social-development-Internet Goes To Villages')</div>
                                                    <div class="font-s-small">@lang('front.social-development-Provision6')</div>
                                                </div>
                                            </div>
                                            <div class="list-with-icon">
                                                <div class="list-with-icon--icon">
                                                    <img src="{{url('')}}/old-assets/frontend/images/icon-3/icon-social-35.jpg"/>
                                                </div>
                                                <div>
                                                    <div class="font-semibold color-green d-block">@lang('front.social-development-Tour Bus')</div>
                                                    <div class="font-s-small">@lang('front.social-development-Provision of tour buses')</div>
                                                </div>
                                            </div>
                                            <div class="list-with-icon">
                                                <div class="list-with-icon--icon">
                                                    <img src="{{url('')}}/old-assets/frontend/images/icon-3/icon-social-36.jpg"/>
                                                </div>
                                                <div>
                                                    <div class="font-semibold color-green d-block">@lang('front.social-development-Bus for Labours')</div>
                                                    <div class="font-s-small">@lang('front.social-development-Provision7')</div>
                                                </div>
                                            </div>
                                            <div class="list-with-icon">
                                                <div class="list-with-icon--icon">
                                                    <img src="{{url('')}}/old-assets/frontend/images/icon-3/icon-social-37.jpg"/>
                                                </div>
                                                <div>
                                                    <div class="font-semibold color-green d-block">@lang('front.social-development-Digital Village')</div>
                                                    <div class="font-s-small">@lang('front.social-development-Implementation')</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
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