@extends('layouts.frontend')

@section('content')
    <div class="jumbotron jumbotron-fluid nav-margin" style="background-image:
            /* top, transparent red */
            linear-gradient(151deg,
            rgba(52,122,74, 0.60),
            rgba(253,196,38, 0.10)
            ),
            /* your image */
            url('{{url('')}}/old-assets/frontend/images/front-hero-bg-3.png'); background-size: cover; background-position: center top; background-repeat: no-repeat; background-attachment: fixed; height: 500px">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-lg-6 text-white">
                    <h1 class="display-2 text-warning">@lang('front.why-should-invest-Why')</h1>
                    <h3 class="display-4 text-white">@lang('front.why-should-invest-Features')</h3>
                    <div class="line-style mb-4">
                        <div class="line-style-3"></div>
                        <div class="line-style-2"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mt--6">
                    <div class="card-body">
                        <div class="section section-large">
                            <div class="container">
                                <img src="{{url('')}}/img/frontend/Why Should invest_page-0001.jpg" class="w-100 d-block mb-4">
                                <img src="{{url('')}}/img/frontend/Why Should invest_page-0002.jpg" class="w-100 d-block mb-4">
                                <img src="{{url('')}}/img/frontend/Why Should invest_page-0003.jpg" class="w-100 d-block mb-4">
                                <img src="{{url('')}}/img/frontend/Why Should invest_page-0004.jpg" class="w-100 d-block mb-4">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--                        <div class="section">--}}
    {{--                            <div class="container-large">--}}
    {{--                                <div class="row">--}}
    {{--                                    <div class="col-md-4">--}}
    {{--                                        <div class="card mb-3 card-lift--hover shadow">--}}
    {{--                                            <div class="card-body">--}}
    {{--                                                <div class="display-2 text-primary">16.2%</div>--}}
    {{--                                                <div class="font-s-medium">@lang('front.why-should-invest-the highest contribution')--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="card mb-3 card-lift--hover shadow">--}}
    {{--                                            <div class="card-body">--}}
    {{--                                                <div class="display-2 text-primary">19,64%</div>--}}
    {{--                                                <div class="font-s-medium">@lang('front.why-should-invest-national export')--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}

    {{--                                    </div>--}}
    {{--                                    <div class="col-md-4">--}}
    {{--                                        <div class="card mb-3 card-lift--hover shadow">--}}
    {{--                                            <div class="card-body">--}}
    {{--                                                <div class="display-2 text-primary">20,56</div>--}}
    {{--                                                <div class="font-s-medium">@lang('front.why-should-invest-million')--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="card mb-3 card-lift--hover shadow">--}}
    {{--                                            <div class="card-body">--}}
    {{--                                                <div class="display-2 text-primary">18,79</div>--}}
    {{--                                                <div class="font-s-medium">@lang('front.why-should-invest-productive')--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="col-md-4">--}}

    {{--                                        <div class="card mb-3 card-lift--hover shadow">--}}
    {{--                                            <div class="card-body">--}}
    {{--                                                <div class="display-2 text-primary">24,4%</div>--}}
    {{--                                                <div class="font-s-medium">@lang('front.why-should-invest-National GDP')--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="card mb-3 card-lift--hover shadow">--}}
    {{--                                            <div class="card-body">--}}
    {{--                                                @lang('front.why-should-invest-5 airports')--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="col-md-12">--}}
    {{--                                        Source: Bank Indonesia, 2018--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <hr>--}}
    {{--                        <div class="section section-large">--}}
    {{--                            <div class="container-large">--}}
    {{--                                <div class="row col-spacing-mobile">--}}
    {{--                                    <div class="col-md-3">--}}
    {{--                                        <div class="mb-4 pr-4">--}}
    {{--                                            <h1>@lang('front.why-should-invest-Investment Realization')</h1>--}}
    {{--                                            <div class="line-style mb-4">--}}
    {{--                                                <div class="line-style-3"></div>--}}
    {{--                                                <div class="line-style-2"></div>--}}
    {{--                                            </div>--}}
    {{--                                            <p class="font-s-medium">@lang('front.why-should-invest-National Investment')</p>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="col-md-3">--}}
    {{--                                        <div class="mb-4 pr-4">--}}
    {{--                                            <h1>@lang('front.why-should-invest-Market Potentials')</h1>--}}
    {{--                                            <div class="line-style mb-4">--}}
    {{--                                                <div class="line-style-3"></div>--}}
    {{--                                                <div class="line-style-2"></div>--}}
    {{--                                            </div>--}}
    {{--                                            <p class="font-s-medium">@lang('front.why-should-invest-As the mosts')</p>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="col-md-3">--}}
    {{--                                        <div class="mb-4 pr-4">--}}
    {{--                                            <h1>@lang('front.why-should-invest-Center of Excellence')</h1>--}}
    {{--                                            <div class="line-style mb-4">--}}
    {{--                                                <div class="line-style-3"></div>--}}
    {{--                                                <div class="line-style-2"></div>--}}
    {{--                                            </div>--}}
    {{--                                            <p>@lang('front.why-should-invest-West Java')</p>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="col-md-3">--}}
    {{--                                        <img src="{{url('')}}/old-assets/frontend/images/logo-univ.png"--}}
    {{--                                             class="block w-75 mb-4"/>--}}
    {{--                                        <div>@lang('front.why-should-invest-Best universities')</div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="section section-small">--}}
    {{--                            <div class="container-large">--}}
    {{--                                <img src="{{url('')}}/img/why-should-investment.png" class="w-100 d-block mb-4">--}}
    {{--                            </div>--}}
    {{--                        </div>--}}


    {{--                        <div class="row">--}}
    {{--                            <div class="col-4">--}}
    {{--                                <h1>@lang('front.why-should-invest-Indonesia is Fully')</h1>--}}
    {{--                                <div class="line-style mb-4">--}}
    {{--                                    <div class="line-style-3"></div>--}}
    {{--                                    <div class="line-style-2"></div>--}}
    {{--                                </div>--}}
    {{--                                <img src="{{url('')}}/img/image2.png" class="w-100 h-auto" alt="">--}}
    {{--                            </div>--}}
    {{--                            <div class="col-8">--}}
    {{--                                <h1>@lang('front.why-should-invest-The World Bank')</h1>--}}
    {{--                                <div class="line-style mb-4">--}}
    {{--                                    <div class="line-style-3"></div>--}}
    {{--                                    <div class="line-style-2"></div>--}}
    {{--                                </div>--}}
    {{--                                <div class="chart">--}}
    {{--                                    <!-- Chart wrapper -->--}}
    {{--                                    <canvas id="myChart" class="chart-canvas"></canvas>--}}
    {{--                                </div>--}}
    {{--                                <p>--}}
    {{--                                    @lang('front.why-should-invest-Indonesia is now ranked')</p>--}}
    {{--                                <ul>--}}
    {{--                                    <li>@lang('front.why-should-invest-The easiness')</li>--}}
    {{--                                    <li>@lang('front.why-should-invest-Registering property')</li>--}}
    {{--                                    <li>@lang('front.why-should-invest-Attaining credit')</li>--}}
    {{--                                </ul>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

    @include('layouts.about-west-java')

@stop

@section('top-content')
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"/>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"/>

    <script src="{{url('')}}/vendor/chart.js/dist/Chart.min.js"></script>
@stop

@section('bottom-content')
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.counter').slick({
                infinite: false,
                slidesToShow: 4,
                slidesToScroll: 1
            });
        });
    </script>

    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: ['2011', '2013', '2015', '2017', '2019'],
                datasets: [{
                    label: 'Indonesia',
                    backgroundColor: 'rgb(255, 99, 132,0.1)',
                    borderColor: 'rgb(255, 99, 132)',
                    data: [13, 17, 15, 18, 20]
                },
                    {
                        label: 'China',
                        backgroundColor: 'rgb(37,178,76,0.1)',
                        borderColor: 'rgb(37,178,76)',
                        data: [23, 20, 25, 27, 34]
                    },
                    {
                        label: 'Vietnam',
                        backgroundColor: 'rgb(143,198,73,0.1)',
                        borderColor: 'rgb(143,198,73)',
                        data: [22, 20, 26, 25, 28]
                    },
                    {
                        label: 'India',
                        backgroundColor: 'rgb(0,135,201,0.1)',
                        borderColor: 'rgb(0,135,201)',
                        data: [2, 4, 3, 4, 18]
                    },
                    {
                        label: 'Brazil',
                        backgroundColor: 'rgb(254,195,42,0.1)',
                        borderColor: 'rgb(254,195,42)',
                        data: [8, 9, 11, 8, 11]
                    },
                    {
                        label: 'Phillipines',
                        backgroundColor: 'rgb(254,240,21,0.1)',
                        borderColor: 'rgb(254,240,21)',
                        data: [8, 8, 16, 14, 7]
                    }
                ]
            },

            // Configuration options go here
            options: {
                legend:{
                    display:true,
                }
            }
        });
    </script>
@stop
