<?php
session_start();
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
    

    <title>Editar Clientes</title>
    <style>
		
		body {
  
            font-size: 1rem;
  font-weight: 20;
  line-height: 1.5;
  color: #292b2c;
  background-image: url(img/2.jpg);
  width: 600px;
  
  max-width: 500px;
  margin: 0 auto;
  
  justify-content: center;
  align-items: center;
        }
		</style>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Actualizar Cliente
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
                                <form action="code.php"  method="POST">
                                    <input type="hidden" name="id" value="<?= $formulario['id']; ?>">

                                    <div class="mb-3">
                                        <label>Nombres</label>
                                        <input type="text" name="Nombres" value="<?=$formulario['Nombres'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Apellidos</label>
                                        <input type="text" name="Apellidos" value="<?=$formulario['Apellidos'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Cedula</label>
                                        <input type="text" name="Cedula" value="<?=$formulario['Cedula'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Celular</label>
                                        <input type="text" name="Celular" value="<?=$formulario['Celular'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Correo Electronico</label>
                                        <input type="email" name="Correo_electronico" value="<?=$formulario['Correo_electronico'];?>" class="form-control">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label>Tipo de caso</label>
                                        <select class="form-select" name="Tipo_de_caso" name="Tipo_de_caso" aria-label="Default select example" value="<?=$formulario['Tipo_de_caso'];?>">
                                            <option>PENAL</option>
                                            <option>CIVIL</option>
                                            <option>JUICIO DE ALIMENTOS</option>
                                            <option>TRANSPORTE</option>
                                            <option>REGISTRO DE PROPIEDAD</option>
                                            <option>CONSTITUCION DE COMPANIAS</option>
                                            <option>INDA</option>
                                            <option>TRANSFERENCIA DE DOMINIO</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label>Descripcion</label>
                                        <input type="text" name="Descripcion" value="<?=$formulario['Descripcion'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_cliente" class="btn btn-primary">
                                            Actualizar
                                        </button>
                                    </div>

                                </form>
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