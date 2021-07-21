<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>LMS</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
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

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search"
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->


                <a href="../login.php" class="d-block" style="color:red">Logout</a>




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
                    <img src="../statics/images/seid.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Seid Mengistu</a>
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
                                    <a href="../students.php" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Students</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../teachers.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Teachers</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../others.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Others</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="about.php" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    About As
                                    <span class="right badge badge-danger">about as</span>
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
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Edit Others</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <a class="btn btn-success" href="../others.php">Others</a>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content" style="background-image:url('../statics/images/bg-01.jpg')">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body" style="background-image:url('../statics/images/bg-01.jpg')">
                                    <?php
 $conn=mysqli_connect('localhost','root','','lcs');
if(isset($_POST['id']))
{
$idt=$_POST['id'];
$query="SELECT* FROM other WHERE id='$idt'";
$query_run=mysqli_query($conn,$query);


foreach($query_run as $row)
{
?>

                                    <form action='addothercode.php' method='POST'>

                                        <div class="mb-3">
                                            <label class="form-label">Full Name</label>
                                            <input class="form-control" value="<?php echo $row['fullname']?>"
                                                name='fullname'>

                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Id-Number</label>
                                            <input class="form-control" value="<?php echo $row['id']?>" name='id'>

                                        </div>



                                        <div class="mb-3">
                                            <label class="form-label">Mark</label>
                                            <input vtype="text" class="form-control" value="<?php echo $row['mark']?>"
                                                name='mark'>

                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Serial Number</label>
                                            <input class="form-control" name='serial'
                                                value="<?php echo $row['serial']?>">

                                        </div>
                                        <a href='../statics/stu_statics.php' class='btn btn-danger'>Cancel</a>
                                        <button name='update' class='btn btn-primary'>Update</button>
                                    </form>
                                    <?php
 
}
}?>


                                </div>
                            </div>
                            <div class="card card-primary card-outline">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="main-footer">
        <div class="float-right d-none d-sm-inline">
        </div>
        <strong>Copyright &copy;2021 <a>Lms</a>.</strong> All rights reserved.
    </footer>
    </div>
    <?php require_once('../notify.php')?>
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/adminlte.min.js"></script>
</body>

</html>