<?php
if(isset($_POST['submit'])){
  $to = "Kadir@TarHeelRoofingandSolar.com";
  $subject = $_POST['subject'];
  $cont = $_POST['message'];
  $from = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['addr'];
  $name = $_POST['name'];
  $state = $_POST['state'];
  $message = "
  <html>
  <head>
  <title>HTML email</title>
  </head>
  <body>
  <h1>".$subject."</h1>
  <p>From: ".$name."</p>
  <p>Email ".$from."</p>
  <p>Address ".$address."</p>
  <p>City ".$city."</p>
  <p>State ".$state."</p>
  <p>Message: ".$cont."</p>
  </body>
  </html>
  ";

  // Always set content-type when sending HTML email
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  // More headers
  $headers .= 'From: <webmaster@andrewsmenezes.com>' . "\r\n";


  mail($to,$subject,$message,$headers);
  header("Location: ./index.html");
}

?>
