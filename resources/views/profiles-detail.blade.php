@extends('layouts.frontend')

@section('content')

    <div class="jumbotron jumbotron-fluid nav-margin" style="background-image:
    /* top, transparent red */
    linear-gradient(151deg,
      rgba(0,167,229, 0.95),
      rgba(253,196,38, 0.40)
    ),
    /* your image */
    url('https://cdn-image.bisnis.com/posts/2019/12/16/1181925/rk-uea.jpg'); background-size: cover; background-position: center top; background-repeat: no-repeat; background-attachment: fixed">
        <div class="container">
            <form action="#">
                <div class="row">
                    <div class="col-lg-12 text-white">
                        <p class="lead text-white mb-0">@lang('front.profiles-West java')</p>
                        <h1 class="display-2 text-white">{{$profile->name}}</h1>
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
                        <a class="breadcrumb-item" href="{{route('profiles.index')}}">Profiles</a>
                        <span class="breadcrumb-item active">{{$profile->name}}</span>
                    </nav>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 mb-4">
                                @lang('front.profiles-Due')
                            </div>

                            <div class="col-lg-3 mb-3">
                                <!--* Card header *-->
                                <!--* Card body *-->
                                <!--* Card init *-->
                                <div class="card h-100">
                                    <!-- Card header -->
                                    <div class="card-header">
                                        <!-- Title -->
                                        <h5 class="h3 mb-0">@lang('front.profile-Jumlah Penyerapan Kerja')</h5>
                                    </div>
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div>
                                            <!-- Chart wrapper -->
                                            <canvas id="chart-pie" class="chart-canvas" height="300px"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 mb-3">
                                <!--* Card header *-->
                                <!--* Card body *-->
                                <!--* Card init *-->
                                <div class="card h-100">
                                    <!-- Card header -->
                                    <div class="card-header">
                                        <!-- Title -->
                                        <h5 class="h3 mb-0">@lang('front.profile-Presentasi Tenaga Kerja')</h5>
                                    </div>
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div>
                                            <!-- Chart wrapper -->
                                            <canvas id="chart-pie2" class="chart-canvas" height="300px"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 mb-3">
                                <!--* Card header *-->
                                <!--* Card body *-->
                                <!--* Card init *-->
                                <div class="card h-100">
                                    <!-- Card header -->
                                    <div class="card-header">
                                        <!-- Title -->
                                        <h5 class="h3 mb-0">@lang('front.profile-Data Jenis Perusahaan')</h5>
                                    </div>
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div>
                                            <!-- Chart wrapper -->
                                            <canvas id="chart-bar" class="chart-canvas" height="300px"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 mb-3">
                                <!--* Card header *-->
                                <!--* Card body *-->
                                <!--* Card init *-->
                                <div class="card h-100">
                                    <!-- Card header -->
                                    <div class="card-header">
                                        <!-- Title -->
                                        <h5 class="h3 mb-0">@lang('front.profile-klasifikasi saham')</h5>
                                    </div>
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div>
                                            <!-- Chart wrapper -->
                                            <canvas id="chart-bar2" class="chart-canvas" height="300px"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 mb-3">
                                <!--* Card header *-->
                                <!--* Card body *-->
                                <!--* Card init *-->
                                <div class="card h-100">
                                    <!-- Card header -->
                                    <div class="card-header">
                                        <!-- Title -->
                                        <h5 class="h3 mb-0">@lang('front.profile-Top 3 Daerah')</h5>
                                    </div>
                                    <!-- Card body -->
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">@lang('front.profile-Pertanian')
                                        </li>
                                        <li class="list-group-item">@lang('front.profile-Kehutanan')</li>
                                        <li class="list-group-item">@lang('front.profile-Perikanan')</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-8">
                                <div class="card card-pricing bg-gradient-success border-0 text-center mb-4">
                                    <div class="card-body px-lg-7">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <h3 class="text-warning">@lang('front.profiles/kab-bandung-Jumlah Kesempatan Kerja')</h3>
                                                <h1 class="text-white">100</h1>
                                            </div>
                                            <div class="col-lg-4">
                                                <h3 class="text-warning">@lang('front.profiles/kab-bandung-Total Modal Ditempatkan')</h3>
                                                <h1 class="text-white">220 juta</h1>
                                            </div>
                                            <div class="col-lg-4">
                                                <h3 class="text-warning">@lang('front.profiles/kab-bandung-Luas Tanah')</h3>
                                                <h1 class="text-white">20 ha</h1>
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
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header">
                        @lang('front.profiles/kab-bandung-Profil')
                    </div>
                    <div class="card-body">
                        <div class="section detail-daerah-wrapper">
                            <div class="container-large">
                                <img
                                        src="{{url('')}}/img/profile/{{$profile->peta}}"
                                        class="float-right" width="360" style="padding:10px">
                                {!! $profile->desc !!}
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('layouts.invest-west-java')

@stop

@section('bottom-content')
    <script src="{{url('')}}/vendor/chart.js/dist/Chart.min.js"></script>

    <script>
        var ctx = document.getElementById('chart-pie').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ["@lang('front.profile-Perempuan')", "@lang('front.profile-Laki-laki')"],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19],
                    backgroundColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                legend: {
                    display: true
                },
            }
        });

        var ctx2 = document.getElementById('chart-pie2').getContext('2d');
        var myChart2 = new Chart(ctx2, {
            type: 'pie',
            data: {
                labels: ["@lang('front.profile-TKI')", "@lang('front.profile-TKA')"],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19],
                    backgroundColor: [
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderColor: [
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                legend: {
                    display: true
                },
            }
        });

        var ctx5 = document.getElementById('chart-bar').getContext('2d');
        var myChart5 = new Chart(ctx5, {
            type: 'horizontalBar',
            data: {
                labels: ['CV', 'Fa', 'Koperasi', 'PT'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5],
                    backgroundColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                legend: {
                    display: false
                },
            }
        });

        var ctx6 = document.getElementById('chart-bar2').getContext('2d');
        var myChart6 = new Chart(ctx6, {
            type: 'bar',
            data: {
                labels: ['Tanpa Klasifikasi', 'Seri A', 'Seri B', 'Seri C', 'Seri D'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2],
                    backgroundColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                legend: {
                    display: false
                },
            }
        });

    </script>
@stop
