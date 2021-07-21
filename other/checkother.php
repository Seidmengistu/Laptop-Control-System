<?php
session_start();
require_once"../include/conn.php";
include("security.php");
 
if(isset($_POST['check'])){
    $fullname=$_POST['fullname'];
    $id=$_POST['id'];
    $mark=$_POST['mark'];
    $serial=$_POST['serial'];
    $query="SELECT *FROM  student WHERE id='$id'";
    // print_r($_REQUEST);
    $query_run= mysqli_query($conn,$query);
if($query_run){
    $_SESSION['success']="your data is udated";
    header('Location:../statics/tea_statics.php');
    
}else{
    $_SESSION['success']="your data is not udated";
    header('Location:teaedit.php');
}   
}

?>