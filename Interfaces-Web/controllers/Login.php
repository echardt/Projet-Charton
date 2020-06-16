<?php

  


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

  ?>
