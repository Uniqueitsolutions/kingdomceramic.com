
<?php include_once __DIR__.'/A_Layout/Header/header.php'; ?>
<?php
#region selectbypk
if(isset($_POST['edit']))
{
    $pk = $crypt->decryptId($_POST['CatalougeID']);
    $result = $catalougeObj->selectByPK($pk);
    $selectbypk = mysqli_fetch_assoc($result);
}
#endregion

#region insert
if(isset($_POST['insert']))
{
  
    $catalougeObj->CatalougeID = $_POST['CatalougeID'];
    $catalougeObj->CatalougePriviewTitle = $_POST['CatalougePriviewTitle'];
    $catalougeObj->TypeID = $_POST['TypeID'];
    $catalougeObj->SizeID = $_POST['SizeID'];
    $imgname1 = $_FILES['ImagePath']['name'];
    $file_tmp1 = $_FILES['ImagePath']['tmp_name'];
    move_uploaded_file($file_tmp1, '../../Images/catalouge/' . $imgname1);
    $catalougeObj->ImagePath = $_FILES['ImagePath']['name'];
    $catalougeObj->ImageDescription = $_POST['ImageDescription'];
    $pdfname1 = $_FILES['CatalougePDF']['name'];
    $pdf_tmp1 = $_FILES['CatalougePDF']['tmp_name'];
    move_uploaded_file($pdf_tmp1, '../../Images/PDF/' . $pdfname1);
    $catalougeObj->CatalougePDF = $_FILES['CatalougePDF']['name'];
    $catalougeObj->CatalougePDFDescription = $_POST['CatalougePDFDescription'];
    $catalougeObj->CatalougeDescription = $_POST['CatalougeDescription'];
    $catalougeObj->Sequence = $_POST['Sequence'];
    $catalougeObj->MetaTitle = $_POST['MetaTitle'];
    $catalougeObj->MetaKeywords = $_POST['MetaKeywords'];
    $catalougeObj->MetaDescription = $_POST['MetaDescription'];
    $catalougeObj->MetaOgTitle = $_POST['MetaOgTitle'];
    $imgname2 = $_FILES['MetaOgImage']['name'];
    $file_tmp2 = $_FILES['MetaOgImage']['tmp_name'];
    move_uploaded_file($file_tmp2, '../../Images/catalouge/' . $imgname2);
    $catalougeObj->MetaOgImage = $_FILES['MetaOgImage']['name'];
    $catalougeObj->MetaOgDescription = $_POST['MetaOgDescription'];
    $catalougeObj->MetaOgUrl = $_POST['MetaOgUrl'];
    $catalougeObj->UserID = $_SESSION["UserID"];
    $catalougeObj->IsActive = $_POST['IsActive'];

    $result = $catalougeObj->insertData();
    if ($result) {
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18'></script>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: 'Data inserted successfully!',
            }).then(function() {
                window.location = 'Catalouge';  // Replace with the appropriate redirect URL
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
    $catalougeObj->CatalougePriviewTitle = $_POST['CatalougePriviewTitle'];
    $catalougeObj->TypeID = $_POST['TypeID'];
    $catalougeObj->SizeID = $_POST['SizeID'];
    $imgname = $_FILES['ImagePath']['name'];
    $oldimgname = $_POST['Old_ogImage1'];
    if($imgname != '')
    {
      $file_tmp = $_FILES['ImagePath']['tmp_name'];
      move_uploaded_file($file_tmp, '../../Images/catalouge/' . $imgname);
      unlink('../../Images/catalouge/' . $oldimgname);
      $catalougeObj->ImagePath=$_FILES['ImagePath']['name'];
    } 
    else
    {
      $catalougeObj->ImagePath=$_POST['Old_ogImage1'];
    } 
    $catalougeObj->ImageDescription = $_POST['ImageDescription'];
    $pdfname1 = $_FILES['CatalougePDF']['name'];
    $pdf_tmp1 = $_FILES['CatalougePDF']['tmp_name'];
    move_uploaded_file($pdf_tmp1, '../../Images/PDF/' . $pdfname1);
    $catalougeObj->CatalougePDF = $_FILES['CatalougePDF']['name'];
    $catalougeObj->CatalougePDFDescription = $_POST['CatalougePDFDescription'];
    $catalougeObj->CatalougeDescription = $_POST['CatalougeDescription'];
    $catalougeObj->Sequence = $_POST['Sequence'];
    $catalougeObj->MetaTitle = $_POST['MetaTitle'];
    $catalougeObj->MetaKeywords = $_POST['MetaKeywords'];
    $catalougeObj->MetaDescription = $_POST['MetaDescription'];
    $catalougeObj->MetaOgTitle = $_POST['MetaOgTitle'];
    $imgname2 = $_FILES['MetaOgImage']['name'];
  $oldimgname2 = $_POST['Old_ogImage'];
  if($imgname2 != '') 
  {
    $file_tmp2 = $_FILES['MetaOgImage']['tmp_name'];
    move_uploaded_file($file_tmp2, '../../Images/catalouge/'. $imgname2);
    unlink('../../Images/catalouge/' . $oldimgname2);
    $catalougeObj->MetaOgImage=$_FILES['MetaOgImage']['name'];
  } 
  else
  {
    $catalougeObj->MetaOgImage=$_POST['Old_ogImage'];
  }  
    $catalougeObj->MetaOgDescription = $_POST['MetaOgDescription'];
    $catalougeObj->MetaOgUrl = $_POST['MetaOgUrl'];
    $catalougeObj->UserID = $_SESSION["UserID"];
    $catalougeObj->IsActive = $_POST['IsActive'];


    $result = $catalougeObj->updateData($_POST["CatalougeID"]);
    if ($result) {
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18'></script>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: 'Data Updated successfully!',
            }).then(function() {
                window.location = 'Catalouge';  // Replace with the appropriate redirect URL
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

                        <form action="catalougeaddedit.php" method="post" enctype="multipart/form-data">
                            <!-- main cards -->

                            <!--begin::Post-->
                            <div class="post d-flex flex-column-fluid" id="kt_post">
                                <!--begin::Container-->
                                <div id="kt_content_container" class="container-xxl">

                             
                                    <div class="card card-flush shadow-sm ">

                                        <div class="card-header border-1">
                                            <h3 class="card-title text-danger " style="font-weight: 900;">Catalouge Details
                                            </h3>
                                        </div>
                                    
                                        <div class="card-body py-5 font-weight-bolder">
                                            <div class="container">
                                                <div class="mb-10 fv-row fv-plugins-icon-container">
                                                    <!-- contact details -->
                                                    <div >
                                            <div>
                                                <label class="required  form-label  font-weight-bolder "
                                                    style="font-weight: 900;">Type:</label>
                                                    <select class="form-select" aria-label="" name="TypeID" required>
                                                                    <option selected>Open this select menu</option>
                                                                    <?php  
                                                   $result6=$typeObj->selectAllDataForAdmin();
                                      
                                                   while($row6=mysqli_fetch_assoc($result6))             
                                                      {
                                                       
                                                   ?>

              <option  value="<?php echo $row6['TypeID']; ?>" <?php echo $row6['TypeID'] == $selectbypk['TypeID'] ? 'selected':'' ?> ><?php echo $row6['TypeName']; ?></option>
            <?php } ?>
                                                                       </select>
                                        
                                                </div>
                                                
                                                <br/>
                                                <div>
                                                <label class="required  form-label  font-weight-bolder "
                                                    style="font-weight: 900;">Size:</label>
                                                    <select class="form-select" aria-label="" name="SizeID" required>
                                                                    <option selected>Open this select menu</option>
                                                                    <?php  
                                                   $result7=$sizeObj->selectAllDataForAdmin();
                                      
                                                   while($row7=mysqli_fetch_assoc($result7))             
                                                      {
                                                       
                                                   ?>

              <option  value="<?php echo $row7['SizeID']; ?>" <?php echo $row7['SizeID'] == $selectbypk['SizeID'] ? 'selected':'' ?> ><?php echo $row7['SizeName']; ?></option>
            <?php } ?>
                                                                       </select>
                                        
                                                </div>
                                            <br/>
                                        <div>
                                            <label class="required  form-label  font-weight-bolder "
                                                style="font-weight: 900;"> Catalouge Priview Title </label>
                                    
                                            <input type="text" name="CatalougePriviewTitle" class="form-control mb-2"
                                                placeholder="Catalouge Title" value="<?php echo $selectbypk['CatalougePriviewTitle'] ?>" required>
                                    
                                        </div>
                                        
                                            <div>
                                                <!--begin::Card header-->
                                                <div >
                                                    <!--begin::Card title-->
                                                    <label class="  form-label  font-weight-bolder "
                                                    style="font-weight: 900;">Catalouge Priview Image:</label>
                                                    <!--end::Card title-->
                                                </div>
                                                <!--end::Card header-->
                                                <!--begin::Card body-->

                                                <div class="row">
                                                    <div class="col-md-6">
                                                    <div class="card-body text-center pt-0-container">
                                                    <!--begin::Image input-->
                                                    <div class="image-input image-input-outline mb-3 image-input-changed" data-kt-image-input="true" style="background-image: url(assets/media/svg/files/blank-image.svg)">
                                                        <!--begin::Preview existing avatar-->
                                                        <div class="image-input-wrapper w-200px h-200px"></div>
                                                        <!--end::Preview existing avatar-->
                                                        <!--begin::Label-->
                                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="" data-bs-original-title="Add Image">
                                                            <i class="bi bi-pencil-fill fs-7"></i>
                                                            <!--begin::Inputs-->
                                                            <input type="file" name="ImagePath" accept="image/webp">
                                                            <input type="hidden" name="Old_ogImage1" value="<?php echo $selectbypk['ImagePath'];?>">
                                                            <!--end::Inputs-->
                                                        </label>
                                                        <!--end::Label-->
                                                        <!--begin::Cancel-->
                                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="" data-bs-original-title="Cancel avatar">
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
                                                    <div class="text-muted fs-7">Set the  image. Only web/image files are accepted</div>
                                                    <!--end::Description-->
                                                </div>
                                                    </div>
                                                    <?php if(isset($_POST['edit'])){?>
                                                       <div class="col-md-6">\
                                                       <?php if( $selectbypk['ImagePath']!=null){?>
                                                       <div >
                                                <!--begin::Card title-->
                                                <label class="  form-label  font-weight-bolder "
                                                style="font-weight: 900;">old Image:</label>
                                                <!--end::Card title-->
                                            </div>
                                                       <img class=" w-200px h-200px" src="../../Images/catalouge/<?php echo $selectbypk['ImagePath'] ?>"
                                        alt="<?php echo $row['ImageDescription'] ?>"
                                    
                                        style="width:300px ; height:150px; border-radius: 1%;">
                                                      </div>
                                                      <?php }?>
                                                     <?php }?>
                                                      </div>
                                              
                                                <!--end::Card body-->
                                            </div>
                                            <br/>
                                            <div>
                                            <label class="  form-label  font-weight-bolder "
                                                style="font-weight: 900;"> ImageDescription </label>
                                    
                                            <input type="text" name="ImageDescription" class="form-control mb-2"
                                                placeholder="ImageDescription" value="<?php echo $selectbypk['ImageDescription'] ?>">
                                    
                                        </div>
                                        <br />
                                        <div>
                                            <label class="  form-label  font-weight-bolder "
                                                style="font-weight: 900;">Sequence </label>
                                    
                                            <input type="number" name="Sequence" class="form-control mb-2"
                                                placeholder="Sequence" value="<?php echo $selectbypk['Sequence'] ?>">
                                    
                                        </div>
                                        <br />
                                        <div>
                                            <label class="  form-label  font-weight-bolder "
                                                style="font-weight: 900;">Catalouge PDF</label>
                                    
                                                <input type="File" name="CatalougePDF" class="form-control mb-2"
                                                placeholder="CatalougePDF" value="<?php echo $selectbypk['CatalougePDF'] ?>">
                                        </div>
                                        <br />
                                                                                <div>
                                            <label class="  form-label  font-weight-bolder "
                                                style="font-weight: 900;">Catalouge PDF Description	</label>
                                    
                                                <input type="text" name="CatalougePDFDescription" class="form-control mb-2"
                                                placeholder="CatalougePDFDescription" value="<?php echo $selectbypk['CatalougePDFDescription'] ?>">
                                        </div>
                                        <br />
                                
                                        <div>
                                            <label class="  form-label  font-weight-bolder "
                                                style="font-weight: 900;">Catalouge Descriptiion:</label>
                                    
                                                <textarea  id="editor2" name="CatalougeDescriptiion" class="form-control mb-2"
                                                placeholder="Product Description"  ><?php echo $selectbypk['CatalougeDescriptiion'];  ?></textarea>
                                                <script src="https://cdn.ckeditor.com/4.21.0/standard-all/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor2', {
        height: 260,
        removeButtons: 'PasteFromWord'
    });
   
</script>            </div>
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
                                        <br/>
            
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
    var firstField = document.querySelector('input[name="CatalougePriviewTitle"]');
    var thirdField = document.querySelector('input[name="MetaOgUrl"]');

    // Add event listener to the first input field
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
                                                    <span  id="cenclik" class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="" data-bs-original-title="Cancel avatar">
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
                                                       <div class="col-md-6">
                                                       <?php if( $selectbypk['MetaOgImage']!=null){?>
                                                       <div >
                                                <!--begin::Card title-->
                                                <label class="  form-label  font-weight-bolder "
                                                style="font-weight: 900;">old Image:</label>
                                                <!--end::Card title-->
                                            </div>
                                                       <img class=" w-200px h-200px" src="../../Images/catalouge/<?php echo $selectbypk['MetaOgImage'] ?>"
                                        alt="<?php echo $row['ImageDescription'] ?>"
                                    
                                        style="width:300px ; height:150px; border-radius: 1%;">
                                                      </div>
                                                      <?php }?>
                                                     <?php }?>
                                                                                                          </div>
</div>
                                            <!--end::Card body-->
                                        </div>
                                                </div>
                                            
                                        </div>
            
                                    </div>
                                    <div align="center">
                                        <div class="row">
                                            <div class="col mb-4">
                                            <input type="hidden" name="CatalougeID" class="form-control mb-2"
                                                value="<?php echo  $selectbypk['CatalougeID']  ?>">
                                                <button type="submit" class="btn btn-success" name="<?php
        if(isset($_POST['edit'])) {
          echo "update";
        } else {
          echo "insert";
        } ?>" value="save">Save</button>
                                                <a href="catalouge.php" class="btn btn-danger">CANCLE</a>
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
                </div>
<?php include_once __DIR__.'/A_Layout/Footer/footer.php'; ?>