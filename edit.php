<?php

  require_once 'db.php';

  session_start();
  if (!$_SESSION['admin']) {
    header("location: enter.php");
    exit;
  }

  $id = $_GET['id'];

	$result_product = mysqli_query($link, " SELECT * FROM services WHERE id='$id' ");

	$row = mysqli_fetch_array($result_product);

	if (isset($_POST['save'])) {

    $service = strip_tags(trim($_POST["service"]));
		$cost = strip_tags(trim($_POST["cost"]));

		mysqli_query($link, " UPDATE services SET service='$service', cost='$cost' WHERE id='$id'");
		header('Location: admin.php');
	}

	if (isset($_POST['delete'])) {
		mysqli_query($link, " DELETE FROM services WHERE id='$id' ");
		header('Location: admin.php');
	}
?>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Admin</title>
  <link rel="stylesheet" href="normalize.css">
  <link rel="stylesheet" href="main.css">
</head>
<body>
  <form action="edit.php?id=<?php echo $id; ?>" method="post" class="addproduct">
    <div>
      <label for="service">
        Наименование услуги
      </label>
      <input type="text" id="service1" name="service" value="<?php echo $row['service'] ?>">
    </div>
    <div>
      <label for="cost1">
        Описание
      </label>
      <input type="text" id="cost1" name="cost" value="<?php echo $row['cost'] ?>">
    </div>
      <input type="submit" name="save" value="Сохранить" class="buttonMail separateButton">
      <input type="submit" name="delete" value="Удалить" class="buttonMail separateButton">
    </form>
    <a href="admin.php" class="linkBack">Назад</a>
</body>
