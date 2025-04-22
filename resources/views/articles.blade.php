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
                        <h1 class="display-3 text-white">Articles</h1>
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
            @foreach($artikel as $a)
                <div class="col-lg-4">
                    <div class="card shadow-lg card-lift--hover">
                        <div class="row no-gutters">
                            <div class="col-lg-12">
                                <span class="badge badge-pill badge-success position-absolute" style="left: 3%; top: 3%">{{date('d-m-Y H:i:s', strtotime($a->created_at))}}</span>
                                <a href="{{route('articles.show',['slug'=>$a->slug])}}">
                                    <img class="card-img-top"
                                         src="@if ($a->users_id === 0)
                                         {{$a->image}}
                                         @else
                                         {{url('')}}/img/artikel/thumbnail/{{$a->image}}
                                         @endif"
                                         style="height: 260px; object-fit: cover" alt="">
                                </a>
                                <div class="card-body">
                                    <a href="{{route('articles.show',['slug'=>$a->slug])}}"><h5 class="text-primary">{{$a->judul}}</h5></a>
                                    <p class="text-secondary"><small>Ekonomi</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row mt-4 p-4">
            <div class="col-lg-12 d-flex justify-content-center">
                {{$artikel->links()}}
            </div>
        </div>
    </div>

    @include('layouts.invest-west-java')

@stop