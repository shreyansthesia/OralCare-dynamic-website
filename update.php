<?php

include('connection.php');

$category=$_POST['category'];
$description=$_POST['description'];
$id=$_POST['id'];
 $sql=$mysqli->query("select * from services where id='$id'");
 $result=$sql->fetch_assoc();


$sql=$mysqli->query("update services set category='$category',description='$description' where id=$id");

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
