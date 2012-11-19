<?php
 require_once "Mail.php";

 $from = "Red Saree <inquire@redsaree.com.ph>";
 $to = "BB <rsbgm@yahoo.com>";
 $subject = "Hi!";
 $body = "Hi,\n\nHow are you?";

 $host = "mail.redsaree.com.ph";
 $username = "inquire@redsaree.com.ph";
 $password = "1nf0422";

 $headers = array ('From' => $from,
   'To' => $to,
   'Subject' => $subject);
 $smtp = Mail::factory('smtp',
   array ('host' => $host,
     'auth' => true,
     'username' => $username,
     'password' => $password));

 $mail = $smtp->send($to, $headers, $body);

 if (PEAR::isError($mail)) {
   echo("<p>" . $mail->getMessage() . "</p>");
  } else {
   echo("<p>Message successfully sent!</p>");
  }
 ?>