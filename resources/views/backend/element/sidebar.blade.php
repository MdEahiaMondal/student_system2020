<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="{{url('backend/img/profile_small.jpg')}}" />
                             </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">David Williams</strong>
                             </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="#0">Profile</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="mailbox.html">Mailbox</a></li>
                        <li class="divider"></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Log out
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li>
                <a href="{{ route('admin.admin.home') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
            </li>

            <li>
                <a href="mailbox.html"><i class="fa fa-envelope"></i> <span class="nav-label">General </span><span class="label label-warning pull-right">10</span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ route('admin.classe.index') }}">Classe</a></li>
                    <li><a href="{{ route('admin.class_room.index') }}">Class Room</a></li>
                    <li><a href="mailbox.html">Levels</a></li>
                    <li><a href="{{ route('admin.batch.index') }}">Batches</a></li>
                    <li><a href="mailbox.html">Shifts</a></li>
                    <li><a href="{{ route('admin.course.index') }}">Courses</a></li>
                    <li><a href="mailbox.html">Faculities</a></li>
                    <li><a href="mailbox.html">Times</a></li>
                    <li><a href="{{ route('admin.academic.index') }}">Academics</a></li>
                    <li><a href="{{ route('admin.day.index') }}">Days</a></li>
                    <li><a href="{{ route('admin.semester.index') }}">Semisters</a></li>
                </ul>
            </li>
            <li>
                <a href="mailbox.html"><i class="fa fa-envelope"></i> <span class="nav-label">Schedul </span><span class="label label-warning pull-right">2</span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="mailbox.html">Class Assignings</a></li>
                    <li><a href="mailbox.html">Class Schedulings</a></li>
                </ul>
            </li>

            <li>
                <a href="#0"><i class="fa fa-th-large"></i> <span class="nav-label">Admissions</span></a>
            </li>

            <li>
                <a href="#0"><i class="fa fa-th-large"></i> <span class="nav-label">Teachesrs</span></a>
            </li>
            <li>
                <a href="#0"><i class="fa fa-th-large"></i> <span class="nav-label">Attendances</span></a>
            </li>
            <li>
                <a href="{{ route('admin.role.index') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Roles</span></a>
            </li>
            <li>
                <a href="#0"><i class="fa fa-th-large"></i> <span class="nav-label">Users</span></a>
            </li>
            <li>
                <a href="#0"><i class="fa fa-th-large"></i> <span class="nav-label">Transactions</span></a>
            </li>

        </ul>
    </div>
</nav>
