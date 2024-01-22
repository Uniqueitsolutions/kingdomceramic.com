<?php
                                include_once __DIR__.'/../ad_kingdomceramic/Configure/dbconfig.php'; 
                                $result1=$contactObj->selectAllDataForClient();
                                $row1=mysqli_fetch_assoc($result1);
                                ?>
<?php
echo'

   <footer class="container-fluid p-0 footer-container">
    <div class="bg-dark text-start p-5 pb-4">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-8 text-light">
          <div class=" pb-3 logo">
            <img src="assets/img/LOGO.png" alt="king dom" width="220" class="img-fluid px-1">
          </div>
          <div class="pe-3">
            <span>201, Bilva trade hub, Near mahendranagar circle, 8-A national highway, Morbi -
              363642 Gujarat, India</span>
          </div>
          <div class=" fw-light ">
            <p class="mb-0" ><span style="color: #bc7236;font-weight: 400;" >Phone :</span>'?> <a href="tel:<?php echo $row1['ContactNumber1'] ?>">+91 <?php echo $row['ContactNumber1'] ?> <?php echo '
            </p>
          </div>
          <div class="fw-light">
            <p><span style="color: #bc7236;font-weight: 400;" >Email : </span>' ?><a href="mailto:<?php echo $row1['Email1']?>"><?php echo $row1['Email1']?></a> <?php echo '

            </p>
          </div>
          <div class="social-links d-flex mt-2">
            <a href="'?> <?php echo $row['TwitterLink']?><?php echo'" class="d-flex align-items-center justify-content-center"><i class="bi bi-whatsapp"></i></a>
              <a href="'?> <?php echo $row['FacebookLink']?><?php echo'" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
              <a href="'?> <?php echo $row['InstagramLink']?><?php echo'" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
             
            </div>
        </div>
        <div
          class="col-lg-6 d-flex justify-content-lg-around justify-content-md-around justify-content-sm-start flex-wrap">
          <div class="m-3 text-light">
            <h4 class="text-light mb-2"  >Useful links</h4>
            <ul >
              <li class=" m-2"><i class="bi bi-chevron-right" ></i><a href="">Home</a></li>
              <li class=" m-2"><i class="bi bi-chevron-right" ></i><a href="About">About Us</a></li>
              <li class=" m-2"><i class="bi bi-chevron-right" ></i><a href="Contact">Contact Us</a></li>
              <li class=" m-2"><i class="bi bi-chevron-right" ></i><a  href="Site-Map" >Site Map</a></li>
            </ul>
          </div>
          <div class=" m-3 text-light">
            <h4 class="text-light mb-2" >Our Products</h4>
            <ul>
            ' ?>
                                <?php
                                $result = $typeObj->selectAllDataForAdmin();
                                    $sno = 1;
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        
                                ?>
                                <li class="m-2" ><i class="bi bi-chevron-right" ></i><a href="Type/<?php echo $row['TypeUrl'] ?>"><?php echo $row["TypeName"] ?></a></li>
                                
                                <?php } ?>
                                </ul>
                                <?php echo '
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-8 text-center mb-3" style="
    color: #b6b6b6;
">
          <img class="img-fluid" alt="Make In India"
            src="https://ketonelaminates.com/assets/img/Make-in-ndia-Logo-PNG-HD-Transparent.png">
          <div  style="
    margin-top: 37px;
">© Copyright <span class="text-center text-light fw-medium" >Kingdom Ceramic</span></div>
<div class="mt-1" >All Rights Reserved.</div>
        </div>

      </div>
    </div>
<div class="  mt-3 poweredBy  mb-3 text-primary text-center">
            <span class="text-light text-end w-100"> 
            Powered by <a href="https://theuniqueitsolution.com/" target="_black" >Unique IT Solution.</a></span>
          </div>
  </footer>


'?>