<?php
if (isset($_REQUEST['email']))  {
  
  //Email information
  $to = "seotnxqo@server149.web-hosting.com";
  $from = $_REQUEST['email'];
  $email = "wlavarin@student.fdu.edu";
  $subject ='ThermaWeave';
  $comment = $_REQUEST['message'];
  
  //send email
  mail($to, "$subject", $comment, "From:" . $from);
  
  //Email response
  echo "Thank you for contacting us!";
  }
  
  //if "email" variable is not filled out, display the form
  else  {
  echo "Message Failed";
  }

?>

