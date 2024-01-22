
<?php include_once __DIR__.'/A_Layout/Header/header.php'; ?>
<?php
 
$dataPoints = array(
	array("label"=> "Look", "y"=> 90),
	array("label"=> "Space", "y"=> 61),
	array("label"=> "Size", "y"=> 58),
	array("label"=> "Finish", "y"=> 72)
);
	
?>
<style>
    .modebar{
        display: none;
    }
    .canvasjs-chart-credit{
     display: none;   
    }
    body {
    font-family: Arial, sans-serif;
    background-color: #f1f1f1;
}
.card-header ,.card-body{
    justify-content: center !important;
}

    </style>
<div id="kt_content_container" class="container-xxl">
    <div class="row">
    <div class="col-md-3">
        <div class="card card-flush shadow-sm mb-3 mt-3 clock">
                <div class="card-header border-1">
                    <h3 class="card-title text-danger pb-0" style="font-weight: 900;"><div class="clock-label">India-clock </div>
                    </h3>
                </div>
                <div class="card-body  font-weight-bolder pt-0">
                    <h2><div class="clock-time text-center" id="canada-clock"></div></h2>
                </div>
             </div>
        </div>
       
        <div class="col-md-3">
        <div class="card card-flush shadow-sm mb-3 mt-3 clock">
                <div class="card-header border-1">
                    <h3 class="card-title text-danger pb-0" style="font-weight: 900;"><div class="clock-label">usa-clock</div>
                    </h3>
                </div>
                <div class="card-body  font-weight-bolder pt-0">
                    <h2><div class="clock-time text-center" id="usa-clock"></div></h2>
                </div>
             </div>
        </div>

        

        <div class="col-md-3">
        <div class="card card-flush shadow-sm mb-3 mt-3 clock">
                <div class="card-header border-1">
                    <h3 class="card-title text-danger pb-0" style="font-weight: 900;"><div class="clock-label">spain-clock</div>
                    </h3>
                </div>
                <div class="card-body  font-weight-bolder pt-0">
                    <h2><div class="clock-time text-center" id="taliban-clock"></div></h2>
                </div>
             </div>
        </div>
        <div class="col-md-3">
        <div class="card card-flush shadow-sm mb-3 mt-3 clock">
                <div class="card-header border-1">
                    <h3 class="card-title text-danger pb-0" style="font-weight: 900;"><div class="clock-label">australia-clock</div>
                    </h3>
                </div>
                <div class="card-body  font-weight-bolder pt-0">
                    <h2><div class="clock-time text-center" id="australia-clock"></div></h2>
                </div>
             </div>
        
</div>
    </div>
    <hr style="color:white" />
    <script>
        function updateTime(id, offset) {
    var clock = document.getElementById(id);
    var date = new Date();
    var utc = date.getTime() + (date.getTimezoneOffset() * 60000);
    var newDate = new Date(utc + (3600000 * offset));
    clock.textContent = newDate.toLocaleTimeString();
}

setInterval(function() {
    //updateTime("new-york-clock", -4); // New York, UTC-4
    // updateTime("london-clock", 0); // London, UTC+0
    // updateTime("tokyo-clock", 9); // Tokyo, UTC+9
     updateTime("usa-clock", -4); // USA, UTC-5
     updateTime("canada-clock", 5.5); // Canada, UTC-6
     updateTime("taliban-clock", 2); // Taliban, UTC+4
    updateTime("australia-clock", 10); // UAE, UTC+4
}, 1000);

        </script>
<div class="row">
    <div class="col-md-12">
        <div class="row">
        <div class="col-md-4">

            <div class="col-md-10">

              

             <div class="card card-flush text-center shadow-sm mb-3 ">
                <div class="card-header text-center border-1">
                    <h3 class="card-title text-center text-danger pb-0" style="font-weight: 900;">Product Space
                    </h3>
                </div>
                <div class="card-body  font-weight-bolder pt-0">
                    <h2 class="text-center" > <?php
                        $result = $spaceObj->selectAllDataForAdmin();
                        $totalRows = mysqli_num_rows($result);
                         echo  $totalRows;
                            ?></h2></h2>
                </div>
             </div>

             <div class="card card-flush shadow-sm mb-3 ">
                <div class="card-header border-1">
                    <h3 class="card-title text-danger pb-0" style="font-weight: 900;">Product Look
                    </h3>
                </div>
                <div class="card-body  font-weight-bolder pt-0">
                    <h2 class="text-center" ><?php
                        $result = $lookObj->selectAllDataForAdmin();
                        $totalRows = mysqli_num_rows($result);
                         echo  $totalRows;
                            ?></h2>
                </div>
             </div>

             

             
            </div>
    </div>

    <div class="col-md-4">
        <div class="col-md-10">
    <div class="card card-flush shadow-sm mb-3 ">
                <div class="card-header border-1">
                    <h3 class="card-title text-danger pb-0" style="font-weight: 900;">Product Finish
                    </h3>
                </div>
                <div class="card-body  font-weight-bolder pt-0">
                    <h2 class="text-center"><?php
                        $result = $finishObj->selectAllDataForAdmin();
                        $totalRows = mysqli_num_rows($result);
                         echo  $totalRows;
                            ?></h2>
                </div>
             </div>
    <div class="card card-flush shadow-sm mb-3 mt-3 ">
                <div class="card-header border-1">
                    <h3 class="card-title text-danger pb-0" style="font-weight: 900;">Product Size
                    </h3>
                </div>
                <div class="card-body  font-weight-bolder pt-0">
                    <h2 class="text-center"><?php
                        $result = $sizeObj->selectAllDataForAdmin();
                        $totalRows = mysqli_num_rows($result);
                         echo  $totalRows;
                            ?></h2>
                </div>
             </div>

             </div>
    </div>
    <div class="col-md-4">
        <div class="col-md-12">

        
        <div class="card card-flush text-center shadow-sm mb-3 ">
                    <div class="card-header text-center border-1">
                        <h3 class="card-title text-center text-danger pb-0" style="font-weight: 900;">Catalouge  Inquiry 
                        </h3>
                    </div>
                    <div class="card-body  font-weight-bolder pt-0">
                        <?php
                            $result123 = $catreg->selectCatalougeInquiry();
                            while($row=mysqli_fetch_assoc($result123))             
                            {
                                ?>
                                <h5><?php echo $row['TypeName'] ?> = <?php echo $row['NumOfRegistrations'] ?></h5>
                                <?php } ?>
                    </div>
                </div>
                </div>
    </div>
        </div>
    </div>
    
</div>
<div class="row">
    <div class="col-md-12">
    <div class="card card-xl-stretch card-flush shadow-sm mb-3 mt-3 ">
                <div class="card-header border-1">
                    <h3 class="card-title text-danger pb-0" style="font-weight: 900;">Last Add Product Details
                    </h3>
                </div>
                            <div class="card-body  font-weight-bolder pt-0">
                            <?php  
                                                            $result=$productObj->selectLast3AddedDataForAdmin();
                                                            $sno=1;
                                                            while($row=mysqli_fetch_assoc($result))             
                                                                {
                                                                
                                                            ?>
                                                            <hr style="color:white" />
                            <div class="d-flex align-items-center mb-8">
                                    <!--begin::Bullet-->
                                    <span class="bullet bullet-vertical h-40px bg-success"></span>
                                    <!--end::Bullet-->
                                    <!--begin::Checkbox-->
                                    <div class="form-check form-check-custom form-check-solid mx-5">
                                    <img src="../../Images/product/<?php echo $row['ImagePath'] ?>" alt="<?php echo $row['ImageDescription'] ?>" srcset="" style="height:20px ;width: 25px;">
                                    </div>
                                    <!--end::Checkbox-->
                                    <!--begin::Description-->
                                    <div class="flex-grow-1">
                                        <a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6"><?php echo $row['ProductName'] ?></a>
                                        <span class="text-muted fw-bold d-block"><?php echo $row['TypeName'] ?></span>
                                    </div>
                                    <!--end::Description-->
                                    <span class="badge badge-light-success fs-8 fw-bolder"><?php echo $row['Modified'] ?></span>
                                </div>

                            

                                                                <?php } ?>
                                </div>

                </div>
             </div>
             
    </div>
    <div class="row">
    <div class="col-md-12">
    <div class="card card-xl-stretch card-flush shadow-sm mb-3 mt-3 ">
                <div class="card-header border-1">
                    <h3 class="card-title text-danger pb-0" style="font-weight: 900;">Last Add Catalouge  Details
                    </h3>
                </div>
                <div class="card-body  font-weight-bolder pt-0">
                <?php  
                                                   $result=$catalougeObj->selectLast3AddedDataForAdmin();
                                                   $sno=1;
                                                   while($row=mysqli_fetch_assoc($result))             
                                                      {
                                                       
                                                   ?>
                                                  <hr style="color:white" />
                <div class="d-flex align-items-center mb-8">
						<!--begin::Bullet-->
						<span class="bullet bullet-vertical h-40px bg-success"></span>
						<!--end::Bullet-->
						<!--begin::Checkbox-->
						<div class="form-check form-check-custom form-check-solid mx-5">
                        <img src="../../Images/catalouge/<?php echo $row['ImagePath'] ?>" alt="<?php echo $row['ImageDescription'] ?>" srcset="" style="height:20px ;width: 25px;">
						</div>
						<!--end::Checkbox-->
						<!--begin::Description-->
						<div class="flex-grow-1">
							<a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6"><?php echo $row['CatalougePriviewTitle'] ?></a>
							<span class="text-muted fw-bold d-block"><?php echo $row['TypeName'] ?></span>
						</div>
						<!--end::Description-->
						<span class="badge badge-light-success fs-8 fw-bolder"><?php echo $row['Modified'] ?></span>
					</div>

                

                                                    <?php } ?>
                    </div>

                </div>
             </div>
             
    </div>
</div>

</div>

    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <script>
        console.log(<?php echo json_encode($fruitsString)?>);
        console.log(5165);
        
const xArray = ["", "France", "Spain", "USA", "Argentina","ed"];
const yArray = [55, 49, 44, 24, 15, 5];

const data = [{
  x:xArray,
  y:yArray,
  type:"bar",
  orientation:"v",
  marker: {color:"rgba(0,0,255,0.6)"}
}];

const layout = {title:"Product Types"};

Plotly.newPlot("myPlot", data, layout);
</script>
<script type="text/javascript" src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	title:{
		text: "Product Details"
	},
	subtitles: [{
		text: "Category Wise"
	}],
	data: [{
		type: "pie",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - #percent%",
		yValueFormatString: "฿#,##0",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
<?php include_once __DIR__.'/A_Layout/Footer/footer.php'; ?>
