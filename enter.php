<?php
	session_start();

		$admin = 'admin';
		$pass = '21232f297a57a5a743894a0e4a801fc3';

	if ($_POST['submit']) {
		if($admin == $_POST['user'] && $pass == md5($_POST['pass'])){
			$_SESSION['admin'] = $admin;
			header("Location: admin.php");
			exit;
		}
}

?>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Админ панель</title>
	<link rel="stylesheet" type="text/css" href="normalize.css">
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>

	<form method="post" action="enter.php" class="addproduct">
		<label for="name">
			Логин
		</label>
		<input type="text" name="user" id="name">
		<label for="pass">
			Пароль
		</label>
		<input type="password" name="pass" id="pass">
		<input type="submit" name="submit" value="Войти" class="separateButton">
	</form>

</body>
</html>
