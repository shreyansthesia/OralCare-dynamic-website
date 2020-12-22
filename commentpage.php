<?php

include ('connection.php');
$id=$_GET['id'];
 $sql=$mysqli->query("select * from comment where blogno='$id'");
 //$result=$sql->fetch_assoc();
//print_r($result);
 ?>
 <html>

<body>
  <div class="pt-5">
  <h3 class="mb-5">Comments</h3>
  <ul class="comment-list">

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
<?php $getid=$_GET['id']; ?>

<input type="hidden" name="blogno" class="form-control"  id="blogno" value="<?php echo $getid ?>">


    <div class="form-group">
      <input type="submit" value="submit" class="btn btn-primary py-3 px-5">
    </div>


  </form>
</div>
</div>

</body>
</html>
