@extends('layouts.frontend')

@section('content')

    <div class="jumbotron jumbotron-fluid nav-margin mb-0" style="background-image:
    /* top, transparent red */
    linear-gradient(151deg,
      rgba(0,167,229, 0.95),
      rgba(253,196,38, 0.40)
    ),
    /* your image */
    url('https://images.unsplash.com/photo-1599520556865-74c64872ed74?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1648&q=80'); background-size: cover; background-position: center top; background-repeat: no-repeat; background-attachment: fixed">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-white">
                    <div class="container-large">
                        <div class="header-profile">
                            <div class="user-avatar" style="background-image: url('@if (empty(Auth::user()->photo)) {{url('https://ui-avatars.com/api/?name=')}}{{Auth::user()->name}} @else {{url('')}}/users/thumbnail/{{Auth::user()->photo}} @endif')"></div>
                            <div class="user-detail">
                                <h3 class="user-name">{{Auth::user()->name}}</h3>
                                <div class="user-location mb-2">{{Auth::user()->alamat}}</div>
{{--                                <a href="{{ route('logout') }}" class="button button--xsmall button--white">Sign Out</a>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-navigation--wrapper shadow">
        <div class="container">
            <div class="tab-with-action">
                <ul class="tab-navigation">
                    <li class="tab-navigation--list active">
                        <a href="{{route('member.index')}}">My Product</a>
                    </li>
                    <li class="tab-navigation--list">
                        <a href="{{route('member.manage')}}">Manage Account</a>
                    </li>
                </ul>
                <div class="tab-action">
                    <a href="{{route('member.create')}}" class="btn button--small btn-primary">Add Product</a>
                </div>
            </div>
        </div>
    </div>
        <div class="container">
            <div class="section section-small">
                <div class="row">
                    @foreach($product as $p)
                        <div class="col-lg-3 mb-4">
                            <div class="card h-100 card-lift--hover shadow border-0">
                               <img class="card-img-top card-img-sm" src="{{url('')}}/img/product/thumbnail/{{$p->image}}" alt="">
                                <div class="card-body">
                                    <h4 class="h3 text-success text-uppercase">{{$p->name}}</h4>
                                    <div class="line-style">
                                        <div class="line-style-1"></div>
                                        <div class="line-style-2"></div>
                                    </div>
                                    <p class="description mt-3 mb-0 pb-0">Price:</p>
                                    <p>IDR. {{ number_format($p->price,'0',',','.') }}</p>
                                </div>
                                <div class="card-footer">
                                    <a href="{{route('member.show',['id'=>$p->id])}}" class="button-text mr-2">VIEW</a>
                                    <a href="{{route('member.destroy',['id'=>$p->id])}}" class="button-text mr-2" onclick="return confirm('Are you sure you want to delete this item?');">DELETE</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="section">



    </div>

    @include('layouts.invest-west-java')

@stop
