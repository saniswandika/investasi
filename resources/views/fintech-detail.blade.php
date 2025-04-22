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
                    <div class="row">
                        <div class="col-3">
                            <img src="{{url('')}}/users/thumbnail/{{$company->photo}}" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 140px;">
                        </div>
                        <div class="col-9">
                            <h1 class="display-3 text-white">{{$company->name}}</h1>
                            <p><small>{{$company->alamat}}</small></p>
                            <div class="line-style mb-2">
                                <div class="line-style-1"></div>
                                <div class="line-style-2"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="row text-white mt-4">
                        <div class="col-6">
                            <p class="mb-1">City: {{$company->company_city}}</p>
                            <p class="mb-1">Phone Number: {{$company->telp}}</p>
                            <p class="mb-1">Email: {{$company->email}}</p>
                        </div>
                        <div class="col-6">
                            <p class="mb-1">Company Field: {{$company->company_field}}</p>
                            <p class="mb-1">Company Sector: {{$company->company_sector}}</p>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="mt-4" id="share"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt--6">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <nav class="breadcrumb">
                        <a class="breadcrumb-item" href="{{route('front.home')}}">Home</a>
                        <a class="breadcrumb-item" href="{{route('front.companies')}}">Companies</a>
                        <span class="breadcrumb-item active">{{$company->name}}</span>
                    </nav>
<div class="card-body">
    <div class="row">
        <div class="col-lg-3 mb-4">
            <div class="card h-100 card-lift--hover shadow border-0">
                <a href="#"><img class="card-img-top card-img-sm" src="{{url('img/view-8.jpg')}}" alt=""></a>
                <div class="card-body">
                    <a href="#"><h4 class="h3 text-success text-uppercase">Produk 1</h4></a>
                    <div class="line-style">
                        <div class="line-style-1"></div>
                        <div class="line-style-2"></div>
                    </div>
                    <p class="description mt-3 mb-0 pb-0">Price:</p>
                    <p>IDR. 20.000</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 mb-4">
            <div class="card h-100 card-lift--hover shadow border-0">
                <a href="#"><img class="card-img-top card-img-sm" src="{{url('img/view-8.jpg')}}" alt=""></a>
                <div class="card-body">
                    <a href="#"><h4 class="h3 text-success text-uppercase">Produk 1</h4></a>
                    <div class="line-style">
                        <div class="line-style-1"></div>
                        <div class="line-style-2"></div>
                    </div>
                    <p class="description mt-3 mb-0 pb-0">Price:</p>
                    <p>IDR. 20.000</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 mb-4">
            <div class="card h-100 card-lift--hover shadow border-0">
                <a href="#"><img class="card-img-top card-img-sm" src="{{url('img/view-8.jpg')}}" alt=""></a>
                <div class="card-body">
                    <a href="#"><h4 class="h3 text-success text-uppercase">Produk 1</h4></a>
                    <div class="line-style">
                        <div class="line-style-1"></div>
                        <div class="line-style-2"></div>
                    </div>
                    <p class="description mt-3 mb-0 pb-0">Price:</p>
                    <p>IDR. 20.000</p>
                </div>
            </div>
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

    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.css" />

    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-flat.css" />

    <style>
        .jssocials-share-link { border-radius: 50%; }

    </style>
@stop

@section('bottom-content')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.min.js"></script>


    <script>
        $("#share").jsSocials({
            showLabel: false,
            showCount: false,
            shares: ["email", "twitter", "facebook", "linkedin", "whatsapp"]
        });
    </script>
@stop
