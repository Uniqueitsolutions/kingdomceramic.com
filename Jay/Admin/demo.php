<?php include_once __DIR__.'/A_Layout/Header/header.php'; ?>
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

<div class="row">
    <div class="col">
        <ul id="drop1">
            <?php  
                                                               $result1=$typeObj->selectAllDataForAdmin();
                                                               $sno=1;
                                                               while($row1=mysqli_fetch_assoc($result1))             
                                                                  {
                                                                   
                                                               ?>
                <li>
                <?php echo $row1['TypeName'] ?>
                </li>
                <?php } ?>
            </ul>
            <ul id="drop2">
            <?php  
                                                               $result2=$sizeObj->selectAllDataForAdmin();
                                                               $sno=1;
                                                               while($row2=mysqli_fetch_assoc($result2))             
                                                                  {
                                                                   
                                                               ?>
                <li>
                <?php echo $row2['SizeName'] ?>
                </li>
                <?php } ?>
            </ul>
            <ul id="drop3">
            <?php  
                                                               $result3=$spaceObj->selectAllDataForAdmin();
                                                               $sno=1;
                                                               while($row3=mysqli_fetch_assoc($result3))             
                                                                  {
                                                                   
                                                               ?>
                <li>
                <a href="javascript:void(0)"><?php echo $row3['SpaceName'] ?></a>
                </li>
                <?php } ?>
            </ul>
            <ul id="drop4">
            <?php  
                                                               $result4=$finishObj->selectAllDataForAdmin();
                                                               $sno=1;
                                                               while($row4=mysqli_fetch_assoc($result4))             
                                                                  {
                                                                   
                                                               ?>
                <li>
               <a href="javascript:void(0)" > <?php echo $row4['FinishName'] ?></a>
                </li>
                <?php } ?>
            </ul>
            <ul id="drop5">
            <?php  
                                                               $result5=$lookObj->selectAllDataForAdmin();
                                                               $sno=1;
                                                               while($row5=mysqli_fetch_assoc($result5))             
                                                                  {
                                                                   
                                                               ?>
                <li>
                <a href="javascript:void(0)" > <?php echo $row5['LookName'] ?></a>
            
                </li>
                <?php } ?>
            </ul>
            
    </div>

    <div id="div1">
        
    </div>


<script type="text/javascript">
    var selectedValue = null;
    var selectedValue1 = null;
    var selectedValue2 = null;
    var selectedValue3 = null;
    var selectedValue4 = null;

    $("#drop1 li").click(function() {
        // Remove the active class from all li elements
        $("#drop1 li").removeClass("active");

        // Add the active class to the clicked li element
        $(this).addClass("active");

        // Get the selected value
        selectedValue = $(this).text().trim();

        // Perform AJAX request to load the content
        loadContent();
    });

    $("#drop2 li").click(function() {
        // Remove the active class from all li elements
        $("#drop2 li").removeClass("active");

        // Add the active class to the clicked li element
        $(this).addClass("active");

        // Get the selected value
        selectedValue1 = $(this).text().trim();

        // Perform AJAX request to load the content
        loadContent();
    });

    $("#drop3 li").click(function() {
        // Remove the active class from all li elements
        $("#drop3 li").removeClass("active");

        // Add the active class to the clicked li element
        $(this).addClass("active");

        // Get the selected value
        selectedValue2 = $(this).text().trim();

        // Perform AJAX request to load the content
        loadContent();
    });

    $("#drop4 li").click(function() {
        // Remove the active class from all li elements
        $("#drop4 li").removeClass("active");

        // Add the active class to the clicked li element
        $(this).addClass("active");

        // Get the selected value
        selectedValue3 = $(this).text().trim();

        // Perform AJAX request to load the content
        loadContent();
    });

    $("#drop5 li").click(function() {
        // Remove the active class from all li elements
        $("#drop5 li").removeClass("active");

        // Add the active class to the clicked li element
        $(this).addClass("active");

        // Get the selected value
        selectedValue4 = $(this).text().trim();

        // Perform AJAX request to load the content
        loadContent();
    });

    function loadContent() {
        $.ajax({
            url: "http://localhost/KingdomCeramic/ad_kingdomceramic/Admin/demo2.php?TypeName=" + (selectedValue || '') + "&SizeName=" + (selectedValue1 || '') + "&LookName=" + (selectedValue2 || '') + "&SpaceName=" + (selectedValue3 || '') + "&FinishName=" + (selectedValue4 || ''),
            success: function(result) {
                $("#div1").html(result);
            }
        });
    }
</script>


        <?php include 'A_Layout\Footer\footer.php' ?>