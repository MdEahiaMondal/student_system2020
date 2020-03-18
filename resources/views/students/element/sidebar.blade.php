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
                        <li><a href="{{ route('student.profile') }}">Profile</a></li>
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
                <a href="{{ route('student.dashboard') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
            </li>

            <li class="{{ Request::is('student/profile') ? 'active' : '' }}">
                <a href="mailbox.html"><i class="fa fa-envelope"></i> <span class="nav-label">Profile </span><span class="label label-warning pull-right"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ route('student.profile') }}">Biodata</a></li>
                </ul>
            </li>
            <li class="{{ Request::is('student/profile') ? 'active' : '' }}">
                <a href="mailbox.html"><i class="fa fa-envelope"></i> <span class="nav-label">Lectures </span><span class="label label-warning pull-right"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ route('student.profile') }}">Choose Course</a></li>
                    <li><a href="{{ route('student.profile') }}">Academic Calender</a></li>
                    <li><a href="{{ route('student.profile') }}">Semester Activity</a></li>
                    <li><a href="{{ route('student.profile') }}">Exam Marks</a></li>
                </ul>
            </li>

        </ul>
    </div>
</nav>
