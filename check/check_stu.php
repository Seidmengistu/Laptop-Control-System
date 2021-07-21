 <?php 

session_start();
if(!isset($_SESSION['logged_in'])) {
    header('location: ../login.php');
} 
  
  if(isset($_POST['id'])) {
    
    $conn=mysqli_connect('localhost','root','','lcs');
    $id=$_POST['id'];
    $query="SELECT * FROM student WHERE id='$id' LIMIT 1";
    $query_run=mysqli_query($conn,$query);
    if(mysqli_num_rows($query_run) > 0) {
      $row = mysqli_fetch_assoc($query_run); 
    }  
  } 
 
?>

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

            

             <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->


                <a href="../login.php" class="d-block btn btn-sm btn-danger mr-2">Logout</a>




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
                         <img src="" class="img-circle elevation-2" alt="User Image">
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

                                 <li class="nav-item">
                                     <a href="../totalstatics.php" class="nav-link">
                                         <i class="far fa-circle nav-icon"></i>
                                         <p>Total Statics</p>
                                     </a>
                                 </li>
                             </ul>
                         </li>
                         <li class="nav-item">
                             <a href="../about.php" class="nav-link">
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
                             <h1 class="m-0 text-dark"style="color:blue">Check Students</h1>
                         </div><!-- /.col -->
                         <div class="col-sm-6">
                             <ol class="breadcrumb float-sm-right">
                                 <a class="btn btn-success" href="../students.php">Students</a>
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




                                     <form action='<?=$_SERVER['PHP_SELF']?>' method='POST'>
                                         <div class="mb-3">
                                             <label class="form-label">Id-Number</label>
                                             <input class="form-control" placeholder="PLease Enter Student  ID Number Here..." value="<?=isset($row) ? $row['id']:''?>"
                                                 name='id'>

                                         </div>

                                         <div class="mb-3">
                                             <label  class="form-label">Full Name</label>
                                             <input class="form-control" disabled value="<?=isset($row) ? $row['fullname']:''?>"
                                                 name='fullname'>

                                         </div>
                                         <div class="mb-3">
                                             <label class="form-label">Mark</label>
                                             <input vtype="text" disabled class="form-control"
                                                 value="<?=isset($row) ? $row['mark']:''?>" name='mark'>

                                         </div>

                                         <div class="mb-3">
                                             <label class="form-label">Serial Number</label>
                                             <input class="form-control"  disabled name='serial'
                                                 value="<?=isset($row) ? $row['serial']:''?>">

                                         </div>
                                         <a href='../statics/stu_statics.php' class='btn btn-danger'>Cancel</a>
                                         <a href='../check/check_stu.php' class='btn btn-info'>Refresh</a>
                                         <input name='check' class='btn btn-primary' value="Check" type="submit">
                                     </form>


                                 </div>
                             </div>
                             <div class="card card-primary card-outline">
                             </div>
                         </div>
                         <div class="col-6">
                             <?php
                         if(isset($row)) {
                          echo "<img src='data:image/jpeg;base64,".base64_encode($row['image'])."' height='350' width='350'/>";
                         }
                         
                         ?>

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
     <script src="plugins/jquery/jquery.min.js"></script>
     <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
     <script src="dist/js/adminlte.min.js"></script>
 </body>

 </html>