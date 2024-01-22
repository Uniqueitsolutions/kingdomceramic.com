<?php
 if(isset($_POST['save']))
 {
    $catreg->Name=$_POST['Name'];
    $catreg->Email=$_POST['Email'];
    $catreg->ContactNumber=$_POST['ContactNumber'];
    $catreg->CatalougeID=$_POST['CatalougeID']; 
 
    $_SESSION["Name"] = $catreg->Name;
    $_SESSION["Email"] = $catreg->Email;
    $_SESSION["ContactNumber"] = $catreg->ContactNumber;
    $_SESSION["CatalougeID"] = $catreg->CatalougeID;
 
    $result=$catreg->insertData();
    if ($result) {
     echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18'></script>
     <script>
         Swal.fire({
             icon: 'success',
             title: 'Success',
             text: 'Data inserted successfully!',
         }).then(function() {
             window.location = 'catalog.php';  // Replace with the appropriate redirect URL
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
?>