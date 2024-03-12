<?php

    session_start();

    if(!isset($_SESSION['zalogowany'])){
        header("Location: index.html");
        exit();
    }
    
    
    

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona PHP - twoje konto</title>
    <link rel="stylesheet" href="style.css">
	<link rel="icon" href="logo3.png">
</head>
<body>
    <header class="header-main">
        <div class="header-main-logo">
			<img src="logo3.png" alt="image1" >
        	
		</div>
		<nav class="header-main-nav">
			<ul>
				<li><a href="index.html">HOME</a></li>
				<li><a href="kod.html">KOD PHP</a></li>
				<li><a href="signin.php">ZALOGUJ SIĘ</a></li>
				<li><a href="signup.html">ZAREJERSTRUJ SIĘ</a></li>
                <li><a href="konto.php">TWOJE KONTO</a></li>
			</ul>
		</nav>
        <div class="header-main-sm">
			<a href="www.facebook.com"><div class="header-main-sm-fb"></div></a>
			<a href="https://www.instagram.com/rafalbudy090/?next=%2F"><div class="header-main-sm-ig"></div></a>
			<a href="https://github.com/rafalantolak?tab=repositories"><div class="header-main-sm-gh"></div></a>
		</div>
    </header>
	<div class="center">
		<div class="content">
			<div class="text">
                <div class="foto1"><img src="<?php   echo $_SESSION['zdjecie'] ?>" width="300px" height="300px"></div><br><br>
                <b>Imie i nazwisko:</b><br>
				<div class="imie1"><?php   echo $_SESSION['imie'] ?></div><br>
                <b>E-mail:</b><br>
                <div class="email1"><?php   echo $_SESSION['email'] ?></div><br>
                <b>Login:</b><br>
                <div class="nazwa1"><?php   echo $_SESSION['user'] ?></div>
                <a href="logout.php"><b><u>Wyloguj się</u></b></a>
			</div>

		</div>
		</div>
	

    
</body>
</html>