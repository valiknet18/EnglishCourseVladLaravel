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
                    <form class="form" method="POST" action="{{ action('Admin\CoursesController@storeAction') }}" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Название курса:</label>
                            <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}">
                        </div>

                        <div class="form-group">
                            <label for="description">Описание курса:</label>
                            <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="image">Название курса:</label>
                            <input type="file" id="image" name="image" class="form-control">
                        </div>

                        {!! csrf_field() !!}

                        <div class="form-group">
                            <button type="submit" class="btn btn-success pull-right">Добавить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection