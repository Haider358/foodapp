@extends('admin/master_layout')
@section('data')


    <!-- Main Sidebar Container -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Add User</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @if(Session::has('error'))
                    <p class="alert alert-danger">{{ Session::get('error') }}</p>
                @endif
                @if(Session::has('success'))
                    <p class="alert alert-success">{{ Session::get('success') }}</p>
                @endif
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">

                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="post" id="validate_form" action="{{route('post-user')}}">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="firstname">First Name</label>
                                                <input type="text" value="{{$user->first_name ?? ''}}" required
                                                       data-parsley-trigger="keyup" id="first_name" name="first_name"
                                                       class="form-control" placeholder="First name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="lastname">Last Name</label>
                                                <input type="text" value="{{$user->last_name ?? ''}}" id="last_name"
                                                       required="" name="last_name" class="form-control"
                                                       placeholder="Last name">
                                            </div>
                                        </div>
                                        <input type="hidden" name="id" value="{{$user->id ?? ''}}">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="phone">Phone Number</label>
                                                <input type="number" name="phone" value="{{$user->phone ?? ''}}"
                                                       id="phone" required="" class="form-control"
                                                       placeholder="Phone number">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" name="email" value="{{$user->email ?? ''}}"
                                                       id="email" required="" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="password" class="form-control" id="password"
                                                       @if(isset($user)) @else required="" @endif name="password"
                                                       placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="Confirmpassword">Confirm password</label>
                                                <input type="password" class="form-control" id="confirm_password"
                                                       data-parsley-equalto="#password"
                                                       @if(isset($user)) @else  required=""
                                                       @endisset name="confirm_password" placeholder="Confirm password">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="usertype">User Type</label>
                                                <select class="form-control" required="" id="user_type"
                                                        name="user_type">
                                                    <option value="">Select User</option>
                                                    <option value="User">User</option>
                                                    <option value="Coache">Coache</option>
                                                </select>
                                            <!-- <input type="password" class="form-control" id="confirm_password" data-parsley-equalto="#password" @if(isset($user)) @else  required="" @endisset name="confirm_password" placeholder="Confirm password"> -->
                                            </div>
                                        </div>

                                        <!-- /.card-body -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <br>
                                                <div class="card-footer"
                                                     style="background-color:unset !important; float: right;">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>


                                        </div>
                            </form>
                        </div>
                        <!-- /.card -->

                        <!-- Form Element sizes -->

                    </div>
                    <div class="form-group">
                    </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
    </div>
    <!--/.col (right) -->
    </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
    </section>
    </div>
@endsection
<!-- ./wrapper -->
@push('css')
    <style type="text/css">
        <
        style >
        .box {
            width: 100%;
            max-width: 600px;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 16px;
            margin: 0 auto;
        }

        input.parsley-success,
        select.parsley-success,
        textarea.parsley-success {
            color: #468847;
            background-color: #DFF0D8;
            border: 1px solid #D6E9C6;
        }

        input.parsley-error,
        select.parsley-error,
        textarea.parsley-error {
            color: #B94A48;
            background-color: #F2DEDE;
            border: 1px solid #EED3D7;
        }

        .parsley-errors-list {
            margin: 2px 0 3px;
            padding: 0;
            list-style-type: none;
            font-size: 0.9em;
            line-height: 0.9em;
            opacity: 0;

            transition: all .3s ease-in;
            -o-transition: all .3s ease-in;
            -moz-transition: all .3s ease-in;
            -webkit-transition: all .3s ease-in;
        }

        .parsley-errors-list.filled {
            opacity: 1;
        }

        .parsley-type, .parsley-required, .parsley-equalto {
            color: #ff0000;
        }

    </style>
    </

    style

    >
    <
    link rel

    =
    "stylesheet"
    href

    =
    "
    {{ $admin_assets }}
    /plugins/fontawesome-free/css/all.min.css"
    >

    <!--
    Ionicons

    -->
    <
    link rel

    =
    "stylesheet"
    href

    =
    "https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"
    >

    <!--
    Tempusdominus Bbootstrap

    4
    -->
    <
    link rel

    =
    "stylesheet"
    href

    =
    "
    {{ $admin_assets }}
    /plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"
    >

    <!--
    iCheck

    -->
    <
    link rel

    =
    "stylesheet"
    href

    =
    "
    {{ $admin_assets }}
    /plugins/icheck-bootstrap/icheck-bootstrap.min.css"
    >

    <!--
    JQVMap

    -->
    <
    link rel

    =
    "stylesheet"
    href

    =
    "
    {{ $admin_assets }}
    /plugins/jqvmap/jqvmap.min.css"
    >

    <!--
    Theme style

    -->
    <
    link rel

    =
    "stylesheet"
    href

    =
    "
    {{ $admin_assets }}
    /dist/css/adminlte.min.css"
    >

    <!--
    overlayScrollbars

    -->
    <
    link rel

    =
    "stylesheet"
    href

    =
    "
    {{ $admin_assets }}
    /plugins/overlayScrollbars/css/OverlayScrollbars.min.css"
    >

    <!--
    Daterange picker

    -->
    <
    link rel

    =
    "stylesheet"
    href

    =
    "
    {{ $admin_assets }}
    /plugins/daterangepicker/daterangepicker.css"
    >

    <!--
    summernote

    -->
    <
    link rel

    =
    "stylesheet"
    href

    =
    "
    {{ $admin_assets }}
    /plugins/summernote/summernote-bs4.css"
    >

    <!--
    Google Font: Source Sans Pro

    -->
    <
    link href

    =
    "https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700"
    rel

    =
    "stylesheet"
    >

@endpush

<!--
    jQuery

    -->
@push('js')


    <
    script src

    =
    "
    {{ $admin_assets }}
    /plugins/jquery/jquery.min.js"
    > <

    /
    script >

    <!--
    jQuery UI

    1.11
    .4
    -->
    <
    script src

    =
    "
    {{ $admin_assets }}
    /plugins/plugins/jquery-ui/jquery-ui.min.js"
    > <

    /
    script >

    <!--
    Resolve conflict in jQuery UI tooltip with Bootstrap tooltip

    -->
    <
    script >
    $ .widget.

    bridge
    (
    'uibutton'
    ,
    $
    .ui.button

    )
    <
    /
    script >

    <!--
    Bootstrap

    4
    -->
    <
    script src

    =
    "
    {{ $admin_assets }}
    /plugins/bootstrap/js/bootstrap.bundle.min.js"
    > <

    /
    script >

    <!--
    ChartJS

    -->
    <
    script src

    =
    "
    {{ $admin_assets }}
    /plugins/chart.js/Chart.min.js"
    > <

    /
    script >

    <!--
    Sparkline

    -->
    <
    script src

    =
    "
    {{ $admin_assets }}
    /plugins/sparklines/sparkline.js"
    > <

    /
    script >

    <!--
    JQVMap

    -->
    <
    script src

    =
    "
    {{ $admin_assets }}
    /plugins/jqvmap/jquery.vmap.min.js"
    > <

    /
    script >
    < script src

    =
    "
    {{ $admin_assets }}
    /plugins/jqvmap/maps/jquery.vmap.usa.js"
    > <

    /
    script >

    <!--
    jQuery Knob Chart

    -->
    <
    script src

    =
    "
    {{ $admin_assets }}
    /plugins/jquery-knob/jquery.knob.min.js"
    > <

    /
    script >

    <!--
    daterangepicker

    -->
    <
    script src

    =
    "
    {{ $admin_assets }}
    /plugins/moment/moment.min.js"
    > <

    /
    script >
    < script src

    =
    "
    {{ $admin_assets }}
    /plugins/daterangepicker/daterangepicker.js"
    > <

    /
    script >

    <!--
    Tempusdominus Bootstrap

    4
    -->
    <
    script src

    =
    "
    {{ $admin_assets }}
    /plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"
    > <

    /
    script >

    <!--
    Summernote

    -->
    <
    script src

    =
    "
    {{ $admin_assets }}
    /plugins/summernote/summernote-bs4.min.js"
    > <

    /
    script >

    <!--
    overlayScrollbars

    -->
    <!--
    <
    script src

    =
    "
    {{ $admin_assets }}
        /plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"
        > <

        /
        script >

-->
    <!--
    AdminLTE App

    -->
    <
    script src

    =
    "
    {{ $admin_assets }}
    /dist/js/adminlte.js"
    > <

    /
    script >

    <!--
    AdminLTE dashboard demo

    (
    This is only for demo purposes

    )
    -->
    <
    script src

    =
    "
    {{ $admin_assets }}
    /dist/js/pages/dashboard.js"
    > <

    /
    script >

    <!--
    AdminLTE for demo purposes

    -->
    <
    script src

    =
    "
    {{ $admin_assets }}
    /dist/js/demo.js"
    > <

    /
    script >
    < script src

    =
    "http://parsleyjs.org/dist/parsley.js"
    > <

    /
    script >
    < script >
    $

    (
    document

    )
    .

    ready
    (
    function
    (
    )
    {
    $('#validate_form'
    )
    .
    parsley
    (
    )
    ;
    }
    )
    ;
    @isset($user)

        $
        (
        '#user_type'
        )
        .

        val
        (
        '
        {{$user->user_type}}
        '
        )
        ;
    @endisset

    <
    /
    script >
@endpush

