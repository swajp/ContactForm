<?php

if(isset($_POST['submit'])){
   $name = $_POST['name']; 
   $subject = $_POST['subject']; 
   $mailFrom = $_POST['mail']; 
   $message = $_POST['message']; 

   $mailTo = "email@email.email";
   $headers = "From:" . $mailFrom;
   $txt = "You have received an email from:" . $name . $message;

   mail($mail,$subject, $txt, $headers);
   head("Location: index.php?mailsend");
}
