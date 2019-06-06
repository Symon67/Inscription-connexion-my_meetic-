<?php
require_once('pdo.php');
class Connexion extends database
{
  public function getMdp($email)
  {
    $db = $this->db();
    $lol = $db->prepare('SELECT mdp FROM utilisateurs WHERE email = ?');
    $lol->execute(array($email));
    $xd = $lol->fetch();
    return $xd['mdp'];
  }
}
print_r($_POST);
$connexion = New Connexion;
if (password_verify($_POST['mdp'],$connexion->getMdp($_POST['emaill']))) {
    echo "Vous êtes connecter !";
}
else{
  echo 'Email ou mot de passe incorrect !';
}

?>