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
				<li class="current_page_item"><a href="index.php" accesskey="1" title="">Map</a></li>
				<li><a href="library.php" accesskey="2" title="">Table</a></li>
				<li><a href="authorization.php" accesskey="3" title="">Authorization</a></li>
				
			</ul>
		</div>
	</div>
</div>


<div id="wrapper">
<?php
require("database.php");
$user = "users";
$emai = "email";
$usernam = "username";
$pass = "password";
if (isset($_POST)) {
    if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['pass'])) {
        $username = htmlspecialchars($_POST['username']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['pass']);
        $query = mysqli_query($conn, "SELECT * FROM " . $user . " WHERE " . $emai . " = '" . $email . "' AND " . $usernam . "='" . $username . "'");
        $numrows = mysqli_num_rows($query);
        if ($numrows == 0) {
            $sql = "INSERT INTO `" . $user . "` (`username`, `email`, `password`) VALUES ('$username','$email', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $message = "Аккаунт успешно создан";
                header("Location: authorization.php");
            } else {
                $message = "Не удалось вставить информацию о данных!";
            }
        } else {
            $message = "Такой пользователь уже существует в базе данных!";
        }
    } else {
        $message = "Все поля обязательны для заполнения!";
    }
}
?>



<?php include('database.php'); ?>


<form method='POST'>
                <span class='reg-title'>
						Регистрация
					</span>

                    <?php if (!empty($message)) {
    echo "<p class='error'>" . $message . "</p>";
} ?>
    <div class='limiter'>
        <div class='container-form'>
            <div class='wrap-login'>
                <form class='login'>

                

                    <div class='wrap-input' data-validate='Введите логин'>
                        <input class='input' type='text' name='username' placeholder='Логин'>
                        <span class='focus-input100' data-placeholder='&#xf207;'></span>
                    </div>

                    <div class='wrap-input' data-validate='Введите email'>
                        <input class='input' type='text' name='email' placeholder='Email'>
                        <span class='focus-input100' data-placeholder='&#xf207;'></span>
                    </div>

                    <div class='wrap-input' data-validate='Введите пароль'>
                        <input class='input' type='password' name='pass' placeholder='Пароль'>
                        <span class='focus-input100' data-placeholder='&#xf191;'></span>
                    </div>

                    <div class='wrap-input' data-validate='Ваши пароли не совподают'>
                        <input class='input' type='password' name='сonf_pass' placeholder='Подтвердите пароль'>
                        <span class='focus-input100' data-placeholder='&#xf191;'></span>
                    </div>

                    <div class='container-reg'>
                        <button class='reg-btn'>
                            Зарегестрироваться
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</form>
</div>

</body>
<div id="copyright" class="container">
	<p>Kotushevanatalie@gmail.com</p>
    <p><a href="https://data.mos.ru/opendata/7709083955-dannye-o-deystvuyushchih-orderah-na-proizvodstvo-rabot/data/table?versionNumber=2&releaseNumber=137"> dataset</a></p>

</div>
</body>
</html>