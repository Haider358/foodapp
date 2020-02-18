<html>
<head>
    <title>Dashboard</title>
    @stack('css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>

        </ul>

        <!-- SEARCH FORM -->


        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->

            <!-- Notifications Dropdown Menu -->

            <li class="nav-item">
                <a class="nav-link" data-slide="true" href="{{route('logout')}}">
                    Logout
                </a>
            </li>
        </ul>

    </nav>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{url('admin/dashboard')}}" class="brand-link">
            <img src="{{ $admin_assets }}/dist/img/AdminLTELogo.png" class="brand-image img-circle elevation-3"
                 style="opacity: .8">

            <span
                class="brand-text font-weight-light">{{Auth::guard('admins')->User()->first_name.' '.Auth::guard('admins')->User()->last_name}}</span>
        </a>
        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ $admin_assets }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                         alt="User Image">
                </div>

            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview menu-open">
                        <a href="{{url('admin/dashboard')}}" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard

                            </p>
                        </a>

                    </li>


                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Users Management
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('view-all-user')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>View All User</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('view-all-coache')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>View All Coache</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('ad-user')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add New User/Coache</p>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-credit-card"></i>
                            <p>
                                Payment Management
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('view-all-user')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>View All Payment</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('ad-user')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Pending Payment</p>
                                </a>
                            </li>

                        </ul>
                    </li>

            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
    <!-- /.navbar -->
@yield('data')
@stack('js')
</body>
</html>
