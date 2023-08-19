<?php
if(isset($_POST['submit'])){

  $to = "Kadir@TarHeelRoofingandSolar.com";

  $cont = $_POST['message'];

  $phone = $_POST['phone'];

  $name = $_POST['name'];
  $verify = $_POST['verification'];

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
  $sent = false;
  $tag = "";
  // Always set content-type when sending HTML email
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  // More headers
  $headers .= 'From: <webmaster@andrewsmenezes.com>' . "\r\n";

//Check for unsubscribe and bitly
  $is_spam = preg_match("/bit\.ly|unsubscribe/i",$message);
  //check for verification message
  if($verify != 5 and $verify != 4 and !preg_match("/four/i",$verify) and preg_match("/five/i",$verify)){
    $is_spam = 1;
  }
  //check for email in fake field
 $fmail = $_POST["fmail"];
 if($fmail != ""){
   $is_spam = 1;
 }
//check for us areacode
$codes = array(907,205, 251, 256, 334,479, 501, 870,480, 520,602, 623, 928,209, 213, 310, 323, 408, 415, 510, 530,559, 562, 619, 626, 650, 661, 707, 714, 760, 805, 818, 831,858,909,916,925,949,951,303,719,970,203,860,202,302 ,239, 305, 321, 352, 386, 407, 561, 727, 772, 813, 850, 863, 904, 941, 954 ,229, 404, 478, 706, 770, 912 ,808 ,319, 515, 563, 641, 712 ,208 ,217, 309, 312, 618, 630, 708, 773, 815, 847 ,219, 260, 317, 574, 765, 812 ,316, 620, 785, 913 ,270, 502, 606, 859 ,225, 318, 337, 504, 985 ,413, 508, 617, 781, 978,301, 410 ,207 ,231, 248, 269, 313, 517, 586, 616, 734, 810, 906, 989 ,218, 320, 507, 612, 651, 763, 952 ,314, 417, 573, 636, 660, 816 ,228, 601, 662 ,406 ,252,336,704, 828, 910, 919 ,701 ,308, 402 ,603 ,201, 609, 732, 856, 908, 973 ,505, 575 ,702, 775 ,212, 315, 516, 518, 585, 607, 631, 716, 718, 845, 914 ,216, 330, 419, 440, 513, 614, 740, 937 ,405, 580, 918 ,503, 541 ,215, 412, 570, 610, 717, 724, 814, 401, 803, 843, 864, 605, 423, 615, 731, 865, 901, 931, 210, 214, 254, 281, 325, 361, 409, 432, 512, 713, 806, 817, 830, 903, 915, 936, 940, 956, 972, 979 ,435, 801 ,276, 434, 540, 703, 757, 804 ,802 ,206, 253, 360, 425, 509 ,262, 414, 608, 715, 920 ,304 ,307);
$proper_code = 1;
$phone_start = substr($phone,0,4);
$codes_length = count($codes);
for ($x = 0; $x <= $codes_length; $x++) {
 if(str_contains($phone_start,strval($codes[$x]?? "h"))){
   $proper_code = 0;
   }
}


if($proper_code != 0){
  $is_spam = 1;
  }
  if($is_spam!= 1){

  $sent = mail($to,$subject,$message,$headers);
  //$sent = mail("asmenezes@mail.com",$subject,$message,$headers);
  }
  if($sent){
    $tag = "msgsent";
  }elseif($is_spam == 0){
    $tag = "msgerr";
  }else{
    $tag = "msgfail";
  }

//if here with message success or failure
  header("Location:./index.html"."?m=".$tag."#contact");
}

?>
