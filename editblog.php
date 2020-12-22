<?php

include ('connection.php');
 $id=$_GET['id'];
 $sql=$mysqli->query("select * from blog where id='$id'");
 $result=$sql->fetch_assoc();
//print_r($result);
 ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
  </head>
  <body>

    <form action="updateblog.php" method="post" name = "myForm">
      <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
      <p>
        name:-<input type="text" name="name" size="25" value="<?php echo $result['name']; ?>">
      </p>
      <p>
        text:-<input type="text" name="text" size="25" value="<?php echo $result['text']; ?>">
      </p>
      <p>
        date:-<input type="text" name="date" size="25" value="<?php echo $result['date']; ?>">
      </p>
      <input type="submit"  value="submit">

    </form>

  </body>
</html>
