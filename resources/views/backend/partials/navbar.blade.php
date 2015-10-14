<nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only" >Toggle navigation</span>
    </a>

    @if(Request::segment(1) == 'users')
    <ul class="nav navbar-nav">
        <li class="{{ Request::segment(1) == 'roles' ? 'active' : '' }}"><a href="/roles"><i class='fa fa-circle-thin'></i><span> Roles</span></a></li>
        <li class="{{ Request::segment(1) == 'permissions' ? 'active' : '' }}"><a href="/permissions"><i class='fa fa-key'></i><span> Permissions</span></a></li>
    </ul>
    @endif

    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

            @can('view_messages')
            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown messages-menu">
                <!-- Menu toggle button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-envelope-o"></i>
                    <span class="label label-success">4</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="header">You have 4 messages</li>
                    <li>
                        <!-- inner menu: contains the messages -->
                        <ul class="menu">
                            <li><!-- start message -->
                                <a href="#">
                                    <div class="pull-left">
                                        <!-- User Image -->
                                        <img src="backend/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
                                    </div>
                                    <!-- Message title and timestamp -->
                                    <h4>
                                        Support Team
                                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                    </h4>
                                    <!-- The message -->
                                    <p>Why not buy a new awesome theme?</p>
                                </a>
                            </li><!-- end message -->
                        </ul><!-- /.menu -->
                    </li>
                    <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
            </li><!-- /.messages-menu -->
            @endCan


            @can('view_notificatons')
            <!-- Notifications Menu -->
            <li class="dropdown notifications-menu">
                <!-- Menu toggle button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bell-o"></i>
                    <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="header">You have 10 notifications</li>
                    <li>
                        <!-- Inner Menu: contains the notifications -->
                        <ul class="menu">
                            <li><!-- start notification -->
                                <a href="#">
                                    <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                </a>
                            </li><!-- end notification -->
                        </ul>
                    </li>
                    <li class="footer"><a href="#">View all</a></li>
                </ul>
            </li>
            @endCan


            @can('view_tasks')
            <!-- Tasks Menu -->
            <li class="dropdown tasks-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-flag-o"></i>
                    <span class="label label-danger">9</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="header">You have 9 tasks</li>
                    <li>
                        <!-- Inner menu: contains the tasks -->
                        <ul class="menu">
                            <li><!-- Task item -->
                                <a href="#">
                                    <!-- Task title and progress text -->
                                    <h3>
                                        Design some buttons
                                        <small class="pull-right">20%</small>
                                    </h3>
                                    <!-- The progress bar -->
                                    <div class="progress xs">
                                        <!-- Change the css width attribute to simulate progress -->
                                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li><!-- end task item -->
                        </ul>
                    </li>
                    <li class="footer">
                        <a href="#">View all tasks</a>
                    </li>
                </ul>
            </li>
            @endCan


            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ gravatar_url(Auth::user()->email) }}" class="user-image" alt="User Image"/>
                    <span class="hidden-xs">{{ Auth::user()->name }} <span class="caret"></span></span>
                </a>
                <ul class="dropdown-menu" style="margin-top: 3px;margin-right: -2px;">
                    <li><a href="/auth/logout"><i class="fa fa-sign-out"></i> Signout</a></li>
                </ul>
            </li>
            <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-wrench"></i></a>
            </li>
        </ul>
    </div>
</nav>