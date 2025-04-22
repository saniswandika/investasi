@extends('layouts.app')

@section('title')
    WJIS Registration
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex flex-row align-items-center">
                        <h3>WJIS Registration</h3>
                        <a href="{{route('wjisRegistration.index')}}" class="btn btn-sm btn-primary ml-auto">Back</a>
                    </div>
                </div>
                <div class="p-4">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                Nama
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="form-group">
                                {{$wjisRegistration->name}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                Email
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="form-group">
                                {{$wjisRegistration->email}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                Jabatan/Posisi
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="form-group">
                                {{$wjisRegistration->position}}
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
                                {{$wjisRegistration->company}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                Investasi
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="form-group">
                                {{$wjisRegistration->investmentName}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                               Negara
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="form-group">
                                {{$wjisRegistration->country}}
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-info" href="/wjisRegistration" role="button">Kembali</a> 
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
