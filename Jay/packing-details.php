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

    <style>
      #customers {
      font-family:  Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
      }

      #customers td, #customers th {
        border: 1px solid #a1a9b0;
        padding: 28px 8px 8px 8px;
      }

      #customers th {
      text-align: center;
      background-color: #232424;
      color: #ffffff;
      font-size: 15px;
      font-family: "Poppins";
      text-align: center;
      }

      #customers td {
      text-align: center;
      color: #1a1a1a;
      font-size: 15px;
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
        style="background-image: url('assets/img/pagebackground/packzing.jpg')"
        data-parallax="data-parallax"
      ></div>
      <!--/.bg-holder-->
      <div class="container">
        <div class="overflow-hidden">
          <h1 class="fs-5 fs-sm-6 text-white mb-3" data-zanim-xs='{"delay":0}'>
            Packing Details
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
                       </div>
                    </div>
                  </div>
                  
                </div><!-- end of .container-->
              </section><!-- <section> close ============================-->

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="text-justify p-0" data-zanim-timeline="{}" data-zanim-trigger="scroll">
        <div class="container-fluid">
          <div class="row justify-content-center" data-zanim-xs='{"delay":0}'>
            <div class="col-md-12 table-responsive">
              <table class="table table-striped table-responsive " id="customers">
                <thead>
                <tr class="table-header">
                <th class="" id="" colspan="">
                <span class="data-table-header-text">TILE SIZE</span></th>
                <th class="" id="" colspan="">
                <span class="data-table-header-text">CONTAINER SIZE</span></th>
                <th class="" id="" colspan="">
                <span class="data-table-header-text">CATEGORY</span></th>
                <th class="" id="" colspan="">
                <span class="data-table-header-text">AVAILABLE SURFACES</span></th>
                <th class="" id="" colspan="">
                <span class="data-table-header-text">THICKNESS (in mm)</span></th>
                <th class="" id="" colspan="">
                <span class="data-table-header-text">PCS/BOX</span></th>
                <th class="" id="" colspan="">
                <span class="data-table-header-text">AREA/BOX (in SQM)</span></th>
                <th class="" id="" colspan="">
                <span class="data-table-header-text">BOX/PALLET</span></th>
                <th class="" id="" colspan="">
                <span class="data-table-header-text">PALLET TYPE</span></th>
                <th class="" id="" colspan="">
                <span class="data-table-header-text">TOTAL PALLET / FCL</span></th>
                <th class="" id="" colspan="">
                <span class="data-table-header-text">BOX/FCL</span></th>
                <th class="" id="" colspan="">
                <span class="data-table-header-text">TOTAL SQM/FCL</span></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">300x450mm 12x18</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">20</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">GLAZED CERAMIC TILES</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">GLOSS/MATT</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">7.5</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">6</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">0.81</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">120</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">NORMAL PALLET</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">21</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">2520</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">2041.2</div></div>
                </td>
                </tr>
                <tr>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">250x750mm 10x30</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">20</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">GLAZED CERAMIC TILES</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">GLOSS/MATT</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">9</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">5</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">1.125</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">88</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">NORMAL PALLET</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">20</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">1760</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">1650</div></div>
                </td>
                </tr>
                <tr>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">300X600 mm(12"X24")</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">20</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">GLAZED CERAMIC TILES</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">GLOSS/MATT</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">8.5</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">5</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">0.90</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">90</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">NORMAL PALLET</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">22</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">1980</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">1782</div></div>
                </td>
                </tr>
                <tr>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">300X600 mm(12"X24")</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">20</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">GLAZED PORCELAIN TILES</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">GLOSS/MATT/HIGH GLOSS</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">9</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">5</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">0.9</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">60</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">EURO SIZE WOODEN PALLET</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">24</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">1440</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">1296</div></div>
                </td>
                </tr>
                <tr>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">600X600 mm</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">20</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content"> GLAZED PORCELAIN TILES</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">GLOSS/MATT/HIGH GLOSS</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">8.5</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">4</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">1.44</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">40</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">EURO SIZE WO</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">25</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">1000</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">1440</div></div>
                </td>
                </tr>
                <tr>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">600X600 mm(24"X24")</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">20</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">FULL BODY OUTDOOR PORCELAIN TILES</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">Surface</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">20</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">2</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">0.72</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">32</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">EURO SIZE WOODEN PALLET</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">27</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">864</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">622.08</div></div>
                </td>
                </tr>
                <tr>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">600X1200 mm(24"X48")</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">20</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">GLAZED PORCELAIN TILES</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">GLOSS/MATT/HIGH GLOSS</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">9</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">2</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">1.44</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">30</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">EURO SIZE WOODEN PALLET</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">300</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">900</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">1296</div></div>
                </td>
                </tr>
                <tr>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">200X1200 mm(8"X48")</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">20</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">WOODEN PORCELAIN TILES</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">RUSTIC MATT
                </div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">9
                </div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">5</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">1.2</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">42</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">EURO SIZE WOODEN PALLET
                </div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">26
                </div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">1092</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">1310.40
                </div></div>
                </td>
                </tr>
                <tr>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">800X800 mm(32"X32")</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">20
                </div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">GLAZED PORCELAIN TILES
                </div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">GLOSS/MATT/HIGH GLOSS</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">9</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">3</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">1.92
                </div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">36</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">EURO SIZE WOODEN PALLET</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">19</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">684</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">1313.28</div></div>
                </td>
                </tr>
                <tr>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">800X1600 mm(32"X64")</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">20</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">GLAZED PORCELAIN TILES</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">GLOSS/MATT/HIGH GLOSS</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">9</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">2</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">2.56
                </div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">28
                </div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">EURO SIZE WOODEN PALLET</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">18</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">504</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">1290.24</div></div>
                </td>
                </tr>
                <tr>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">1200X1200 mm (48"X48")</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">20</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">GLAZED PORCELAIN SLABS</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">GLOSS/MATT/HIGH GLOSS
                </div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">9</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">2</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">2.88</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">28 &amp; 20</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">EURO SIZE WOODEN PALLET</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">17
                </div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">444</div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">1278.72
                </div></div>
                </td>
                </tr>
                <tr>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">1200X2400 mm(48"X96")
                </div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">40
                </div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">GLAZED PORCELAIN SLABS
                </div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">GLOSS/MATT/HIGH GLOSS
                </div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">9
                </div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">1
                </div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">2.88
                </div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">37
                </div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">IRON PALLET
                </div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">12
                </div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">444
                </div></div>
                </td>
                <td colspan="" rowspan="" class="" id="">
                <div class="td-content-wrapper"><div class="td-content">1278.72
                </div></div>
                </td>
                </tr>
                </tbody>
                </table>
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
