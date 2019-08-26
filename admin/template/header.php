<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<title>White Cat Backery</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:700&display=swap" rel="stylesheet"> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/M_grid.css">
		<link rel="stylesheet" href="libs/materialize/css/materialize.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="wrap">
        	<div class="content">
				<div class="container-header-line">
					<div class="top-line"><a href="core/logout.php">
						<?php require_once 'img/logout.svg'?>
					</a></div>
				</div>
				<!-- /.container-heade-line -->
				<div class="container-header-menu">
					<div class="title-brend">
						<p>White Cat Bakery</p>
					</div>
					<div class="title-admin">
						<p>Панель администратора</p>
					</div>
					<div class="main-menu">
						<div>
							<ul>
								<li><a href="dashboard.php" class="item-menu">
										<?php require_once 'img/dashboard.svg'?>
										<p>Dashboard</p>
									</a></li>
								<li><a href="main.php" class="item-menu">
										<?php require_once 'img/main.svg'?>
										<p>Главная</p>
									</a></li>
								<li><a href="cakes.php" class="item-menu">
										<?php require_once 'img/cakes.svg'?>
										<p>Торты</p>
									</a></li>
								<li><a href="pasta.php" class="item-menu">
										<?php require_once 'img/burger.svg'?>
										<p>Макарон</p>
									</a></li>
								<li><a href="cupcakes.php" class="item-menu">
										<?php require_once 'img/cupcakes.svg'?>
										<p>Капкейки</p>
									</a></li>
								<li><a href="cheesecakes.php" class="item-menu">
										<?php require_once 'img/cheesecakes.svg'?>
										<p>Чизкейки</p>
									</a></li>
								<li><a href="#" class="item-menu" id="master-class">
										<?php require_once 'img/master.svg'?>
										<p>Мастер класс</p>
									</a></li>
								<li>
									<ul class="sub-menu">
										<li><a href="master_kids.php">Дети</a></li>
										<li><a href="master_gallery.php">фотогаллерея</a></li>
										<li><a href="master_video.php">Видео</a></li>
									</ul>
								</li>									
								<li><a href="contacts.php" class="item-menu">
										<?php require_once 'img/contacts.svg'?>
										<p>Контакты</p>
									</a></li>
								<li><a href="settings.php" class="item-menu">
										<?php require_once 'img/settings.svg'?>
										<p>Настройки</p>
									</a></li>									
							</ul>
						</div>
					</div>
					<div class="toggle-sidebar">
						<a href="#" class="toggle">
							<?php require_once 'img/toggle.svg'?>
							<p>Toggle sidebar</p>
						</a>
					</div>
				</div>
				<!-- /.container-header-menu -->