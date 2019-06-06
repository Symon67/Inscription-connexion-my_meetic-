<?php
$bdd = new PDO('mysql:host=localhost;dbname=my_meetic', 'root', '');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Inscription</title>
  </head>
  <body>
    <header class="lolo">
        <img class= "logo" src="../images/meetic1.png" alt="logo">
      <div class="titre">
        <h1>Inscription _____________________________________</h1>
    </div>
    </header>
    <div class="container col-2 col sm-2 col md-2">
      <div class="form-group">
  <form method="post" action="inscription2.php">

    <input required type="text" class="form-control" name="nom" placeholder="Votre nom">
      <br/>
    <input required type="text" class="form-control" name="prenom" placeholder="Votre prénom">
</div>
<select required name="sexe">
  <option>Homme</option>
  <option>Femme</option>
</select>
<br/> <br/>
<div>
    <label>Date de naissance</label>
    <input required type="date"  name="naissance">
</div>
<br/>
    <div class="form-group">

      <input required type="email" class="form-control" name="email"  placeholder="Entrer votre email">
    </div>
    <div class="form-group">

      <input required type="text" class="form-control" name="ville" placeholder="Votre ville">
    </div>
    <div class="form-group">

      <input required type="password" class="form-control" name="mdp" placeholder="Votre mot de passe">
    </div>
    <div class="form-group">

      <input required type="password" class="form-control" name="mdp2" placeholder="Confirmer votre mot de passe">
    </div>
      <input required type="submit" value="Inscription">
    </div>
  </form>


  </body>
</html>
