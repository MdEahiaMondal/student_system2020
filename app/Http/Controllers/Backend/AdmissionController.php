<?php

namespace App\Http\Controllers\Backend;

use App\admission;
use App\Batch;
use App\Department;
use App\Faculty;
use App\Http\Controllers\Controller;
use App\Roll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class AdmissionController extends Controller
{

    public function index()
    {
        $admissions = Admission::all();
        return view('backend.admissions.index', compact('admissions'));
    }


    public function create()
    {
        Session::put('create', 'ok');
        $faculties = Faculty::all();
        $departments = Department::all();
        $batches = Batch::all();
       return view('backend.admissions.create', compact('faculties', 'departments', 'batches'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'faculty_id' => 'required',
            'department_id' => 'required',
            'batch_id' => 'required',
            'father_name' => 'required',
            'father_phone' => 'required',
            'mother_name' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:admissions,email',
            'phone' => 'required',
            'nationality' => 'required',
            'passport' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'current_address' => 'required',
        ]);

        $request['user_id'] = auth()->id();
        $request['dateregistered'] = date('yy-m-d');
        $request['status'] = $request->status ?? '0';
        $image = $request->file('img');
        if ($image){
            $setImageName = rand(). '.'. $image->getClientOriginalExtension();
            // set location of images
            $small_image_path = public_path('backend/uploads/students/'.$setImageName);
            // set image size
            Image::make($image)->resize('300','300')->save($small_image_path,100);
            // store the image
            $request['image'] = $setImageName;
        }

       $student =  Admission::create($request->except('_token', 'img', 'username', 'password'));

        $user_name_check = Roll::where('username', $request->username)->first();
        if ($user_name_check)
        {
            $request['username'] = $user_name_check->username .'-'. uniqid();
        }
        Roll::create([
            'student_id' => $student->id,
            'username' => $request->username,
            'password' => $request->password,
        ]);
        return redirect()->back()->with('success', 'Student Created success !');

    }


    public function show(admission $admission)
    {
        //
    }


    public function edit(admission $admission)
    {
        Session::forget('create');
        $faculties = Faculty::all();
        $departments = Department::all();
        $batches = Batch::all();
        return view('backend.admissions.edit', compact('faculties', 'departments', 'batches', 'admission'));
    }


    public function update(Request $request, admission $admission)
    {
        $request->validate([
            'faculty_id' => 'required',
            'department_id' => 'required',
            'batch_id' => 'required',
            'father_name' => 'required',
            'father_phone' => 'required',
            'mother_name' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:admissions,email,'.$admission->id,
            'phone' => 'required',
            'nationality' => 'required',
            'passport' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'current_address' => 'required',
        ]);

        $request['user_id'] = auth()->id();
        $request['status'] = $request->status ?? '0';
        $image = $request->file('img');
        if ($image){

            if ($admission->image != null){
                file_exists('backend/uploads/students/'.$admission->image);
                unlink('backend/uploads/students/'.$admission->image);
            }

            $setImageName = rand(). '.'. $image->getClientOriginalExtension();
            // set location of images
            $small_image_path = public_path('backend/uploads/students/'.$setImageName);
            // set image size
            Image::make($image)->resize('300','300')->save($small_image_path,100);
            // store the image
            $request['image'] = $setImageName;
        }

         $admission->update($request->except('_token', 'img', 'username', 'password'));
        return redirect()->back()->with('success', 'Student updated success !');

    }


    public function destroy(admission $admission)
    {
        //
    }

    public function dynamicFaculity(Request $request)
    {
        $departments = Department::where('faculty_id' ,$request->faculty_id)->get();
        if ($departments)
        {
            $output = "<option selected value=''>Select Department</option>";
            foreach ($departments as $department)
            {
                $output .= "<option value='$department->id'>$department->name</option>";
            }
            return response()->json(['department' => $output]);
        }else{
            return response()->json('false');
        }
    }

}
