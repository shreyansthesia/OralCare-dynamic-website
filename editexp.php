<?php

include ('connection.php');
 $id=$_GET['id'];
 $sql=$mysqli->query("select * from experience where id='$id'");
 $result=$sql->fetch_assoc();
//print_r($result);
 ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
  </head>
  <body>

    <form action="updateexp.php" method="post" name = "myForm">
      <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
      <p>
      number:- <input type="text" name="number" size="25" value="<?php echo $result['number']; ?>">
      </p>

      <p>
      service:-<input type="text" name="service" size="25" value="<?php echo $result['service']; ?>">
      </p>
      <input type="submit"  value="submit">

    </form>

  </body>
</html>
