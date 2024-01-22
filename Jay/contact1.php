<?php
  include_once __DIR__.'/ad_kingdomceramic/Configure/dbconfig.php'; 
  $result=$contactObj->selectAllDataForClient();
  $row1=mysqli_fetch_assoc($result);
 include_once __DIR__ . '/ad_kingdomceramic/Model/inq_inquiry.php';

    $feedbackobj = new inq_inquiry();

    if (isset($_POST['save'])) {

      $feedbackobj->Name = $_POST['Name'];

      $feedbackobj->ContactNumber = $_POST['ContactNumber'];

      $feedbackobj->EmailID = $_POST['EmailID'];

      $feedbackobj->Subject = $_POST['Subject'];

      $feedbackobj->Massage = $_POST['Massage'];

      $feedbackobj->CountryName = "India";

      $result = $feedbackobj->insertData();

      if ($result) {

        echo "<script>window.location.href='contact.php';</script>";

      }

    }
?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
      
  <?php include_once __DIR__.'/C_Layout/metalink.php'; ?>

    <?php include_once __DIR__.'/C_Layout/css.php'; ?>
    <style>
      
    </style>
  </head>

  <body>
  <?php include_once __DIR__.'/C_Layout/navbar.php'; ?>

    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-9 overflow-hidden text-center" data-zanim-timeline="{}" data-zanim-trigger="scroll">
      <div class="bg-holder overlay overlay-1" style="background-image:url('assets/img/pagebackground/contactus.jpg');" data-parallax="data-parallax"></div>
      <!--/.bg-holder-->
      <div class="container">
        <div class="overflow-hidden">
          <h1 class="fs-5 fs-sm-6 text-white mb-3" data-zanim-xs='{"delay":0}'>Contact Us</h1>
        </div>
        <div class="overflow-hidden">
          <p class="fs-2 fw-light ls text-400 text-uppercase" data-zanim-xs='{"delay":0.1}'>We're Here for You</p>
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
      <section>
        <div class="container" data-zanim-timeline="{}" data-zanim-trigger="scroll">
          <div class="row" data-zanim-xs='{"delay":0}'>
            <div class="col-lg-4 pe-lg-6">
              <div class="row">
                <div class="col-md-4 col-lg-12 mb-4" >
                  <h5 class="mb-2">Our Address</h5><?php echo $row1['Address']?><br>Call: <a href="tel:<?php echo $row1['ContactNumber1'] ?>">+91 <?php echo $row['ContactNumber1'] ?>, </a>
                  <a href="tel:<?php echo $row1['ContactNumber2'] ?>">+91 <?php echo $row1['ContactNumber2'] ?></a>
                </div>
                <div class="col-md-4 col-lg-12 mb-4">
                 <a href="mailto:<?php echo $row1['Email1']?>"><?php echo $row1['Email1']?></a> <br/>
                <a href="mailto:<?php echo $row1['Email2']?>"><?php echo $row1['Email2']?></a> 
                </div>
                <div class="col-md-4 col-lg-12">
                  <h4 class="mb-2">Socials</h4>
                  <?php if (!empty($row['FacebookLink'] )) {?>
                  <a class="mt-2" target="_black" href="<?php echo $row1['FacebookLink']?>">
                    <span class="fab fa-facebook-square fs-2 me-2 text-primary" data-fa-transform="shrink-1"></span></a>
                    <?php } ?>
            <?php if (!empty($row['LinkedinLink'] )) {?>
                    <a class="mt-2" target="_black" href="<?php echo $row1['LinkedinLink']?>">
                      <span class="fab fa-linkedin  fs-2 mx-2 text-primary" data-fa-transform="shrink-1"></span>
                    </a>
                    <?php } ?>
            <?php if (!empty($row['InstagramLink'] )) {?> 
                    <a class="mt-2" target="_black" href="<?php echo $row1['InstagramLink']?>">
                      <span class="fab fa-instagram  fs-2 mx-2 text-primary" data-fa-transform="shrink-1"></span>
                    </a>
                    <?php } ?>
                     <?php if (empty($row['FacebookLink'] ) && empty($row['LinkedinLink'] ) && empty($row['InstagramLink'] ) ) {?> 
                     <span>no data</span>
                     <?php } ?>
                </div>
              </div>
            </div>
            <div class="col-lg mt-4 mt-lg-0" >
              <form  action="contact1.php" method="POST">
                <div class="row">
                  <div class="col-md-6">
                    <input class="form-control" type="text" name="Name"  id="name" placeholder="Your Name"
                      required="required">
                    </div>
                  <div class="col-md-6">
                    <input class="form-control"  name="ContactNumber" type="text" placeholder="Your Contact Number"  name="ContactNumber" id="ContactNumber" required="required"></div>
                  <div class="col-md-6 mt-4">
                    <input class="form-control" type="text" name="Subject" id="subject" placeholder="Subject" required="required"></div>
                  <div class="col-md-6 mt-4">
                    <input class="form-control" type="email" placeholder="Your Email" id="email"  name="EmailID" required="required"></div>
                  <div class="col-12 mt-4">
                    <textarea class="form-control" rows="6" placeholder="Enter your descriptions here..." name="Massage"  required="required"></textarea></div>
                  <div class="col-12 mt-4"><button class="btn btn-primary" name="save" id="save" type="Submit"> <span class="text-white fw-semi-bold">Send Now</span></button></div>
                </div>
              </form>
            </div>
            <div class="col-12 mt-5" data-zanim-xs='{"delay":0.3}'>
              <iframe frameborder="0" loading="lazy" style="border: 10px; width: 100%; height: 384px;" src="<?php echo $row1['GoogleMapLink']?>"></iframe>
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
  ul i {
    padding-right: 5px;
    color: #bc7236;
    line-height: 1;
    font-size: 14px;
}
.social-links a {
    font-size: 18px;
    display: inline-block;
    background: rgba(255, 255, 255, 0.1);
    color: #fff;
    line-height: 1;
    margin-right: 8px;
    border-radius: 4px;
    width: 36px;
    height: 36px;
    transition: 0.3s;
}
</style>

<?php include_once __DIR__.'/C_Layout/footer.php'; ?>
    <?php include_once __DIR__.'/C_Layout/script.php'; ?>
   
  </body>

</html>