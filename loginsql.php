<?php
include('connection.php');
session_start();

$username = mysqli_real_escape_string($mysqli,$_POST['username']);
$password = mysqli_real_escape_string($mysqli,$_POST['password']);

if (empty($username) || empty($password))
{
  $_SESSION['errmsg'] = "please enter username and password";
 header("location: login.php");
 }
 $sql=$mysqli->query("select * from login where username='$username' and password='$password'");

 if( $sql->num_rows > 0)
 {
   $result=$sql->fetch_assoc();
   $_SESSION['usrname']=$username;
header("Location: dashboard.php");
 }
 else{
   $_SESSION['errmsg1']="invalid credentials";
   header("Location: login.php");
   exit();
 }





 ?>
