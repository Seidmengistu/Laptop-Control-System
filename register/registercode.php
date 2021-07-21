<?php

session_start();
require_once"../include/conn.php";

if(isset($_POST['registration']))
{
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $rpassword=$_POST['rpass'];

    if($password==$rpassword)
    {
        
        $query="INSERT  INTO user (usernmae,email,password) VALUES('$username','$email','$password')";
       $query_run=mysqli_query($conn,$query);
 if($query_run)
    {

        $_SESSION['status']="Admin Added Successfully ";
        $_SESSION['status_code']="success";
                header('Location:../login.php');
    }
    else
    {
        $_SESSION['status']="Password and Confirm Password does not Match";
        $_SESSION['status_code']="success";
         header('Location:../register.php');
        
    }

    }
    else{ 
        
        $_SESSION['status']="Admin Profile not Added";
        header('Location:../register.php');

    }
    

}



?>