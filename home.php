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

    <title>Lista de cliente</title>
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
  
    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Vista de clientes
                        <a href="login.php" class="btn btn-danger float-end">Salir</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Cedula</th>
                                    <th>Celular</th>
                                    <th>Correo Electronico</th>
                                    <th>Descripcion</th>
                                    <th>Tipo de caso</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM agendar_citas";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $key => $formulario)
                                        {

                                            
                                            ?>
                                            
                                            <tr>
                                                <td scope="row"><?php  echo $key + 1?></td>
                                                <td><?= $formulario['Nombres']; ?></td>
                                                <td><?= $formulario['Apellidos']; ?></td>
                                                <td><?= $formulario['Cedula']; ?></td>
                                                <td><?= $formulario['Celular']; ?></td>
                                                <td><a href="https://mail.google.com/mail/u/0/?view=cm&fs=1&tf=1&to=<?= urlencode($formulario['Correo_electronico']); ?>" target="_blank"><?= $formulario['Correo_electronico']; ?></a></td>
                                                <td><?= $formulario['Descripcion']; ?></td>
                                                <td><?= $formulario['Tipo_de_caso']; ?></td>
                                                <td>
                                                   
                                                    <a href="cliente-edit.php?id=<?= $formulario['id']; ?>" class="btn btn-success btn-sm">Actualizar</a>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_cliente" value="<?=$formulario['id'];?>" class="btn btn-danger btn-sm">Eliminar</button>
                                                    
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>