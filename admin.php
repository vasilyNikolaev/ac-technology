<?php
  require_once 'db.php';

  session_start();
  if (!$_SESSION['admin']) {
    header("location: enter.php");
    exit;
  }

  if($_GET['do'] == 'logout'){
    unset($_SESSION['admin']);
    session_destroy();
  }

  if (isset($_POST['add'])) {

		$service = strip_tags(trim($_POST["service"]));
		$cost = strip_tags(trim($_POST["cost"]));
    $cats = strip_tags(trim($_POST["cats"]));

		mysqli_query($link, "INSERT INTO services(service, cost, cats) VALUES ('$service', '$cost', '$cats')");
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
    <form action="admin.php" method="post" class="addproduct">
      <div>
        <label for="service1">
          Наименование услуги
        </label>
        <input type="text" id="service1" name="service">
      </div>
      <div>
        <label for="cost1">
          Цена
        </label>
        <input type="text" id="cost1" name="cost">
      </div>
      <div>
        <label>
          Добавить в категорию
        </label>
        <select name="cats" class="selectAdd">
          <option value="компьютеров">Компьютер</option>
          <option value="ноутбуков">Ноутбук</option>
          <option value="планшетов">Планшет</option>
          <option value="смартфон">Смартфон</option>
        </select>
      </div>
        <input type="submit" name="add" value="Отправить" class="buttonMail">
      </form>

      <div class="informationConclusion">
        <p>
          Услуги
        </p>
        <p>
          Стоймость
        </p>
      </div>
      <?php

        while ($row = mysqli_fetch_array($result_product)) { ?>

          <section class="conclusion">
            <div class="titleConclusion">
                <p>
                  <?php echo $row["service"]; ?>
                </p>
                <p>
                  <?php echo $row["cost"]; ?>
                </p>
            </div>
            <div class="categoryInformation">
              Ремонт <?php echo $row["cats"]; ?>
            </div>
            <a class="buttonMail" href="edit.php?id=<?php echo $row["id"]; ?>">Изменить</a>
          </section>
      <?php } ?>

      <a href="enter.php?do=logout" class="linkBack">Выход</a>
</body>
