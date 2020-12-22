<?php

include('connection.php');

$name=$_POST['name'];
$about=$_POST['about'];
$id=$_POST['id'];
 $sql=$mysqli->query("select * from team where id='$id'");
 $result=$sql->fetch_assoc();


$sql=$mysqli->query("update team set name='$name',about='$about' where id=$id");

if ($sql===true)
{
 echo"record updated succesfully";
 header('location: list.php?msg=success');
}
else {
 echo "error updating record $sql.".$mysqli->error;
}


$mysqli->close();

 ?>
