<?php
    session_start();
    if(!isset($_SESSION['connected']))
    {
        header('Location: index.php');
    }
?>
<?php
    if(!isset($_FILES['picture']))
    {
?>
    <form method="post" id="upload_form" enctype="multipart/form-data">
        Photo : <input type="file" name="picture"><br />
        <input type="submit" name="envoyer" value="Envoyer">
    </form>
<?php
    }
    else
    {
        $error = false;

        if ($_FILES['picture']['error'] > 0)
        {
            echo "Erreur lors du transfert<br />";
            $error = true;
        }
        else
        {
            $maxsize = 10485760;
            $valid_extensions = array( 'jpg' , 'jpeg' , 'gif' , 'png', 'bmp');

            if ($_FILES['picture']['size'] > $maxsize)
            {
                echo "Le fichier est trop gros (plus de 10Mo)";
                $error = true;
            }

            $extension_uploaded = strtolower(substr(strrchr($_FILES['picture']['name'], '.') ,1) );
            if(! in_array($extension_uploaded, $valid_extensions) )
            {
                echo "Extension incorrecte";
                $error = true;
            }

            if(file_exists('pictures/'.$_FILES['picture']['name']))
            {
                 echo "Nom de photo déjà utilisée, veuillez renommer";
                $error = true;
            }

            if($error)
            {
                ?>
     <form method="post" id="upload_form" enctype="multipart/form-data">
        Photo : <input type="file" name="picture"><br />
        <input type="submit" name="envoyer" value="Envoyer">
    </form>
                <?php
            }
            else
            {
               $result = move_uploaded_file($_FILES['picture']['tmp_name'], 'pictures/'.$_FILES['picture']['name']);
                if ($result)
                    echo "Transfert réussi";
            }
        }
    }
 ?>
