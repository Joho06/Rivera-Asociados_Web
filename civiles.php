<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CIVIL</title>
	
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet"  href="css1/footer.css">
	<link rel="stylesheet"  href="css1/estilos.css">
	<link rel="stylesheet" href="css1/text.css">
</head>
<body>
<div class="container-fluid">
	<!-- TITULOS -->
	<div class="contenedor">
		<img  src="img/juez7.jpg">
		
			<h1 class="texto-encima">
					CIVILES
			</h1>
			
	</div>

	<!-- MENU -->
	<?php
			include "menu/menu.php"
	?>
	
</div> 
<!-- INFORMACION PARRAFOS -->
<div class="col-auto p-5 text-center ">
		
<p class="text-justify text-white lh-base fs-4">
¿Qué es un juicio civil en Ecuador? <br>
Acto procesal mediante el cual se da a conocer al demandado en forma cierta e indiscutible, que se ha presentado en su contra una reclamación.
</p>
<br>

	<h2 class="text-justify text-danger">
	<strong>Importante para recordar </strong>
	</h2>
	<br>
	<p class="text-justify text-white lh-lg fs-5">
	Las fases del proceso civil se dividen en:<br>

Diligencias preliminares.<br>
Alegaciones iniciales de las partes.<br>
Audiencia previa.<br>
Celebración del juicio.<br>
Sentencia o formas de terminación anormales (allanamiento).<br>
Caben recursos contra estas finalizaciones del proceso.
	</p>		
</div>

<div class="contenedor1">
		<img  class="img-1" src="img1/civil.jpg" alt="">
</div>


<div class="nav justify-content-center">
<a class="nav-link text-light bg-dark" aria-current="page" href="formulario.php">REGISTRO DE CASO</a>
</div>


<div class="link">
	<a class="button text-decoration-none" href="http://consultas.funcionjudicial.gob.ec/informacionjudicial/public/informacion.jsf">Para mas informacion </a>
</div>
<!-- FOOTER -->
	<?php
			include "menu/footer.php"
			?>

</body>
</html>
