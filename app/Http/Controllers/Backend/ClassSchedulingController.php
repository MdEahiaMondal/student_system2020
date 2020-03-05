<?php

namespace App\Http\Controllers\Backend;

use App\Batch;
use App\Classe;
use App\ClassRoom;
use App\ClassScheduling;
use App\Course;
use App\Day;
use App\Http\Controllers\Controller;
use App\Level;
use App\Semester;
use App\Shift;
use App\teacher;
use App\Time;
use Illuminate\Http\Request;

class ClassSchedulingController extends Controller
{

    public function index()
    {
        $class_schedulings = ClassScheduling::with('classe', 'course', 'level',
            'shift', 'classRoom', 'batch', 'day', 'time', 'semester')->get();
        return view('backend.class_schedulings.index', compact('class_schedulings'));
    }


    public function create()
    {
        $classes = Classe::all();
        $courses = Course::all();
        $levels = Level::all();
        $shifts = Shift::all();
        $classrooms = ClassRoom::all();
        $batches = Batch::all();
        $days = Day::all();
        $times = Time::all();
        $semesters = Semester::all();

        return view('backend.class_schedulings.create', compact('classes','courses', 'levels',
            'shifts', 'classrooms', 'batches', 'days', 'times','semesters'));

    }


    public function store(Request $request)
    {
        $request->validate([
            'class_id' => 'required|integer',
            'course_id' => 'required|integer',
            'level_id' => 'required|integer',
            'shift_id' => 'required|integer',
            'classroom_id' => 'required|integer',
            'batch_id' => 'required|integer',
            'day_id' => 'required|integer',
            'time_id' => 'required|integer',
            'semester_id' => 'required|integer',
            'start_time' => 'required|date',
            'end_time' => 'required|date',
        ]);

        ClassScheduling::create($request->except('_token'));
        return redirect()->back()->with('success', 'Class Shedulinh created success !');
    }


    public function show(ClassScheduling $classScheduling)
    {
        //
    }


    public function edit(ClassScheduling $classScheduling)
    {
        $classes = Classe::all();
        $courses = Course::all();
        $levels = Level::all();
        $shifts = Shift::all();
        $classrooms = ClassRoom::all();
        $batches = Batch::all();
        $days = Day::all();
        $times = Time::all();
        $semesters = Semester::all();
        return view('backend.class_schedulings.edit', compact('classScheduling','classes','courses', 'levels',
            'shifts', 'classrooms', 'batches', 'days', 'times','semesters'));
    }



    public function update(Request $request, ClassScheduling $classScheduling)
    {
        $request->validate([
            'class_id' => 'required|integer',
            'course_id' => 'required|integer',
            'level_id' => 'required|integer',
            'shift_id' => 'required|integer',
            'classroom_id' => 'required|integer',
            'batch_id' => 'required|integer',
            'day_id' => 'required|integer',
            'time_id' => 'required|integer',
            'semester_id' => 'required|integer',
            'start_time' => 'required|date',
            'end_time' => 'required|date',
        ]);

        $classScheduling->update($request->except('_token'));
        return redirect()->back()->with('success', 'Class Shedulinh updated success !');
    }


    public function destroy(ClassScheduling $classScheduling)
    {
       $classScheduling->delete();
        return redirect()->back()->with('success', 'Class Shedulinh deleted success !');
    }



    public function dynamicLevel(Request $request)
    {
        $levels = Level::where('course_id' ,$request->course_id)->get();
        if ($levels)
        {
            $output = "<option selected value=''>Select Level</option>";
            foreach ($levels as $level)
            {
                $output .= "<option value='$level->id'>$level->level</option>";
            }
            return response()->json(['level' => $output]);
        }else{
            return response()->json('false');
        }
    }

}
