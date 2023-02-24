<?php
require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Vista de clientes</title>
    <style>
	
		body {
  
  font-size: 1rem;
  font-weight: 20;
  line-height: 2;
  color: #292b2c;
  background-image: url(img/2.jpg);
  width: 500px;
  
  max-width: 600px;
  margin: 0 auto;
  
  justify-content: center;
  align-items: center;

}
		</style>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Vista de los clientes
                            <a href="home.php" class="btn btn-danger float-end">Salir</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM agendar_citas WHERE id='$id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $formulario = mysqli_fetch_array($query_run);
                                ?>
                                
                                    <div class="mb-3">
                                        <label>Nombres</label>
                                        <p class="form-control">
                                            <?=$formulario['Nombres'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Apellidos</label>
                                        <p class="form-control">
                                            <?=$formulario['Apellidos'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Cedula</label>
                                        <p class="form-control">
                                            <?=$formulario['Cedula'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Celular</label>
                                        <p class="form-control">
                                            <?=$formulario['Celular'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Correo  Electronico</label>
                                        <p class="form-control">
                                            <?=$formulario['Correo_electronico'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Tipo de caso</label>
                                        <p class="form-control">
                                            <?=$formulario['Tipo_de_caso'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Descripcion</label>
                                        <p class="form-control">
                                            <?=$formulario['Descripcion'];?>
                                        </p>
                                    </div>

                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
