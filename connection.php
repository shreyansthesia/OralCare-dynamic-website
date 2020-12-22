<?php
$servername="localhost";
$username="root";
$password="";
$dbname="dynamic";

$mysqli= new mysqli($servername,$username,$password,$dbname);
if ($mysqli === false)
{
  die("connection error:".$mysqli->connect_error);
}
?>
