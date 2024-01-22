<?php
include_once __DIR__.'/../Model/pro_product.php';
$productObj = new pro_product();
extract($_GET);
$result = $productObj->selectnbyParameter($TypeUrl, $SizeUrl, $LookUrl, $SpaceUrl, $FinishUrl);
$sno = 1;
$class = "productImage";
if (mysqli_num_rows($result) == 0) {
    echo "<h2 class='text-center' >No data found.</h2>";
} else {
    while ($row = mysqli_fetch_assoc($result)) {
        if(substr($row['SizeUrl'], 0, 8) == '800x1600'){$class = "eightysxixty";}else{
            $class = "productImage";
        }
        ?>
       
        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-zanim-xs='{"delay":0.1}'>
            <a href="Product/<?php echo $row['ProductUrl'] ?>">
                <div class="image-box-law">
                    <div class="featured-post">
                        <div class="entry-image">
                            <a href="Product/<?php echo $row['ProductUrl'] ?>">
                            <img src="Images/product/<?php echo $row['ImagePath'] ?>" 
                             alt="<?php echo $row['ImageDescription'] ?>" class="<?php echo $class ?> ">

                        </div>
                    </div>
                    <div class="content-law text-center">
                        <h3><a href="Product/<?php echo $row['ProductUrl'] ?>" class="name"><?php echo $row['ProductName'] ?></a></h3>
                    </div>
                </div>
            </a>
        </div>
        <?php 
    }
}

?>