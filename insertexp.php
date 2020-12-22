<?php

include('connection.php');


$number=$_POST['number'];
$service=$_POST['service'];



$sql=$mysqli->query("insert into experience (number,service) values('$number','$service')");

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
