@extends('backend.layouts.master')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Admissions</h2>
        </div>
        <div class="col-lg-2">
            <div class="ibox-tools">
                <a href="{{ route('admin.admission.create') }}" class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><i class="fa fa-plus"></i> <strong>Create</strong></a>
            </div>
        </div>
    </div>


    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-content">

                        <div class="row" style="margin-bottom: 10px">

                            <div class="col-sm-12">
                                <form action="{{ route('admin.admission.index') }}" method="get" class="form-inline" role="form">

                                    <div class="form-group">
                                        <div>Records Per Page</div>
                                        <select name="perPage" id="perPage" onchange="submit()" class="input-sm form-control" style="width: 115px;">
                                            <option value="10"{{ request('perPage') == 10 ? ' selected' : '' }}>10</option>
                                            <option value="25"{{ request('perPage') == 25 ? ' selected' : '' }}>25</option>
                                            <option value="50"{{ request('perPage') == 50 ? ' selected' : '' }}>50</option>
                                            <option value="100"{{ request('perPage') == 100 ? ' selected' : '' }}>100</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <br>
                                        <div class="input-group">
                                            <input name="keyword" type="text" value="{{ request('keyword') }}" class="input-sm form-control" placeholder="Search Here">
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn btn-sm btn-primary"> Go!</button>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>SI</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Nationality</th>
                                    <th>Gender</th>
                                    <th>Address</th>
                                    <th>Status</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($admissions as $admission)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $admission->first_name }}</td>
                                        <td>{{ $admission->last_name }}</td>
                                        <td>{{ $admission->email }}</td>
                                        <td>{{ $admission->phone }}</td>
                                        <td>{{ $admission->nationality }}</td>
                                        <td>{{ $admission->gender }}</td>
                                        <td>{{ $admission->address }}</td>
                                        <td>
                                            @if($admission->status == 1)
                                                <span class="badge badge-primary">Active</span>
                                            @else
                                                <span class="badge badge-danger">In-Active</span>
                                            @endif

                                        </td>
                                        <td class="text-center">

                                            <a href="{{ route('admin.admission.show', $admission->id) }}" title="Edit" class="btn btn-info cus_btn">
                                                <i class="fa fa-eye"></i> <strong>View</strong>
                                            </a>

                                            <a href="{{ route('admin.admission.edit', $admission->id) }}" title="Edit" class="btn btn-info cus_btn">
                                                <i class="fa fa-pencil-square-o"></i> <strong>Edit</strong>
                                            </a>

                                            <a onclick="deleteRow({{ $admission->id }})" href="JavaScript:void(0)" title="Delete" class="btn btn-danger cus_btn">
                                                <i class="fa fa-trash"></i> <strong>Delete</strong>
                                            </a>

                                            <form id="row-delete-form{{ $admission->id }}" method="POST" action="{{ route('admin.admission.destroy', $admission->id) }}" style="display: none" >
                                                @method('DELETE')
                                                @csrf()
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
