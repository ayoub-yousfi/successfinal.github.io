<?php

session_start();

$name = "";
$email = "";
$msg = "";


//$ip = $_SERVER['REMOTE_ADDR'];

if($_POST) {

	// collect all input and trim to remove leading and trailing whitespaces
	$name = ($_POST['name']);
	$email = trim($_POST['email']);
	$msg = ($_POST['message']);  
	$ip = $_SERVER['REMOTE_ADDR'];
	$JOUR  = date("Y-m-d");
	$HEURE = date("H:i"); 

	//adress to send to
	$to="ayoub.yousfi.enetcom@gmail.com";
	//adress mail OVH (hébergeur)
	$from="contact@formation-dnm.com" ;

	//message
	$mail_Data = '';
	$mail_Data .= "<br>";

	$mail_Data .= 'IP host : '.$ip;
	$mail_Data .= "<br>";$mail_Data .= "<br>";
	//$mail_Data .= "\r\n";$mail_Data .= "\r\n";

	$mail_Data .= 'Name : '.$name;
	$mail_Data .= "<br>";$mail_Data .= "<br>";
	//$mail_Data .= "\r\n";$mail_Data .= "\r\n";

	$mail_Data .= 'Email : '.$email;
	$mail_Data .= "<br>";$mail_Data .= "<br>";
	//$mail_Data .= "\r\n";$mail_Data .= "\r\n";


	//$mail_Data .= "\r\n";$mail_Data .= "\r\n";

	$mail_Data .= 'Message :'."<br>".$msg;
	$mail_Data .= "<br>";

	


	$headers = "MIME-Version: 1.0 \n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1 \n";
	$headers .= "From: ".$from."\n";
	$headers .= "Disposition-Notification-To:". $to ."\n";

// Message de Priorité haute
// -------------------------
	$headers .= "X-Priority: 1  \n";
	$headers .= "X-MSMail-Priority: High \n";

	mail($to, $mail_Data, $headers);

}

header('Location: ../index.php');

?>	