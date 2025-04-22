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
            <form action="{{route('searchfintech')}}">
                <div class="row">
                    <div class="col-lg-12 text-white">
                        <h1 class="display-3 text-white">Fintech</h1>
                        <div class="line-style mb-4">
                            <div class="line-style-3"></div>
                            <div class="line-style-2"></div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group w-100">
                            <label for="" class="text-white">Search Fintech</label>
                            <input type="text"
                                   class="form-control" name="fintech" value="{{ request('fintech') }}" id="" aria-describedby="helpId" placeholder="">
                        </div>
                    </div>
                    <div class="col-lg-2 pt-4">
                        <button type="submit" class="btn btn-primary mt-2">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @foreach($fintech as $s)
                <div class="col-lg-4">
                    <div class="card">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <!-- Avatar -->
                                    <a href="#" class="avatar avatar-xl rounded-circle">
                                        <img alt="Image placeholder"
                                             src="@if(empty($s->logo_fintech)) {{url('')}}/img/fintechlogo.png @else {{url('')}}/img/fintech/thumbnail/{{$s->logo_fintech}} @endif">
                                    </a>
                                </div>
                                <div class="col ml--2">
                                        <h3 href="#" class="font-semibold mb-1 mt-1">{{$s->nama_fintech}}</h3>
                                        <div class="d-block font-s-small"><b>{{$s->perusahaan}}</b></div>
                                        <div class="d-block font-s-small"><a href="{{$s->website}}" target="_blank"><i>{{$s->website}}</i></a></div>
                                        <hr class="mt-2 mb-2">
                                        <div class="d-block font-s-small">Kode Register: {{$s->register}}</div>
                                        <div class="d-block font-s-small">Tanggal register: {{$s->tanggal_reg}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row mt-4 p-4">
            <div class="col-lg-12 d-flex justify-content-center">
                {{$fintech->appends(Request::except('page'))->links()}}
            </div>
        </div>
    </div>

    @include('layouts.invest-west-java')

@stop
