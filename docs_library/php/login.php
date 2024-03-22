<?php

	if(isset($_POST['password'])) {
		if ($_POST['password'] == 'PFDocs'){
			
			include("/partnerfunding-dev.navitascredit.com/partner_funding_document_library_index.html");
		} else {
			include("/partnerfunding-dev.navitascredit.com/partner_funding_document_access_password_protected_index.html");
			exit;
		}

	}
?>