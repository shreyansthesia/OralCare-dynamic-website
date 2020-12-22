<?php

include('connection.php');

$name=$_POST['name'];
$text=$_POST['text'];
$date=$_POST['date'];
$id=$_POST['id'];
 $sql=$mysqli->query("select * from blog where id='$id'");
 $result=$sql->fetch_assoc();


$sql=$mysqli->query("update blog set name='$name',text='$text',date='$date' where id=$id");

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
