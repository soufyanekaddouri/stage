<?php

// We gaan sessies gebruiken
session_start();

// Gebruikersnaam en wachtwoord instellen
$connection = mysqli_connect('localhost', 'root', 'root', 'stage');
$users = $connection->query("SELECT * FROM users")->fetch_assoc();

foreach ($users as $user) {
    $sGebruikerControle = $user['username'];
    $sWachtwoordControle = $user['password'];
}

$sGebruikerControle = 'admin';
$sWachtwoordControle = 'voorbeeld';

// Controle of het formulier verzonden is
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    // Controle of benodigde velden wel ingevuld zijn
    if(isset($_POST['username'], $_POST['password']))
    {
        // Overbodige spaties verwijderen
        $sGebruiker = trim($_POST['username']);
        $sWachtwoord = trim($_POST['password']);


        // Gebruikersnaam en wachtwoord controleren
        if($sGebruiker == $sGebruikerControle && $sWachtwoord == $sWachtwoordControle)
        {
            // Juiste gebruikersnaam en wachtwoord: inloggen!
            $_SESSION['logged_in'] = true;
            $_SESSION['gebruiker'] = $sGebruiker;

            // Doorsturen en melding geven
            header('Refresh: 3; url=userlogin.php');
            echo 'Je bent succesvol ingelogd. Je wordt doorgestuurd.';
        }
        else
        {
            // Terugsturen en foutmelding geven
            header('Refresh: 3; url=userlogin.php');
            echo 'Deze combinatie van gebruikersnaam en wachtwoord is niet juist!';
        }
    }
    else
    {
        header('Refresh: 3; url=userlogin.php');
        echo 'Een vereist veld bestaat niet!';
    }
}
else
{
    // Terug naar het formulier
    header('Location: userlogin.php');
    exit();
}


?>