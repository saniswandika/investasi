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
                        <h1 class="display-3 text-white">@lang('front.profiles-West java')</h1>
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
                        <span class="breadcrumb-item active">Profiles</span>
                    </nav>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 mb-4">
                                @lang('front.profiles-Due')
                            </div>
                            <div class="col-3">
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                     aria-orientation="vertical">
                                    <a class="nav-link mb-2 active" id="v-pills-home-tab" data-toggle="pill"
                                       href="#v-pills-home" role="tab" aria-controls="v-pills-home"
                                       aria-selected="true">@lang('front.profile-Pertanian')</a>
                                    <a class="nav-link mb-2" id="v-pills-profile-tab" data-toggle="pill"
                                       href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                       aria-selected="false">@lang('front.profile-Kehutanan')</a>
                                    <a class="nav-link mb-2" id="v-pills-messages-tab" data-toggle="pill"
                                       href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                                       aria-selected="false">@lang('front.profile-Perikanan')</a>
                                    <a class="nav-link mb-2" id="v-pills-settings-tab" data-toggle="pill"
                                       href="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
                                       aria-selected="false">@lang('front.profile-Pertambangan')</a>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                         aria-labelledby="v-pills-home-tab">
                                        <div class="row">

                                            <div class="col-lg-4 mb-3">
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

                                            <div class="col-lg-4 mb-3">
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

                                            <div class="col-lg-4 mb-3">
                                                <!--* Card header *-->
                                                <!--* Card body *-->
                                                <!--* Card init *-->
                                                <div class="card h-100">
                                                    <!-- Card header -->
                                                    <div class="card-header">
                                                        <!-- Title -->
                                                        <h5 class="h3 mb-0">@lang('front.profile-Status Tanah')</h5>
                                                    </div>
                                                    <!-- Card body -->
                                                    <div class="card-body">
                                                        <div>
                                                            <!-- Chart wrapper -->
                                                            <canvas id="chart-pie3" class="chart-canvas" height="300px"></canvas>
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
                                                        <h5 class="h3 mb-0">@lang('front.profile-Asal Investor')</h5>
                                                    </div>
                                                    <!-- Card body -->
                                                    <div class="card-body">
                                                        <div>
                                                            <!-- Chart wrapper -->
                                                            <canvas id="chart-pie4" class="chart-canvas" height="300px"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-8 mb-3">
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
                                                        <li class="list-group-item">Kab. Sumedang</li>
                                                        <li class="list-group-item">Kab. Garut</li>
                                                        <li class="list-group-item">Kab. Sukabumi</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 mb-3">
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

                                            <div class="col-lg-6 mb-3">
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

                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                         aria-labelledby="v-pills-profile-tab">
                                        <div class="row">

                                            <div class="col-lg-4 mb-3">
                                                <!--* Card header *-->
                                                <!--* Card body *-->
                                                <!--* Card init *-->
                                                <div class="card h-100">
                                                    <!-- Card header -->
                                                    <div class="card-header">
                                                        <!-- Title -->
                                                        <h5 class="h3 mb-0">Jumlah Penyerapan Kerja</h5>
                                                    </div>
                                                    <!-- Card body -->
                                                    <div class="card-body">
                                                        <div>
                                                            <!-- Chart wrapper -->
                                                            <canvas id="chart-pieb" class="chart-canvas" height="300px"></canvas>
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
                                                        <h5 class="h3 mb-0">Presentasi tenaga Kerja</h5>
                                                    </div>
                                                    <!-- Card body -->
                                                    <div class="card-body">
                                                        <div>
                                                            <!-- Chart wrapper -->
                                                            <canvas id="chart-pieb2" class="chart-canvas" height="300px"></canvas>
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
                                                        <h5 class="h3 mb-0">Status Tanah</h5>
                                                    </div>
                                                    <!-- Card body -->
                                                    <div class="card-body">
                                                        <div>
                                                            <!-- Chart wrapper -->
                                                            <canvas id="chart-pieb3" class="chart-canvas" height="300px"></canvas>
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
                                                        <h5 class="h3 mb-0">Asal Investor</h5>
                                                    </div>
                                                    <!-- Card body -->
                                                    <div class="card-body">
                                                        <div>
                                                            <!-- Chart wrapper -->
                                                            <canvas id="chart-pieb4" class="chart-canvas" height="300px"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-8 mb-3">
                                                <!--* Card header *-->
                                                <!--* Card body *-->
                                                <!--* Card init *-->
                                                <div class="card h-100">
                                                    <!-- Card header -->
                                                    <div class="card-header">
                                                        <!-- Title -->
                                                        <h5 class="h3 mb-0">Top 3 Daerah</h5>
                                                    </div>
                                                    <!-- Card body -->
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">Kab. Sumedang</li>
                                                        <li class="list-group-item">Kab. Garut</li>
                                                        <li class="list-group-item">Kab. Sukabumi</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 mb-3">
                                                <!--* Card header *-->
                                                <!--* Card body *-->
                                                <!--* Card init *-->
                                                <div class="card h-100">
                                                    <!-- Card header -->
                                                    <div class="card-header">
                                                        <!-- Title -->
                                                        <h5 class="h3 mb-0">Data Jenis Perusahaan</h5>
                                                    </div>
                                                    <!-- Card body -->
                                                    <div class="card-body">
                                                        <div>
                                                            <!-- Chart wrapper -->
                                                            <canvas id="chart-barb" class="chart-canvas" height="300px"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 mb-3">
                                                <!--* Card header *-->
                                                <!--* Card body *-->
                                                <!--* Card init *-->
                                                <div class="card h-100">
                                                    <!-- Card header -->
                                                    <div class="card-header">
                                                        <!-- Title -->
                                                        <h5 class="h3 mb-0">Klasifikasi Saham</h5>
                                                    </div>
                                                    <!-- Card body -->
                                                    <div class="card-body">
                                                        <div>
                                                            <!-- Chart wrapper -->
                                                            <canvas id="chart-barb2" class="chart-canvas" height="300px"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                         aria-labelledby="v-pills-messages-tab">
                                        <div class="row">

                                            <div class="col-lg-4 mb-3">
                                                <!--* Card header *-->
                                                <!--* Card body *-->
                                                <!--* Card init *-->
                                                <div class="card h-100">
                                                    <!-- Card header -->
                                                    <div class="card-header">
                                                        <!-- Title -->
                                                        <h5 class="h3 mb-0">Jumlah Penyerapan Kerja</h5>
                                                    </div>
                                                    <!-- Card body -->
                                                    <div class="card-body">
                                                        <div>
                                                            <!-- Chart wrapper -->
                                                            <canvas id="chart-piec" class="chart-canvas" height="300px"></canvas>
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
                                                        <h5 class="h3 mb-0">Presentasi tenaga Kerja</h5>
                                                    </div>
                                                    <!-- Card body -->
                                                    <div class="card-body">
                                                        <div>
                                                            <!-- Chart wrapper -->
                                                            <canvas id="chart-piec2" class="chart-canvas" height="300px"></canvas>
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
                                                        <h5 class="h3 mb-0">Status Tanah</h5>
                                                    </div>
                                                    <!-- Card body -->
                                                    <div class="card-body">
                                                        <div>
                                                            <!-- Chart wrapper -->
                                                            <canvas id="chart-piec3" class="chart-canvas" height="300px"></canvas>
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
                                                        <h5 class="h3 mb-0">Asal Investor</h5>
                                                    </div>
                                                    <!-- Card body -->
                                                    <div class="card-body">
                                                        <div>
                                                            <!-- Chart wrapper -->
                                                            <canvas id="chart-piec4" class="chart-canvas" height="300px"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-8 mb-3">
                                                <!--* Card header *-->
                                                <!--* Card body *-->
                                                <!--* Card init *-->
                                                <div class="card h-100">
                                                    <!-- Card header -->
                                                    <div class="card-header">
                                                        <!-- Title -->
                                                        <h5 class="h3 mb-0">Top 3 Daerah</h5>
                                                    </div>
                                                    <!-- Card body -->
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">Kab. Sumedang</li>
                                                        <li class="list-group-item">Kab. Garut</li>
                                                        <li class="list-group-item">Kab. Sukabumi</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 mb-3">
                                                <!--* Card header *-->
                                                <!--* Card body *-->
                                                <!--* Card init *-->
                                                <div class="card h-100">
                                                    <!-- Card header -->
                                                    <div class="card-header">
                                                        <!-- Title -->
                                                        <h5 class="h3 mb-0">Data Jenis Perusahaan</h5>
                                                    </div>
                                                    <!-- Card body -->
                                                    <div class="card-body">
                                                        <div>
                                                            <!-- Chart wrapper -->
                                                            <canvas id="chart-barc" class="chart-canvas" height="300px"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 mb-3">
                                                <!--* Card header *-->
                                                <!--* Card body *-->
                                                <!--* Card init *-->
                                                <div class="card h-100">
                                                    <!-- Card header -->
                                                    <div class="card-header">
                                                        <!-- Title -->
                                                        <h5 class="h3 mb-0">Klasifikasi Saham</h5>
                                                    </div>
                                                    <!-- Card body -->
                                                    <div class="card-body">
                                                        <div>
                                                            <!-- Chart wrapper -->
                                                            <canvas id="chart-barc2" class="chart-canvas" height="300px"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                         aria-labelledby="v-pills-settings-tab">
                                        <div class="row">

                                            <div class="col-lg-4 mb-3">
                                                <!--* Card header *-->
                                                <!--* Card body *-->
                                                <!--* Card init *-->
                                                <div class="card h-100">
                                                    <!-- Card header -->
                                                    <div class="card-header">
                                                        <!-- Title -->
                                                        <h5 class="h3 mb-0">Jumlah Penyerapan Kerja</h5>
                                                    </div>
                                                    <!-- Card body -->
                                                    <div class="card-body">
                                                        <div>
                                                            <!-- Chart wrapper -->
                                                            <canvas id="chart-pied" class="chart-canvas" height="300px"></canvas>
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
                                                        <h5 class="h3 mb-0">Presentasi tenaga Kerja</h5>
                                                    </div>
                                                    <!-- Card body -->
                                                    <div class="card-body">
                                                        <div>
                                                            <!-- Chart wrapper -->
                                                            <canvas id="chart-pied2" class="chart-canvas" height="300px"></canvas>
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
                                                        <h5 class="h3 mb-0">Status Tanah</h5>
                                                    </div>
                                                    <!-- Card body -->
                                                    <div class="card-body">
                                                        <div>
                                                            <!-- Chart wrapper -->
                                                            <canvas id="chart-pied3" class="chart-canvas" height="300px"></canvas>
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
                                                        <h5 class="h3 mb-0">Asal Investor</h5>
                                                    </div>
                                                    <!-- Card body -->
                                                    <div class="card-body">
                                                        <div>
                                                            <!-- Chart wrapper -->
                                                            <canvas id="chart-pied4" class="chart-canvas" height="300px"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-8 mb-3">
                                                <!--* Card header *-->
                                                <!--* Card body *-->
                                                <!--* Card init *-->
                                                <div class="card h-100">
                                                    <!-- Card header -->
                                                    <div class="card-header">
                                                        <!-- Title -->
                                                        <h5 class="h3 mb-0">Top 3 Daerah</h5>
                                                    </div>
                                                    <!-- Card body -->
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">Kab. Sumedang</li>
                                                        <li class="list-group-item">Kab. Garut</li>
                                                        <li class="list-group-item">Kab. Sukabumi</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 mb-3">
                                                <!--* Card header *-->
                                                <!--* Card body *-->
                                                <!--* Card init *-->
                                                <div class="card h-100">
                                                    <!-- Card header -->
                                                    <div class="card-header">
                                                        <!-- Title -->
                                                        <h5 class="h3 mb-0">Data Jenis Perusahaan</h5>
                                                    </div>
                                                    <!-- Card body -->
                                                    <div class="card-body">
                                                        <div>
                                                            <!-- Chart wrapper -->
                                                            <canvas id="chart-bard" class="chart-canvas" height="300px"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 mb-3">
                                                <!--* Card header *-->
                                                <!--* Card body *-->
                                                <!--* Card init *-->
                                                <div class="card h-100">
                                                    <!-- Card header -->
                                                    <div class="card-header">
                                                        <!-- Title -->
                                                        <h5 class="h3 mb-0">Klasifikasi Saham</h5>
                                                    </div>
                                                    <!-- Card body -->
                                                    <div class="card-body">
                                                        <div>
                                                            <!-- Chart wrapper -->
                                                            <canvas id="chart-bard2" class="chart-canvas" height="300px"></canvas>
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
            </div>
        </div>
    </div>

    <section class="bg-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <h1>Sectoral Profiles</h1>
                </div>
                @foreach($profile as $p)
                    <div class="col-4 col-lg-2 mb-2">
                        <div class="card h-100 card-lift--hover shadow border-0">
                            <div class="card-body text-center">
                                <a href="{{route('profiles.show',['slug'=>$p->slug])}}"><img class="w-100 h-auto"
                                                                                             src="{{url('')}}/img/profile/thumbnail/{{$p->image}}"
                                                                                             alt="{{$p->slug}}"></a>
                                <div class="p-2"></div>
                                <a href="{{route('profiles.show',['slug'=>$p->slug])}}"><p class="mb-0">{{$p->name}}</p></a>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

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

        var ctx3 = document.getElementById('chart-pie3').getContext('2d');
        var myChart3 = new Chart(ctx3, {
            type: 'pie',
            data: {
                labels: ["@lang('front.profile-Sewa')", "@lang('front.profile-Bukan Sewa')"],
                datasets: [{
                    label: '# of Votes',
                    data: [5, 2],
                    backgroundColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
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

        var ctx4 = document.getElementById('chart-pie4').getContext('2d');
        var myChart4 = new Chart(ctx4, {
            type: 'pie',
            data: {
                labels: ["@lang('front.profile-Asing')", "@lang('front.profile-Indonesia')"],
                datasets: [{
                    label: '# of Votes',
                    data: [5, 2],
                    backgroundColor: [
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                    ],
                    borderColor: [
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
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

    <script>
        var ctxb = document.getElementById('chart-pieb').getContext('2d');
        var myChartb = new Chart(ctxb, {
            type: 'pie',
            data: {
                labels: ["@lang('front.profile-Perempuan')", "@lang('front.profile-Laki-laki')"],
                datasets: [{
                    label: '# of Votes',
                    data: [52, 19],
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

        var ctxb2 = document.getElementById('chart-pieb2').getContext('2d');
        var myChartb2 = new Chart(ctxb2, {
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

        var ctxb3 = document.getElementById('chart-pieb3').getContext('2d');
        var myChartb3 = new Chart(ctxb3, {
            type: 'pie',
            data: {
                labels: ["@lang('front.profile-Sewa')", "@lang('front.profile-Bukan Sewa')"],
                datasets: [{
                    label: '# of Votes',
                    data: [5, 2],
                    backgroundColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
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

        var ctxb4 = document.getElementById('chart-pieb4').getContext('2d');
        var myChartb4 = new Chart(ctxb4, {
            type: 'pie',
            data: {
                labels: ["@lang('front.profile-Asing')", "@lang('front.profile-Indonesia')"],
                datasets: [{
                    label: '# of Votes',
                    data: [5, 2],
                    backgroundColor: [
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                    ],
                    borderColor: [
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
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

        var ctxb5 = document.getElementById('chart-barb').getContext('2d');
        var myChartb5 = new Chart(ctxb5, {
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

        var ctxb6 = document.getElementById('chart-barb2').getContext('2d');
        var myChartb6 = new Chart(ctxb6, {
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

    <script>
        var ctxc = document.getElementById('chart-piec').getContext('2d');
        var myChartc = new Chart(ctxc, {
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

        var ctxc2 = document.getElementById('chart-piec2').getContext('2d');
        var myChartc2 = new Chart(ctxc2, {
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

        var ctxc3 = document.getElementById('chart-piec3').getContext('2d');
        var myChartc3 = new Chart(ctxc3, {
            type: 'pie',
            data: {
                labels: ["@lang('front.profile-Sewa')", "@lang('front.profile-Bukan Sewa')"],
                datasets: [{
                    label: '# of Votes',
                    data: [5, 2],
                    backgroundColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
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

        var ctxc4 = document.getElementById('chart-piec4').getContext('2d');
        var myChartc4 = new Chart(ctxc4, {
            type: 'pie',
            data: {
                labels: ["@lang('front.profile-Asing')", "@lang('front.profile-Indonesia')"],
                datasets: [{
                    label: '# of Votes',
                    data: [5, 2],
                    backgroundColor: [
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                    ],
                    borderColor: [
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
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

        var ctxc5 = document.getElementById('chart-barc').getContext('2d');
        var myChartc5 = new Chart(ctxc5, {
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

        var ctxc6 = document.getElementById('chart-barc2').getContext('2d');
        var myChartc6 = new Chart(ctxc6, {
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

    <script>
        var ctxd = document.getElementById('chart-pied').getContext('2d');
        var myChartd = new Chart(ctxd, {
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

        var ctxd2 = document.getElementById('chart-pied2').getContext('2d');
        var myChartd2 = new Chart(ctxd2, {
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

        var ctxd3 = document.getElementById('chart-pied3').getContext('2d');
        var myChartd3 = new Chart(ctxd3, {
            type: 'pie',
            data: {
                labels: ["@lang('front.profile-Sewa')", "@lang('front.profile-Bukan Sewa')"],
                datasets: [{
                    label: '# of Votes',
                    data: [5, 2],
                    backgroundColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
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

        var ctxd4 = document.getElementById('chart-pied4').getContext('2d');
        var myChartd4 = new Chart(ctxd4, {
            type: 'pie',
            data: {
                labels: ["@lang('front.profile-Asing')", "@lang('front.profile-Indonesia')"],
                datasets: [{
                    label: '# of Votes',
                    data: [5, 2],
                    backgroundColor: [
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                    ],
                    borderColor: [
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
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

        var ctxd5 = document.getElementById('chart-bard').getContext('2d');
        var myChartd5 = new Chart(ctxd5, {
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

        var ctxd6 = document.getElementById('chart-bard2').getContext('2d');
        var myChartd6 = new Chart(ctxd6, {
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
