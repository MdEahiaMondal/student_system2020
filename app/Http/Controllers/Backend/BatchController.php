<?php

namespace App\Http\Controllers\Backend;

use App\Batch;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BatchController extends Controller
{

    public function index()
    {
        $batches = Batch::all();
        return view('backend.batches.index', compact('batches'));
    }


    public function create()
    {
        return view('backend.batches.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'batch' => 'required',
        ]);

        Batch::create($request->except('_token'));
        return redirect()->back()->with('success', 'Batch created success !');
    }


    public function show(Batch $batch)
    {
        //
    }


    public function edit(Batch $batch)
    {
        return view('backend.batches.edit', compact('batch'));
    }


    public function update(Request $request, Batch $batch)
    {
        $request->validate([
            'batch' => 'required',
        ]);

        $batch->update($request->except('_token'));
        return redirect()->back()->with('success', 'Batch updated success !');
    }


    public function destroy(Batch $batch)
    {
        $batch->delete();
        return redirect()->back()->with('success', 'Batch deleted success !');
    }
}
