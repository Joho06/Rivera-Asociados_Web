<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Princial </title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet"  href="css1/estilos.css">
  <link rel="stylesheet"  href="css1/crl.css">
  <link rel="stylesheet" href="css1/footer.css">
</head>
<body>

<div class="container-fluid">
	<!-- TITULO -->
	<div class="contenedor">
		
    <img src="img/juez8.jpg">
					
			<h1 class="texto-encima">
					RIVERA & ASOCIADOS
			</h1>
			
		
	</div>
	
	<!-- MENU -->
	<?php
	include "menu/menu.php"
	?>

	<!-- CARRUCEL -->
 <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>

  <div class="carousel-inner">
    <div class="carousel-item active d-item">
      <img src="img/bienvenida.jpg" class="d-block w-100 d-img opacity-50" alt="slider 1">
      <div class="carousel-caption top-0 mt-4">
        <h1 class="display-1 fw-bolder text-uppercase " style="--bs-text-opacity: .5;"> BIENVENIDA </h1>
       <p class="mt-5 fs-2 ">  <!-- text-capitalize -->
          <br>
        <strong><em>Nuestra mayor fortaleza es la aplicación de un modelo de gestión basado en la calidad total
           y al que llamamos<br>“Excelencia Rivera & asociados”.</em> </strong>
      </div>
    </div>

    <div class="carousel-item d-item">
      <img src="img/mision.jpg" class="d-block w-100 d-img opacity-50" alt="slider 1">
      <div class="carousel-caption top-0 mt-4">
        <h1 class="display-1 fw-bolder text-uppercase " style="--bs-text-opacity: .5;"> MISION </h1>
        <p class="mt-5 fs-5 "> 
        <strong><em>Proporcionar a nuestros clientes el mejor servicio de asesoramiento jurídico en el área de los recursos humanos, 
        con alcance integral en las áreas de gestión laboral, relaciones laborales, seguridad social, derecho de familia, 
        adjudicaciones, prevención de riesgos laborales y salud laboral, proponiendo soluciones eficaces, personalizadas; y, 
        acompañando en la toma de decisiones con fundamento en la ley, la doctrina de los tribunales y nuestra experiencia, 
        con el objetivo final de lograr la satisfacción total de sus necesidades reales y dotarles de seguridad jurídica;
        así como el mejor servicio de representación y defensa de los intereses e imagen de nuestros clientes ante las 
        Administraciones Públicas y los Juzgados y Tribunales de Justicia.</em></strong>
      </div>
    </div>

    <div class="carousel-item d-item">
      <img src="img/vision1.jpg" class="d-block w-100 d-img opacity-50" alt="slider 1">
      <div class="carousel-caption top-0 mt-4">
        <h1 class="display-1 fw-bolder text-uppercase " style="--bs-text-opacity: .5;"> VISION </h1>
        <p class="mt-5 fs-4 "> 
        <strong><em>Aspiro a posicionarme como una de las firmas de referencia en el ámbito nacional en el derecho del trabajo y familia, 
          como la firma líder en la materia en el ámbito de la comunidad quiteña y ecuatoriana en general,
          así como una empresa de servicios que pase de generación a generación y que sea reconocida por sus altos estándares de calidad y profesionalidad,
          y por su prestigio y reputación propia y de sus clientes.</em></strong>
        </p>
      </div>
    </div>  

    <div class="carousel-item d-item">
      <img src="img/valores.jpg" class="d-block w-100 d-img opacity-50" alt="slider 1">
      <div class="carousel-caption top-0 mt-4">
        <h1 class="display-1 fw-bolder text-uppercase " style="--bs-text-opacity: .5;"> Valores </h1>
        <p class="mt-5 fs-4 "> 
        <strong><em>Orientación al cliente y a su negocio, Implicación y cercanía, <br> 
         Proactividad, Excelencia, Innovación y tecnología,<br>
         Trabajo en equipo, Mejora continua,<br>
         Responsabilidad y conciencia corporativa con el medio ambiente,<br>
         Responsabilidad social y ética corporativa,<br>
         Responsabilidad sobre la seguridad de la información.</em></strong>
        </p>
      </div>
    </div>  

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
 </div>
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