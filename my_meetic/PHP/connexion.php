<?php
$bdd = new PDO('mysql:host=localhost;dbname=my_meetic', 'root', '');
?>
<!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/style.css">
          <title>My meetic</title>
        </head>
        <body>
      <header class="lolo">
        <img class= "logo" src="../images/meetic1.png" alt="logo">
        <div class="titre">
        <h1>Connexion _____________________________________</h >
      </div>
      </header>
      <div class="container col-2 col sm-2 col md-2">
      <form action="connexion2.php" method="post">
        <div class="form-group">
          <label for="exampleInputEmail1">Adresse email</label>
          <input type="email" class="form-control" name="emaill" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer votre email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Mot de passe</label>
          <input type="password" class="form-control" name="mdp" id="exampleInputPassword1" placeholder="Entrer votre votre mot de passe">
        </div>
        <!--<div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
        </div>-->
        <input required type="submit" value="Connexion">
      </form>
      </div>

        </body>
      </html>
