<?php

include('connection.php');

$number=$_POST['number'];
$service=$_POST['service'];
$id=$_POST['id'];

$sql=$mysqli->query("select * from experience where id='$id'");
$result=$sql->fetch_assoc();


$sql=$mysqli->query("update experience set number='$number',service='$service' where id=$id");

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
