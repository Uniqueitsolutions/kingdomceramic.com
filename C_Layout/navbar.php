<?php 
$page=basename($_SERVER['PHP_SELF']);
$result=$contactObj->selectAllDataForClient();
      $row=mysqli_fetch_assoc($result);

echo" 
    <div class='fixed-top'>
    <div class='container px-0'>
    <nav class='navbar navbar-expand-lg navbar-freya navbar-light'> <a class='navbar-brand' href='Home'>
          <!-- <div class='freya-logo'> </div> -->
          <div>
            <img src='assets/img/logo/LOGO (2).png' alt='king dom' width='120' class='img-fluid px-1' >
          </div>
        </a><button class='navbar-toggler p-0 border-0' type='button' data-bs-toggle='collapse' data-bs-target='#primaryNavbarCollapse' aria-controls='primaryNavbarCollapse' aria-expanded='false' aria-label='Toggle navigation'><span class='hamburger hamburger--emphatic'><span class='hamburger-box'><span class='hamburger-inner'></span></span></span></button>
        <div class='collapse navbar-collapse' id='primaryNavbarCollapse'>
          <ul class='navbar-nav py-3 py-lg-0 mt-1 mb-2 my-lg-0 ms-lg-n1'>
            <li class='nav-item dropdown '><a class='nav-link "?><?php if($page=='index.php'){
                echo "active ";
            }?><?php echo "' href='Home' role='button' aria-expanded='false'>Home</a>
            </li>
            <li class='nav-item dropdown'><a class='nav-link "?><?php if($page=='about.php'){
              echo "active ";
          }?><?php echo "' href='About' role='button' aria-expanded='false'>About us</a>
            </li>
            <li class='nav-item dropdown'><a class='nav-link "?><?php if($page=='projects.php'){
              echo "active ";
          }?><?php echo "' href='Products' role='button'  aria-expanded='false'>Product</a>
              
            </li>
            
            <li class='nav-item '><a class='nav-link "?><?php if($page=='catelog.php'){
              echo "active ";
          }?><?php echo "'  href='Catalouge' role='button'  aria-expanded='false'> E - Catalouge</a>
            </li>
            <li class='nav-item dropdown'><a class='nav-link dropdown-toggle dropdown-indicator "?><?php if($page=='technical-specification.php' || $page=='tiles-calculator.php' || $page=='packing-details.php'){
              echo "active ";
          }?><?php echo "' href='JavaScript:void(0)' role='button' data-bs-toggle='dropdown' aria-expanded='false'>Information</a>
              <ul class='dropdown-menu'>
                <li><a class='dropdown-item "?><?php if($page=='technical-specification.php'){
                  echo "active ";
              }?><?php echo "' href='Technical-Specification'>Technical Specification</a></li>
                <li><a class='dropdown-item "?><?php if($page=='tiles-calculator.php'){
                  echo "active ";
              }?><?php echo "' href='Tiles-Calculator'>Tiles Calculator</a></li>
                <li><a class='dropdown-item "?><?php if($page=='packing-details.php'){
                  echo "active ";
              }?><?php echo "' href='Packing-Details'>Packing Details</a></li>
              </ul>
            </li>
            <li class='nav-item dropdown'><a class='nav-link "?><?php if($page=='blog-list.php' || $page=='bblog.php'){
              echo "active ";
          }?><?php echo "'  href='Blogs' role='button'  aria-expanded='false'>Blogs</a>
            </li>
            <li class='nav-item dropdown'><a class='nav-link "?><?php if($page=='contact1.php'){
              echo "active ";
          }?><?php echo "' href='Contact' role='button'  aria-expanded='false'>Contact</a>
            </li>
          </ul>
          <ul>
            <li id='google_translate_element'>  </li>
          </ul>
          <ul class='navbar-nav ms-lg-auto flex-row justify-content-center py-3 py-lg-0 me-n2'>
          "?>
           <?php if (!empty($row['FacebookLink'] )) {?> <?php echo"
            <li><a class='nav-link px-2' target='_blank'href='"?> <?php echo $row['FacebookLink']?><?php echo"' ><span class='fab fa-facebook-f' data-fa-transform='shrink-2'></span></a></li>
            "?> <?php } ?>
            <?php if (!empty($row['TwitterLink'] )) {?> <?php echo"
            <li><a class='nav-link px-2' target='_blank'href='"?> <?php echo $row['TwitterLink']?><?php echo"' ><span class='fab fa-whatsapp' data-fa-transform='shrink-2'></span></a></li>
            "?> <?php } ?>
            <?php if (!empty($row['InstagramLink'] )) {?> <?php echo"
            <li><a class='nav-link px-2' target='_blank'href='"?> <?php echo $row['InstagramLink']?><?php echo"' ><span class='fab fa-instagram' data-fa-transform='shrink-2'></span></a></li>
            "?> <?php } ?>
            <?php echo"
             <li><a class='nav-link px-2' target='_blank'href='https://www.linkedin.com/company/kingdom-ceramic/' ><span class='fab fa-linkedin' data-fa-transform='shrink-2'></span></a></li>
            </ul>
        </div>
      </nav>
  </div>
  </div>
"?>
