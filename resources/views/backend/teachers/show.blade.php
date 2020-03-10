 @extends('backend.layouts.master')

@section('content')
     <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Teachers</h2>
        </div>
        <div class="col-lg-2">
            <div class="ibox-tools">
                <a href="{{ route('admin.teacher.index') }}" class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><i class="fa fa-indent"></i> <strong>Index</strong></a>
            </div>
        </div>
    </div>


 <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>Basic Table</h5>
                                    </div>
                                    <div class="ibox-content">

                                        <table class="table">
                                            <thead>

                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>First Name</th>
                                                    <td>{{ $teacher->first_name }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Last Name</th>
                                                    <td>{{ $teacher->last_name }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Email</th>
                                                    <td>{{ $teacher->email }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Phone</th>
                                                    <td>{{ $teacher->phone }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Gender</th>
                                                    <td>{{ $teacher->gender }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Date of Birth</th>
                                                    <td>{{ $teacher->dob }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Date Registered</th>
                                                    <td>{{ $teacher->dateregistered }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Notinality</th>
                                                    <td>{{ $teacher->nationality }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Passport</th>
                                                    <td>{{ $teacher->passport }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Address</th>
                                                    <td>{{ $teacher->address }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Image</th>
                                                    <td>
                                                        <img width="150" class="float-right" src="{{ asset('backend/uploads/teachers/'.$teacher->image) }}" alt="teacher image">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
