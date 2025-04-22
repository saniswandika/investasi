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
                    <h1 class="display-3 text-white">Let's get in touch with us.</h1>
            </div>
        </div>
    </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{url('')}}/img/logo-west-java-investment@2x.png" alt="West Java Investment Partnership Logo" class="w-70 d-block mb-5">
                </div>
                <div class="col-md-8 mb-3">
                    <div class="row">
                        <div class="col-md-12 mb-5">
                            <div class="font-semibold d-block mb-2">Address:</div>
                            <div class="d-block mb-3">Jl. Windu No.26, Lkr. Sel., Kec. Lengkong, Kota Bandung, Jawa Barat 40263</div>
                            <div class="map-section">
                                <div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=dpmptsp%20jabar&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="font-semibold d-block mb-3">Phone:</div>
                            <div class="d-block mb-2">+62 22 2112 5000</div>
                        </div>
                        <div class="col-md-6">
                            <div class="font-semibold d-block mb-3">Email:</div>
                            <div class="d-block mb-2">investasi@jabarprov.go.id</div>
                        </div>
                        <div class="col-md-12">
                            <a class="btn btn-primary mr-2" href="https://crm.dpmptsp.jabarprov.go.id/chat/" target="_blank">Chat</a>
                            <a class="btn btn-success" href="https://crm-pbx-dpmptsp-jabarprov-go-id.3cx.net/join/asricallcenter1" target="_blank">Web Meeting</a>
                        </div>
                        <div class="col-md-12 mb-5">
                            <hr>
                            <div class="font-semibold d-block mb-2">Contact Form</div>
                            <form action="{{route('contact.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group pb-2">
                                    <label for="exampleInputEmail1">Name <small>*</small></label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter name">
                                </div>
                                <div class="form-group pb-2">
                                    <label for="exampleInputEmail1">Email <small>*</small></label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter email address" required>
                                </div>
                                <div class="form-group pb-2">
                                    <label for="exampleInputEmail1">Phone Number <small>*</small></label>
                                    <input type="text" name="telp" class="form-control" placeholder="Enter your phone number">
                                </div>
                                <div class="form-group pb-2">
                                    <label for="exampleInputEmail1">Message <small>*</small></label>
                                    <textarea type="text" name="message" class="form-control" placeholder="Enter your message"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.invest-west-java')

@stop
