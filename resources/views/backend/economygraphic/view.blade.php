@extends('layouts.app')

@section('title')
    EconomyGraphic
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex flex-row align-items-center">
                        <h3>Economy Graphic</h3>
                        <a href="{{route('economyGraphic.index')}}" class="btn btn-sm btn-primary ml-auto">Back</a>
                        <a href="{{route('economyGraphic.edit',['Id'=>$economyGraphic->Id])}}" class="btn btn-sm btn-primary">Edit</a>
                    </div>
                </div>
                <div class="p-4">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                Value
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="form-group">
                                {{$economyGraphic->value}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                Date
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="form-group">
                                {{$economyGraphic->date}}
                            </div>
                        </div>
                    </div>
                    
                    <a class="btn btn-info" href="/economyStatistic" role="button">Kembali</a>
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
