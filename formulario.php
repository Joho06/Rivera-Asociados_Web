<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Agendar cita</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilos.css" type="text/css" rel="stylesheet">
	<style>
		body {
  
  font-size: 1rem;
  font-weight: normal;
  line-height: 1;
  color: #292b2c;
  background-image: url(img/2.jpg);
  
}
		</style>
	
  </head>
  <body>
    
    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
		<h3 class="text-center">
				AGENDAR CITA
			</h3>
			
			<form role="form" method="post">
				<div class="form-group">
					 
					<label for="nombres">
						Nombres
					</label>
					<input type="text" class="form-control"  name="nombres" >
				</div>
				<div class="form-group">
					 
					<label for="apellidos">
						Apellidos
					</label>
					<input type="text" class="form-control"  name="apellidos" >
				</div>
				<div class="form-group">
					 
					 <label for="cedula">
						 Cedula
					 </label>
					 <input type="text" class="form-control"  name="cedula" >
				 </div>
				 <div class="form-group">
					 
					 <label for="correo">
						 Correo
					 </label>
					 <input type="email" class="form-control"  name="correo" >
				 </div>

				 <div class="form-group">
					 
					 <label for="caso">
						 Telefono
					 </label>
					 <input type="text" class="form-control"  name="celular" >
				 </div>
				 
				 <div class="form-group">
					 
					 <label for="descripcion">
						 Descripcion del caso
					 </label>
					 <input type="text" class="form-control"  name="descripcion" >
				 </div>
				<button type="submit" class="btn btn-primary" name="registrar">
					AGENDAR
				</button>
				<button type="reset" class="btn btn-primary">
						LIMPIAR
					</button>
					<a href="index.php" class="btn btn-danger float-end">SALIR</a>
				<?php
			include("registro.php");
			?>
			</form>
			
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>