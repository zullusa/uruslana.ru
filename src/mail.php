<?php

$headers = "Content-type: text/html; charset=utf-8 \r\n" .
		"From: zilog@bk.ru\r\n" .
		"Reply-To: zilog@bk.ru\r\n" .
		"X-Mailer: PHP/" . phpversion();
$subject = "uruslana.ru: message from test";

$message = 'test message';

$message =
	"Имя:&nbsp;test<br />".
	"E-mail:&nbsp;test<br />".
	"Phone:&nbsp;+79999999999<br /><br />" .
	$message;

$mail = mail('zilog@bk.ru', $subject, $message, $headers);
if ($mail) {
	echo 'OK';
}

