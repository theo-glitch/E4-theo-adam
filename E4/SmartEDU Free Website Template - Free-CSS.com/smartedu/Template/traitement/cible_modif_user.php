<?php
  //Traitement des données entrées dans le form de modification
  require '../class/modele/User.php';
  require '../class/manager/Manager_User.php';
  session_start();
  $modif = new User(['nom'=>$_POST['nom'],
                    'prenom'=>$_POST['prenom'],
                  'email'=>$_POST['email'],
                'mdp'=>$_POST['mdp']]);

  //Modification dans la bdd
  $update = new Manager_User;
  $update->modification_admin($modif, $_SESSION['email']);

?>
