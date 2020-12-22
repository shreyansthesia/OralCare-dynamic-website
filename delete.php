<?php

include('connection.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
</html>

<?php


$id=$_GET['id'];
 $sql=$mysqli->query("select * from services where id='$id'");
 $result=$sql->fetch_assoc();

$sql=$mysqli->query("delete from services where id=$id");

if ($sql===true)
{
 echo"record deleted succesfully";
 header('location: list.php?msg=success');
}
else {
 echo "error deleting record $sql.".$mysqli->error;
}


$mysqli->close();

 ?>
