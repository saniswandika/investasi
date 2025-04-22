@extends('layouts.frontend')

@section('content')

    <div class="jumbotron jumbotron-fluid nav-margin" style="background-image:
            /* top, transparent red */
            linear-gradient(151deg,
            rgba(0,167,229, 0.95),
            rgba(253,196,38, 0.40)
            ),
            /* your image */
            url('@if ($artikel['name'] === 'Berita'){{$artikel['image']}}@else{{url('')}}/img/artikel/{{$artikel['image']}}@endif'); background-size: cover; background-position: center top; background-repeat: no-repeat; background-attachment: fixed">
        <div class="container">
            <form action="#">
                <div class="row">
                    <div class="col-lg-12 text-white">
                        <h1 class="display-3 text-white">{{$artikel['judul']}}</h1>
                        <p class="mb-0">Tanggal Publish: {{date('d-m-Y H:i:s', strtotime($artikel['created_at']))}}</p>
                        <p>Oleh: {{$artikel['name']}}</p>
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
                        <a class="breadcrumb-item" href="{{route('articles.index')}}">Articles</a>
                        <span class="breadcrumb-item active">{{$artikel['judul']}}</span>
                    </nav>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                {!! $artikel['konten'] !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.invest-west-java')

@stop