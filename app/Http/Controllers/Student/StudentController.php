<?php

namespace App\Http\Controllers\Student;

use App\Admission;
use App\Http\Controllers\Controller;
use App\Roll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{


    public function index()
    {
        return view('students.dashboard.index');
    }


    public function showLoginPage()
    {
        return view('backend.students.login');
    }
    public function studentLogin(Request $request)
    {
        $checkUser = Roll::where(['username' => $request->username, 'password' => $request->password])->first();
        if ($checkUser)
        {
            $student_info = Admission::where('id', $checkUser->student_id)->first();
            Session::put('studentSession', $student_info);
            return redirect('student/dashboard')->with('success', 'You are now login');
        }else{
            return redirect('student')->with('error', 'username or password is wrong !');
        }
    }

    public function studentAccount()
    {
        if (!empty(Session::has('studentSession')))
        {
            $student_info = Session::get('studentSession');
            return view('backend.students.dashboard');
        }else{
            return redirect('student')->with('success', 'Please first need to login !');
        }
    }


    public function profile()
    {
        $student = Session::get('studentSession');
        return view('students.profiles.index', compact('student'));
    }


    public function chooseCourse()
    {

    }

    public function lectureCalender()
    {

    }

    public function lectureActivity()
    {

    }

    public function examMark()
    {

    }



}
