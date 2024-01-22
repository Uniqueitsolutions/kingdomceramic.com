<?php
  include_once __DIR__.'/ad_kingdomceramic/Configure/dbconfig.php'; 
  $result=$contactObj->selectAllDataForClient();
  $row=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<html lang="en-US" dir="ltr">
  <head>
  
  <?php include_once __DIR__.'/C_Layout/metalink.php'; ?>

  <?php include_once __DIR__.'/C_Layout/css.php'; ?>
  <link rel="stylesheet" type="text/css" href="hcss/sitemapp.css" />
      <script src="https://use.fontawesome.com/4459dc85b0.js"></script>
      <style>
        hr {
          margin: 1rem 0;
          color: black;
          background-color: currentColor;
          border: 2;
          opacity: .8;
          height: 4px !important;
      }
        </style>
  </head>

  <body>
  <?php include_once __DIR__.'/C_Layout/navbar.php'; ?>

    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section
      class="py-9 overflow-hidden text-center"
      data-zanim-timeline="{}"
      data-zanim-trigger="scroll"
    >
      <div
        class="bg-holder overlay overlay-1"
        style="background-image: url(assets/img/projects_header.jpg)"
        data-parallax="data-parallax"
      ></div>
      <!--/.bg-holder-->
      <div class="container">
        <div class="overflow-hidden">
          <h1 class="fs-5 fs-sm-6 text-white mb-3" data-zanim-xs='{"delay":0}'>
          Site Map
          </h1>
        </div>
      </div>
      <!-- end of .container-->
    </section>
    <!-- <section> close ============================-->
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

            <!-- <section> begin ============================-->
              <section class="pt-5 pb-1" >
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                      <div class="text-center">
                        <h2>King Dom: Site Map</h2>
                      </div>
                    </div>
                  </div>
                  
                </div><!-- end of .container-->
              </section><!-- <section> close ============================-->

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="text-justify p-0" data-zanim-timeline="{}" data-zanim-trigger="scroll">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-md-11 table-responsive">
            <div class="sitemap">
              <hr/>
<nav class="primary" data-zanim-xs='{"delay":0}'>
  <ul>
     <li id="home">
        <a href="https://kingdomceramic.com/">
          <i class="fa fa-home"></i> Home <small>Some kind of description</small>
        </a>
        <ul>
        <li>
              <a href="/about"><i class="fa fa-info-circle"></i> About</a>
              <ul>
              <li>
              <a href="/contact"><i class="fa fa-info-circle"></i> Contact</a>
           </li>
           
              </ul>
           </li>
           <li>
              <a href="/Home"><i class="fa fa-search"></i> Information <small></small></a>
              <ul>
                 <li><a href="/Technical-Specification">Technical Specification</a></li>
                 <li><a href="/Tiles-Calculator">Tiles Calculator</a></li>
                 <li><a href="/Packing-Details">Packing Details</a></li>
              </ul>
           </li>
           <li>
              <a href="/Product"><i class="fa fa-building"></i> Product</a>
              <ul>
                 <li><a href="">Type</a></li>
                 <li><a href="">Size</a></li>
                 <li><a href="">Look</a></li>
                 <li><a href="">Space</a></li>
                 <li><a href="">Finish</a></li>
              </ul>
           </li>
           <li>
              <a href="/Blog"><i class="fa fa-rss"></i> Blog <small>Article .</small></a>
              <ul>
                 
              </ul>
           </li>
          
           <li><a href="/Catelog" class="multi"> E - Catelog</a>
          <ul>
          <li>
              <a href="/Site-Map"><i class="fa fa-info-circle"></i> Site Map</a>
           </li>
    </ul>
          </li>
           
        </ul>
     </li>
  </ul>
</nav>
<hr/>
<nav class="primary mb-5" data-zanim-xs='{"delay":0.5}'>
  <ul>
     <li id="home">
        <a href="Products">
          <i class="fa fa-home"></i> Product <small>Some kind of description</small>
        </a>
        <ul>
        <li>
              <a href="/"><i class="fa fa-info-circle"></i> Type</a>
              <ul>
              <?php  
                     $result1=$typeObj->selectAllDataForAdmin();
                     $sno=1;
                     while($row1=mysqli_fetch_assoc($result1))             
                        {
                     ?>
              <li>
              <a href="Type/<?php echo $row1['TypeUrl'] ?>"><?php echo $row1['TypeName'] ?></a>
              </li>
                <?php } ?>
              </ul>
           </li>
           <li>
              <a href="/"><i class="fa fa-search"></i> Size <small></small></a>
              <ul>
              <?php  
                     $result2=$sizeObj->selectAllDataForAdmin();
                     $sno=1;
                     while($row2=mysqli_fetch_assoc($result2))             
                        {
                         
                     ?>
                 <li>
                       <a class=""
                          href="Size/<?php echo $row2['SizeUrl'] ?>"
                          > <?php echo $row2['SizeName'] ?></a>
                      </li>
                 <?php } ?>
              </ul>
           </li>
           <li>
              <a href="/"><i class="fa fa-building"></i> Finish</a>
              <ul>
              <?php  
                     $result4=$finishObj->selectAllDataForAdmin();
                     $sno=1;
                     while($row4=mysqli_fetch_assoc($result4))             
                        {
                         
                     ?>
                      <li>
                        <a
                          href="Finish/<?php echo $row4['FinishUrl'] ?>"
                          data-finishid="1"
                          data-finishname="<?php echo $row4['FinishName'] ?>"
                          class="finish fn_1"
                        >
                        <?php echo $row4['FinishName'] ?>
                        </a>
                      </li>
                      <?php } ?>
              </ul>
              
           </li>
           <li>
              <a href="/"><i class="fa fa-rss"></i> Space </a>
              <ul>
              <?php  
                     $result3=$spaceObj->selectAllDataForAdmin();
                     $sno=1;
                     while($row3=mysqli_fetch_assoc($result3))             
                        {
                         
                     ?>
                      <li>
                        <a
                          href="Space/<?php echo $row3['SpaceUrl'] ?>"
                          data-spaceid="1"
                          data-spacename="Bathroom"
                          class="space sp_1"
                        >
                        <?php echo $row3['SpaceName'] ?>
                        </a>
                      </li>
                      <?php } ?>
              </ul>
           </li>
          
           <li><a href="/" class="multi"> Look</a>
          <ul>
          <?php  
                     $result5=$lookObj->selectAllDataForAdmin();
                     $sno=1;
                     while($row5=mysqli_fetch_assoc($result5))             
                        {
                         
                     ?>
                      <li>
                        <a
                          href="Look/<?php echo $row5['LookUrl'] ?>"
                          data-effectid="1"
                          data-effectname="<?php echo $row5['LookName'] ?>"
                          class="effect eff_1"
                        >
                        <?php echo $row5['LookName'] ?>
                        </a>
                      </li>
                      <?php } ?>
          </ul>
          </li>
        </ul>
     </li>
  </ul>
</nav>
<hr/>
</div>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->
    </main>
    <!-- ===============================================-->
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
    
    <script>
      jQuery(document).ready(function() {
        $w = jQuery(window).width();
        if($w <= 991)
        {		
          jQuery(window).bind("load", function() {
            $('#changelogo').attr("src", "https://adilaceramic.com/img/logo/logo.png?v=080121");	
          });
        }
      });
  </script>


    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-1.12.4.min.js"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
      integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
      crossorigin="anonymous"
    ></script>
    <?php include_once __DIR__.'/C_Layout/footer.php'; ?>
    <?php include_once __DIR__.'/C_Layout/script.php'; ?>
  </body>
</html>
