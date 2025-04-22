@extends('layouts.frontend')

@section('content')

    <div class="jumbotron jumbotron-fluid nav-margin" style="background-image:
    /* top, transparent red */
    linear-gradient(151deg,
      rgba(0,167,229, 0.95),
      rgba(253,196,38, 0.40)
    ),
    /* your image */
    url('https://images.unsplash.com/photo-1584210753325-905abf601909?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1043&q=80'); background-size: cover; background-position: center top; background-repeat: no-repeat; background-attachment: fixed">
        <div class="container">
            <form action="#">
            <div class="row">
                <div class="col-lg-12 text-white">
                    <h1 class="display-3 text-white">Publication</h1>
                    <div class="line-style mb-4">
                        <div class="line-style-3"></div>
                        <div class="line-style-2"></div>
                    </div>
                </div>

            </div>
            </form>
        </div>
    </div>

    <div class="container mt--6">
        <div class="row">
            @foreach($publikasi as $p)
            <div class="col-lg-3 mb-4">
                <div class="card h-100 card-lift--hover shadow border-0">
                    <div class="card-body">
                        <a href="#"><h4 class="h3 text-success text-uppercase">{{Str::limit($p->judul, 42)}}</h4></a>
                        <div class="line-style">
                            <div class="line-style-1"></div>
                            <div class="line-style-2"></div>
                        </div>
                        <p class="description mt-3 mb-0 pb-0">{{$p->created_at}}</p>
                        <p>By : {{$p->name}}</p>
                        <a href="{{route('publication.show',['slug'=>$p->slug])}}" class="button-text">VIEW PUBLICATION</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row mt-4 p-4">
            <div class="col-lg-12 d-flex justify-content-center">
                {{$publikasi->appends(Request::except('page'))->links()}}
            </div>
        </div>
    </div>

    @include('layouts.invest-west-java')

@stop
