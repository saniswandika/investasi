@extends('layouts.frontend')

@section('content')

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

    <div class="tab-navigation--wrapper shadow">
        <div class="container">
            <div class="tab-with-action">
                <ul class="tab-navigation">
                    <li class="tab-navigation--list">
                        <a class="font-semibold">Add New Product</a>
                    </li>
                </ul>
                <div class="tab-action">
                    <a href="/member" class="btn button--small btn-outline-primary mr-2">CANCEL</a>
                    <button type="submit" class="btn button--small btn-primary">PUBLISH</button>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <form action="{{route('member.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Upload Product Image</label>
                            <input name="image" type="file" class="form-control-file mb-0">
                            <small><i>Max 3 mb.</i></small>
                        </div>
                        <div class="form-group">
                            <label>Nama Produk</label>
                            <input name="name" type="text" class="form-control" placeholder="Produk 1">
                        </div>

                        <div class="form-group">
                            <label>Mini Deskripsi</label>
                            <input name="mini_desc" type="text" class="form-control" placeholder="Deskripsi singkat">
                        </div>

                        <div class="form-group">
                            <label>Kategori</label>
                            <select class="form-control" name="category">
                                <option>Fashion</option>
                                <option>Craft</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Harga</label>
                            <input name="price" type="text" class="form-control" placeholder="200000">
                        </div>

                        <div class="form-group">
                            <label>Lokasi</label>
                            <input name="location" type="text" class="form-control" placeholder="Gedung ABC Bandung">
                        </div>

                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea name="desc" class="form-control summernote" style="height: 250px"></textarea>
                        </div>

                        <div class="d-block mt-4 mb-4">
                            <div class="button-action-wrapper">
                                <a href="/member" class="btn btn-outline-primary mr-2">CANCEL</a>
                                <button type="submit" class="btn btn-primary">PUBLISH</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="section">



    </div>

    @include('layouts.invest-west-java')

@stop
