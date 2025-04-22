@extends('layouts.app')

@section('title')
    Halaman Daftar Banners
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex flex-row align-items-center">
                        <h3>Halaman Daftar Banner</h3>
                        <a href="/../public/banner/create" class="btn btn-sm btn-primary ml-auto">Tambah Konten Banners</a>
                    </div>
                </div>
                <div class="table-responsive py-4">
                    <table class="table table-flush" id="datatable-buttons">
                        <thead class="thead-light">
                        <tr>
                            <th>Id</th>
                            <th>Menu</th>
                            <th>Image</th>
                            <th>Created By</th>
                            <th>Tanggal dibuat</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($banner as $a)
                        <tr>
                                <td>{{$a->Id}}</td>
                                <td>{{$a->menu}}</td>
                                <td><img class="img-table" src="@if (empty($a->image))
                                    {{url('img/default-image.png')}}
                                    @else
                                    {{url('')}}/img/banner/thumbnail/{{$a->image }}
                                    @endif" alt="">
                                </td>
                                <td>{{$a->name}}</td>
                                <td>{{$a->created_at->format('d-M-Y H:i') }}</td> 
                                <td>
                                    <a href="{{route('banner.show',['Id'=>$a->Id])}}" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="{{route('banner.edit', ['Id' => $a->Id]) }}" class="btn btn-warning"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                    <a href="{{route('banner.destroy',['Id'=>$a->Id])}}" class="btn btn-danger" onclick="return confirm('are you sure want to delete ?')"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

@section('bottom-content')
    <script src="{{url('')}}/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{url('')}}/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{url('')}}/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{url('')}}/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="{{url('')}}/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="{{url('')}}/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="{{url('')}}/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="{{url('')}}/vendor/datatables.net-select/js/dataTables.select.min.js"></script>
@stop

@section('top-content')
    <link rel="stylesheet" href="{{url('')}}/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{url('')}}/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="{{url('')}}/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css">
@stop
