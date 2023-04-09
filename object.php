<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
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
            <li class="current_page_item"><a href="index.php" accesskey="1" title="" style="color:#fff">Map</a></li>
				<li><a href="library.php" accesskey="2" title="" style="color:#8dc63f">Table</a></li>
				<li><a href="authorization.php" accesskey="3" title="">Authorization</a></li>
				
			</ul>
		</div>
	</div>
</div>

<div id="wrapper">


        <div class="elastic" >
		<?php 
				 $servername = "std-mysql";
                 $database = "std_1993_map";
                 $username = "std_1993_map";
                 $password = "12345678";
                 $conn = mysqli_connect($servername, $username, $password, $database);
				$id = $_GET['id'];

                $sql = mysqli_query($conn, "SELECT * FROM `map` WHERE `id`=".$id);
				while ($result = mysqli_fetch_array($sql)) {
					echo '<h1> Полная информация о строительной работе'.'</h1>'.
                    '<h2><br>'.$result['id'].
                    '</h2><h3><br> Номер ордера: '.$result['OrderNumber'].
                    '</h3><br><h4> Global_id: '.$result['global_id'].
                    '<br> Заказчик - застройщик: '.$result['CustomerConstruction'].'</h4>'.
                    '<br> Генподрядчик: ' .$result['GeneralContractor'].
                    '<br> Административный округ: '.$result['AdmArea'].
                    '<br> Район: '.$result['District'].
                    '<br> Дата начала работ: '.$result['WorkStartDate'].
                    '<br> Дата окончания работ: '.$result['WorkEndDate'].
                    '<br> Цели проведения земляных работ: '.$result['EarthworkObjectives'].
                    '<br> Назначение объекта: '.$result['ObjectPurpose'].
                    '<br> Виды работ: '.$result['WorkType'].
                    '<br> Цели проведения работ по установке временных ограждений: '.$result['ObjectivesOfTheInstallationOfTemporaryFences'].
                    '<br> Цели проведения работ по размещению временных объектов: '.$result['ObjectivesOfThePlacementOfTemporaryObjects'].
                    '<br> Работы по ордеру: '.$result['OrderWork'].
                    '<br> Описание места проведения работ: '.$result['WorkPlaceDescription'];


			}
			?>
        </div>


</div>
<div id="copyright" class="container">
	<p>Kotushevanatalie@gmail.com</p>
	<p><a href="https://data.mos.ru/opendata/7709083955-dannye-o-deystvuyushchih-orderah-na-proizvodstvo-rabot/data/table?versionNumber=2&releaseNumber=137"> dataset</a></p>
</div>
</body>
</html>
