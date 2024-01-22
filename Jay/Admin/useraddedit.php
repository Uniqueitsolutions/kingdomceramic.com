<?php include_once __DIR__.'/A_Layout/Header/header.php'; ?>	
<?php 
#region selectbypk
if(isset($_POST['edit']))
{
    $pk = $crypt->decryptId($_POST['UserID']); 
    $result=$userObj->selectbypk($pk);
    $selectbypk=mysqli_fetch_assoc($result); 

}
#endregion
#region insert
if(isset($_POST['insert']))
{
    $options=$_POST['options'];
    $last = $userObj->LastUser();
    $UserID = $last['UserID'];
    foreach($options as $chk1)  
   {  
    $UserAccesObj->ManueID=$chk1;
    $UserAccesObj->UserID=$UserID;

    $result2=$UserAccesObj->insertData();
   }  
 
   $userObj->UserName=$_POST['UserName'];
   $userObj->Email=$_POST['Email'];
    $imgname2 = $_FILES['ImagePath']['name'];
    $file_tmp2 = $_FILES['ImagePath']['tmp_name'];
    move_uploaded_file($file_tmp2, '../../Images/user/' . $imgname2);
    $userObj->ImagePath=$_FILES['ImagePath']['name'];
   $userObj->UserAccess=$_POST["UserAccess"]; 
   $userObj->MobileNumber = $_POST['MobileNumber'];
   $userObj->CreatedUserID = $_SESSION["UserID"];
   $userObj->IsActive = $_POST["IsActive"];
   $userObj->Sequence = $_POST['Sequence'];
   
   $result=$userObj->insertData();
   if ($result) {
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18'></script>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'User Inserted successfully!',
        }).then(function() {
            window.location = 'User';  // Replace with the appropriate redirect URL
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


#region update
if(isset($_POST['update']))
{
    $deletedAccess = $UserAccesObj->delete($_POST['UserID']);
    
    $options=$_POST['options'];
  
    foreach($options as $chk1)  
   {  
    $UserAccesObj->ManueID=$chk1;
    $UserAccesObj->UserID=$_POST['UserID'];

    $result2=$UserAccesObj->insertData();
   }  
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
    $userObj->UserAccess=$_POST["UserAccess"]; 
 
    $userObj->MobileNumber = $_POST['MobileNumber'];
    $userObj->CreatedUserID = $_SESSION["UserID"];
    $userObj->IsActive = $_POST["IsActive"];
    $userObj->Sequence = $_POST['Sequence'];
   $result=$userObj->updateData($_POST['UserID']);
   if ($result) {
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18'></script>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'Data Updated successfully!',
        }).then(function() {
            window.location = 'User';  // Replace with the appropriate redirect URL
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

                        <form action="useraddedit.php" method="post" enctype="multipart/form-data">
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
                                                    <div >
                                        <div>
                                            <label class="required  form-label  font-weight-bolder "
                                                style="font-weight: 900;"> User name </label>
                                    
                                            <input type="text" name="UserName" class="form-control mb-2"
                                                placeholder="User name" value="<?php echo $selectbypk['UserName'] ?>" required>
                                                <div id="error-container"></div>
                                        </div>
                                        <div>
                                            <label class="  form-label  font-weight-bolder "
                                                style="font-weight: 900;">Email </label>
                                    
                                            <input type="Email" name="Email" class="form-control mb-2"
                                                placeholder="Email" value="<?php echo $selectbypk['Email'] ?>">
                                    
                                        </div>
                                        <div>
                                            <!--begin::Card header-->
                                            <div >
                                                <!--begin::Card title-->
                                                <label class="  form-label  font-weight-bolder "
                                                style="font-weight: 900;"> Image:</label>
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
                                                        <input type="file" name="ImagePath"  onchange="validateImage(this);" >
                                                        <input type="hidden" name="Old_ogImage" value="<?php echo $selectbypk['ImagePath'];?>">
                                                        
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
                                                       <img class=" w-200px h-200px" src="../../Images/user/<?php echo $selectbypk['ImagePath'] ?>"
                                        
                                    
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
                                            <br/>

                                            <!-- <div>
                                            <label class="required  form-label  font-weight-bolder "
                                                style="font-weight: 900;">Access </label>
                                    
                                                <select class="form-select" name="UserAccess" aria-label="Select example" required>
                                                                        <option value="<?php echo $selectbypk['UserAccess'] ?>"><?php if($selectbypk['UserAccess']==1){
                                                                            echo "Full Access";
                                                                        }
                                                                        else if($selectbypk['UserAccess']==2)  {echo "Blog Writer" ;}else{
                                                                            echo $selectbypk['UserAccess'];
                                                                        } ?></option>
                                                                        <option value="1">Full Access</option>
                                                                        <option value="2">Blog Writer</option>
                                                                    </select>
                                    
                                        </div> -->
                                        <div id="error-container3"></div>
                                       
                                        <div>
                                            <label class="  form-label  font-weight-bolder "
                                                style="font-weight: 900;">Sequence </label>
                                    
                                            <input type="number" name="Sequence" class="form-control mb-2"
                                                placeholder="sequence" value="<?php echo $selectbypk['Sequence'] ?>">
                                    
                                        </div>
                                        
                                        <br />
                                        <div>
                                            <label class="  form-label  font-weight-bolder "
                                                style="font-weight: 900;">mobile number </label>
                                    
                                            <input type="text" name="MobileNumber" class="form-control mb-2"
                                                placeholder="mobile number" value="<?php echo $selectbypk['MobileNumber'] ?>" required>
                                                <div id="error-container2"></div>
                                        </div>
                                        <br/>
                                        <div>
                                            <label class="  form-label  font-weight-bolder "
                                                style="font-weight: 900;"> User Access </label>

                                                <div class="row">
                                                <?php  
                                                   $result=$manue->selectalldata();
                                                   $sno=1;
                                                   while($row=mysqli_fetch_assoc($result))             
                                                      {
                                                       
                                                   ?>
 <div class="">    
    <?php                                          
 $UserID =$selectbypk['UserID']; // Replace with the actual UserID you want to retrieve the selected ManueIDs for
$selectedManueIDsResult =$UserAccesObj->SelectbyUserID($UserID);
$selectedManueIDs = array();

if ($selectedManueIDsResult) {
    while ($row2 = $selectedManueIDsResult->fetch_assoc()) {
        $selectedManueIDs[] = $row2['ManueID'];
    }
}

// Assuming $row contains data for the checkboxes loop
$manueID = $row['ManueID'];
$manueName = $row['ManueName'];
?>

<input type="checkbox" name="options[]" value="<?php echo $row['ManueID'] ?>" <?php echo in_array($row['ManueID'], $selectedManueIDs) ? 'checked' : ''; ?>>
<label for="option1"><?php echo $row['ManueName'] ?></label>
<div>
<br/>
<?PHP } ?>

  
                                        </div>
                                        </div>
                                                
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
          echo "update";
        } else {
          echo "insert";
        } ?>" value="save">Save</button>
                                                <a href="user.php" class="btn btn-danger">CANCLE</a>
                                            </div>
                                        </div>
                                    </div>
                    
                                </div>
                                <!--End::Container-->
                            </div>
                            <!--End::Post-->

                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                            <script>$(document).ready(function() {
    $('form').submit(function(event) 
       {  // Prevent form submission
        var User = $('input[name="UserName"]').val();
        var MobileNumber = $('input[name="MobileNumber"]').val();
     
      
        var error = false;

        // Reset previous error messages
        $('.error-message').remove();

        if (User === '') {
            event.preventDefault();
            error = true;
            // Add error message below UserName input
            $('<div class="error-message">Please enter a UserName.</div>').insertAfter('#error-container');
        } 
       
        
        if (MobileNumber === '' || MobileNumber.length > 10 ) {
            event.preventDefault();
            error = true;
            // Add error message below MobileNumber input
            $('<h4 class="error-message">Enter a valid Mobile Number.</h4>').insertAfter('#error-container2');
        }

        if (error) {
            // Scroll to the first error message
            $('html, body').animate({
                scrollTop: $('.error-message').first().offset().top
            }, 500);
        } else {
            // If there are no errors, you can proceed with form submission
            $(this).unbind('submit').submit();
        }
    });
});



</script>



                            <!-- main cards -->
                        </form>
                    </div>
                
<?php include_once __DIR__.'/A_Layout/Footer/footer.php'; ?>