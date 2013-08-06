<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<title>Feillens à Roland</title>
		<meta charset="UTF-8" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="" />
		<meta name="keywords" content="" />

		<!-- css -->
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/font-awesome-ie7.min.css" />

		<!-- favicon -->
		<link rel="shortcut icon" href="../favicon.ico">

		<!-- js -->
		<script src="js/modernizr.custom.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script>
	</head>
	<body>
		<div class="container">
			<ul id="gn-menu" class="gn-menu-main">
				<?php
				if(isset($_SESSION['connected']))
				{?>
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller">
							<ul class="gn-menu">
								<li><a href="#"><i class="icon-picture ip"></i>Photos</a></li>
								<li><a href="#"><i class="icon-youtube ip"></i>Vidéos</a></li>
								<li><a href="http://www.tennis-club-de-feillens.fr" target="_blank"><i class="icon-link ip"></i>Site web</a></li>
								<li><a href="https://www.facebook.com/groups/255325817850570" target="_blank"><i class="icon-facebook ip"></i>Facebook</a></li>
								<li><a href="#"><i class="icon-question ip"></i>Help</a></li>
							</ul>
						</div>
					</nav>
				</li>
				<li><a href="#">Gallerie</a></li>
				<li><a href="#">Transfert</a></li>
				<?php } ?>
				<?php
					if(!isset($_SESSION['connected']))
					{
						echo '<li><a id="displayLogin" class="codrops-icon codrops-icon-login" href="#"><span>Connexion</span></a></li>';
					}
					else
					{
						echo '<li><a id="logout" class="codrops-icon codrops-icon-login" href="logout.php"><span>Deconnexion</span></a></li>';
					}
				?>
			</ul>
			<div id="modalLogin">
				<div class="inner">
					<form action="auth.php" id="loginForm" method="post">
						<div class="controls">
							<label for="username">Nom d'utilisateur</label>
							<input id="username" type="text" name="username" placeholder="Nom d'utilisateur">
						</div>
						<div class="controls">
							<label for="password">Mot de passe</label>
							<input id="password" type="password" name="password" placeholder="Mot de passe">
						</div>
						<div class="controls">
							<button class="btn-flat btn-flat-blue" type="submit">Connexion</button>
						</div>
					</form>
				</div>
			</div>
			<header>
				<h1><img src="img/ball.png" alt="Feillens à Roland"> Feillens à Roland <span>Toutes les photos de notre journée passée à Roland Garros</span></h1>
			</header>
		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script src="js/main.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
	</body>
</html>
