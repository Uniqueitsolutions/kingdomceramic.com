<?php include_once __DIR__.'/A_Layout/Header/header.php'; ?>

<?php 
#region selectbypk
if(isset($_POST['edit']))
{
$pk=$_POST['UserID'];
$result=$userObj->selectbypk($pk);
$selectbypk=mysqli_fetch_assoc($result);                                      
}
#endregion


#region update
if(isset($_POST['update']))
{

    $userObj->UserName=$_POST['UserName'];
    $userObj->Email=$_POST['Email'];
    $imgname2 = $_FILES['ImagePath']['name'];
    $oldimgname2 = $_POST['Old_ogImage'];
    if($imgname2 != '') 
    {
      $file_tmp2 = $_FILES['ImagePath']['tmp_name'];
      move_uploaded_file($file_tmp2, '../../Images/user/' . $imgname2);
      unlink('../../Images/user/' . $oldimgname2);
      $userObj->ImagePath=$_FILES['ImagePath']['name'];
    } 
    else
    {
      $userObj->ImagePath=$_POST['Old_ogImage'];
    }  
    $userObj->MobileNumber = $_POST['MobileNumber'];
    $userObj->CreatedUserID = $_SESSION["UserID"];
   $result=$userObj->userEdit($_POST['UserID']);
   if ($result) {
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18'></script>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'Data Updated successfully!',
        })
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

    <form action="useredit.php" method="post" enctype="multipart/form-data">
        <!-- main cards -->

        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">


                <div class="card card-flush shadow-sm ">

                    <div class="card-header border-1">
                        <h3 class="card-title text-danger " style="font-weight: 900;">User Details
                        </h3>
                    </div>

                    <div class="card-body py-5 font-weight-bolder">
                        <div class="container">
                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                <!-- contact details -->
                                <div>
                                    <div>
                                        <label class="required  form-label  font-weight-bolder "
                                            style="font-weight: 900;"> User name </label>

                                        <input type="text" name="UserName" class="form-control mb-2"
                                            placeholder="User name" value="<?php echo $selectbypk['UserName'] ?>">

                                    </div>
                                    <div>
                                        <label class="  form-label  font-weight-bolder " style="font-weight: 900;">Email
                                        </label>

                                        <input type="Emial" name="Email" class="form-control mb-2" placeholder="Email"
                                            value="<?php echo $selectbypk['Email'] ?>">

                                    </div>
                                    <div>
                                        <!--begin::Card header-->
                                        <div>
                                            <!--begin::Card title-->
                                            <label class="  form-label  font-weight-bolder " style="font-weight: 900;">
                                                Image:</label>
                                            <!--end::Card title-->
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="card-body text-center pt-0-container">
                                                    <!--begin::Image input-->
                                                    <div class="image-input image-input-outline mb-3 image-input-changed"
                                                        data-kt-image-input="true" background-image: url("paper.gif");
                                                        style="background-image: url(../../Images/<?php echo $selectbypk['MetaOgImage'] ?>"
                                                        )>
                                                        <!--begin::Preview existing avatar-->
                                                        <div class="image-input-wrapper w-200px h-200px"></div>
                                                        <!--end::Preview existing avatar-->
                                                        <!--begin::Label-->
                                                        <label
                                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                            data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                            title="" data-bs-original-title="Add Image">
                                                            <i class="bi bi-pencil-fill fs-7"></i>
                                                            <!--begin::Inputs-->
                                                            <input type="file" name="ImagePath"
                                                                accept=".png, .jpg, .jpeg">
                                                            <input type="hidden" name="Old_ogImage"
                                                                value="<?php echo $selectbypk['ImagePath'];?>">

                                                            <!--end::Inputs-->
                                                        </label>
                                                        <!--end::Label-->
                                                        <!--begin::Cancel-->
                                                        <span
                                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                            data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                            title="" data-bs-original-title="Cancel avatar">
                                                            <i class="bi bi-x fs-2"></i>
                                                        </span>
                                                        <!--end::Cancel-->
                                                        <!--begin::Remove-->
                                                        <span
                                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                            data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                            title="" data-bs-original-title="Remove avatar">
                                                            <i class="bi bi-x fs-2"></i>
                                                        </span>
                                                        <!--end::Remove-->
                                                    </div>
                                                    <!--end::Image input-->
                                                    <!--begin::Description-->
                                                    <div class="text-muted fs-7">Set the Meta image. Only *.png,
                                                        *.jpg and
                                                        *.jpeg image files are accepted</div>
                                                    <!--end::Description-->
                                                </div>
                                            </div>
                                            <?php if(isset($_POST['edit'])){?>
                                            <div class="col-md-6">
                                                <div>
                                                    <!--begin::Card title-->
                                                    <label class="  form-label  font-weight-bolder "
                                                        style="font-weight: 900;">old Image:</label>
                                                    <!--end::Card title-->
                                                </div>
                                                <img class=" w-200px h-200px"
                                                    src="../../Images/user/<?php echo $selectbypk['ImagePath'] ?>"
                                                    style="width:300px ; height:150px; border-radius: 1%;">
                                            </div>
                                            <?php }?>
                                        </div>

                                    </div>
                                    <br />


                                    <div>
                                        <label class="  form-label  font-weight-bolder "
                                            style="font-weight: 900;">mobile number </label>

                                        <input type="text" name="MobileNumber" class="form-control mb-2"
                                            placeholder="mobile number"
                                            value="<?php echo $selectbypk['MobileNumber'] ?>">

                                    </div>
                                    <br />

                                    <div>

                                    </div>



                                </div>

                                <!--end::Card body-->
                            </div>
                        </div>

                    </div>


                    <div align="center">
                        <div class="row">
                            <div class="col mb-4">
                                <input type="hidden" name="UserID" class="form-control mb-2"
                                    value="<?php echo  $selectbypk['UserID']  ?>">
                                <button type="submit" class="btn btn-success" name="<?php
        if(isset($_POST['edit'])) {
          echo " update"; } else { echo "insert" ; } ?>" value="save">Save</button>
                                <a href="user.php" class="btn btn-danger">CANCLE</a>
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

<?php include 'A_Layout\Footer\footer.php' ?>