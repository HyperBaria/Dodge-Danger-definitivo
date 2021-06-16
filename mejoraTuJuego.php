<!DOCTYPE html>
<html lang="es">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Actividad 4</title>
	<link href="estilos/estilos.css" rel="stylesheet" type="text/css" />
    <script src="javascripts/general.js"></script>
	<metaname="viewport"content="width=device-width, initial-scale=1.0>
</head>

<body>
	
    
    <main>
        <section>
            <header>
                <h1>
                    DEBES de hacerlo mejor si </br> quieres petarlo en el ranking
                </h1>
            </header>
    <article id="aCuanto">       		    
    <?php

        echo "<label for='esquivadas'><b>Cuantas esquivaste: </b></label>
        <input id='esquivadas' value=".$_COOKIE["puntuacionFinal"]." readonly/>";

    ?>   
    </article>
        <button class="sideButton" onclick="pasarPagina('ranking.php');">Ídolos</button>
    </section>
    </main>




	
</body>

</html>