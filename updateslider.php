<?php

include('connection.php');

$image=$_POST['image'];
$id=$_POST['id'];

$sql=$mysqli->query("select * from slider where id='$id'");
$result=$sql->fetch_assoc();


$sql=$mysqli->query("update slider set image='$image' where id=$id");

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
