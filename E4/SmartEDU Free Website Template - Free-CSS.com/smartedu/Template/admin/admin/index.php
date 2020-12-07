
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
        <h1 class="text-logo"><span class="glyphicon glyphicon-folder-open"></span> Espace Admin <span class="glyphicon glyphicon-folder-open"></span></h1>
        <div class="container admin">
            <div class="row">
                <a class="btn btn-primary" href="../../gestion_admin.php"><span class="glyphicon glyphicon-arrow-left"></span> Retour à l'accueil</a>
                <h1><strong>Liste des élèves </strong></h1>
                  <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th style="text-align: center;">Id</th>
                      <th style="text-align: center;">Nom</th>
                      <th style="text-align: center;">Prénom</th>
                      <th style="text-align: center;">Email</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                        require 'database.php';
                        $db = Database::connect();
                        $statement = $db->query('SELECT * FROM compte  ORDER BY id DESC');
                        while($item = $statement->fetch())
                        {
                            echo '<tr align="center">';
                            echo '<td>'. $item['id'] . '</td>';
                            echo '<td>'. $item['nom'] . '</td>';
                            echo '<td>'. $item['prenom'] . '</td>';
                            echo '<td>'. $item['email'] . '</td>';
                            echo '<td width=300>';
                            echo '<a class="btn btn-default" href="view.php?id='.$item['id'].'"><span class="glyphicon glyphicon-eye-open"></span> Voir</a>';
                            echo ' ';

                            echo '<a class="btn btn-danger" href="delete.php?id='.$item['id'].'"><span class="glyphicon glyphicon-remove"></span> Supprimer</a>';
                            echo '</td>';
                            echo '</tr>';
                        }
                        Database::disconnect();
                      ?>
                  </tbody>
                </table>
            </div>
        </div>
<br><br><br>

    </body>

</html>
