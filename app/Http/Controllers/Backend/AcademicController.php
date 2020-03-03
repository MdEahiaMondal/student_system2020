<?php

namespace App\Http\Controllers\Backend;

use App\Academic;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AcademicController extends Controller
{

    public function index()
    {
        $academic_years = Academic::all();
        return view('backend.academics.index', compact('academic_years'));
    }


    public function create()
    {
        return view('backend.academics.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'academic_year' => 'required',
        ]);

        Academic::create($request->except('_token'));
        return redirect()->back()->with('success', 'Academic Year created success !');
    }


    public function show(Academic $academic)
    {
        //
    }


    public function edit(Academic $academic)
    {
        return view('backend.academics.edit', compact('academic'));
    }


    public function update(Request $request, Academic $academic)
    {
        $request->validate([
            'academic_year' => 'required',
        ]);

        $academic->update($request->except('_token'));
        return redirect()->back()->with('success', 'Academic Year updated success !');
    }


    public function destroy(Academic $academic)
    {
        $academic->delete();
        return redirect()->back()->with('success', 'Academic Year deleted success !');
    }
}
