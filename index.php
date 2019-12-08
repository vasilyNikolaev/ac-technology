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
	<main class="index_main">
		<h1 class="visuallyHidden">
			Торгово-сервисная компания АС-Технолоджи
		</h1>
		<div class="containerSlider">
			<section class="slider">
	      <button id="bottonLeft"></button>
	      <button id="bottonRight"></button>
	      <div id='polosa'>
					<div class="item">
	          <div class="imgSlider">
	            <img src="img/icons8-компьютер-на-столе-100.png" alt="Компьютер">
	          </div>
	          <div>
	            <h1>
	              Мы дружим с законом <br>и даем гарантию на работу
	            </h1>
	            <p>
	              Для уверенности в качестве и надежности производимого ремонта, мы даем каждому клиенту гарантию на определенный срок. Если в установленный нами период гарантии произойдет повторная поломка - мы выполним ремонт абсолютно бесплатно.
	            </p>
	          </div>
	        </div>

	        <div class="item">
	          <div class="imgSlider">
	            <img src="img/icons8-ноутбук-100.png" alt="Ноутбук">
	          </div>
	          <div>
	            <h1>
	              Мы давно на рынке <br> и знаем свое дело
	            </h1>
	            <p>
	              В нашем деле важно не только качество, но и скорость проведения работы. Профессионализм сотрудников, наличие собственного ассортимента оригинальных запчастей, продажа аксессуаров и нового оборудования дает нам возможность производить своевременное обслуживание и ремонт техники.
	            </p>
	          </div>
	        </div>

					<div class="item">
	          <div class="imgSlider">
	            <img src="img/icons8-сенсорный-смартфон-100.png" alt="Смартфон">
	          </div>
	          <div>
	            <h1>
	              Мы знаем о технике все<br> и даже больше...
	            </h1>
	            <p>
	              Сервисный центр "Ас-Технолоджи" - команда профессионалов, знающая о ремонте цифровой электроники и бытовой технике практически все, способная справиться с любыми поставленными задачами и решить любые возникшие технические проблемы.
	            </p>
	          </div>
	        </div>

				</div>
		</section>
	</div>
		<section class="cardCatalog">
			<a href="product.php?cat=компьютеров">
				<div class="itemCard">
						<img src="img/icons8-рабочая-станция-24.png" alt="ПК" width="24" height="24">
						<p>
							Компьютер
						</p>
				</div>
			</a>
			<a href="product.php?cat=ноутбуков">
				<div class="itemCard">
						<img src="img/icons8-ноутбук-24.png" alt="Ноутбук">
						<p>
							Ноутбук
						</p>
				</div>
			</a>
			<a href="product.php?cat=смартфон">
				<div class="itemCard">
						<img src="img/icons8-сенсорный-смартфон-24.png" alt="Смартфон">
						<p>
							Смартфон
						</p>
				</div>
			</a>
			<a href="product.php?cat=планшетов">
				<div class="itemCard">
						<img src="img/icons8-планшет-на-windows-8-24.png" alt="Планшет">
						<p>
							Планшет
						</p>
				</div>
			</a>
		</section>
		<section class="map">
			<h3 id="anchorCard">
				Адрес сервисного центра в г. Златоуст
			</h3>
			<div class="mapCenter">
				<a class="dg-widget-link" href="http://2gis.ru/miass/firm/70000001025388576/center/59.669795036315925,55.17401530562978/zoom/17?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap"></a><div class="dg-widget-link"><a href="http://2gis.ru/miass/center/59.668933,55.173965/zoom/17/routeTab/rsType/bus/to/59.668933,55.173965╎АС-Технолоджи, торгово-сервисная компания?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">	</a></div><script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"width":750,"height":400,"borderColor":"#a3a3a3","pos":{"lat":55.17401530562978,"lon":59.669795036315925,"zoom":17},"opt":{"city":"miass"},"org":[{"id":"70000001025388576"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
			</div>
			<div class="jobInformation">
				<div>
					<p>
						Адрес
					</p>
					<p>
						Режим работы
					</p>
					<p>
						Телефон
					</p>
				</div>
				<div>
					<p>
						Златоуст, Скворцова, 7 — 2 этаж
					</p>
					<p>
						СБ с 09:30–19:00
					</p>
					<p>
						+7(912)-809-67-00
					</p>
				</div>
			</div>
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
