<?php


    session_start();
    require_once("funGlobCons.php");


    if ($_SESSION["filas"] == 0)
    {

        $posi = 1;

        registrosAdd(" top10 ", " usuario, puntuacion, posicion ", "'".$_POST["user"]."',".$_COOKIE["puntuacionFinal"].",".$posi );        

    }
    else if ($_SESSION["filas"] > 0 && $_SESSION["filas"] < 10)
    {

        if (!is_null ($_SESSION["posicion"]))
        { 
                                   
            registrosAdd("top10","usuario, puntuacion, posicion","'".$_POST["user"]."',".$_COOKIE["puntuacionFinal"].",".$_SESSION["posicion"]);
            modifi("top10", "posicion", "posicion+1", " where puntuacion < ".$_COOKIE["puntuacionFinal"]);           
            unset ($_SESSION["posicion"]);    
           
        }
        else 
        {
            

            registrosAdd("top10","usuario, puntuacion, posicion","'".$_POST["user"]."',".$_COOKIE["puntuacionFinal"].",".$_SESSION["filas"] + 1);

        }

    }
    else
    {

        
        
        registrosAdd("top10","usuario, puntuacion, posicion","'".$_POST["user"]."',".$_COOKIE["puntuacionFinal"].",".$_SESSION["posicion"]);
        modifi("top10", "posicion", "posicion+1", " where puntuacion < ".$_COOKIE["puntuacionFinal"]);    
        eliminar("top10", " posicion > 10");

        

        
        

    }


    header ('Location: ../ranking.php');

?>