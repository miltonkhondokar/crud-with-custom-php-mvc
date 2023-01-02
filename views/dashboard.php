
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CMVC</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="<?php echo CSS.'/dataTables.bootstrap4.min.css' ?>">
    <link rel="stylesheet" href="<?php echo CSS.'/responsive.bootstrap4.min.css' ?>">
    <link rel="stylesheet" href="<?php echo CSS.'/buttons.bootstrap4.min.css' ?>">
    <link rel="stylesheet" href="<?php echo CSS.'/ionicons.min.css' ?>">
    <link rel="stylesheet" href="<?php echo CSS.'/tempusdominus-bootstrap-4.min.css' ?>">
    <link rel="stylesheet" href="<?php echo CSS.'/icheck-bootstrap.min.css' ?>">
    <link rel="stylesheet" href="<?php echo CSS.'/jqvmap.min.css' ?>">
    <link rel="stylesheet" href="<?php echo CSS.'/adminlte.min.css' ?>">
    <link rel="stylesheet" href="<?php echo CSS.'/OverlayScrollbars.min.css' ?>">
    <link rel="stylesheet" href="<?php echo CSS.'/daterangepicker.css' ?>">
    <link rel="stylesheet" href="<?php echo CSS.'/summernote-bs4.min.css' ?>">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
        </ul>
    </nav>

    <aside class="main-sidebar sidebar-dark-primary elevation-4">

        <a href="#" class="brand-link">
            <img src="#" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-bolder">SALES TRACKER</span>
        </a>

        <div class="sidebar">

            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                    <li class="nav-item">
                        <a href="<?php echo url('sales-form')?>" class="nav-link">
                            <i class="nav-icon far fa-circle text-warning"></i>
                            <p>Add Sales</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo url('dashboard')?>" class="nav-link">
                            <i class="nav-icon far fa-circle text-warning"></i>
                            <p>All Sales</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>



    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">


                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>150</h3>
                                <p>New Orders</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>53<sup style="font-size: 20px">%</sup></h3>

                                <p>Sales Today</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>44</h3>

                                <p>User Registrations</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>65</h3>

                                <p>Unique Visitors</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>









                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Sales Info</h3>
                            </div>
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead class="table-danger">
                                    <tr>
                                        <th>Rendering engine</th>
                                        <th>Browser</th>
                                        <th>Platform(s)</th>
                                        <th>Engine version</th>
                                        <th>CSS grade</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="table-warning">
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 4.0
                                            </td>
                                            <td>Win 95+</td>
                                            <td> 4</td>
                                            <td>X</td>
                                        </tr>
                                        <tr class="table-info">
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 5.0
                                            </td>
                                            <td>Win 95+</td>
                                            <td>5</td>
                                            <td>C</td>
                                        </tr>
                                    </tbody>
                                    <tfoot class="table-danger">
                                    <tr>
                                        <th>Rendering engine</th>
                                        <th>Browser</th>
                                        <th>Platform(s)</th>
                                        <th>Engine version</th>
                                        <th>CSS grade</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>











            </div>
        </section>
    </div>




    <footer class="main-footer">
        <strong>Copyright &copy; 2022-2023 <a href="https://www.linkedin.com/in/mekhondokar">milton khondokar</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 1.2.0
        </div>
    </footer>
</div>

<script src="<?php echo JS.'/jquery.min.js'?>"></script>
<script src="<?php echo JS.'/jquery-ui.min.js'?>"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo JS.'/bootstrap.bundle.min.js'?>"></script>
<script src="<?php echo JS.'/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo JS.'/dataTables.bootstrap4.min.js'?>"></script>
<script src="<?php echo JS.'/dataTables.responsive.min.js'?>"></script>
<script src="<?php echo JS.'/responsive.bootstrap4.min.js'?>"></script>
<script src="<?php echo JS.'/dataTables.buttons.min.js'?>"></script>
<script src="<?php echo JS.'/buttons.bootstrap4.min.js'?>"></script>
<script src="<?php echo JS.'/jszip.min.js'?>"></script>
<script src="<?php echo JS.'/pdfmake.min.js'?>"></script>
<script src="<?php echo JS.'/vfs_fonts.js'?>"></script>
<script src="<?php echo JS.'/buttons.html5.min.js'?>"></script>
<script src="<?php echo JS.'/buttons.print.min.js'?>"></script>
<script src="<?php echo JS.'/buttons.colVis.min.js'?>"></script>
<!-- daterangepicker -->
<script src="<?php echo JS.'/moment.min.js'?>"></script>
<script src="<?php echo JS.'/daterangepicker.js'?>"></script>
<!-- overlayScrollbars -->
<script src="<?php echo JS.'/jquery.overlayScrollbars.min.js'?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo JS.'/adminlte.js'?>"></script>


<script>
    $(function () {
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
</body>
</html>
