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

     <div class="wrapper wrapper-content">
         <div class="row">
             <div class="col-lg-3">
                 <div class="ibox float-e-margins">
                     <div class="ibox-content mailbox-content">
                         <div class="file-manager">
                             <div class="ibox-content no-padding border-left-right">
                                 <img class="img-responsive"  src="{{ asset('backend/uploads/teachers/'.$teacher->image) }}" alt="teacher image">
                             </div>
                             <div class="space-25"></div>
                             <h5>Folders</h5>
                             <ul class="folder-list m-b-md" style="padding: 0">
                                 <li><a href="mailbox.html"> <i class="fa fa-inbox "></i> Inbox <span class="label label-warning pull-right">16</span> </a></li>
                                 <li><a href="mailbox.html"> <i class="fa fa-envelope-o"></i> Send Mail</a></li>
                                 <li><a href="mailbox.html"> <i class="fa fa-certificate"></i> Important</a></li>
                                 <li><a href="mailbox.html"> <i class="fa fa-file-text-o"></i> Drafts <span class="label label-danger pull-right">2</span></a></li>
                                 <li><a href="mailbox.html"> <i class="fa fa-trash-o"></i> Trash</a></li>
                             </ul>
                             <h5>Categories</h5>
                             <ul class="category-list" style="padding: 0">
                                 <li><a href="#"> <i class="fa fa-circle text-navy"></i> Work </a></li>
                                 <li><a href="#"> <i class="fa fa-circle text-danger"></i> Documents</a></li>
                                 <li><a href="#"> <i class="fa fa-circle text-primary"></i> Social</a></li>
                                 <li><a href="#"> <i class="fa fa-circle text-info"></i> Advertising</a></li>
                                 <li><a href="#"> <i class="fa fa-circle text-warning"></i> Clients</a></li>
                             </ul>

                             <h5 class="tag-title">Labels</h5>
                             <ul class="tag-list" style="padding: 0">
                                 <li><a href=""><i class="fa fa-tag"></i> Family</a></li>
                                 <li><a href=""><i class="fa fa-tag"></i> Work</a></li>
                                 <li><a href=""><i class="fa fa-tag"></i> Home</a></li>
                                 <li><a href=""><i class="fa fa-tag"></i> Children</a></li>
                                 <li><a href=""><i class="fa fa-tag"></i> Holidays</a></li>
                                 <li><a href=""><i class="fa fa-tag"></i> Music</a></li>
                                 <li><a href=""><i class="fa fa-tag"></i> Photography</a></li>
                                 <li><a href=""><i class="fa fa-tag"></i> Film</a></li>
                             </ul>
                             <div class="clearfix"></div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-lg-9 animated fadeInRight">
                 <div class="mail-box-header">
                     <h2>
                         Profile
                     </h2>
                 </div>
                 <div class="mail-box">

                     <table class="table table-hover table-mail">
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
                         </tbody>
                     </table>


                 </div>
             </div>
         </div>
     </div>


@endsection
