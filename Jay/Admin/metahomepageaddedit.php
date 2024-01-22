<?php include_once __DIR__.'/A_Layout/Header/header.php'; ?>
	
<?php 
#region selectbypk
if(isset($_POST['edit']))
{

$pk = $crypt->decryptId($_POST['SPMetaID']); 
$result=$staticpageObj->selectbypk($pk);
$selectbypk=mysqli_fetch_assoc($result);                                      
}
#endregion
#region insert
if(isset($_POST['insert']))
{
   $staticpageObj->MetaTitle = $_POST['MetaTitle'];
   $staticpageObj->SEOFor = $_POST['SEOFor'];
   $staticpageObj->MetaFor = $_POST['MetaFor'];
   
   $staticpageObj->MetaKeywords = $_POST['MetaKeywords'];
   $staticpageObj->MetaDescription = $_POST['MetaDescription'];
   $staticpageObj->MetaOgTitle = $_POST['MetaOgTitle'];
   $imgname2 = $_FILES['MetaOgImage']['name'];
   $file_tmp2 = $_FILES['MetaOgImage']['tmp_name'];
   move_uploaded_file($file_tmp2, '../../Images/homepage/' . $imgname2);
   $staticpageObj->MetaOgImage=$_FILES['MetaOgImage']['name'];
   $staticpageObj->MetaOgDescription = $_POST['MetaOgDescription'];
   $staticpageObj->MetaOgUrl = $_POST['MetaOgUrl'];
   $staticpageObj->UserID = $_SESSION["UserID"];
   $staticpageObj->IsActive = 1;
   
   $result=$staticpageObj->insertData();
   if ($result) {
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18'></script>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'Data inserted successfully!',
        }).then(function() {
            window.location = 'SEO';  // Replace with the appropriate redirect URL
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


#region update
if(isset($_POST['update']))
{
    $staticpageObj->MetaTitle = $_POST['MetaTitle'];
    $staticpageObj->SEOFor = $_POST['SEOFor'];
   $staticpageObj->MetaFor = $_POST['MetaFor'];
    $staticpageObj->MetaKeywords = $_POST['MetaKeywords'];
    $staticpageObj->MetaDescription = $_POST['MetaDescription'];
    $staticpageObj->MetaOgTitle = $_POST['MetaOgTitle'];
    $imgname2 = $_FILES['MetaOgImage']['name'];
    $oldimgname2 = $_POST['Old_ogImage'];
    if($imgname2 != '') 
    {
      $file_tmp2 = $_FILES['MetaOgImage']['tmp_name'];
      move_uploaded_file($file_tmp2, '../../Images/homepage/' . $imgname2);
      unlink('../../Images/space/' . $oldimgname2);
      $staticpageObj->MetaOgImage=$_FILES['MetaOgImage']['name'];
    } 
    else
    {
      $staticpageObj->MetaOgImage=$_POST['Old_ogImage'];
    }  
    $staticpageObj->MetaOgDescription = $_POST['MetaOgDescription'];
    $staticpageObj->MetaOgUrl = $_POST['MetaOgUrl'];
    $staticpageObj->UserID = $_SESSION["UserID"];
    $staticpageObj->IsActive =1;
    
   $result=$staticpageObj->updateData($_POST['SPMetaID']);
   if ($result) {
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18'></script>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'Data Updated successfully!',
        }).then(function() {
            window.location = 'SEO';  // Replace with the appropriate redirect URL
        });
    </script>";
} else {
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18'></script>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'There was a problem with Update!',
        });
    </script>";
}
 }
#endregion



?>


                              
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                        <!--begin::Toolbar-->
                    

                        <!--end::Toolbar-->

                        <form action="metahomepageaddedit.php" method="post" enctype="multipart/form-data">
                            <!-- main cards -->

                            <!--begin::Post-->
                            <div class="post d-flex flex-column-fluid" id="kt_post">
                                <!--begin::Container-->
                                <div id="kt_content_container" class="container-xxl">

                             
                                    <div class="card card-flush shadow-sm ">

                                        <div class="card-header border-1">
                                            <h3 class="card-title text-danger " style="font-weight: 900;"> <?php echo $selectbypk['SEOFor'];  ?>
                                            </h3>
                                        </div>
                                    
                                        <div class="card-body py-5 font-weight-bolder">
                                            <div class="container">
                                                <div class="mb-10 fv-row fv-plugins-icon-container">
                                                    <!-- contact details -->
                                                   
                                     
            
                                        <div>
                                            <label class="  form-label  font-weight-bolder "
                                                style="font-weight: 900;">Meta Title:</label>
                                    
                                                <input type="text" name="MetaTitle" class="form-control mb-2"
                                                placeholder="MetaTitle"  value="<?php echo $selectbypk['MetaTitle']  ?>">
                                        </div>
                                        
                                        <div>
                                            <label class="  form-label  font-weight-bolder "
                                                style="font-weight: 900;">Meta keywords:</label>
                                    
                                                <input type="text" name="MetaKeywords" class="form-control mb-2"
                                                placeholder="Meta keywords"  value="<?php echo $selectbypk['MetaKeywords']  ?>">
                                        </div>
                                        <div>
                                         
                                    
                                                <input type="hidden" name="MetaFor" class="form-control mb-2"
                                                placeholder="MetaFor"  value="<?php echo $selectbypk['MetaFor']  ?>" required>
                                        </div>
                                       
                                        <div>
                                            <label class="  form-label  font-weight-bolder "
                                                style="font-weight: 900;">Meta Description:</label>
                                    
                                                <input type="text"  name="MetaDescription" class="form-control mb-2"
                                                placeholder="Meta Description" value="<?php echo $selectbypk['MetaDescription']  ?>"/>
                                        </div>
                                        
                                        <div>
                                            <label class="  form-label  font-weight-bolder "
                                                style="font-weight: 900;">Social Media Title:</label>
                                    
                                                <input type="text" name="MetaOgTitle" class="form-control mb-2"
                                                placeholder="Social Media Description"  value="<?php echo $selectbypk['MetaOgTitle']  ?>">
                                        </div>
                                        <div>
                                            
                                    
                                                <input type="hidden" name="MetaOgUrl" class="form-control mb-2"
                                                placeholder="Social Media Url"  value="Url">
                                        </div>
                                       <script>
    // Get references to the input fields 
    var firstField = document.querySelector('input[name="MetaTitle"]');
    var thirdField = document.querySelector('input[name="MetaOgUrl"]');

    
    firstField.addEventListener('input', function() {
        // Get the value from the first input field
        var value = firstField.value;

        // Replace spaces with hyphens ("-")
        var updatedValue = value.replace(/\s+/g, '-');
        updatedValue=updatedValue.toLowerCase(); 
        // Update the value of the second input field
       
        thirdField.value=updatedValue;
    });
</script>   
                 
                                        <div>
                                            <label class="  form-label  font-weight-bolder "
                                                style="font-weight: 900;">Social Media Description:</label>
                                    
                                                <input type="text" name="MetaOgDescription" class="form-control mb-2"
                                                placeholder="Social Media Description"  value="<?php echo $selectbypk['MetaOgDescription']  ?>"">
                                        </div>
                                        
                                        <div>
                                            <!--begin::Card header-->
                                            <div >
                                                <!--begin::Card title-->
                                                <label class="  form-label  font-weight-bolder "
                                                style="font-weight: 900;">Social Media Image:</label>
                                                <!--end::Card title-->
                                            </div>
                                            <!--end::Card header-->
                                            <!--begin::Card body-->
                                            <div class="row">
                                            
                                            <div class="col-md-6">
                                            <div class="card-body text-center pt-0-container">
                                                <!--begin::Image input-->
                                                <div class="image-input image-input-outline mb-3 image-input-changed" data-kt-image-input="true" 
                                                background-image: url("paper.gif");
                                                style="background-image: url(../../Images/<?php echo $selectbypk['MetaOgImage'] ?>")>
                                                    <!--begin::Preview existing avatar-->
                                                    <div class="image-input-wrapper w-200px h-200px"></div>
                                                    <!--end::Preview existing avatar-->
                                                    <!--begin::Label-->
                                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="" data-bs-original-title="Add Image">
                                                        <i class="bi bi-pencil-fill fs-7"></i>
                                                        <!--begin::Inputs-->
                                                        <input type="file" name="MetaOgImage" accept="image/webp" onchange="validateImageSize()">
                                                        <input type="hidden" name="Old_ogImage" value="<?php echo $selectbypk['MetaOgImage'];?>">
                                                        <script>
    function validateImageSize() {
        const fileInput = document.querySelector('input[type="file"]');
        const file = fileInput.files[0];

        if (file) {
            const image = new Image();
            image.src = URL.createObjectURL(file);

            image.onload = function () {
                if (this.width !== 1200 || this.height !== 600) {
                    alert('Please upload an image with dimensions 1200x600.');
                    fileInput.value = '';
                    const cancelButton = document.getElementById('cenclik');
                    cancelButton.click(); // Clear the file input to prevent submitting invalid image
                }
            };
        }
    }
</script>
                                                        <!--end::Inputs-->
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Cancel-->
                                                    <span id="cenclik" class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="" data-bs-original-title="Cancel avatar">
                                                        <i class="bi bi-x fs-2"></i>
                                                    </span>
                                                    <!--end::Cancel-->
                                                    <!--begin::Remove-->
                                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove avatar">
                                                        <i class="bi bi-x fs-2"></i>
                                                    </span>
                                                    <!--end::Remove-->
                                                </div>
                                                <!--end::Image input-->
                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">Set the Images.webp/image files are accepted</div>
                                                <!--end::Description-->
                                            </div>
                                                      </div>
                                                      <?php if(isset($_POST['edit'])){?>
                                                        <?php if( $selectbypk['MetaOgImage']!=null){?>
                                                       <div class="col-md-6">
                                                       <div >
                                                <!--begin::Card title-->
                                                <label class="required  form-label  font-weight-bolder "
                                                style="font-weight: 900;">old Image:</label>
                                                <!--end::Card title-->
                                            </div>
                                                       <img class=" w-200px h-200px" src="../../Images/homepage/<?php echo $selectbypk['MetaOgImage'] ?>"
                                        
                                    
                                        style="width:300px ; height:150px; border-radius: 1%;">
                                                      </div>   <?php }?>
                                                     <?php }?>
                                                                                                          </div>
                                              
                                        </div>
                                                </div>
                                            
                                        </div>
                                      
                                       
                                        <br />
            
                                    </div>
                                    <div align="center">
                                        <div class="row">
                                            <div class="col mb-4">
                                            <input type="hidden" name="SPMetaID" class="form-control mb-2"
                                                value="<?php echo  $selectbypk['SPMetaID']  ?>">
                                                <button type="submit" class="btn btn-success" name="<?php
        if(isset($_POST['edit'])) {
          echo "update";
        } else {
          echo "insert";
        } ?>" value="save">Save</button>
                                                <a href="metahomepage.php" class="btn btn-danger">CANCLE</a>
                                            </div>
                                        </div>
                                    </div>
                    
                                </div>
                                <!--End::Container-->
                            </div>
                            <!--End::Post-->





                            <!-- main cards -->
                        </form>
                    </div>
                
<?php include_once __DIR__.'/A_Layout/Footer/footer.php'; ?>