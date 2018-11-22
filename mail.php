<?php
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['Message'];
  $formcontent="From: $name \n Message: $message";
  $recipient = "forestpeakbakery@gmail.com";
  $subject = "Contact Form";
  $mailheader = "From: $email \r\n";
  mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
  header("Location: index.php?mailsend");
  echo "Thank You!";
}

?>
