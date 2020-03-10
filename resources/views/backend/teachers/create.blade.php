@extends('backend.layouts.master')
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-8">
            <h2>Create Teacher</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('admin.teacher.index') }}">Teacher</a>
                </li>
                <li class="active">
                    <strong>Create</strong>
                </li>
            </ol>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{ route('admin.teacher.store') }}">
                           @csrf

                           @include('backend.teachers.element')

                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-10">
                                     <button class="btn btn-sm btn-primary pull-left m-t-n-xs" type="submit">
                                        <strong>Submit</strong>
                                     </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


