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

    <form action="insertteam.php" method="post" name = "addrecord" >
      <p>
        name:-<input type="text" name="name" id="name">
      </p>

      <p>
        about:-<input type="about" name="about" id="about">
      </p>
      <input type="submit"  value="submit" id="formsub">

    </form>

  </body>
</html>
