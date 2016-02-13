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
                <a href="{{ action('Admin\CoursesController@createAction') }}" class="btn btn-success pull-right">Добавить новый курс</a>

                <div class="panel-body">
                    <table class="table table-striped table-bordered table-hover">
                        <tr>
                            <th>
                                Название курса
                            </th>

                            <th>
                                Количество уроков
                            </th>

                            <th>
                                Количество тестов
                            </th>
                        </tr>

                        @forelse($courses as $course)
                            <tr>
                                <td>
                                    <a href="{{ action('Admin\CoursesController@itemAction', [
                                        'course' => $course
                                    ]) }}">
                                        {{ $course->name }}
                                    </a>
                                </td>

                                <td>

                                </td>

                                <td>

                                </td>
                            </tr>
                        @empty
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection