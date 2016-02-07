<?php

namespace App\Http\Controllers\Admin;

use App\Course;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CoursesController extends Controller
{
    public function indexAction()
    {
        $courses = Course::paginate(20);

        return view('admin.courses.index', [
            'courses' => $courses
        ]);
    }

    public function createAction()
    {
        return view('admin.courses.create');
    }

    public function storeAction(Requests\CourseRequest $request)
    {
        $data = $request->only('name');
        $course = Course::create($data);
    }

    public function editAction()
    {

    }

    public function destroyAction()
    {

    }
}
