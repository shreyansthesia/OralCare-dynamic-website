<?php

include('connection.php');


$image=$_POST['image'];



$sql=$mysqli->query("insert into slider (image) values('$image')");

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
