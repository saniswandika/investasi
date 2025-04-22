@extends('layouts.frontend')

@section('content')

    <div class="jumbotron jumbotron-fluid nav-margin" style="background-image:
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
                    <h1 class="display-3 text-white">@lang('front.vision&mission')</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-xlarge">
        <div class="container-large">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-5 mb-4">
                            <h1 class="display-2">
                                @lang('front.vision')
                            </h1>
                            <div class="line-style mb-4">
                                <div class="line-style-3"></div>
                                <div class="line-style-2"></div>
                            </div>
                            <h2 class="font-semibold">
                                @lang('front.vision-subject')
                            </h2>
                        </div>
                        <div class="col-md-7 mb-4">
                            <h1 class="display-2">
                                @lang('front.mission')
                            </h1>
                            <div class="line-style mb-4">
                                <div class="line-style-3"></div>
                                <div class="line-style-2"></div>
                            </div>
                            <div class="card card-lift--hover shadow border-0 mb-3">
                                <div class="p-3">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 bg-green p-2 mr-3 rounded">
                                            <h2 class="mb-0 color-white">01</h2>
                                        </div>
                                        <div>
                                            <h3 class="mb-0">@lang('front.vision-mission-forming')</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-lift--hover shadow border-0 mb-3">
                                <div class="p-3">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 bg-green p-2 mr-3 rounded">
                                            <h2 class="mb-0 color-white">02</h2>
                                        </div>
                                        <div>
                                            <h3 class="mb-0">@lang('front.vision-mission-Developing')</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-lift--hover shadow border-0 mb-3">
                                <div class="p-3">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 bg-green p-2 mr-3 rounded">
                                            <h2 class="mb-0 color-white">03</h2>
                                        </div>
                                        <div>
                                            <h3 class="mb-0">@lang('front.vision-mission-Accelerating')</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-lift--hover shadow border-0 mb-3">
                                <div class="p-3">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 bg-green p-2 mr-3 rounded">
                                            <h2 class="mb-0 color-white">04</h2>
                                        </div>
                                        <div>
                                            <h3 class="mb-0">@lang('front.vision-mission-Enhancing')</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-lift--hover shadow border-0 mb-3">
                                <div class="p-3">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 bg-green p-2 mr-3 rounded">
                                            <h2 class="mb-0 color-white">05</h2>
                                        </div>
                                        <div>
                                            <h3 class="mb-0">@lang('front.vision-mission-Accomplishing')</h3>
                                        </div>
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