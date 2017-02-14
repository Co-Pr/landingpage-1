
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

	<link rel="icon" type="image/x-icon" href="img/Electron Way - dash v1 0.png">


  <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" > <!-- Resource style -->

	<!-- Latest compiled and minified JavaScript -->
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery-3.1.1.js"></script>
	<script src="js/jquery-3.1.1.js"></script>

	<!-- Les scripts codés en JS(Effet Smooth ,..) -->
	<script src="js/script.js"></script>


	<title>Co-P'r</title>
</head>
<body class="container-fluid">

	<main class="cd-main-content">

<!-- PRESENTATION -->
				<div class="cd-fixed-bg cd-bg-1" >

							<!-- Le Multilingue En/Fr
										<div class="container-fluid pull-right">
											<div id="navbar" class="collapse navbar-collapse" role="navigation">
												<h3><a href="index.html">En/Fr</a></h3>
											</div>
										</div> -->


							<!--  LE LOGO  -->
							<center>
									<img id="logo" src="img/CoPr-Logo v1 0 - outlined Future.png" class="logo">
							</center>

							<!--  BOUTON Our Vision / Contact -->
							<div class="text-center">
									<ul class="list-inline text-center">
										<li><button id="singlebutton" class="bouton js-scrollTo" href="#vision">Our Vision</button></li>
										<li></li>

										<li><button id="singlebutton" class="bouton js-scrollTo" href="#contact">Contact</button>	</li>
									<!--<li><button id="singlebutton" name="singlebutton" class="btn btn-primary js-scrollTo" href="#vision">Notre Vision</button></li>
										<li><button id="singlebutton" name="singlebutton" class="btn btn-primary js-scrollTo" href="#contact">Contact</button>	</li> -->
									</ul>
							</div>


						<!--  Flèche -->
				</div>

<!-- WHAT WE DO ? -->

		<div class="cd-scrolling-bg cd-color-3" id="vision">

				<div class="jumbotron vertical-center container">

						<h3>Our Vision: shaping the future with no limit</h3>

						<br>

						<div class="container">
								<img src="img/Electron Way - dash v1 0.png" class="pull-left illustration img-responsive">

								<p class="lead">
									In our fast changing world, the traditional
									consulting ecosystem is disturbed by
									Innovation and new Social desires.<br>
									In this context, we believe that value will
									only come from a limitless ecosystem,
									able to renew the promise of consulting.
								</p>

						</div>

						<br>
						<br>

						<div class="align-bottom pull-right"><h3>
							<a class="js-scrollTo" href="#title">Would you like to know more?</a>
						</h3></div>

						</div>

				</div> <!-- cd-container -->

		</div> <!-- Fin de la section VISION -->


<!-- section CONTACT -->
		<div class="cd-fixed-bg cd-bg-contact jumbotron" id="contact">

						<!-- Titre  -->
						<form method="post" name="email" action="PHPMail/test.php" id="form" enctype="multipart/form-data" >

									<!-- Les champs de saisies -->
									<div class="form-group row">
										<br>
										 <input id="title" name="title" type="text" value="Contact us" readonly style="border:0px;font-size:4em;">
									</div>

									<div class="form-group row">
										<br>
										 <input id="nom" name="name" type="text" placeholder="Last Name / First Name">
									</div>

									<div class="form-group row">
										<br>
										<input id="email" name="mail" type="email" placeholder="E-Mail">
									</div>

									<div class="form-group row">
										<br>
										<input id="entse" name="entse" type="text" placeholder="Company">
									</div>

									<div class="form-group row">
										<br>
										<textarea id="message" name="Msg" type="text" placeholder="Your Message"></textarea>
									</div>

									<!-- Le bouton d'Envoi -->
									<div class="form-group middle">
										<br>
											<input style="width: 200px;" name="submit"  type="submit" value="SEND">
									</div>

						</form>

						<!-- Retour en haut -->
						<div class="align-bottom pull-right"><h3>
							<a class="js-scrollTo" href="#logo">Top</a>
						</h3></div>

					<footer>
						<hr>
						<div class="container">
							<h4>
								<p style="font-size: 65%;" class="text-center">
							The Consulting Platform © 2017
							</p>
						</h4>
						</div> <!-- cd-container -->
					</footer>




		</div> <!-- cd-fixed-bg -->





 	</main> <!-- cd-main-content -->

</body>
</html>
