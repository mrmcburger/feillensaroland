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
        <link rel="shortcut icon" href="../favicon.ico">

        <!-- js -->
        <script src="js/modernizr.custom.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script>
        <script src="js/jquery.pajinate.min.js"></script>
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
                                <li><a href="http://www.tennis-club-de-feillens.fr" target="_blank"><i class="icon-link ip"></i>Site web</a></li>
                                <li><a href="https://www.facebook.com/groups/255325817850570" target="_blank"><i class="icon-facebook ip"></i>Facebook</a></li>
                            </ul>
                        </div>
                    </nav>
                </li>
                <li><a href="gallery.php">Galerie</a></li>
                <li><a href="upload.php">Transfert</a></li>
                <li><a id="logout" class="codrops-icon codrops-icon-login" href="logout.php"><span>Deconnexion</span></a></li>
            </ul>
            <h1><img src="img/ball.png" alt="Feillens à Roland"> Transférer une photo</h1>
            <div id="modalGallery">
                <div class="pag-objects">
                    <div class="objects-list clear-fix">
                        <?php
                            $filesArray = scandir('pictures');
                            array_shift($filesArray) && array_shift($filesArray);
                            foreach($filesArray as $file)
                            {
                                echo "<a href='pictures/$file'><div class='picture'><img src='pictures/$file' height='150'></div></a>";
                            }
                        ?>
                    </div>
                    <hr>
                    <div class="page_navigation"></div>
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
