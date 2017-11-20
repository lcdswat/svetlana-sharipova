<!DOCTYPE html>
<html>
<head>
	<title>Светлана Шарипова</title>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/header.html'); ?>
	<style type="text/css">
		#menulink-mainpage {display: none !important;}
	</style>
</head>
<body>

<div id="header">
	<div class="grid">
		<img src="/site-files/ava.png">
		<span>Светлана Шарипова</span>
		Учитель истории, обществознания,<br>экономики, права и ИКБ
	</div>
</div>

<!-- Меню -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/menu.html'); ?>

<!-- Обо мне -->
<div class="gray-bg">
	<div class="grid-thin">
		<p>Здравствуйте! Вас приветствует Шарипова Светлана Даниловна, учитель истории и обществознания Муниципального бюджетного общеобразовательного учреждения «Гимназия № 64» городского округа город Уфа Республики Башкортостан.</p>
		<p>Я работаю учителем истории и обществознания в самой замечательной гимназии города. Когда я пришла сюда после окончания университета, то нашла здесь замечательный, теплый коллектив, и, конечно же, самых умных  и талантливых детей.  Именно они помогли мне пройти такой ещё недолгий, но насыщенный и интересный путь учителя, многому научить и помочь, позволить мне вырасти профессионально и личностно, добиться успеха. Хочу выразить всем благодарность.</p>
		<p>Учитель — это призвание, желание каждый день открыть кому-то новый мир, научить видеть обыденные вещи по-другому, даже в рутинной работе найти важное и необычное, стать кому-то наставником и другом. Мой сайт — это возможность показать небольшую дольку моей работы, которая проводится в школе. Охватить всё и всех, конечно, не получится, но можно попытаться. Надеюсь, материал, размещенный на сайте,  будет вам полезен и просто интересен.</p>
	</div>	
</div>
<a href="/about" id="main-page-about">Подробнее обо мне</a>

<!-- Мое кредо -->
<div class="grid" id="my-credo">
	<h1>Моё кредо</h1>
	<div>
		<img src="/site-files/credo-1.svg">
		<span>Создать из<br>повседневного —<br>удивительное</span>
	</div>
	<div>
		<img src="/site-files/credo-2.svg">
		<span>О сложном говорить<br>увлекательно,<br>эмоционально</span>
	</div>
	<div>
		<img src="/site-files/credo-3.svg">
		<span>Учить всему<br>кратко, понятно,<br>основательно</span>
	</div>
</div>

<!-- Школьные будни -->
<div class="grid" id="main-page-photos">
	<h2>Школьные будни</h2>
	<a data-fancybox="gallery" href="/images/mainpage02.jpg"><img src="/images/thumb/mainpage02.jpg"></a>
	<a data-fancybox="gallery" href="/images/mainpage03.jpg"><img src="/images/thumb/mainpage03.jpg"></a>
	<a data-fancybox="gallery" href="/images/mainpage04.jpg"><img src="/images/thumb/mainpage04.jpg"></a>
	<a data-fancybox="gallery" href="/images/mainpage01.jpg"><img src="/images/thumb/mainpage01.jpg"></a>
	<a data-fancybox="gallery" href="/images/mainpage05.jpg"><img src="/images/thumb/mainpage05.jpg"></a>
	<a data-fancybox="gallery" href="/images/mainpage06.jpg"><img src="/images/thumb/mainpage06.jpg"></a>
	<a data-fancybox="gallery" href="/images/mainpage07.jpg"><img src="/images/thumb/mainpage07.jpg"></a>
	<span><a href="/school">Больше<br>фотографий →</a></span>
</div>

<!-- Есть вопрос? -->
<div class="grid" id="forma">
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