<?php
	header('Content-Type:text/html;charset=utf-8');

	// BDD
	define('BDD_USER', 'root');
	define('BDD_PWD', '');
	define('BDD_SERVER', '');
	define('BDD_NAME', 'ecole');

	// Infos site
	define('URL_SITE', 'https://localhost/Git/E4-theo-adam/Template/chat/');
	define('URL_MEDIA', 'https://www.domaine.com/chemin/chat/images/');
	define('URL_PROFIL', 'https://www.google.fr/?q=');
	define('PATH_SITE', '../E4-theo-adam/Template/chat/');

	// Connexion BDD
  $db = new PDO('mysql:host=localhost;dbname=ecole','root','');

	// Session
	session_start();
?>
