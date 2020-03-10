<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\teacher;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class TeacherController extends Controller
{

    public function index()
    {
        $teachers = Teacher::all();
        return view('backend.teachers.index', compact('teachers'));
    }


    public function create()
    {
        return view('backend.teachers.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:teachers,email',
            'phone' => 'required',
            'nationality' => 'required',
            'passport' => 'required',
            'dob' => 'required',
            'dateregistered' => 'required',
            'address' => 'required',
            'img' => 'required',
        ]);

        $image = $request->file('img');
        if ($image){

                $setImageName = rand(). '.'. $image->getClientOriginalExtension();
                // set location of images
                $small_image_path = public_path('backend/uploads/teachers/'.$setImageName);
                // set image size
                Image::make($image)->resize('300','300')->save($small_image_path,100);
                // store the image
                $request['image'] = $setImageName;
        }
        $request['user_id'] = auth()->id();

        Teacher::create($request->except('_token', 'img'));
        return redirect()->back()->with('success', 'Teacher created success !');
    }


    public function show(teacher $teacher)
    {
        return view('backend.teachers.show', compact('teacher'));
    }


    public function edit(teacher $teacher)
    {
        return view('backend.teachers.edit', compact('teacher'));
    }


    public function update(Request $request, teacher $teacher)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:teachers,email,'.$teacher->id,
            'phone' => 'required',
            'nationality' => 'required',
            'passport' => 'required',
            'dob' => 'required',
            'dateregistered' => 'required',
            'address' => 'required',
        ]);

        $image = $request->file('img');
        if ($image){

            if ($teacher->image != null){
                file_exists('backend/uploads/teachers/'.$teacher->image);
                unlink('backend/uploads/teachers/'.$teacher->image);
            }
            $setImageName = rand(). '.'. $image->getClientOriginalExtension();
            // set location of images
            $small_image_path = public_path('backend/uploads/teachers/'.$setImageName);
            // set image size
            Image::make($image)->resize('300','300')->save($small_image_path,100);
            // store the image
            $request['image'] = $setImageName;
        }
        $request['user_id'] = auth()->id();

        $teacher->update($request->except('_token', 'img'));
        return redirect()->back()->with('success', 'Teacher updated success !');
    }

    public function destroy(teacher $teacher)
    {
        $teacher->delete();
        return redirect()->back()->with('success', 'Teacher deleted success !');
    }
}
