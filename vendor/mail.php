<?php
session_start();
try {
	// Подключение библиотеки
	require '../phpmailer/PHPMailer.php';
	require '../phpmailer/SMTP.php';
	require '../phpmailer/Exception.php';
	// Вывод сообщения на клиент
	function showError($message) {
		$_SESSION['error'] = $message;
        header('Location: ../');
	}
	function showMessage($message) {
		$_SESSION['message'] = $message;
        header('Location: ../');
	}
	// Получение данных
	$marka = trim($_POST["marka"]);
  $model = trim($_POST["model"]);
  $text = trim($_POST["text"]);
	$phone = trim($_POST["phone"]);
  $nazv = trim($_POST["nazv"]);
	// Контент письма
	$title = 'Заявка на услугу';
	$body = '<p>Название услуги: '.$nazv.'</p>'.
      '<p>Марка авто: '.$marka.'</p>'.
      '<p>Модель Авто: '.$model.'</p>'.
			'<p>Комментарий: '.$text.'</p>'.
			'<p>Телефон: '.$phone.'</p>';
	// Настройки PHPMailer
	$mail = new PHPMailer\PHPMailer\PHPMailer();
	$mail->isSMTP();
	$mail->CharSet = 'UTF-8';
	$mail->SMTPAuth   = true;
	// Настройки почты отправителя
	$mail->Host       = 'smtp.yandex.ru'; // SMTP сервера вашей почты
	$mail->Username   = 'avtoservis.mamguk@yandex.ru'; // Логин на почте
	$mail->Password   = 'tkcndlqzazxvuzly'; // Пароль на почте
	$mail->SMTPSecure = 'ssl';
	$mail->Port       = 465;
	$mail->setFrom('avtoservis.mamguk@yandex.ru', $title); // Адрес самой почты и имя отправителя
	// Получатель письма
	$mail->addAddress('avtoservis.mamguk@yandex.ru');
	// Отправка сообщения
	$mail->isHTML(true);
	$mail->Subject = $title;
	$mail->Body = $body;
	if ($mail->send()) {
		showMessage('Сообщение успешно отправлено!');
	} else {
		showError('Ошибка при отправке сообщения. Попробуйте позже.');
	}
} 
catch (Exception $e) {
	showError('Ошибка сервера. Попробуйте позже.');
}