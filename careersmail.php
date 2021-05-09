<?php
if(isset($_POST['submit'])){
  $to = "Kadir@TarHeelRoofingandSolar.com";
  $from = $_POST['email'];
  $phone = $_POST['phone'];
  $name = $_POST['name'];
  $position = $_POST['position'];
  $message = "
  <html>
  <head>
  <title>Careers Form Filled</title>
  </head>
  <body>

  <p>From: ".$name."</p>
  <p>Email ".$from."</p>
  <p>Phone Number ".$phone."</p>
  <p>Position : ".$position."</p>
  </body>
  </html>
  ";

  // Always set content-type when sending HTML email
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  // More headers
  $headers .= 'From: <webmaster@andrewsmenezes.com>' . "\r\n";


  mail($to,$subject,$message,$headers);
  header("Location: ./careersfilled.html");
}

?>
