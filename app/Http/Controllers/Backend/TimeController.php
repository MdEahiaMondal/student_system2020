<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Time;
use Illuminate\Http\Request;

class TimeController extends Controller
{

    public function index()
    {
        $times = Time::all();
        return view('backend.times.index', compact('times'));
    }


    public function create()
    {
        return view('backend.times.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'time' => 'required|string',
        ]);

        Time::create($request->except('_token'));
        return redirect()->back()->with('success', 'Time created success !');
    }


    public function show(Time $time)
    {
        //
    }


    public function edit(Time $time)
    {
       return view('backend.times.edit', compact('time'));
    }


    public function update(Request $request, Time $time)
    {
        $request->validate([
            'time' => 'required|string',
        ]);

        $time->update($request->except('_token'));
        return redirect()->back()->with('success', 'Time updated success !');
    }


    public function destroy(Time $time)
    {
        $time->delete();
        return redirect()->back()->with('success', 'Time deleted success !');
    }
}
