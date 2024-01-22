<?php
echo"
<div class='ml-auto'>
<!--begin::Dropdown for Dark Mode and Light Mode-->
<div class=' dropdown mt-3'>
    <button class='btn dropdown-toggle' type='button' id='darkLightModeDropdown' data-bs-toggle='dropdown'
        aria-expanded='false'>
        Theam
    </button>
    <ul class='dropdown-menu dropdown-menu-end' aria-labelledby='darkLightModeDropdown'>
        <li><a class='dropdown-item'  onclick='toggleDarkMode()'>Dark</a></li>
        <li><a class='dropdown-item'  onclick='toggleLightMode()'>Light</a></li>
    </ul>
</div>
<!--end::Dropdown-->
</div>

<script>
function toggleDarkMode() {
    document.body.classList.add('dark-mode');
    document.getElementById('darkModeStylesheet').disabled = false;
    document.getElementById('darkModeCustomStylesheet').disabled = false;
    localStorage.setItem('darkModeEnabled', 'false');
    console.log(localStorage.getItem('darkModeEnabled'));
}

function toggleLightMode() {
    document.body.classList.remove('dark-mode');
    document.getElementById('darkModeStylesheet').disabled = true;
    document.getElementById('darkModeCustomStylesheet').disabled = true;
    localStorage.setItem('darkModeEnabled', 'true');
    console.log(localStorage.getItem('darkModeEnabled'));
}
</script>
  <div class='d-flex align-items-center ms-1 ms-lg-3' id='kt_header_user_menu_toggle'>
  <!--begin::Menu wrapper-->
  <div class='cursor-pointer symbol symbol-30px symbol-md-40px'
      data-kt-menu-trigger='click' data-kt-menu-attach='parent'
      data-kt-menu-placement='bottom-end'>
      <img alt='Logo' src='../../Images/user/"?><?php echo $_SESSION["ImagePath"] ?><?php echo"' />
  </div>
  <!--begin::User account menu-->
  <div class='menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px'
      data-kt-menu='true'>
      <!--begin::Menu item-->
      <div class='menu-item px-3'>
          <div class='menu-content d-flex align-items-center px-3'>
              <!--begin::Avatar-->
              <div class='symbol symbol-50px me-5'>
                  <img alt='Logo' src='../../Images/user/"?><?php echo $_SESSION["ImagePath"] ?><?php echo"' />
              </div>
              <!--end::Avatar-->
              <!--begin::Username-->
              <form method='post' class='col-md-6 px-0' action='detailsofuser.php'>
                                                        <input type='hidden' name='UserID' class='form-control mb-2'
                                                value='"?><?php echo $_SESSION["UserID"] ?><?php echo"'>
                                                            <button type='submit' name='edit' class='fw-bolder d-flex align-items-center fs-5' style='background-color: transparent;border:0px;'  >
                                                            ";?><?php echo $_SESSION["UserName"] ?>
                                                            <?php echo "</button>
              
              <!--end::Username-->
              </form>
              
          </div>
          <div class='d-flex justify-content-center align-items-center' >
  <a href='Login/Logout' class='btn btn-danger btn-sm px-5'>
    <i class='bi bi-box-arrow-left'></i>&nbsp; LogOut
  </a>
</div>
<br/>
<div class='d-flex justify-content-center align-items-center' >
<a href='Login/Changepassword' >
  <i class='bi bi-box-arrow-left'></i>&nbsp; Change Password
</a>
</div>
      </div>
      
      <!--end::Menu item-->
  </div>
  <!--end::User account menu-->
  <!--end::Menu wrapper-->
</div>
";
?>