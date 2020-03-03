<?php

namespace App\Http\Controllers\Backend;

use App\Day;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DayController extends Controller
{
    public function index()
    {
        $days = Day::all();
        return view('backend.days.index', compact('days'));
    }


    public function create()
    {
        return view('backend.days.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Day::create($request->except('_token'));
        return redirect()->back()->with('success', 'Day created success !');
    }


    public function show(Day $day)
    {
        //
    }


    public function edit(Day $day)
    {
        return view('backend.days.edit', compact('day'));
    }


    public function update(Request $request, Day $day)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $day->update($request->except('_token'));
        return redirect()->back()->with('success', 'Day updated success !');
    }


    public function destroy(Day $day)
    {
        $day->delete();
        return redirect()->back()->with('success', 'Day deleted success !');
    }
}
