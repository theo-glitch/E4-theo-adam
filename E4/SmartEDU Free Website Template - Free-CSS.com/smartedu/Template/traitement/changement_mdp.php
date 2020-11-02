<?php
require '../form_rei.php';
require '../class/modele/User.php';
require '../class/manager/Manager_User.php';
session_start();
$modif = new User(['email'=>$_POST['Email']]);

//Modification dans la bdd
$update = new Manager_User;
$update->modification($modif, $_SESSION['email']);
