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

    <form action="insertexp.php" method="post" name = "addrecord" >
      <p>
        number:-<input type="text" name="number" id="number">
      </p>

      <p>
        service:-<input type="text" name="service" id="service">
      </p>
      <input type="submit"  value="submit" id="formsub">

    </form>

  </body>
</html>
