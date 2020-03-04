<?php

namespace App\Http\Controllers\Backend;

use App\Course;
use App\Http\Controllers\Controller;
use App\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{

    public function index()
    {
        $levels = Level::all();
        return view('backend.levels.index', compact('levels'));
    }


    public function create()
    {
        $courses = Course::all();
        return view('backend.levels.create', compact('courses'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'level' => 'required',
            'course_id' => 'required|integer',
            'level_description' => 'required',
        ]);

        Level::create($request->except('_token'));
        return redirect()->back()->with('success', 'Level created success !');
    }


    public function show(Level $level)
    {
        //
    }


    public function edit(Level $level)
    {
        $courses = Course::all();
        return view('backend.levels.edit', compact('level', 'courses'));
    }


    public function update(Request $request, Level $level)
    {
        $request->validate([
            'level' => 'required',
            'course_id' => 'required|integer',
            'level_description' => 'required',
        ]);

        $level->update($request->except('_token'));
        return redirect()->back()->with('success', 'Level updated success !');
    }


    public function destroy(Level $level)
    {
        $level->delete();
        return redirect()->back()->with('success', 'Level deleted success !');
    }
}
