
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php

include_once __DIR__.'/../../Configure/dbconfig.php'; 

session_start();

$UserName=$_SESSION['UserName'];

$ImagePath=$_SESSION['ImagePath'];

if (isset($_POST['save'])) {

    $result1 = $userObj->selectbypk($_SESSION['UserID']);

    if (mysqli_num_rows($result1) == 1) {

        $row = mysqli_fetch_assoc($result1);

        if ($row['Password'] == $_POST['Password']) {

            if ($_POST['NewPassword'] == $_POST['ConfirmPassword']) {

                $userObj->Password = $_POST['NewPassword'];
                $result2 = $userObj->updatepassword($_SESSION['UserID']);

                if ($result2) {
                    // Password updated successfully
                    echo "<script>window.location.href='Logout';</script>";
                } else {
                }
    }
}
    }
}

?>



<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
<head>
	<base href="">
	<title>Kingdom Ceramic</title>
	<meta charset="utf-8" />
	<meta name="description"
		  content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
	<meta name="keywords"
		  content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title"
		  content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
	<meta property="og:url" content="https://keenthemes.com/metronic" />
	<meta property="og:site_name" content="Keenthemes | Metronic" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
	<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Page Vendor Stylesheets(used by this page)-->
	<link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
	<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Page Vendor Stylesheets-->
	<!--begin::Global Stylesheets Bundle(used by all pages)-->
	<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<style>
        .error-message {
            color: red;
            font-size: 12px;
            margin-top: 5px;
        }
    </style>

</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="bg-body">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - Password reset -->
			<div class="d-flex flex-column flex-column-fluid  position-x-center bgi-no-repeat  bgi-attachment-fixed" style="background-image: url(assets/Images/1385494.jpg">
				<!--begin::Content-->
				<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
					<!--begin::Logo-->
					<a href="../../demo1/dist/index.html" class="mb-12">
						<img alt="Logo" src="assets/LOGO/LOGO inverse.png" style="height:200px;" />
					</a>
					<!--end::Logo-->
					<!--begin::Wrapper-->
					<div class="w-lg-500px  rounded shadow-sm p-10 p-lg-15 mx-auto">
						<!--begin::Form-->
						<form class="form w-100" action="changepassword.php" method="post" novalidate="novalidate" id="kt_sign_in_form" data-kt-redirect-url="../../demo1/dist/index.html" >
							<!--begin::Heading-->
						
							<!--begin::Heading-->
							<!--begin::Input group-->
							<div class="fv-row mb-10">
    <!--begin::Label-->
    <label class="form-label fs-7 fw-bolder text-light">Current Password:</label>
    <!--end::Label-->
    <!--begin::Input-->
    <input class="form-control form-control-lg form-control-solid" type="password" name="Password" autocomplete="off" required />
    <!--end::Input-->
</div>
<div class="fv-row mb-10">
    <!--begin::Label-->
    <label class="form-label fs-7 fw-bolder text-light">New Password:</label>
    <!--end::Label-->
    <!--begin::Input-->
    <input class="form-control form-control-lg form-control-solid" type="password" name="NewPassword" id="newPasswordInput" autocomplete="off" required />
    <!--end::Input-->
    <!--begin::Error Message-->
    <div id="newPasswordError" class="error-message"></div>
    <!--end::Error Message-->
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$('form input[name="NewPassword"]').on('change', function() {
    var password = $(this).val();

    // Define the password requirements
    var minLength = 6; // Minimum length of 6 characters
    var hasUppercase = /[A-Z]/.test(password); // At least one uppercase letter
    var hasLowercase = /[a-z]/.test(password); // At least one lowercase letter
    var hasSpecialChar = /[!@#$%^&*]/.test(password); // At least one special character

    if (password.length < minLength || !hasUppercase || !hasLowercase || !hasSpecialChar) {
        // Display error message below the input
        $('<div class="error-message">password should have one uppercase ,lawercase,special character and min 6 character      </div>').insertAfter('input[name="NewPassword"]');
    } else {
        // Remove any existing error message
        $('.error-message').remove();
    }
});

</script>
<div class="fv-row mb-10">
    <!--begin::Label-->
    <label class="form-label fs-7 fw-bolder text-light">Confirm Password:</label>
    <!--end::Label-->
    <!--begin::Input-->
    <input class="form-control form-control-lg form-control-solid" type="password" name="ConfirmPassword" autocomplete="off" required />
    <!--end::Input-->
</div>
<script>
    $(document).ready(function() {
        $('form').submit(function(event) {
            var ConfirmPassword = $('input[name="ConfirmPassword"]').val();
            var NewPassword = $('input[name="NewPassword"]').val();
            var Password = $('input[name="Password"]').val();

            var error = false;

            // Reset previous error messages
            $('.error-message').remove();

            if (Password === '') {
                event.preventDefault(); // Prevent form submission
                error = true;

                // Add error message below User Name input
                $('<div class="error-message">Please enter a password.</div>').insertAfter('input[name="Password"]');
            }
			if (NewPassword === '') {
    event.preventDefault(); // Prevent form submission
    error = true;

    // Add error message below Password input
    $('<div class="error-message">Please enter New Password.</div>').insertAfter('input[name="NewPassword"]');
}
			if (ConfirmPassword != NewPassword ) {
                event.preventDefault(); // Prevent form submission
                error = true;

                // Add error message below Password input
                $('<div class="error-message">Please enter ConfirmPassword as New Password.</div>').insertAfter('input[name="ConfirmPassword"]');
            }
			

            if (error) {
                // Scroll to the first error message
                $('html, body').animate({
                    scrollTop: $('.error-message').first().offset().top
                }, 500);

                // Stop further processing
                return false;
            }
        });
    });
</script>
							<!--end::Input group-->
							<!--begin::Input group-->
							<!--end::Input group-->
							<!--begin::Actions-->
							<div class="text-center">
								<!--begin::Submit button-->
								<button type="submit" name="save" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
									<span class="indicator-label">Continue</span>
									<span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								</button>
								<!--end::Submit button-->
								<!--begin::Separator-->
		
								<!--end::Google link-->
							</div>
							<!--end::Actions-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Content-->
				<!--begin::Footer-->
				<!--end::Footer-->
			</div>
			<!--end::Authentication - Password reset-->
		</div>
		<!--end::Root-->
		<!--end::Main-->
		<!--begin::Javascript-->
		<script src="https://cdn.ckeditor.com/4.16.2/standard-all/ckeditor.js"></script>
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="assets/js/widgets.bundle.js"></script>
		<script src="assets/js/custom/widgets.js"></script>
		<script src="assets/js/custom/apps/chat/chat.js"></script>
		<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
		<script src="assets/js/custom/utilities/modals/create-app.js"></script>
		<script src="assets/js/custom/utilities/modals/users-search.js"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>