<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="map.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />



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
				<h2>Цели проведения работ по размещению временных объектов</h2>
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
                <iframe src="https://www.google.com/maps/d/embed?mid=1dL_MDzPRYs62yPoOiDRf-tzeFVZJ-Hc&ehbc=2E312F" width="740" height="480"></iframe>				</div>
			</form>

            <div class="information">
                    <p>На данной таблице разными цветами отмеченны объекты в зависимости от цели проведения работ по размещению временных объектов
                    <li>Зеленым отмечены строительство, реконструкция объектов
                    <li>Салатовым отмечены капитальный ремонт зданий (сооружений) 
                    <li>Коричневым отмечены строительство, реконструкция объектов капитального строительства
                    <li>Темно-зеленым отмечены работы по сохранению объектов культурного наследия, выявленных объектов культурного наследия
                    <li>Оранжевым отмечены строительство, реконструкция объектов капитального строительства, прокладка инженерных сетей и сооружений к строящимся (реконструируемым) объектам капитального строительства
                    <li>Красным отмечены снос зданий и сооружений, ликвидация коммуникаций
                    <li>Голубым цветом отмечены раззмещение и установка некапитальных объектов, а также объектов, размещение которых может осуществляться без предоставления земельных участков и установления сервитутов
                    <li>Темно-синим отмеченны строительство, реконструкция объектов капитального строительства, снос зданий и сооружений, ликвидация коммуникаций
                    <li>Бирюзовым отмеченны строительство, реконструкция объектов капитального строительства, работы по сохранению объектов культурного наследия, выявленных объектов культурного наследия
                    <li>Темно-красным отмеченны прокладка (размещение) инженерных сетей и сооружений, линий и сооружений связи, для проведения которой не требуется разрешения на строительство
                    <li>Синим отмечено комплексное благоустройство территории
                    <li>Темно-фиолетовым отмечены прокладка инженерных сетей и сооружений к строящимся (реконструируемым) объектам капитального строительства
                    <li>Темно-коричневым отмечены размещение и установка некапитальных объектов
                    <li>Серым отмечены не указанные цели проведения работ по установке временных ограждений
                </p>
                
            </div>


		</div>
	</div>
</div>
<div id="copyright" class="container">
<p>Kotushevanatalie@gmail.com</p></div>
<p><a href="https://data.mos.ru/opendata/7709083955-dannye-o-deystvuyushchih-orderah-na-proizvodstvo-rabot/data/table?versionNumber=2&releaseNumber=137"> dataset</a></p>

</body>
</html>
