<?php
session_start();
if(!isset($_SESSION['logged_in'])) {
    header('location: students.php');
}  
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>LMS Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <a href="logout.php" class="d-block btn btn-sm btn-danger mr-2">Logout</a>
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->

            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="statics/images/seid.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Admin</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Service
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="students.php" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Students</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="Teachers.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Teachers</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="others.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Others</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="totalstatics.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Total Statics</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="about.php" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    About as
                                    <span class="right badge badge-danger">About</span>
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="background-image:url('statics/images/bg-01.jpg')">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 style="color:green">Students</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="home.php"
                                        class="d-block btn btn-sm btn-success mr-2">Home</a></li>
                                <li class="breadcrumb-item active">Home</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <button type="button" class="btn btn-primary btn-lg ml-5" data-toggle="modal"
                    data-bs-target="#stu">
                    Add Student
                </button>

                <a type="button" href='statics/stu_statics.php' class="btn btn-success btn-lg ml-5">
                    See Statics</a>

                <a type="button" href='check/check_stu.php' class="btn btn-warning btn-lg ml-5">
                    Check Student</a>
            </div>
            <!-- Button trigger modal -->


            <!-- Modal -->
            <div class="modal fade" id="stu" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"
                                style="color:green;font-family:new times roman">Add Student
                            </h5>
                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body" style="background-image:url('statics/images/bg-01.jpg')">
                        
                            <form action='student/addstudentcode.php' enctype="multipart/form-data" method='POST'>

                                <div class="mb-3">
                                    <label class="form-label">Full Name</label>
                                    <input class="form-control" name='fullname' id="validationCustom05" required>
                                   
                                </div>

                                <div class="mb-3">
                                    <label for="validationCustom05" class="form-label">ID</label>
                                    <input type="text" class="form-control" name='id' id="validationCustom05" required>
                                </div>



                                <div class="mb-3">
                                    <label class="form-label">Mark</label>
                                    <input type="text" class="form-control" name='mark' id="validationCustom05"
                                        required>

                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Serial Number</label>
                                    <input class="form-control" name='serial' id="validationCustom05" required>

                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Photo</label>
                                    <input type="file" class="form-control" name='image' idate="image"
                                        id="validationCustom05" required>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name='register'>Add</button>
                        </div>
                        </form>
                        
                    </div>
                </div>
            </div>

        </div>
        <footer class="main-footer">
            <div class="text-center">
                <strong>Copyright &copy; 2021 <a href="">LCS</a>.</strong>
                All rights reserved.
            </div>
        </footer>
    </div>
    <script src="js/sweetalert.min.js"></script>
    <?php require_once('notify.php')?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>


    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/adminlte.min.js"></script>

</body>

</html>