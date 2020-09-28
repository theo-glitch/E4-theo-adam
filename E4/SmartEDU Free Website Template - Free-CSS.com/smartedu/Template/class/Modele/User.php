<?php
//Modèle
class User{

  private $_Nom;
  private $_Prenom;
  private $_mail;
  private $_mdp;

  public function __construct(array $donnees){
    $this->hydrate($donnees);
  }

  public function hydrate(array $donnees){
    foreach ($donnees as $key => $value){
      $method = 'set'.ucfirst($key);

      if (method_exists($this, $method)){
  	// On appelle le setter.
        	$this->$method($value);
      }
    }
  }

  //setter
  public function setNom($Nom){
    $this->_Nom = $Nom;
  }
  public function setPrenom($Prenom){
    $this->_Prenom = $Prenom;
  }
  public function setmail($mail){
    $this->_mail = $mail;
  }
  public function setMdp($mdp){
    $this->_mdp = $mdp;
  }
  //getter
  public function getNom(){return $this->_Nom;}
  public function getPrenom(){return $this->_Prenom;}
  public function getmail(){return $this->_mail;}
  public function getMdp(){return $this->_mdp;}
}
?>
