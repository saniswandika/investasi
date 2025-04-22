@extends('layouts.frontend')

@section('content')

    <!-- Content here -->
    <div class="jumbotron jumbotron-fluid nav-margin mb-0" style="background-image:
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
                    <div class="container-large">
                        <div class="header-profile">
                            <div class="user-avatar" style="background-image: url('@if (empty(Auth::user()->photo)) {{url('https://ui-avatars.com/api/?name=')}}{{Auth::user()->name}} @else {{url('')}}/users/thumbnail/{{Auth::user()->photo}} @endif')"></div>
                            <div class="user-detail">
                                <h3 class="user-name">{{Auth::user()->name}}</h3>
                                <div class="user-location mb-2">{{Auth::user()->alamat}}</div>
{{--                                <a href="{{ route('logout') }}" class="button button--xsmall button--white">Sign Out</a>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="tab-navigation--wrapper shadow">
            <div class="container">
                <div class="tab-with-action">
                    <ul class="tab-navigation">
                        <li class="tab-navigation--list">
                            <a href="{{route('member.index')}}">My Product</a>
                        </li>
                        <li class="tab-navigation--list active">
                            <a href="{{route('member.manage')}}">Manage Account</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="section">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <form action="{{route('member.updateprofile',['id'=>$manage->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Upload Your Photo</label>
                                <input type="file" name="photo" class="filepond mb-0">
                            </div>
                            <div class="form-group">
                                <label>Your Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter your fullname" value="{{$manage->name}}" required>
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="number" name="telp" class="form-control" placeholder="Enter your phone number" value="{{$manage->telp}}" required>
                            </div>
                            <div class="form-group">
                                <label for="selectGender">Gender</label>
                                <select name="gender" class="form-control">
                                    <option value="{{$manage->gender}}">{{$manage->gender}}</option>
                                    <option value="Men" selected>Men</option>
                                    <option value="Women">Women</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email" value="{{$manage->email}}" required>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="alamat" class="form-control" aria-describedby="emailHelp" placeholder="Address" value="{{$manage->alamat}}" required>
                            </div>
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" name="company_city" class="form-control" aria-describedby="emailHelp" placeholder="Enter City" value="{{$manage->company_city}}" required>
                            </div>
                            <div class="form-group">
                                <label>Company Sector</label>
                                <select class="form-control" name="company_sector">
                                    <option value="{{$manage->company_sector}}">{{$manage->company_sector}}</option>
                                    @foreach($sector as $s)
                                        <option value="{{$s->name}}">{{$s->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Company Field</label>
                                <select class="form-control" name="company_field">
                                    <option value="{{$manage->company_field}}">{{$manage->company_field}}</option>
                                    @foreach($cfield as $f)
                                        <option value="{{$f->name}}">{{$f->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="d-block mt-4">
                                <div class="button-action-wrapper">
                                    <button type="submit" class="btn btn-primary">SAVE</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>

    @include('layouts.invest-west-java')

@stop
