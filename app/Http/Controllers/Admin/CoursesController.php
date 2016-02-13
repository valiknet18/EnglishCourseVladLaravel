<?php

namespace App\Http\Controllers\Admin;

use App\Course;
use Illuminate\Http\Request;
use App\Http\Requests\CourseRequest;
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

    public function itemAction($slug)
    {
        $course = Course::findBySlug($slug);

        return view('admin.courses.item', [
            'course' => $course
        ]);
    }

    public function createAction()
    {
        return view('admin.courses.create');
    }

    public function storeAction(CourseRequest $request)
    {
        $fullpath = null;

        $image = $request->file('image');
        $path = '/courses/';
        $name = md5(uniqid()) . "." . $image->getClientOriginalExtension();
        $fullpath = $path . $name;

        $image->move(
            public_path() . $path,
            $name
        );

        $data = $request->only('name', 'description');
        $data['image'] = $fullpath;

        $course = Course::create($data);



        return redirect(action('Admin\CoursesController@itemAction', [
            'course' => $course,
        ]));
    }

    public function editAction()
    {

    }

    public function updateAction()
    {

    }

    public function destroyAction()
    {

    }
}
