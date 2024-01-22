<?php
  include_once __DIR__.'/ad_kingdomceramic/Configure/dbconfig.php'; 
  $result=$contactObj->selectAllDataForClient();
  $row=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
<?php include_once __DIR__.'/C_Layout/metalink.php'; ?>

<?php include_once __DIR__.'/C_Layout/css.php'; ?>

</head>

<body>
<?php include_once __DIR__.'/C_Layout/navbar.php'; ?>
  <!-- ============================================-->
  <!-- <section> begin ============================-->
  <section class="py-9 overflow-hidden text-center" data-zanim-timeline="{}" data-zanim-trigger="scroll">
    <div class="bg-holder overlay overlay-1" style="background-image:url('assets/img/pagebackground/about.jpg');"
      data-parallax="data-parallax"></div>
    <!--/.bg-holder-->
    <div class="container">
      <div class="overflow-hidden">
        <h1 class="fs-5 fs-sm-6 text-white mb-3 animate__animated" data-zanim-xs='{"delay":0}'>Stylish Interior</h1>
      </div>
      <div class="overflow-hidden">
        <p class="fs-2 fw-light ls text-400 text-uppercase" data-zanim-xs='{"delay":0.1}'>is The Symbol of Elegance</p>
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

    <style>
      .about {

        box-shadow: 0px 0px 16px rgba(0, 0, 0, 0.5);
        padding: 30px;
        background: #fff;
        margin-bottom: 30px;
      }
      
        /*** 
        =============================================
            About Style10 Area Css   
        =============================================
        ***/
        .about-style10-area {
          position: relative;
          display: block;
          background: #f8f8f8;
          padding: 100px 0px ;
          z-index: 10;
        }

        .about-style10__image-box {
          position: relative;
          display: block;
          min-height: 705px;
        }

        .about-style10__image-box .title-outer {
          position: absolute;
          top: 0px;
          right: -280px;
          color: rgba(var(--thm-black-rgb), .20);
          font-size: 32px;
          font-weight: 700;
          text-transform: uppercase;
          letter-spacing: 0.54em;
          display: inline-block;
          transition: .5s ease;
          transform: rotate(90deg) translateX(0%);
          transform-origin: 0 0;
          width: max-content;
          font-family: var(--thm-font-2);
        }


        .about-style10__image-box .top-image {
          position: relative;
          display: block;
          max-width: 570px;
          width: 100%;
          min-height: 510px;
          background-attachment: scroll;
          background-repeat: no-repeat;
          background-position: center top;
          background-size: cover;
        }

        .about-style10__image-box .bottom-image {
          position: absolute;
          bottom: 0;
          right: 0;
          border: 10px solid #ffffff;
        }

        .about-style10__image-box .bottom-image .ovarlay-content {
          position: absolute;
          left: -240px;
          bottom: 40px;
          background: var(--thm-base);
          padding: 46px 45px 50px;
        }

        .about-style10__image-box .bottom-image .ovarlay-content::before {
          position: absolute;
          top: 15px;
          left: 15px;
          bottom: 15px;
          right: 15px;
          border: 1px dashed #ffffff;
          content: "";
        }

        .about-style10__image-box .bottom-image .ovarlay-content h2 {
          color: #ffffff;
          font-size: 35px;
          line-height: 45px;
        }

        .about-style10__image-box .bottom-image .inner {
          position: relative;
          display: block;
          overflow: hidden;
        }

        .about-style10__image-box .bottom-image .inner img {
          width: 100%;
        }



        .about-style10__content {
          position: relative;
          display: block;
          padding-top: 108px;
        }

        .about-style10__content .title-box {
          position: relative;
          display: block;
          padding-bottom: 26px;
        }

        .about-style10__content .title-box h2 {
          font-size: 60px;
          line-height: 1.2em;
          font-weight: 300;
          text-transform: capitalize;
        }

        .about-style10__content .inner-content {
          position: relative;
          display: block;
        }

        .about-style10__content .inner-content p {
          font-size: 16px;
          line-height: 32px;
          font-weight: 300;
          letter-spacing: 0.12em;
          margin: 0;
        }

        .about-style10__content__signature-box {
          position: relative;
          display: block;
          padding-top: 40px;
        }

        .about-style10-area.v-m-v-sec .single-service-style7 img{
        width: auto;
        }
        .about-style10-area .martop {
          margin-top: 0px;
        }


    </style>
    <!-- ============================================-->
    <!-- <section> begin ============================-->
      <section class="about container p-5 mt-5" data-zanim-timeline="{}" data-zanim-trigger="scroll">

        <div class="row justify-content-center ">
          <div class="col-lg-11 mt-4">
            <div class="row ">
                
              <div class="col-lg-6 col-sm-6">
                  
                <img loading="lazy" src="assets/img/photo_2023-08-13_09-43-49.jpg" class="img-fluid"  data-zanim-xs='{"delay":0}' style="transform: translate(0px, 0px); opacity: 1;">
              <img loading="lazy" src="assets/img/photo_2023-08-13_09-44-17.jpg" class="img-fluid mt-5"  data-zanim-xs='{"delay":0}' style="transform: translate(0px, 0px); opacity: 1;">
              
              </div>
              <div class="col-lg-6 d-flex flex-column justify-content-center about-content" data-zanim-xs='{"delay":0}'>
                <div class="section-title" >
                  <h2>About Us </h2>
                  <p>
                  <div>
                    <p>At our business, we take great pride in providing a variety of laminate services to our clients.
                      From product selection through installation and beyond, our aim is to offer first-rate service and
                      assistance.</p>
                  </div>
                  </p>
                </div>
                <div class="icon-box" data-aos-delay="100">
                  <div class="icon"><i class="bx bx-fingerprint"></i></div>
                  <h4 class="title"><a href="#">Versatility</a></h4>
                  <p class="description">
                  <div>The versatility of Our Tiles knows no bounds. Whether you're seeking a stunning centre piece for your dining table, a unique addition to your bathroom, or a stylish accent for your living room, this ceramic product seamlessly adapts to any space and purpose.</div>
                  </p>
                </div>
                <div class="icon-box" data-aos-delay="100">
                  <div class="icon"><i class="bx bx-gift"></i></div>
                  <h4 class="title"><a href="#">Easy Maintenance</a></h4>
                  <p class="description">
                  <div>We understand the importance of convenience in today's fast-paced world. That's why Our Tiles is designed with easy maintenance in mind. Simply wipe it clean with a soft cloth or a mild cleaning solution, and it will retain its luster for years to come.</div>
                  </p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </section><!-- <section> close ============================-->
    <section id="about10" data-zanim-timeline="{}" data-zanim-trigger="scroll" class="about-style10-area v-m-v-sec" style="background-image: url(assets/img/01-banner-_-India-1.jpg);">
      <div class="container">
          <div class="row martop" >
              <!--Start Single Service Style7-->
              <div class="col-xl-4 col-lg-4 col-md-12">
                  <div class="single-service-style7 single-service-style7--style2 wow fadeInUp" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-name: fadeInUp;" data-zanim-xs='{"delay":0.3}'>
                      <div class="text-holder">
                          <h3><a>Our Mission</a></h3>
                          <p>At Kingdom Ceramic , we are committed to delight customers with world class ceramic products with best quality.</p>
                      </div>
                      
                  </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-12">
                  <div class="single-service-style7 single-service-style7--style2 wow fadeInUp" data-wow-duration="1300ms" style="visibility: visible; animation-duration: 1300ms; animation-name: fadeInUp;" data-zanim-xs='{"delay":0.4}'>
                      <div class="text-holder">
                          <h3><a>Our Vision</a></h3>
                          <p>To become a preferred brand in ceramic industry through our quality products, research and innovation.</p>
                      </div>
                      
                  </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-12">
                  <div class="single-service-style7 single-service-style7--style2 wow fadeInUp" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;" data-zanim-xs='{"delay":0.5}'>
                      <div class="text-holder">
                          <h3><a>Core Value</a></h3>
                          <p>Totally customer satisfaction by providing best quality products at competitive price with promised delivery on time.</p>
                      </div>
                      
                  </div>
              </div>
              <!--End Single Service Style7-->
          </div>
  
  
      </div>
  </section>
    <style>
      /* Tabs section container */
                          .site-tabs {
                            display: block;
                            width: 100%;
                            clear: both;
                            position: relative;
                            text-align: center;
                          }

                          @media screen and (max-width: 991px) {
                            .site-tabs {
                              text-align: center;
                              min-height: 10px;
                            }
                          }

                          @media screen and (max-width: 767px) {
                            .site-tabs {
                              padding-top: 50px;
                              padding-bottom: 50px;
                            }
                          }

                          .site-tabs .tab-images {

                          }

                          .site-tabs .site-tab-bg {
                            /* tabs section background image */
                            content: "";
                            position: absolute;
                            top: 0;
                            right: 0;
                            bottom:0;
                            display: block;
                            height: 500px;
                            width: 100%;
                            max-width: 100%;
                            background: no-repeat top right;
                            background-size: auto;
                            opacity: 0;
                            transition: 200ms opacity ease-in-out;
                          }

                          .site-tabs .site-tab-bg.active {
                            opacity: 1;
                          }



                          .site-tabs h1 {
                            /* h1 heading */
                            /*margin-bottom: 70px;*/
                          }

                          @media screen and (max-width: 991px) {
                            .site-tabs h1 {
                              /*margin-bottom: 100px;*/
                            }
                          }

                          @media screen and (max-width: 767px) {
                            .site-tabs h1 {
                              /*margin-bottom: 70px;*/
                            }
                          }

                          @media screen and (min-width: 992px) {
                            .site-tabs h1:before {
                              margin: 0;
                            }
                          }

                          /* Tabs buttons */
                          .site-tabs-buttons {
                            padding: 0;
                            display: block;
                            list-style: none;
                            width: 62%;
                            clear: both;
                            overflow: hidden;
                            margin: 0 auto;
                            margin-bottom:60px;
                            text-align: center;
                          }

                          .site-tabs-buttons li {
                            display: block;
                            margin: 0;
                            list-style: none;
                            float: left;
                            padding: 0 50px 0 0;

                          }

                          @media screen and (max-width: 1199px) {
                          .site-tabs-buttons {
                            width: 73%;
                            }

                          }

                          @media screen and (max-width: 991px) {
                          .site-tabs-buttons {
                            width: 100%;
                            }

                          }

                          @media screen and (max-width: 767px) {
                            .site-tabs-buttons li {
                              display: block;
                              width: 100%;
                              padding: 0;
                              margin-bottom: 5px;
                            }
                          }

                          .site-tabs-buttons li.active a {
                            /* Active tab */
                            color: #4543d0;
                            /*background: #4543d0;*/
                            border-bottom:#4543d0 solid 2px;
                          }

                          .site-tabs-buttons a {
                            /*background: #f8f7f7;*/
                            font-family: inherit;
                            font-size: 17px;
                            font-weight: 700;
                            line-height: 14px;
                            text-transform: uppercase;
                            color: #909090;
                            display: block;
                            padding: 8px 0px;
                            transition: 400ms ease;
                            transition-property: color, background;
                            position: relative;
                            z-index: 1;
                            overflow: hidden;

                          }

                          .site-tabs-buttons a:hover {
                            /*background: #ece9e9;*/
                            color:#4543d0;
                          }

                          @media screen and (max-width: 767px) {
                            .site-tabs-buttons a {
                              padding-left: 20px;
                              padding-right: 20px;
                            }
                          }

                          /* Tabs content */
                          .site-tabs-content {
                            margin: 0;
                            padding: 0;
                            display: block;
                            width: 100%;
                            clear: both;
                            color: #959595;
                            font-family: inherit;
                            font-size: 13px;
                            font-weight: 400;
                            line-height: 28px;
                            text-align: left;
                          }

                          .site-tabs-content p {
                            color: #828282;
                            font-family: inherit;
                            font-size: 15px;
                            font-weight: 400;
                            line-height: 1.7;
                            margin-bottom: 40px;
                          }

                          .site-tabs-content h3 {
                            color: #828282;
                            font-family: inherit;
                            font-size: 21px;
                            font-weight: 700;
                            line-height:1.5;
                            margin-bottom: 30px;
                            padding:0;
                            margin:0;
                          }

                          .site-tabs-content ul {
                            margin: 0;
                            padding: 0;
                            display: block;
                            width: 100%;
                            color: #828282;
                            font-family: inherit;
                            font-size: 15px;
                            font-weight: 400;
                          }

                          .site-tabs-content li {
                            position: relative;
                            list-style: none;
                            width: 100%;
                            display: block;
                            margin: 0 0 10px;
                            padding: 0 0 0 25px;
                          }



                          .site-tabs-content li:before {
                            content: "";
                            position: absolute;
                            top: 7px;
                            left: 0;
                            bottom: 0;
                            width:14px;
                            height:14px;
                          }




    </style>
    <!-- ============================================-->
    <div id="why-us" class="site-tabs site-white-section py-5 mb-3" data-zanim-timeline="{}" data-zanim-trigger="scroll">

      <!-- Bootstrap -->
      <div class="container">
          <div class="row" data-zanim-xs='{"delay":0.4}'>
            <!-- H1 Heading -->
                  <h2>Why choose us ?</h2>

                  
                      
              <div class="col-xs-12">
                  <!-- Tabs wrapper -->
                  <div class="site-tabs-wrapper" id="site-tabs-1">

                    

                      <!-- Tabs content -->   <!-- Tab 1 -->
                      <div class="site-tabs-content mt-2" id="tab-1" style="display: block;">
                        <div class="row" data-zanim-xs='{"delay":0.5}'>
                          <div class="col-md-6">
                            <!-- Paragraph -->
                            <h3>Customer Satisfaction And Unleashing Creativity  </h3>
                            <p> At the heart of our business is the satisfaction of our customers. We strive to provide a seamless and personalized experience, from assisting you in selecting the perfect ceramic piece to ensuring its safe delivery to your doorstep. </p>
                            <!-- order List -->
                                <ul>
                                  <li>At Kingdom Ceramic, we believe that ceramic artistry is an expression of creativity. </li>
                                    <li>Our knowledgeable and friendly team is here to answer your queries, offer design advice, and cater to your specific requirements.</li>
                                    <li>We constantly push the boundaries of design, blending traditional techniques with</li>
                                </ul>
                            </div>
                            
                            <div class="col-md-6" data-zanim-xs='{"delay":0.6}'>
                              <img loading="lazy" src="assets/img/tabs-bg-1.png"  class="img-fluid">
                            <div class="site-tab-bg tab-bg-1 active" style="background-image: url()"></div>
                            </div>
                        </div>
                        
                          
                      </div>
                      
                  </div>
                  <!-- End Tabs -->

              </div>
              
          </div>
      </div>
      <!-- End Bootstrap -->

  </div>
    <style>
      .block2 {
        padding: 100px 0;
        background-color: #f5f5f5;
      }
    </style>

    <section class="block2 mb-5" data-zanim-timeline="{}" data-zanim-trigger="scroll">
      <div class="fixed-bg bg1"></div>
      <div class="container">
        <div class="latest-projects-section">
          <div class="row align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-zanim-xs='{"delay":0.1}' data-wow-duration="1200ms"
              style="visibility: visible; animation-duration: 1200ms; animation-name: fadeInUp;">
              <img loading="lazy" class="img-fluid" src="assets/img/02-banner-_-India-1.jpg" alt="">
            </div>
            <div class="col-lg-5">
              <div class="project-text wow fadeInUp" data-wow-duration="1000ms"
                style="visibility: visible; animation-duration: 1000ms; animation-name: fadeInUp;">
                <h3 class="sub-title" data-zanim-xs='{"delay":0}'>Make in India.</h3>
                <p data-zanim-xs='{"delay":0}'>Kingdom Tiles has carved out its whole bouquet of products right on Indian soil. These products have
                  been conceptualized, designed, and manufactured in India.</p>
              </div><!--project-text end-->
            </div>
            
          </div>
        </div><!--latest-projects-section end-->
      </div>
    </section>

    



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