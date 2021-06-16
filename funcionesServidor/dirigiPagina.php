<?php
    
    
    session_start();
    
    require_once("funGlobCons.php");    

    $resultado = consulSelec ("*", "top10");

    $_SESSION["filas"] = mysqli_num_rows($resultado);

    

    if ($_SESSION["filas"] == 0)
    {

        
        header ('Location: ../elite.php');
                             

    }
    else if ($_SESSION["filas"] > 0 && $_SESSION["filas"] < 10)
    {

        
     
        $resultado = consulSelec ("*", "top10", " where puntuacion < ".$_COOKIE["puntuacionFinal"]);  
        
        
        if (mysqli_num_rows($resultado) > 0)
        {            

            $fila = mysqli_fetch_array($resultado);
            extract($fila);
            $_SESSION["posicion"] = $posicion;            

        } 
              
        header ('Location: ../elite.php'); 

    }
    else 
    {

        $resultado = consulSelec("*", "top10", " where puntuacion < ".$_COOKIE["puntuacionFinal"]);
        

        
        if (mysqli_num_rows($resultado) > 0)
        {


            $fila = mysqli_fetch_array($resultado);
            extract($fila);
            $_SESSION["posicion"] = $posicion;
            header ('Location: ../elite.php'); 

        }
        else  
        {

            header ('Location: ../mejoraTuJuego.php');            

        }  
        
        

    }

?>