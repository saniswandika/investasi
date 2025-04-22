@extends('layouts.frontend')

@section('content')

    <div class="jumbotron jumbotron-fluid nav-margin" style="background-image:
    /* top, transparent red */
    linear-gradient(151deg,
      rgba(0,167,229, 0.95),
      rgba(253,196,38, 0.40)
    ),
    /* your image */
    url('#'); background-size: cover; background-position: center top; background-repeat: no-repeat; background-attachment: fixed">
        <div class="container">
            <form action="#">
                <div class="row">
                    <div class="col-lg-12 text-white">
                        <h1 class="display-3 text-white">{{$publikasi->judul}}</h1>
                        <p class="mb-0">Tanggal Publish: {{$publikasi->created_at}}</p>
                        <p>Oleh: {{$publikasi->name}}</p>
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
            <div class="col-lg-12">

                <div class="card">
                    <nav class="breadcrumb mb-0">
                        <a class="breadcrumb-item" href="{{route('front.home')}}">Home</a>
                        <a class="breadcrumb-item" href="{{route('publication.index')}}">Publication</a>
                        <span class="breadcrumb-item active">{{$publikasi->judul}}</span>
                    </nav>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                {!! $publikasi->deskripsi !!}
                                <hr>
                                <a class="btn btn-primary mb-3" href="{{url('')}}/pub/file/{{$publikasi->file}}" target="_blank">Download File</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.invest-west-java')

@stop
