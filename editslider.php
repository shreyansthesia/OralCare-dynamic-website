<?php

include ('connection.php');
 $id=$_GET['id'];
 $sql=$mysqli->query("select * from slider where id='$id'");
 $result=$sql->fetch_assoc();
 ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
  </head>
  <body>

    <form action="updateslider.php" method="post" name = "myForm">
      <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
      <p>
      image source:- <textarea rows="5" cols="50" name="image" size="25"><?php echo $result['image']; ?></textarea>
      </p>

      <input type="submit"  value="submit">

    </form>

  </body>
</html>
