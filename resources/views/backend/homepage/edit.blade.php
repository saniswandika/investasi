@extends('layouts.app')

@section('title')
    Halaman Edit Homepage
@stop

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <form action="{{ route('homepage.update', ['Id' => $homepage->Id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="card-header">
                    <div class="d-flex flex-row align-items-center justify-content-between">
                        <h3>Update Data Agenda</h3>
                        <a href="{{ route('homepage.index') }}" class="btn btn-sm btn-primary ml-auto">Back</a>
                        <button type="submit" class="btn btn-sm btn-primary">Save</button>
                    </div>
                </div>

                <div class="card-body">
                    <div class="p-4">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="isBahasa">Bahasa</label>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    <select class="form-control" name="isBahasa" id="isBahasa">
                                        <option value="{{ $homepage->isBahasa }}">
                                            @if($homepage->isBahasa == 0)
                                                Indonesia
                                            @elseif($homepage->isBahasa == 1)
                                                Inggris
                                            @else
                                                No Language
                                            @endif
                                        </option>
                                        <option value="0">Indonesia</option>
                                        <option value="1">Inggris</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Your other form fields -->

                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="title">Banner Text</label>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="bannerText" id="bannerText" placeholder="banner Text" value="{!! old('title', $homepage->bannerText) !!}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                    Banner Image
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <div class="mb-3"><img class="img-thumbnail" src="@if (empty($homepage->bannerImage))
                                            {{url('img/default-image.png')}}
                                            @else
                                            {{url('')}}/img/homepage/thumbnail/{{$homepage->bannerImage}}
                                            @endif"></div>
                                            <input type="file" class="form-control-file" name="bannerImage" id="" placeholder=""
                                               aria-describedby="fileHelpId">
                                            <small>Leave empty if you don't want to change</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                    Why Invest Image
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <div class="mb-3"><img class="img-thumbnail" src="@if (empty($homepage->whyInvestImage))
                                            {{url('img/default-image.png')}}
                                            @else
                                            {{url('')}}/img/homepage/thumbnail/{{$homepage->whyInvestImage}}
                                            @endif"></div>
                                            <input type="file" class="form-control-file" name="whyInvestImage" id="" placeholder=""
                                               aria-describedby="fileHelpId">
                                            <small>Leave empty if you don't want to change</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                    Find Investment Image
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <div class="mb-3"><img class="img-thumbnail" src="@if (empty($homepage->findInvestImage))
                                            {{url('img/default-image.png')}}
                                            @else
                                            {{url('')}}/img/homepage/thumbnail/{{$homepage->findInvestImage}}
                                            @endif"></div>
                                            <input type="file" class="form-control-file" name="findInvestImage" id="" placeholder=""
                                               aria-describedby="fileHelpId">
                                            <small>Leave empty if you don't want to change</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                    Sector Image
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <div class="mb-3"><img class="img-thumbnail" src="@if (empty($homepage->sectorImage))
                                            {{url('img/default-image.png')}}
                                            @else
                                            {{url('')}}/img/homepage/thumbnail/{{$homepage->sectorImage}}
                                            @endif"></div>
                                            <input type="file" class="form-control-file" name="sectorImage" id="" placeholder=""
                                               aria-describedby="fileHelpId">
                                            <small>Leave empty if you don't want to change</small>
                                        </div>
                                    </div>
                                </div>
                       
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.9.11/tinymce.min.js" integrity="sha512-3tlegnpoIDTv9JHc9yJO8wnkrIkq7WO7QJLi5YfaeTmZHvfrb1twMwqT4C0K8BLBbaiR6MOo77pLXO1/PztcLg==" crossorigin="anonymous"></script>
@stop