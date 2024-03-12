<?php

session_start();

if(!isset($_POST['imie']) || (!isset($_POST['haslo']))){
    header('Location: index.html');
    exit();
}

require_once "conn.php";

$polaczenie = new mysqli($host,$db_user,$db_password,$db_name);

if ($polaczenie->connect_error!=0) {
    echo "Error: ".$polaczenie->connect_errno."";
}
else {

$login = $_POST['imie'];
$pass = $_POST['haslo'];

$sql = "SELECT * FROM users WHERE login = '$login' AND pwd = '$pass'";

if ($rezultat = @$polaczenie->query($sql)) {
    $ilu_user =  $rezultat->num_rows;
    if($ilu_user>0 ) {
        $_SESSION['zalogowany'] = true;
        $_SESSION['id'] = $wiersz['id'];
        
        $wiersz = $rezultat->fetch_assoc();
        $_SESSION['user'] = $wiersz['login'];
        $_SESSION['imie'] = $wiersz['name'];
        $_SESSION['email'] = $wiersz['email'];
        $_SESSION['zdjecie'] = $wiersz['zdjeciep'];

        unset($_SESSION['blad']);
        $rezultat->free_result();
        header("Location: konto.php");

    }
    else{
        $_SESSION['blad'] = '<span style="color:red;">Nieprawidłowy login lub hasło!!!</span>';
        header('Location: signin.php');
    }
}



$polaczenie ->close();


}

?>