@extends('layouts.app')

@section('title')
    User Dinas Detail
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex flex-row align-items-center">
                        <h3>User Dinas</h3>
                        <a href="{{route('userdinas.index')}}" class="btn btn-sm btn-primary ml-auto">Back</a>
                        <a href="{{route('userdinas.edit',['id'=>$userdinas->id])}}" class="btn btn-sm btn-primary">Edit</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Nama Dinas</label><br>
                            {{$userdinas->nama_dinas}}
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Alamat Dinas</label>
                            {{$userdinas->alamat}}
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <img class="img-thumbnail" src="@if (empty($userdinas->logo_dinas))
                            {{url('img/default-image.png')}}
                            @else
                            {{url('')}}/users/thumbnail/{{$userdinas->logo_dinas}}
                            @endif" alt="">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Nama Contact Person</label>
                            {{$userdinas->name}}
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">NIP Contact Person</label>
                            {{$userdinas->nip_cp}}
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">No Telp Contact Person</label>
                            {{$userdinas->telp}}
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Gender Contact Person</label>
                            {{$userdinas->gender}}
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Posisi Contact Person</label>
                            {{$userdinas->posisi_cp}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('bottom-content')
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
