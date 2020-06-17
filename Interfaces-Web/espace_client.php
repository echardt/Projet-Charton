<!DOCTYPE html>
<?php
    include('controllers/disgn.php');
  ?>

<html lang="fr" dir="ltr">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Page de connexion</title>

      <link rel="stylesheet" href="css/login.css">
      <link rel="stylesheet" href="css/espace_client.css">

      </head>
      <body>


        <div class="C-connexion">
          <div class="title-1">
            <p>Vous voulez vous connecter en tant que :</p>
          </div>

            <div class="bloc-client">
                <button class="connexion" onclick="openModal()">+  Adhérent</button>
            </div>
            <div class="ligne"></div>
            <div class="bloc-moniteur">
                <button class="connexion">+  Moniteur</button>
            </div>
          </div>

          <div id="C-popup">
          <h3 class="C-title">Identification</h3>
              <br><br>
            <form  method="post" action="controllers/Login.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mot de passe</label>
    <input  name="pass" type="password" class="form-control" id="exampleInputPassword1" >
  </div>


<div class="boutton">
<button type="submit" class="btn btn-primary">CONNEXION</button>
</div>
</from>
<button class="btn btn-danger" onclick="closeModal()">Annuler</button>
</div>

<script type="text/javascript" src="javascript/popup-connexion.js"></script>
<br><br><br><br><br><br>
</body>
</html>
