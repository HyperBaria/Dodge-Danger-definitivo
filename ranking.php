<!DOCTYPE html>
<html lang="es">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Actividad 4</title>
	<link href="estilos/estilos.css" rel="stylesheet" type="text/css" />
	<script src="javascripts/general.js"></script>
	<metaname="viewport"content="width=device-width, initial-scale="1.0">
</head>

<body>
	
    
    <main>
        <section>
            <header>
                <h1>Ranking de los putos amos:</h1>
            </header>
			<article id="puestos">
				<?php

				    require_once("funcionesServidor/funGlobCons.php");

					$resultado = consulSelec ("usuario, puntuacion, posicion", "top10", "ORDER BY posicion ASC");

					echo "<table border=1>
                    <tr><td>NombreUsuario</td><td>Esquivadas</td><td>Posicion</td></tr>";

					while ($fila = mysqli_fetch_array($resultado))
					{

					    extract($fila);
						echo "<tr><td>$usuario</td><td>$puntuacion</td><td>$posicion</td></tr>";

					}

					echo "</table>";

                ?>

				
			</article>			 
			<button class="menuButton" onclick="pasarPagina('juego.html');">Volver a jugar</button>        
		</section>
        
        <button class="sideButton" onclick="pasarPagina('index.html');">Pantalla principal</button>

        </button>
		
	</main>

    <footer >
		<details>
            <summary>
                Información sobre creación y creador:                
			</summary>
			<p>Autor: Joel Pascual Mahindo</p>
			<a  href="https://www.linkedin.com/in/joel-pascual-mahindo/"
			title="Mi linkedin" >Linkedin del autor</a>
			<p>Proyecto creado a raíz de M12 con Linkia FP</p>
			<figure>
				<img src="fotos/fotoAutor.JPG" alt="Foto del autor" id="fotoCara"/>	
				<figcaption>Foto del autor de este juego</figcaption>				
			</figure>	

		</details>
	</footer>


	
</body>

</html>