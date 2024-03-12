<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona PHP - kod</title>
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
			<div class="text3">
				<form action="logowanie.php" method="post">
                    <b>Zaloguj się</b><br><br><br>
                    <input type="text" name="imie" placeholder=" Wprowadź login" style="height: 60px; width: 300px; font-size: large; font-family: 'Courier New', Courier, monospace; padding-left: 10px;"><br><br><br>
                    <input type="password" name="haslo" placeholder=" Wprowadź hasło" style="height: 60px; width: 300px; font-size: large; font-family: 'Courier New', Courier, monospace; padding-left: 10px;"><br><br><br>
                    <button type="submit" name="submit" style="width: 200px; height: 40px; font-size: large; font-family: 'Courier New', Courier, monospace;">Zaloguj się</button>
	
                </form>
				<?php
				if(isset($_SESSION['blad'])){
					echo $_SESSION['blad'];
				}
				?>
            </div>

		</div>
		</div>
	

    
</body>
</html>