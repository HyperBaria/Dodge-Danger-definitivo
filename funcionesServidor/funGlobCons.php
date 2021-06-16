<?php 


    	

    function registrosAdd ($tabla ,$campos, $values = "")
    {	    		

		require("datos.php");
	   
	    $con = mysqli_connect($host, $user, $pass, $db_name) or die("No se ha podido conectar a la base de datos");
		
		$consulta = "insert into ".$tabla." (" .$campos.") values (".$values.")";	
		
		$resultado = mysqli_query ($con, $consulta);	
				
		mysqli_close($con);
				
	
    }
	
	function modifi ($tabla, $campo, $valor, $condicion = "")
	{

		require("datos.php");
	   
	    $con = mysqli_connect($host, $user, $pass, $db_name) or die("No se ha podido conectar a la base de datos");
		
		$consulta = "update ".$tabla." set " .$campo. "=".$valor." ".$condicion;        	
		
		$resultado = mysqli_query ($con, $consulta);   	
		
		mysqli_close($con);
					
	}
	
	
	function eliminar ($tabla, $condicion = "")
	{

		require("datos.php");
	   
	    $con = mysqli_connect($host, $user, $pass, $db_name) or die("No se ha podido conectar a la base de datos");
		
		$consulta = "delete from ".$tabla." where ".$condicion;
		
		$resultado = mysqli_query ($con, $consulta);		
				
        mysqli_close($con);						
		
	}

   function consulSelec ($campos, $tabla, $condicion = "")
   {   
	   
	   require("datos.php");
	   
	   $con = mysqli_connect($host, $user, $pass, $db_name) or die("No se ha podido conectar a la base de datos");
	   
	   $consulta = "select ".$campos." from ".$tabla." ".$condicion;   
	   	   
	   $resultado = mysqli_query($con, $consulta);

       mysqli_close($con);  
	   
       return $resultado;
	   
   }
	



	 
	 
	 
	 
	 
	
	
	
	
	



?>