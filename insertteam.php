<?php

include('connection.php');


$name=$_POST['name'];
$about=$_POST['about'];



$sql=$mysqli->query("insert into team (name,about) values('$name','$about')");

if ($sql===true)
{
 echo"record created succesfully";
 header('location: list.php?msg=success');
}
else {
 echo "error inserting record $sql.".$mysqli->error;
}


$mysqli->close();

 ?>
