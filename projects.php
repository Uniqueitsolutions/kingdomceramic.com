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

    <link href="hcss/cproduct.css" rel="stylesheet" />
  <link href="hcss/shortcodes.css" rel="stylesheet">
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
        style="background-image: url('assets/img/pagebackground/Product.jpg')"
        data-parallax="data-parallax"
      ></div>
      <!--/.bg-holder-->
      <div class="container">
        <div class="overflow-hidden">
          <h1 class="fs-5 fs-sm-6 text-white mb-3" data-zanim-xs='{"delay":0}'>
            Designs
          </h1>
        </div>
        <div class="overflow-hidden">
          <p
            class="fs-2 fw-light ls text-400 text-uppercase"
            data-zanim-xs='{"delay":0.1}'
          >
            Where love made visible
          </p>
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

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section>
        <div class="container" data-zanim-timeline="{}" data-zanim-trigger="scroll">
          <div class="row clearfix">
            <div class="col-lg-3 col-md-4 col-sm-12 sidebar-side" data-zanim-xs='{"delay":0}'>
              <div class="blog-sidebar pro-sidebar" id="accordion">
                <div class="sidebar-widget categories-widget">
                  <div class="widget-title" id="headingTwo">
                    <h3
                      class="collapsed"
                      data-toggle="collapse"
                      data-target="#collapse1"
                      aria-expanded="false"
                      aria-controls="collapse1"
                    >
                      Type
                      <span>&nbsp;<i class="fas fa-caret-down fa-lg"></i></span>
                    </h3>
                    <img loading="lazy"
                      src="assets/img/icon/edit.png"
                      width="45"
                      class="px-1 img-fluid"
                    />
                  </div>
                  <div
                    class="widget-content collapse show"
                    id="collapse1"
                    aria-labelledby="headingTwo"
                    data-parent="#accordion"
                  >
                    <ul class="list clearfix" >
                    <?php  
                     $result1=$typeObj->selectAllDataForAdmin();
                     $sno=1;
                     while($row1=mysqli_fetch_assoc($result1))             
                        {
                     ?>
                      <li>
                        <a
                          class=""
                          href="Type/<?php echo $row1['TypeUrl'] ?>"
                          ><?php echo $row1['TypeName'] ?></a
                        >
                      </li>
                      <?php } ?>
                    </ul>
                  </div>
                </div>
                <div class="sidebar-widget categories-widget" data-zanim-xs='{"delay":0.1}'>
                  <div class="widget-title" id="headingThree">
                    <h3
                      class="collapsed"
                      data-toggle="collapse"
                      data-target="#collapse2"
                      aria-expanded="false"
                      aria-controls="collapse2"
                    >
                      Size
                      <span>
                        &nbsp;<i class="fas fa-caret-down fa-lg"></i
                      ></span>
                    </h3>
                    <img loading="lazy"
                      src="assets/img/icon/edit.png"
                      class="px-1"
                      width="45"
                    />
                  </div>
                  <div
                    class="widget-content collapse show"
                    id="collapse2"
                    aria-labelledby="headingThree"
                    data-parent="#accordion"
                  >
                    <ul class="list clearfix" id="drop2">
                    <?php  
                     $result2=$sizeObj->selectAllDataForAdmin();
                     $sno=1;
                     while($row2=mysqli_fetch_assoc($result2))             
                        {
                         
                     ?>
                      <li>
                       <a class=""
                          href="javascript:void(0)"
                          > <?php echo $row2['SizeUrl'] ?></a>
                      </li>
                      <?php } ?>
                    </ul>
                  </div>
                </div>
                <div class="sidebar-widget categories-widget" data-zanim-xs='{"delay":0.3}'>
                  <div class="widget-title" id="headingOne">
                    <h3
                      class="collapsed"
                      data-toggle="collapse"
                      data-target="#collapse5"
                      aria-expanded="true"
                      aria-controls="collapse5"
                    >
                      Finish
                      <span>&nbsp;<i class="fas fa-caret-down fa-lg"></i></span>
                    </h3>
                    <img loading="lazy"
                      src="assets/img/icon/edit.png"
                      width="45"
                      class="px-1 img-fluid"
                    />
                  </div>
                  <div
                    class="widget-content collapse show"
                    id="collapse5"
                    aria-labelledby="headingOne"
                    data-parent="#accordion"
                  >
                    <ul class="list clearfix" id="drop4">
                    <?php  
                     $result4=$finishObj->selectAllDataForAdmin();
                     $sno=1;
                     while($row4=mysqli_fetch_assoc($result4))             
                        {
                         
                     ?>
                      <li>
                        <a
                          href="javascript:void(0)"
                          class="finish fn_1"
                        >
                        <?php echo $row4['FinishUrl'] ?>
                        </a>
                      </li>
                      <?php } ?>
                    </ul>
                  </div>
                </div>
                <div class="sidebar-widget categories-widget" data-zanim-xs='{"delay":0.5}'>
                  <div class="widget-title" id="headingThree">
                    <h3
                      class="collapsed"
                      data-toggle="collapse"
                      data-target="#collapse3"
                      aria-expanded="false"
                      aria-controls="collapse3"
                    >
                      Space
                      <span>&nbsp;<i class="fas fa-caret-down fa-lg"></i></span>
                    </h3>
                    <img loading="lazy"
                      src="assets/img/icon/edit.png"
                      class="px-1"
                      width="45"
                    />
                  </div>
                  <div
                    class="widget-content collapse show"
                    id="collapse3"
                    aria-labelledby="headingThree"
                    data-parent="#accordion"
                  >
                    <ul class="list clearfix" id="drop3">
                    <?php  
                     $result3=$spaceObj->selectAllDataForAdmin();
                     $sno=1;
                     while($row3=mysqli_fetch_assoc($result3))             
                        {
                         
                     ?>
                      <li>
                        <a
                          href="javascript:void(0)"
                          data-spaceid="1"
                          data-spacename="Bathroom"
                          class="space sp_1"
                        >
                        <?php echo $row3['SpaceUrl'] ?>
                        </a>
                      </li>
                      <?php } ?>
                    </ul>
                  </div>
                </div>
                <div class="sidebar-widget categories-widget" data-zanim-xs='{"delay":0.7}'>
                  <div class="widget-title" id="headingOne">
                    <h3
                      class="collapsed"
                      data-toggle="collapse"
                      data-target="#collapse4"
                      aria-expanded="true"
                      aria-controls="collapse4"
                    >
                      Look
                      <span>&nbsp;<i class="fas fa-caret-down fa-lg"></i></span>
                    </h3>
                    <img loading="lazy"
                      src="assets/img/icon/edit.png"
                      width="45"
                      class="px-1 img-fluid"
                    />
                  </div>
                  <div
                    class="widget-content collapse show"
                    id="collapse4"
                    aria-labelledby="headingOne"
                    data-parent="#accordion"
                  >
                    <ul class="list clearfix" id="drop5">
                    <?php  
                     $result5=$lookObj->selectAllDataForAdmin();
                     $sno=1;
                     while($row5=mysqli_fetch_assoc($result5))             
                        {
                         
                     ?>
                      <li>
                        <a
                          href="javascript:void(0)"
                          data-effectid="1"
                          data-effectname="<?php echo $row5['LookName'] ?>"
                          class="effect eff_1"
                        >
                        <?php echo $row5['LookUrl'] ?>
                        </a>
                      </li>
                      <?php } ?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-9 col-md-8 col-sm-12 content-side" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="team-style-three product py-0">

                <div
                  class="row clearfix" id="div1" data-zanim-xs='{"delay":0}'
                >
                    
                </div>
              </div>

            </div>
          </div>

          <!-- <div class="row justify-content-center text-center">
            <div class="col-lg-auto">
              <nav>
                <ul class="pagination font-base">
                  <li class="page-item">
                    <a class="page-link" href="#!"
                      ><span aria-hidden="true">«</span
                      ><span class="sr-only">Previous</span></a
                    >
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#!">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#!">2</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#!">3</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#!" aria-label="Next"
                      ><span aria-hidden="true">»</span
                      ><span class="sr-only">Next</span></a
                    >
                  </li>
                </ul>
              </nav>
            </div>
          </div> -->
        </div>
        <!-- end of .container-->
      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <!-- ============================================-->
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

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
   
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

    <script type="text/javascript">
            var selectedValue = null;
            var selectedValue1 = null;
            var selectedValue2 = null;
            var selectedValue3 = null;
            var selectedValue4 = null;

            $("#drop1 li").click(function() {
                 $(this).siblings().removeClass("active").css("border-bottom", "none");
                // Remove the active class from all li elements
                $("#drop1 li").removeClass("active");
                console.log("132");
                  $("#drop5 li").css("border-bottom", "none");
                // Add the active class to the clicked li element
                $(this).addClass("active");
  $(this).css("border-bottom", "solid 2px");
                // Get the selected value
                selectedValue = $(this).text().trim();
                console.log(selectedValue);
                // Perform AJAX request to load the content
                loadContent();
            });

            $("#drop2 li").click(function() { 
                $(this).siblings().removeClass("active").css("border-bottom", "none");
                // Remove the active class from all li elements
                $("#drop2 li").removeClass("active");
  $("#drop5 li").css("border-bottom", "none");
                // Add the active class to the clicked li element
                $(this).addClass("active");
                // Get the selected value
                selectedValue1 = $(this).text().trim();
                console.log(selectedValue1);
  $(this).css("border-bottom", "solid 2px");
                // Perform AJAX request to load the content
                loadContent();
            });

            $("#drop3 li").click(function() {
                 $(this).siblings().removeClass("active").css("border-bottom", "none");
                // Remove the active class from all li elements
                $("#drop3 li").removeClass("active");
  $("#drop5 li").css("border-bottom", "none");
                // Add the active class to the clicked li element
                $(this).addClass("active");
  $(this).css("border-bottom", "solid 2px");
                // Get the selected value
                selectedValue2 = $(this).text().trim();
                // Perform AJAX request to load the content
                loadContent();
            });
 
            $("#drop4 li").click(function() {
                 $(this).siblings().removeClass("active").css("border-bottom", "none");
                // Remove the active class from all li elements
                $("#drop4 li").removeClass("active");
  $("#drop5 li").css("border-bottom", "none");
                // Add the active class to the clicked li element
                $(this).addClass("active");
  $(this).css("border-bottom", "solid 2px");
                // Get the selected value
                selectedValue3 = $(this).text().trim();

                // Perform AJAX request to load the content
                loadContent();
            });

            $("#drop5 li").click(function() {
                 $(this).siblings().removeClass("active").css("border-bottom", "none");
                // Remove the active class from all li elements
                $("#drop5 li").removeClass("active");
  $("#drop5 li").css("border-bottom", "none");
                // Add the active class to the clicked li element
                $(this).addClass("active");
  $(this).css("border-bottom", "solid 2px");
                // Get the selected value
                selectedValue4 = $(this).text().trim();
   // Add the border-bottom to the clicked li element
    $(this).css("border-bottom", "solid 2px");
                // Perform AJAX request to load the content
                loadContent(); 
            });


            function loadContent() {
                $.ajax({
                    url: "https://kingdomceramic.com/ad_kingdomceramic/Admin/demo2.php?TypeUrl=" + (selectedValue || '') + "&SizeUrl=" + (selectedValue1 || '') + "&SpaceUrl=" + (selectedValue2 || '') + "&FinishUrl=" + (selectedValue3 || '') + "&LookUrl=" + (selectedValue4 || ''),
                   success: function(result) {
                        $("#div1").html(result);
                        // Get all the image elements with the "product-image" class
                        var images = document.querySelectorAll('.productImage');

                      // Loop through each image
                      images.forEach(function(img) {
                        // Create an image object to get the actual image dimensions
                        var imageObj = new Image();

                        // Set the image source to the same source as the displayed image
                        imageObj.src = img.src;
console.log(imageObj);
                        // Once the image has loaded, calculate the aspect ratio and apply styles
                        imageObj.onload = function() {
                          var imgWidth = imageObj.width;
                          var imgHeight = imageObj.height;

                          var gimgHeight =  imgHeight/100*37;;
                          var gimgWidth = imgWidth%29;
                          // Check if height is greater than width
                         
                          if (imgHeight > imgWidth) {
                            if((imgHeight-imgWidth)>50){
// Height is greater than width
img.style.height = gimgHeight+'px';
                              img.style.width = 'auto'; // Automatically adjust width to maintain aspect ratio
                              img.style.transform = 'rotate(90deg)'; // Reset rotation
                                img.style.marginTop ='-'+(gimgHeight/4)+'px';
                              img.style.marginBottom ='-'+(gimgHeight/4)+'px';
                             img.style.marginLeft =(gimgHeight/4)+ 'px';
                            }
                              
                              
                            } else if (imgWidth > imgHeight) {
                                
// img.style.height = '250px';

                              // Width is greater than height
                              // img.style.width = '250px';
                              // img.style.height = 'auto'; // Automatically adjust height to maintain aspect ratio
                              img.style.transform = 'rotate(0deg)'; // Reset rotation
                            } else {
                              // Width and height are equal or within 250px, no rotation needed
                              // img.style.width = '250px';
                              // img.style.height = 'auto';
                              img.style.transform = 'rotate(0deg)';
                            }
                        };
                      });

// 800 * 1600 mate 
var images = document.querySelectorAll('.eightysxixty');

// Loop through each image
images.forEach(function(img) {
  // Create an image object to get the actual image dimensions
  var imageObj = new Image();

  // Set the image source to the same source as the displayed image
  imageObj.src = img.src;
console.log(imageObj);
  // Once the image has loaded, calculate the aspect ratio and apply styles
  imageObj.onload = function() {
    var imgWidth = imageObj.width;
    var imgHeight = imageObj.height;

    var gimgHeight =  imgHeight/127*37;;
    var gimgWidth = imgWidth%29;
    // Check if height is greater than width
   
    if (imgHeight > imgWidth) {
      if((imgHeight-imgWidth)>50){
// Height is greater than width
img.style.height = gimgHeight+'px';
        img.style.width = 'auto'; // Automatically adjust width to maintain aspect ratio
        img.style.transform = 'rotate(90deg)'; // Reset rotation
          img.style.marginTop ='-'+(gimgHeight/4)+'px';
        img.style.marginBottom ='-'+(gimgHeight/4)+'px';
      // img.style.marginLeft =(gimgHeight/4)+ 'px';
      }
        
        
      } else if (imgWidth > imgHeight) {
          
// img.style.height = '250px';

        // Width is greater than height
        // img.style.width = '250px';
        // img.style.height = 'auto'; // Automatically adjust height to maintain aspect ratio
        img.style.transform = 'rotate(0deg)'; // Reset rotation
      } else {
        // Width and height are equal or within 250px, no rotation needed
        // img.style.width = '250px';
        // img.style.height = 'auto';
        img.style.transform = 'rotate(0deg)';
      }
  };
});

                    },
  error: function(xhr, textStatus, errorThrown) {
    console.error('Error: ' + errorThrown);
  }
                });
            }

          window.onload = function() {
            if (<?php echo json_encode($_GET["TypeUrl"]); ?> != null) {
                selectedValue = <?php echo json_encode($_GET["TypeUrl"]);?>
             
              }
              if (<?php echo json_encode($_GET["SizeUrl"]); ?> != null) {
                selectedValue1 = <?php echo json_encode($_GET["SizeUrl"]);?>
             
              }
              if (<?php echo json_encode($_GET["SpaceUrl"]); ?> != null) {
                selectedValue2 = <?php echo json_encode($_GET["SpaceUrl"]);?>
             
              }
              if (<?php echo json_encode($_GET["FinishUrl"]); ?> != null) {
                selectedValue3 = <?php echo json_encode($_GET["FinishUrl"]);?>
             
              }
              if (<?php echo json_encode($_GET["LookUrl"]); ?> != null) {
                selectedValue4 = <?php echo json_encode($_GET["LookUrl"]);?>
             
              }
            
            loadContent();
          };
  </script>
 <?php include_once __DIR__.'/C_Layout/footer.php'; ?>
    <?php include_once __DIR__.'/C_Layout/script.php'; ?>
  </body>
</html>
