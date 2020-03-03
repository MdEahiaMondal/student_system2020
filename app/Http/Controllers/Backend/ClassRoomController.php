<?php

namespace App\Http\Controllers\Backend;

use App\ClassRoom;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClassRoomController extends Controller
{

    public function index()
    {
        $class_rooms = ClassRoom::all();
       return view('backend.class_rooms.index', compact('class_rooms'));
    }


    public function create()
    {
        return view('backend.class_rooms.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'classroom_name' => 'required',
            'classroom_code' => 'required|integer',
            'classroom_description' => 'required',
            'classroom_status' => 'required',
        ]);

        ClassRoom::create($request->except('_token'));
        return redirect()->back()->with('success', 'Class Room  created success !');

    }


    public function show(ClassRoom $classRoom)
    {
        //
    }



    public function edit(ClassRoom $classRoom)
    {
       return  view('backend.class_rooms.edit', compact('classRoom'));
    }


    public function update(Request $request, ClassRoom $classRoom)
    {
        $request->validate([
            'classroom_name' => 'required',
            'classroom_code' => 'required|integer',
            'classroom_description' => 'required',
            'classroom_status' => 'required',
        ]);

        $classRoom->update($request->except('_token'));
        return redirect()->back()->with('success', 'Class Room  updated success !');
    }


    public function destroy(ClassRoom $classRoom)
    {
        $classRoom->delete();
        return redirect()->back()->with('success', 'Class Room  deleted success !');

    }
}
