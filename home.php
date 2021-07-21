<?php 
session_start();
if(!isset($_SESSION['logged_in'])) {
    header('location: login.php');
}  
?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>home</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper" >

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

      </ul>


      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->


        <a href="logout.php" class="d-block btn btn-sm btn-danger mr-2">Logout</a>




      </ul>
    </nav>
    <!-- Main Sidebar Container -->
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
            <a href="#" class="d-block">Admin<</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

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
    <div class="content-wrapper" style="background-image:url('astu.jpg');repeat:no-repeat">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 style="color:green">Home</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                <li class="breadcrumb-item active">Home</li>
              </ol>
            </div>
          </div>
        </div>
      </div>

<h1 class="text-center" style="color:red;font-family:new times roman">Adama Science & Technology University Laptop Control System</h1>
</div>
    <footer class="main-footer">
    <div class="text-center">
            <strong>Copyright &copy; 2021 <a href="">LCS</a>.</strong>
            All rights reserved.
        </div>
    </footer>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="dist/js/adminlte.min.js"></script>
  
</body>

</html>