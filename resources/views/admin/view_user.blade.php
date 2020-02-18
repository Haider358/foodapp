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
                        <h1 class="m-0 text-dark">View User/Coache</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">View User/Coache</h3>
                    @if(Session::has('error'))
                        <p class="alert alert-danger">{{ Session::get('error') }}</p>
                    @endif
                    @if(Session::has('success'))
                        <p class="alert alert-success">{{ Session::get('success') }}</p>
                    @endif
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                            <i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                                title="Remove">
                            <i class="fas fa-times"></i></button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                        <tr>
                            <th>
                                #
                            </th>
                            <th>
                                First Name
                            </th>
                            <th>
                                Last Name
                            </th>
                            <th>
                                Phone Number
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Action
                            </th>

                        </tr>
                        </thead>
                        <tbody>
                        @if($user)
                            @foreach($user as $row)
                                <tr>
                                    <td>
                                        {{$row->id}}
                                    </td>
                                    <td>

                                        {{$row->first_name}}

                                    </td>
                                    <td>
                                        {{$row->last_name}}
                                    </td>
                                    <td>
                                        {{$row->phone}}
                                    </td>
                                    <td>
                                        {{$row->email}}
                                    </td>
                                    <td>
                                        @if($row->status==1)<span class="alert alert-success">Active</span>
                                        @else <span class="alert alert-danger">Inactive</span> @endif
                                    </td>
                                    <td class="project-actions">
                                        <a class="btn btn-info btn-sm"
                                           @if($row->status==1) onclick="return confirm(' you want to inactive user?');"
                                           title="Inactive User"
                                           @else onclick="return confirm(' you want to active user?');"
                                           title="Active User"
                                           @endif href="{{route('active-inactive-user',encrypt($row->id))}}">
                                            <i class="@if($row->status==1)fa fa-eye-slash @else fas fa-eye @endif">
                                            </i>

                                        </a>
                                        <a class="btn btn-info btn-sm" href="{{route('edit-user',encrypt($row->id))}}">
                                            <i class="fas fa-pencil-alt">
                                            </i>

                                        </a>
                                        <a class="btn btn-danger btn-sm"
                                           onclick="return confirm(' you want to delete?');"
                                           href="{{route('delete-user',encrypt($row->id))}}">
                                            <i class="fas fa-trash">
                                            </i>

                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>


    </div>
@endsection
<!-- ./wrapper -->
@push('css')
    <link rel="stylesheet" href="{{ $admin_assets }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet"
          href="{{ $admin_assets }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ $admin_assets }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ $admin_assets }}/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ $admin_assets }}/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ $admin_assets }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ $admin_assets }}/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ $admin_assets }}/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
@endpush
<!-- jQuery -->
@push('js')
    <script src="{{ $admin_assets }}/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ $admin_assets }}/plugins/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ $admin_assets }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="{{ $admin_assets }}/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="{{ $admin_assets }}/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="{{ $admin_assets }}/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="{{ $admin_assets }}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ $admin_assets }}/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="{{ $admin_assets }}/plugins/moment/moment.min.js"></script>
    <script src="{{ $admin_assets }}/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ $admin_assets }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="{{ $admin_assets }}/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <!-- <script src="{{ $admin_assets }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> -->
    <!-- AdminLTE App -->
    <script src="{{ $admin_assets }}/dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ $admin_assets }}/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ $admin_assets }}/dist/js/demo.js"></script>
@endpush

