<?php

session_start();
require_once"include/conn.php";
//  print_r($_REQUEST);




// print_r($_REQUEST);
if(isset($_POST['login']))
{
   
              $email=$_POST['email'];
              $password=$_POST['password']; 


$query="SELECT * FROM user where email='$email' AND password='$password'";
$query_run=mysqli_query($conn,$query);

if(mysqli_fetch_array($query_run))
{
    $_SESSION['$username']=$email;
    $_SESSION['logged_in'] = true;
    header('Location:home.php');
}
else
{
    $_SESSION['status']="In Correct Username Or Password ";
    $_SESSION['status_code']="error";
    header('Location:login.php');

}
}







?>