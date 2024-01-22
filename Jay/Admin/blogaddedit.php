<?php include_once __DIR__ . '/A_Layout/Header/header.php'; ?>
<?php
#region selectbypk`
if (isset($_POST['edit'])) {
    $pk = $crypt->decryptId($_POST['BlogID']);
    $result = $blogObj->selectByPK($pk);
    $selectbypk = mysqli_fetch_assoc($result);
}
#endregion

#region insert
if (isset($_POST['insert'])) {

    $blogObj->BlogTitle = $_POST['BlogTitle'];
    $blogObj->BlogDescription = $_POST['BlogDescription'];
    $blogObj->BlogUrl = $_POST['BlogUrl'];


    $imgname1 = $_FILES['ImagePath1']['name'];
    $file_tmp1 = $_FILES['ImagePath1']['tmp_name'];
    move_uploaded_file($file_tmp1, '../../Images/blog/' . $imgname1);
    $blogObj->ImagePath1 = $_FILES['ImagePath1']['name'];
    $blogObj->ImageDescription1 = $_POST['ImageDescription1'];


    $imgname2 = $_FILES['ImagePath2']['name'];
    $file_tmp2 = $_FILES['ImagePath2']['tmp_name'];
    move_uploaded_file($file_tmp2, '../../Images/blog/' . $imgname2);
    $blogObj->ImagePath2 = $_FILES['ImagePath2']['name'];
    $blogObj->ImageDescription2 = $_POST['ImageDescription2'];


    $imgname3 = $_FILES['ImagePath3']['name'];
    $file_tmp3 = $_FILES['ImagePath3']['tmp_name'];
    move_uploaded_file($file_tmp3, '../../Images/blog/' . $imgname3);
    $blogObj->ImagePath3 = $_FILES['ImagePath3']['name'];
    $blogObj->ImageDescription3 = $_POST['ImageDescription3'];

    $imgname4 = $_FILES['ImagePath4']['name'];
    $file_tmp4 = $_FILES['ImagePath4']['tmp_name'];
    move_uploaded_file($file_tmp4, '../../Images/blog/' . $imgname4);
    $blogObj->ImagePath4 = $_FILES['ImagePath4']['name'];
    $blogObj->ImageDescription4 = $_POST['ImageDescription4'];

    $imgname5 = $_FILES['ImagePath5']['name'];
    $file_tmp5 = $_FILES['ImagePath5']['tmp_name'];
    move_uploaded_file($file_tmp5, '../../Images/blog/' . $imgname5);
    $blogObj->ImagePath5 = $_FILES['ImagePath5']['name'];
    $blogObj->ImageDescription5 = $_POST['ImageDescription5'];

    $imgnam6 = $_FILES['ImagePath6']['name'];
    $file_tmp6 = $_FILES['ImagePath6']['tmp_name'];
    move_uploaded_file($file_tmp6, '../../Images/blog/' . $imgname6);
    $blogObj->ImagePath6 = $_FILES['ImagePath6']['name'];


    $blogObj->Sequence = $_POST['Sequence'];

    $blogObj->MetaTitle = $_POST['MetaTitle'];
    $blogObj->MetaKeywords = $_POST['MetaKeywords'];
    $blogObj->MetaDescription = $_POST['MetaDescription'];
    $blogObj->MetaOgTitle = $_POST['MetaOgTitle'];
    $blogObj->MetaOgUrl = $_POST['MetaOgUrl'];
    $imgname7 = $_FILES['MetaOgImage']['name'];
    $file_tmp7 = $_FILES['MetaOgImage']['tmp_name'];
    move_uploaded_file($file_tmp7, '../../Images/' . $imgname7);
    $blogObj->MetaOgImage = $_FILES['MetaOgImage']['name'];
    $blogObj->MetaOgDescription = $_POST['MetaOgDescription'];
    $blogObj->UserID = $_SESSION["UserID"];
    $blogObj->IsActive = $_POST['IsActive'];


    $result = $blogObj->insertData();
    if ($result) {
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18'></script>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: 'Data inserted successfully!',
            }).then(function () {
                window.location = 'Blog';  // Replace with the appropriate redirect URL
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
    $blogObj->BlogTitle = $_POST['BlogTitle'];
    $blogObj->BlogDescription = $_POST['BlogDescription'];
    $blogObj->BlogUrl = $_POST['BlogUrl'];
    $blogObj->Sequence = $_POST['Sequence'];
    /*-------------------------------------------------------------------------------*/
    $imgname1 = $_FILES['ImagePath1']['name'];
    $oldimgname1 = $_POST['Old_ogImage1'];
    if ($imgname1 != '') {
        $file_tmp1 = $_FILES['ImagePath1']['tmp_name'];
        move_uploaded_file($file_tmp1, '../../Images/blog/' . $imgname1);
        unlink('../../Images/blog/' . $oldimgname1);
        $blogObj->ImagePath1 = $_FILES['ImagePath1']['name'];
    } else {
        $blogObj->ImagePath1 = $_POST['Old_ogImage1'];
    }
    $blogObj->ImageDescription1 = $_POST['ImageDescription1'];

    /*-------------------------------------------------------------------------------*/
    $imgname2 = $_FILES['ImagePath2']['name'];
    $oldimgname2 = $_POST['Old_ogImage2'];
    if ($imgname2 != '') {
        $file_tmp2 = $_FILES['ImagePath2']['tmp_name'];
        move_uploaded_file($file_tmp2, '../../Images/blog/' . $imgname2);
        unlink('../../Images/blog/' . $oldimgname2);
        $blogObj->ImagePath2 = $_FILES['ImagePath2']['name'];
    } else {
        $blogObj->ImagePath2 = $_POST['Old_ogImage2'];
    }
    $blogObj->ImageDescription2 = $_POST['ImageDescription2'];

    /*-------------------------------------------------------------------------------*/
    $imgname4 = $_FILES['ImagePath4']['name'];
    $oldimgname4 = $_POST['Old_ogImage4'];
    if ($imgname4 != '') {
        $file_tmp4 = $_FILES['ImagePath4']['tmp_name'];
        move_uploaded_file($file_tmp4, '../../Images/blog/' . $imgname4);
        unlink('../../Images/blog/' . $oldimgname4);
        $blogObj->ImagePath4 = $_FILES['ImagePath4']['name'];
    } else {
        $blogObj->ImagePath4 = $_POST['Old_ogImage4'];
    }
    $blogObj->ImageDescription4 = $_POST['ImageDescription4'];
    /*-------------------------------------------------------------------------------*/
    $imgname3 = $_FILES['ImagePath3']['name'];
    $oldimgname3 = $_POST['Old_ogImage3'];
    if ($imgname3 != '') {
        $file_tmp3 = $_FILES['ImagePath3']['tmp_name'];
        move_uploaded_file($file_tmp3, '../../Images/blog/' . $imgname3);
        unlink('../../Images/blog/' . $oldimgname3);
        $blogObj->ImagePath3 = $_FILES['ImagePath3']['name'];
    } else {
        $blogObj->ImagePath3 = $_POST['Old_ogImage3'];
    }
    $blogObj->ImageDescription3 = $_POST['ImageDescription3'];
    /*-------------------------------------------------------------------------------*/
    $imgname5 = $_FILES['ImagePath5']['name'];
    $oldimgname5 = $_POST['Old_ogImage5'];
    if ($imgname5 != '') {
        $file_tmp5 = $_FILES['ImagePath5']['tmp_name'];
        move_uploaded_file($file_tmp5, '../../Images/blog/' . $imgname5);
        unlink('../../Images/blog/' . $oldimgname5);
        $blogObj->ImagePath5 = $_FILES['ImagePath5']['name'];
    } else {
        $blogObj->ImagePath5 = $_POST['Old_ogImage5'];
    }
    $blogObj->ImageDescription5 = $_POST['ImageDescription5'];
    /*-------------------------------------------------------------------------------*/

    $imgname6 = $_FILES['ImagePath6']['name'];
    $oldimgname6 = $_POST['Old_ogImage6'];
    if ($imgname6 != '') {
        $file_tmp6 = $_FILES['ImagePath6']['tmp_name'];
        move_uploaded_file($file_tmp6, '../../Images/blog/' . $imgname6);
        unlink('../../Images/blog/' . $oldimgname6);
        $blogObj->ImagePath6 = $_FILES['ImagePath6']['name'];
    } else {
        $blogObj->ImagePath6 = $_POST['Old_ogImage6'];
    }
    $blogObj->ImageDescription6 = $_POST['ImageDescription6'];

    $blogObj->MetaTitle = $_POST['MetaTitle'];
    $blogObj->MetaKeywords = $_POST['MetaKeywords'];
    $blogObj->MetaDescription = $_POST['MetaDescription'];
    $blogObj->MetaOgTitle = $_POST['MetaOgTitle'];
    $blogObj->MetaOgUrl = $_POST['MetaOgUrl'];
    $imgname7 = $_FILES['MetaOgImage']['name'];
    $oldimgname7 = $_POST['Old_ogImage'];
    if ($imgname7 != '') {
        $file_tmp7 = $_FILES['MetaOgImage']['tmp_name'];
        move_uploaded_file($file_tmp7, '../../Images/blog/' . $imgname7);
        unlink('../../Images/blog/' . $oldimgname7);
        $blogObj->MetaOgImage = $_FILES['MetaOgImage']['name'];
    } else {
        $blogObj->MetaOgImage = $_POST['Old_ogImage'];
    }
    $blogObj->MetaOgDescription = $_POST['MetaOgDescription'];
    $blogObj->UserID = $_SESSION["UserID"];
    $blogObj->IsActive = $_POST['IsActive'];



    $result = $blogObj->updateData($_POST['BlogID']);
    if ($result) {
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18'></script>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: 'Data Updated successfully!',
            }).then(function () {
                window.location = 'blog.php';  // Replace with the appropriate redirect URL
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

    <form action="blogaddedit.php" method="post" enctype="multipart/form-data">
        <!-- main cards -->

        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">


                <div class="card card-flush shadow-sm ">

                    <div class="card-header border-1">
                        <h3 class="card-title text-danger " style="font-weight: 900;">Blog Details
                        </h3>
                    </div>

                    <div class="card-body py-5 font-weight-bolder">
                        <div class="container">
                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                <!-- contact details -->

                                <div>
                                    <label class="required  form-label  font-weight-bolder "
                                        style="font-weight: 900;">Blog Title:</label>

                                    <input type="text" name="BlogTitle" class="form-control mb-2"
                                        placeholder="Blog Title" value="<?php echo $selectbypk['BlogTitle'] ?> "
                                        required>

                                </div>
                                <br />
                                <div>
                                    <label class="required  form-label  font-weight-bolder "
                                        style="font-weight: 900;">Blog Sloug:</label>

                                    <input type="text" name="BlogUrl" class="form-control mb-2" placeholder="Blog Url"
                                        value="<?php echo $selectbypk['BlogUrl'] ?>" required>

                                </div>
                                <br />
                                <div>
                                    <label class="  form-label  font-weight-bolder " style="font-weight: 900;">Blog
                                        Description:</label>


                                    <textarea id="editor2" name="BlogDescription" class="form-control mb-2"
                                        placeholder="Blog Description"><?php echo $selectbypk['BlogDescription'];  ?></textarea>
                                    <script src="https://cdn.ckeditor.com/4.21.0/standard-all/ckeditor.js"></script>
                                    <script>
                                        CKEDITOR.replace('editor2', {
                                            height: 260,
                                            removeButtons: 'PasteFromWord'
                                        });
                                    </script>
                                </div>
                                <br />
                                <div>
                                    <label class="  form-label  font-weight-bolder "
                                        style="font-weight: 900;">Sequence:</label>

                                    <input type="number" name="Sequence" class="form-control mb-2"
                                        placeholder="Sequence" value="<?php echo $selectbypk['Sequence'] ?>" />

                                </div>
                                <br />
                                <div>
                                    <label class="  form-label  font-weight-bolder "
                                        style="font-weight: 900;">Status:</label>

                                    <label class="radio radio-success p-2">
                                        <input type="radio" name="IsActive" value="1" <?php if
                                            ($selectbypk['IsActive']==1) { echo "checked=''" ; } ?> />
                                        <label class="  form-label  font-weight-bolder "
                                            style="font-weight: 500;">Active</label>
                                    </label>
                                    <label class="radio radio-success">
                                        <input type="radio" name="IsActive" value="0" <?php if
                                            ($selectbypk['IsActive']==0) { echo "checked=''" ; } ?> />
                                        <label class="  form-label  font-weight-bolder "
                                            style="font-weight: 500;">Disable</label>
                                    </label>
                                    </label>
                                </div>
                                <br />
                                <div>
                                    <!--begin::Card header-->
                                    <div>
                                        <!--begin::Card title-->
                                        <label class="  form-label  font-weight-bolder " style="font-weight: 900;">Blog
                                            Image(1):</label>
                                        <!--end::Card title-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card-body text-center pt-0-container">
                                                <!--begin::Image input-->
                                                <div class="image-input image-input-outline mb-3 image-input-changed"
                                                    data-kt-image-input="true"
                                                    style="background-image: url(assets/media/svg/files/blank-image.svg)">
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
                                                        <input type="file" name="ImagePath1" accept="image/webp">
                                                        <input type="hidden" name="Old_ogImage1"
                                                            value="<?php echo $selectbypk['ImagePath1']; ?>">
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
                                                <div class="text-muted fs-7">Set the Images.webp/image files are
                                                    accepted</div>
                                                <!--end::Description-->
                                            </div>
                                        </div>
                                        <?php if (isset($_POST['edit'])) { ?>
                                        <div class="col-md-6">
                                            <?php if ($selectbypk['ImagePath1'] != null) { ?>
                                            <div>
                                                <!--begin::Card title-->

                                                <label class="  form-label  font-weight-bolder "
                                                    style="font-weight: 900;">old Image:</label>
                                                <!--end::Card title-->
                                            </div>

                                            <img class=" w-200px h-200px"
                                                src="../../Images/blog/<?php echo $selectbypk['ImagePath1'] ?>"
                                                alt="<?php echo $row['ImageDescription1'] ?>"
                                                style="width:300px ; height:150px; border-radius: 1%;">
                                        </div>
                                        <?php } ?>
                                        <?php } ?>
                                    </div>

                                    <!--end::Card body-->
                                </div>
                                <br />
                                <div>
                                    <label class="  form-label  font-weight-bolder " style="font-weight: 900;">Image
                                        Description(1):</label>

                                    <input type="text" name="ImageDescription1" class="form-control mb-2"
                                        placeholder="Image Description(1)"
                                        value="<?php echo $selectbypk['ImageDescription1'] ?>">
                                </div>
                                <br />


                                <div>
                                    <!--begin::Card header-->
                                    <div>
                                        <!--begin::Card title-->
                                        <label class="  form-label  font-weight-bolder " style="font-weight: 900;">Blog
                                            Image(2):</label>
                                        <!--end::Card title-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card-body text-center pt-0-container">
                                                <!--begin::Image input-->
                                                <div class="image-input image-input-outline mb-3 image-input-changed"
                                                    data-kt-image-input="true"
                                                    style="background-image: url(assets/media/svg/files/blank-image.svg)">
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
                                                        <input type="file" name="ImagePath2" accept="image/webp">
                                                        <input type="hidden" name="Old_ogImage2"
                                                            value="<?php echo $selectbypk['ImagePath2']; ?>">
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
                                                <div class="text-muted fs-7">Set the image. Only web/image files are
                                                    accepted</div>
                                                <!--end::Description-->
                                            </div>
                                        </div>
                                        <?php if (isset($_POST['edit'])) { ?>
                                        <div class="col-md-6">
                                            <?php if ($selectbypk['ImagePath2'] != null) { ?>
                                            <div>
                                                <!--begin::Card title-->

                                                <label class="  form-label  font-weight-bolder "
                                                    style="font-weight: 900;">old Image:</label>
                                                <!--end::Card title-->
                                            </div>

                                            <img class=" w-200px h-200px"
                                                src="../../Images/blog/<?php echo $selectbypk['ImagePath2'] ?>"
                                                alt="<?php echo $row['ImageDescription2'] ?>"
                                                style="width:300px ; height:150px; border-radius: 1%;">
                                        </div>
                                        <?php } ?>
                                        <?php } ?>
                                    </div>

                                    <!--end::Card body-->
                                </div>
                                <br />
                                <div>
                                    <label class="  form-label  font-weight-bolder " style="font-weight: 900;">Image
                                        Description(2):</label>

                                    <input type="text" name="ImageDescription2" class="form-control mb-2"
                                        placeholder="Image Description(2)"
                                        value="<?php echo $selectbypk['ImageDescription2'] ?>">
                                </div>
                                <br />


                                <div>
                                    <!--begin::Card header-->
                                    <div>
                                        <!--begin::Card title-->
                                        <label class="  form-label  font-weight-bolder " style="font-weight: 900;">Blog
                                            Image(3):</label>
                                        <!--end::Card title-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card-body text-center pt-0-container">
                                                <!--begin::Image input-->
                                                <div class="image-input image-input-outline mb-3 image-input-changed"
                                                    data-kt-image-input="true"
                                                    style="background-image: url(assets/media/svg/files/blank-image.svg)">
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
                                                        <input type="file" name="ImagePath3" accept="image/webp">
                                                        <input type="hidden" name="Old_ogImage3"
                                                            value="<?php echo $selectbypk['ImagePath3']; ?>">
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
                                                <div class="text-muted fs-7">Set the image. Only web/image files are
                                                    accepted</div>
                                                <!--end::Description-->
                                            </div>
                                        </div>
                                        <?php if (isset($_POST['edit'])) { ?>
                                        <div class="col-md-6">
                                            <?php if ($selectbypk['ImagePath3'] != null) { ?>
                                            <div>
                                                <!--begin::Card title-->

                                                <label class="  form-label  font-weight-bolder "
                                                    style="font-weight: 900;">old Image:</label>
                                                <!--end::Card title-->
                                            </div>

                                            <img class=" w-200px h-200px"
                                                src="../../Images/blog/<?php echo $selectbypk['ImagePath3'] ?>"
                                                alt="<?php echo $row['ImageDescription3'] ?>"
                                                style="width:300px ; height:150px; border-radius: 1%;">
                                        </div>
                                        <?php } ?>
                                        <?php } ?>
                                    </div>

                                    <!--end::Card body-->
                                </div>
                                <br />


                                <div>
                                    <label class="  form-label  font-weight-bolder " style="font-weight: 900;">Image
                                        Description(3):</label>

                                    <input type="text" name="ImageDescription3" class="form-control mb-2"
                                        placeholder="Image Description(3)"
                                        value="<?php echo $selectbypk['ImageDescription3'] ?>">
                                </div>
                                <br />


                                <div>
                                    <!--begin::Card header-->
                                    <div>
                                        <!--begin::Card title-->
                                        <label class="  form-label  font-weight-bolder " style="font-weight: 900;">Blog
                                            Image(4):</label>
                                        <!--end::Card title-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card-body text-center pt-0-container">
                                                <!--begin::Image input-->
                                                <div class="image-input image-input-outline mb-3 image-input-changed"
                                                    data-kt-image-input="true"
                                                    style="background-image: url(assets/media/svg/files/blank-image.svg)">
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
                                                        <input type="file" name="ImagePath4" accept="image/webp">
                                                        <input type="hidden" name="Old_ogImage4"
                                                            value="<?php echo $selectbypk['ImagePath4']; ?>">
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
                                                <div class="text-muted fs-7">Set the image. Only web/image files are
                                                    accepted</div>
                                                <!--end::Description-->
                                            </div>
                                        </div>
                                        <?php if (isset($_POST['edit'])) { ?>
                                        <div class="col-md-6">
                                            <?php if ($selectbypk['ImagePath4'] != null) { ?>
                                            <div>
                                                <!--begin::Card title-->

                                                <label class="  form-label  font-weight-bolder "
                                                    style="font-weight: 900;">old Image:</label>
                                                <!--end::Card title-->
                                            </div>

                                            <img class=" w-200px h-200px"
                                                src="../../Images/blog/<?php echo $selectbypk['ImagePath4'] ?>"
                                                alt="<?php echo $row['ImageDescription4'] ?>"
                                                style="width:300px ; height:150px; border-radius: 1%;">
                                        </div>
                                        <?php } ?>
                                        <?php } ?>
                                    </div>

                                    <!--end::Card body-->
                                </div>
                                <br />
                                <div>
                                    <label class="  form-label  font-weight-bolder " style="font-weight: 900;">Image
                                        Description(4):</label>

                                    <input type="text" name="ImageDescription4" class="form-control mb-2"
                                        placeholder="Image Description(4)"
                                        value="<?php echo $selectbypk['ImageDescription4'] ?>">
                                </div>
                                <br />


                                <div>
                                    <!--begin::Card header-->
                                    <div>
                                        <!--begin::Card title-->
                                        <label class="  form-label  font-weight-bolder " style="font-weight: 900;">Blog
                                            Image(5):</label>
                                        <!--end::Card title-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card-body text-center pt-0-container">
                                                <!--begin::Image input-->
                                                <div class="image-input image-input-outline mb-3 image-input-changed"
                                                    data-kt-image-input="true"
                                                    style="background-image: url(assets/media/svg/files/blank-image.svg)">
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
                                                        <input type="file" name="ImagePath5" accept="image/webp">
                                                        <input type="hidden" name="Old_ogImage5"
                                                            value="<?php echo $selectbypk['ImagePath5']; ?>">
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
                                                <div class="text-muted fs-7">Set the image. Only web/image files are
                                                    accepted</div>
                                                <!--end::Description-->
                                            </div>
                                        </div>
                                        <?php if (isset($_POST['edit'])) { ?>
                                        <div class="col-md-6">
                                            <?php if ($selectbypk['ImagePath5'] != null) { ?>
                                            <div>
                                                <!--begin::Card title-->

                                                <label class="  form-label  font-weight-bolder "
                                                    style="font-weight: 900;">old Image:</label>
                                                <!--end::Card title-->
                                            </div>

                                            <img class=" w-200px h-200px"
                                                src="../../Images/blog/<?php echo $selectbypk['ImagePath5'] ?>"
                                                alt="<?php echo $row['ImageDescription5'] ?>"
                                                style="width:300px ; height:150px; border-radius: 1%;">
                                        </div>
                                        <?php } ?>
                                        <?php } ?>
                                    </div>

                                    <!--end::Card body-->
                                </div>
                                <br />
                                <div>
                                    <label class="  form-label  font-weight-bolder " style="font-weight: 900;">Image
                                        Description(5):</label>

                                    <input type="text" name="ImageDescription5" class="form-control mb-2"
                                        placeholder="Image Description(5)"
                                        value="<?php echo $selectbypk['ImageDescription5'] ?>">
                                </div>
                                <br />

                                <div>
                                    <!--begin::Card header-->
                                    <div>
                                        <!--begin::Card title-->
                                        <label class="  form-label  font-weight-bolder " style="font-weight: 900;">Blog
                                            Image(6):</label>
                                        <!--end::Card title-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card-body text-center pt-0-container">
                                                <!--begin::Image input-->
                                                <div class="image-input image-input-outline mb-3 image-input-changed"
                                                    data-kt-image-input="true"
                                                    style="background-image: url(assets/media/svg/files/blank-image.svg)">
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
                                                        <input type="file" name="ImagePath6" accept="image/webp">
                                                        <input type="hidden" name="Old_ogImage6"
                                                            value="<?php echo $selectbypk['ImagePath6']; ?>">
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
                                                <div class="text-muted fs-7">Set the image. Only web/image files are
                                                    accepted</div>
                                                <!--end::Description-->
                                            </div>
                                        </div>
                                        <?php if (isset($_POST['edit'])) { ?>
                                        <div class="col-md-6">
                                            <?php if ($selectbypk['ImagePath6'] != null) { ?>
                                            <div>
                                                <!--begin::Card title-->

                                                <label class="  form-label  font-weight-bolder "
                                                    style="font-weight: 900;">old Image:</label>
                                                <!--end::Card title-->
                                            </div>

                                            <img class=" w-200px h-200px"
                                                src="../../Images/blog/<?php echo $selectbypk['ImagePath6'] ?>"
                                                alt="<?php echo $row['ImageDescription6'] ?>"
                                                style="width:300px ; height:150px; border-radius: 1%;">
                                        </div>
                                        <?php } ?>
                                        <?php } ?>
                                    </div>

                                    <!--end::Card body-->
                                </div>
                                <br />
                                <div>
                                    <label class="  form-label  font-weight-bolder " style="font-weight: 900;">Image
                                        Description(6):</label>

                                    <input type="text" name="ImageDescription6" class="form-control mb-2"
                                        placeholder="Image Description(6)"
                                        value="<?php echo $selectbypk['ImageDescription6'] ?>">
                                </div>
                                <br />
                                <div>
                                    <label class="  form-label  font-weight-bolder " style="font-weight: 900;">Meta
                                        Title:</label>

                                    <input type="text" name="MetaTitle" class="form-control mb-2"
                                        placeholder="MetaTitle" value="<?php echo $selectbypk['MetaTitle']  ?>">
                                </div>
                                <div>
                                    <label class="  form-label  font-weight-bolder " style="font-weight: 900;">Meta
                                        Description:</label>

                                    <input type="text" name="MetaDescription" class="form-control mb-2"
                                        placeholder="Meta Description"
                                        value="<?php echo $selectbypk['MetaDescription']  ?>" />
                                </div>
                                <div>
                                    <label class="  form-label  font-weight-bolder " style="font-weight: 900;">Meta
                                        keywords:</label>

                                    <input type="text" name="MetaKeywords" class="form-control mb-2"
                                        placeholder="Meta keywords" value="<?php echo $selectbypk['MetaKeywords']  ?>">
                                </div>
                                <div>
                                    <label class="  form-label  font-weight-bolder " style="font-weight: 900;">Social
                                        Media Title:</label>

                                    <input type="text" name="MetaOgTitle" class="form-control mb-2"
                                        placeholder="Social Media Description"
                                        value="<?php echo $selectbypk['MetaOgTitle']  ?>">
                                </div>
                                <div>
                                   
                                    <input type="hidden" name="MetaOgUrl" class="form-control mb-2"
                                        placeholder="Social Media Url" value="url">
                                </div>
                                <script>
                                    // Get references to the input fields 
                                    var firstField = document.querySelector('input[name="BlogTitle"]');
                                    var secondField = document.querySelector('input[name="BlogUrl"]');
                                    var thirdField = document.querySelector('input[name="MetaOgUrl"]');

                                    // Add event listener to the first input field
                                    firstField.addEventListener('input', function () {
                                        // Get the value from the first input field
                                        var value = firstField.value;

                                        // Replace spaces with hyphens ("-")
                                        var updatedValue = value.replace(/\s+/g, '-');
                                        updatedValue = updatedValue.toLowerCase();
                                        // Update the value of the second input field
                                        secondField.value = updatedValue;
                                        thirdField.value = updatedValue;
                                    });
                                </script>
                                <div>
                                    <label class="  form-label  font-weight-bolder " style="font-weight: 900;">Social
                                        Media Description:</label>

                                    <input type="text" name="MetaOgDescription" class="form-control mb-2"
                                        placeholder="Social Media Description"
                                        value="<?php echo $selectbypk['MetaOgDescription']  ?>"">
                                        </div>
                                        
                                        <div>
                                            <!--begin::Card header-->
                                            <div >
                                                <!--begin::Card title-->
                                                <label class=" form-label font-weight-bolder "
                                                style=" font-weight: 900;">Social Media Image:</label>
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
                                                    <input type="file" name="MetaOgImage" accept="image/webp"
                                                        onchange="validateImageSize()">
                                                    <input type="hidden" name="Old_ogImage"
                                                        value="<?php echo $selectbypk['MetaOgImage']; ?>">
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
                                                <span id="cenclik"
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
                                    <?php if (isset($_POST['edit'])) { ?>
                                    <div class="col-md-6">
                                        <?php if ($selectbypk['MetaOgImage'] != null) { ?>
                                        <div>
                                            <!--begin::Card title-->
                                            <label class="  form-label  font-weight-bolder "
                                                style="font-weight: 900;">old Image:</label>
                                            <!--end::Card title-->
                                        </div>
                                        <img class=" w-200px h-200px"
                                            src="../../Images/blog/<?php echo $selectbypk['MetaOgImage'] ?>"
                                            style="width:300px ; height:150px; border-radius: 1%;">
                                    </div>
                                    <?php } ?>
                                    <?php } ?>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
                <div align="center">
                    <div class="row">
                        <div class="col mb-4">
                            <input type="hidden" name="BlogID" class="form-control mb-2"
                                value="<?php echo  $selectbypk['BlogID']  ?>">
                            <button type="submit" class="btn btn-success" name="<?php
                                                                                if (isset($_POST['edit'])) {
                                                                                    echo " update"; } else {
                                echo "insert" ; } ?>" value="save">Save</button>
                            <a href="Blog" class="btn btn-danger">CANCLE</a>
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

<?php include_once __DIR__ . '/A_Layout/Footer/footer.php'; ?>