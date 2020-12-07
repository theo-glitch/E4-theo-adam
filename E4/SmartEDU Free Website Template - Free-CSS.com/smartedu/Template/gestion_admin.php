<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>
    <!-- Font Icon -->
    <link rel="stylesheet" href="../lib/fonts/material-icon/css/material-design-iconic-font.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="../lib/css/form_style.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
  	<link rel="stylesheet" type="text/css" href="css/main.css">
    <style>
    h2{
      padding-left: 34px;
    }
    </style>
</head>
<body>
    <div class="main">
        <div class="container">
          <div class="container-login100">
            <div class="signup-content">
                <form method="POST" action="ajout_user.php" class="signup-form">
                  <br>
                    <h2>Gestion Admin</h2>

                    <div class="container-login100-form-btn">
                      <button class="login100-form-btn" href="ajout_user.php" class="submit-link submit">
                      Ajouter Utilisateur
                      </button>
                      </div>
</form>
<form method="POST" action="modif_user.php" class="signup-form">
                    <div class="container-login100-form-btn">
                      <button class="login100-form-btn" href="modif_user.php" class="submit-link submit">
                      Modifer Utilisateur
                      </button>
                      </div>
</form>
                    <div class="container-login100-form-btn">
                      <button class="login100-form-btn" href="form_connexion.php" class="submit-link submit">
                      Supprimer Utilisateur
                      </button>
                      </div>

                </form>
            </div>
        </div>
      </div>
    </div>
    <!-- JS -->
    <script src="../lib/vendor/jquery/jquery.min.js"></script>
    <script src="../lib/js/main.js"></script>
</body>
</html>
