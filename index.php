<?php
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>dentitle</title>
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
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap"  id="home-section">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center position-relative">


            <div class="site-logo">
              <a href="index.php" class="text-black"><span class="text-primary">den</span>title</a>
            </div>

            <div class="col-12">
              <nav class="site-navigation text-center " role="navigation">

                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#services-section" class="nav-link">Services</a></li>
                <li><a href="#team-section" class="nav-link">Doctors</a></li>
                <li><a href="#testimonials-section" class="nav-link">Testimonials</a></li>
                <li><a href="#blog-section" class="nav-link">Blog</a></li>
                <li><a href="about.html" class="nav-link">About Us</a></li>
                <li><a href="admin/login.php" class="nav-link">Login</a></li>
              </ul>
              </nav>

            </div>

          <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>

    </header>


    <div class="site-section-cover img-bg-section" style="background-image: url('image/1812.png'); " data-aos="fade">

      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5">

            <div class="box-shadow-content">
              <div class="block-heading-1">
                <span class="d-block mb-3"  data-aos="fade-up">Welcome To Dentitle</span>
                <h1 class="mb-4" data-aos="fade-up" data-aos-delay="100">We Care For Your Smile</h1>
              </div>

              <p class="mb-4" data-aos="fade-up" data-aos-delay="200">this is a teeth care webite created by a group of people for their fundamentals of web technology project(fwt).</p>
              <p data-aos="fade-up" data-aos-delay="300"><a href="about.html" class="btn btn-primary text-white py-3 px-5">Contact Us</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="site-section block-feature-1-wrap" id="services-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12">
            <div class="block-heading-1">
              <span>All Kind Of Services</span>
              <h2>Dental Services</h2>
            </div>
          </div>
        </div>
        <div class="row">

          <?php
      $sql=$mysqli->query("select * from services");
      ?>

      <?php
       while ($row =$sql->fetch_assoc())
        {
       ?>

          <div class="col-lg-4 col-md-6 mb-5" data-aos="fade-up" data-aos-delay="100">
            <div class="block-feature-1">
              <span class="icon">
                <span class="flaticon-dental-care"></span>
              </span>
              <h2 class="text-black"><?php echo $row['category'];?></h2>
              <p><?php echo $row['description']; ?></p>
            </div>
          </div>
<?php
}
 ?>
        </div>
      </div>
    </div>


    <div class="site-section gradient-bg-1" id="about-section">
      <div class="container">
        <div class="row justify-content-center mb-4 block-img-video-1-wrap">
          <div class="col-8 mb-5">
            <figure class="block-img-video-1" data-aos="fade">
            </figure>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="row">

              <?php
          $sql=$mysqli->query("select * from experience");
          ?>

          <?php
           while ($row =$sql->fetch_assoc())
            {
           ?>


              <div class="col-md-6 mb-4 col-lg-0 col-lg-3">
                <div class="block-counter-1">
                  <span class="number"><span data-number="<?php echo $row['number'];?>">0</span>+</span>
                  <span class="caption"><?php echo $row['service'];?></span>
                </div>
              </div>


              <?php
              }
               ?>


            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section" id="team-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12">
            <div class="block-heading-1">
              <span>WEBSITE CREATORS</span>
              <h2>Meet Our Team</h2>
            </div>
          </div>
        </div>
        <div class="row">


          <?php
      $sql=$mysqli->query("select * from about");
      ?>

      <?php
       while ($row =$sql->fetch_assoc())
        {
       ?>


          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0" data-aos="fade-up">
            <div class="block-team-member-1 text-center rounded">
              <figure>
                <img src="<?php echo $row['image'];?>" alt="Image" class="img-fluid rounded-circle">
              </figure>
              <h3 class="font-size-20 text-black"><?php echo $row['name'];?></h3>
              <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Doctor</span>
              <p class="px-3 mb-3"><?php echo $row['desc'];?></p>
              <div class="block-social-1">
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
              </div>
            </div>
          </div>

        <?php } ?>

        </div>
      </div>
    </div>

    <div class="site-section bg-light block-13" id="testimonials-section" data-aos="fade">
      <div class="container">

        <div class="text-center mb-5">
          <div class="block-heading-1">
            <span>Happy Client Says</span>
            <h2>Testimonial</h2>
          </div>
        </div>

        <div class="owl-carousel nonloop-block-13">


                        <?php
                    $sql=$mysqli->query("select * from team");
                    ?>

                    <?php
                     while ($row =$sql->fetch_assoc())
                      {
                     ?>



          <div>
            <div class="block-testimony-1 text-center">

                <p><?php echo $row['about'];?></p>


              <h3 class="font-size-20 text-black"><?php echo $row['name'];?></h3>
            </div>
          </div>
<?php } ?>




        </div>

      </div>
    </div>

    <div class="site-section" id="blog-section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5">
            <div class="block-heading-1">
              <span>Latest Blog Posts</span>
              <h2>Our Blog</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div>
              <a href="single.html" class="mb-4 d-block"><img src="image/img-video-1.jpg" alt="Image" class="img-fluid rounded"></a>
            </div>
          </div>
          <div class="col-lg-6">





            <?php
        $sql=$mysqli->query("select * from blog");
        ?>
<table>
        <?php
         while ($row =$sql->fetch_assoc())
          {
         ?>
         <tr>
           <td><br></td>
         </tr>
         <tr>
         </tr>
  <tr>
    <td class="text-muted text-uppercase"><b><?php echo $row['text']; ?></b></td>
    <td class="mr-2"> by <?php echo $row['name']; ?></td>
    <td class="mr-2"><?php echo $row['date']; ?></td>
    <td class="text-muted text-uppercase small"><a href="comment1.php?id=<?php echo $row['id']; ?>" >comments</a></td>
    <tr>
  <tr><td><br></td>
  </tr>
<tr>
</tr>
<?php } ?>

  </div>
  </div>
  </div>
  </div>
  </div>

<!-- SLIDER GOES HERE EITH SCRIPT FOR FUTURE -->

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
