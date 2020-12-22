<?php

include('connection.php');


$name=$_POST['name'];
$text=$_POST['text'];
$date=$_POST['date'];



$sql=$mysqli->query("insert into blog (name,text,date) values('$name','$text','$date')");

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
