@extends('layouts.app')

@section('title')
    Settings
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex flex-row align-items-center">
                        <h3>Settings</h3>
                    </div>
                </div>
                <div class="card-body">
                    @foreach ($settings as $setting)
                        <form action="{{route('settings.change',['id'=>$setting->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        @if($setting->id == 4)
                                            <label for="">PDF Buku Investasi</label>
                                            <input type="file"
                                                   class="form-control" name="file" id="" aria-describedby="helpId"
                                                   placeholder="" value="{{$setting->file}}">
                                            <small><a href="{{url('')}}/file/{{$setting->file}}" target="_blank">{{$setting->file}}</a></small>
                                        @else
                                        <label for="">{{$setting->name}}</label>
                                        <input type="text"
                                               class="form-control" name="value" id="" aria-describedby="helpId"
                                               placeholder="" value="{{$setting->value}}">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 d-flex align-items-center">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    @endforeach
{{--                    <form action="{{route('settings.change',['id'=>$setting->id])}}" method="POST">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="">PDF Buku Investasi</label>--}}
{{--                                    <input type="file"--}}
{{--                                           class="form-control" name="upload" id="" aria-describedby="helpId"--}}
{{--                                           placeholder="" value="{{$setting->value}}">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6 d-flex align-items-center">--}}
{{--                                <button type="submit" class="btn btn-primary">Save</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
                </div>

            </div>

        </div>
    </div>
@stop

@section('bottom-content')

@stop

@section('top-content')

@stop
