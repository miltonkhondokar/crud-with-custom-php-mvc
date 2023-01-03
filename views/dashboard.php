<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CMVC</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

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
                    <div class="col-md-12">
                        <div class="card card-danger">
                            <div class="card-header">
                                <h3 class="card-title">Filter Data</h3>
                            </div>


                            <form id="sales_tracker_filter" method="post" action="<?php echo url('report_filter')?>" enctype="multipart/form-data">

                            <div class="card-body">

                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label>From Date:</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control"  id="from_date"   name="from_date" value="<?php echo (isset($_SESSION['from_date'])) ? $_SESSION['from_date'] : ''?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label>To Date:</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control"  id="to_date"   name="to_date"  value="<?php echo (isset($_SESSION['to_date'])) ? $_SESSION['to_date'] : ''?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label>User</label>
                                            <select class="form-control" name="entry_by">
                                                <option value="">- select -</option>
                                                <option value="020123" <?php echo (isset($_SESSION['entry_by']) && $_SESSION['entry_by'] == "020123") ? 'selected' : '' ?>>USER 1</option>
                                                <option value="030123"  <?php echo (isset($_SESSION['entry_by']) && $_SESSION['entry_by'] == "030123") ? 'selected' : '' ?>>USER 2</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>





                                </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success float-right" name="reset">Reset</button>
                                <button type="submit" class="btn btn-danger float-right" name="search"  style="margin-right: 20px;">Filter</button>
                            </div>
                            </form>
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
                                    <thead class="table-default">
                                    <tr>
                                        <th>#SL</th>
                                        <th>Buyer</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>City</th>
                                        <th>Receipt ID</th>
                                        <th>Item(s)</th>
                                        <th>Amount</th>
                                        <th>Entry At</th>
                                        <th>Entry By</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                        $i = 1;
                                        foreach ($data as $key=>$value)
                                        {
                                    ?>
                                        <tr class="<?php if($key%2 == 0){echo 'table-warning';}else{ echo 'table-info';}?>">
                                            <td><?php echo $i;?></td>
                                            <td><?php echo $value['buyer'];?></td>
                                            <td><?php echo $value['phone'];?></td>
                                            <td><?php echo $value['buyer_email'];?></td>
                                            <td><?php echo $value['city'];?></td>
                                            <td><?php echo $value['receipt_id'];?></td>
                                            <td><?php echo $value['items'];?></td>
                                            <td><?php echo $value['amount'];?></td>
                                            <td><?php echo $value['entry_at'];?></td>
                                            <td><?php echo $value['entry_by'];?></td>
                                        </tr>
                                    <?php  $i++; }?>
                                    </tbody>
                                    <tfoot class="table-default">
                                    <tr>
                                        <th>#SL</th>
                                        <th>Buyer</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>City</th>
                                        <th>Receipt ID</th>
                                        <th>Item(s)</th>
                                        <th>Amount</th>
                                        <th>Entry At</th>
                                        <th>Entry By</th>
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
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<!--<script src="--><?php //echo JS.'/jquery.min.js'?><!--"></script>-->
<!--<script src="--><?php //echo JS.'/jquery-ui.min.js'?><!--"></script>-->
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

<script>
    $( function() {
        $( "#from_date" ).datepicker({ dateFormat: 'yy-mm-dd' }).val();
        $( "#to_date" ).datepicker({ dateFormat: 'yy-mm-dd' }).val();
    } );
</script>
</body>
</html>
