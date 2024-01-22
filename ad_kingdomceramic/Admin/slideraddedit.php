<?php include_once __DIR__ . '/A_Layout/Header/header.php'; ?>

<?php
#region selectbypk
if (isset($_POST['edit'])) {
    
    $pk = $crypt->decryptId($_POST['SliderID']); 
    $result = $sliderObj->selectbypk($pk);
    $selectbypk = mysqli_fetch_assoc($result);
}
#endregion
#region insert
if (isset($_POST['insert'])) {
    $sliderObj->SliderTitle = $_POST['SliderTitle'];
    $sliderObj->SliderDescription = $_POST['SliderDescription'];
    $imgname = $_FILES['ImagePath']['name'];
    $file_tmp = $_FILES['ImagePath']['tmp_name'];
    move_uploaded_file($file_tmp, '../../Images/slider/'.$imgname);
    $sliderObj->ImagePath = $_FILES['ImagePath']['name'];
    $sliderObj->ImageDescription = $_POST['ImageDescription'];
    $sliderObj->Sequence = $_POST["Sequence"];
    $sliderObj->UserID = $_SESSION["UserID"];
    $sliderObj->IsActive = $_POST["IsActive"];

    $result = $sliderObj->insertData();
    if ($result) {
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18'></script>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: 'Data inserted successfully!',
            }).then(function() {
                window.location = 'Slider';  // Replace with the appropriate redirect URL
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
if (isset($_POST['update'])) {

    $sliderObj->SliderTitle = $_POST['SliderTitle'];
    $sliderObj->SliderDescription = $_POST['SliderDescription'];
    $imgname = $_FILES['ImagePath']['name'];
    $oldimgname = $_POST['Old_ogImage1'];
    if($imgname != '')
    {
      $file_tmp = $_FILES['ImagePath']['tmp_name'];
      move_uploaded_file($file_tmp, '../../Images/slider/' . $imgname);
      unlink('../../Images/slider/' . $oldimgname);
      $sliderObj->ImagePath=$_FILES['ImagePath']['name'];
    } 
    else
    {
      $sliderObj->ImagePath=$_POST['Old_ogImage1'];
    } 
    $sliderObj->ImageDescription = $_POST['ImageDescription'];
    $sliderObj->Sequence = $_POST["Sequence"];
    $sliderObj->UserID = $_SESSION["UserID"];
    $sliderObj->IsActive = $_POST["IsActive"];


    $result = $sliderObj->updateData($_POST['SliderID']);

        //pop up alret
    if ($result) {
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18'></script>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: 'Data Updated successfully!',
            }).then(function() {
                window.location = 'Slider';  // Replace with the appropriate redirect URL
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

    <form action="slideraddedit.php" method="post" enctype="multipart/form-data">
        <!-- main cards -->

        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">


                <div class="card card-flush shadow-sm ">

                    <div class="card-header border-1">
                        <h3 class="card-title text-danger " style="font-weight: 900;">slider Details
                        </h3>
                    </div>

                    <div class="card-body py-5 font-weight-bolder">
                        <div class="container">
                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                <!-- contact details -->
                                <div>
                                    <label class="required  form-label  font-weight-bolder " style="font-weight: 900;">
                                        slider Title </label>

                                    <input type="text" name="SliderTitle" class="form-control mb-2"
                                        placeholder="Slider Title" value="<?php echo $selectbypk['SliderTitle'] ?>" required>

                                </div>
                                <br />
                                <div>
                                    <label class="  form-label  font-weight-bolder " style="font-weight: 900;">
                                        Slider Description</label>

                                        <textarea  id="editor2" name="SliderDescription" class="form-control mb-2"
                                                placeholder="type Descriptiion"  ><?php echo $selectbypk['SliderDescription'];  ?></textarea>
                                                <script src="https://cdn.ckeditor.com/4.21.0/standard-all/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor2', {
        height: 260,
        removeButtons: 'PasteFromWord'
    });
   
</script>       </div>
                                <br />

                                <div>
                                    <label class="  form-label  font-weight-bolder "
                                        style="font-weight: 900;">Sequence:</label>

                                    <input type="text" name="Sequence" class="form-control mb-2" placeholder="Sequence"
                                        value="<?php echo $selectbypk['Sequence'] ?>">
                                </div>

                                <div>
                                    <!--begin::Card header-->
                                    <div>
                                        <!--begin::Card title-->
                                        <label class="required  form-label  font-weight-bolder "
                                            style="font-weight: 900;">Slider Image:</label>
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
                                                style="background-image: url(../../Images/slider/<?php echo $selectbypk['ImagePath'] ?>")>
                                                    <!--begin::Preview existing avatar-->
                                                    <div class="image-input-wrapper w-450px h-200px"></div>
                                                    <!--end::Preview existing avatar-->
                                                    <!--begin::Label-->
                                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="" data-bs-original-title="Add Image">
                                                        <i class="bi bi-pencil-fill fs-7"></i>
                                                        <!--begin::Inputs-->
                                                        <input type="file" name="ImagePath" accept="image/webp/>
                                                        <input type="hidden" name="Old_ogImage1" value="<?php echo $selectbypk['ImagePath'];?>"/>
                                                        
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
                                                <div class="text-muted fs-7">Set the Images.webp/image files are accepted</div>
                                                <!--end::Description-->
                                            </div>
                                                      </div>
                                                      <?php if(isset($_POST['edit'])){?>
                                                        <?php if( $selectbypk['ImagePath']!=null){?>
                                                       <div class="col-md-6">
                                                       <div >
                                                <!--begin::Card title-->
                                                <label class="  form-label  font-weight-bolder "
                                                style="font-weight: 900;">old Image:</label>
                                                <!--end::Card title-->
                                            </div>
                                                       <img class="border w-450px h-200px" src="../../Images/slider/<?php echo $selectbypk['ImagePath'] ?>"
                                        
                                    
                                        style="width:300px ; height:150px; border-radius: 1%;">
                                                      </div>
                                                      <?php }?>
                                                     <?php }?>
                                                                                                          </div>
                                              
                                </div>
                                <script>
    function validateImage(input) {
        const file = input.files[0];
        const allowedTypes = ['image/webp'];

        if (file && allowedTypes.includes(file.type)) {
            // The selected file is a valid WebP image
            // You can add further logic or actions here if needed.
        } else {
            // The selected file is not a WebP image
            alert('Please select a valid WebP image file.');
            // Reset the file input
            input.value = '';
        }
    }
</script>













                                <br />

                                <div>
                                    <label class="  form-label  font-weight-bolder "
                                        style="font-weight: 900;">Image Description </label>

                                    <input type="text" name="ImageDescription" class="form-control mb-2"
                                        placeholder="Image Description"
                                        value="<?php echo $selectbypk['ImageDescription'] ?>">
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
                                       
                            </div>
                            <div align="center">
                                <div class="row">
                                    <div class="col mb-4">
                                        <input type="hidden" name="SliderID" class="form-control mb-2"
                                            value="<?php echo $selectbypk['SliderID'] ?>">
                                        <button type="submit" class="btn btn-success" name="<?php
                                        if (isset($_POST['edit'])) {
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