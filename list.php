<?php
session_start();
if($_SESSION['usrname']=="")
{
  header("Location: login.php");
}
?>

<?php
include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>table list</title>
  </head>
  <body>

<?php
$sql=$mysqli->query("select * from services");

//echo "number of rows = ".$sql->num_rows;

?>

<input type=button onClick="location.href='form.php'" value='add service'>

  <table style="width:100%" border="1" >
  <tr>
    <th>ID</th>
    <th>CATEGORY</th>
    <th>DESCRIPTION</th>
    <th>EDIT</th>
    <th>DELETE</th>

  </tr>
 <?php
  while ($con=$sql->fetch_assoc())
   {
  ?>
  <tr>
    <td align="center"><?php echo $con['id']; ?></td>
    <td align="center"><?php echo $con['category']; ?></td>
    <td align="center"><?php echo $con['description']; ?></td>
    <td align="center"><a href="edit.php?id=<?php echo $con['id']; ?>" >edit</a></td>
    <td align="center"><a href="delete.php?id=<?php echo $con['id']; ?>" onclick="return confirm('Are you sure you want to delete?')" >delete</a></td>
  </tr>
  <?php

  }
?>

</table>

<br/>
<br/>
<br/>


<?php
$sql=$mysqli->query("select * from experience");

?>

<input type=button onClick="location.href='formexp.php'" value='add experience'>
<table style="width:100%" border="1" >
<tr>
  <th>ID</th>
  <th>number</th>
  <th>service</th>
  <th>EDIT</th>
  <th>DELETE</th>

</tr>
<?php
while ($con=$sql->fetch_assoc())
 {
?>
<tr>
  <td align="center"><?php echo $con['id']; ?></td>
  <td align="center"><?php echo $con['number']; ?></td>
  <td align="center"><?php echo $con['service']; ?></td>
  <td align="center"><a href="editexp.php?id=<?php echo $con['id']; ?>" >edit</a></td>
  <td align="center"><a href="deleteexp.php?id=<?php echo $con['id']; ?>" onclick="return confirm('Are you sure you want to delete?')" >delete</a></td>
</tr>
<?php

}
?>

</table>



<br/>
<br/>
<br/>


<?php
$sql=$mysqli->query("select * from team");

?>

<input type=button onClick="location.href='formteam.php'" value='add team member'>
<table style="width:100%" border="1" >
<tr>
  <th>ID</th>
  <th>name</th>
  <th>about</th>
  <th>EDIT</th>
  <th>DELETE</th>

</tr>
<?php
while ($con=$sql->fetch_assoc())
 {
?>
<tr>
  <td align="center"><?php echo $con['id']; ?></td>
  <td align="center"><?php echo $con['name']; ?></td>
  <td align="center"><?php echo $con['about']; ?></td>
  <td align="center"><a href="editteam.php?id=<?php echo $con['id']; ?>" >edit</a></td>
  <td align="center"><a href="deleteteam.php?id=<?php echo $con['id']; ?>" onclick="return confirm('Are you sure you want to delete?')" >delete</a></td>
</tr>
<?php

}
?>

</table>

<br/>
<br/>
<br/>


<?php
$sql=$mysqli->query("select * from blog");

?>

<input type=button onClick="location.href='formblog.php'" value='add blog'>
<table style="width:100%" border="1" >
<tr>
  <th>ID</th>
  <th>name</th>
  <th>text</th>
  <th>date</th>
  <th>comments</th>
  <th>EDIT</th>
  <th>DELETE</th>

</tr>
<?php
while ($con=$sql->fetch_assoc())
 {
?>
<tr>
  <td align="center"><?php echo $con['id']; ?></td>
  <td align="center"><?php echo $con['name']; ?></td>
  <td align="center"><?php echo $con['text']; ?></td>
  <td align="center"><?php echo $con['date']; ?></td>
  <td align="center"><a href="commentpage.php?id=<?php echo $con['id']; ?>" >comments</a></td>
  <td align="center"><a href="editblog.php?id=<?php echo $con['id']; ?>" >edit</a></td>
  <td align="center"><a href="deleteblog.php?id=<?php echo $con['id']; ?>" onclick="return confirm('Are you sure you want to delete?')" >delete</a></td>
</tr>
<?php

}
?>

</table>


<br/>
<br/>
<br/>


<?php
$sql=$mysqli->query("select * from slider");

?>

<input type=button onClick="location.href='formslider.php'" value='add image'>
<table style="width:100%" border="1" >
<tr>
  <th>ID</th>
  <th>image source</th>
  <th>EDIT</th>
  <th>DELETE</th>

</tr>
<?php
while ($con=$sql->fetch_assoc())
 {
?>
<tr>
  <td align="center"><?php echo $con['id']; ?></td>
  <td align="center"><?php echo $con['image']; ?></td>
  <td align="center"><a href="editslider.php?id=<?php echo $con['id']; ?>" >edit</a></td>
  <td align="center"><a href="deleteslider.php?id=<?php echo $con['id']; ?>" onclick="return confirm('Are you sure you want to delete?')" >delete</a></td>
</tr>
<?php

}
?>

</table>




  </body>
</html>
