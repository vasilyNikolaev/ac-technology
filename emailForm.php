<?php

	$name = strip_tags(trim($_POST['name']));
	$email = strip_tags(trim($_POST['email']));
	$phone = strip_tags(trim($_POST['phone']));
	mail("vasy251745@gmail.com", "Заявка с сайта", "Имя:".$name." E-mail:".$email." Телефон:".$phone );
	header('Location: index.php');

?>
