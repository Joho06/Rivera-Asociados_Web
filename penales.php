<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PENAL</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet"  href="css1/footer.css">
	<link rel="stylesheet"  href="css1/estilos.css">
	<link rel="stylesheet" href="css1/text.css">
	
</head>
<body>
<div class="container-fluid">
			
	<!-- TITULO -->
	<div class="contenedor">
		<img  src="img/penal_1.jpg">
		
			<h1 class="texto-encima">
					PENALES
				</h1>
			
	</div>

	<!-- MENU -->
	<?php
			include "menu/menu.php"
	?>	
</div>
 <!-- INFORMACION PARRAFOS -->
 
 <div class="text">
		<div class="col-auto p-5 text-center ">
			
		<p class="text-justify text-white lh-base fs-4">
		¿Qué es un juicio penal en Ecuador? <br>
		Es la etapa en la que el procesado o acusado según corresponda o algún otro sujeto 
		procesal o parte del proceso, puede impugnar una sentencia, auto o resolución.
</p>
<br>
<br>
	<h2 class="text-justify text-danger text-center">
	<strong>Importante para recordar </strong>
	</h2>
	<br>
	<p class="text-justify text-white lh-lg fs-5">
	Solo puede ser detenido por orden del juez competente.<br> Solo pueden detenerte en caso de delito flagrante y no más de 24 horas.<br> Tienes derecho a permanecer callado y a no auto incriminarte.<br> Tienes derecho a contar con la defensa técnica de un abogado defensor público de manera gratuita.<br> Tienes derecho a acceder a una administración de justicia de manera gratuita rápida completa e imparcial.<br> No te pueden detener si el hecho no está determinado como infracción ni por deudas.<br> Eres inocente hasta que se compruebe lo contrario.<br> Tienes derecho a ser juzgado por un juez propio.<br> Las resoluciones judiciales que se tomen deberán estar debidamente fundamentadas en formas legales.
</p>
		</div>
</div>    
<div class="contenedor1">
		<img  class="img-1" src="img1/penal.jpg" alt="">
</div>

<br>
<div class="nav justify-content-center">
<a class="nav-link text-light bg-dark text-center" aria-current="page" href="formulario.php">REGISTRO DE CASO</a>
</div>

<br>
<div class="link">
	<a class="button text-decoration-none" href="http://consultas.funcionjudicial.gob.ec/informacionjudicial/public/informacion.jsf">Para mas informacion</a>
</div>

<!-- FOOTER -->
	<?php
		include "menu/footer.php"
	?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>