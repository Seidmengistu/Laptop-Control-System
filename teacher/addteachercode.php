<?php

session_start();


require_once"../include/conn.php";


if(isset($_POST['register']))
{
    $fullname=$_POST['fullname'];
    $id=$_POST['id'];
    $mark=$_POST['mark'];
    $serial=$_POST['serial'];
    $file=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
     
    
        $query="INSERT  INTO teacher (fullname,id,mark,serial,image) VALUES('$fullname','$id','$mark','$serial','$file')";
       
        $query_run=mysqli_query($conn,$query);
 
        if($query_run)
        {
    
                   
            $_SESSION['status']="New Teacher  Added ";
            $_SESSION['status_code']="success";
                    header('Location:../teachers.php');
        }
        else
        {
           
            $_SESSION['status']="  Teacher Not Added ";
            $_SESSION['status_code']="error";
             header('Location:../teachers.php');
            
        }

    }
 
 
    
if(isset($_POST['update'])){
    $fullname=$_POST['fullname'];
    $id=$_POST['id'];
    $mark=$_POST['mark'];
    $serial=$_POST['serial'];
    $query="UPDATE teacher SET fullname='$fullname',id='$id',mark='$mark',serial='$serial' WHERE id='$id'";
  
    $query_run= mysqli_query($conn,$query);
if($query_run){
    $_SESSION['status']="Teacher Data Updated ";
            $_SESSION['status_code']="success";
    header('Location:../statics/tea_statics.php');
    
}else{
    $_SESSION['status']="Teacher Data Not Updated";
    $_SESSION['status_code']="error";
    header('Location:teaedit.php');
}   
}



// for delete application

if(isset($_POST['delete']))
{
    
    $idd=$_POST['delete_id'];
   

    $query="DELETE FROM teacher WHERE id='$idd' ";
    $query_run=mysqli_query($conn,$query);

    if($query_run)
    {
        $_SESSION['status']="Teacher File Deleted";
            $_SESSION['status_code']="error";
        header('Location:../statics/tea_statics.php');

    }
    else
    {print_r($_REQUEST);
        $_SESSION['status']="Teacher Data Not Deleted";
            $_SESSION['status_code']="info";
        header('Location:home.php');

    }

}









?>