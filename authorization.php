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
<link href="form.css" rel="stylesheet" type="text/css" media="all" />


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
				<li><a href="library.php" accesskey="2" title="">Table</a></li>
				<li><a href="authorization.php" accesskey="3" title="" style="color:#8dc63f">Authorization</a></li>
				
			</ul>
		</div>
	</div>
</div>


<?php
require("database.php");
require("session.php");
$user = "users";
$emai = "email";
$password = "password";
if (!empty($_POST)) {
    $pass = $_POST['pass'];
    $email = $_POST['email'];

    $result = mysqli_query($conn, "SELECT * FROM " . $user . " WHERE
    `" . $emai . "`='$email' AND
    `" . $password . "`= '$pass'
");


    if (!$result || mysqli_num_rows($result) == 0) {
        echo "Такой пользователь не найден в базе данных.";
    } else {
        session_start();
        $_SESSION["user"] = mysqli_fetch_assoc($result);
        header("Location: account.php");
    }
}
?>

<?php include('database.php'); ?>
<div id="wrapper">
<form method='POST'>

<span class='login-title'>
						Вход
					</span>
    <div class='limiter'>
        <div class='container-form'>
            <div class='wrap'>
                <form class='authorization'>

                

                    <div class='wrap-input' data-validate='Введите email'>
                        <input class='input' type='email' name='email' placeholder='Email' >
                        <span class='focus' data-placeholder='&#xf207;'></span>
                    </div>

                    <div class='wrap-input' data-validate='Введите пароль'>
                        <input class='input' type='password' name='pass' placeholder='Пароль'>
                        <span class='focus' data-placeholder='&#xf191;'></span>
                    </div>

                    <div class='contact'>
                        <input class='input-checkbox' id='ckb1' type='checkbox' name='remember-me'>
                        <label class='label-checkbox' for='ckb1'>
                            Запомнить меня
                        </label>
                    </div>

                    <div class='container-login'>
                        <button class='login-btn'>
                            Войти
                        </button>
                        <a class='login100-form-btn' href='registration.php'>Регистрация</a>
                    </div>


                    <div class='text-center'>
                        <a class='txt1' href='#'>
                            Забыли пароль?
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</form>
</div>
</body>


<footer>
<div id="copyright" class="container">
	<p>Kotushevanatalie@gmail.com</p>
    <p><a href="https://data.mos.ru/opendata/7709083955-dannye-o-deystvuyushchih-orderah-na-proizvodstvo-rabot/data/table?versionNumber=2&releaseNumber=137"> dataset</a></p>

</div>
</footer>

</body>
</html>