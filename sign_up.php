<!DOCTYPE html>
<html>



<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="RedstarHospital" />
	<title>Smart University | Bootstrap Responsive Admin Template</title>
	<!-- google font -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet"
		type="text/css" />
	<!-- icons -->
	<link rel="stylesheet" href="principal/assets/plugins/iconic/css/material-design-iconic-font.min.css">
	<!-- bootstrap -->
	<link href="principal/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- Theme Styles -->
	<link href="principal/assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
	<!-- style -->
	<link rel="stylesheet" href="principal/assets/css/pages/login.css">
	<!-- favicon -->
	<link rel="shortcut icon" href="https://www.einfosoft.com/templates/admin/smart/source/assets/img/favicon.ico" />
</head>

<body>
	<div class="main">
		<!-- Sign up form -->
		<section class="signup">
			<div class="container">
				<div class="signup-content">
					<div class="signup-form">
						<h2 class="form-title">INSCRIPTION</h2>
						
						<?php
						 if (isset($_GET['error'])) {
							
							if ($_GET['error']=="invalidusername&email") {
								echo '<p>Pseudo et email invalide!</p><br>';
							} elseif ($_GET['error']=="invalidusername") {
								echo '<p>Pseudo invalide!</p><br>';
							} elseif ($_GET['error']=="invalidemail") {
								echo '<p>E-mail invalide!</p><br>';
							} elseif ($_GET['error']=="pwddontmatch") {
								echo '<p>Les mot de passes ne correspondent!</p><br>';
							} elseif ($_GET['error']=="usernametaken") {
								echo '<p>Ce nom d"utilisateur est déja pris!</p><br>';
							} elseif ($_GET['error']=="success") {
								echo '<p>Félicitation vous êtes inscrit, connectez pour commencer!</p><br>';
							}
						 }
						 ?>
						<form method="POST" action="sign.ext.php" class="register-form" id="register-form">
							<div class="form-group">
								<div class="">
									<input name="nom_d" type="text" placeholder="Votre Nom"
										class="form-control input-height" /> </div>
							</div>
							<div class="form-group">
								<div class="">
									<input name="prenom" type="text" placeholder="Votre Prenom"
										class="form-control input-height" /> </div>
							</div>
							<div class="form-group">
								<div class="">
									<input name="matricule" type="text" placeholder="Votre matricule"
										class="form-control input-height" /> </div>
							</div>
							<div class="form-group">
								<div class="">
									<input name="username" type="text" placeholder="Nom d'utilisateur"
										class="form-control input-height" /> </div>
							</div>
							<div class="form-group">
								<div class="">
									<input name="email" type="email" placeholder="Votre Email"
										class="form-control input-height" /> </div>
							</div>
							<div class="form-group">
								<div class="">
									<input name="pwd" type="password" placeholder="Votre Mot de Passe"
										class="form-control input-height" /> </div>
							</div>
							<div class="form-group">
								<div class="">
									<input name="re-pwd" type="password" placeholder="Confirmer votre Mot de passe"
										class="form-control input-height" /> </div>
							</div>
							<div class="form-group">
								<input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
								<label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all
									statements in <a href="#" class="term-service">Terms of service</a></label>
							</div>
							<div class="form-group form-button">
								<button class="btn btn-round btn-primary" name="signup" id="register">VALIDER</button>
							</div>
						</form>
					</div>
					<div class="signup-image">
						<figure><img src="principal/assets/img/pages/signup.jpg" alt="sing up image"></figure>
						<a href="index.php" class="signup-image-link">SE CONNECTER</a>
					</div>
				</div>
			</div>
		</section>
	</div>
	<!-- start js include path -->
	<script src="principal/assets/plugins/jquery/jquery.min.js"></script>
	<!-- bootstrap -->
	<script src="principal/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- end js include path -->
</body>


<!-- Mirrored from www.einfosoft.com/templates/admin/smart/source/full/sign_up.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Sep 2022 12:37:34 GMT -->
</html>
