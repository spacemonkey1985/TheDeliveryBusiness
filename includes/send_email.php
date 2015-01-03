<?php

	if(isset($_POST['name'])){
		if($_POST['name'] != ''){
			$to = 'enquiries@thedeliverybusiness.com';
			$subject = 'The Delivery Business Contact Us - ' . $_POST['name'] . ', ' . $_POST['company'];
			$body = "Name: " . $_POST['name'] . "\r\nCompany: " . $_POST['company'] . "\r\nEmail: " . $_POST['email'] . "\r\nQuery:\r\n" . $_POST['query'];
			$headers = 'From: enquiries@thedeliverybusiness.com' . "\n" .
						'Reply-To: enquiries@thedeliverybusiness.com' . "\n" .
						'X-Mailer: PHP/' . phpversion();
		
			mail($to, $subject, $body, $headers);
			
			$to =  $_POST['email'];
			$subject = 'The Delivery Business Query - ' . $_POST['name'] . ', ' . $_POST['company'];
			$body = "Dear " . $_POST['name'] . "\r\n\r\nThank you for getting in touch. Your query has been sent to our team and someone will respond as soon as they are available.";
			$headers = 'From: enquiries@thedeliverybusiness.com' . "\n" .
						'Reply-To: enquiries@thedeliverybusiness.com' . "\n" .
						'X-Mailer: PHP/' . phpversion();
		
			mail($to, $subject, $body, $headers);
			
			header("Location: ../contact2.php");
		}
	}
	else {
		header("Location: ../contact.php");
	}
	
?>