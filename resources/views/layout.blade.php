<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from adminlte.io/themes/v3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 May 2024 05:15:42 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Dashboard</title>
    <base href="{{ asset('admin') }}/" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">

    <link rel="stylesheet" href="dist/css/adminlte.min2167.css?v=3.2.0">

    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">

    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

    @yield('customCss')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60"
                width="60">
        </div>

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('dashboard') }}" class="nav-link">Home</a>
                </li>

            </ul>

            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

            </ul>
        </nav>


        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <a href="{{ route('dashboard') }}" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">ToDo App</span>
            </a>

            <div class="sidebar">

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Admin</a>
                    </div>
                </div>

                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">


                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    To Do
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('add') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add To Do</p>
                                    </a>
                                </li>

                            </ul>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('view') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View To Do List</p>
                                    </a>
                                </li>

                            </ul>
                        </li>


                    </ul>
                </nav>

            </div>

        </aside>

        @yield('content')

        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io/">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>

        <aside class="control-sidebar control-sidebar-dark">

        </aside>

    </div>


    <script src="plugins/jquery/jquery.min.js"></script>

    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>

    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>

    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="plugins/chart.js/Chart.min.js"></script>

    <script src="plugins/sparklines/sparkline.js"></script>

    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>

    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>

    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

    <script src="plugins/summernote/summernote-bs4.min.js"></script>

    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

    <script src="dist/js/adminlte2167.js?v=3.2.0"></script>

    <script src="dist/js/demo.js"></script>

    <script src="dist/js/pages/dashboard.js"></script>

    @yield('customJs')
</body>

</html>
