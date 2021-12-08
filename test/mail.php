<?php

if($_POST["sub"]=="Send")
	{

	 

	
$name = $_POST['form_name'];
$email = $_POST['form_email'];
$phone = $_POST['form_phone'];
 
$sub = $_POST['form_subject'];
$message = $_POST['form_message'];





$mail_to = 'help@airhumanitarianhomes.org';
$subject = 'Query from AiR Humanitarian Homes Website By '.$name;
$body_message = '<html><body>';
$body_message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$body_message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['form_name']) . "</td></tr>";
$body_message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['form_email']) . "</td></tr>";
$body_message .= "<tr><td><strong>Mobile:</strong> </td><td>" . strip_tags($_POST['form_phone']) . "</td></tr>";
$body_message .= "<tr><td><strong>Enquiry Subject:</strong> </td><td>" . strip_tags($_POST['form_subject']) . "</td></tr>";
$body_message .= "<tr><td><strong>Message:</strong> </td><td>" . strip_tags($_POST['form_message']) . "</td></tr>";
 
$body_message .= "</table>";
$body_message .= "</body></html>";
	
	



$headers = 'From: '.$email."\r\n";
$headers .= 'Reply-To: '.$email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. We will contact you shortly.');
		window.location = 'http://airhumanitarianhomes.org/contact.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please, send an email to help@airhumanitarianhomes.org');
		window.location = 'http://airhumanitarianhomes.org/contact.html';
	</script>
<?php
}
	}
?>
