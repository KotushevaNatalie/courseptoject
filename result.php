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


<?php
    $title = "Результат поиска";
?>

<h1 class="result">Результат поиска</h1>

<?php
    $conn = mysqli_connect("std-mysql", "std_1993_map", "12345678", "std_1993_map");

    $inputSearch = $_REQUEST['search']; 
    
    $sql = "SELECT * FROM `map` WHERE `CustomerConstruction` LIKE '%$inputSearch%' OR `AdmArea` LIKE '%$inputSearch%'  OR `District` 
    LIKE '%$inputSearch%' OR `WorkPlaceDescription` LIKE '%$inputSearch%'";
     $result = $conn -> query($sql);
 
        
    function echoRes($result) { 
        if ($result -> num_rows > 0) {
            echo '<table class="library">';
            while ($row = $result -> fetch_assoc()) {
                
                echo '<tr>
                    <td><a href="object.php?id='.$row['id'].'">'   .$row['id'].   '</a></td>'.
                    '<td><a href="object.php?id='.$row['id'].'">'  .$row['OrderNumber'].   '</a></td>'.
                    '<td><a href="object.php?id='.$row['id'].'">'  .$row['CustomerConstruction'].    '</a></td>'.
                    '<td><a href="object.php?id='.$row['id'].'">'  .$row['GeneralContractor'].   '</a></td>'.
                    '<td><a href="object.php?id='.$row['id'].'">'  .$row['AdmArea'].   '</a></td>'.
                    '<td><a href="object.php?id='.$row['id'].'">'  .$row['District'].   '</a></td>'.
                '</tr>';

                

            }
            echo '</table>';
        } 
        else {
            echo "Ничего не найдено";
        }
    }
?>

<div class="res">
    <?php
        echoRes($result);
    ?>
</div>

<h1 class="top_text"></h1>  


</div>
<div id="copyright" class="container">
	<p>Kotushevanatalie@gmail.com</p>
	<p><a href="https://data.mos.ru/opendata/7709083955-dannye-o-deystvuyushchih-orderah-na-proizvodstvo-rabot/data/table?versionNumber=2&releaseNumber=137"> dataset</a></p>
</div>
</body>
</html>