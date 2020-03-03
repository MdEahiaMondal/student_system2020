<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Semester;
use Illuminate\Http\Request;

class SemesterController extends Controller
{

    public function index()
    {
        $semiesters = Semester::all();
        return view('backend.semesters.index', compact('semiesters'));
    }


    public function create()
    {
       return view('backend.semesters.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'code' => 'required|unique:semesters,code',
            'duration' => 'required',
            'description' => 'required',
        ]);

        Semester::create($request->except('_token'));
        return redirect()->back()->with('success', 'Semeter created success !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Semester  $semester
     * @return \Illuminate\Http\Response
     */
    public function show(Semester $semester)
    {
        //
    }


    public function edit(Semester $semester)
    {
        return view('backend.semesters.edit', compact('semester'));
    }


    public function update(Request $request, Semester $semester)
    {
        $request->validate([
            'name' => 'required',
            'code' => 'required|unique:semesters,code,'.$semester->id,
            'duration' => 'required',
            'description' => 'required',
        ]);

        $semester->update($request->except('_token'));
        return redirect()->back()->with('success', 'Semeter updated success !');
    }


    public function destroy(Semester $semester)
    {
        $semester->delete();
        return redirect()->back()->with('success', 'Semeter deleted success !');

    }
}
