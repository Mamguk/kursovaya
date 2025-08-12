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
	$phone = trim($_POST["phone"]);
  $text = trim($_POST["text"]);
  $nazv = "Ремонт кузова";
  $avatar = 'https://trikky.ru/wp-content/blogs.dir/1/files/2023/10/30/28e4ac42f547e6ac0f50f7cfa916ca93.jpg';
	// Валидация полученных данных


	// Контент письма
	$title = 'Заявка на ремонт кузова';
	$body = '<p>Название услуги: '.$nazv.'</p>'.
          '<p>Телефон: '.$phone.'</p>'.
          '<p>Комментарий: '.$text.'</p>'.
          '<img src="'.$avatar.'" alt="Avatar">';


	// Настройки PHPMailer
	$mail = new PHPMailer\PHPMailer\PHPMailer();

	$mail->isSMTP();
	$mail->CharSet = 'UTF-8';
	$mail->SMTPAuth   = true;

	// Настройки почты отправителя
	$mail->Host       = 'smtp.yandex.ru'; // SMTP сервера вашей почты
	$mail->Username   = 'avtoservis.mamguk@yandex.ru'; // Логин на почте
	$mail->Password   = 'droavygyglopiaop'; // Пароль на почте
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