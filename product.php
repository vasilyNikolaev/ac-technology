<?php
  require_once 'db.php';

  if (isset($_GET['cat'])) {
    $currentCat = $_GET['cat'];
    $services = $connect->query( "SELECT * FROM services WHERE cats='$currentCat'" );
    $services = $services->fetchALL( PDO::FETCH_ASSOC );
  }

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Ас-Технолоджи</title>
	<link rel="stylesheet" type="text/css" href="normalize.css">
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<header class="index_header">
		<div class="headerContainer">
      <div class="logoHeader">
        <a href="index.php">
          Ас-технолоджи
        </a>
      </div>
      <div class="navigationHeader">
        <a href="#" class="main">
          Главная
        </a>
        <a href="index.php#anchorCard" class="aboutUs">
          О нас
        </a>
        <a href="#" class="categoriesToggle">
          Категории
        </a>
        <a href="#" class="feedbackBotton">
          Обратная связь
        </a>
				<ul class="serviceСategories">
          <a href="product.php?cat=компьютеров">
					<li>
						Компьютер
					</li>
          </a>
          <a href="product.php?cat=ноутбуков">
					<li>
						Ноутбук
					</li>
          </a>
          <a href="product.php?cat=смартфон">
					<li>
						Смартфон
					</li>
          </a>
          <a href="product.php?cat=планшетов">
					<li>
						Планшет
					</li>
          </a>
				</ul>
      </div>
    </div>
	</header>
	<div>
		<form method="post" action="emailForm.php" class="feedback">
			<h3>
				Обратная связь
			</h3>
			<p>
				Оставте Ваши данные и мы свяжемся с Вами
			</p>
			<input type="text" name="name" class="input_name" placeholder="Ваше имя" required>
			<input type="text" name="phone" class="input_phone" placeholder="Ваш телефон" required>
			<input type="text" name="email" placeholder="Ваш e-mail">
			<button type="submit" class="send">
				Отправить
			</button>
			<p>
				Мы не занимаемся рассылкой рекламных сообщений, а так же не передаем контактные данные третьим лицам.
			</p>
			<button class="closeFeedback" type="button">
				Закрыть
			</button>
		</form>
	</div>
<div class="breadСrumbs">
  <p>
    Ремонт <?=$currentCat?>
  </p>
  <ul>
    <li>
      <a href="index.php">Главная</a>
    </li>
    <li class="currentPage">
      <a>Ремонт <?=$currentCat?></a>
    </li>
  </ul>
</div>
<section class="cardProduct">
  <div class="card cardInformation">
      <p>
        Наши услуги
      </p>
      <p>
        Стоимость
      </p>
  </div>
  <?php foreach ($services as $service) { ?>
  <div class="card cardSevices">
      <p>
        <?=$service["service"]?>
      </p>
      <p>
        <?=$service["cost"]?>
      </p>
  </div>
<?php } ?>
</section>
</main>
<footer>
  <div class="containerFooter">
    <div>
      <p>
        © Ас-Технолоджи
      </p>
    </div>
    <div>
      <a href="#">
        <img src="img/icons8-вконтакте-24.png" alt="ВК">
      </a>
      <a href="#">
        <img src="img/icons8-facebook-24.png" alt="Фейсбук">
      </a>
    </div>
  </div>
</footer>
  <script src="js/main.js"></script>
</body>
</html>
