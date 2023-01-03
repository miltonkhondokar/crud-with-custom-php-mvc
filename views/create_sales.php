
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>
    <style>
        .has-error .help-block {
            color: red;
        }
    </style>
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
                            <li class="breadcrumb-item active">New Sales</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>




        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">

                        <div class="alert alert-danger alert-dismissible" id="alert-show" style="display: none;">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                            You can again submit this form after 24 hours
                        </div>

                        <div class="alert alert-success alert-dismissible"  id="success-show"  style="display: none;">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h5><i class="icon fas fa-check"></i> Success</h5>
                            Data inserted successfully.
                        </div>





                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">New Sales</h3>
                            </div>
                            <form id="sales_tracker" method="post" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="label_for_sales_by">Entry By</label>
                                                <select class="form-control" name="entry_by">
                                                    <option value="">- select -</option>
                                                    <option value="020123">USER 1</option>
                                                    <option value="030123">USER 2</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="label_for_buyer_name">Buyer</label>
                                                <input type="text" class="form-control" id="buyer" name="buyer" value="" placeholder="Enter Buyer Name">
                                            </div>
                                            <div class="form-group">
                                                    <label for="label_for_buyer_phone">Phone</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="phone_prefix">880</span>
                                                        </div>
                                                        <input type="text" class="form-control" id="phone"  name="phone" value="" placeholder="17xxxxxxxx">
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="label_for_buyer_email">Email</label>
                                                <input type="email" class="form-control" id="buyer_email"  name="buyer_email"  value="" placeholder="Enter Buyer Email">
                                            </div>
                                            <div class="form-group">
                                                <label for="label_for_buyer_city">City</label>
                                                <select class="form-control" name="city">
                                                    <option value="">- select -</option>
                                                    <option value="DHK">Dhaka</option>
                                                    <option value="RAJ">Rajshahi</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="label_for_receipt_id">Receipt ID</label>
                                                <input type="text" class="form-control" id="receipt_id"  name="receipt_id"  value="" placeholder="Enter Receipt ID">
                                            </div>
                                            <div class="form-group">
                                                <label for="label_for_buyer_item">Item</label>
                                                <div class="input-group">
                                                    <input type="text" id="items" name="items[]" class="form-control">
                                                    <span class="input-group-append">
                                                        <button type="button" id="addRow" class="btn btn-success btn-flat"><i class="fas fa-plus-circle"></i></button>
                                                    </span>
                                                </div>
                                                <div id="newRow"></div>
                                            </div>




                                            <div class="form-group">
                                                <label for="label_for_amount">Amount</label>
                                                <input type="text" class="form-control" id="amount"  name="amount"  value="" placeholder="Amount">
                                            </div>
                                            <div class="form-group">
                                                <label for="label_for_note">Note</label>
                                                <textarea class="form-control" rows="2" id="note" name="note" placeholder="Note . . ."></textarea>
                                            </div>
                                        </div>
                                    </div>




                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>



<script type="text/javascript">
    // add row
    $("#addRow").click(function () {
        var html = '';
        html += '<div class="input-group" id="inputFormRow">';
        html += '<input type="text" id="items" name="items[]" class="form-control">';
        html += '<span class="input-group-append">';
        html += '<button type="button" id="removeRow" class="btn btn-danger btn-flat"><i class="fas fa-minus-circle"></i></button>';
        html += '</span>';

        $('#newRow').append(html);
    });

    // remove row
    $(document).on('click', '#removeRow', function () {
        $(this).closest('#inputFormRow').remove();
    });



    $(document).ready(function() {
        $('#sales_tracker').bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                entry_by: {
                    validators: {
                        regexp: {
                            regexp: /^[0-9]*$/,
                            message: 'The entry by can only consist of number. '
                        }
                    }
                },
                buyer: {
                    validators: {
                        stringLength: {
                            max: 20,
                            message: 'The buyer name field should maximum 20 characters long. '
                        },
                        regexp: {
                            regexp: /^[a-zA-Z0-9 ]*$/,
                            message: 'The buyer name can only consist of alphabetical, number and space. '
                        }
                    }
                },
                phone: {
                    validators: {
                        stringLength: {
                            max: 10,
                            message: 'The phone field should maximum 10 digit long. '
                        },
                        regexp: {
                            regexp: /^[0-9]*$/,
                            message: 'The phone field can only consist of number. '
                        }
                    }
                },
                buyer_email: {
                    validators: {
                        emailAddress: {
                            message: 'Please enter a valid email address. '
                        }
                    }
                },
                receipt_id: {
                    validators: {
                        regexp: {
                            regexp: /^[a-zA-Z]*$/,
                            message: 'The Receipt ID can only consist of alphabetical. '
                        }
                    }
                },
                'items[]': {
                    validators: {
                        regexp: {
                            regexp: /^[a-zA-Z ]*$/,
                            message: 'The Items can only consist of alphabetical. '
                        }
                    }
                },
                amount: {
                    validators: {
                        regexp: {
                            regexp: /^[0-9]*$/,
                            message: 'The Amount field can only consist of number. '
                        }
                    }
                }
            }
        });
    });



    $("#sales_tracker").on('submit', function(event) {
        event.preventDefault();
        event.stopImmediatePropagation();
        $.ajax({
            type: "POST",
            url: '<?php echo url('create-sales')?>',
            data: $(this).serialize(),
            success:function(data) {
                console.log(data)
                if(data === 'y')
                {
                    $('#success-show').show();
                    $('#alert-show').hide();
                }else{
                    $('#alert-show').show();
                    $('#success-show').hide();
                }
            }
        });
        return false;
    });

</script>



</body>
</html>
