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
</head>
<body>
    <div class="main">
        <div class="container">
            <div class="signup-content">
                <form method="POST" action="traitement/cible_inscription.php" class="signup-form">
                  <br>
                    <h2>Ajout</h2>
                    <div class="form-group">
                        <input type="text" class="form-input" name="nom"  placeholder="Nom"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="prenom"  placeholder="Prenom"/>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-input" name="email"  placeholder="Email"/>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-input" name="mdp"  placeholder="Mot de passe"/>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-input" name="confirmmdp"  placeholder="Retaper votre mot de passe"/>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="form-submit submit" value="Ajouter"/>
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
