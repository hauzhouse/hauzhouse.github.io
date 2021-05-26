<?php
//ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
	require_once("class.phpmailer.php");
	$mail = new PHPMailer;
	$mail->IsSMTP();
	$mail->SMTPDebug = 0;
	$mail->SMTPAuth   = true;
	$mail->SMTPSecure = "ssl";
	$mail->Port = 465;
	$mail->Host = "smtp.gmail.com"; 
	$mail->Username =   "modestoartur@gmail.com";
	$mail->Password =   "AAqamns@369#!";
	$mail->Subject  =  $_POST['como_podemos_ajudar_voce']." - ".$_POST['como_voce_classifica'];
	$mail->From = "modestoartur@gmail.com";
	$mail->FromName = "LEAD - HAUZHOUSE";
	$mail->AddReplyTo($_POST['email']);
	$mail->AddAddress("modestoartur@gmail.com");
	$mail->IsHTML(true);
	$mail->CharSet = 'utf-8';
	$mail->Body = $_POST['mensagem']."  / Nome: ".$_POST['nome']." - ".$_POST['email']." - ".$_POST['fone'] ;
	$mail->AltBody = $mail->Body;
	
	if (!$mail->send()) {
		echo "NOK: " . $mail->ErrorInfo;
	} else {
		echo "OK";
	}
?>