@extends('layouts.app')

@section('title')
    Files
@stop


@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex flex-row align-items-center">
                        <h3>Files</h3>
                    </div>
                </div>
                    <iframe src="/filemanager" style="width: 100%; height: 500px; overflow: hidden; border: none;"></iframe>

            </div>
        </div>
    </div>
@stop

@section('bottom-content')

@stop

@section('top-content')

@stop
