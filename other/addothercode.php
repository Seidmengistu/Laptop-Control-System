<?php
session_start();
require_once"../include/conn.php";

 
// $conn=mysqli_connect('localhost','root','','lcs');

if(isset($_POST['register']))
{
    $fullname=$_POST['fullname'];
    $id=$_POST['id'];
    $mark=$_POST['mark'];
    $serial=$_POST['serial'];
    $file=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
        $query="INSERT  INTO other (fullname,id,mark,serial,image) VALUES('$fullname','$id','$mark','$serial','$file')";
       $query_run=mysqli_query($conn,$query);
 if($query_run)
    {

               
        $_SESSION['status']="Student  Added ";
        $_SESSION['status_code']="success";
                header('Location:../others.php');
    }
    else
    {
       
        $_SESSION['status']="  Student Not Added ";
        $_SESSION['status_code']="error";
         header('Location:../others.php');
        
    }

    }
 


if(isset($_POST['update'])){
    $fullname=$_POST['fullname'];
    $id=$_POST['id'];
    $mark=$_POST['mark'];
    $serial=$_POST['serial'];
    $query="UPDATE other SET fullname='$fullname',id='$id',mark='$mark',serial='$serial' WHERE id='$id'";
    // print_r($_REQUEST);
    $query_run= mysqli_query($conn,$query);
if($query_run){
        $_SESSION['status']="Your Data is updated ";
        $_SESSION['status_code']="success";
        header('Location:../statics/oth_statics.php');
    
}else{
        $_SESSION['status']="Your Data is not updated ";
        $_SESSION['status_code']="error";
        header('Location:othedit.php');
}   
}



// for delete application

if(isset($_POST['delete']))
{
    
    $idd=$_POST['delete_id'];
   

    $query="DELETE FROM other WHERE id='$idd' ";
    $query_run=mysqli_query($conn,$query);

    if($query_run)
    {
        $_SESSION['status']="Your Data is Deleted ";
        $_SESSION['status_code']="warning";
        header('Location:../statics/oth_statics.php');

    }
    else
    {
        // print_r($_REQUEST);
        $_SESSION['status']="Your Data is not Deleted ";
        $_SESSION['status_code']="info";
     
        header('Location:home.php');

    }

}











?>