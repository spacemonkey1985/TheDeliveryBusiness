<?php

	if(isset($_POST['sub_name'])){
		if($_POST['sub_name'] != ''){
			$to = 'enquiries@thedeliverybusiness.com';
			$subject = 'My Details - ' . $_POST['sub_name'] . ', ' . $_POST['sub_company'];
			$body = "Here are my details, please get contact me.\r\nName: " . $_POST['sub_name'] . "\r\nCompany: " . $_POST['sub_company'] . "\r\nEmail: " . $_POST['sub_email'];
			$headers = 'From: enquiries@thedeliverybusiness.com' . "\n" .
						'Reply-To: enquiries@thedeliverybusiness.com' . "\n" .
						'X-Mailer: PHP/' . phpversion();
		
			mail($to, $subject, $body, $headers);
			
			header("Location: " . $_POST['uri'] . "?sub=y" );
		}
	}
	else {
		header("Location: " . $_POST['uri'] );
	}
	
?>