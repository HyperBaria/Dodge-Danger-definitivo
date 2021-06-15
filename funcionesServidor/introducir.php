<?php


    session_start();
    require_once("funGlobCons.php");


    if ($_SESSION["filas"] == 0)
    {


        registrosAdd("top10", "usuario, puntuacion, posicion", "'".$_POST["user"]."',".$_COOKIE["puntuacionFinal"]."," 1);
        


    }




?>