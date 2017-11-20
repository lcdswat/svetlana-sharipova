<!DOCTYPE html>
<html>
<head>
	<title>Светлана Шарипова — Контакты</title>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/header.html'); ?>
	<style type="text/css">
		#menulink-contact {display: none !important;}
	</style>
</head>
<body>

<!-- Шапка -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/header-inside.html'); ?>

<!-- Меню -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/menu.html'); ?>

<div class="gray-bg" style="padding: 80px 0 60px 0;">
	<h1>Контакты</h1>
	<div class="grid">
		<div class="contacts-info">
			<b>Телефон:</b><br>
			<a href="tel:+79174935744">+7 917 493-57-44</a>
		</div>
		<div class="contacts-info">
			<b>E-mail:</b><br>
			<a href="mailto:nuriko4@yandex.ru">nuriko4@yandex.ru</a>
		</div>
		<div class="contacts-info">
			<b>Вконтакте:</b><br>
			<a href="https://vk.com/id4029962">Светлана Шарипова</a>
		</div>
	</div>
</div>

<div class="grid" id="forma">
	<br><br>
	<div>
		<form action="/site-files/contacts-send.php" method="post">
			<input type="text" name="name" placeholder="Ваше имя" name="" autocomplete="off">
			<input type="email" name="email" placeholder="Ваш e-mail" name="" autocomplete="off">
			<textarea name="text" placeholder="Ваше сообщение" rows="6"></textarea>
			<button type="submit">Отправить</button>
		</form>
		</form>
	</div>
	<h2>Есть вопрос?</h2>
	Если у вас есть ко мне какой-либо вопрос<br>вы можете отправить сообщение через форму ниже<br>и я отвечу в ближайшее время.
</div>

<!-- Футер -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/footer.html'); ?>

</body>
</html>