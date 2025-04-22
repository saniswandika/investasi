@extends('layouts.app')

@section('title')
    Member Usaha
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <form action="{{route('memberusaha.update',['id'=>$memberusaha->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="card-header">
                        <div class="d-flex flex-row align-items-center">
                            <h3>Update Data Member Usaha</h3>
                            <a href="{{route('memberusaha.index')}}" class="btn btn-sm btn-primary ml-auto">Back</a>
                            <button type="submit" class="btn btn-sm btn-primary">Save</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="p-4">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        Status
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <select name="status" class="form-control">
                                            <option value="{{$memberusaha->status}}">@if ($memberusaha->status = 1) Approve @else Not Approve @endif</option>
                                            <option value="1">Approve</option>
                                            <option value="0">Not Approve</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        Nama Perusahaan
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input type="text"
                                           class="form-control" name="nama" id="" aria-describedby="helpId"
                                           placeholder="" value="{!! old('name',$memberusaha->name) !!}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        Kota
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input type="text"
                                               class="form-control" name="company_city" id="" aria-describedby="helpId"
                                               placeholder="Bandung" value="{!! old('company_city',$memberusaha->company_city) !!}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        Sektor Perusahaan
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <select class="form-control" name="company_sector">
                                            <option value="{{$memberusaha->company_sector}}">{{$memberusaha->company_sector}}</option>
                                            @foreach($sector as $s)
                                                <option value="{{$s->name}}">{{$s->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        Bidang Perusahaan
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <select class="form-control" name="company_field">
                                            <option value="{{$memberusaha->company_field}}">{{$memberusaha->company_field}}</option>
                                            @foreach($cfield as $f)
                                                <option value="{{$f->name}}">{{$f->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        Alamat
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input type="text"
                                           class="form-control" name="alamat" id="" aria-describedby="helpId"
                                           placeholder="" value="{!! old('alamat',$memberusaha->alamat) !!}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        Foto/Logo Usaha
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <div class="mb-3"><img class="img-thumbnail" src="@if (empty($memberusaha->photo))
                                        {{url('img/default-image.png')}}
                                        @else
                                        {{url('')}}/users/thumbnail/{{$memberusaha->photo}}
                                        @endif"></div>
                                        <input type="file" class="form-control-file" name="photo" id="" placeholder=""
                                           aria-describedby="fileHelpId">
                                        <small>Leave empty if you don't want to change</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        No Telp
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input type="text"
                                           class="form-control" name="telp" id="" aria-describedby="helpId"
                                           placeholder="" value="{!! old('telp',$memberusaha->telp) !!}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        Gender
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <select class="form-control" name="gender">
                                            <option selected value="{!!($memberusaha->gender)!!}">{!!($memberusaha->gender)!!}</option>
                                            <option value="men">Men</option>
                                            <option value="women">Women</option>
                                        </select>
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
                                        {!!($memberusaha->email)!!}
                                        <input type="hidden" name="email" value="{!!($memberusaha->email)!!}" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        Password
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input type="password"
                                           class="form-control" name="password" id="" aria-describedby="helpId"
                                           placeholder="">
                                        <small>Leave empty if you don't want to change</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        Re-Password
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input type="password"
                                           class="form-control" name="password_confirmation" id="" aria-describedby="helpId"
                                           placeholder="">
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
