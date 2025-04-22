@extends('layouts.app')

@section('title')
    User Dinas
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <form action="{{route('userdinas.update',['id'=>$userdinas->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="card-header">
                        <div class="d-flex flex-row align-items-center">
                            <h3>Users</h3>
                            <a href="{{route('userdinas.index')}}" class="btn btn-sm btn-primary ml-auto">Back</a>
                            <button type="submit" class="btn btn-sm btn-primary">Save</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Nama Dinas</label>
                                    <input type="text"
                                           class="form-control" name="namadinas" id="" aria-describedby="helpId"
                                           placeholder="" value="{!! old('name',$userdinas->nama_dinas) !!}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Alamat Dinas</label>
                                    <input type="text"
                                           class="form-control" name="alamat" id="" aria-describedby="helpId"
                                           placeholder="" value="{!! old('alamat',$userdinas->alamat) !!}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Logo Dinas</label>
                                    <div class="mb-3"><img class="img-thumbnail" src="@if (empty($userdinas->logo_dinas))
                                        {{url('img/default-image.png')}}
                                        @else
                                        {{url('')}}/users/thumbnail/{{$userdinas->logo_dinas}}
                                        @endif"></div>
                                    <input type="file" class="form-control-file" name="logo_dinas" id="" placeholder=""
                                           aria-describedby="fileHelpId">
                                    <small>Leave empty if you don't want to change</small>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Nama Contact Person</label>
                                    <input type="text"
                                           class="form-control" name="namacp" id="" aria-describedby="helpId"
                                           placeholder="" value="{!! old('name',$userdinas->name) !!}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">NIP Contact Person</label>
                                    <input type="text"
                                           class="form-control" name="nip" id="" aria-describedby="helpId"
                                           placeholder="" value="{!! old('nip',$userdinas->nip_cp) !!}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">No Telp Contact Person</label>
                                    <input type="number"
                                           class="form-control" name="telp" id="" aria-describedby="helpId"
                                           placeholder="" value="{!! old('telp',$userdinas->telp) !!}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Gender Contact Person</label>
                                    <select class="form-control" name="gender">
                                        <option selected value="{!!($userdinas->gender)!!}">{!!($userdinas->gender)!!}</option>
                                        <option value="men">Men</option>
                                        <option value="women">Women</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Posisi Contact Person</label>
                                    <input type="text"
                                           class="form-control" name="posisi" id="" aria-describedby="helpId"
                                           placeholder="" value="{!! old('posisi',$userdinas->posisi_cp) !!}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text"
                                           class="form-control" name="email" id="" aria-describedby="helpId"
                                           value="{!! old('email',$userdinas->email) !!}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password"
                                           class="form-control" name="password" id="" aria-describedby="helpId"
                                           placeholder="">
                                    <small>Leave empty if you don't want to change</small>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Re-Password</label>
                                    <input type="password"
                                           class="form-control" name="password_confirmation" id="" aria-describedby="helpId"
                                           placeholder="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
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
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
@stop
