<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
<!-- <link href="map.css" rel="stylesheet" type="text/css" media="all" /> -->
<link href="admarea.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><span class="fa fa-bolt"></span><a href="index.php">WORK WATCHER</a></h1>
		</div>
		<div id="menu">
			<ul>
            <li class="current_page_item"><a href="account.php" accesskey="1" title="">Map</a></li>
				<li><a href="library.php" accesskey="2" title="">Table</a></li>
				<li><a href="authorization.php" accesskey="3" title="">Authorization</a></li>
			</ul>
		</div>
	</div>
</div>
<div id="header-featured">
	<div id="banner-wrapper">
		<div id="banner" class="container">
			<h2>Карта строительных работ</h2>
			<p>Это <strong>Work Watcher</strong>, бесплатный, общедоступный сервис для просмотра строительных работ в городе Москва и Московской области</p>
		</div>
	</div>
</div>
<div id="wrapper">
	<div id="featured-wrapper">
		<div id="featured" class="extra2 margin-btm container">
			<div class="main-title">
				<h2>Административный округ</h2>
			</div>

			<ul class="topmenu"><li><a href="" class="submenu-link">Цели проведения работ</a>
				  <ul class="submenu">
					<li><a href="<?php 
						$name='по установке временных ограждений'; 
						$link='OfTemporaryFences.php'; 
						$current_page=true; 

						echo $link; ?>"><?php 

						if($current_page) 
							echo $name;?>
						</a>
					</li>
					<li><a href="<?php 
						$name='по размещению временных объектов'; 
						$link='OfTemporaryObjects.php'; 
						$current_page=true; 

						echo $link; ?>"><?php 

						if($current_page) 
							echo $name;?>
						</a>
					</li>
				  </ul>
				</li>
				<li><a href="<?php 
						$name='Административный округ'; 
						$link='AdmArea.php'; 
						$current_page=true; 

						echo $link; ?>"><?php 

						if($current_page) 
							echo $name;?>
					</a>
				</li>
				<li><a href="<?php 
						$name='Назначение объекта'; 
						$link='ObjectPurpose.php'; 
						$current_page=true; 

						echo $link; ?>"><?php 

						if($current_page) 
							echo $name;?>
					</a>
				</li>
				<li><a href="<?php 
						$name='Виды работ'; 
						$link='WorkType.php'; 
						$current_page=true; 

						echo $link; ?>"><?php 

						if($current_page) 
							echo $name;?>
					</a>
				</li>
			</ul>

			<form class="map_main">
				<div class="map">
                <iframe src="https://www.google.com/maps/d/embed?mid=16J9rvn3JZrQ_jUjMhodGVw4Z2pboHck&ehbc=2E312F" width="740" height="480"></iframe>			
            </form>

            <div class="information">
                <p>На данной таблице разными цветами отмеченны объекты в зависимости от их административного округа
                <li>Темно-коричневым отмечен Северный административный округ
                <li>Жёлтым отмечен Южный административный округ
                <li>Зеленым отмечен Западный административный округ
                <li>Бирюзовым отмечен Центральный административный округ
                <li>Темно-зеленым отмечен Северо-Восточный административный округ
                <li>Оранжевым отмечен Новомосковский административный округ
                <li>Болотным отмечен Восточный административный округ
                <li>Салатовым отмечен Юго-Западный административный округ
                <li>Коричневым отмечен Северо-Западный административный округ
                <li>Красным отмечен Юго-Восточный административный округ
                <li>Бирюзовым отмечен Зеленоградский административный округ
                <li>Голубым цветом отмечен Троицкий административный округ
                <li>Розовым цветом отмечен Юго-Восточный административный округ, Южный административный округ
                <li>Темно-синим отмечен Юго-Западный административный округ, Новомосковский административный округ
                <li>Темно-красным отмечен Административный округ
                <li>Темно-фиолетовым отмечен Северный административный округ, Северо-Восточный административный округ
                <li>Темно-жёлтым отмечен Северный административный округ, Северо-Западный административный округ
                <li>Светло-зеленым отмечен Центральный административный округ, Северный административный округ
                <li>Жёлтым отмечен Центральный административный округ, Юго-Восточный административный округ

                </p>
                
            </div>

		</div>
	</div>
</div>

<div id="copyright" class="container">
    <p>Kotushevanatalie@gmail.com</p>
	<p><a href="https://data.mos.ru/opendata/7709083955-dannye-o-deystvuyushchih-orderah-na-proizvodstvo-rabot/data/table?versionNumber=2&releaseNumber=137"> dataset</a></p>
</div>
</body>
</html>
