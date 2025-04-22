<!doctype html>
<html lang="en">
<head>
    <title>Vaganza CMS</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Icons -->
    <link href="{{url('')}}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="{{url('')}}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

    <link rel="icon" href="{{url('')}}/img/icon.png" type="image/png">


    <!-- Argon CSS -->
    <link type="text/css" href="{{url('')}}/css/argon.css" rel="stylesheet">


</head>
<body>
@include('sweetalert::alert')
<div id="app" class="container-fluid vh-100" style="background-image: url('{{url('img/bg-auth.jpeg')}}');background-size: cover">
    <div class="row h-100">
        <div class="col-lg-6 d-flex align-items-center justify-content-center px-5 bg-white">
            @yield('content')
        </div>
        <div class="col-lg-6">

        </div>
    </div>
</div>
<script src="{{url('')}}/vendor/jquery/dist/jquery.min.js"></script>
<script src="{{url('')}}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{url('')}}/vendor/js-cookie/js.cookie.js"></script>
<script src="{{url('')}}/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="{{url('')}}/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
<!-- Optional JS -->
<script src="{{url('')}}/vendor/onscreen/dist/on-screen.umd.min.js"></script>

<!-- Argon JS -->
<script src="{{url('')}}/js/argon.min.js"></script>
</body>
</html>
