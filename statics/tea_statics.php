<?php  
session_start();
if(!isset($_SESSION['logged_in'])) {
    header('location:../login.php');
}  

require_once "../include/conn.php";

// die($_SESSION['status'] ?? "Empty");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Student Statics</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

      </ul>

      <ul class="navbar-nav ml-auto">
                <a href="login.php" class="d-block btn btn-sm btn-danger mr-2">Logout</a>

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
                                <li class="nav-item">
                                    <a href="../totalstatics.php" class="nav-link">
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
        <div class="content-wrapper" style="background-image:url('images/bg-01.jpg')">
            <!-- Content Header (Page header) -->
            <section class="content-header" >
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 style='color:blue'>Statics</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a class="d-block btn btn-sm btn-info mr-2" href="../teachers.php">Teachers</a></li>
                                
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content" >
                <div class="container-fluid" >
                    <div class="row">
                        <div class="col-12">

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title" style="color:green">Teacher Statics</h3>
                                </div>
                                <!-- /.card-header -->
            

                       <?php 
                   $conn=mysqli_connect('localhost','root','','lcs');
                         $query="SELECT* FROM teacher ";
                        $query_run=mysqli_query($conn,$query);

                         ?>
                                <div class="card-body"style="background-image:url('images/88.jpg')">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>ID</th>
                                                <th>Mark</th>
                                                <th>Serial Number</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php 
                                        
                                        if(mysqli_num_rows($query_run)>0)
                                        {
                                             while($row = mysqli_fetch_assoc($query_run))
                                            {
                                        ?>
                                        
                     
                                            <tr>
                                                <td><?php echo $row['fullname'];?></td>
                                                <td><?php echo $row['id'];?></td>
                                                <td><?php echo $row['mark'];?></td>
                                                <td><?php echo $row['serial'];?></td>
                                                <form action='../teacher/teaedit.php' method="POST">
                                               <td><button type='submit' class='btn btn-success' name='edit'>Edit</button></td>
                                               <input type='hidden' name='id' value="<?php echo $row['id'];?>">
                                               </form>

                                               <form  action="../teacher/addteachercode.php" method='POST'>
                                               <td><input type='submit' class='btn btn-danger' value="Delete" name='delete'></td>
                                               <input type='hidden' name='delete_id' value="<?php echo $row['id'];?>">
                                              
                                               </form>
                                            </tr>
                                            <?php 
                                            }
                                        }
                                        else
                                        {
                                            echo 'NO Record Found';
                                        }
                                            ?>
                                        </tbody>
                                        
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
        <div class="text-center">
            <strong>Copyright &copy; 2021 <a href="">LCS</a>.</strong>
            All rights reserved.
        </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    

  
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables -->
    <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <!-- page script -->

    <?php require_once('../notify.php')?>
    
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>