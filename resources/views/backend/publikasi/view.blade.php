@extends('layouts.app')

@section('title')
    Publikasi
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex flex-row align-items-center">
                        <h3>Publikasi</h3>
                        <a href="{{route('publikasi.index')}}" class="btn btn-sm btn-primary ml-auto">Back</a>
                        <a href="{{route('publikasi.edit',['pub_id'=>$publikasi->pub_id])}}" class="btn btn-sm btn-primary">Edit</a>
                    </div>
                </div>
                <div class="p-4">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                Judul Publikasi
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="form-group">
                                {{$publikasi->judul}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                Dibuat Oleh
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="form-group">
                                {{$publikasi->name}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                Tanggal Publish
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="form-group">
                                {{$publikasi->created_at}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                File
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="form-group">
                                <div class="mb-3">
                                    <a class="btn btn-primary mb-3" href="{{url('')}}/pub/file/{{$publikasi->file}}" target="_blank">Download File</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                               Deskripsi
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="form-group">
                                {!! $publikasi->deskripsi !!}
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-info" href="/publikasi" role="button">Kembali</a>
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
