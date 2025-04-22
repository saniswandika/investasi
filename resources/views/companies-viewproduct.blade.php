@extends('layouts.frontend')

@section('content')

    <div class="section section-xlarge">
        <div class="container-large">
            <div class="d-flex align-items-start">
                <div class="detail-content--left flex-shrink-0y">
                    <div class="user-detail text-center pr-5">
                        <div class="user-avatar shadow" style="background-image: url('@if (empty($product->photo)) {{url('img/default-image.png')}} @else {{url('')}}/users/thumbnail/{{$product->photo}} @endif');"></div>
                        <div class="d-block mb-3">
                            <div class="font-semibold">{{$product->name}}</div>
                            <div class="font-s-small">{{$product->alamat}}</div>
                        </div>
                        <a href="{{route('front.companiesshow',['slug'=>$product->slug])}}" class="button button--small button--primary">PROFILE VISIT</a>
                    </div>
                </div>
                <div class="detail-content--right flex-shrink-0">
                    <div>
                        <h1 class="font-semibold mb-4 d-block">{{$product->productname}}</h1>
                        <div class="d-flex align-items-center justify-content-between mb-5">
                            <div>
                                <p class="block pr-5 mb-0 font-s-medium">{{$product->mini_desc}}</p>
                            </div>
                            <div>
                                <div class="d-flex align-items-center justify-content-end">
                                    <div><small>share to: </small><div id="share"></div></div>
                                </div>
                            </div>
                        </div>
                        <div class="gallery-photos shadow-sm">
                            <div class="gallery-photos--item" style="background-image: url('{{url('')}}/img/product/thumbnail/{{$product->image}}');"></div>

                        </div>
                        <div class="row pt-5">
                            <div class="col-md-4">
                                <div class="d-block mb-4">
                                    <div class="font-s-small mb-2">Price</div>
                                    <div class="font-semibold ">Rp. {{number_format(($product->price), 0, ",", ".")}}</div>
                                </div>
                                <div class="d-block mb-4">
                                    <div class="font-s-small mb-2">Category</div>
                                    <div class="font-semibold ">{{$product->category}}</div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="d-block mb-4">
                                    <div class="font-s-small mb-2">Location</div>
                                    <div class="font-semibold mb-2">{{$product->location}}</div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="button" class="button button--primary button-block">GET CONTACT</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="push-1">
                    {{$product->desc}}
                </div>
            </div>
        </div>
    </div>
    <div class="section border-top">
        <div class="container-large">
            <div class="section-header">
                <div class="section-header--inner d-flex h-100 align-items-center justify-content-between">
                    <div class="section-header--title">
                        More Products
                    </div>
                    <div class="section-header--action">
                        <a href="/member" class="button-text">SEE MORE</a>
                    </div>
                </div>
            </div>
            <div class="card-group-custom card-group-shadow card-group-25 card-group-vertical">
                @foreach($products as $p)
                <div class="card-item">
                    <div class="card-item--inner card-item--listing">
                        <div class="card-item--listing-image" style="background-image: url('@if (empty($p->image)) {{url('img/default-image.png')}} @else {{url('')}}/img/product/thumbnail/{{$p->image}} @endif')"></div>
                        <div class="listing-status listing-status-2"></div>
                        <div class="card-item--listing-content">
                            <div class="flex-1">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="font-s-small text-muted mb-1 flex-shrink-0">{{$p->category}}</div>
                                </div>

                                <h1>{{$p->name}}</h1>
                            </div>
                            <div>
                                <div class="block mb-3">
                                    <div class="font-s-small text-muted mb-1">Product Value</div>
                                    <div class="font-semibold">Rp. {{number_format(($p->price), 0, ",", ".")}}</div>
                                </div>
                                <a href="{{route('companyproduct',['id'=>$p->id])}}" class="button-text mb-1">VIEW PRODUCT</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    @include('layouts.invest-west-java')

@stop
@section('bottom-content')
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.css" />

    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-flat.css" />

    <!--Javascript-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.min.js"></script>

    <script>
        $("#share").jsSocials({
            showLabel: false,
            showCount: false,
            shares: ["twitter", "facebook", "linkedin", "pinterest", "whatsapp"]
        });
    </script>
@stop
