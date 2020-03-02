<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\role;
use Illuminate\Http\Request;

class RoleController extends Controller
{

    public function index()
    {
        $roles = role::all();
        return view('backend.roles.index', compact('roles'));
    }


    public function create()
    {
        return view('backend.roles.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Role::create($request->except('_token'));
        return redirect()->back()->with('success', 'Role created success ! ');

    }


    public function show(role $role)
    {
        //
    }


    public function edit(role $role)
    {
        return view('backend.roles.edit', compact('role'));
    }


    public function update(Request $request, role $role)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $role->update($request->except('_token'));
        return redirect()->back()->with('success', 'Role updated success ! ');
    }


    public function destroy(role $role)
    {
        $role->delete();
        return redirect()->back()->with('success', 'Role deleted success ! ');
    }
}
