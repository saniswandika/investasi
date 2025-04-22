@extends('layouts.app')

@section('title')
    Halaman Edit fintech
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <form action="{{route('fintech.update',['id'=>$fintech->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="card-header">
                        <div class="d-flex flex-row align-items-center">
                            <h3>Update Data fintech</h3>
                            <a href="{{route('fintech.index')}}" class="btn btn-sm btn-primary ml-auto">Back</a>
                            <button type="submit" class="btn btn-sm btn-primary">Save</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="p-4">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        Nama Fintech
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input type="text"
                                           class="form-control" name="nama_fintech" id="" aria-describedby="helpId"
                                           placeholder="fintech 1" value="{!! old('nama_fintech',$fintech->nama_fintech) !!}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        Logo Fintech
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <div class="mb-3"><img class="img-thumbnail" src="@if (empty($fintech->logo_fintech))
                                        {{url('img/default-image.png')}}
                                        @else
                                        {{url('')}}/img/fintech/thumbnail/{{$fintech->logo_fintech}}
                                        @endif"></div>
                                        <input type="file" class="form-control-file" name="logo_fintech" id="" placeholder=""
                                           aria-describedby="fileHelpId">
                                        <small>Leave empty if you don't want to change</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        Lokasi Kota
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input type="text"
                                           class="form-control" name="lokasi_fintech" id="" aria-describedby="helpId"
                                           placeholder="Lokasi Fintech" value="{!! old('lokasi_fintech',$fintech->lokasi_fintech) !!}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        Website
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input type="text"
                                               class="form-control" name="website" id="" aria-describedby="helpId"
                                                value="{!! old('website', $fintech->website) !!}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        Perusahaan
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input type="text"
                                               class="form-control" name="perusahaan" id="" aria-describedby="helpId"
                                                value="{!! old('perusahaan', $fintech->perusahaan) !!}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        Register
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input type="text"
                                               class="form-control" name="register" id="" aria-describedby="helpId"
                                               value="{!! old('register', $fintech->register) !!}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        Tanggal Register
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                            </div>
                                            <input class="form-control datepicker"  name="tanggal_reg" type="text" value="{!! old('tanggal_reg', $fintech->tanggal_reg) !!}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                </form>
            </div>

        </div>
    </div>
@stop

@section('bottom-content')
    <script src="{{url('')}}/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script>
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
        });
    </script>
    <script>
        var editor_config = {
            path_absolute: "/",
            selector: "textarea.my-editor",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            relative_urls: false,
            file_browser_callback: function (field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'filemanager?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Files";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                    file: cmsURL,
                    title: 'Filemanager',
                    width: x * 0.8,
                    height: y * 0.8,
                    resizable: "yes",
                    close_previous: "no"
                });
            }
        };

        tinymce.init(editor_config);
    </script>
@stop

@section('top-content')
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
@stop
