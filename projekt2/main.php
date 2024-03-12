<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona PHP</title>
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
				<li><a href="signin.html">ZALOGUJ SIĘ</a></li>
				<li><a href="signup.html">ZAREJERSTRUJ SIĘ</a></li>
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
				<br><br>
                <?php

                echo "<p>Witaj ".$_SESSION['user']."!";

                ?>
                
                <br><br><br><br><br><br><br>
				<img src="PHp4.svg.png" width="300px" height="150px"><br><br>
				<img src="PhpMyAdmin_logo.svg.png" width="330px" height="160px">
			</div>

		</div>
		</div>
	

    
</body>
</html>