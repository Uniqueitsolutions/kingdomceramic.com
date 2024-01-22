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
  <link href="hcss/ccalcu.css" rel="stylesheet">
  </head>

  <body>
    
  <?php include_once __DIR__.'/C_Layout/navbar.php'; ?>

    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-9 ccalcu.css overflow-hidden text-center" data-zanim-timeline="{}" data-zanim-trigger="scroll">
      <div class="bg-holder overlay overlay-1" style="background-image:url(https://housing.com/news/wp-content/uploads/2022/12/Tle-calculator-compressed.jpg);" data-parallax="data-parallax"></div>
      <!--/.bg-holder-->
      <div class="container">
        <div class="overflow-hidden">
          <h1 class="fs-5 fs-sm-6 text-white mb-3" data-zanim-xs='{"delay":0}'>Let's Calculate Your Area</h1>
        </div>
        <div class="overflow-hidden">
        </div>
      </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->


    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main container-fluid" id="top">
      <div class="preloader" id="preloader">
        <div class="loader-box">
          <div class="loader"></div>
        </div>
      </div>


<section class="tiles-calculator container-fluid" data-zanim-timeline="{}" data-zanim-trigger="scroll">
  	
  <div class=" d-flex container-fluid">
    		
    <div class="ger-imgs container-fluid">
      <div class="abt-imgz" data-zanim-xs='{"delay":0.2}'>
        <div class="calc-form wow fadeInUp"  data-wow-duration="2000ms" style="visibility: visible; animation-duration: 1200ms; animation-name: fadeInUp;">							
          <form method="post">
            <div class="row">
              <div class="col-md-12">
                <h4 style="margin: 30px -2px 19px 0px;
                color: #ffffff;
                border-bottom: #0e0e0e;
                font-size: 22px;
                background-color: #0e0e0e;
                height: 41px;
                text-align: center;
                border-radius: 4px;
                text-decoration: none;
                padding-top: 6px;
                text-decoration-line: initial;">Calculation</h4>
              </div>
              <div class="col-md-12 form-group">
                <label>Length*</label>
                <input type="text" id="SLength" name="SLength" class="form-control">
              </div>
              <div class="col-md-12 form-group">
                <label>Width*</label>	
                <input type="text" id="SWidth" name="SWidth" class="form-control">
              </div>
              <div class="col-md-12 form-group">
                <label>Tiles Size*</label>
                <select id="sizes" name="sizes" class="form-control b-r-0 input-lg">
                  <option selected="">--Select Size--</option>																																																																											
                  <option value="300 x 600" data-picperbox="5">30 x 60 cm [ Porcelain Tiles ]</option><option value="600 x 600" data-picperbox="4">60 x 60 cm [ Porcelain Tiles ]</option><option value="600 x 900" data-picperbox="2">60 x 90 cm [ Porcelain Tiles ]</option><option value="600 x 1200" data-picperbox="2">60 x 120 cm [ Porcelain Tiles ]</option><option value="800 x 800" data-picperbox="3">80 x 80 cm [ Porcelain Tiles ]</option><option value="200 x 1200" data-picperbox="5">20 x 120 cm [ Porcelain Tiles ]</option><option value="1600 x 3200" data-picperbox="1">160 x 320 cm [ Big Slab ]</option><option value="1200 x 2400" data-picperbox="1">120 x 240 cm [ Big Slab ]</option><option value="1200 x 1200" data-picperbox="2">120 x 120 cm [ Big Slab ]</option><option value="800 x 1600" data-picperbox="2">80 x 160 cm [ Big Slab ]</option><option value="300 x 450" data-picperbox="6">30 x 45 cm [ Wall Tiles ]</option><option value="300 x 600" data-picperbox="5">30 x 60 cm [ Wall Tiles ]</option><option value="400 x 400" data-picperbox="6">40 x 40 cm [ Outdoor Tiles ]</option><option value="600 x 600" data-picperbox="4">60 x 60 cm [ Outdoor Tiles ]</option><option value="1000 x 1000" data-picperbox="2">100 x 100 cm [ Big Slab ]</option><option value="1200 x 300" data-picperbox="2">120x30 cm : 120x20 cm  90x30 cm : 90x20 cm  [ Stair Case Tiles ]</option><option value="1200 x 300" data-picperbox="2">120x30 cm : 120x17 cm  90x30 cm : 90x17 cm [ Stair Case Tiles ]</option><option value="1000 x 300" data-picperbox="2">100x30 cm : 100x20 cm  100x30 cm : 100x17 cm [ Stair Case Tiles ]</option><option value="800x3000" data-picperbox="1">800x3000 mm x 15 mm [ Big Slab ]</option><option value="1220 x 181" data-picperbox="10">122 x 18.1 cm [ SPC / LVT Vinyl Flooring ]</option>    
                </select>
              </div>																																																																
              <div class="col-md-12">
                <div class="button-box">
                  <button type="button" name="Button1" id="Button1" onclick="calculate()" class="lnk-default">Calculate <span></span></button>										
                </div>										
              </div>
            </div>																																
          </form>
        </div>
        <div class="sncd-img wow fadeInUp" data-wow-duration="2500ms" style="visibility: visible; animation-duration: 1400ms; animation-name: fadeInUp;">
          <form method="post">
            <div class="row">
              <div class="col-md-12">										
                <h4 style="margin: 30px -2px 19px 0px;
                color: #ffffff;
                border-bottom: #0e0e0e;
                font-size: 22px;
                background-color: #0e0e0e;
                height: 41px;
                text-align: center;
                border-radius: 10px;
                text-decoration: none;
                padding-top: 6px;
                text-decoration-line: initial;">Total Area Covered</h4>
              </div>
              <div class="col-md-12 form-group">
                <label>Sq.M</label>
                <input type="text" class="form-control" name="ar_mtr" id="ar_mtr" disabled="">
              </div>
              <div class="col-md-12 form-group">
                <label>Sq.Ft</label>
                <input type="text" class="form-control" name="ar_feet" id="ar_feet" disabled="">
              </div>
              <div class="col-md-12 form-group">
                <label>Total Tiles</label>
                <input type="text" class="form-control" name="TotalTiles" id="TotalTiles" disabled="">
              </div>	
              <div class="col-md-12 form-group">
                <label>Total Boxes</label>
                <input type="text" class="form-control" name="TotalBoxes" id="TotalBoxes" disabled="">
              </div>																																		
              <div class="col-md-12 form-group-two">
                <span>This is Only Approx Calculation</span>
              </div>
            </div>																																
          </form>
        </div>						
      </div>
    </div>
    <div class="clearfix"></div>
  </div>				
</section>
<section class="calc-chart">
  <div class="container-fluid">
    <div class="row">
      
      <div class="col-lg-6">
        <div class="tips-sec calc-form wow fadeInUp" data-wow-duration="2600ms" style="visibility: visible; animation-duration: 1600ms; animation-name: fadeInUp;">																																																																																						
          <div class="tileDiv" style="border: 5px solid gray;">
            <div style="height: 58.2%; width: 80.4%;">
              <p class="tileFt horzFt"><span id="xlength">X ft</span></p>
              <p class="tileFt vertFt"><span id="ylength">Y ft</span></p>
            </div>
          </div>
         																														
        </div>
      </div>
      <div class="col-lg-4">
        
      </div>
    </div>		
    <div class="row container-fluid">
      
      <div class="col-lg-5">
        
      </div>
      <div class="box1 mt30 p10 fadeInUp" style="visibility: visible; animation-duration: 1200ms; animation-name: fadeInUp;" data-wow-duration="3000ms" >
        <div class="row">
          <h4 class="cal-title">Tips</h4>
        </div>
        <ul class="list" style="padding-left: 20px;">
          <li><i class="fa fa-check"></i> Length and Width Dimensions are in feet.</li>
          <li><i class="fa fa-check"></i> 1 Feet = 0.3048 Meter</li>
          <li><i class="fa fa-check"></i> 1 Meter = 3.28084 Feet</li>
          <br>
        </ul>
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
<?php include_once __DIR__.'/C_Layout/footer.php'; ?>

<?php include_once __DIR__.'/C_Layout/script.php'; ?>


  
  <script>
    $('#information').addClass('activepage');
    
    $('table').addClass('table table-hover table-sm table-striped text-center table-bordered');
    
    
    function isNumber(evt) {
      evt = (evt) ? evt : window.event;
      var charCode = (evt.which) ? evt.which : evt.keyCode;
      if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
      }
      return true;
    }
    
      $('.phoneno').on("cut copy paste",function(e) {
        e.preventDefault();
      });
      
        $('.mymsgbox').bind("cut copy paste",function(e) {
      e.preventDefault();
    });
  
    function ChkOnlyHtmlTag(event)
    {
      var keycode;
    
      if ((parseInt(event.keyCode) != 37) && (parseInt(event.keyCode) != 60) && (parseInt(event.keyCode) != 62)) {
        keycode = parseInt(event.keyCode);
      }
      else 
      {
        keycode = 0;
      }
      
      if (keycode != 0) 
      {
        return true;
      }
      else
      {
        return false;
      }
    }
    
    $(function ()
    {
      $('.mymsgbox').keypress(function (event)
      {
        var maxLength = 350;
        var textlen = maxLength - $(this).val().length;
        $('.msgtxtcounter').text(textlen);
        return ChkOnlyHtmlTag(event);
      });
    });
    
     $(document).ready(function(){
           $(document).bind("contextmenu",function(e){
             return false;
           });
           $('body').bind('cut copy paste', function (e) {
                  e.preventDefault();
           });
      });
    
  </script>
 
  
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
  
    gtag('config', 'UA-120832684-1');
    function setpicimage(l,w)
    {
      document.getElementById("xlength").innerText = l + ' Ft';
      document.getElementById("ylength").innerText = w + ' Ft';
    }
      
    function calculate()
    {
      var SLength=document.getElementById("SLength").value;
      var SWidth=document.getElementById("SWidth").value;

      setpicimage(SLength,SWidth);

      document.getElementById("ar_feet").value = parseFloat(SLength)*parseFloat(SWidth);

      var ar_mtr = parseFloat((parseFloat(SLength)*parseFloat(SWidth))/(3.28*3.28),3);
      var ar_mtr = ar_mtr.toFixed(2);
      document.getElementById("ar_mtr").value = ar_mtr;
      
      var tileSize = document.getElementById("sizes").value;
      var tilesinbox;

      tilesinbox = document.getElementById("sizes").options[document.getElementById("sizes").selectedIndex].dataset.picperbox;
      
      if (tileSize.indexOf("mm")>0) tileSize = tileSize.substr(0,tileSize.indexOf("mm"));
      tileCoords=tileSize.split("x");
      sLength=SLength*304.8;
      sWidth=SWidth*304.8;
      var doorSize, winSize;
      var TileArea = (parseFloat(sLength)*parseFloat(sWidth));

      xVal=tileCoords[0];
      yVal=tileCoords[1];

      var tileSize = (parseFloat(xVal) * parseFloat(yVal));
      var TotalTilesRequired = TileArea/tileSize;
      if ((TotalTilesRequired-Math.round(TotalTilesRequired))>0) 
        TotalTilesRequired=Math.round(TotalTilesRequired)+1;
      else
        TotalTilesRequired=Math.round(TotalTilesRequired,0);
      document.getElementById("TotalTiles").value = TotalTilesRequired;
      
      var boxcount = parseFloat(TotalTilesRequired/ tilesinbox );
      
      if ((boxcount-Math.round(boxcount))>0) 
      {
        boxcount=Math.round(boxcount)+1;
      }
      else
      {
        boxcount=Math.round(boxcount,0);
      }
      document.getElementById("TotalBoxes").value = boxcount;
    }
  </script>
  
  <link rel="stylesheet" href="https://adilaceramic.com/includes/calculator/custom.css">
  
  </body>

</html>