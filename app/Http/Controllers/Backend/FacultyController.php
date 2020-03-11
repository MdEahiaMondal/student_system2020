<?php

namespace App\Http\Controllers\Backend;

use App\Faculty;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FacultyController extends Controller
{

    public function index()
    {
        $faculites = Faculty::all();
        return view('backend.faculites.index', compact('faculites'));
    }


    public function create()
    {
        return view('backend.faculites.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'code' => 'required',
            'description' => 'required',
        ]);

        $request['status'] = $request->status ?? 0;

        Faculty::create($request->except('_token'));
        return redirect()->back()->with('success', 'Faculty created success !');
    }


    public function show(Faculty $faculty)
    {
        //
    }


    public function edit(Faculty $faculty)
    {
        return view('backend.faculites.edit', compact('faculty'));
    }


    public function update(Request $request, Faculty $faculty)
    {
        $request->validate([
            'name' => 'required',
            'code' => 'required',
            'description' => 'required',
        ]);

        $request['status'] = $request->status ?? 0;

        $faculty->update($request->except('_token'));
        return redirect()->back()->with('success', 'Faculty updated success !');
    }


    public function destroy(Faculty $faculty)
    {
        $faculty->delete();
        return redirect()->back()->with('success', 'Faculty deleted success !');
    }
}
