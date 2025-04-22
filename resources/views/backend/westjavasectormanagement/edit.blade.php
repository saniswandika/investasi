@extends('layouts.app')

@section('title')
    Halaman Edit West Java Sector Management
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <form action="{{route('westjavasectormanagement.update',['Id'=>$sectormanagement->Id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="card-header">
                        <div class="d-flex flex-row align-items-center">
                            <h3>Update Data West Java Sector Management</h3>
                            <a href="/westjavasectormanagement" class="btn btn-sm btn-primary ml-auto">Back</a>
                            <button type="submit" class="btn btn-sm btn-primary">Save</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="p-4">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        Bahasa
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <select class="form-control" name="isBahasa" value="{!! old('isBahasa') !!}">
                                            <option value="{{$sectormanagement->isBahasa}}">
                                                @if($sectormanagement->isBahasa == 0)
                                                    Indonesia
                                                @elseif($sectormanagement->isBahasa == 1)
                                                    Inggris
                                                @else
                                                    No Language
                                                @endif
                                            </option>
                                            <option value='0'>Indonesia</option>
                                            <option value='1'>Inggris</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        Judul
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input type="text"
                                           class="form-control" name="title" id="" aria-describedby="helpId"
                                           placeholder="judul" value="{!! old('title',$sectormanagement->title) !!}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        Sub Judul
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input type="text"
                                           class="form-control" name="headline" id="" aria-describedby="helpId"
                                           placeholder="sub judul" value="{!! old('headline',$sectormanagement->headline) !!}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        Slug
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input type="text"
                                           class="form-control" name="slug" id="" aria-describedby="helpId"
                                           value="{!! old('slug',$sectormanagement->slug) !!}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        Image
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <div class="mb-3"><img class="img-thumbnail" src="@if (empty($sectormanagement->image))
                                            {{url('img/default-image.png')}}
                                            @else
                                            {{url('')}}/img/westjavasectormanagement/thumbnail/{{$sectormanagement->image}}
                                            @endif"></div>
                                            <input type="file" class="form-control-file" name="image" id="" placeholder=""
                                               aria-describedby="fileHelpId">
                                            <small>Leave empty if you don't want to change</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        Konten
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <textarea name="content" rows="15"
                                            class="form-control my-editor">{!! old('content',$sectormanagement->content) !!}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        Is Active
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <select class="form-control" name="isActive" value="{!! old('isActive') !!}">
                                            <option value="{{$sectormanagement->isActive}}">
                                            @if($sectormanagement->isActive == 0)
                                                    Non Aktif
                                                @elseif($sectormanagement->isActive == 1)
                                                    Aktif
                                                @endif
                                            </option>
                                            <option value='0'>NonAktif</option>
                                            <option value='1'>Aktif</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>


                </form>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.9.11/tinymce.min.js" integrity="sha512-3tlegnpoIDTv9JHc9yJO8wnkrIkq7WO7QJLi5YfaeTmZHvfrb1twMwqT4C0K8BLBbaiR6MOo77pLXO1/PztcLg==" crossorigin="anonymous"></script>
@stop