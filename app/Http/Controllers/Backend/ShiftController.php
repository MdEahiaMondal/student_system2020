<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Shift;
use Illuminate\Http\Request;

class ShiftController extends Controller
{
    public function index()
    {
        $shifts = Shift::all();
        return view('backend.shifts.index', compact('shifts'));
    }


    public function create()
    {
        return view('backend.shifts.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'shift' => 'required|string',
        ]);

        Shift::create($request->except('_token'));
        return redirect()->back()->with('success', 'Shift created success !');
    }


    public function show(Shift $shift)
    {
        //
    }


    public function edit(Shift $shift)
    {
        return view('backend.shifts.edit', compact('shift'));
    }


    public function update(Request $request, Shift $shift)
    {
        $request->validate([
            'shift' => 'required|string',
        ]);

        $shift->update($request->except('_token'));
        return redirect()->back()->with('success', 'Shift updated success !');
    }


    public function destroy(Shift $shift)
    {
        $shift->delete();
        return redirect()->back()->with('success', 'Shift deleted success !');
    }
}
