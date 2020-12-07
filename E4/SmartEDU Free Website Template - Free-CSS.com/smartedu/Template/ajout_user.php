<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajout</title>
    <!-- Font Icon -->
    <link rel="stylesheet" href="../lib/fonts/material-icon/css/material-design-iconic-font.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="../lib/css/form_style.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-pic js-tilt" data-tilt>
          <img src="images/img-01.png" alt="IMG">
        </div>

          <form method="POST" action="traitement/cible_ajout_user.php" class="signup-form">
          <span class="login100-form-title">
            Ajouter un Utilisateur
          </span>

          <div class="wrap-input100">
            <input class="input100" type="text" name="nom" placeholder="Nom">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100">
            <input class="input100" type="text" name="prenom" placeholder="Prenom">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Un email valide est requis: ex@abc.xyz">
            <input class="input100" type="text" name="email" placeholder="Email">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Password is required">
            <input class="input100" type="password" name="mdp" placeholder="Mot de passe">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
          </div>

          <div class="wrap-input100">
            <input type="password" class="input100" name="confirmmdp"  placeholder="Confirmer mot de passe"/>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
          </div>

          <div class="container-login100-form-btn">
            <button class="login100-form-btn">
              Ajout
            </button>
          </div>

                </form>
            </div>
        </div>
    </div>
    <!-- JS -->
    <script src="../lib/vendor/jquery/jquery.min.js"></script>
    <script src="../lib/js/main.js"></script>
</body>
</html>
