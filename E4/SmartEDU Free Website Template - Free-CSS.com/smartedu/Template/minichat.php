<?php
try{
  $bdd= new PDO('mysql:host=localhost;dbname=ecole; charset=utf8','root','');
}
catch (Exception $e){
  die('Erreur:'.$e->getMessage());
}

session_start();
  if(isset($_POST['ok_modifier_compte'])) {

    $author = $_POST['nom'];
    $content = $_POST['message'];

    // 2. Créer une requête qui permettra d'insérer ces données
    $query = $bdd->prepare('INSERT INTO minichat SET nom = :author, message = :content');

    $query->execute([
      "author" => $author,
      "content" => $content
    ]);
  }

 ?>



     <!DOCTYPE html>
 <html>
 	<head>
 		<meta charset="utf-8">
 		<title>Tchat !</title>
 		<meta name="viewport" content="width=device-width, initial-scale=1.0">

 		<!-- MATERIAL DESIGN ICONIC FONT -->
 		<link rel="stylesheet" href="../fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

 		<!-- STYLE CSS -->
 		<link rel="stylesheet" href="style.css">
 	</head>

 	<body>

 		<div class="wrapper">
 			<div class="inner">
 				<form action="" method="post">
          <a href="../page_index.php" style="color: #EB2900;" class="genric-btn danger-border circle arrow">Retour<span
              class="lnr lnr-arrow-right"></span></a><br><br>
 					<h3>Communiquez ici !</h3>
 					<p>Monsieur <strong><?= $_SESSION['nom']; ?></strong>, voici quelques règles à respecter : </p>
          <p> 🤬 Les insultes sont interdites. </p>
          <p> 🕵 Les messages sont visibles par les administrateurs. </p>
          <p> 👮 Tout manquement aux règles entrainera des sanctions. </p>
 					<label class="form-group">
            <span>Nom: </span>
 						<input type="text" text-indent: -10000em; name="nom" class="form-control" value="<?= $_SESSION['nom']; ?>"disabled="disabled" >

 						<span class="border"></span>

 					</label>
<br>
<br>
<div class="row">
<div class="col-25">
<label for="subject">Subject</label>
</div>
<div class="col-75">
<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
</div>
</div>
<div class="row">
<input type="submit" value="Submit">
</div>
</form>
</div>
</div>
</div>

        <br><br>
<div class="affichage">
<?php
$allmsg = $bdd->query('SELECT * FROM minichat ORDER BY id DESC');
while ($msg = $allmsg->fetch()){

 ?>
 <br>
<?php echo $msg['date_message'] ?> - <b><?php echo $msg['nom'] ?> : </b> <?php echo $msg['message'] ?> <br>
<?php
}
?>


</div>
 	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
 </html>
