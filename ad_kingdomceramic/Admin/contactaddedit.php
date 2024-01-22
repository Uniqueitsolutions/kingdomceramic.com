<?php include_once __DIR__ . '/A_Layout/Header/header.php'; ?>

<?php
#region selectbypk
if (!isset($_POST['update'])) {
    $result = $contactObj->selectbypk(1);
    $selectbypk = mysqli_fetch_assoc($result);
}
#endregion
#region insert
// if (isset($_POST['insert'])) {

//     $contactObj->ContactName = $_POST['ContactName'];
//     $contactObj->ContactNumber1 = $_POST['ContactNumber1'];
//     $contactObj->ContactNumber2 = $_POST['ContactNumber2'];
//     $contactObj->Email1 = $_POST['Email1'];
//     $contactObj->Email2 = $_POST['Email2'];
//     $contactObj->FacebookLink = $_POST['FacebookLink'];
//     $contactObj->YouTubeLink = $_POST['YouTubeLink'];
//     $contactObj->TwitterLink = $_POST['TwitterLink'];
//     $contactObj->InstagramLink = $_POST['InstagramLink'];
//     $contactObj->SkypeLink = $_POST['SkypeLink'];
//     $contactObj->LinkedinLink = $_POST['LinkedinLink'];
//     $contactObj->Address = $_POST['Address'];
//     $contactObj->GoogleMapLink = $_POST['GoogleMapLink'];
//     $contactObj->MetaTitle = $_POST['MetaTitle'];
//     $contactObj->MetaKeywords = $_POST['MetaKeywords'];
//     $contactObj->MetaDescription = $_POST['MetaDescription'];
//     $contactObj->MetaOgTitle = $_POST['MetaOgTitle'];
//     $imgname2 = $_FILES['MetaOgImage']['name'];
//     $file_tmp2 = $_FILES['MetaOgImage']['tmp_name'];
//     move_uploaded_file($file_tmp2, '../../Images/contact/' . $imgname2);
//     $contactObj->MetaOgImage = $_FILES['MetaOgImage']['name'];
//     $contactObj->MetaOgDescription = $_POST['MetaOgDescription'];
//     $contactObj->MetaOgUrl = $_POST['MetaOgUrl'];
//     $contactObj->UserID = $_SESSION["UserID"];
//     $contactObj->IsActive =  $_POST['IsActive'];

//     $result = $contactObj->insertData();
//     if ($result) {
//         echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18'></script>
//         <script>
//             Swal.fire({
//                 icon: 'success',
//                 title: 'Success',
//                 text: 'Data inserted successfully!',
//             }).then(function() {
//                 window.location = 'Contact';  // Replace with the appropriate redirect URL
//             });
//         </script>";
//     } else {
//         echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18'></script>
//         <script>
//             Swal.fire({
//                 icon: 'error',
//                 title: 'Error',
//                 text: 'There was a problem with the insertion!',
//             });
//         </script>";
//     }
// }
// #endregion


#region update
if (isset($_POST['update'])) {
    
    $contactObj->ContactName = $_POST['ContactName'];
    $contactObj->ContactNumber1 = $_POST['ContactNumber1'];
    $contactObj->ContactNumber2 = $_POST['ContactNumber2'];
    $contactObj->Email1 = $_POST['Email1'];
    $contactObj->Email2 = $_POST['Email2'];
    $contactObj->FacebookLink = $_POST['FacebookLink'];
    $contactObj->YouTubeLink = $_POST['YouTubeLink'];
    $contactObj->TwitterLink = $_POST['TwitterLink'];
    $contactObj->InstagramLink = $_POST['InstagramLink'];
    $contactObj->SkypeLink = $_POST['SkypeLink'];
    $contactObj->LinkedinLink = $_POST['LinkedinLink'];
    $contactObj->Address = $_POST['Address'];
    $contactObj->GoogleMapLink = $_POST['GoogleMapLink'];
    $contactObj->UserID = $_SESSION["UserID"];
    $contactObj->IsActive =  1;

    $result = $contactObj->updateData(1);
    if ($result) {
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18'></script>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: 'Data Updated successfully!',
            }).then(function() {
                window.location = 'ContactAddEdit';});
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

    <form action="ContactAddEdit" method="post" enctype="multipart/form-data">
            <!-- main cards -->
            <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <div class="card card-flush shadow-sm ">
                    <div class="card-header border-1">
                    <h3 class="card-title fw-bolder"><img src="assets/media/icons/duotune/text/txt009.svg" />&nbsp;
                                             Contact Details</h3>
                    </div>
                    <div class="card-body py-5 font-weight-bolder">
                        <div class="container">
                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                <!-- contact details -->
                                <div>
                                    <label class="required form-label font-weight-bolder"
                                        style="font-weight: 900;">Contact Name</label>
                                    <input type="text" name="ContactName" class="form-control mb-2"
                                        placeholder="Contact Name" value="<?php echo $selectbypk['ContactName'] ?>" required>
                                </div>
                                <br />
                                <div class="row">
                                <div class="col-md-6">
                                    <label class="required form-label font-weight-bolder"
                                    class=" form-label font-weight-bolder"
                                        style="font-weight: 900;">Contact Number 1</label>
                                    <input type="text" name="ContactNumber1" class="form-control mb-2"
                                        placeholder="Contact Number 1"
                                        value="<?php echo $selectbypk['ContactNumber1'] ?>" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label font-weight-bolder" style="font-weight: 900;">Contact
                                        Number 2</label>
                                    <input type="text" name="ContactNumber2" class="form-control mb-2"
                                        placeholder="Contact Number 2"
                                        value="<?php echo $selectbypk['ContactNumber2'] ?>">
                                </div>
                             
                                </div>
                               
                                  <br />
                                  <div class="row">
                                <div class="col-md-6">
                                    <label class="required form-label font-weight-bolder"
                                        style="font-weight: 900;">Email 1</label>
                                    <input type="email" name="Email1" class="form-control mb-2" placeholder="Email 1"
                                        value="<?php echo $selectbypk['Email1'] ?>" required>
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label font-weight-bolder" style="font-weight: 900;">Email
                                        2</label>
                                    <input type="email" name="Email2" class="form-control mb-2" placeholder="Email 2"
                                        value="<?php echo $selectbypk['Email2'] ?>">
                                </div>
                                </div>
                                <br />
                                <div>
                                    <label class="form-label font-weight-bolder" style="font-weight: 900;">Facebook
                                        Link</label>
                                    <input type="text" name="FacebookLink" class="form-control mb-2"
                                        placeholder="Facebook Link" value="<?php echo $selectbypk['FacebookLink'] ?>">
                                </div>
                                <br />
                                <!-- <div>
                                    <label class="form-label font-weight-bolder" style="font-weight: 900;">YouTube
                                        Link</label>
                                    <input type="text" name="YouTubeLink" class="form-control mb-2"
                                        placeholder="YouTube Link" value="<?php echo $selectbypk['YouTubeLink'] ?>">
                                </div>
                                <br /> -->
                                <div>
                                    <label class="form-label font-weight-bolder" style="font-weight: 900;">Whatsapp
                                        Link</label>
                                    <input type="text" name="TwitterLink" class="form-control mb-2"
                                        placeholder="Twitter Link" value="<?php echo $selectbypk['TwitterLink'] ?>">
                                </div>
                                <br />
                                <div>
                                    <label class="form-label font-weight-bolder" style="font-weight: 900;">Instagram
                                        Link</label>
                                    <input type="text" name="InstagramLink" class="form-control mb-2"
                                        placeholder="Instagram Link" value="<?php echo $selectbypk['InstagramLink'] ?>">
                                </div>
                                <br />
                                <!-- <div>
                                    <label class="form-label font-weight-bolder" style="font-weight: 900;">Skype
                                        Link</label>
                                    <input type="text" name="SkypeLink" class="form-control mb-2"
                                        placeholder="Skype Link" value="<?php echo $selectbypk['SkypeLink'] ?>">
                                </div>
                                <br /> -->
                                <div>
                                    <label class="form-label font-weight-bolder" style="font-weight: 900;">LinkedIn
                                        Link</label>
                                    <input type="text" name="LinkedinLink" class="form-control mb-2"
                                        placeholder="LinkedIn Link" value="<?php echo $selectbypk['LinkedinLink'] ?>">
                                </div>
                                <br />
                                <div>
                                    <label class="form-label font-weight-bolder"
                                        style="font-weight: 900;">Address</label>
                                        <textarea  id="editor2" name="Address" class="form-control mb-2"
                                                placeholder="Address"  ><?php echo $selectbypk['Address'];  ?></textarea>
                                                <script src="https://cdn.ckeditor.com/4.21.0/standard-all/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor2', {
        height: 260,
        removeButtons: 'PasteFromWord'
    });
   
</script>                </div>
                                <br />
                              
                                       
                                       
                                        <br />
                                <div>
                                    <label class="form-label font-weight-bolder" style="font-weight: 900;">Google
                                        Address Map Link</label>
                                    <input type="text" name="GoogleMapLink" class="form-control mb-2"
                                        placeholder="Google Address Map Link"
                                        value="<?php echo $selectbypk['GoogleMapLink'] ?>">
                                </div>
                                <br />
                               
                            <script>
    // Get references to the input fields 
    var firstField = document.querySelector('input[name="ContactName"]');

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
                                <br />
                                <br />
                                <div align="center">
                                    <div class="row">
                                        <div class="col mb-4">
                                            <input type="hidden" name="ContactDetailsID" class="form-control mb-2"
                                                value="<?php echo $selectbypk['ContactDetailsID'] ?>">
                                            <button type="submit" class="btn btn-success" name="<?php
                                                echo "update";
                                            ?>" value="save">Save</button>
                                            <a href="#" class="btn btn-danger">CANCEL</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::Container-->
            </div>
            <!--End::Post-->
    </form>
  


</div>



</div>

<?php include_once __DIR__.'/A_Layout/Footer/footer.php'; ?>
<script>    </script>