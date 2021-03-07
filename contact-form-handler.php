<?php
		if (isset($_POST['submit'])){
		$name = $_POST['name'];
		$visitor_email = $_POST['email'];
		$message = $_POST['message'];


		$mail_to = 'computerrauf@live.nl'
		$email_subject = 'Nieuw bericht Stichting Asha';
		$email_body = "Naam:" .$name."\n ".
				"Email:" $visitor_email". \n".
				"Bericht:" $message. \n";


		
		$headers = "Van:" .$visitor_email . "\r\n";
		
		$headers .= "Reageer:" .$visitor_email. "\r\n";

		mail($mail_to,email_subject,$email_body,$headers);

		header("Location: index.php?mailsend");
		}
?>
