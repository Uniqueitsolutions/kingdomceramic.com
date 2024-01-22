<?php include_once __DIR__.'/A_Layout/Header/header.php'; ?>
<?php 
#region selectbypk
if(isset($_POST['delete']))
{  
$pk = $crypt->decryptId($_POST['UserID']);  
$result=$userObj->delete($pk);
if ($result) {
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18'></script>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Deleted!',
            text: 'The user has been deleted.',
        }).then(function() {
            window.location = 'User';  // Replace with the appropriate redirect URL
        });
    </script>";
} else {
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18'></script>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Error!',
            text: 'An error occurred while deleting the user.',
        });
    </script>";
}
}
#endregion
?>


	<div id="kt_content_container" class="container-xxl">

                                <div class="card card-flush border-gray-300 shadow-sm ">
                                    <div class="card-header">
                                        <h3 class="card-title fw-bolder"><img src="assets/media/icons/duotune/text/txt009.svg" />&nbsp;
                                             User List</h3>
                                        <!-- <div class="card-toolbar">
                                            <a href="addprogram.html" class="btn btn-sm btn-primary">ADD Slider</a>
                                        </div> -->
                                        <div class="card-toolbar">                                      <!-- Button trigger modal -->
                                        <div class="row">
                    <div class="col-md-7">
                    <input type="text" class="form-control form-control-solid  bg-dark text-light fs-7" id="searchInput"
                        placeholder="Search...." focous > 
                    </div>
                    <div class="col-md-5">
                    <a type="button" class="btn btn-sm btn-primary" href="UserAddEdit">
                        ADD USER
                    </a>
                    </div>
                </div>

 
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="myTable" class="table table-bordered table-hover table-rounded table-row-bordered border gy-3 gs-3">
                                                <thead class="bg-gray-200 ">
                                                    <tr class="fw-bold fs-6  border-bottom-2 border-gray-200">
                                                    <th>No.</th>
            <th>User Name</th>
            <th>Mobile Number</th>
            <th>Image</th>
            <th>Email</th>
            <th>password</th>
            <th>Created User</th>
            <th>Status</th>
            <th>Modified</th>
            <th>Action</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   <?php  
                                                   $result=$userObj->selectAllDataForAdmin();
                                                   $sno=1;
                                                   while($row=mysqli_fetch_assoc($result))             
                                                      {
                                                       
                                                   ?>
                                                    <tr>
                                                    <td class="min-w-70px"><?php echo $sno++ ?></td>
            <td ><?php echo $row['UserName'] ?></td>
            <td ><?php echo $row['MobileNumber'] ?></td>
            <td ><img src="../../Images/user/<?php echo $row['ImagePath'] ?>" alt="" srcset="" style="height:40px ;width: 40px;"></td>
            
            <td ><?php echo $row['Email'] ?></td>
            <td ><?php echo $row['Password'] ?></td>     
            <td>
                                    <?php $Userdata = $userObj->selectbypk($row['UserID']);
                                    $UserArr = mysqli_fetch_assoc($Userdata) ?>
                                    <?php echo $UserArr['UserName'] ?>
                                </td>
                                <td>
                                    <?php if ($row['IsActive'] == 1) {
                                        echo "<span class='badge badge-light-success'>Active</span>";
                                    } else {
                                        echo "<span class='badge badge-light-danger'>Disabled</span>";
                                    } ?>
                                </td>
           
            <td><?php echo $row['Modified'] ?></td>    
         
                                                    <td>
                                                    <div class="row">
<form method="post" class="col-md-6 px-0" action="UserAddEdit">
<?php $newid = $crypt->encryptId($row['UserID']); ?>
                                                        <input type="hidden" name="UserID" class="form-control mb-2"
                                                value="<?php echo  $newid  ?>">
                                                            <button type="submit" name="edit" class="svg-icon svg-icon-success svg-icon-2hx" style="background-color: transparent;border:0px"  >
                                                       <svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path opacity="0.3" fill-rule="evenodd"
                                                                        clip-rule="evenodd"
                                                                        d="M2 4.63158C2 3.1782 3.1782 2 4.63158 2H13.47C14.0155 2 14.278 2.66919 13.8778 3.04006L12.4556 4.35821C11.9009 4.87228 11.1726 5.15789 10.4163 5.15789H7.1579C6.05333 5.15789 5.15789 6.05333 5.15789 7.1579V16.8421C5.15789 17.9467 6.05333 18.8421 7.1579 18.8421H16.8421C17.9467 18.8421 18.8421 17.9467 18.8421 16.8421V13.7518C18.8421 12.927 19.1817 12.1387 19.7809 11.572L20.9878 10.4308C21.3703 10.0691 22 10.3403 22 10.8668V19.3684C22 20.8218 20.8218 22 19.3684 22H4.63158C3.1782 22 2 20.8218 2 19.3684V4.63158Z"
                                                                        fill="black" />
                                                                    <path
                                                                        d="M10.9256 11.1882C10.5351 10.7977 10.5351 10.1645 10.9256 9.77397L18.0669 2.6327C18.8479 1.85165 20.1143 1.85165 20.8953 2.6327L21.3665 3.10391C22.1476 3.88496 22.1476 5.15129 21.3665 5.93234L14.2252 13.0736C13.8347 13.4641 13.2016 13.4641 12.811 13.0736L10.9256 11.1882Z"
                                                                        fill="black" />
                                                                    <path
                                                                        d="M8.82343 12.0064L8.08852 14.3348C7.8655 15.0414 8.46151 15.7366 9.19388 15.6242L11.8974 15.2092C12.4642 15.1222 12.6916 14.4278 12.2861 14.0223L9.98595 11.7221C9.61452 11.3507 8.98154 11.5055 8.82343 12.0064Z"
                                                                        fill="black" />
                                                                </svg>
                                                      </button>
                                                        </form>
                                                      
                                                        <form method="post" class="col-md-6 px-0" action="User">
                                                        <input type="hidden" name="UserID" class="form-control mb-2"
                                                value="<?php echo  $newid  ?>">
                                                            <button type="submit" name="delete" style="background-color: transparent;border:0px"  >
                                                      <span class="svg-icon svg-icon-danger svg-icon-2hx"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect opacity="0.3" x="2" y="2" width="20"
                                                                        height="20" rx="10" fill="black" />
                                                                    <rect x="7" y="15.3137" width="12" height="2" rx="1"
                                                                        transform="rotate(-45 7 15.3137)"
                                                                        fill="black" />
                                                                    <rect x="8.41422" y="7" width="12" height="2" rx="1"
                                                                        transform="rotate(45 8.41422 7)" fill="black" />
                                                                </svg></span>
                                                      </button>
                                                        </form>
                                                      </div>
                                                          
                                                     
                                                    </td>
                                                    
                                                    </tr>

                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                            <script>
                        const searchInput = document.getElementById('searchInput');
                        const table = document.getElementById('myTable');
                        const rows = table.getElementsByTagName('tr');

                        searchInput.addEventListener('input', function () {
                            const searchText = searchInput.value.toLowerCase();

                            for (let i = 1; i < rows.length; i++) {
                                const row = rows[i];
                                const cells = row.getElementsByTagName('td');
                                let found = false;

                                for (let j = 0; j < cells.length; j++) {
                                    const cell = cells[j];
                                    const cellText = cell.innerText.toLowerCase();

                                    if (cellText.includes(searchText)) {
                                        found = true;
                                        break;
                                    }
                                }

                                if (found) {
                                    row.style.display = '';
                                } else {
                                    row.style.display = 'none';
                                }
                            }
                        });
                    </script>
                                           
                                    </div>
                                  
            
                                </div>
							</div>
				
<?php include_once __DIR__.'/A_Layout/Footer/footer.php'; ?>