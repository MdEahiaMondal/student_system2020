<?php

namespace App\Http\Controllers\Backend;

use App\Course;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function index()
    {
        $courses = Course::all();
        return view('backend.courses.index', compact('courses'));
    }


    public function create()
    {
        return view('backend.courses.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'course_name' => 'required',
            'course_code' => 'required|unique:courses,course_code',
            'description' => 'required',
        ]);

        $request['status'] = $request->status ?? 0;

        Course::create($request->except('_token'));
        return redirect()->back()->with('success', 'Courses created success !');

    }


    public function show(Course $course)
    {
        //
    }


    public function edit(Course $course)
    {
        return view('backend.courses.edit', compact('course'));
    }


    public function update(Request $request, Course $course)
    {
        $request->validate([
            'course_name' => 'required',
            'course_code' => 'required|unique:courses,course_code,'.$course->id,
            'description' => 'required',
        ]);

        $request['status'] = $request->status ?? 0;

        $course->update($request->except('_token'));
        return redirect()->back()->with('success', 'Courses updated success !');
    }


    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->back()->with('success', 'Courses deleted success !');
    }
}
