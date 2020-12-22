<?php

include('connection.php');


$category=$_POST['category'];
$description=$_POST['description'];



$sql=$mysqli->query("insert into services (category,description) values('$category','$description')");

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
