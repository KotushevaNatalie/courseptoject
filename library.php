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

<div class="container-fluid text-center">
    <div class="row">
        <form action="result.php">
            <input type="text" name="search" class="search" placeholder="Поиск">
            <button type="submit" class="find-button" style="background-color:#13085b">Найти</button>
        </form>
    </div>
</div>
        <table class="library" >
		<?php require "table.php"; ?>
        </table>


</div>
<div id="copyright" class="container">
	<p>Kotushevanatalie@gmail.com</p>
	<p><a href="https://data.mos.ru/opendata/7709083955-dannye-o-deystvuyushchih-orderah-na-proizvodstvo-rabot/data/table?versionNumber=2&releaseNumber=137"> dataset</a></p>
</div>
</body>
</html>
