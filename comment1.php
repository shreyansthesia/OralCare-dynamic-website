<?php

include ('connection.php');
 @$id=$_GET['id'];

 ?>
 <html>
 <head>

   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet">

   <link rel="stylesheet" href="fonts/icomoon/style.css">

   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/magnific-popup.css">
   <link rel="stylesheet" href="css/jquery-ui.css">
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesheet" href="css/owl.theme.default.min.css">

   <link rel="stylesheet" href="css/bootstrap-datepicker.css">

   <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

   <link rel="stylesheet" href="css/aos.css">

   <link rel="stylesheet" href="css/style.css">

 </head>
<body>
  <div class="pt-5">
  <h3 class="mb-5">Comments</h3>
  <ul class="comment-list">

                <?php
            $sql=$mysqli->query("select * from comment");
            ?>

            <?php
             while ($row =$sql->fetch_assoc())
              {
             ?>



    <li class="comment">
      <div class="comment-body">
        <h3><?php echo $row['name'];?></h3>
        <div class="meta"><?php echo $row['time'];?></div>
        <p><?php echo $row['coment'];?></p>
      </div>
    </li>
    <?php } ?>


  <div class="comment-form-wrap pt-5">
    <h3 class="mb-5">Leave a comment</h3>
    <form action="insertcom.php" method="post" class="p-5 bg-light">
      <div class="form-group">
        <label for="name">Name *</label>
        <input type="text" class="form-control" id="name" name="name">
      </div>
      <div class="form-group">
        <label for="date">Date *</label>
        <input type="text" class="form-control" id="time" name="time">
      </div>

      <div class="form-group">
        <label for="coment">Comment</label>
        <textarea name="coment" id="coment" cols="30" rows="10" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <input type="submit" value="submit" class="btn btn-primary py-3 px-5">
      </div>

    </form>
  </div>
</div>


<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/aos.js"></script>

<script src="js/main.js"></script>


</body>
</html>
