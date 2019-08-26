<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<title>White Cat Backery</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../css/M_grid.css">
		<link rel="stylesheet" href="../css/style.css">
	</head>
	<body>
		<div class="wrap">
        	<div class="content">
				<div class="container">
					<div class="row">
						<div class="col s10 offset-s1 center mt-3 mb-md-5">
							<a href='/'	id="logo" class="d-block">
								<img src="../img/Logo.png" alt="white cat">
							</a>
						</div>
						<!-- /.col s10 -->
						<div class="col s8 offset-s2">
							<div class="burger-button">				
								<svg class="filter" version="1.1">
								  <defs>
								    <filter id="gooeyness">
								      <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
								      <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 20 -10" result="gooeyness" />
								      <feComposite in="SourceGraphic" in2="gooeyness" operator="atop" />
								    </filter>
								  </defs>
								</svg>
								<div class="burger">
								  <div class="rect"></div>
								  <div class="rect"></div>
								  <div class="rect"></div>
								</div>
							</div>							
							<nav class="main-menu noselect">
								<ul class="d-flex justify-content-center main-ul">
									<li class="center"><a href="/" class="main-link-page">Главная</a></li>
									<li class="center sweets"><a>Сладости <img class="sweet-arrow" src="../img/arrow.svg" alt=""></a>
										<ul class="sub-menu">
											<li class="center"><a href="/cakes.php" data-type-sweet="cakes">Торты</a></li>
											<li class="center"><a href="/pasta.php" data-type-sweet="pasta">Макарон</a></li>
											<li class="center"><a href="/cupcakes.php" data-type-sweet="cupcakes">Капкейки</a></li>
											<li class="center"><a href="/cheesecakes.php" data-type-sweet="cheesecakes">Чизкейки</a></li>
										</ul>
									</li>
									<li class="center master-link"><a href="/master-class.php">Мастер-класс</a></li>
									<li class="center contacts-li"><a href="/contacts.php">Контакты</a></li>
								</ul>
							</nav>
							<!-- /.main-menu -->
						</div>
						<!-- /.col s10-->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.container -->