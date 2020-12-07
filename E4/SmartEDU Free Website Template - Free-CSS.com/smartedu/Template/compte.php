<?php session_start();
require 'class/manager/Manager_User.php';
if(!isset($_SESSION['nom'])){
  header('location:../index.php');
}
else{
  $modif = new Manager_User;
	$donnee = $modif->placeholder($_SESSION['email']);
}
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/compte.css">
  <link rel="stylesheet" href="css/compte.css">
<!--- Include the above in your HEAD tag ---------->

<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="images/oui.jpg" alt=""/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                      <div class="field"><?php echo $donnee['nom']."<br> <br>". $donnee['prenom'];?> </div>
                                    </h5>
                                    <h6>
                                        Etudiant
                                    </h6>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Profil</a>
                                </li>
                              </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                      <form>
                        <input type="button" value="Retour" onclick="window.location.href='index.php'" />
                      </form>
                      </br>
                      </br>
                        <form id="contacts-form" action="traitement/cible_modif.php" method="POST">
                          <div class="container-login100-form-btn">
                						<button class="login100-form-btn">
                							Modifier
                						</button>
                					</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">

                    </div>
                    <div id="content">

              							<div class="inner">

                    						<fieldset>
                    						<div class="field"><label>Votre nom:</label><input type="text" name="nom" value=<?php echo $donnee['nom']?> required/></div>
                    						<div class="field"><label>Votre prenom:</label><input type="text" name="prenom" value=<?php echo $donnee['prenom']?> required/></div>
                    						<div class="wrapper">

                    						</div>
                    						</fieldset>
                    					</form>
              							</div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="field"><?php echo $donnee['email']?> </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>classe</label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="field"> BTS SIO SLAM 2 </div>
                                            </div>
                                        </div>
                            </div>

            </form>
        </div>
