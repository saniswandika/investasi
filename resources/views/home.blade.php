@extends('layouts.app')

@section('title')
   Dashboard
@stop

@section('head-content')
    <div class="row">
        <div class="col-12 text-white text-right">
            * website data taken from google analytics
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">User Visit</h5>
                            <span
                                class="h2 font-weight-bold mb-0">{{number_format($visitor->totalsForAllResults['ga:users'], 0, ',', '.')}}</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                <i class="fas fa-user-friends"></i>
                            </div>
                        </div>
                        <p class="mt-3 mb-0 text-muted text-sm">
                            <span class="text-nowrap">Last 180 days (±6 month)</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Sessions</h5>
                            <span
                                class="h2 font-weight-bold mb-0">{{number_format($visitor->totalsForAllResults['ga:sessions'], 0, ',', '.')}}</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                <i class="fas fa-chart-bar"></i>
                            </div>
                        </div>
                        <p class="mt-3 mb-0 text-muted text-sm">
                            <span class="text-nowrap">Last 180 days (±6 month)</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Bounch Rate</h5>
                            <span
                                class="h2 font-weight-bold mb-0">{{round($visitor->totalsForAllResults['ga:bounceRate'] , 2) . '%'}}</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                <i class="fas fa-balance-scale"></i>
                            </div>
                        </div>
                        <p class="mt-3 mb-0 text-muted text-sm">
                            <span class="text-nowrap">Last 180 days (±6 month)</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">AVG Session</h5>
                            <span
                                class="h2 font-weight-bold mb-0">{{gmdate("H:i:s", $visitor->totalsForAllResults['ga:avgSessionDuration'])}}</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                <i class="fas fa-clock"></i>
                            </div>
                        </div>
                        <p class="mt-3 mb-0 text-muted text-sm">
                            <span class="text-nowrap">Last 180 days (±6 month)</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Unique Users</h5>
                            <span
                                class="h2 font-weight-bold mb-0">{{number_format($visitor->totalsForAllResults['ga:newUsers'], 0, ',', '.')}}</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-success text-white rounded-circle shadow">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                        <p class="mt-3 mb-0 text-muted text-sm">
                            <span class="text-nowrap">Last 180 days (±6 month)</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Organic Search</h5>
                            <span
                                class="h2 font-weight-bold mb-0">{{number_format($visitor->totalsForAllResults['ga:organicSearches'], 0, ',', '.')}}</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
                                <i class="fas fa-search"></i>
                            </div>
                        </div>
                        <p class="mt-3 mb-0 text-muted text-sm">
                            <span class="text-nowrap">Last 180 days (±6 month)</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">AVG Load Time</h5>
                            <span
                                class="h2 font-weight-bold mb-0">{{gmdate("H:i:s", $visitor->totalsForAllResults['ga:avgPageLoadTime'])}}</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-danger text-white rounded-circle shadow">
                                <i class="fas fa-bolt"></i>
                            </div>
                        </div>
                        <p class="mt-3 mb-0 text-muted text-sm">
                            <span class="text-nowrap">Last 180 days (±6 month)</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Sess Duration</h5>
                            <span
                                class="h2 font-weight-bold mb-0">{{gmdate("H:i:s", $visitor->totalsForAllResults['ga:sessionDuration'])}}</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-warning text-white rounded-circle shadow">
                                <i class="fas fa-clock"></i>
                            </div>
                        </div>
                        <p class="mt-3 mb-0 text-muted text-sm">
                            <span class="text-nowrap">Last 180 days (±6 month)</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@section('content')

    <div class="row">
        <div class="col-xl-8">
            <div class="card bg-dark">
                <div class="card-header bg-transparent">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="text-light text-uppercase ls-1 mb-1">Overview</h6>
                            <h5 class="h3 text-white mb-0">Visitors</h5>
                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <!-- Chart -->
                    <div class="chart">
                        <!-- Chart wrapper -->
                        <canvas id="visitor-chart" class="chart-canvas"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                    <h5 class="h3 mb-0">Top Traffic Source</h5>
                </div>
                <!-- Card body -->
                <div class="card-body">
                    <div class="chart">
                        <!-- Chart wrapper -->
                        <canvas id="chart-source" class="chart-canvas"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
@section('bottom-content')
    @php
        function rand_color() {
        return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
    }
    @endphp

    <script>
        var ctx = $('#visitor-chart');

        @php($index_data = 0)
        @php($index_data_day = 0)

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: [@foreach ($analyticsData as $data)
                    @php($index_data_day +=1)
                    @if ($index_data_day<=7)
                    {{$data[0]}},
                    @endif
                    @endforeach],
                datasets: [{
                    label: 'Visitor',
                    data: [
                        @foreach ($analyticsData as $data)
                        @php($index_data +=1)
                        @if ($index_data<=7)
                        {{$data[1]}},
                        @endif
                        @endforeach]
                }]
            },
            options: {
                elements: {
                    point: {
                        radius: 0,
                        backgroundColor: '#ffffff'
                    },
                    line: {
                        tension: .4,
                        borderWidth: 4,
                        borderColor: '#5e72e4',
                        backgroundColor: 'rgba(94, 114, 228, 0.2)',
                        borderCapStyle: 'rounded'
                    },
                    rectangle: {
                        backgroundColor: '#ffffff'
                    },
                    arc: {
                        backgroundColor: '#ffffff',
                        borderColor: '#ffffff',
                        borderWidth: 4
                    }
                },
                tooltips: {
                    enabled: true,
                    mode: 'index',
                    intersect: false,
                },
                scales: {
                    yAxes: [{
                        gridLines: {
                            color: '#32325d',
                            zeroLineColor: '#32325d'
                        },
                        ticks: {}
                    }]
                },
                legend: {
                    display: false,
                    position: 'bottom',
                    labels: {
                        usePointStyle: true,
                        padding: 16
                    }
                },
                defaultFontSize: 13,
                layout: {
                    padding: 0
                },
                responsive: true,
                maintainAspectRatio: false,
            },
        });

        var chartsource = $('#chart-source');

        var pieChart = new Chart(chartsource, {
            type: 'pie',
            data: {
                labels: [
                    @foreach($topreferer as $item)
                        '{{$item['url']}}',
                    @endforeach
                ],
                datasets: [{
                    data: [
                        @foreach($topreferer as $item)
                        {{$item['pageViews']}},
                        @endforeach
                    ],
                    backgroundColor: [
                        @foreach($topreferer as $item)
                            '{{rand_color()}}',
                        @endforeach
                    ],
                    label: 'Dataset 1'
                }],
            },
            options: {
                elements: {
                    point: {
                        radius: 0,
                        backgroundColor: '#ffffff'
                    },
                    line: {
                        tension: .4,
                        borderWidth: 4,
                        borderColor: '#5e72e4',
                        backgroundColor: 'rgba(94, 114, 228, 0.2)',
                        borderCapStyle: 'rounded'
                    },
                    rectangle: {
                        backgroundColor: '#ffffff'
                    },
                    arc: {
                        backgroundColor: '#ffffff',
                        borderColor: '#ffffff',
                        borderWidth: 4
                    }
                },
                tooltips: {
                    enabled: true,
                    mode: 'index',
                    intersect: false,
                },
                defaultFontSize: 13,
                layout: {
                    padding: 0
                },
                maintainAspectRatio: false,
                responsive: true,
                legend: {
                    position: 'top',
                },
                animation: {
                    animateScale: true,
                    animateRotate: true
                }
            }
        });
    </script>
@stop

