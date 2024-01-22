<?php include_once __DIR__.'/A_Layout/Header/header.php'; ?>
	
<?php 
#region selectbypk
if(isset($_POST['edit']))
{
$pk = $crypt->decryptId($_POST['SpaceID']); 
$result=$spaceObj->selectbypk($pk);
$selectbypk=mysqli_fetch_assoc($result);                                      
}
#endregion
#region insert
if(isset($_POST['insert']))
{
   $spaceObj->SpaceName=$_POST['SpaceName'];
   $spaceObj->SpaceDescription=$_POST['SpaceDescription'];
//    $imgname = $_FILES['Image']['name'];
//    $file_tmp = $_FILES['Image']['tmp_name'];
//    move_uploaded_file($file_tmp, '../Images/slider/' . $imgname);
//    $typeObj->Image=$_FILES['Image']['name'];
//    $typeObj->ImageDescription=$_POST['ImageDescription'];
   $spaceObj->SpaceUrl=$_POST['SpaceUrl'];
   $spaceObj->sequence=$_POST["sequence"]; 

   $spaceObj->MetaTitle = $_POST['MetaTitle'];
   $spaceObj->MetaKeywords = $_POST['MetaKeywords'];
   $spaceObj->MetaDescription = $_POST['MetaDescription'];
   $spaceObj->MetaOgTitle = $_POST['MetaOgTitle'];
   $imgname2 = $_FILES['MetaOgImage']['name'];
   $file_tmp2 = $_FILES['MetaOgImage']['tmp_name'];
   move_uploaded_file($file_tmp2, '../../Images/space/' . $imgname2);
   $spaceObj->MetaOgImage=$_FILES['MetaOgImage']['name'];
   $spaceObj->MetaOgDescription = $_POST['MetaOgDescription'];
   $spaceObj->MetaOgUrl = $_POST['MetaOgUrl'];
   $spaceObj->UserID = $_SESSION["UserID"];
   $spaceObj->IsActive = $_POST['IsActive'];
   
   $result=$spaceObj->insertData();
   if ($result) {
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18'></script>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'Data inserted successfully!',
        }).then(function() {
            window.location = 'Space';  // Replace with the appropriate redirect URL
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

    $spaceObj->SpaceName=$_POST['SpaceName'];
    $spaceObj->SpaceDescription=$_POST['SpaceDescription'];
 //    $imgname = $_FILES['Image']['name'];
 //    $file_tmp = $_FILES['Image']['tmp_name'];
 //    move_uploaded_file($file_tmp, '../Images/slider/' . $imgname);
 //    $typeObj->Image=$_FILES['Image']['name'];
 //    $typeObj->ImageDescription=$_POST['ImageDescription'];
    $spaceObj->SpaceUrl=$_POST['SpaceUrl'];
    $spaceObj->sequence=$_POST["sequence"]; 
 
    $spaceObj->MetaTitle = $_POST['MetaTitle'];
    $spaceObj->MetaKeywords = $_POST['MetaKeywords'];
    $spaceObj->MetaDescription = $_POST['MetaDescription'];
    $spaceObj->MetaOgTitle = $_POST['MetaOgTitle'];
    $imgname2 = $_FILES['MetaOgImage']['name'];
    $oldimgname2 = $_POST['Old_ogImage'];
    if($imgname2 != '') 
    {
      $file_tmp2 = $_FILES['MetaOgImage']['tmp_name'];
      move_uploaded_file($file_tmp2, '../../Images/space/' . $imgname2);
      unlink('../../Images/space/' . $oldimgname2);
      $spaceObj->MetaOgImage=$_FILES['MetaOgImage']['name'];
    } 
    else
    {
      $spaceObj->MetaOgImage=$_POST['Old_ogImage'];
    }  
    $spaceObj->MetaOgDescription = $_POST['MetaOgDescription'];
    $spaceObj->MetaOgUrl = $_POST['MetaOgUrl'];
    $spaceObj->UserID = $_SESSION["UserID"];
    $spaceObj->IsActive =$_POST['IsActive'];
    
   $result=$spaceObj->updateData($_POST['SpaceID']);
   if ($result) {
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18'></script>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'Data Updated successfully!',
        }).then(function() {
            window.location = 'Space';  // Replace with the appropriate redirect URL
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

                        <form action="spaceaddedit.php" method="post" enctype="multipart/form-data">
                            <!-- main cards -->

                            <!--begin::Post-->
                            <div class="post d-flex flex-column-fluid" id="kt_post">
                                <!--begin::Container-->
                                <div id="kt_content_container" class="container-xxl">

                             
                                    <div class="card card-flush shadow-sm ">

                                        <div class="card-header border-1">
                                            <h3 class="card-title text-danger " style="font-weight: 900;">Space Details
                                            </h3>
                                        </div>
                                    
                                        <div class="card-body py-5 font-weight-bolder">
                                            <div class="container">
                                                <div class="mb-10 fv-row fv-plugins-icon-container">
                                                    <!-- contact details -->
                                                    <div>
                                            <label class="required  form-label  font-weight-bolder "
                                                style="font-weight: 900;"> Space Name </label>
                                    
                                            <input type="text" name="SpaceName" class="form-control mb-2"
                                                placeholder="Space Title" value="<?php echo $selectbypk['SpaceName']  ?>" required>
                                    
                                        </div>
                                        <br />
                                        <div>
                                            <label class="required  form-label  font-weight-bolder "
                                                style="font-weight: 900;">Space Url:</label>
                                    
                                                <input type="text" name="SpaceUrl" class="form-control mb-2"
                                                placeholder="Space Url" value="<?php echo $selectbypk['SpaceUrl']  ?>" required>
                                        </div>
                                        <br />
                                        <div>
                                            <label class="  form-label  font-weight-bolder "
                                                style="font-weight: 900;">Space Descriptiion:</label>
                                    
                                                <textarea  id="editor2" name="SpaceDescription" class="form-control mb-2"
                                                placeholder="type Descriptiion"  ><?php echo $selectbypk['SpaceDescription'];  ?></textarea>
                                                <script src="https://cdn.ckeditor.com/4.21.0/standard-all/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor2', {
        height: 260,
        removeButtons: 'PasteFromWord'
    });
   
</script>
                                        </div>
                                        <br/>
                                        <div>
                                            <label class="  form-label  font-weight-bolder "
                                                style="font-weight: 900;">sequence:</label>
                                    
                                                <input type="number" name="sequence" class="form-control mb-2"
                                                placeholder="sequence"  value="<?php echo $selectbypk['sequence']  ?>">
                                        </div>
                          <br/>
                                        <div>
                                            <label class="  form-label  font-weight-bolder "
                                                style="font-weight: 900;">Status:</label>
                                    
                                                <label class="radio radio-success p-2">
                    <input type="radio" name="IsActive" value="1"<?php if($selectbypk['IsActive'] ==1){ echo "checked=''";}?>/>
                    <label class="  form-label  font-weight-bolder "
                                                style="font-weight: 500;">Active</label>
                </label>
                <label class="radio radio-success">
                    <input type="radio" name="IsActive" value="0" <?php if($selectbypk['IsActive'] ==0){ echo "checked=''";}?>/>
                    <label class="  form-label  font-weight-bolder "
                                                style="font-weight: 500;">Disable</label>
                </label>
                </label>
                                        </div>
                                       
                                        <br />
            
                                        <div>
                                            <label class="  form-label  font-weight-bolder "
                                                style="font-weight: 900;">Meta Title:</label>
                                    
                                                <input type="text" name="MetaTitle" class="form-control mb-2"
                                                placeholder="MetaTitle"  value="<?php echo $selectbypk['MetaTitle']  ?>">
                                        </div>
                                        <div>
                                            <label class="  form-label  font-weight-bolder "
                                                style="font-weight: 900;">Meta Description:</label>
                                    
                                                <input type="text"  name="MetaDescription" class="form-control mb-2"
                                                placeholder="Meta Description" value="<?php echo $selectbypk['MetaDescription']  ?>"/>
                                        </div>
                                        <div>
                                            <label class="  form-label  font-weight-bolder "
                                                style="font-weight: 900;">Meta keywords:</label>
                                    
                                                <input type="text" name="MetaKeywords" class="form-control mb-2"
                                                placeholder="Meta keywords"  value="<?php echo $selectbypk['MetaKeywords']  ?>">
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
    var firstField = document.querySelector('input[name="SpaceName"]');
    var secondField = document.querySelector('input[name="SpaceUrl"]');
    var thirdField = document.querySelector('input[name="MetaOgUrl"]');

    // Add event listener to the first input field
    firstField.addEventListener('input', function() {
        // Get the value from the first input field
        var value = firstField.value;

        // Replace spaces with hyphens ("-")
        var updatedValue = value.replace(/\s+/g, '-');
        updatedValue=updatedValue.toLowerCase(); 
        // Update the value of the second input field
        secondField.value = updatedValue;
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
                                                <label class="  form-label  font-weight-bolder "
                                                style="font-weight: 900;">old Image:</label>
                                                <!--end::Card title-->
                                            </div>
                                                       <img class=" w-200px h-200px" src="../../Images/space/<?php echo $selectbypk['MetaOgImage'] ?>"
                                        
                                    
                                        style="width:300px ; height:150px; border-radius: 1%;">
                                                      </div>
                                                      <?php }?>
                                                     <?php }?>
                                                                                                          </div>
                                              
                                        </div>
                                                </div>
                                            
                                        </div>
            
                                    </div>
                                    <div align="center">
                                        <div class="row">
                                            <div class="col mb-4">
                                            <input type="hidden" name="SpaceID" class="form-control mb-2"
                                                value="<?php echo  $selectbypk['SpaceID']  ?>">
                                                <button type="submit" class="btn btn-success" name="<?php
        if(isset($_POST['edit'])) {
          echo "update";
        } else {
          echo "insert";
        } ?>" value="save">Save</button>
                                                <a href="#" class="btn btn-danger">CANCLE</a>
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