<?php

include('connection.php');


$name=$_POST['name'];
$time=$_POST['time'];
$coment=$_POST['coment'];
echo $blogno=$_POST['blogno'];



$sql=$mysqli->query("insert into comment (name,time,coment,blogno) values('$name','$time','$coment','$blogno')");

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
