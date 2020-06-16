<?php

{
$email = $_POST['email'];
$pass = $_POST['pass'];

$server="localhost"; // peut-être remplacé par l'adresse IP
$base ="charton";
$userdb ="root";
$userpwd="root";
$table = "client";
// ouverture de la connexion vers le moteur de la base de données
$connexion = new mysqli($server, $userdb, $userpwd, $base);
if ($connexion->connect_error) {
die("Connection error: " . $connexion->connect_error);
}
echo "good!";
// préparation de la requête SQL
try {
$sql = "INSERT INTO $table (mail, pass) VALUES ('$mail', '$pass');";
$connexion->query($sql);
}
catch (exception $e) {
die("Erreur de type ".$e->getMessage()) ;
}


?>


/*// variables pour configurer l'accès à la base de données
$server="localhost"; // peut-être remplacé par l'adresse IP
$base ="SLAM5";
$userdb ="root";
$userpwd="root";
$table = "exampleTable";
// ouverture de la connexion vers le moteur de la base de données
/*$connexion = new mysqli($server, $userdb, $userpwd, $base);
if ($connexion->connect_error) {
die("Connection error: " . $connexion->connect_error);
}
echo "good!";
// préparation de la requête SQL
try {
$sql = "INSERT INTO $table (nom, mdpasse) VALUES ('$nomUser', '$mdpUser');";
$connexion->query($sql);
}
catch (exception $e) {
die("Erreur de type ".$e->getMessage()) ;
}
}

      /*if(isset($_POST['formsend'])){

        extact($_POST);

        if(!empty($password) && !empty($password) && !empty($email)){

          if($password == $cpassword){

            $option = [
              'cost' => 12,
          ];
          $hashpass = password_hash($password, PASSWORD_BCRYPT, $option);

          include 'include/database.php';
          global $db;

          $q = $db->prepare("INSERT INTRO users(email,password") VALUES(:email,:password)");
          $q->execute([
              'email' => $semail,
              'password' => $hashpass
              ]);
          }

      }else{
        echo "Les champs ne sont pas tous remplis";
      }
  }
  */
