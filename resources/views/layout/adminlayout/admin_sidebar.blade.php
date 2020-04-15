<!--sidebar-menu-->
<div id="sidebar"><a href="{{url('/admin')}}" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
        <li><a href="{{url('/admin/dashboard')}}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>


        <li class="submenu "> <a href="#"><i class="icon icon-th-list"></i> <span>Home</span></a>
            <ul>
                <li><a href="/admin/Home/List">List Home Content</a></li>
            </ul>
        </li>


        <li class="submenu "> <a href="#"><i class="icon icon-th-list"></i> <span>Schedule</span></a>
            <ul>
                <li><a href="{{route('schedule.create')}}">Add New Schedule</a></li>
                <li><a href="/admin/schedule/List">List Schedule</a></li>
            </ul>
        </li>


        <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Ticket</span></a>
            <ul>
                <li><a href="/admin/Ticket/List">List Ticket</a></li>
            </ul>
        </li>

        <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>sponsor</span></a>
            <ul>
                <li><a href="{{route('Sponsor.create')}}">Add New Sponsor</a></li>
                <li><a href="/admin/sponsor/List">List Sponsor</a></li>
            </ul>
        </li>
        <li class="submenu "> <a href="#"><i class="icon icon-th-list"></i> <span>Paper</span></a>
            <ul>
                <li><a href="/admin/Paper/List"> Paper Submitted</a></li>
            </ul>
        </li>
        <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Template</span></a>
            <ul>
                <li><a href="{{route('template.index')}}">List Templates</a></li>
                <li><a href="{{route('template.create')}}">Create New Template</a></li>
            </ul>
        </li>
    </ul>
</div>
<!--sidebar-menu-->
