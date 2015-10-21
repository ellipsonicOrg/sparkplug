<!-- Sidebar Menu -->
<ul class="sidebar-menu">

    <li><a href="{{ URL::route( Auth::user()->roles[0]['name'] ) }}"><i class='fa fa-home'></i><span>Home</span></a></li>

    <li class="header">Modules</li>

    {!! $modules !!}

</ul><!-- /.sidebar-menu -->