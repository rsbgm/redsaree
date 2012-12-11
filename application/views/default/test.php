<?php
	$to = 'rsbgm@yahoo.com';
	$subject = 'Red Saree';
	$msg = 'Sorry, the form was not filled up properly!\n';
	$mailheaders = 'From: Red Saree <inquire@redsaree.com.ph>'."\r\n";
	$mailheaders .= 'Bcc: Web Guy <webguy@bewebbled.com>'."\r\n";
	mail($to, $subject, $msg, $mailheaders);
	echo 'Mail sent.';
?>