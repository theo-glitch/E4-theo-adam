<?php
    require 'database.php';

    if(!empty($_GET['id']))
    {
        $id = checkInput($_GET['id']);
    }

    $db = Database::connect();
    $statement = $db->prepare("SELECT * FROM compte WHERE id = ?");
    $statement->execute(array($id));
    $item = $statement->fetch();


    Database::disconnect();

    function checkInput($data)
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Espace Admin</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="../css/styles.css">
    </head>

    <body>
        <h1 class="text-logo"><span class="glyphicon glyphicon-user"></span> Admin - Compte <span class="glyphicon glyphicon-user"></span></h1>
         <div class="container admin">
            <div class="row">
               <div class="col-sm-6">
                    <h1><strong>Voir l'élève</strong></h1>
                    <br>
                    <form>
                      <div class="form-group">
                        <label>Identifiant :</label><?php echo '  '.$item['id'];?>
                      </div>
                      <div class="form-group">
                        <label>Nom:</label><?php echo '  '.$item['nom'];?>
                      </div>
                      <div class="form-group">
                        <label>Prénom:</label><?php echo '  '.$item['prenom'];?>
                      </div>
                      <div class="form-group">
                        <label>Email:</label><?php echo '  '.$item['email'];?>
                      </div>
                    </form>
                    <br>
                    <div class="form-actions">
                      <a class="btn btn-primary" href="index.php"><span class="glyphicon glyphicon-arrow-left"></span> Retour</a>
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>
