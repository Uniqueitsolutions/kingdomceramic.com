<?php
  include_once __DIR__.'/ad_kingdomceramic/Configure/dbconfig.php'; 
  $result=$contactObj->selectAllDataForClient();
  $row=mysqli_fetch_assoc($result);

  $result1=$sliderObj->selectAllDataForClient();

  $result2=$productObj->selectTop4DataForClient();

  
?>

<?php 
if(isset($_POST['save']))
{
  $feedbackobj = new inq_inquiry();

  $feedbackobj->EmailID = $_POST['EmailID'];

  $feedbackobj->ContactNumber = $_POST['ContactNumber'];

  $feedbackobj->CountryName = "India";

  $_SESSION["EmailIDD"] = $feedbackobj->EmailID;

  $result = $feedbackobj->insertData();

  if ($result) {

    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18'></script>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'Data inserted successfully!',
        }).then(function() {
            window.location = 'Home';  // Replace with the appropriate redirect URL
        });
    </script>";
} 
 }
#endregion
?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    
      <?php include_once __DIR__.'/C_Layout/metalink.php'; ?>

      <?php include_once __DIR__.'/C_Layout/css.php'; ?>

      <link href="hcss/chome2.css" rel="stylesheet">
      <style> 
      video {
  max-width: 100%;
  height: auto;
}
    .goog-te-banner-frame.skiptranslate, .goog-te-gadget-simple img {
      display: none !important;
      }
      .goog-te-combo{
          margin-left: 7px;
      }
      .goog-tooltip {
      display: none !important;
      }
      .goog-tooltip:hover {
      display: none !important;
      }
      .goog-tooltip {
display: none !important;
}
.goog-tooltip:hover {
display: none !important;
}
.goog-text-highlight {
background-color: transparent !important;
border: none !important;
box-shadow: none !important;
}
      .goog-text-highlight {
      background-color: transparent !important;
      border : none ! important;
      box-shadow: none ! important;
      }
      .VIpgJd-ZVi9od-l4eHX-hSRGPd{
          display :none;
      }
      .google_translate_element div span{
          display :none;
      }
      .ero {
        z-index: 2;
      position: absolute;
    }
    .ero h2 {
      color: #fff;
      margin-bottom: 30px;
      padding-bottom: 30px;
      font-size: 40px;
      font-weight: 550;
      position: relative;
    }
    @media (max-width: 768px) {
  .hero .ero h2 {
    font-size: 36px;
  }
}

.hero .ero p {
  color: rgba(255, 255, 255, 0.8);
  font-size: 18px;
}
          #google_translate_element select{
         background:#dedede8f;
         color: #000;
         border: none;
         border-radius:3px;
         padding:6px 8px
         
         }
         h2 > p {
             color:white;
         }
         /*google translate link | logo */
           .goog-logo-link,.goog-te-gadget span,div#goog-gt-{
           display:none!important;
          
           }
         .goog-te-gadget{
           color:transparent!important;
           font-size:1px !important;
            margin-left: 15px !important;
         }
         
         /* google translate banner-frame */
         
         .goog-te-banner-frame{
         display:none !important;
         }
         
         #goog-gt-tt, .goog-te-balloon-frame{display: none !important;}
        .goog-text-highlight { background: none !important; box-shadow: none !important;}
 
    .goog-te-banner-frame{
      display: none !important;
      margin-top: -20px;
    }
    .goog-te-banner-frame.skiptranslate, .goog-te-gadget-simple img {
      display: none !important;
      }
       #goog-gt-tt, .goog-te-balloon-frame,div#goog-gt-{display: none !important;}

.goog-text-highlight { background: none !important; box-shadow: none !important;}
      .goog-tooltip {
      display: none !important;
      }
      .goog-tooltip:hover {
      display: none !important;
      }
      
      .goog-text-highlight {
      background-color: transparent !important;
      border : none ! important;
      box-shadow: none ! important;
      }
      body {
      top: 0px !important;
      }
   </style>
  </head>

  <body>

    <?php include_once __DIR__.'/C_Layout/navbar.php'; ?>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <!--<div class="preloader" id="preloader">-->
        <div class="loader-box">
          <div class="loader"></div>
        </div>
      </div>
      <div id="myModal" class="modal">
        <div class="modal-content" style="background-image:url(assets/img/o_1es32aha615v94bogugr924kut.webp);background-position: center;">
          <h5 class="modal-title" >Quick Inquiry For Our New Catalogue <span class="close">&times;</span></h5>
          
          <form method="POST" action="Home" class="default-form" name="sbFrm" id="sbFrm">
            <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 mt-2">
                <input type="email" class="form-control" name="Email" placeholder="Email *" id="semail" >
                <span id="semail_error" class="form_error"></span> 
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 mt-2">
                <input name="ContactNumber" class="form-control" type="text" placeholder="Phone *" id="sphone" class="phoneno" onkeypress="return isNumber(event)" style="height: 40px;">
                <span id="sphone_error" class="form_error"></span> 
              </div>
              <div class=" col-lg-12 text-center">
              <button class="btn btn-primary mt-2" type="submit" name="save" value="Send Inquiry" >Send Inquiry</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <section class="py-0">
        <div class="swiper theme-slider min-vh-100" data-swiper='{"loop":true,"allowTouchMove":false,"autoplay":{"delay":5000},"effect":"fade","speed":800}'>
          <div class="swiper-wrapper">
              <?php
                      $sno = 1;
                      while ($row1 = mysqli_fetch_assoc($result1)) {

              ?>
            <div class="swiper-slide" data-zanim-timeline="{}">
              <div class="bg-holder overlay overlay-freya" style="background-image:url(Images/slider/<?php echo $row1['ImagePath'] ?>);" data-parallax="data-parallax" data-rellax-speed="-3"></div>
              <!--/.bg-holder-->
              <div class="container">
                <div class="row min-vh-100 justify-content-start align-items-end pt-11 pb-6 text-white" data-zanim-timeline="{}">
                  <div class="col">
                    <div class="row align-items-end">
                      <div class="col-lg">
                        <div class="overflow-hidden">
                          <p class="mb-1 text-uppercase ls" style="color:white;" data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.1}'><?php echo $row1['SliderTitle'] ?></p>
                        </div>
                        <div class="overflow-hidden" style="color:white;">
                          <h2 class="fw-medium mb-4 mb-lg-0"  style="color:white;" data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0}'><?php echo $row1['SliderDescription'] ?></h2>
                        </div>
                      </div>
                      <div class="col text-lg-end">
                        <div class="overflow-hidden">
                          <div data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.2}'><a class="btn btn-sm btn-outline-white" href="Products">View Case Study</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
          <div class="swiper-nav">
            <div class="swiper-button-prev"><span class="fas fa-chevron-left"></span></div>
            <div class="swiper-button-next"><span class="fas fa-chevron-right"></span></div>
          </div>
        </div>
      </section>
      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-white text-center" data-zanim-timeline="{}" data-zanim-trigger="scroll">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-10"  data-zanim-xs='{"delay":0.3}'>
              <h3 class="mb-4">Welcome to The Kingdom Ceramic , where ceramic craftsmanship meets innovation.  </h3>
              <p>As a leading ceramic company, we are dedicated to redefining excellence in the world of ceramic design.With a passion for quality and a commitment to creativity, we strive to bring you exceptional ceramic products that transcend expectations.</p>
            </div>
          </div>
          <div class="row "  data-zanim-xs='{"delay":0.3}'>
            <div class="col-lg-4 mb-4">
              <div class="row align-items-center">
                <div class="col-md-6 col-lg-12"><img loading="lazy" style="height: 300px;" class="img-fluid" src="assets/img/tilels/photo_2023-08-14_20-46-398.jpg" alt="Residential"></div>
                <div class="col-md-6 col-lg-12 text-md-start text-lg-center">
                  <h5 class="ls text-uppercase mt-4 mb-3">Porcelain</h5>
                  <p class="text-justify">Porcelain tiles are crafted using high-quality materials and advanced manufacturing techniques. These tiles are known for their exceptional durability, making them ideal for high-traffic areas like living rooms, kitchens, and commercial spaces. </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mt-4 mt-lg-0">
              <div class="row align-items-center">
                <div class="col-md-6 col-lg-12"><img loading="lazy" style="height: 300px;" class="img-fluid" src="assets/img/tilels/photo_2023-08-14_20-46-29.jpg" alt="Commercial"></div>
                <div class="col-md-6 col-lg-12 text-md-start text-lg-center">
                  <h5 class="ls text-uppercase mt-4 mb-3">Big Slab</h5>
                  <p class="text-justify">Big slab tiles are the epitome of modern design. These large-format tiles create a seamless and spacious appearance, making them an excellent choice for contemporary interiors.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mt-4 mt-lg-0">
              <div class="row align-items-center">
                <div class="col-md-6 col-lg-12"><img loading="lazy" style="height: 300px;" class="img-fluid" src="assets/img/tilels/WALL-TILES.webp" alt="Hospitality"></div>
                <div class="col-md-6 col-lg-12 text-md-start text-lg-center">
                  <h5 class="ls text-uppercase mt-4 mb-3">Wall-Tiles</h5>
                  <p class="text-justify">Wall tiles are specifically designed to elevate the aesthetics of walls in any space. With an extensive selection of colors, patterns, and textures, wall tiles add a touch of style and personality to your interiors. </p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0">
              <div class="row align-items-center">
                <div class="col-md-6 col-lg-12"><img loading="lazy" style="height: 300px;" class="img-fluid" src="assets/img/tilels/OUTDOOR-TILES.webp" alt="Residential"></div>
                <div class="col-md-6 col-lg-12 text-md-start text-lg-center">
                  <h5 class="ls text-uppercase mt-4 mb-3">Outdoor Tiles</h5>
                  <p class="text-justify">Outdoor tiles are engineered to withstand the elements while maintaining their beauty. These weather-resistant tiles are perfect for transforming patios, pool decks, and outdoor entertaining areas into inviting havens. </p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0">
              <div class="row align-items-center">
                <div class="col-md-6 col-lg-12"><img loading="lazy" style="height: 300px;" class="img-fluid" src="assets/img/tilels/photo_2023-08-14_20-46-42.jpg" alt="Hospitality"></div>
                <div class="col-md-6 col-lg-12 text-md-start text-lg-center">
                  <h5 class="ls text-uppercase mt-4 mb-3">SPC/LVT Vinyl Flooring</h5>
                  <p class="text-justify">SPC (Stone Plastic Composite) and LVT (Luxury Vinyl Tile) flooring offer a fantastic blend of beauty and functionality. SPC boasts excellent water resistance and durability, making it perfect for high-moisture areas.</p>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
        <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="text-white text-center py-0">
      <video class="bg-video"  width="1140" height="240" controls autoplay="autoplay" loop="loop" muted="muted" playsinline="playsinline" loading="lazy" preload="none">
            <source src="assets/img/kingdom video_1.mp4" type="video/mp4">
            <source src="assets/img/kingdom video_1.mp4" type="video/webm">
          </video>
      </section><!-- <section> close ============================-->
      <!-- ============================================-->
      <!-- ============================================-->


    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <div class="container pt-5">
      <section class="about" data-zanim-timeline="{}" data-zanim-trigger="scroll">

        <div class="row justify-content-center">
          <div class="col-lg-11 mt-4">
            <div class="row">
              <div class="col-lg-6 col-sm-6">
                <img loading="lazy" src="assets/img/tilels/photo_2023-08-14_20-46-34.jpg" class="img-fluid"
                  data-zanim-xs='{"delay":0.5}'>
              </div>
              <div class="col-lg-6 d-flex flex-column justify-content-center about-content" data-zanim-xs='{"delay":0.2}'>
                <div class="section-title" >
                <h2>Why Choose Us ? </h2>
                  <p>
                  <div>
                    <p>The Kingdom Ceramic  is not just a ceramic company, but an epitome of artistry, craftsmanship, and timeless beauty. We are driven by our passion for creating exquisite ceramic products that elevate living spaces and captivate the senses. </p>
                  </div>
                  </p>
                </div>
                <div class="icon-box" data-aos-delay="100">
                  <div class="icon"><i class="bx bx-fingerprint"></i></div>
                  <h4 class="title"><a href="#">	Superior Quality</a></h4>
                  <p class="description">
                  <div>Our Tiles boasts an exceptional level of craftsmanship, ensuring that each piece meets the highest standards of quality and excellence. Our artisans have carefully selected the finest ceramic materials, guaranteeing longevity and reliability</div>
                  </p>
                </div>
                <div class="icon-box" data-aos-delay="100">
                  <div class="icon"><i class="bx bx-gift"></i></div>
                  <h4 class="title"><a href="#">Exquisite Design</a></h4>
                  <p class="description">
                  <div>We believe that aesthetics play a vital role in enhancing your living spaces. With its elegant and contemporary design, [Product Name] effortlessly complements any interior décor, whether it's a modern minimalist apartment or a classic Victorian home.</div>
                  </p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </section><!-- <section> close ============================-->
    </div><!-- end of .container-->
    
    <!--  <h3 class="pt-7" style="  text-align: center;-->
    <!--  font-weight: 600;-->
    <!--  margin-bottom: 20px;-->
    <!--  padding-bottom: 20px;-->
    <!--  position: relative;-->
    <!--  " >Our Designs</h3>-->
    <!--<div class="swiper container-fluid theme-slider pb-7" data-swiper='{"autoplay":true,"spaceBetween":30,"loop":true,"slidesPerView":1,"breakpoints":{"670":{"slidesPerView":2},"1200":{"slidesPerView":3}}}'>-->
    <!-- <div class="swiper-wrapper">-->
    
    <!--    <div class="swiper-slide boxx">-->
    <!--    <a href="project.php?ProductUrl="> <img loading="lazy" class="w-100" src="Images/product/" alt="" /> </a>-->
    <!--        <div class="boxx-content">-->
    <!--          <u><h4 Style="color:#fff"></h4></u>-->
    <!--          <ul class="social">-->
                

                  
    <!--          </ul>-->
    <!--      </div>-->
    <!--    </div>-->
       
      
    <!--  </div>-->
    <!--  <div class="swiper-nav">-->
    <!--    <div class="swiper-button-prev"><span class="fas fa-chevron-left"></span></div>-->
    <!--    <div class="swiper-button-next"><span class="fas fa-chevron-right"></span></div>-->
    <!--  </div>-->

    <!--  <h4 class="mt-3" style="  text-align: center;-->
    <!--  ">View Our Latest Catalouge : <br/><a href="Catalouge"><button class="btn btn-primary mt-2" >for Download Catalouge </button></a></h4>-->

    <!--</div>-->
    
    
    
      <section class=" py-0 overflow-hidden text-center" data-zanim-timeline="{}" data-zanim-trigger="scroll">
      <div id="service-icon-box" class="service-page-icon-section inner-page-grey-section">

        <!-- Bootstrap -->
        <div class="container">
            <div class="row py-2" data-zanim-xs='{"delay":0.2}'>
                <div class="col-xs-12">

                    <!-- H3 Heading -->
                    <h3>Our Services</h3>

                    <!-- Paragraph -->
                    <div class="col-xs-12 col-sm-10 col-md-10 col-sm-offset-1 center-text">
                    <p>The Kingdom Ceramic is not just a ceramic company, but an epitome of artistry, craftsmanship, and timeless beauty. We are driven by our passion for creating exquisite ceramic products that elevate living spaces and captivate the senses. </p>
					          </div>
                    <div class="row mt-3 py-5">
                        <!-- icon box  -->
                    <div class=" col-md-4 col-lg-4">
                        <div class="feature-box">
                            <!-- Icon -->
                            <figure> <img loading="lazy" src="assets/img/Serviec/tabs-bg-1.png" alt="icon"> </figure>
                            <!-- Heading -->
                            <h3>Craftsmanship at its best</h3>
                            <!-- Paragraph -->
                            <p>At Kingdom Ceramic, we believe in the power of craftsmanship. Our skilled artisans blend traditional techniques with contemporary flair to create ceramic pieces that are truly extraordinary. Each product is meticulously crafted, ensuring attention to detail and uncompromising quality that sets us apart.</p>
                            
                            <!-- Link -->
                        </div>
                    </div>
                    
                    <!-- icon box  -->
                    <div class="col-md-4 col-lg-4">
                        <div class="feature-box">
                            <!-- Icon -->
                            <figure> <img loading="lazy" src="assets/img/Serviec/PNG-Isolated-HD.png" alt="icon"> </figure>
                            <!-- Heading -->
                            <h3>Our Commitment to Excellence:</h3>
                            <!-- Paragraph -->
                            <p>We take immense pride in our commitment to excellence. From the moment we conceptualize a design to the final stages of production, every step is perfectly executed to ensure that our ceramic products meet the highest standards of craftsmanship and durability. </p>
                            
                            <!-- Link -->
                        </div>
                    </div>
                    
                    
                    
                    
                    <!-- icon box  -->
                    <div class="col-md-4 col-lg-4">
                        <div class="feature-box">
                            <!-- Icon -->
                            <figure> <img loading="lazy" src="assets/img/Serviec/gItem_1170398.png" alt="icon"> </figure>
                            <!-- Heading -->
                            <h3>Exceptional Quality, Enduring Beauty</h3>
                            <!-- Paragraph -->
                            <p>Our ceramics are not just objects of beauty; they are also built to stand the test of time. We carefully select premium materials and employ innovative glazing techniques to ensure that each product maintains its prestige appearance even after years of use. </p>
                            
                            <!-- Link -->
                        </div>
                    </div>
                    
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- End Bootstrap -->

    </div>
    </section><!-- <section> close ============================-->

    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->



    <!--===============================================-->
    <!--    Footer-->
    <!--===============================================-->

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
      <script>

var modalShown = false; // Flag variable to track if modal has been shown

    window.onscroll = function() {
      <?php
          session_start();
          if (!isset($_SESSION["EmailIDD"])) {
              ?>
                  if (!modalShown && document.documentElement.scrollTop > 300) { // Adjust this value to determine when the modal appears
                    document.getElementById("myModal").style.display = "block";
                    modalShown = true; // Set the flag to true so the modal won't appear again
                  }
          <?php } ?>
    };

    document.getElementsByClassName("close")[0].onclick = function() {
      document.getElementById("myModal").style.display = "none";
    };


</script>
   <?php include_once __DIR__.'/C_Layout/footer.php'; ?>
    <?php include_once __DIR__.'/C_Layout/script.php'; ?>
   
  </body>

</html>