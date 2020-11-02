<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">
<head>
	<title>réinitialisation du mot de passe </title> <!--on nomme le titre de la page-->
	<meta charset="UTF-8"> <!--On encode en utf-8-->

	<!--On importe les bibliothèques de bootsrap néscéssaires au design dans le vendor, on importe les feuilles css...-->
</head>
<body>
<form method="POST" action="form_connexion" class="mdp_oublie"
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="form-group">
						<input type="text" class="form-input" name="email"  placeholder="Email"/>
				</div>
        <div class="form-group">
						<input type="text" class="form-input" name="MDP"  placeholder="nouveau mot de passe"/>
				</div>
        <div class="form-group">
						<input type="text" class="form-input" name="MDP1"  placeholder="Confirmer nouveau mot de passe"/>
				</div>
				</div>


					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
                                                            <!--on met de l'espace dans le cadre-->

						</div>


					</div>
						<center><button class="Recov_mail" >
							<a href="form_connexion.php" >Confirmer</a>
						</button></center> <!--On met un bouton dans lequel on met un lien qui retourne vers la page de connexion -->
			<br>
			<br>
			<br>
			</div>
		</div>
	</div>
</form>
<!--===============================================================================================-->
	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/daterangepicker/moment.min.js"></script>
	<script src="../vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../js/main.js"></script>
<!-- On importe les fonctionalité de bootsrap néscéssaires au design de la page-->
</body>
</html>
