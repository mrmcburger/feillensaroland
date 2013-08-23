<?php
    session_start();
    if(!isset($_SESSION['connected']))
    {
        header('Location: index.php');
    }
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
		<link rel="shortcut icon" href="img/favicon.png">

		<!-- js -->
		<script src="js/modernizr.custom.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script>
	</head>
	<body>
		<div class="container">
			<ul id="gn-menu" class="gn-menu-main">
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller">
							<ul class="gn-menu">
								<li><a href="gallery.php"><i class="icon-picture ip"></i>Photos</a></li>
								<li><a href="http://www.tennis-club-de-feillens.fr" target="_blank"><i class="icon-link ip"></i>Site web du TC Feillens</a></li>
								<li><a href="https://www.facebook.com/groups/255325817850570" target="_blank"><i class="icon-facebook ip"></i>Facebook</a></li>
							</ul>
						</div>
					</nav>
				</li>
				<li><a href="gallery.php">Galerie</a></li>
				<li><a href="upload.php">Transfert</a></li>
				<li><a href="help.php">Aide</a></li>
				<li><a id="logout" class="codrops-icon codrops-icon-login" href="logout.php"><span>Deconnexion</span></a></li>
			</ul>
			<h1><img src="img/ball.png" alt="Feillens à Roland"> Aide</h1>
			<div id="modalHelp">
				<span><strong>Comment télécharger une photo depuis la galerie ?</strong></span>
				<p>C'est très simple !<br />
				Il vous suffit de vous rendre sur la page Galerie, puis de cliquer sur la photo que vous souhaitez télécharger. Un aperçu de la photo apparaît, il vous suffit alors de faire un clic droit dessus, et de cliquer sur "Enregistrer l'image sous...".
				Et le tour est joué !</p>
			</div>
		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script src="js/main.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
	</body>
</html>
