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

    <form action="insertslider.php" method="post" name = "addrecord" >
      <p>
          image source:- <textarea rows="5" cols="50" name="image" id="image" size="25"></textarea>
      </p>

      <input type="submit"  value="submit" id="formsub">

    </form>

  </body>
</html>
