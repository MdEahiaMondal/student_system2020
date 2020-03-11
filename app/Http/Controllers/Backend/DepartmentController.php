<?php

namespace App\Http\Controllers\Backend;

use App\Department;
use App\Faculty;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::with('faculty')->get();
        return view('backend.departments.index', compact('departments'));
    }


    public function create()
    {
        $faculites = Faculty::all();
        return view('backend.departments.create', compact('faculites'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'code' => 'required',
            'description' => 'required',
        ]);

        $request['status'] = $request->status ?? 0;

        Department::create($request->except('_token'));
        return redirect()->back()->with('success', 'Department created success !');
    }


    public function show(Department $department)
    {
        //
    }


    public function edit(Department $department)
    {
        $faculites = Faculty::all();
        return view('backend.departments.edit', compact('department', 'faculites'));
    }


    public function update(Request $request, Department $department)
    {
        $request->validate([
            'name' => 'required',
            'code' => 'required',
            'description' => 'required',
        ]);

        $request['status'] = $request->status ?? 0;

        $department->update($request->except('_token'));
        return redirect()->back()->with('success', 'Department updated success !');
    }


    public function destroy(Department $department)
    {
        $department->delete();
        return redirect()->back()->with('success', 'Department deleted success !');
    }
}
