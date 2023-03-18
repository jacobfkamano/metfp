<!DOCTYPE html>
<html>


<!-- Mirrored from www.einfosoft.com/templates/admin/smart/source/full/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Sep 2022 12:36:46 GMT -->
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
		<!-- Sing in  Form -->
		<section class="sign-in">
			<div class="container">
				<div class="signin-content">
					<div class="signin-image">
						<figure><img src="principal/assets/img/pages/materiel.jpeg" alt="sing up image"></figure>
						<a href="sign_up.php" class="signup-image-link">S'INSCRIRE</a>
					</div>
					<div class="signin-form">
						<h2 class="form-title">CONNEXION</h2>
						<?php
						 if (isset($_GET['error'])) {
							
							if ($_GET['error']=="wrongpassword") {
								echo '<p>Mot de passe invalide!</p><br>';
							} elseif ($_GET['error']=="dontexist") {
								echo '<p>Cet utilisateur n"existe pas</p><br>';
							} 
						 }
						 ?>
						<form  action="login.ext.php" method="post" class="register-form" id="login-form">
							<div class="form-group">
								<div class="">
									<input name="username" type="text" placeholder="Nom d'utilisateur/Email"
										class="form-control input-height" /> </div>
							</div>
							<div class="form-group">
								<div class="">
									<input name="pwd" type="password" placeholder="Mot de passe"
										class="form-control input-height" /> </div>
							</div>
							<div class="form-group">
								<input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
								<label for="remember-me" class="label-agree-term"><span><span></span></span>Remember
									me</label>
							</div>
							<div class="form-group form-button">
								<button class="btn btn-round btn-primary" name="signin" id="signin">CONNEXION</button>
							</div>
						</form>

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


<!-- Mirrored from www.einfosoft.com/templates/admin/smart/source/full/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Sep 2022 12:36:46 GMT -->
</html>
