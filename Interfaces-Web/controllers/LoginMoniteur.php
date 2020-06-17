<?php

{
$Cli_Mail = $_POST['mail'];
$Cli_MotDePasse = $_POST['pass'];

$server="localhost"; // peut-être remplacé par l'adresse IP
$base ="charton";
$userdb ="root";
$userpwd="root";
$table = "moniteur";
// ouverture de la connexion vers le moteur de la base de données
$connexion = new mysqli($server, $userdb, $userpwd, $base);
if ($connexion->connect_error) {
die("Connection error: " . $connexion->connect_error);
}
echo "good!";
// préparation de la requête SQL
try {
$sql = "INSERT INTO $table (mail, pass) VALUES ('$Cli_Mail', '$Cli_MotDePasse');";
$connexion->query($sql);
}
catch (exception $e) {
die("Erreur de type ".$e->getMessage()) ;
}

}
?>
