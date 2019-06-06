<?php
require('pdo.php');
class inscription extends database
{
  private $nom;
  private $prenom;
  private $naissance;
  private $sexe;
  private $ville;
  private $email;
  private $mdp;

public function __construct()
{
  $this->nom = htmlspecialchars($_POST['nom']);
  $this->prenom = htmlspecialchars($_POST['prenom']);
  $this->naissance = htmlspecialchars($_POST['naissance']);
  $this->email = htmlspecialchars($_POST['email']);
  $this->sexe = htmlspecialchars($_POST['sexe']);
  $this->ville = htmlspecialchars($_POST['ville']);
  $this->mdp = password_hash(htmlspecialchars($_POST['mdp']), PASSWORD_DEFAULT);
}
public function start()
{

  $db = $this-> db();

  $email = $db->prepare('SELECT COUNT(*) as nbremail FROM utilisateurs WHERE email = ?');
  $email->execute(array(
    $this->email
  ));
  $resultat = $email->fetch();
  if($resultat['nbremail'] == 0) {
    $req = $db->prepare("INSERT INTO `utilisateurs`(`Nom`, `Prénom`, `Datedenaissance`, `Sexe`, `Ville`, `email`, `mdp`)
    VALUES(?, ?, ?, ?, ?, ?, ?);");
    $req->execute(array(
      $this->nom,
      $this->prenom,
      $this->naissance,
      $this->sexe,
      $this->ville,
      $this->email,
      $this->mdp));
      echo "inscription réussie";
      var_dump($req);
      return $req;
    }else{
      echo "Email déjà pris";
    }
  }

}

$user = new inscription();
if($user->start() ) {
  header('Location: connexion.php');
}


?>
