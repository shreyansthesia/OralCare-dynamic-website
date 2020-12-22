<?php

include ('connection.php');
 $id=$_GET['id'];
 $sql=$mysqli->query("select * from services where id='$id'");
 $result=$sql->fetch_assoc();
//print_r($result);
 ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
  </head>
  <body>

    <form action="update.php" method="post" name = "myForm">
      <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
      <p>
        <label for="category">category:-</label>
        <input type="text" name="category" size="25" value="<?php echo $result['category']; ?>">
      </p>

      <p>
      description:- <textarea rows="5" cols="50" name="description"><?php echo $result['description'];?></textarea>
      </p>
      <input type="submit"  value="submit">

    </form>

  </body>
</html>
