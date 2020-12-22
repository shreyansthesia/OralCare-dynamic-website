<?php
session_start();
if($_SESSION['usrname']=="")
{
  header("Location: login.php");
}
?>
<html>
<body>
  <p>welcome <?php echo $_SESSION['usrname'];?></p>

  <input type=button onClick="location.href='list.php'" value='edit content of website'>



  <h3><a href = "logout.php">Sign Out</a></h3>
</body>
</html>
