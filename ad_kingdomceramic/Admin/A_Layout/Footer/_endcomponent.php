<?php

echo "<!--End::Wapper-->
</div>
</div>
<!--end::Page-->
</div>
<script>
    window.onload = function() {
		// Code to be executed after the page has finished loading
		console.log('Page loaded!');
		 console.log(localStorage.getItem('darkModeEnabled'));
		 if(localStorage.getItem('darkModeEnabled') == 'true'){
			document.body.classList.remove('dark-mode');
    document.getElementById('darkModeStylesheet').disabled = true;
    document.getElementById('darkModeCustomStylesheet').disabled = true;
		 }else{
			document.body.classList.add('dark-mode');
    document.getElementById('darkModeStylesheet').disabled = false;
    document.getElementById('darkModeCustomStylesheet').disabled = false;
    localStorage.setItem('darkModeEnabled', 'false');
		 }
	  };
</script>
<script src='../../assets/js/plugins/sweetalert.min.js'></script>
<script>var hostUrl = 'assets/';</script>
	<!--begin::Global Javascript Bundle(used by all pages)-->
	<script src='assets/plugins/global/plugins.bundle.js'></script>
	<script src='assets/js/scripts.bundle.js'></script>
	<!--end::Global Javascript Bundle-->
	<!--begin::Page Vendors Javascript(used by this page)-->
	<script src='assets/plugins/custom/fullcalendar/fullcalendar.bundle.js'></script>
	<script src='assets/plugins/custom/datatables/datatables.bundle.js'></script>
	<!--end::Page Vendors Javascript-->
	<!--begin::Page Custom Javascript(used by this page)-->
	<script src='assets/js/widgets.bundle.js'></script>
	<script src='assets/js/custom/widgets.js'></script>
	<script src='assets/js/custom/apps/chat/chat.js'></script>
	<script src='assets/js/custom/utilities/modals/upgrade-plan.js'></script>
	<script src='assets/js/custom/utilities/modals/create-app.js'></script>
	<script src='assets/js/custom/utilities/modals/users-search.js'></script>

</body>


</html>";

?>