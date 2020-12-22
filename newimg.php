<?php

include('connection.php');

?>

<!DOCTYPE html>
<html>
<body>

              <?php
          $sql=$mysqli->query("select * from slider");
          ?>

          <?php
           while ($row =$sql->fetch_assoc())
            {
           ?>
<div class="w3-content" style="max-width:300px">

  <img class="allimg" src="<?php echo $row['image'] ?>" style="width:100%">
</div>

          <?php } ?>
          
<button class="prev" onclick="plusSlides(-1)">previous</button>
<button class="next" onclick="plusSlides(1)">next</button>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("allimg");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html>
