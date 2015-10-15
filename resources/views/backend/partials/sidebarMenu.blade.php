<!-- Sidebar Menu -->
<ul class="sidebar-menu">

    <li class="header">Modules</li>

    @can('access_superadmin_panel')

        <li class="{{ Request::segment(2) == 'home' ? 'active' : '' }}"><a href="/superadmin/home"><i class='fa fa-tachometer'></i><span>Activity</span></a></li>
        <li class="{{ Request::segment(2) == 'ecosystem' ? 'active' : '' }}"><a href="/superadmin/ecosystem"><i class='fa fa-globe'></i><span>Ecosystem</span></a></li>

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