<?php
if(isset($_POST['submit'])){
  $to = "Kadir@TarHeelRoofingandSolar.com";

  $cont = $_POST['message'];

  $phone = $_POST['phone'];

  $name = $_POST['name'];
  $verify = $_POST['verification']

  $message = "
  <html>
  <head>
  <title>HTML email</title>
  </head>
  <body>

  <p>From: ".$name."</p>
  <p>Number ".$phone."</p>
  <p>Message: ".$cont."</p>
  </body>
  </html>
  ";

  // Always set content-type when sending HTML email
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  // More headers
  $headers .= 'From: <webmaster@andrewsmenezes.com>' . "\r\n";
/*
  $message = "himm";
  $is_spam = preg_match("/IM/i",$message);
  echo $is_spam;
*/
  $is_spam = preg_match("/bit\.ly|unsubscribe/i",$message);
  if($verify != 3 or !preg_match("/three/i",$verify)){
    $is_spam = 1;
  }
  if($is_spam!= 1){

    mail($to,$subject,$message,$headers);
  }

  header("Location: ./index.html");
}

?>
