<?php

namespace App\Http\Controllers\Backend;

use App\Classe;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClasseController extends Controller
{

    public function index()
    {
        $classes = Classe::all();
        return view('backend.classes.index', compact('classes'));
    }


    public function create()
    {
        return view('backend.classes.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'class_name' => 'required',
            'class_code' => 'required|unique:classes,class_code',
        ]);
        Classe::create($request->except('_token'));
        return redirect()->back()->with('success', 'Class creted success !');
    }


    public function show(Classe $classe)
    {
        //
    }


    public function edit(Classe $classe)
    {
        return view('backend.classes.edit', compact('classe'));
    }


    public function update(Request $request, Classe $classe)
    {

        $request->validate([
            'class_name' => 'required',
            'class_code' => 'required|unique:classes,class_code,'.$classe->id,
        ]);

        $classe->update($request->except('_token'));

        return redirect()->back()->with('success', 'Class updated success !');

    }


    public function destroy(Classe $classe)
    {
        $classe->delete();
        return redirect()->back()->with('success', 'Class deleted success !');
    }
}
