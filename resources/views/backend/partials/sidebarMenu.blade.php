<!-- Sidebar Menu -->
<ul class="sidebar-menu">

    <li class="header">Modules</li>

    @can('access_superadmin_panel')

        <li class="{{ Request::segment(1) == 'superadmin' ? 'active' : '' }}"><a href="/superadmin"><i class='fa fa-tachometer'></i><span>Activity</span></a></li>
        <li class="{{ Request::segment(1) == 'users' ? 'active' : '' }}"><a href="/users"><i class='fa fa-briefcase'></i><span>Users</span></a></li>
        <li class="{{ Request::segment(1) == 'companies' ? 'active' : '' }}"><a href="/companies"><i class='fa fa-building'></i><span>Companies</span></a></li>

    @endCan
    <!--
    <li class="treeview">
        <a href="#"><i class='fa fa-link'></i><span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
        </ul>
    </li>
    -->


</ul><!-- /.sidebar-menu -->