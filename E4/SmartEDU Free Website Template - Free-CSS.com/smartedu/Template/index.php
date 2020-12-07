<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Site Metas -->
    <title>Lycee Robert Schuman</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="host_version">


						</form>
					</div>
				</div>
			</div>
		</div>
	  </div>
	</div>

    <!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->

	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.php">
					<img src="images/logo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
        <div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="about.html">A propos</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">filieres </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="course-grid-2.html">géneral et technologique </a>
								<a class="dropdown-item" href="course-grid-3.html">Pro </a>
								<a class="dropdown-item" href="course-grid-4.html">Etude supérieures </a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">événements </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="blog.html">événements</a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="teachers.html">Professeurs</a></li>
              <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>

          </div>
					</ul>
          <div id="header">
    					<div class="row-1" "col-md-12">
    						<br>
    						<div>
<ul class="nav navbar-nav navbar-right">
                  <?php
                  session_start();
    									//Connexion ou connecté
    									if(isset($_SESSION['nom'])){
    									echo "Bienvenue ".$_SESSION['nom'];
    								}
    								else{
    									echo '<li class="nav-item"><a class="nav-link" href="form_inscription.php">Inscription</a></li>
    												<li class="nav-item"><a class="nav-link" href="connexion.php">Connexion</a></li>';
    								}
    								?></div>
    						</div>

                <?php
    							//affichage des boutons si connecté ou non
    							if(isset($_SESSION['nom']) && !isset($_SESSION['role'])){
    								echo '	<ul class="navbar-nav ml-auto">
            						<li class="nav-item"><a class="nav-link" href="compte.php">Mon Profil</a></li>
                        	<li class="nav-item"><a class="nav-link" href="minichat.php">Minichat</a></li>
                        ';
    							}
    						else if(isset($_SESSION['nom']) && isset($_SESSION['role'])){
    								echo '<li class="last"><a href="view/gestion_admin.php">Gestion Admin</a></li>';
    							}
    							if(isset($_SESSION['nom'])){
    								echo '
            						<li class="nav-item"><a class="nav-link" href="traitement/deconnexion.php">Deconnexion</a></li>
                        </ul>';}
    						?>
    					</ul>
    				</div>
    			</div>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->

	<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false" >
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleControls" data-slide-to="1"></li>
			<li data-target="#carouselExampleControls" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<div id="home" class="first-section" style="background-image:url('images/slider-01.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-right">
									<div class="big-tagline">
										<h2><strong>Lycée  </strong> Robert Schuman</h2>
											<a href="contact.html" class="hover-btn-new"><span>Contactez-Nous</span></a>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<a href="about.html" class="hover-btn-new"><span>Voir Plus</span></a>
									</div>
								</div>
							</div><!-- end row -->
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('images/slider-02.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-left">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight">Lycée <strong>Robert Schuman</strong></h2>
										<p class="lead" data-animation="animated fadeInLeft"></p>
											<a href="contact.html" class="hover-btn-new"><span>Contactez-Nous</span></a>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<a href="about.html" class="hover-btn-new"><span>Voir Plus</span></a>
									</div>
								</div>
							</div><!-- end row -->
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>

			<!-- Left Control -->
			<a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="fa fa-angle-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>

			<!-- Right Control -->
			<a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="fa fa-angle-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<div class="section cl">
		<div class="container">
			<div class="row text-left stat-wrap">
				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-study"></i></span>
					<p class="stat_count">800</p>
					<h3>Elèves</h3>
				</div><!-- end col -->

				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-online"></i></span>
					<p class="stat_count">9</p>
					<h3>Formations</h3>
				</div><!-- end col -->

				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-years"></i></span>
					<p class="stat_count">55</p>
					<h3>Années Complétés</h3>
				</div><!-- end col -->
			</div><!-- end row -->
		</div><!-- end container -->
	</div><!-- end section -->


    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>A propos de nous</h3>
                        </div>
                        <p> Enseignement catholique sous contrat d'association avec l'Etat<br />
Etablissement habilité à percevoir la taxe d'apprentissage</p>
5 avenue du Général de Gaulle - 93440 Dugny<br />
<div>
<span class="iconlist-char" data-av_iconfont="entypo-fontello" data-av_icon="" aria-hidden="true"></span> 01 48 37 74 26<span class="iconlist-char" data-av_iconfont="entypo-fontello" data-av_icon="" aria-hidden="true" style="margin-left: 20px"></span> 01 48 35 48 14<br />
<span class="iconlist-char" data-av_iconfont="entypo-fontello" data-av_icon="" aria-hidden="true"></span> administration@lyceerobertschuman.com</p>
</div>



						<div class="footer-right">

						</div>
                    </div><!-- end clearfix -->
                </div><!-- end col -->

				<div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>LIENS RAPIDES</h3>
                        </div>
                        <ul class="footer-links">

                            <li><a href="https://0931573e.index-education.net/pronote">Espace Pronote</a></li>
							<li><a href="https://youtu.be/5fQu2KygRL0">Vidéo Etablissement</a></li>
							<li><a href="https://www.facebook.com/robertschumandugny">Facebook</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Accès</h3>
                        </div>

                      <div>
                        <div class="textwidget">RER B (Le Bourget) et Bus 133 (Albert Chardavoine)
RER B (La Courneuve) et Bus 249 (Albert Chardavoine)
Tramway T11:   arrêt Dugny-La Courneuve</div>
		<span class="seperator extralight-border"></span></section></div>
                      </div>
                    </div><!-- end clearfix -->
                </div><!-- end col -->

            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-center">
                    <p class="footer-company-name">Tout droit réserver. &copy; 2020 </p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
	<script src="js/timeline.min.js"></script>
	<script>
		timeline(document.querySelectorAll('.timeline'), {
			forceVerticalMode: 700,
			mode: 'horizontal',
			verticalStartPosition: 'left',
			visibleItems: 4
		});
	</script>
</body>
</html>
