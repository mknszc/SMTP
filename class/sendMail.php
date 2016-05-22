<?php
/**
 * Created by PhpStorm.
 * User: ÖZ
 * Date: 16.04.2016
 * Time: 14:51
 */

include_once('class.phpmailer.php');
include_once('class.smtp.php');

function sendMail($to, $message) {
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Host = 'mail.domain.com';
    $mail->Port = 465;
    $mail->Username = 'example@domain.com';
    $mail->Password = '***';
    $mail->SetFrom($mail->Username, 'My Name');
    $mail->AddAddress($to);
    $mail->CharSet = 'UTF-8';
    $mail->Subject = 'Contact';
    $mail->MsgHTML($message);

    if ($mail->Send()) {
        echo 'Succes';
    }
    else {
        echo 'Error';
    }
}
/*  Yandex Mail
	*	$mail->SMTPSecure = 'tls';
	*	$mail->Host = 'smtp.yandex.com';
	*	$mail->Port = 587;

	*Gmail
	* 	$mail->SMTPSecure = 'ssl';
	*	$mail->Host = 'smtp.gmail.com';
	*	$mail->Port = 465;
*/
?>
