<?php

include ('connection.php');
 $id=$_GET['id'];
 $sql=$mysqli->query("select * from team where id='$id'");
 $result=$sql->fetch_assoc();
//print_r($result);
 ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
  </head>
  <body>

    <form action="updateteam.php" method="post" name = "myForm">
      <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
      <p>
        name:- <input type="text" name="name" size="25" value="<?php echo $result['name']; ?>">
      </p>

      <p>
      about:- <textarea rows="5" cols="50" name="about"><?php echo $result['about'];?></textarea>
      </p>
      
      <input type="submit"  value="submit">

    </form>

  </body>
</html>
