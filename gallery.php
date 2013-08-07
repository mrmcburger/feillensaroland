<?php
    session_start();
    if(!isset($_SESSION['connected']))
    {
        header('Location: index.php');
    }
    else
    {
        $filesArray = scandir('pictures');
        array_shift($filesArray) && array_shift($filesArray);
    }
?>
