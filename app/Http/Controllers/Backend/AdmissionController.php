<?php

namespace App\Http\Controllers\Backend;

use App\admission;
use App\Batch;
use App\Department;
use App\Faculty;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{

    public function index()
    {
        $admissions = Admission::all();
        return view('backend.admissions.index', compact('admissions'));
    }


    public function create()
    {
        $faculties = Faculty::all();
        $departments = Department::all();
        $batches = Batch::all();
       return view('backend.admissions.create', compact('faculties', 'departments', 'batches'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function show(admission $admission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function edit(admission $admission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, admission $admission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function destroy(admission $admission)
    {
        //
    }
}
