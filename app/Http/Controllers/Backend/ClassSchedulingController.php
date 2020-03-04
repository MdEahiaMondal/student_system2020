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
        $class_schedulings = ClassScheduling::all();
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

    /**
     * Display the specified resource.
     *
     * @param  \App\ClassScheduling  $classScheduling
     * @return \Illuminate\Http\Response
     */
    public function show(ClassScheduling $classScheduling)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ClassScheduling  $classScheduling
     * @return \Illuminate\Http\Response
     */
    public function edit(ClassScheduling $classScheduling)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ClassScheduling  $classScheduling
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClassScheduling $classScheduling)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ClassScheduling  $classScheduling
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClassScheduling $classScheduling)
    {
        //
    }
}
