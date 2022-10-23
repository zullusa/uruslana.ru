<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = no">
	<meta name="theme-color" content="#d66220">
	<meta content="https://uruslana.ru/images/logo-tw.png" name="twitter:image">
	<meta content="Автозапчасти, шины и диски, шиномонтаж" property="og:title">
	<meta content="У Руслана" name="twitter:description">
	<meta content="uruslana.ru" name="description">
	<title>U Ruslana</title>
	<link rel="stylesheet" href="css/style.css?v1" type="text/css" media="screen">
	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="css/normalize.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
	<link rel="icon" href="images/favicon.png" type="image/x-png">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/js.js"></script>
	<script type="text/javascript" src="js/jquery.stellar.min.js"></script>
	<script type="text/javascript" src="js/waypoints.min.js"></script>

	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.src.js"></script>
	<![endif]-->

	<script type="text/javascript">
		$(document).ready(function () {
			$("#ajax-contact-form").submit(function () {
				var str = $(this).serialize();
				$.ajax({
					type: "POST",
					url: "contact_form/contact_process.php",
					data: str,
					success: function (msg) {
						// Message Sent - Show the 'Thank You' message and hide the form
						if (msg == 'OK') {
							result = '<div class="notification_ok">Ваше сообщение отправлено. Спасибо!</div>';
							$("#fields").hide();
						} else {
							result = msg;
						}
						$('#note').html(result);
					}
				});
				return false;
			});

		});
	</script>

	<!--script type="text/javascript">$($.date_input.initialize);</script-->

</head>

<body>

<div class="menu">
	<div class="container clearfix">

		<div id="logo" class="fleft">
			<a href="#"><img class="logo" src="images/logo.png"/></a>
		</div>

		<div id="nav" class="fright">
			<ul class="navigation">
				<li data-slide="1"><img src="images/back_top_bg.png" /></li>
<!--				<li data-slide="4">Галерея</li>-->
				<li data-slide="6">УСЛУГИ</li>
				<li data-slide="8">Контакты</li>
				<div class="clear"></div>
			</ul>
		</div>
	</div>
</div>


<div class="slide" id="slide1" data-slide="1" data-stellar-background-ratio="0.5">
	<div class="effect_2 padding_slide1">
		<div class="container clearfix">
			<div class="grid_12">
				<div class="filtr_bg">
					<h1>U Ruslana</h1>
					<h2>АВТОЗАПЧАСТИ</h2>
					<p><a href="tel:+79269265677">+7 (926) 926 5677</a></p>
					<p><a href="tel:+74959880636">+7 (495) 988 0636</a></p>
					<p><a href="tel:+79099816077">+7 (909) 981 6077</a></p>
					<p style="color: #fff;">Открыты для Вас каждый день с 08:00 до 20:00</p>
					<br />
					<p>Полный спектр услуг по поиску, подбору автозапчастей для Вашего авто</p>
					<p>Подбор, установка шин и дисков на Ваш автомобиль</p>
					<p>Экспресс замена масла бесплатно. ТО. Заправка Кондиционеров. Мелкий ремонт.</p>
				</div>
				<a class="button" title="" data-slide="8">контакты</a>
			</div>
		</div>
	</div>
</div>

<!--<div class="slide" id="slide4" data-slide="4" data-stellar-background-ratio="0.5">-->
<!--	<div class="container clearfix">-->
<!--		<div class="grid_12">-->
<!--			<h1><span>Галерея работ</span></h1>-->
<!--		</div>-->
<!--		<div class="clear"></div>-->
<!---->
<!--		<div id="contenet">-->
<!--			<div class="gallery-list">-->
<!--				<div>-->
					<?php
//					$portfolio = "images/portfolio/";
//					$dirs = glob("{$portfolio}*", GLOB_ONLYDIR);
//					srand();
//					$arr = array_rand($dirs, 8);
//					$shuffle = array();
//					foreach ($arr as $item){
//						$shuffle[] = $dirs[$item];
//					}
//
//					foreach ($shuffle as $dir) {
//						$txt = file_get_contents("{$dir}/info.txt");
//						$name = basename($dir);
//						echo "<div class='grid_3'><div class='hover_img'><img src='{$dir}/0.jpg' alt=''/>";
//						$files = glob("{$dir}/*.jpg");
//						foreach ($files as $file) {
//							if (basename($file, ".jpg") != "0") {
//								echo "<span class='portfolio_zoom'><a href='{$file}' rel='prettyPhoto[{$name}]'></a></span>";
//							}
//						}
//						echo "</div><div class='item_description'>{$txt}</div></div>";
//					}
					?>
<!--					<div class="clear"></div>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--		<div class="grid_12">-->
<!--			<a href="./gallery.php" class="button" title="">Ещё</a>-->
<!--		</div>-->
<!--	</div>-->
<!--</div>-->

<div class="slide" id="slide6" data-slide="6" data-stellar-background-ratio="0.5">
	<div class="container clearfix">

		<div class="grid_12">
			<h1><span>Услуги</span></h1>
		</div>
		<div class="clear"></div>

		<div id="content">
			<div class="grid_4 serv_block">
				<div class="icon_block1"></div>
				<p>АВТОЗАПЧАСТИ</p>
				<div class="text">Подбор автозапчасей для Вашего авто</div>
				<div class="serv_link1">Подробно</div>
				<a class="serv_link2" href="./out.php">Подробно</a>
			</div>
			<div class="grid_4 serv_block">
				<div class="icon_block3"></div>
				<p>Шины и Диски</p>
				<div class="text">Консультация при подборе шин и дисков</div>
				<div class="serv_link1">Подробно</div>
				<a class="serv_link2" href="./out.php">Подробно</a>
			</div>
			<div class="grid_4 serv_block omega">
				<div class="icon_block2"></div>
				<p>ШИНОМОНТАЖ</p>
				<div class="text">Полный спектр услуг по шиномонтажу</div>
				<div class="serv_link1">Подробно</div>
				<a class="serv_link2" href="./out.php">Подробно</a>
			</div>
		</div>

	</div>
</div>

<div class="slide" id="slide8" data-slide="8" data-stellar-background-ratio="0.5">
	<div class="container clearfix">

		<div class="grid_12">
			<h1><span>Контакты</span></h1>
		</div>
		<div class="clear"></div>

		<div class="grid_4">
			<h4>Напишите нам</h4>
			<div class="contact_form">
				<div id="note"></div>
				<div id="fields">
					<form id="ajax-contact-form" action="">
						<input type="text" name="name" value="" placeholder="Имя"/>
						<input type="text" name="phone" value="" placeholder="Телефон" />
						<input type="text" name="email" value="" placeholder="Email"/>
						<textarea name="message" id="message" placeholder="Сообщение"></textarea>
						<div class="clear"></div>
						<input type="reset" class="contact_btn" value="Очистить"/>
						<input type="submit" class="contact_btn send_btn" value="Отправить"/>
						<div class="clear"></div>
					</form>
				</div>
			</div>
		</div>
		<div class="grid_4 contact_det_block">
			<h4>Контакты</h4>
			<ul class="foot_block_intouch">
				<li class="touch_phone"><a href="tel:+79687557677">+7 (926) 926 5677</a></li>
				<li class="touch_phone"><a href="tel:+79154317686">+7 (495) 988 0636</a></li>
				<li class="touch_phone"><a href="tel:+79154317686">+7 (909) 981 6077</a></li>
				<li class="touch_clock"><p>ПН - ВС 08:00 - 20:00</p></li>
				<li class="touch_mail"><a href="mailto:info@sbrauto.ru">info@uruslana.ru</a></li>
				<li class="touch_adress"><p>г.Королев ул.Северная 4А</p></li>
				<!--li class="facebook"><a href="javascript:void(0);">http://facebook.com/companyname</a></li>
				<li class="twitter"><a href="javascript:void(0);">http://twitter.com/companyname</a></li-->
			</ul>
		</div>
		<div class="grid_4 omega">
			<h4>Информация</h4>
			<p>При движении из Москвы проследовать мимо съездов в г. Королёв. Повернуть направо перед эстакадой, предназначенной для разворота.</p>
			<p>При движении в Москву развернуться под эстакадой, которая идёт через Ж/Д.</p>
			<p>После поворота с Ярославского шоссе проехать большой крытый рынок до ворот и повернуть налево.</p>
			<p>Справа при въезде в ворота будет наш магазин.</p>
		</div>
		<div class="clear"></div>

	</div>

	<div id="map_block">
		<div class="map"><script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A2f10ff653e54c0e32e7afe96862d0327ec03af400cc7dae0ca34d9389be80076&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script></div>
	</div>

</div>


<div id="footer">
	<div class="container clearfix">
		<div class="copyright">uruslana &copy; <?php echo date('Y');?> | <a href="mailto:info@uruslana.ru">Напишите нам</a></div>
		<div id="back_top"><a class="button" title="" data-slide="1">Наверх</a></div>
	</div>
</div>


</body>
</html>
