<?php
  include_once __DIR__.'/ad_kingdomceramic/Configure/dbconfig.php'; 
  $result=$contactObj->selectAllDataForClient();
  $row=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
  <base href="https://kingdomceramic.com/ ">
  <?php include_once __DIR__.'/C_Layout/metalink.php'; ?>

<?php include_once __DIR__.'/C_Layout/css.php'; ?>
  </head>

  <body>
    <div class="fixed-top">
    <div class="container px-0">
      <nav class="navbar navbar-expand-lg navbar-freya navbar-light"> <a class="navbar-brand" href="Home">
            <!-- <div class="freya-logo"> </div> -->
            <div>
              <img loading="lazy" src="assets/img/logo/LOGO (2).png" alt="king dom" width="120" class="img-fluid px-1" >
            </div>
          </a><button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#primaryNavbarCollapse" aria-controls="primaryNavbarCollapse" aria-expanded="false" aria-label="Toggle navigation"><span class="hamburger hamburger--emphatic"><span class="hamburger-box"><span class="hamburger-inner"></span></span></span></button>
          <div class="collapse navbar-collapse" id="primaryNavbarCollapse">
            <ul class="navbar-nav py-3 py-lg-0 mt-1 mb-2 my-lg-0 ms-lg-n1">
              <li class="nav-item dropdown active"><a class="nav-link active" href="Home" role="button" aria-expanded="false">Home</a>
              </li>
              <li class="nav-item dropdown"><a class="nav-link " href="About" role="button" aria-expanded="false">About us</a>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle dropdown-indicator" href="JavaScript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">Product</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="projects.php">Projects Gallery</a></li>
                  <li><a class="dropdown-item" href="project.php">Single Project</a></li>
                </ul>
              </li>
              
              <li class="nav-item dropdown"><a class="nav-link"  href="Catalouge" role="button"  aria-expanded="false">Catalouge</a>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle dropdown-indicator" href="JavaScript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">Information</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="Technical-Specification">Technical Specification</a></li>
                  <li><a class="dropdown-item" href="Tiles-Calculator">Tiles Calculator</a></li>
                  <li><a class="dropdown-item" href="Packing-Details">Packing Details</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown"><a class="nav-link"  href="blog-list.php" role="button"  aria-expanded="false">Blog</a>
              </li>
              <li class="nav-item dropdown"><a class="nav-link" href="Contact" role="button"  aria-expanded="false">Contact</a>
              </li>
            </ul>
            <ul class="navbar-nav ms-lg-auto flex-row justify-content-center py-3 py-lg-0 me-n2">
              <li><a class="nav-link px-2" target="_black" href="<?php echo $row['FacebookLink']?>"><span class="fab fa-facebook-f" data-fa-transform="shrink-2"></span></a></li>
              <li><a class="nav-link px-2" target="_black" href="<?php echo $row['TwitterLink']?>"><span class="fab fa-whatsapp" data-fa-transform="shrink-2"></span></a></li>
              <li><a class="nav-link px-2" target="_black" href="<?php echo $row['InstagramLink']?>"><span class="fab fa-instagram" data-fa-transform="shrink-2"></span></a></li>
            </ul>
          </div>
        </nav>
    </div>
    </div>

        <!-- ============================================-->
    <!-- <section> begin ============================-->
      <section class="py-8 overflow-hidden text-center" data-zanim-timeline="{}" data-zanim-trigger="scroll">
        <div class="bg-holder overlay overlay-1" style="background-image:url(assets/img/blog_header.jpg);" data-parallax="data-parallax"></div>
        <!--/.bg-holder-->
        <div class="container">
          <div class="overflow-hidden">
            <h1 class="fs-5 fs-sm-6 text-white mb-3" data-zanim-xs='{"delay":0}'>Design Blog</h1>
          </div>
          <div class="overflow-hidden">
            <p class="fs-2 fw-light ls text-400 text-uppercase" data-zanim-xs='{"delay":0.1}'>Thoughts &amp; Musings</p>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="preloader" id="preloader">
        <div class="loader-box">
          <div class="loader"></div>
        </div>
      </div>

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-5">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
              <div class="text-center"><a class="text-500" href="#!">Architecture</a>
                <h2>Inspiration: minsat</h2>
                <div class="mb-4"><a class="text-500" href="#!">George Bellaroza</a><span class="px-2">. </span><a class="text-500" href="#!">December 13, 2017</a></div>
              </div>
              <div class="text-justify">
                <p class="mb-4">Who's your source of inspiration when it comes to architectural design? Sed posuere consectetur est at lobortis. Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur.</p>
                <img class="img-fluid" height="5px" src="https://adilaceramic.com/uploads/media/o_1g5rh13ivj6e3ek93n4mi1d5da.JPG" alt="blog">
                <p class="mt-4">Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>
                <p>Curabitur blandit tempus porttitor. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Curabitur blandit tempus porttitor. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
              </div>
              <hr class="mt-6 mb-4">
              <div class="row">
                <div class="col-auto"><img loading="lazy" class="img-thumbnail rounded-2" src="assets/img/portrait-8.jpg" alt="blog"></div>
                <div class="col">
                  <h5 class="mb-2">George Bellaroza</h5>
                  <p class="text-800">George is the author of The User Experience Revolution and a leader in digital strategy with over 20 years experience. Through <a href="#!">consultancy, </a>speaking, writing, training and mentoring he passionately promotes digital best practice.</p>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->

    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->



    <style>
  
  a {
    color: #3c3c3c;
    text-decoration: none;
  }

  a:hover {
    text-decoration: none;
    color: #c0c0c0;
  }

  p {
    color: #666666;
  }

  @media (max-width: 576px) {
    p {
      font-size: 13px;
    }
  }


  ul {
    margin: 0;
    padding: 0;
  }

  ul li {
    list-style-type: none;
  }
</style>
    <?php include_once __DIR__.'/C_Layout/footer.php'; ?>
    <?php include_once __DIR__.'/C_Layout/script.php'; ?>
  </body>

</html>