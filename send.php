<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : 'Невідоме ім’я';
	$email = htmlspecialchars($_POST['email']);
	$message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : 'Не залишено повідомлення';

	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo "Помилка: Невірний формат email.";
		exit;
	}
	$mail = new PHPMailer(true);

	try {
		$mail->isSMTP();
		$mail->Host       = 'smtp.gmail.com';
		$mail->SMTPAuth   = true;
		$mail->Username   = 'albafff123@gmail.com';
		$mail->Password   = '#### #### #### ####';
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
		$mail->Port       = 587;
		$mail->setFrom($email, $name);
		$mail->addAddress('6weeks.12h@gmail.com');
		$mail->CharSet = 'UTF-8';
		$mail->isHTML(false);
		$mail->Subject = '6weeks - Форма заповнена';
		$mail->Body    = "Ім’я: $name\nEmail: $email\nПовідомлення: $message";


		$mail->send();

		header('Location: /?message=success');
		exit;
	} catch (Exception $e) {
		echo "Помилка при відправці форми. Помилка: {$mail->ErrorInfo}";
	}
}
?>
