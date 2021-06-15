<?php
    
    
    session_start();
    
    require_once("funGlobCons.php");    

    $resultado = consulSelec ("*", "top10")

    $_SESSION["filas"] = mysqli_num_rows($resultado);

    if ($_SESSION["filas"] == 0)
    {

        header ("url=elite.html");                       

    }
    else if ($_SESSION["filas"] < 10 && $_SESSION["filas"] > 0)
    {


        $_SESSION["resultado"] == $resultado = consulSelec ("*", "top10", " where puntuacion > ".$_COOKIE["puntuacionFinal"]);
        header ("url=elite.html"); 


    }
    else if ($_SESSION["filas"] == 10)
    {

        $resultado = consulSelec("*", "top10", " where puntuacion > ".$_COOKIE["puntuacionFinal"]);

        $_SESSION["adelantadas"] = mysqli_num_rows($resultado);

        if ($_SESSION["adelantadas"] > 0)
        {

            header ("url=elite.html"); 

        }
        else  
        {

            header ("url=mejoraTuJuego.html");

        }   

    }

?>