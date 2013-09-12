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
				<li><a href="videos.php">Vidéos</a></li>
				<li><a href="help.php">Aide</a></li>
				<li><a id="logout" class="codrops-icon codrops-icon-login" href="logout.php"><span>Deconnexion</span></a></li>
			</ul>
			<h1><img src="img/ball.png" alt="Feillens à Roland"> Vidéos</h1>
			<div id="modalGallery">
				<span><strong>Vidéos BNP</strong></span>
				<hr>
				<div class="clear-fix">
					<iframe width="560" height="315" src="//www.youtube.com/embed/vMtRP6-34jo" frameborder="0" allowfullscreen></iframe>
				</div>
				<span><strong>Vidéos du concours</strong></span>
				<hr>
				<div class="clear-fix">
					<iframe width="560" height="315" src="//www.youtube.com/embed/R6PZGfxlSv0" frameborder="0" allowfullscreen></iframe>
					<iframe width="560" height="315" src="//www.youtube.com/embed/q1X0ov9Ri3g" frameborder="0" allowfullscreen></iframe>
					<iframe width="560" height="315" src="//www.youtube.com/embed/WI9849LrRS4" frameborder="0" allowfullscreen></iframe>
					<iframe width="560" height="315" src="//www.youtube.com/embed/bRJHFo3JLgA" frameborder="0" allowfullscreen></iframe>
					<iframe width="560" height="315" src="//www.youtube.com/embed/qNk2zYeYZp4" frameborder="0" allowfullscreen></iframe>
					<iframe width="560" height="315" src="//www.youtube.com/embed/kyhvQY7QTGg" frameborder="0" allowfullscreen></iframe>
					<iframe width="560" height="315" src="//www.youtube.com/embed/29CUgDEfjxc" frameborder="0" allowfullscreen></iframe>
					<iframe width="560" height="315" src="//www.youtube.com/embed/p5pIlIUm-Pg" frameborder="0" allowfullscreen></iframe>
					<iframe width="560" height="315" src="//www.youtube.com/embed/vK_uS9Wt4-8" frameborder="0" allowfullscreen></iframe>
					<iframe width="560" height="315" src="//www.youtube.com/embed/_h-WIUcr0Og" frameborder="0" allowfullscreen></iframe>
					<iframe width="560" height="315" src="//www.youtube.com/embed/zQuATzxl9vE" frameborder="0" allowfullscreen></iframe>
					<iframe width="560" height="315" src="//www.youtube.com/embed/PqlHxU2VOA4" frameborder="0" allowfullscreen></iframe>
				</div>
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
