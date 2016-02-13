@extends('admin.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Курсы</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <p>Название курса: {{ $course->name }}</p>
                        <p>Описание курса: {{ $course->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection