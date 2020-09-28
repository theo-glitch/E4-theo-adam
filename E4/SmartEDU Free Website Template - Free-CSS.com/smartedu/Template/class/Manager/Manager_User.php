<?php
//Manager
require_once(__DIR__.'/../modele/User.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Manager_User{

  private $_Nom;
  private $_Prenom;
  private $_mail;
  private $_mdp;

//Inscription dans la bdd
  public function envoiebdd(User $inscription){
    $bdd = new PDO('mysql:host=localhost;dbname=e4','root','');
    $req = $bdd->prepare('SELECT * FROM compte WHERE mail = :mail');
    $req->execute(array('mail'=>$inscription->getmail()));
    $donnee = $req->fetch();
    if($donnee)
    {
      $_SESSION['erreur_inscr'] = "L'mail est déjà utilisé.";
      header('Location: ../form_inscription.php');
    }
    else{
      $req = $bdd->prepare('INSERT into compte (Nom, Prenom, mail, mdp) value(?,?,?,?)');
      $req -> execute(array($inscription->getNom(), $inscription->getPrenom(), $inscription->getmail(), SHA1($inscription->getMdp())));
      header('Location: ../confirm_inscription.php');
    }
  }

  //Connexion
  public function connexion(User $connexion){
    $bdd = new PDO('mysql:host=localhost;dbname=e4','root','');
    $req = $bdd->prepare('SELECT * from compte where mail = ? AND mdp = ?');
    $req->execute(array($connexion->getmail(), SHA1($connexion->getMdp())));
    $donnee = $req->fetch();
    if ($donnee){
      $_SESSION['mail'] = $donnee['mail'];
      $_SESSION['Nom'] = $donnee['Nom'];
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
  public function placeholder($mail){

    $bdd = new PDO('mysql:host=localhost;dbname=e4','root','');
    $req = $bdd->prepare('SELECT Nom, Prenom, mail from compte where mail = ?');
    $req->execute(array($mail));
    $donnee = $req->fetch();
    return $donnee;
  }

  //Update des données utilisateur dans la bdd
  public function modification(User $modif, $mail){
    $bdd = new PDO('mysql:host=localhost;dbname=e4','root','');
    $req = $bdd->prepare('UPDATE compte SET Nom = ?, Prenom = ? WHERE mail = ?');
    $req->execute(array($modif->getNom(), $modif->getPrenom(), $mail));
    header('location: ../index.php');
    //actualisation du Nom de l'utilisateur dans les pages
    $req = $bdd->prepare('SELECT Nom from compte where mail = ?');
    $req->execute(array($mail));
    $donnee = $req->fetch();
    $_SESSION['Nom'] = $donnee['Nom'];
  }




  //récupération des données utilisateur pour un affichage
  public function recup_user(){
    $bdd = new PDO('mysql:host=localhost;dbname=e4','root','');
    $req = $bdd->query('SELECT * FROM compte');
    $donnee = $req->fetchall();
    return $donnee;
  }


  //récupération des données réservations pour un affichage utilisateur
  public function recup_reserv_user($mail){
    $bdd = new PDO('mysql:host=localhost;dbname=e4','root','');
    $req = $bdd->prepare('SELECT * FROM reservation WHERE mail = ?');
    $req->execute(array($mail));
    $donnee = $req->fetchall();
    return $donnee;
  }


}
?>
