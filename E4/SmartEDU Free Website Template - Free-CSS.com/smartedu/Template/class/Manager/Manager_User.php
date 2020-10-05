<?php
//Manager
require_once(__DIR__.'/../modele/User.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Manager_User{

  private $_nom;
  private $_prenom;
  private $_email;
  private $_mdp;

//Inscription dans la bdd
  public function envoiebdd(User $inscription){
    $bdd = new PDO('mysql:host=localhost;dbname=ecole','root','');
    $req = $bdd->prepare('SELECT * FROM compte WHERE email = :email');
    $req->execute(array('email'=>$inscription->getEmail()));
    $donnee = $req->fetch();
    if($donnee)
    {
      $_SESSION['erreur_inscr'] = "L'email est déjà utilisé.";
      header('Location: ../form_inscription.php');
    }
    else{
      $req = $bdd->prepare('INSERT into compte (nom, prenom, email, mdp) value(?,?,?,?)');
      $req -> execute(array($inscription->getNom(), $inscription->getPrenom(), $inscription->getEmail(), SHA1($inscription->getMdp())));
      header('Location: ../confirm_inscription.php');
    }
  }


  //Connexion
  public function connexion(User $connexion){
    $bdd = new PDO('mysql:host=localhost;dbname=ecole','root','');
    $req = $bdd->prepare('SELECT * from compte where email = ? AND mdp = ?');
    $req->execute(array($connexion->getEmail(), SHA1($connexion->getMdp())));
    $donnee = $req->fetch();
    if ($donnee){
      $_SESSION['email'] = $donnee['email'];
      $_SESSION['nom'] = $donnee['nom'];
      if ($donnee['role'] == "admin"){
        $_SESSION['role'] = $donnee['role'];
      }
      header('location: ../index.php');
    }
    else{
      $_SESSION['erreur_co'] = true;
      header('location: ../form_connexion.php');
    }
  }

  //Récupération des données utilisateur pour la modification
  public function placeholder($email){

    $bdd = new PDO('mysql:host=localhost;dbname=ecole','root','');
    $req = $bdd->prepare('SELECT nom, prenom, email from compte where email = ?');
    $req->execute(array($email));
    $donnee = $req->fetch();
    return $donnee;
  }

  //Update des données utilisateur dans la bdd
  public function modification(User $modif, $email){
    $bdd = new PDO('mysql:host=localhost;dbname=ecole','root','');
    $req = $bdd->prepare('UPDATE compte SET nom = ?, prenom = ? WHERE email = ?');
    $req->execute(array($modif->getNom(), $modif->getPrenom(), $email));
    header('location: ../index.php');
    //actualisation du nom de l'utilisateur dans les pages
    $req = $bdd->prepare('SELECT nom from compte where email = ?');
    $req->execute(array($email));
    $donnee = $req->fetch();
    $_SESSION['nom'] = $donnee['nom'];
  }



  //inscription d'un compte admin
  public function inscrip_admin(User $inscription){
    $bdd = new PDO('mysql:host=localhost;dbname=ecole','root','');
    $req = $bdd->prepare('SELECT * FROM compte WHERE email = :email');
    $req->execute(array('email'=>$inscription->getEmail()));
    $donnee = $req->fetch();
    if($donnee)
    {
      $_SESSION['erreur_add_admin'] = "L'identifiant est déjà utilisé.";
      header('Location: ../ajout_admin.php');
    }
    else{
      $req = $bdd->prepare('INSERT into compte (nom, prenom, email, mdp, role) value(?,?,?,?, "admin")');
      $req -> execute(array($inscription->getNom(), $inscription->getPrenom(), $inscription->getEmail(), SHA1($inscription->getMdp())));

      $_SESSION['add_admin'] = "Un compte administrateur a été ajouter avec succès.";
      header('Location: ../ajout_admin.php');
    }
  }

  //récupération des données utilisateur pour un affichage
  public function recup_user(){
    $bdd = new PDO('mysql:host=localhost;dbname=ecole','root','');
    $req = $bdd->query('SELECT * FROM compte');
    $donnee = $req->fetchall();
    return $donnee;
  }

}
?>
