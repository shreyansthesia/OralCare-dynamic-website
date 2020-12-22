<?php
@$msg=$_GET['msg'];
 ?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> ADD NEW RECORD </title>
  </head>
  <body>

    <?php
    if ($msg=='success') {
      ?>
          <p>record inserted succesfully</p>
      <?php
    }
   ?>

    <form action="insert.php" method="post" name = "addrecord" >
      <p>
        category:-<input type="text" name="category" id="category">
      </p>

      <p>
        description:-<input type="text" name="description" id="description">
      </p>
      <input type="submit"  value="submit" id="formsub">

    </form>

  </body>
</html>
