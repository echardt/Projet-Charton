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
            <p>Vous voulez vous connecter tant que :</p>
          </div>

            <div class="bloc-client">
                <button class="connexion">+  Adhérent</button>
            </div>
            <div class="ligne"></div>
            <div class="bloc-moniteur">
                <button class="connexion">+  Moniteur</button>
            </div>
          </div>

          <div id="C-popup"></div>







<!--
<form method="post" action="controllers/Login.php">
    <div class="container">
      <div class="row">
        <div class=" col  col-sm-8 offset-sm-4 col-md-5 offset-md-5 col-lg-5 offset-lg-5">




      <h3 class="title-connexion">Identification</h3>
        <div class="form-group">

              <label for="exampleInputEmail1">Identifiant</label>
              <input type="email" class="form-control" name="mail" id="exampleInputEmail1" aria-describedby="emailHelp" required>
        </div>

        <div class="form-group">
              <label for="exampleInputPassword1">Mot de passe</label>
              <input type="password" class="form-control" name="pass" id="exampleInputPassword1" required>
        </div>
        <button type="submit" class="btn btn-primary">CONNEXION</button>

      </div>
    </div>
  </div>

</form>

!-->
<!--<script type="text/javascript" src="javascript/popup-connexion.js">!-->

</script>
</body>
</html>
