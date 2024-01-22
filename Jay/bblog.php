<?php
  include_once __DIR__.'/ad_kingdomceramic/Configure/dbconfig.php'; 

  $result=$contactObj->selectAllDataForClient();
  $row=mysqli_fetch_assoc($result);
  
  $result1=$blogObj->selectByUrl($_GET["BlogUrl"]);
  $row1=mysqli_fetch_assoc($result1);

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

  <title><?php echo $row['MetaTitle'] ?></title>  

<meta content="<?php echo $row['MetaDescription'] ?>" name="description">

<meta content="<?php echo $row['MetaKeywords'] ?>" name="keywords">

<meta property="og:title" content="<?php echo $row['MetaOgTitle'] ?>">

<meta property="og:description" content="<?php echo $row['MetaOgDescription'] ?>">

<meta property="og:image" content="Images/blog/<?php echo $row['MetaOgImage'] ?>">

  <?php include_once __DIR__.'/C_Layout/css.php'; ?>
  </head>

  <body>
  <?php include_once __DIR__.'/C_Layout/navbar.php'; ?>

        <!-- ============================================-->
    <!-- <section> begin ============================-->
      <section class="py-8 overflow-hidden text-center" data-zanim-timeline="{}" data-zanim-trigger="scroll">
        <div class="bg-holder overlay overlay-1" style="background-image:url('assets/img/pagebackground/blogdetails.jpg');" data-parallax="data-parallax"></div>
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
                <h2>Blog Title: <?php echo $row1['BlogTitle'] ?></h2>
                <div class="mb-4"><a class="text-500" href="#!"><?php $Userdata = $userObj->selectbypk($row['UserID']);
                  $UserArr = mysqli_fetch_assoc($Userdata) ?>
                  <?php echo $UserArr['UserName'] ?></a><span class="px-2">. </span><a class="text-500" href="#!"><?php echo substr($row1['Modified'], 0, 10); ?></a></div>
              </div>
              <div class="text-justify">
              <?php 
                  if(!empty($row1['ImagePath1']) && !empty($row1['ImagePath2']) && !empty($row1['ImagePath3']) && !empty($row1['ImagePath4']) && empty($row1['ImagePath5']) && empty($row1['ImagePath6']) ){?>
                      <div class="row">
                        <p class="mt-4">
                            <?php echo $row1['BlogDescription'] ?>  </p>
                  <div class="col-md-4">
                  <?php 
                  if(!empty($row1['ImagePath1'])){?>
                      <img loading="lazy" class="img-fluid" height="5px" src="Images/blog/<?php echo $row1['ImagePath1'] ?>" alt="blog">
                  <?php
                  }
                  ?>
                  </div>
                  <div class="col-md-4">
                  <?php 
                  if(!empty($row1['ImagePath2'])){?>
                      <img loading="lazy" class="img-fluid" height="5px" src="Images/blog/<?php echo $row1['ImagePath2'] ?>" alt="blog">
                  <?php
                  }
                  ?>
                  </div>
                  <div class="col-md-4">
                  <?php 
                  if(!empty($row1['ImagePath3'])){?>
                      <img loading="lazy" class="img-fluid" height="5px" src="Images/blog/<?php echo $row1['ImagePath3'] ?>" alt="blog">
                  <?php
                  }
                  ?>
                  </div>
                  <div class="col-md-4">
                  <?php 
                  if(!empty($row1['ImagePath4'])){?>
                      <img loading="lazy" class="img-fluid" height="5px" src="Images/blog/<?php echo $row1['ImagePath4'] ?>" alt="blog">
                  <?php
                  }
                  ?>
                  </div>
                </div>
                  <?php
                  }
                  ?>
              <?php 
                  if(!empty($row1['ImagePath1']) || !empty($row1['ImagePath2']) || !empty($row1['ImagePath3']) || !empty($row1['ImagePath4']) || !empty($row1['ImagePath5']) || !empty($row1['ImagePath6']) ){?>
                      <div class="row">
                        <?php 
                      if(!empty($row1['ImagePath1'])){?>
                        <div class="col-md-4">
                          <img loading="lazy" class="img-fluid" height="5px" src="Images/blog/<?php echo $row1['ImagePath1'] ?>" alt="blog">
                          </div>
                      <?php
                      }
                  ?>
                  
                  <?php 
                     if(!empty($row1['ImagePath2'])){?>
                     <div class="col-md-4">
                         <img loading="lazy" class="img-fluid" height="5px" src="Images/blog/<?php echo $row1['ImagePath2'] ?>" alt="blog">
                         </div>
                    <?php
                    }
                  ?>
                  
                  <?php 
                          if(!empty($row1['ImagePath3'])){?>
                            <div class="col-md-4">
                              <img loading="lazy" class="img-fluid" height="5px" src="Images/blog/<?php echo $row1['ImagePath3'] ?>" alt="blog">
                              </div>
                          <?php
                          }
                  ?>
                  <?php 
                          if(!empty($row1['ImagePath4'])){?>
                            <div class="col-md-4">
                              <img loading="lazy" class="img-fluid" height="5px" src="Images/blog/<?php echo $row1['ImagePath4'] ?>" alt="blog">
                              </div>
                          <?php
                          }
                  ?>
                  <?php 
                          if(!empty($row1['ImagePath5'])){?>
                            <div class="col-md-4">
                              <img loading="lazy" class="img-fluid" height="5px" src="Images/blog/<?php echo $row1['ImagePath5'] ?>" alt="blog">
                              </div>
                          <?php
                          }
                  ?>
                  <?php 
                          if(!empty($row1['ImagePath6'])){?>
                            <div class="col-md-4">
                              <img loading="lazy" class="img-fluid" height="5px" src="Images/blog/<?php echo $row1['ImagePath6'] ?>" alt="blog">
                              </div>
                          <?php
                          }
                  ?>
                </div>
                      <?php
                      }
                  ?>
                
                
                
              
              </div>
              <hr class="mt-6 mb-4">
              <div> 
                <p class="mt-4">
                     <?php echo $row1['BlogDescription'] ?>  </p>
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