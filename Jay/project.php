<?php
  include_once __DIR__.'/ad_kingdomceramic/Configure/dbconfig.php'; 

      $result1 = $productObj->selectByProductUrl($_GET["ProductUrl"]);
      $row1=mysqli_fetch_assoc($result1);

      $result=$contactObj->selectAllDataForClient();
      $row=mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
  <base href="https://kingdomceramic.com/ ">
  <!-- ===============================================-->
  <!--    Document Title-->
  <!-- ===============================================-->
  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php echo $row1['MetaTitle'] ?></title>  

  <meta content="<?php echo $row1['MetaDescription'] ?>" name="description">

  <meta content="<?php echo $row1['MetaKeywords'] ?>" name="keywords">

  <meta property="og:title" content="<?php echo $row1['MetaOgTitle'] ?>">

  <meta property="og:description" content="<?php echo $row1['MetaOgDescription'] ?>">

  <meta property="og:image" content="Images/product/<?php echo $row1['MetaOgImage'] ?>">

  <?php include_once __DIR__.'/C_Layout/css.php'; ?>
  <link href="hcss/cpproduct.css" rel="stylesheet">
  <style>
      .borders{
        box-sizing: border-box;
         border: 2px solid gray;
      }
      .image-container {
    width: 100%; /* Adjust the width of the container as needed */
    height: auto; /* Allow the container's height to adjust */
    overflow: hidden; /* Hide any overflowing content */
}

#img-product {
    width: 100%;
    height: 100%;
    object-fit: contain; /* Maintain aspect ratio and fit image within the container */
}
  </style>
  </head>

  <body>
  <?php include_once __DIR__.'/C_Layout/navbar.php'; ?>

    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-9 overflow-hidden text-center" data-zanim-timeline="{}" data-zanim-trigger="scroll">
      <div class="bg-holder overlay overlay-1" style="background-image:url('assets/img/pagebackground/productdetails.jpg');" data-parallax="data-parallax"></div>
      <!--/.bg-holder-->
      <div class="container">
        <div class="overflow-hidden">
          <h1 class="fs-5 fs-sm-6 text-white mb-3" data-zanim-xs='{"delay":0}'> <?php echo $row1['TypeName'] ?></h1>
        </div>
        <div class="overflow-hidden">
          <p class="fs-2 fw-light ls  text-uppercase" style="
    color: white;
    " data-zanim-xs='{"delay":0.1}'><a href="Home" style="
    color: white;
    "  >Home / </a>
    <a href="Products/<?php echo $row1['TypeName'] ?>" style="
    color: white;
    " >
        <?php echo $row1['TypeName'] ?>
    </a>
     / <?php echo $row1['SizeName'] ?></p>
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

      <section id="portfolio-details" class="portfolio-details" data-zanim-timeline="{}" data-zanim-trigger="scroll">
        <div class="container">
          <div class="row gy-4" data-zanim-xs='{"delay":0}'>
            <div class="col-md-1"></div>
            <div class="col-lg-6" style="display: grid;place-items: center;">
              <div class="portfolio-details-slider swiper " style="width: 100%;">
                <div class="swiper-wrapper align-items-center borders">
  
                  <div class="swiper-slide text-center image-container">
                    <img loading="lazy" class="img-fluid" src="Images/product/<?php echo $row1['ImagePath'] ?>" alt="<?php echo $row1['ImageDescription'] ?>" id="img-product" style="">
                  </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
            <div class="col-md-1"></div><div class="col-lg-4">
              <div class="portfolio-info">
                <h3><?php echo $row1['ProductName'] ?></h3>
                <ul>
                        <?php 
                          if(!empty($row1['SizeName'])){?>
                              <li><h5><strong>Size : </strong><?php echo $row1['SizeName'] ?></h5></li>
                          <?php
                          }
                          ?>

                        <?php 
                          if(!empty($row1['FinishName'])){?>
                              <li><h5><strong>Finish : </strong><?php echo $row1['FinishName'] ?></h5></li>
                          <?php
                          }
                          ?>

                        <?php 
                          if(!empty($row1['SpaceName'])){?>
                              <li><h5><strong>Space : </strong><?php echo $row1['SpaceName'] ?></h5></li>
                          <?php
                          }
                          ?>

                        <?php 
                          if(!empty($row1['LookName'])){?>
                              <li><h5><strong>Look : </strong><?php echo $row1['LookName'] ?></h5></li>
                          <?php
                          }
                          ?>
                  
                </ul>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="button-container-1 mt-3 ">
                    <span class="mas"><i class="fa fa-paper-plane"></i></span>
                    <a href="Contact" style="color:#ffffff" ><button id='work' type="button" name="Hover"> Send Inquiry</button></a>
                </div>
                </div>
                <div class="col-md-6">
                  <div class="button-container-1 mt-3">
                    <span class="mas"><i class="fa fa-whatsapp"></i></span>
                    <a href="<?php $row['TwitterLink']?>" style="color:#ffffff" ><button id='work' type="button" name="Hover"> Whatsapp Inquiry  </button></a>
                </div>
                </div>
              </div>
              <?php 
              if(!empty($row1['ProductName']))
              {
              ?>
              <div class="portfolio-description">
                <h2> <?php echo $row1['ProductName'] ?> Description :- </h2>
                <p>
                <?php echo $row1['ProductDescription'] ?>
              </p>
              </div>
                <?php } ?>
            </div>
  
          </div>
  
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
<script>
  window.onload = function () {
    var img = document.getElementById('img-product');
    
    // Create a new Image object to get the image's dimensions
    var imageObj = new Image();
    
    // Set the source of the Image object to the same source as the image element
    imageObj.src = img.src;
    
    // Wait for the image to load before accessing its dimensions
    imageObj.onload = function () {
        var imgWidth = imageObj.width;
        var imgHeight = imageObj.height;
        
        // Calculate the margin values to center the image vertically
        var marginTop = (500 - imgHeight) / 2;
        var marginBottom = (500 - imgHeight) / 2;
        
        // Set the margins and rotate the image
        img.style.marginTop = marginTop + 'px';
        img.style.marginBottom = marginBottom + 'px';
        img.style.transform = 'rotate(90deg)';
        
        // Adjust the width and height
        img.style.width = 'auto';
        img.style.height = '500px';
    };
};

</script>
<?php include_once __DIR__.'/C_Layout/footer.php'; ?>
    <?php include_once __DIR__.'/C_Layout/script.php'; ?>

  </body>

</html>