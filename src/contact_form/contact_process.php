<?php

include __DIR__ . '/mail.php';

error_reporting(E_ALL ^ E_NOTICE);

$post = (!empty($_POST)) ? true : false;

if ($post) {
	include 'email_validation.php';

	$name = stripslashes($_POST['name']);
	$email = trim($_POST['email']);
	$phone = stripslashes($_POST['phone']);
	$message = stripslashes($_POST['message']);


	$error = '';

// Check name

	if (!$name) {
		$error .= 'Укажите имя.<br />';
	}
	if (!$email) {
		$error .= 'Укажите e-mail<br />';
	}
	if (!$phone) {
		$error .= 'Укажите телефон.<br />';
	}
	if ($email && !ValidateEmail($email)) {
		$error .= 'Укажите правильный e-mail<br />';
	}

	$headers = "Content-type: text/html; charset=utf-8 \r\n" .
		"From: " . CONTACT_FORM . "\r\n" .
		"Reply-To: " . CONTACT_FORM . "\r\n" .
		"X-Mailer: PHP/" . phpversion();

	$subject = "uruslana.ru: message from {$name}";

	$message =
		"Имя:&nbsp;{$name}<br />".
		"E-mail:&nbsp;{$email}<br />".
		"Phone:&nbsp;{$phone}<br /><br />" .
		$message;

	if (!$error) {
		$mail = mail(CONTACT_FORM, $subject, $message, $headers);


		if ($mail) {
			echo 'OK';
		}

	} else {
		echo '<div class="notification_error">' . $error . '</div>';
	}

}
?>