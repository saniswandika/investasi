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
            @foreach($search as $s)
            <div class="col-lg-4">
                <div class="card">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <!-- Avatar -->
                                <a href="{{route('front.fintech-detail',['slug'=>$s->slug])}}" class="avatar avatar-xl rounded-circle">
                                    <img alt="Image placeholder"
                                         src="{{url('')}}/img/fintech/thumbnail/{{$s->logo_fintech}}">
                                </a>
                            </div>
                            <div class="col ml--2">
                                <h4 class="mb-0">
                                    <a href="{{route('front.fintech-detail',['slug'=>$s->slug])}}">{{$s->nama_fintech}}</a>
                                </h4>
                                <small class="text-muted mb-0">{{$s->lokasi_fintech}}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row mt-4 p-4">
            <div class="col-lg-12 d-flex justify-content-center">
                {{$search->appends(Request::except('page'))->links()}}
            </div>
        </div>
    </div>

    @include('layouts.invest-west-java')

@stop
