<?php
  include_once __DIR__.'/ad_kingdomceramic/Configure/dbconfig.php'; 
  $result=$contactObj->selectAllDataForClient();
  $row=mysqli_fetch_assoc($result);
?>
<?php 
if(isset($_POST['save']))
{
   $catreg->Name=$_POST['Name'];
   $catreg->Email=$_POST['Email'];
   $catreg->ContactNumber=$_POST['ContactNumber'];
   $catreg->CatalougeID=$_POST['CatalougeID']; 

   $_SESSION["Name"] = $_POST['Name'];
   $_SESSION["Email"] = $catreg->Email;
   $_SESSION["ContactNumber"] = $catreg->ContactNumber;
   $_SESSION["CatalougeID"] = $catreg->CatalougeID;

   $result=$catreg->insertData();
   if ($result) {
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18'></script>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'Data inserted successfully!',
        }).then(function() {
            window.location = 'catalog.php';  // Replace with the appropriate redirect URL
        });
    </script>";
} else {
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18'></script>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'There was a problem with the insertion!',
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
</head>

  <body>

    <?php include_once __DIR__.'/C_Layout/navbar.php'; ?>

    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-8 overflow-hidden text-center" data-zanim-timeline="{}" data-zanim-trigger="scroll">
      <div class="bg-holder overlay overlay-1" style="background-image:url('assets/img/pagebackground/cetalog.jpg');" data-parallax="data-parallax"></div>
      <!--/.bg-holder-->
      <div class="container">
        <div class="overflow-hidden">
          <h1 class="fs-5 fs-sm-6 text-white mb-3" data-zanim-xs='{"delay":0}'>Catalouge Design </h1>
        </div>
        <div class="overflow-hidden">
        </div>
      </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->

<style>
   
   ol, ul ,li{
	  list-style: none;
  }
  .services .img {
    border-radius: 8px;
    overflow: hidden;
  }
  
  .services .img img {
    transition: 0.6s;
  }
  
  .services .details {
    padding: 5px 21px;
    margin: -37px 31px 39px 41px;
    transition: all ease-in-out 0.3s;
    /* background: var(--color-white); */
    /* position: relative; */
    background: rgba(0,0,0, 0.9);
    /* text-align: center; */
    border-radius: 8px;
    box-shadow: 0px 0 25px rgba(0,0,0, 0.1);
  }
  
  .services .details .icon {
    margin: 0;
    width: 50px;
    height: 38px;
    background: var(--color-primary);
    border-radius: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
    color: white;
    font-size: 28px;
    transition: ease-in-out 0.3s;
    position: absolute;
    top: 3px;
    left: calc(50% - -70px);
    border: 2px outset white;
    /* left: 225px; */
  }
  
  .services .details h3 {
    color: white;
    font-size:22px;
    transition: ease-in-out 0.3s;
  }
  
  .services .details p {
    line-height: 24px;
    font-size: 14px;
    margin-bottom: 0;
  }
  
  .services .service-item:hover .details h3 {
    color: var(--color-primary);
  }
  
  .services .service-item:hover .details .icon {
    background: var(--color-white);
    border: 2px solid var(--color-primary);
  }
  
  .services .service-item:hover .details .icon i {
    color: var(--color-primary);
  }
  
  .services .service-item:hover .img img {
    transform: scale(1.2);
  }
  hr{
    margin: 1rem 0;
          color: black;
          background-color: currentColor;
          border: 2;
          opacity: .8;
          height: 2px !important;
  }
  .form-control{
    border-block-end-color: #5f5055;
    border-left-color: blueviolet;
    border-right-color: blueviolet;
    border-block-color: #777777;
  }
</style>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="preloader" id="preloader">
        <div class="loader-box">
          <div class="loader"></div>
        </div>
      </div>
      <div id="myModal" class="modal">
        <div class="modal-content" style="background-image:url(assets/img/o_1es32aha615v94bogugr924kut.webp);background-position: center;">
          <h5 class="modal-title" >Quick Inquiry For Our New Catalogue <span class="close">&times;</span></h5>
          
          <form method="POST" action="catelog.php" class="default-form" name="sbFrm" id="sbFrm">
            <div class="row clearfix">
              <input type="hidden" id="myHiddenInput" class="" name="CatalougeID" />
            <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                <input type="text" class="form-control" name="Name" placeholder="Email *" id="sname" >
                <span id="semail_error" class="form_error"></span> 
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
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
      
    <!-- ======= Services Section ======= -->
    <section id="services" class="services py-5" data-zanim-timeline="{}" data-zanim-trigger="scroll">
      <div class="container  " data-zanim-xs='{"delay":0}' data-aos="fade-up">

        <div class="row">
        <?php
        $result1 = $typeObj->selectAllDataForAdmin();

        while ($row1 = mysqli_fetch_assoc($result1)) {
          
            $result12 = $catalougeObj->selectByTypeID($row1['TypeID']);
            $row12 = mysqli_fetch_assoc($result12);

            // Check if $row12 is not null or no data
            if ($row12 !== null) {
                ?>
                <div class="p-0 m-0 box">
                    <h4 class="" data-zanim-xs='{"delay":0}' ><?php echo $row1['TypeName'] ?></h4>
                    <?php
                    // Inner loop only when $row12 is not null
                    while ($row12 !== null) {
                        ?>
                        <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                            <div class="service-item">
                                <div class="img">
                                    <img loading="lazy" src="Images/catalouge/<?php echo $row12['ImagePath'] ?>" class="img-fluid" alt="<?php echo $row12['ImageDescription'] ?>">
                                </div>
                                <div class="details position-relative">
                                    <a onclick="model('<?php echo $row12['CatalougeID']; ?>', '<?php echo $row12['CatalougePDF']; ?>')"  class="stretched-link" style="background-color: white;">
                                        <div class="icon">
                                            <i class="bi bi-cloud-arrow-down-fill"></i>
                                        </div>
                                    </a>
                                    <h3><?php echo $row12['SizeName'] ?></h3>
                                </div>
                            </div>
                        </div>
                        <?php
                        // Fetch the next row
                        $row12 = mysqli_fetch_assoc($result12);
                    }
                    ?>
                    <hr/>
                </div>
                <?php
            }
        }
        ?>
        
      </div>

      </div>
    </section><!-- End Services Section -->


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

  var modalShown = false; // Flag variable to track if modal has been shown

      function model(catalogueID, cataloguePDF) {
console.log(<?php echo json_encode($_SESSION["Name"]) ?>);
          <?php
          if (!isset($_SESSION["Name"])) {
              ?>
            console.log(catalogueID);
            console.log(cataloguePDF);
            var hiddenInput =  document.getElementById("myHiddenInput");
            hiddenInput.value = catalogueID;
              document.getElementById("myModal").style.display = "block";
              <?php
          } else{
            ?>
          
            // Construct the URL for the PDF file
            var pdfUrl = 'Images/PDF/' + cataloguePDF + ''; // Replace with the appropriate URL for your PDF files
              
              // Set the filename for the downloaded file
              var filename = cataloguePDF; // Replace with the desired filename
          
              var downloadLink = document.createElement('a');
              downloadLink.setAttribute('href', pdfUrl);
              downloadLink.setAttribute('download', filename);

              // Append the anchor element to the document body
              document.body.appendChild(downloadLink);

              // Trigger the click event to initiate the download
              downloadLink.click();

              // Remove the anchor element from the document body
              document.body.removeChild(downloadLink);
            console.log(<?php echo json_encode($_SESSION["Name"]) ?>);
            <?php
          }
          ?>
      };

      document.getElementsByClassName("close")[0].onclick = function() {
        document.getElementById("myModal").style.display = "none";
      };


  </script>
<?php include_once __DIR__.'/C_Layout/footer.php'; ?>
    <?php include_once __DIR__.'/C_Layout/script.php'; ?>
  </body>

</html>