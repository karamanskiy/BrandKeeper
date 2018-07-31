<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=480">
	<title>Brand Keeper</title>
	<meta property="og:image" content="for-social.jpg">
	<link rel="shortcut icon" href="img/fav.ico" type="image/x-icon">
	<link rel="apple-touch-icon-precomposed" href="img/fav.png">

	<script> 
	if (screen.width > 801) { 
		document.location = "../" + document.location.search;
	}
	</script>

<!-- 	<script>
		!function(e,t,n){function r(){for(;u[0]&&"loaded"==u[0][l];)o=u.shift(),o[f]=!a.parentNode.insertBefore(o,a)}for(var i,s,o,u=[],a=e.scripts[0],f="onreadystatechange",l="readyState";i=n.shift();)s=e.createElement(t),"async"in a?(s.async=!1,e.head.appendChild(s)):a[l]?(u.push(s),s[f]=r):e.write("<"+t+' src="'+i+'" defer></'+t+">"),s.src=i}(document,"script",
			["https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js",
			"js/init.js",
			"https://maps.googleapis.com/maps/api/js?key=AIzaSyAdzwz73OHrdVGjKVKow8ID8T31yNxiBSI",
			"js/map.js"])
	</script> -->

	<style>
		#map1 {
			width: 100%;
			height: 480px;
		}
		body {background-color: #A29AA9;}

		
		.cssload-container{width:72px;margin:58px auto;font-size:0;position:relative;transform-origin:50% 50%;-o-transform-origin:50% 50%;-ms-transform-origin:50% 50%;-webkit-transform-origin:50% 50%;-moz-transform-origin:50% 50%;animation:cssload-clockwise 3.9s linear infinite;-o-animation:cssload-clockwise 3.9s linear infinite;-ms-animation:cssload-clockwise 3.9s linear infinite;-webkit-animation:cssload-clockwise 3.9s linear infinite;-moz-animation:cssload-clockwise 3.9s linear infinite}.cssload-container:after,.cssload-container:before{position:absolute;height:39px;box-sizing:border-box;content:'';width:39px;top:0}.cssload-container:before{left:0;border:6px solid #e5e5e5;border-radius:100%;-o-border-radius:100%;-ms-border-radius:100%;-webkit-border-radius:100%;-moz-border-radius:100%;-o-box-sizing:border-box;-ms-box-sizing:border-box;-webkit-box-sizing:border-box;-moz-box-sizing:border-box}.cssload-container:after{z-index:-1;right:0;border:6px solid rgba(229,229,229,.98);border-radius:100%;-o-border-radius:100%;-ms-border-radius:100%;-webkit-border-radius:100%;-moz-border-radius:100%;-o-box-sizing:border-box;-ms-box-sizing:border-box;-webkit-box-sizing:border-box;-moz-box-sizing:border-box}.cssload-lb,.cssload-lt,.cssload-rb,.cssload-rt{position:relative;display:inline-block;overflow:hidden;width:39px;height:19px;opacity:1}.cssload-lb:before,.cssload-lt:before,.cssload-rb:before,.cssload-rt:before{position:absolute;content:'';width:39px;height:39px;border-top:6px solid #e75da0;border-right:6px solid transparent;border-bottom:6px solid transparent;border-left:6px solid transparent;border-radius:100%;-o-border-radius:100%;-ms-border-radius:100%;-webkit-border-radius:100%;-moz-border-radius:100%;box-sizing:border-box;-o-box-sizing:border-box;-ms-box-sizing:border-box;-webkit-box-sizing:border-box;-moz-box-sizing:border-box}.cssload-lt{margin-right:-6px;animation:cssload-lt 1.3s linear -1.3s infinite;-o-animation:cssload-lt 1.3s linear -1.3s infinite;-ms-animation:cssload-lt 1.3s linear -1.3s infinite;-webkit-animation:cssload-lt 1.3s linear -1.3s infinite;-moz-animation:cssload-lt 1.3s linear -1.3s infinite}.cssload-lt:before{top:0;left:0;animation:cssload-not-clockwise .65s linear infinite;-o-animation:cssload-not-clockwise .65s linear infinite;-ms-animation:cssload-not-clockwise .65s linear infinite;-webkit-animation:cssload-not-clockwise .65s linear infinite;-moz-animation:cssload-not-clockwise .65s linear infinite}.cssload-rt{animation:cssload-lt 1.3s linear -650ms infinite;-o-animation:cssload-lt 1.3s linear -650ms infinite;-ms-animation:cssload-lt 1.3s linear -650ms infinite;-webkit-animation:cssload-lt 1.3s linear -650ms infinite;-moz-animation:cssload-lt 1.3s linear -650ms infinite}.cssload-rt:before{top:0;right:0;animation:cssload-clockwise .65s linear infinite;-o-animation:cssload-clockwise .65s linear infinite;-ms-animation:cssload-clockwise .65s linear infinite;-webkit-animation:cssload-clockwise .65s linear infinite;-moz-animation:cssload-clockwise .65s linear infinite}.cssload-lb{margin-right:-6px;animation:cssload-lt 1.3s linear -975ms infinite;-o-animation:cssload-lt 1.3s linear -975ms infinite;-ms-animation:cssload-lt 1.3s linear -975ms infinite;-webkit-animation:cssload-lt 1.3s linear -975ms infinite;-moz-animation:cssload-lt 1.3s linear -975ms infinite}.cssload-lb:before{bottom:0;left:0;animation:cssload-not-clockwise .65s linear infinite;-o-animation:cssload-not-clockwise .65s linear infinite;-ms-animation:cssload-not-clockwise .65s linear infinite;-webkit-animation:cssload-not-clockwise .65s linear infinite;-moz-animation:cssload-not-clockwise .65s linear infinite}.cssload-rb{animation:cssload-lt 1.3s linear -325ms infinite;-o-animation:cssload-lt 1.3s linear -325ms infinite;-ms-animation:cssload-lt 1.3s linear -325ms infinite;-webkit-animation:cssload-lt 1.3s linear -325ms infinite;-moz-animation:cssload-lt 1.3s linear -325ms infinite}.cssload-rb:before{bottom:0;right:0;animation:cssload-clockwise .65s linear infinite;-o-animation:cssload-clockwise .65s linear infinite;-ms-animation:cssload-clockwise .65s linear infinite;-webkit-animation:cssload-clockwise .65s linear infinite;-moz-animation:cssload-clockwise .65s linear infinite}@keyframes cssload-clockwise{0%{transform:rotate(-45deg)}100%{transform:rotate(315deg)}}@-o-keyframes cssload-clockwise{0%{-o-transform:rotate(-45deg)}100%{-o-transform:rotate(315deg)}}@-ms-keyframes cssload-clockwise{0%{-ms-transform:rotate(-45deg)}100%{-ms-transform:rotate(315deg)}}@-webkit-keyframes cssload-clockwise{0%{-webkit-transform:rotate(-45deg)}100%{-webkit-transform:rotate(315deg)}}@-moz-keyframes cssload-clockwise{0%{-moz-transform:rotate(-45deg)}100%{-moz-transform:rotate(315deg)}}@keyframes cssload-not-clockwise{0%{transform:rotate(45deg)}100%{transform:rotate(-315deg)}}@-o-keyframes cssload-not-clockwise{0%{-o-transform:rotate(45deg)}100%{-o-transform:rotate(-315deg)}}@-ms-keyframes cssload-not-clockwise{0%{-ms-transform:rotate(45deg)}100%{-ms-transform:rotate(-315deg)}}@-webkit-keyframes cssload-not-clockwise{0%{-webkit-transform:rotate(45deg)}100%{-webkit-transform:rotate(-315deg)}}@-moz-keyframes cssload-not-clockwise{0%{-moz-transform:rotate(45deg)}100%{-moz-transform:rotate(-315deg)}}@keyframes cssload-lt{0%,100%,25%,76%{opacity:1}26%,75%{opacity:0}}@-o-keyframes cssload-lt{0%,100%,25%,76%{opacity:1}26%,75%{opacity:0}}@-ms-keyframes cssload-lt{0%,100%,25%,76%{opacity:1}26%,75%{opacity:0}}@-webkit-keyframes cssload-lt{0%,100%,25%,76%{opacity:1}26%,75%{opacity:0}}@-moz-keyframes cssload-lt{0%,100%,25%,76%{opacity:1}26%,75%{opacity:0}}

		.pre-loader{position:fixed;top:0;left:0;right:0;bottom:0;width:100%;height:100%;z-index:1000000;background-color:#fff;transition:transform .6s}.cssload-container{top:40%}body.pre-loaded .pre-loader{transform:translate3d(0,-100%,0)}
	</style>
	<script type="text/javascript" src="//vk.com/js/api/openapi.js?150"></script>

</head>
<body>
	<!--[if lte IE 9]>
	    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->


	<div class="pre-loader">
		<div class="cssload-container">
			<div class="cssload-lt"></div>
			<div class="cssload-rt"></div>
			<div class="cssload-lb"></div>
			<div class="cssload-rb"></div>
		</div>
	</div>


	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = 'https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.10&appId=134257727180060';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<div class="hamb-menu"></div>
	<div class="mob-menu">
		<div class="close-btn"></div>
		<ul>
			<li><a href="#s1">Главная</a></li>
			<li><a href="#s2">Фотографии нашей работы</a></li>
			<li><a href="#s4">Как происходит процесс</a></li>
			<li><a href="#s5">Online калькулятор</a></li>
			<li><a href="#s6">Фото с Instagram</a></li>
			<li><a href="#s7">Наши контакты</a></li>
			<li><a href="#s9">Подписаться</a></li>
		</ul>
	</div>

	<section class="s1" id="s1">
		<div class="container">
			<div class="header">
				<div class="logo-wrap"><img src="img/main-logo.png" alt="logo"></div>
			</div>

			<div class="content">
				<h1>Реставрируем и <br>красим кожанную одежду, сумки, обувь, мебель и салоны автомобилей</h1>
				<h2>Востанавливаем каблучки на туфелях, <br> ручки на сумках, обновляем цвет, <br> устраняем потертости и зацепы</h2>
				<div class="horiz-line"></div>
				<div class="podpis">Пришлите <br> фото повреждения и <br>узнайте цену за 5 минут</div>
				<button class="big-btn send-photo"><span class="photo-icon"></span>Отправить фото</button>
				<!-- <a href="#s2" class="scroll-icon"></a> -->
			</div>
		</div>
	</section>

	<section class="s2" id="s2">
		<div class="container">
			<h2>Посмотрите фотографии <br>отреставрированных <br> нами вещей <br><span class="blue">и почувствуйте <br> разницу</span></h2>
			<div class="wrap-items s2-slider">
				<div class="it it1 open-sldr-modal garderob">
					<div class="name">Предметы гардероба</div>
					<!-- <div class="count">75 шт.</div> -->
					<div class="small-btn   ">Смотреть фото</div>
				</div>
				<div class="it it2 open-sldr-modal automob">
					<div class="name">Салоны автомобилей</div>
					<!-- <div class="count">200 шт.</div> -->
					<div class="small-btn ">Смотреть фото</div>
				</div>
				<div class="it it3 open-sldr-modal sumki">
					<div class="name">Сумки</div>
					<!-- <div class="count">280 шт.</div> -->
					<div class="small-btn  ">Смотреть фото</div>
				</div>
				<div class="it it4 open-sldr-modal mebel">
					<div class="name">Мебель</div>
					<!-- <div class="count">200 шт.</div> -->
					<div class="small-btn  ">Смотреть фото</div>
				</div>
				<div class="it it5 open-sldr-modal garderob">
					<div class="name">Разное</div>
					<!-- <div class="count">280 шт.</div> -->
					<div class="small-btn  ">Смотреть фото</div>
				</div>
				<div class="it it6 open-sldr-modal obuv">
					<div class="name">Обувь</div>
					<!-- <div class="count">180 шт.</div> -->
					<div class="small-btn  ">Смотреть фото</div>
				</div>
			</div>

		</div>
	</section>

	<section class="s3" id="s3">
		<div class="container">
			<h2>Пришлите фото <br> повреждения <br> <span class="n1">в WhatsApp, Telegram или Viber на номер</span> <br>и узнайте цену <span class="blue">за 5 минут</span></h2>
			<p class="n2">Кликните по кнопке</p>
			<div class="wrap-soc">
				<a href="https://api.whatsapp.com/send?phone=89167263838 " class="whatsapp" target="_blank"><img src="img/whatsapp.png" alt="social"></a>
				<a href="viber://chat?number=+79167263838 " class="viber"><img src="img/viber.png" alt="social"></a>
				<a href="tg://resolve?domain=BrandKeeper" class="telegram"><img src="img/telega.png" alt="social"></a>
			</div>
			<p class="n2">Или введите номер телефона вручную</p>
			<a href="tel:+79167263838 " class="tel">+7 916 726-38-38</a>
		</div>
		<div class="brands-wrap">
			<h2>с 2009 года мы отреставрировали <br>более 1000 брендовых <br> из кожи</h2>
			<h3>Бренды с которыми мы уже работали</h3>
			<div class="wrap-brand-slider">
				<div class="brand-slider">
					<div class="slide">
						<div class="wrap-img"><img src="img/brands/b16.png" alt="sl081"></div>
						<div class="wrap-img"><img src="img/brands/b2.png" alt="sl16702"></div>
					</div>
					<div class="slide">
						<div class="wrap-img"><img src="img/brands/b3.png" alt="sl6701"></div>
						<div class="wrap-img"><img src="img/brands/b4.png" alt="sl6712"></div>
					</div>
					<div class="slide">
						<div class="wrap-img"><img src="img/brands/b5.png" alt="sl01"></div>
						<div class="wrap-img"><img src="img/brands/b6.png" alt="sl07612"></div>
					</div>
					<div class="slide">
						<div class="wrap-img"><img src="img/brands/b15.png" alt="sl601"></div>
						<div class="wrap-img"><img src="img/brands/b8.png" alt="sl1672"></div>
					</div>
					<div class="slide">
						<div class="wrap-img"><img src="img/brands/b9.png" alt="sl961"></div>
						<div class="wrap-img"><img src="img/brands/b10.png" alt="s6786712"></div>
					</div>
					<div class="slide">
						<div class="wrap-img"><img src="img/brands/b11.png" alt="sl8901"></div>
						<div class="wrap-img"><img src="img/brands/b12.png" alt="sl1882"></div>
					</div>
					<div class="slide">
						<div class="wrap-img"><img src="img/brands/b13.png" alt="sl01"></div>
						<div class="wrap-img"><img src="img/brands/b14.png" alt="sl10982"></div>
					</div>
					<div class="slide">
						<div class="wrap-img"><img src="img/brands/b17.png" alt="sl187"></div>
						<div class="wrap-img"><img src="img/brands/b18.png" alt="sl1152"></div>
					</div>
					<div class="slide">
						<div class="wrap-img"><img src="img/brands/b19.png" alt="sl1"></div>
						<div class="wrap-img"><img src="img/brands/b20.png" alt="sl12"></div>
					</div>
					<div class="slide">
						<div class="wrap-img"><img src="img/brands/b21.png" alt="sl3251"></div>
						<div class="wrap-img"><img src="img/brands/b22.png" alt="sl1112"></div>
					</div>
					<div class="slide">
						<div class="wrap-img"><img src="img/brands/b23.png" alt="sl341"></div>
						<div class="wrap-img"><img src="img/brands/b24.png" alt="sl16562"></div>
					</div>
					<div class="slide">
						<div class="wrap-img"><img src="img/brands/b25.png" alt="sl561"></div>
						<div class="wrap-img"><img src="img/brands/b26.png" alt="sl1452"></div>
					</div>
					<div class="slide">
						<div class="wrap-img"><img src="img/brands/b27.png" alt="sl137"></div>
						<div class="wrap-img"><img src="img/brands/b28.png" alt="sl1152"></div>
					</div>
					<div class="slide">
						<div class="wrap-img"><img src="img/brands/b29.png" alt="sl3471"></div>
						<div class="wrap-img"><img src="img/brands/b30.png" alt="sl1242"></div>
					</div>
					<div class="slide">
						<div class="wrap-img"><img src="img/brands/b31.png" alt="sl12323"></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="s4" id="s4">
		<div class="container">
			<h2>Посмотрите как мы <br> реставрируем вещи</h2>
			<div class="punkts s4-slider">
				<div class="item">
					<div class="chislo">1</div>
					<p>Очистим поверхность <br>от загрязнений</p>
				</div>
				<div class="item">
					<div class="chislo">2</div>
					<p>Сохраняем текстуру <br>кожи</p>
				</div>
				<div class="item">
					<div class="chislo">3</div>
					<p>Подбираем цвет <br>1 в 1</p>
				</div>
				<div class="item">
					<div class="chislo">4</div>
					<p>Наносим защитную <br>пропитку</p>
				</div>
			</div>
			<div class="play-video"></div>
			<p class="under-btn">Посмотрите, как мы работаем</p>
			<div class="bottom-blue">
				Гарантия <br>6 месяцев
			</div>
		</div>
	</section>

	<section class="s5" id="s5">
		<div class="container">
			<h2>Ответьте на <br>3 вопроса  и узнайте <br>ориентировочную цену <br>работ</h2>
	
			<form class="wrap-stepform">
					<!-- НАЧАЛО 1-ГО ШАГА -->
					<div id="first-step">
						<p class="numb-questn">1/3 вопросов</p>
						<h2>Что будем реставрировать?</h2>
						<div class="wrap-items">
							<div class="item">
								<div class="wrap-radio">
									<input value="Обувь" type="radio" class="step-radio" id="rd1" name="step1" />
									<label for="rd1">
										<span class="blue-bg"></span>
										<span class="wrap-img"><img src="img/stepForm/first1.png" alt="st"></span>
										Обувь
									</label>
								</div>
							</div>
							<div class="item">
								<div class="wrap-radio">
									<input value="Сумка" type="radio" class="step-radio" id="rd2" name="step1" />
									<label for="rd2">
										<span class="blue-bg"></span>
										<span class="wrap-img"><img src="img/stepForm/first2.png" alt="st2"></span>
										Сумка
									</label>
								</div>
							</div>
							<div class="item">
								<div class="wrap-radio">
									<input value="Одежда" type="radio" class="step-radio" id="rd3" name="step1" />
									<label for="rd3">
										<span class="blue-bg"></span>
										<span class="wrap-img"><img src="img/stepForm/first3.png" alt="st3"></span>
										Одежда
									</label>
								</div>
							</div>
							<div class="item">
								<div class="wrap-radio">
									<input value="Мебель" type="radio" class="step-radio" id="rd4" name="step1" />
									<label for="rd4">
										<span class="blue-bg"></span>
										<span class="wrap-img"><img src="img/stepForm/first4.png" alt="st4"></span>
										Мебель
									</label>
								</div>
							</div>
							<div class="item">
								<div class="wrap-radio">
									<input value="Салон автомобиля" type="radio" class="step-radio" id="rd5" name="step1" />
									<label for="rd5">
										<span class="blue-bg"></span>
										<span class="wrap-img"><img src="img/stepForm/first5.png" alt="st5"></span>
										Салон автомобиля
									</label>
								</div>
							</div>
							<div class="item">
								<div class="wrap-radio">
									<input value="Другое" type="radio" class="step-radio" id="rd6" name="step1" />
									<label for="rd6">
										<span class="blue-bg"></span>
										<span class="wrap-img"><img src="img/stepForm/first6.png" alt="st6"></span>
										Другое
									</label>
								</div>
							</div>
			
						</div>
						<button class="first-step-next big-btn not-active">Далее</button>
					</div> <!-- КОНЕЦ 1-ГО ШАГА -->
			
					<!-- НАЧАЛО 2-ГО ШАГА -->
					<div id="second-step">
						<div class="obuv-second display-none">
							<p class="numb-questn">2/3 вопросов</p>
							<h2>Выберите тип изделия</h2>
							<div class="wrap-items">
								<div class="item">
									<div class="wrap-radio">
										<input value="Ботильоны" type="radio" class="step-radio" id="rd2-1" name="step2" />
										<label for="rd2-1">
											<span class="blue-bg"></span>
											<span class="wrap-img"><img src="img/stepForm/sec2-1.png" alt="st12"></span>
											Ботильоны
										</label>
									</div>
								</div>
								<div class="item">
									<div class="wrap-radio">
										<input value="Сапоги" type="radio" class="step-radio" id="rd2-2" name="step2" />
										<label for="rd2-2">
											<span class="blue-bg"></span>
											<span class="wrap-img"><img src="img/stepForm/sapogi.png" alt="st12"></span>
											Сапоги
										</label>
									</div>
								</div>
								<div class="item">
									<div class="wrap-radio">
										<input value="Летняя обувь" type="radio" class="step-radio" id="rd2-3" name="step2" />
										<label for="rd2-3">
											<span class="blue-bg"></span>
											<span class="wrap-img"><img src="img/stepForm/sec2-3.png" alt="st12"></span>
											Летняя обувь
										</label>
									</div>
								</div>
								<div class="item">
									<div class="wrap-radio">
										<input value="Кроссовки" type="radio" class="step-radio" id="rd2-4" name="step2" />
										<label for="rd2-4">
											<span class="blue-bg"></span>
											<span class="wrap-img"><img src="img/stepForm/sec2-4.png" alt="st12"></span>
											Кроссовки
										</label>
									</div>
								</div>
								<div class="item">
									<div class="wrap-radio">
										<input value="Ботинки" type="radio" class="step-radio" id="rd2-5" name="step2" />
										<label for="rd2-5">
											<span class="blue-bg"></span>
											<span class="wrap-img"><img src="img/stepForm/sec2-5.png" alt="st12"></span>
											Ботинки
										</label>
									</div>
								</div>
								<div class="item">
									<div class="wrap-radio">
										<input value="Туфли" type="radio" class="step-radio" id="rd2-6" name="step2" />
										<label for="rd2-6">
											<span class="blue-bg"></span>
											<span class="wrap-img"><img src="img/stepForm/tufli.png" alt="st12"></span>
											Туфли
										</label>
									</div>
								</div>
							</div>
							<button class="obuv-second-btn second-step-next big-btn not-active">Далее</button>
							<div class="wrap-back-btn"><p class="second-back">&lt;&nbsp;Назад</p></div>
						</div>
						<div class="sumka-second display-none">
							<p class="numb-questn">2/3 вопросов</p>
							<h2>Выберите тип изделия</h2>
							<div class="wrap-items">
								<div class="item">
									<div class="wrap-radio">
										<input value="Портфель" type="radio" class="step-radio" id="rd2-2-1" name="step2" />
										<label for="rd2-2-1">
											<span class="blue-bg"></span>
											<span class="wrap-img"><img src="img/stepForm/portfel.png" alt="st"></span>
											Портфель
										</label>
									</div>
								</div>
								<div class="item">
									<div class="wrap-radio">
										<input value="Рюкзак" type="radio" class="step-radio" id="rd2-2-2" name="step2" />
										<label for="rd2-2-2">
											<span class="blue-bg"></span>
											<span class="wrap-img"><img src="img/stepForm/rukzak.png" alt="st"></span>
											Рюкзак
										</label>
									</div>
								</div>
								<div class="item">
									<div class="wrap-radio">
										<input value="Клатч" type="radio" class="step-radio" id="rd2-2-3" name="step2" />
										<label for="rd2-2-3">
											<span class="blue-bg"></span>
											<span class="wrap-img"><img src="img/stepForm/klatch.png" alt="st"></span>
											Клатч
										</label>
									</div>
								</div>
								<div class="item">
									<div class="wrap-radio">
										<input value="Сумка" type="radio" class="step-radio" id="rd2-2-4" name="step2" />
										<label for="rd2-2-4">
											<span class="blue-bg"></span>
											<span class="wrap-img"><img src="img/stepForm/first2.png" alt="st"></span>
											Сумка
										</label>
									</div>
								</div>
								<div class="item">
									<div class="wrap-radio">
										<input value="Дипломат" type="radio" class="step-radio" id="rd2-2-5" name="step2" />
										<label for="rd2-2-5">
											<span class="blue-bg"></span>
											<span class="wrap-img"><img src="img/stepForm/diplomat.png" alt="st"></span>
											Дипломат
										</label>
									</div>
								</div>
							</div>
							<button class="sumka-second-btn second-step-next big-btn not-active">Далее</button>
							<div class="wrap-back-btn"><p class="second-back">&lt;&nbsp;Назад</p></div>
						</div>
						<div class="odejda-second display-none">
							<p class="numb-questn">2/3 вопросов</p>
							<h2>Выберите тип изделия</h2>
							<div class="wrap-items">
								<div class="item">
									<div class="wrap-radio">
										<input value="Куртка" type="radio" class="step-radio" id="rd2-3-1" name="step2" />
										<label for="rd2-3-1">
											<span class="blue-bg"></span>
											<span class="wrap-img"><img src="img/stepForm/first3.png" alt="st"></span>
											Куртка
										</label>
									</div>
								</div>
								<div class="item">
									<div class="wrap-radio">
										<input value="Плащ" type="radio" class="step-radio" id="rd2-3-2" name="step2" />
										<label for="rd2-3-2">
											<span class="blue-bg"></span>
											<span class="wrap-img"><img src="img/stepForm/plasch.png" alt="st"></span>
											Плащ
										</label>
									</div>
								</div>
								<div class="item">
									<div class="wrap-radio">
										<input value="Пальто" type="radio" class="step-radio" id="rd2-3-3" name="step2" />
										<label for="rd2-3-3">
											<span class="blue-bg"></span>
											<span class="wrap-img"><img src="img/stepForm/palto.png" alt="st"></span>
											Пальто
										</label>
									</div>
								</div>
								<div class="item">
									<div class="wrap-radio">
										<input value="Пуховик" type="radio" class="step-radio" id="rd2-3-4" name="step2" />
										<label for="rd2-3-4">
											<span class="blue-bg"></span>
											<span class="wrap-img"><img src="img/stepForm/puhovik.png" alt="st"></span>
											Пуховик
										</label>
									</div>
								</div>
								<div class="item">
									<div class="wrap-radio">
										<input value="Дубленка" type="radio" class="step-radio" id="rd2-3-5" name="step2" />
										<label for="rd2-3-5">
											<span class="blue-bg"></span>
											<span class="wrap-img"><img src="img/stepForm/dublenka.png" alt="st"></span>
											Дубленка
										</label>
									</div>
								</div>
								<div class="item">
									<div class="wrap-radio">
										<input value="Штаны" type="radio" class="step-radio" id="rd2-3-6" name="step2" />
										<label for="rd2-3-6">
											<span class="blue-bg"></span>
											<span class="wrap-img"><img src="img/stepForm/shtani.png" alt="st"></span>
											Штаны
										</label>
									</div>
								</div>
							</div>
							<button class="odejda-second-btn second-step-next big-btn not-active">Далее</button>
							<div class="wrap-back-btn"><p class="second-back">&lt;&nbsp;Назад</p></div>
						</div>
						<div class="mebel-second display-none">
							<p class="numb-questn">2/3 вопросов</p>
							<h2>Выберите тип изделия</h2>
							<div class="wrap-items">
								<div class="item">
									<div class="wrap-radio">
										<input value="Диван" type="radio" class="step-radio" id="rd2-4-1" name="step2" />
										<label for="rd2-4-1">
											<span class="blue-bg"></span>
											<span class="wrap-img"><img src="img/stepForm/divan.png" alt="st"></span>
											Диван
										</label>
									</div>
								</div>
								<div class="item">
									<div class="wrap-radio">
										<input value="Кресло" type="radio" class="step-radio" id="rd2-4-2" name="step2" />
										<label for="rd2-4-2">
											<span class="blue-bg"></span>
											<span class="wrap-img"><img src="img/stepForm/first4.png" alt="st"></span>
											Кресло
										</label>
									</div>
								</div>
								<div class="item">
									<div class="wrap-radio">
										<input value="Стул" type="radio" class="step-radio" id="rd2-4-3" name="step2" />
										<label for="rd2-4-3">
											<span class="blue-bg"></span>
											<span class="wrap-img"><img src="img/stepForm/stul.png" alt="st"></span>
											Стул
										</label>
									</div>
								</div>
								<div class="item">
									<div class="wrap-radio">
										<input value="Стол" type="radio" class="step-radio" id="rd2-4-4" name="step2" />
										<label for="rd2-4-4">
											<span class="blue-bg"></span>
											<span class="wrap-img"><img src="img/stepForm/stol.png" alt="st"></span>
											Стол
										</label>
									</div>
								</div>
								<div class="item">
									<div class="wrap-radio">
										<input value="Пуфы" type="radio" class="step-radio" id="rd2-4-5" name="step2" />
										<label for="rd2-4-5">
											<span class="blue-bg"></span>
											<span class="wrap-img"><img src="img/stepForm/puf.png" alt="st"></span>
											Пуфы
										</label>
									</div>
								</div>
								<div class="item">
									<div class="wrap-radio">
										<input value="Офисное кресло" type="radio" class="step-radio" id="rd2-4-6" name="step2" />
										<label for="rd2-4-6">
											<span class="blue-bg"></span>
											<span class="wrap-img"><img src="img/stepForm/ofice-kreslo.png" alt="st"></span>
											Офисное кресло
										</label>
									</div>
								</div>
							</div>
							<button class="mebel-second-btn second-step-next big-btn not-active">Далее</button>
							<div class="wrap-back-btn"><p class="second-back">&lt;&nbsp;Назад</p></div>
						</div>
						<div class="salon-second display-none">
							<p class="numb-questn">2/3 вопросов</p>
							<h2>Выберите тип изделия</h2>
							<div class="wrap-items">
								<div class="item">
									<div class="wrap-radio">
										<input value="Сиденье" type="radio" class="step-radio" id="rd2-5-1" name="step2" />
										<label for="rd2-5-1">
											<span class="blue-bg"></span>
											<span class="wrap-img"><img src="img/stepForm/sidenie.png" alt="st"></span>
											Сиденье
										</label>
									</div>
								</div>
								<div class="item">
									<div class="wrap-radio">
										<input value="Рулевое колесо" type="radio" class="step-radio" id="rd2-5-2" name="step2" />
										<label for="rd2-5-2">
											<span class="blue-bg"></span>
											<span class="wrap-img"><img src="img/stepForm/first5.png" alt="st"></span>
											Рулевое колесо
										</label>
									</div>
								</div>
								<div class="item">
									<div class="wrap-radio">
										<input value="Ручка КПП" type="radio" class="step-radio" id="rd2-5-3" name="step2" />
										<label for="rd2-5-3">
											<span class="blue-bg"></span>
											<span class="wrap-img"><img src="img/stepForm/ruchka-kpp.png" alt="st"></span>
											Ручка КПП
										</label>
									</div>
								</div>
							</div>
							<button class="salon-second-btn second-step-next big-btn not-active">Далее</button>
							<div class="wrap-back-btn"><p class="second-back">&lt;&nbsp;Назад</p></div>
						</div>
						<div class="drugoe-second display-none">
							<p class="numb-questn">2/3 вопросов</p>
							<h2>Выберите тип изделия</h2>
							<div class="wrap-items">
								<div class="item">
									<div class="wrap-radio">
										<input value="Перчатки" type="radio" class="step-radio" id="rd2-6-1" name="step2" />
										<label for="rd2-6-1">
											<span class="blue-bg"></span>
											<span class="wrap-img"><img src="img/stepForm/perchatki.png" alt="st"></span>
											Перчатки
										</label>
									</div>
								</div>
								<div class="item">
									<div class="wrap-radio">
										<input value="Портмоне" type="radio" class="step-radio" id="rd2-6-2" name="step2" />
										<label for="rd2-6-2">
											<span class="blue-bg"></span>
											<span class="wrap-img"><img src="img/stepForm/portmone.png" alt="st"></span>
											Портмоне
										</label>
									</div>
								</div>
								<div class="item">
									<div class="wrap-radio">
										<input value="Ремень" type="radio" class="step-radio" id="rd2-6-3" name="step2" />
										<label for="rd2-6-3">
											<span class="blue-bg"></span>
											<span class="wrap-img"><img src="img/stepForm/first6.png" alt="st"></span>
											Ремень
										</label>
									</div>
								</div>
							</div>
							<button class="drugoe-second-btn second-step-next big-btn not-active">Далее</button>
							<div class="wrap-back-btn"><p class="second-back">&lt;&nbsp;Назад</p></div>
						</div>
					</div> <!-- КОНЕЦ 2-ГО ШАГА -->
			
					<!-- НАЧАЛО 3-ГО ШАГА -->
					<div id="third-step">
						<div class="obuv-third display-none">
							<p class="numb-questn">3/3 вопросов</p>
							<h2>Укажите тип повреждения</h2>
							<div class="wrap-items">
								<div class="item">
									<div class="wrap-radio only-text">
										<input value="Полное обновление цвета (потёртости)" type="radio" class="step-radio" id="rd3-1" name="step3" />
										<label for="rd3-1">
											<span class="blue-bg"></span>
											<!-- <span class="wrap-img"><img src="img/stepForm/misok.png" alt="st"></span> -->
											<span class="item-text">Полное обновление <br> цвета (потёртости)</span>
										</label>
									</div>
								</div>
								<div class="item">
									<div class="wrap-radio only-text">
										<input value="Царапина, задир" type="radio" class="step-radio" id="rd3-2" name="step3" />
										<label for="rd3-2">
											<span class="blue-bg"></span>
											<!-- <span class="wrap-img"><img src="img/stepForm/carapina.png" alt="st"></span> -->
											<span class="item-text">Царапина, задир</span>
										</label>
									</div>
								</div>
								<div class="item">
									<div class="wrap-radio only-text">
										<input value="Замена цвета" type="radio" class="step-radio" id="rd3-3" name="step3" />
										<label for="rd3-3">
											<span class="blue-bg"></span>
											<!-- <span class="wrap-img"><img src="img/stepForm/kabluk.png" alt="st"></span> -->
											<span class="item-text">Замена цвета</span>
										</label>
									</div>
								</div>
								<div class="item">
									<div class="wrap-radio only-text">
										<input value="Набойки" type="radio" class="step-radio" id="rd3-4" name="step3" />
										<label for="rd3-4">
											<span class="blue-bg"></span>
											<!-- <span class="wrap-img"><img src="img/stepForm/kabluk.png" alt="st"></span> -->
											<span class="item-text">Набойки</span>
										</label>
									</div>
								</div>
								<div class="item">
									<div class="wrap-radio only-text">
										<input value="Химчистка" type="radio" class="step-radio" id="rd3-5" name="step3" />
										<label for="rd3-5">
											<span class="blue-bg"></span>
											<!-- <span class="wrap-img"><img src="img/stepForm/kabluk.png" alt="st"></span> -->
											<span class="item-text">Химчистка</span>
										</label>
									</div>
								</div>
							</div>
							<button class="third-step-next big-btn not-active">Далее</button>
							<div class="wrap-back-btn"><p class="third-back">&lt;&nbsp;Назад</p></div>
						</div>
						<div class="sumka-third display-none">
							<p class="numb-questn">3/3 вопросов</p>
							<h2>Укажите тип повреждения</h2>
							<div class="wrap-items">
								<div class="item">
									<div class="wrap-radio only-text">
										<input value="Царапина, задир" type="radio" class="step-radio" id="rd3-2-1" name="step3" />
										<label for="rd3-2-1">
											<span class="blue-bg"></span>
											<!-- <span class="wrap-img"><img src="img/stepForm/misok.png" alt="st"></span> -->
											<span class="item-text">Царапина, задир</span>
										</label>
									</div>
								</div>
								<div class="item">
									<div class="wrap-radio only-text">
										<input value="Полное обновление цвета (потертости)" type="radio" class="step-radio" id="rd3-2-2" name="step3" />
										<label for="rd3-2-2">
											<span class="blue-bg"></span>
											<!-- <span class="wrap-img"><img src="img/stepForm/misok.png" alt="st"></span> -->
											<span class="item-text">Полное обновление <br> цвета (потертости)</span>
										</label>
									</div>
								</div>
								<div class="item">
									<div class="wrap-radio only-text">
										<input value="Замена цвета" type="radio" class="step-radio" id="rd3-2-3" name="step3" />
										<label for="rd3-2-3">
											<span class="blue-bg"></span>
											<!-- <span class="wrap-img"><img src="img/stepForm/misok.png" alt="st"></span> -->
											<span class="item-text">Замена цвета</span>
										</label>
									</div>
								</div>
								<div class="item">
									<div class="wrap-radio only-text">
										<input value="Восстановить канты" type="radio" class="step-radio" id="rd3-2-4" name="step3" />
										<label for="rd3-2-4">
											<span class="blue-bg"></span>
											<!-- <span class="wrap-img"><img src="img/stepForm/misok.png" alt="st"></span> -->
											<span class="item-text">Восстановить канты</span>
										</label>
									</div>
								</div>
								<div class="item">
									<div class="wrap-radio only-text">
										<input value="Замена ручек" type="radio" class="step-radio" id="rd3-2-5" name="step3" />
										<label for="rd3-2-5">
											<span class="blue-bg"></span>
											<!-- <span class="wrap-img"><img src="img/stepForm/misok.png" alt="st"></span> -->
											<span class="item-text">Замена ручек</span>
										</label>
									</div>
								</div>
								<div class="item">
									<div class="wrap-radio only-text">
										<input value="Химчистка" type="radio" class="step-radio" id="rd3-2-6" name="step3" />
										<label for="rd3-2-6">
											<span class="blue-bg"></span>
											<!-- <span class="wrap-img"><img src="img/stepForm/misok.png" alt="st"></span> -->
											<span class="item-text">Химчистка</span>
										</label>
									</div>
								</div>
							</div>
							<button class="third-step-next big-btn not-active">Далее</button>
							<div class="wrap-back-btn"><p class="third-back">&lt;&nbsp;Назад</p></div>
						</div>
						<div class="odejda-third display-none">
							<p class="numb-questn">3/3 вопросов</p>
							<h2>Укажите тип повреждения</h2>
							<div class="wrap-items">
								<div class="item">
									<div class="wrap-radio only-text">
										<input value="Царапина, задир" type="radio" class="step-radio" id="rd3-3-1" name="step3" />
										<label for="rd3-3-1">
											<span class="blue-bg"></span>
											<!-- <span class="wrap-img"><img src="img/stepForm/misok.png" alt="st"></span> -->
											<span class="item-text">Царапина, задир</span>
										</label>
									</div>
								</div>
								<div class="item">
									<div class="wrap-radio only-text">
										<input value="Полное обновление цвета (потертости)" type="radio" class="step-radio" id="rd3-3-2" name="step3" />
										<label for="rd3-3-2">
											<span class="blue-bg"></span>
											<!-- <span class="wrap-img"><img src="img/stepForm/misok.png" alt="st"></span> -->
											<span class="item-text">Полное обновление <br> цвета (потертости)</span>
										</label>
									</div>
								</div>
								<div class="item">
									<div class="wrap-radio only-text">
										<input value="Замена цвета" type="radio" class="step-radio" id="rd3-3-3" name="step3" />
										<label for="rd3-3-3">
											<span class="blue-bg"></span>
											<!-- <span class="wrap-img"><img src="img/stepForm/misok.png" alt="st"></span> -->
											<span class="item-text">Замена цвета</span>
										</label>
									</div>
								</div>
								<div class="item">
									<div class="wrap-radio only-text">
										<input value="Химчистка" type="radio" class="step-radio" id="rd3-3-4" name="step3" />
										<label for="rd3-3-4">
											<span class="blue-bg"></span>
											<!-- <span class="wrap-img"><img src="img/stepForm/misok.png" alt="st"></span> -->
											<span class="item-text">Химчистка</span>
										</label>
									</div>
								</div>
								<div class="item">
									<div class="wrap-radio only-text">
										<input value="Порыв перфорации" type="radio" class="step-radio" id="rd3-3-5" name="step3" />
										<label for="rd3-3-5">
											<span class="blue-bg"></span>
											<!-- <span class="wrap-img"><img src="img/stepForm/misok.png" alt="st"></span> -->
											<span class="item-text">Порыв перфорации</span>
										</label>
									</div>
								</div>
							</div>
							<button class="third-step-next big-btn not-active">Далее</button>
							<div class="wrap-back-btn"><p class="third-back">&lt;&nbsp;Назад</p></div>
						</div>
						<div class="mebel-third display-none">
							<p class="numb-questn">3/3 вопросов</p>
							<h2>Укажите тип повреждения</h2>
							<div class="wrap-items">
								<div class="item">
									<div class="wrap-radio only-text">
										<input value="Царапина, задир" type="radio" class="step-radio" id="rd3-4-1" name="step3" />
										<label for="rd3-4-1">
											<span class="blue-bg"></span>
											<!-- <span class="wrap-img"><img src="img/stepForm/misok.png" alt="st"></span> -->
											<span class="item-text">Царапина, задир</span>
										</label>
									</div>
								</div>
								<div class="item">
									<div class="wrap-radio only-text">
										<input value="Полное обновление цвета (потертости)" type="radio" class="step-radio" id="rd3-4-2" name="step3" />
										<label for="rd3-4-2">
											<span class="blue-bg"></span>
											<!-- <span class="wrap-img"><img src="img/stepForm/misok.png" alt="st"></span> -->
											<span class="item-text">Полное обновление <br> цвета (потертости)</span>
										</label>
									</div>
								</div>
								<div class="item">
									<div class="wrap-radio only-text">
										<input value="Замена цвета" type="radio" class="step-radio" id="rd3-4-3" name="step3" />
										<label for="rd3-4-3">
											<span class="blue-bg"></span>
											<!-- <span class="wrap-img"><img src="img/stepForm/misok.png" alt="st"></span> -->
											<span class="item-text">Замена цвета</span>
										</label>
									</div>
								</div>
								<div class="item">
									<div class="wrap-radio only-text">
										<input value="Прожог" type="radio" class="step-radio" id="rd3-4-4" name="step3" />
										<label for="rd3-4-4">
											<span class="blue-bg"></span>
											<!-- <span class="wrap-img"><img src="img/stepForm/misok.png" alt="st"></span> -->
											<span class="item-text">Прожог</span>
										</label>
									</div>
								</div>
								<div class="item">
									<div class="wrap-radio only-text">
										<input value="Химчистка" type="radio" class="step-radio" id="rd3-4-5" name="step3" />
										<label for="rd3-4-5">
											<span class="blue-bg"></span>
											<!-- <span class="wrap-img"><img src="img/stepForm/misok.png" alt="st"></span> -->
											<span class="item-text">Химчистка</span>
										</label>
									</div>
								</div>
							</div>
							<button class="third-step-next big-btn not-active">Далее</button>
							<div class="wrap-back-btn"><p class="third-back">&lt;&nbsp;Назад</p></div>
						</div>
						<div class="salon-third display-none">
							<p class="numb-questn">3/3 вопросов</p>
							<h2>Укажите тип повреждения</h2>
							<div class="wrap-items">
								<div class="item">
									<div class="wrap-radio only-text">
										<input value="Царапина, задир" type="radio" class="step-radio" id="rd3-5-1" name="step3" />
										<label for="rd3-5-1">
											<span class="blue-bg"></span>
											<!-- <span class="wrap-img"><img src="img/stepForm/misok.png" alt="st"></span> -->
											<span class="item-text">Царапина, задир</span>
										</label>
									</div>
								</div>
								<div class="item">
									<div class="wrap-radio only-text">
										<input value="Полное обновление цвета (потертости)" type="radio" class="step-radio" id="rd3-5-2" name="step3" />
										<label for="rd3-5-2">
											<span class="blue-bg"></span>
											<!-- <span class="wrap-img"><img src="img/stepForm/misok.png" alt="st"></span> -->
											<span class="item-text">Полное обновление цвета (потертости)</span>
										</label>
									</div>
								</div>
								<div class="item">
									<div class="wrap-radio only-text">
										<input value="Прожог" type="radio" class="step-radio" id="rd3-5-3" name="step3" />
										<label for="rd3-5-3">
											<span class="blue-bg"></span>
											<!-- <span class="wrap-img"><img src="img/stepForm/misok.png" alt="st"></span> -->
											<span class="item-text">Прожог</span>
										</label>
									</div>
								</div>
							</div>
							<button class="third-step-next big-btn not-active">Далее</button>
							<div class="wrap-back-btn"><p class="third-back">&lt;&nbsp;Назад</p></div>
						</div>
						<div class="drugoe-third display-none">
							<p class="numb-questn">3/3 вопросов</p>
							<h2>Укажите тип повреждения</h2>
							<div class="wrap-items">
								<div class="item">
									<div class="wrap-radio only-text">
										<input value="Царапина, задир" type="radio" class="step-radio" id="rd3-6-1" name="step3" />
										<label for="rd3-6-1">
											<span class="blue-bg"></span>
											<!-- <span class="wrap-img"><img src="img/stepForm/misok.png" alt="st"></span> -->
											<span class="item-text">Царапина, задир</span>
										</label>
									</div>
								</div>
								<div class="item">
									<div class="wrap-radio only-text">
										<input value="Полное обновление цвета (потертости)" type="radio" class="step-radio" id="rd3-6-2" name="step3" />
										<label for="rd3-6-2">
											<span class="blue-bg"></span>
											<!-- <span class="wrap-img"><img src="img/stepForm/misok.png" alt="st"></span> -->
											<span class="item-text">Полное обновление <br> цвета (потертости)</span>
										</label>
									</div>
								</div>
								<div class="item">
									<div class="wrap-radio only-text">
										<input value="Замена цвета" type="radio" class="step-radio" id="rd3-6-3" name="step3" />
										<label for="rd3-6-3">
											<span class="blue-bg"></span>
											<!-- <span class="wrap-img"><img src="img/stepForm/misok.png" alt="st"></span> -->
											<span class="item-text">Замена цвета</span>
										</label>
									</div>
								</div>
								<div class="item">
									<div class="wrap-radio only-text">
										<input value="Восстановить канты" type="radio" class="step-radio" id="rd3-6-4" name="step3" />
										<label for="rd3-6-4">
											<span class="blue-bg"></span>
											<!-- <span class="wrap-img"><img src="img/stepForm/misok.png" alt="st"></span> -->
											<span class="item-text">Восстановить канты</span>
										</label>
									</div>
								</div>
								<div class="item">
									<div class="wrap-radio only-text">
										<input value="Химчистка" type="radio" class="step-radio" id="rd3-6-5" name="step3" />
										<label for="rd3-6-5">
											<span class="blue-bg"></span>
											<!-- <span class="wrap-img"><img src="img/stepForm/misok.png" alt="st"></span> -->
											<span class="item-text">Химчистка</span>
										</label>
									</div>
								</div>
							</div>
							<button class="third-step-next big-btn not-active">Далее</button>
							<div class="wrap-back-btn"><p class="third-back">&lt;&nbsp;Назад</p></div>
						</div>
			
					</div> <!-- КОНЕЦ 3-го ШАГА -->
			
					<!-- НАЧАЛО 4-ГО ШАГА -->
					<div id="fourth-step">
						<div class="fourth-step-wrap">
							<div class="left">
								<p class="orient">Ориентировочная <br><span>стоимость работ</span></p>
								<p class="orient-price">~ <span id="final-price">от 1500 до 2000 руб.</span></p>
								<p class="srok">срок <span id="final-srok">1 день</span></p>
								<!-- <p class="p1">Смотрите как мы решали <br>такую задачу своим клиентам</p> -->
								<br><br>
								<div class="wrap-img" id="final-image"><img src="img/slider/slide1.jpg" alt="slide1"></div>
							</div>
							<div class="right">
								<h2>Хотите узнать <br>точную стоимость?</h2>
								<h3>Заполните форму ниже:</h3>
								<div class="form-wrap">
									<div class="li">
										<div class="left-li">1</div>
										<div class="right-li">
											<p>Прикрепите фото (если есть)</p>
											<div class="file-upload">
												<label>
													<input type="file" name="file" class="input-file-photo">
													<span class="add-photo">Прикрепить фото</span>
												</label>
											</div>
										</div>
										<div class="clear"></div>
									</div>
									<div class="li">
										<div class="left-li">2</div>
										<div class="right-li">
											<p>Как с Вами удобнее связаться?</p>
											<div class="wrap-radio-modal">
												<input type="radio" class="my-radio" id="radio111" name="how-connect" />
												<label for="radio111">Позвонить</label>
											</div>
											<div class="wrap-radio-modal">
												<input type="radio" class="my-radio" id="radio222" name="how-connect" />
												<label for="radio222">Написать в Whatsup</label>
											</div>
											<div class="clear"></div>
										</div>
										<div class="clear"></div>
									</div>
									<div class="li">
										<div class="left-li">3</div>
										<div class="right-li">
											<p>По какому номеру?</p>
											<input type="tel" name="tel" class="phone" placeholder="+7 (999) 999 99 99">
										</div>
										<div class="clear"></div>
									</div>
									<input type="submit" value="Отправить">
									<p class="or-send">Или отправьте фото нам в WhatsApp, <br>Viber или Telegramна номер <br><a href="tel:+79167263838">+7 916 726-38-38 </a></p>
								</div>
							</div>
							<div class="clear"></div>
						</div>
					</div> <!-- КОНЕЦ 4-ГО ШАГА -->
			
				</form>
	
		</div>
	</section>

	<section class="s6" id="s6">
		<div class="container">
			<h2>Каждый день новые фото <br> в нашем Инстаграмм, <span class="blue">подпишись!</span></h2>
			<a href="https://www.instagram.com/remont_kurtok_obuvi/" target="_blank" class="big-btn"><span class="plus-icon"></span>Подпишись</a>
		</div>
		<div class="wrap-inst-slider">
			<div class="inst-slider">
				<!-- <a class="item"><img src="img/slider/inst1.jpg" alt=""></a> -->
				<!-- <a class="item"><img src="img/slider/inst2.jpg" alt=""></a> -->
				<!-- <a class="item"><img src="img/slider/inst3.jpg" alt=""></a> -->
				<!-- <div class="item"><iframe width="400" height="500" src="https://www.instagram.com/p/BbbwKI8gWW0/embed/captioned/" frameborder="0" scrolling="0" allowtransparency="true"></iframe></div> -->
				<div class="item"><iframe width="400" height="500" src="https://www.instagram.com/p/BcMONeYgbjo/embed/" frameborder="0" scrolling="0" allowtransparency="true"></iframe></div>
				<div class="item"><iframe width="400" height="500" src="https://www.instagram.com/p/Bb7l8U5gujv/embed/" frameborder="0" scrolling="0" allowtransparency="true"></iframe></div>
				<div class="item"><iframe width="400" height="500" src="https://www.instagram.com/p/Bb6NclRASfI/embed/" frameborder="0" scrolling="0" allowtransparency="true"></iframe></div>
				<div class="item"><iframe width="400" height="500" src="https://www.instagram.com/p/BbzckI5Ap7_/embed/" frameborder="0" scrolling="0" allowtransparency="true"></iframe></div>
				<div class="item"><iframe width="400" height="500" src="https://www.instagram.com/p/BbbwKI8gWW0/embed/" frameborder="0" scrolling="0" allowtransparency="true"></iframe></div>
				<div class="item"><iframe width="400" height="500" src="https://www.instagram.com/p/BbXAMOzg-2V/embed/" frameborder="0" scrolling="0" allowtransparency="true"></iframe></div>
				<div class="item"><iframe width="400" height="500" src="https://www.instagram.com/p/BbQ-6mwg1vC/embed/" frameborder="0" scrolling="0" allowtransparency="true"></iframe></div>
				<div class="item"><iframe width="400" height="500" src="https://www.instagram.com/p/Ba9YTSTAZ3b/embed/" frameborder="0" scrolling="0" allowtransparency="true"></iframe></div>
				<div class="item"><iframe width="400" height="500" src="https://www.instagram.com/p/Ba6--SCA6Fz/embed/" frameborder="0" scrolling="0" allowtransparency="true"></iframe></div>
			</div>
		</div>
	</section>

	<section class="s7" id="s7">
		<div id="map1"></div>
		<div class="contact-block">
			<h2>Контакты</h2>
			<a href="#" class="addr open-map-btn">г. Москва, <br>ул. Большая <br>Очаковская, 47а</a>
			<p class="time">С 10:00 до 20:00 <br><span>Без выходных</span></p>
			<a href="tel:+74993432003" class="tel">+7 499 343-2003</a>
			<a href="mailto:84993432003@mail.ru" class="mail">84993432003@mail.ru</a>
			<button class="big-btn writeus-modal"><span class="mail-icon"></span>Написать нам</button>
		</div>
	</section>

	<section class="s8">
		<div class="container">
			<h2>Мы реставрируем <br> брендовые вещи в любом <br> из <span class="blue">16 городов</span></h2>
			<ul class="wrap-lists">
				<li>Москва</li>
				<li>Новосибирск</li>
				<li>Краснодар</li>
				<li>Кемерово</li>
				<li>Барнаул</li>
				<li>Горячий Ключ</li>
				<li>Улан-Уде</li>
				<li>Самара</li>
				<li>Рязань</li>
				<li>Чита</li>
				<li>Волгоград</li>
				<li>Иркутск</li>
				<li>Сургут</li>
				<li>Курган</li>
				<li>Омск</li>
				<li>Саратов</li>
			</ul>
		</div>
		<div class="bottom-part">
			<h3>Остались вопросы? Задайте их по телефону</h3>
			<a href="tel:+79167263838 " class="tel">+7 916 726-38-38</a>
			<span>Или напишите в мессенджеры:</span>
			<div class="wrap-soc">
				<a href="https://api.whatsapp.com/send?phone=89167263838 " class="whatsapp" target="_blank"><img src="img/whatsapp.png" alt="social"></a>
				<a href="viber://chat?number=+79167263838 " class="viber"><img src="img/viber.png" alt="social"></a>
				<a href="tg://resolve?domain=BrandKeeper" class="telegram"><img src="img/telega.png" alt="social"></a>
			</div>
		</div>
	</section>

	<section class="s9" id="s9">
		<div class="container">
			<h2>Подпишитесь на нас <br> в соцсетях, мы регулярно <br>постим фото новых работ, <br> акции и новости</h2>
			<div class="social">
				<a target="_blank" href="https://vk.com/remont_koji"><img src="img/vk-icon.png" alt="vk"></a>
				<a target="_blank" href="https://www.facebook.com/remontleather.ru/"><img src="img/fb-icon.png" alt="fb"></a>
				<a target="_blank" href="https://www.instagram.com/remont_kurtok_obuvi/"><img src="img/inst-icon.png" alt="ins"></a>
			</div>
		</div>
		<div class="footer">
			<div class="container">
				<div class="copy">© 2005-2017 ООО "Brand Keeper" <br>Авторские права защищены.</div>
				<div class="razrab">
					<p>Разработано агентством:</p>
					<a href="http://potipako.ru" target="_blank"><img src="img/logo-razrab.png" alt="logo-potipako"></a>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	
	</section>







<div class="hidden-box">

	<div id="sendphoto-modal">
		<div class="wrap-modal">
			<div class="box-modal_close arcticmodal-close"></div>
			<div class="left"></div>
			<div class="right">
				<h2>Заполните форму</h2>
				<h3>и мы сориентируем Вас по цене</h3>
				<form class="form-wrap">
					<div class="li">
						<div class="left-li">1</div>
						<div class="right-li">
							<p>Прикрепите фото (если есть)</p>
							<div class="file-upload">
								<label>
									<input type="file" name="file" class="input-file-photo">
									<span class="add-photo">Прикрепить фото</span>
								</label>
							</div>
						</div>
						<div class="clear"></div>
					</div>
					<div class="li">
						<div class="left-li">2</div>
						<div class="right-li">
							<p>Как с Вами удобнее связаться?</p>
							<div class="wrap-radio-modal">
								<input type="radio" class="my-radio" id="radio1" name="how-connect" />
								<label for="radio1">Позвонить</label>
							</div>
							<div class="wrap-radio-modal">
								<input type="radio" class="my-radio" id="radio2" name="how-connect" />
								<label for="radio2">Написать в Whatsup</label>
							</div>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
					<div class="li">
						<div class="left-li">3</div>
						<div class="right-li">
							<p>По какому номеру?</p>
							<input type="tel" name="tel" class="phone" placeholder="+7 (999) 999 99 99">
						</div>
						<div class="clear"></div>
					</div>
					<input type="submit" value="Отправить">
					<p class="or-send">Или отправьте фото нам в WhatsApp, <br>Viber или Telegramна номер <br><a href="tel:+79167263838">+7 916 726-38-38</a></p>
				</form>
			</div>
			<div class="clear"></div>
		</div>
	</div>



	<div id="photo-sldr-modal-garderob" class="photo-sldr-modal">
		<div class="wrap-modal">
			<div class="box-modal_close arcticmodal-close"></div>

			<div class="for-sect2-slider">
				<div class="slider_item"><img src="img/slider/kurtki/1.jpg" alt="kurtki1"></div>
				<div class="slider_item"><img src="img/slider/kurtki/2.jpg" alt="kurtki2"></div>
				<div class="slider_item"><img src="img/slider/kurtki/3.jpg" alt="kurtki3"></div>
				<div class="slider_item"><img src="img/slider/kurtki/4.jpg" alt="kurtki4"></div>
				<div class="slider_item"><img src="img/slider/kurtki/5.jpg" alt="kurtki5"></div>
				<div class="slider_item"><img src="img/slider/kurtki/6.jpg" alt="kurtki6"></div>
				<div class="slider_item"><img src="img/slider/kurtki/7.jpg" alt="kurtki7"></div>
				<div class="slider_item"><img src="img/slider/kurtki/8.jpg" alt="kurtki8"></div>
				<div class="slider_item"><img src="img/slider/kurtki/9.jpg" alt="kurtki9"></div>
				<div class="slider_item"><img src="img/slider/kurtki/10.jpg" alt="kurtki10"></div>
				<div class="slider_item"><img src="img/slider/kurtki/11.jpg" alt="kurtki11"></div>
				<div class="slider_item"><img src="img/slider/kurtki/12.jpg" alt="kurtki12"></div>
				<div class="slider_item"><img src="img/slider/kurtki/13.jpg" alt="kurtki13"></div>
				<div class="slider_item"><img src="img/slider/kurtki/14.jpg" alt="kurtki14"></div>
				<div class="slider_item"><img src="img/slider/kurtki/15.jpg" alt="kurtki15"></div>
				<div class="slider_item"><img src="img/slider/kurtki/16.jpg" alt="kurtki16"></div>
				<div class="slider_item"><img src="img/slider/kurtki/17.jpg" alt="kurtki17"></div>
				<div class="slider_item"><img src="img/slider/kurtki/18.jpg" alt="kurtki18"></div>
				<div class="slider_item"><img src="img/slider/kurtki/19.jpg" alt="kurtki19"></div>
				<div class="slider_item"><img src="img/slider/kurtki/20.jpg" alt="kurtki20"></div>
				<div class="slider_item"><img src="img/slider/kurtki/21.jpg" alt="kurtki21"></div>
				<div class="slider_item"><img src="img/slider/kurtki/22.jpg" alt="kurtki22"></div>
				<div class="slider_item"><img src="img/slider/kurtki/23.jpg" alt="kurtki23"></div>
				<div class="slider_item"><img src="img/slider/kurtki/24.jpg" alt="kurtki24"></div>
				<div class="slider_item"><img src="img/slider/kurtki/25.jpg" alt="kurtki25"></div>
			</div>

		</div>
	</div>

	<div id="photo-sldr-modal-automob" class="photo-sldr-modal">
		<div class="wrap-modal">
			<div class="box-modal_close arcticmodal-close"></div>

			<div class="for-sect2-slider">
				<div class="slider_item"><img src="img/slider/avto/1.jpg" alt="avto1"></div>
				<div class="slider_item"><img src="img/slider/avto/2.jpg" alt="avto2"></div>
				<div class="slider_item"><img src="img/slider/avto/3.jpg" alt="avto3"></div>
				<div class="slider_item"><img src="img/slider/avto/4.jpg" alt="avto4"></div>
				<div class="slider_item"><img src="img/slider/avto/5.jpg" alt="avto5"></div>
				<div class="slider_item"><img src="img/slider/avto/6.jpg" alt="avto6"></div>
				<div class="slider_item"><img src="img/slider/avto/7.jpg" alt="avto7"></div>
				<div class="slider_item"><img src="img/slider/avto/8.jpg" alt="avto8"></div>
				<div class="slider_item"><img src="img/slider/avto/9.jpg" alt="avto9"></div>
				<div class="slider_item"><img src="img/slider/avto/10.jpg" alt="avto10"></div>
				<div class="slider_item"><img src="img/slider/avto/11.jpg" alt="avto11"></div>
				<div class="slider_item"><img src="img/slider/avto/12.jpg" alt="avto12"></div>
				<div class="slider_item"><img src="img/slider/avto/13.jpg" alt="avto13"></div>
				<div class="slider_item"><img src="img/slider/avto/14.jpg" alt="avto14"></div>
				<div class="slider_item"><img src="img/slider/avto/15.jpg" alt="avto15"></div>
				<div class="slider_item"><img src="img/slider/avto/16.jpg" alt="avto16"></div>
				<div class="slider_item"><img src="img/slider/avto/17.jpg" alt="avto17"></div>
				<div class="slider_item"><img src="img/slider/avto/18.jpg" alt="avto18"></div>
				<div class="slider_item"><img src="img/slider/avto/19.jpg" alt="avto19"></div>
				<div class="slider_item"><img src="img/slider/avto/20.jpg" alt="avto20"></div>
				<div class="slider_item"><img src="img/slider/avto/21.jpg" alt="avto21"></div>
				<div class="slider_item"><img src="img/slider/avto/22.jpg" alt="avto22"></div>
				<div class="slider_item"><img src="img/slider/avto/23.jpg" alt="avto23"></div>
				<div class="slider_item"><img src="img/slider/avto/24.jpg" alt="avto24"></div>
				<div class="slider_item"><img src="img/slider/avto/25.jpg" alt="avto25"></div>
				<div class="slider_item"><img src="img/slider/avto/26.jpg" alt="avto26"></div>
			</div>

		</div>
	</div>

	<div id="photo-sldr-modal-sumki" class="photo-sldr-modal">
		<div class="wrap-modal">
			<div class="box-modal_close arcticmodal-close"></div>

			<div class="for-sect2-slider">
				<div class="slider_item"><img src="img/slider/sumki/1.jpg" alt="sumki1"></div>
				<div class="slider_item"><img src="img/slider/sumki/2.jpg" alt="sumki2"></div>
				<div class="slider_item"><img src="img/slider/sumki/3.jpg" alt="sumki3"></div>
				<div class="slider_item"><img src="img/slider/sumki/4.jpg" alt="sumki4"></div>
				<div class="slider_item"><img src="img/slider/sumki/5.jpg" alt="sumki5"></div>
				<div class="slider_item"><img src="img/slider/sumki/6.jpg" alt="sumki6"></div>
				<div class="slider_item"><img src="img/slider/sumki/7.jpg" alt="sumki7"></div>
				<div class="slider_item"><img src="img/slider/sumki/8.jpg" alt="sumki8"></div>
				<div class="slider_item"><img src="img/slider/sumki/9.jpg" alt="sumki9"></div>
				<div class="slider_item"><img src="img/slider/sumki/10.jpg" alt="sumki10"></div>
				<div class="slider_item"><img src="img/slider/sumki/11.jpg" alt="sumki11"></div>
				<div class="slider_item"><img src="img/slider/sumki/12.jpg" alt="sumki12"></div>
				<div class="slider_item"><img src="img/slider/sumki/13.jpg" alt="sumki13"></div>
				<div class="slider_item"><img src="img/slider/sumki/14.jpg" alt="sumki14"></div>
				<div class="slider_item"><img src="img/slider/sumki/15.jpg" alt="sumki15"></div>
				<div class="slider_item"><img src="img/slider/sumki/16.jpg" alt="sumki16"></div>
				<div class="slider_item"><img src="img/slider/sumki/17.jpg" alt="sumki17"></div>
				<div class="slider_item"><img src="img/slider/sumki/18.jpg" alt="sumki18"></div>
				<div class="slider_item"><img src="img/slider/sumki/19.jpg" alt="sumki19"></div>
				<div class="slider_item"><img src="img/slider/sumki/20.jpg" alt="sumki20"></div>
				<div class="slider_item"><img src="img/slider/sumki/21.jpg" alt="sumki21"></div>
				<div class="slider_item"><img src="img/slider/sumki/22.jpg" alt="sumki22"></div>
				<div class="slider_item"><img src="img/slider/sumki/23.jpg" alt="sumki23"></div>
				<div class="slider_item"><img src="img/slider/sumki/24.jpg" alt="sumki24"></div>
				<div class="slider_item"><img src="img/slider/sumki/25.jpg" alt="sumki25"></div>
				<div class="slider_item"><img src="img/slider/sumki/26.jpg" alt="sumki26"></div>
				<div class="slider_item"><img src="img/slider/sumki/27.jpg" alt="sumki27"></div>
				<div class="slider_item"><img src="img/slider/sumki/28.jpg" alt="sumki28"></div>
			</div>

		</div>
	</div>

	<div id="photo-sldr-modal-mebel" class="photo-sldr-modal">
		<div class="wrap-modal">
			<div class="box-modal_close arcticmodal-close"></div>

			<div class="for-sect2-slider">
				<div class="slider_item"><img src="img/slider/mebel/1.jpg" alt="mebel1"></div>
				<div class="slider_item"><img src="img/slider/mebel/2.jpg" alt="mebel2"></div>
				<div class="slider_item"><img src="img/slider/mebel/3.jpg" alt="mebel3"></div>
				<div class="slider_item"><img src="img/slider/mebel/4.jpg" alt="mebel4"></div>
				<div class="slider_item"><img src="img/slider/mebel/5.jpg" alt="mebel5"></div>
				<div class="slider_item"><img src="img/slider/mebel/6.jpg" alt="mebel6"></div>
				<div class="slider_item"><img src="img/slider/mebel/7.jpg" alt="mebel7"></div>
				<div class="slider_item"><img src="img/slider/mebel/8.jpg" alt="mebel8"></div>
				<div class="slider_item"><img src="img/slider/mebel/9.jpg" alt="mebel9"></div>
				<div class="slider_item"><img src="img/slider/mebel/10.jpg" alt="mebel10"></div>
				<div class="slider_item"><img src="img/slider/mebel/11.jpg" alt="mebel11"></div>
				<div class="slider_item"><img src="img/slider/mebel/12.jpg" alt="mebel12"></div>
				<div class="slider_item"><img src="img/slider/mebel/13.jpg" alt="mebel13"></div>
			</div>

		</div>
	</div>

	<div id="photo-sldr-modal-obuv" class="photo-sldr-modal">
		<div class="wrap-modal">
			<div class="box-modal_close arcticmodal-close"></div>

			<div class="for-sect2-slider">
				<div class="slider_item"><img src="img/slider/obuv/1.jpg" alt="obuv1"></div>
				<div class="slider_item"><img src="img/slider/obuv/2.jpg" alt="obuv2"></div>
				<div class="slider_item"><img src="img/slider/obuv/3.jpg" alt="obuv3"></div>
				<div class="slider_item"><img src="img/slider/obuv/4.jpg" alt="obuv4"></div>
				<div class="slider_item"><img src="img/slider/obuv/5.jpg" alt="obuv5"></div>
				<div class="slider_item"><img src="img/slider/obuv/6.jpg" alt="obuv6"></div>
				<div class="slider_item"><img src="img/slider/obuv/7.jpg" alt="obuv7"></div>
				<div class="slider_item"><img src="img/slider/obuv/8.jpg" alt="obuv8"></div>
				<div class="slider_item"><img src="img/slider/obuv/9.jpg" alt="obuv9"></div>
				<div class="slider_item"><img src="img/slider/obuv/10.jpg" alt="obuv10"></div>
				<div class="slider_item"><img src="img/slider/obuv/11.jpg" alt="obuv11"></div>
				<div class="slider_item"><img src="img/slider/obuv/12.jpg" alt="obuv12"></div>
				<div class="slider_item"><img src="img/slider/obuv/13.jpg" alt="obuv13"></div>
				<div class="slider_item"><img src="img/slider/obuv/14.jpg" alt="obuv14"></div>
				<div class="slider_item"><img src="img/slider/obuv/15.jpg" alt="obuv15"></div>
				<div class="slider_item"><img src="img/slider/obuv/16.jpg" alt="obuv16"></div>
				<div class="slider_item"><img src="img/slider/obuv/17.jpg" alt="obuv17"></div>
				<div class="slider_item"><img src="img/slider/obuv/18.jpg" alt="obuv18"></div>
				<div class="slider_item"><img src="img/slider/obuv/19.jpg" alt="obuv19"></div>
				<div class="slider_item"><img src="img/slider/obuv/20.jpg" alt="obuv20"></div>
				<div class="slider_item"><img src="img/slider/obuv/21.jpg" alt="obuv21"></div>
				<div class="slider_item"><img src="img/slider/obuv/22.jpg" alt="obuv22"></div>
				<div class="slider_item"><img src="img/slider/obuv/23.jpg" alt="obuv23"></div>
				<div class="slider_item"><img src="img/slider/obuv/24.jpg" alt="obuv24"></div>
				<div class="slider_item"><img src="img/slider/obuv/25.jpg" alt="obuv25"></div>
				<div class="slider_item"><img src="img/slider/obuv/26.jpg" alt="obuv26"></div>
				<div class="slider_item"><img src="img/slider/obuv/27.jpg" alt="obuv27"></div>
				<div class="slider_item"><img src="img/slider/obuv/28.jpg" alt="obuv28"></div>
				<div class="slider_item"><img src="img/slider/obuv/29.jpg" alt="obuv29"></div>
				<div class="slider_item"><img src="img/slider/obuv/30.jpg" alt="obuv30"></div>
				<div class="slider_item"><img src="img/slider/obuv/31.jpg" alt="obuv31"></div>
				<div class="slider_item"><img src="img/slider/obuv/32.jpg" alt="obuv32"></div>
				<div class="slider_item"><img src="img/slider/obuv/33.jpg" alt="obuv33"></div>
				<div class="slider_item"><img src="img/slider/obuv/34.jpg" alt="obuv34"></div>
				<div class="slider_item"><img src="img/slider/obuv/35.jpg" alt="obuv35"></div>
				<div class="slider_item"><img src="img/slider/obuv/36.jpg" alt="obuv36"></div>
				<div class="slider_item"><img src="img/slider/obuv/37.jpg" alt="obuv37"></div>
			</div>

		</div>
	</div>

	<div id="photo-sldr-modal-raznoe" class="photo-sldr-modal">
		<div class="wrap-modal">
			<div class="box-modal_close arcticmodal-close"></div>

			<div class="for-sect2-slider">
				<div class="slider_item"><img src="img/slider/raznoe/1.jpg" alt="raznoe1"></div>
				<div class="slider_item"><img src="img/slider/raznoe/2.jpg" alt="raznoe2"></div>
				<div class="slider_item"><img src="img/slider/raznoe/3.jpg" alt="raznoe3"></div>
				<div class="slider_item"><img src="img/slider/raznoe/4.jpg" alt="raznoe4"></div>
				<div class="slider_item"><img src="img/slider/raznoe/5.jpg" alt="raznoe5"></div>
				<div class="slider_item"><img src="img/slider/raznoe/6.jpg" alt="raznoe6"></div>
				<div class="slider_item"><img src="img/slider/raznoe/7.jpg" alt="raznoe7"></div>
				<div class="slider_item"><img src="img/slider/raznoe/8.jpg" alt="raznoe8"></div>
				<div class="slider_item"><img src="img/slider/raznoe/9.jpg" alt="raznoe9"></div>
				<div class="slider_item"><img src="img/slider/raznoe/10.jpg" alt="raznoe10"></div>
				<div class="slider_item"><img src="img/slider/raznoe/11.jpg" alt="raznoe11"></div>
				<div class="slider_item"><img src="img/slider/raznoe/12.jpg" alt="raznoe12"></div>
				<div class="slider_item"><img src="img/slider/raznoe/13.jpg" alt="raznoe13"></div>
				<div class="slider_item"><img src="img/slider/raznoe/14.jpg" alt="raznoe14"></div>
				<div class="slider_item"><img src="img/slider/raznoe/15.jpg" alt="raznoe15"></div>
				<div class="slider_item"><img src="img/slider/raznoe/16.jpg" alt="raznoe16"></div>
				<div class="slider_item"><img src="img/slider/raznoe/17.jpg" alt="raznoe17"></div>
				<div class="slider_item"><img src="img/slider/raznoe/18.jpg" alt="raznoe18"></div>
				<div class="slider_item"><img src="img/slider/raznoe/19.jpg" alt="raznoe19"></div>
				<div class="slider_item"><img src="img/slider/raznoe/20.jpg" alt="raznoe20"></div>
				<div class="slider_item"><img src="img/slider/raznoe/21.jpg" alt="raznoe21"></div>
				<div class="slider_item"><img src="img/slider/raznoe/22.jpg" alt="raznoe22"></div>
				<div class="slider_item"><img src="img/slider/raznoe/23.jpg" alt="raznoe23"></div>
				<div class="slider_item"><img src="img/slider/raznoe/24.jpg" alt="raznoe24"></div>
				<div class="slider_item"><img src="img/slider/raznoe/25.jpg" alt="raznoe25"></div>
				<div class="slider_item"><img src="img/slider/raznoe/26.jpg" alt="raznoe26"></div>
				<div class="slider_item"><img src="img/slider/raznoe/27.jpg" alt="raznoe27"></div>
				<div class="slider_item"><img src="img/slider/raznoe/28.jpg" alt="raznoe28"></div>
				<div class="slider_item"><img src="img/slider/raznoe/29.jpg" alt="raznoe29"></div>
				<div class="slider_item"><img src="img/slider/raznoe/30.jpg" alt="raznoe30"></div>
				<div class="slider_item"><img src="img/slider/raznoe/31.jpg" alt="raznoe31"></div>
			</div>

		</div>
	</div>

	

	<div id="s4video-modal">
		<div class="wrap-modal">
			<div class="box-modal_close arcticmodal-close"></div>
			<iframe width="460" height="350" src="https://www.youtube.com/embed/KiqlGIgCSu4?rel=0&amp;showinfo=0"  allowfullscreen></iframe>
		</div>
	</div>

	<div id="zayavka-modal">
		<div class="wrap-modal">
			<div class="box-modal_close arcticmodal-close"></div>
			<form>
				<h2>Оставьте заявку</h2>
				<label for="zay1">Как Вас зовут?</label>
				<input type="text" name="name" id="zay1" placeholder="Ваше имя и фамилия">
				<label for="zay2">Укажите Ваш телефон</label>
				<input type="tel" name="tel" id="zay2" placeholder="+7 (999) 999-99-99" required>
				<input type="submit" value="Отправить" class="big-btn">
				<p class="manag">Менеджер свяжеться с вами <br>в течение 15 минут</p>
			</form>
		</div>
	</div>

	<div id="writeus-modal">
		<div class="wrap-modal">
			<div class="box-modal_close arcticmodal-close"></div>
			<form>
				<h2>Написать нам</h2>
				<label for="zay11">Как Вас зовут?</label>
				<input type="text" name="name" id="zay11" placeholder="Ваше имя и фамилия">
				<label for="zay22">Укажите Ваш телефон</label>
				<input type="tel" name="tel" id="zay22" placeholder="+7 (999) 999-99-99">
				<label for="zay33">Ваше сообщение</label>
				<textarea name="mess" id="zay33"></textarea>
				<input type="submit" value="Отправить" class="big-btn ">
			</form>
		</div>
	</div>

	<div id="success-modal">
		<div class="wrap-modal">
			<div class="box-modal_close arcticmodal-close"></div>
			<h2>Спасибо за Вашу заявку!</h2>
			<h3>В ближайшее время с Вами свяжется <br> наш менеджер для уточнения деталей.</h3>
		</div>
	</div>

	<div id="error-modal">
		<div class="wrap-modal">
			<div class="box-modal_close arcticmodal-close"></div>
			<h2>Ошибка заполнения формы!</h2>
			<h3>Пожалуйста, проверьте правильность <br> заполнения всех полей</h3>
		</div>
	</div>

	<div id="map-modal">
		<div class="wrap-modal">
			<div class="box-modal_close arcticmodal-close"></div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2249.8503445343754!2d37.44398681464733!3d55.67420253183693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54dc02db64709%3A0x556e47970332deff!2z0JHQvtC70YzRiNCw0Y8g0J7Rh9Cw0LrQvtCy0YHQutCw0Y8g0YPQuy4sIDQ3LCDQnNC-0YHQutCy0LAsINCg0L7RgdGB0LjRjywgMTE5MzYx!5e0!3m2!1sru!2sua!4v1510652884979" width="460" height="650" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>


</div>



	<!-- stylesheets -->
	<link rel="stylesheet" href="css/libs.css">
	<link rel="stylesheet" href="css/fonts.css">
	<!-- <link rel="stylesheet" href="css/header.css"> -->


	<!-- main stylesheet -->
	<link rel="stylesheet" href="css/style.css">

<!-- scripts -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdzwz73OHrdVGjKVKow8ID8T31yNxiBSI"></script>
	
	<script src="js/libs.min.js"></script>
	<script src="js/map.js"></script>
	<!-- <script src="https://kenwheeler.github.io/slick/slick/slick.js"></script> -->
	<script src="js/main.js"></script>




<?php include('track.php'); ?>

</body>
</html>




