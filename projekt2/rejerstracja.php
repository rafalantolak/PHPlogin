<?php
session_start();

require_once 'conn.php';

$polaczenie = new mysqli($host,$db_user,$db_password,$db_name);

if ($polaczenie->connect_error!=0) {
    echo "Error: ".$polaczenie->connect_errno."";
}
else {



if (isset($_POST['imier']) && isset($_POST['emailr']) && isset($_POST['loginr']) && isset($_POST['pwdr']) && isset($_POST['foto'])){



$imie = $_POST['imier'];
$email = $_POST['emailr'];
$login = $_POST['loginr'];
$pwd = $_POST['pwdr'];
$foto = $_POST['foto'];

$sql = "INSERT INTO `users`(`name`,`email`,`login`,`pwd`,`zdjeciep`) VALUES ('$imie','$email','$login','$pwd','$foto')";
$rezultat = @$polaczenie->query($sql);
$_SESSION['zalogowany'] = true;
$_SESSION['id'] = $wiersz['id'];
header("Location: konto.html");
}
else{
    $_SESSION['bladr'] = '<span style="color:red;">Nieprawidłowe dane!!!</span>';
    header('Location: signup.php');
}
$polaczenie ->close();


}