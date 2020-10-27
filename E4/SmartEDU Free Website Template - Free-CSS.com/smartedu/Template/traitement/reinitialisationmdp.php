<?php

//connexion;

$userdb="root";
$passdb="";
$dbname="ecole";
$host="localhost";


try
{
    $bdd = new PDO('mysql:host='. $host .';dbname='. $dbname .';charset=utf8', $userdb, $passdb);
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}



//envoi d' un simple mail avec son message
        if(isset($_POST['message'])){
            $position_arobase=strpos($_POST['email'],'@');
            if($position_arobase===false)
                echo '<p>Votre email doit comporter un arobase.</p>';
            else {
                $retour=mail('*******@gmail.com','Envoi depuis *******', $_POST['message'], 'From : '.$_POST['mail']);
                if($retour)
                    echo '<p>Votre message a &eacutet&eacute envoy&eacute.</p>';
                else
                    echo '<p>Erreur.</p>';
            }
        }





//envoi du mdp par mail (sur quoi je bloque)

if(!empty($_POST['email']))
$mail = $_POST['email'];
else
exit("mail vide.");


$sql = "SELECT email FROM compte WHERE email = '".$mail."' ";
$req =mysql_query($sql) or die ('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

if(mysql_num_rows($req) != 1)//si le nombre de lignes retourne par la requete != 1
exit("mail inconnu.");
else
{
$row1 = mysql_fetch_assoc($req);
$retour = mysql_query("SELECT mdp FROM compte WHERE email = '".$mail."' ");
$row2 = mysql_fetch_assoc($retour);


$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$objet = 'Récupération de votre mot de passe';

if(!mail($row1['mail'], $objet, $row2['mdp'], $headers))
echo 'probleme lors de l\'envoi du mail';
else
echo 'mail envoye';
}


?>
    </body>
</html>
