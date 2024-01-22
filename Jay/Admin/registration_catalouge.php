<?php include_once __DIR__.'/A_Layout/Header/header.php'; ?>
<?php 
#region selectbypk
if(isset($_POST['delete']))
{
    
    $pk = $crypt->decryptId($_POST['CatalougeRegistrationID']); 
$result=$catreg->delete($pk);
if($result)
{
   
   echo "<script>window.location.href='RegistrationCatalouge';</script>";

}
}
#endregion
?>


	<div id="kt_content_container" class="container-xxl">
    <?php  
                                                   $result1=$catreg->selectAllDataForAdmin();
                                                  
                                                   if(mysqli_num_rows($result1) > 0)             
                                                      {
                                                       
                                                   ?>
                                <div class="card card-flush border-gray-300 shadow-sm ">
                                    <div class="card-header">
                                        <h3 class="card-title fw-bolder"><img src="assets/media/icons/duotune/text/txt009.svg" />&nbsp;
                                      Catalouge Registration Details                                       <!-- <div class="card-toolbar">
                                            <a href="addprogram.html" class="btn btn-sm btn-primary">ADD Slider</a>
                                        </div> -->
                                        </h3>
                                        <div class="card-toolbar">                                      <!-- Button trigger modal -->
                                        
                    <input type="text" class="form-control form-control-solid  bg-dark text-light fs-7" id="searchInput"
                        placeholder="Search...." focous > 
                   
                    
               
 
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="myTable" class="table table-bordered  table-hover table-rounded table-row-bordered border gy-3 gs-3">
                                                <thead class="bg-gray-200 ">
                                                    <tr class="fw-bold fs-6  border-bottom-2 border-gray-200">
                                                        <th>No.</th>   
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                      
                                                        <th>Number</th> 
                                                        <th>Catalouge</th> 
                                                        
                                                        <th>Description</th>                    
                                                        <th>creation</th>
                                        
                                                        <th>Action</th>
            
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   <?php  
                                                   $result=$catreg->selectAllDataForAdmin();
                                                   $sno=1;
                                                   while($row=mysqli_fetch_assoc($result))             
                                                      {
                                                       
                                                   ?>
                                                    <tr>
                                                    <td ><?php echo $sno++ ?></td>
                                                    <td ><?php echo $row['Name'] ?></td>          
                                                   
                                                    <td ><?php echo $row['Email'] ?></td>
                                                    <td ><?php echo $row['ContactNumber'] ?></td>
                                                   
                                                    <td > <?php $Catadata = $catalougeObj->selectbypk($row['CatalougeID']);
                                    $catArr = mysqli_fetch_assoc($Catadata) ?>
                                    <?php echo $catArr['CatalougePriviewTitle'] ?></td>
                                                
                                                    <td ><?php echo $row['Description'] ?></td>
                                                 
                                                    <td ><?php echo $row['Created'] ?></td>
                                                   
                                                    <td>
<div class="row">

<?php  $newid= $crypt->encryptId($row['CatalougeRegistrationID']); ?>
                                                        <form method="post" class="col-md-6 px-0" action="RegistrationCatalouge">
                                                        <input type="hidden" name="CatalougeRegistrationID" class="form-control mb-2"
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
                    <?php }?>
                    <br/>
<br/>
<br/>
                               
<?php include_once __DIR__.'/A_Layout/Footer/footer.php'; ?>