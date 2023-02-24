<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        </head>
    <body>
    <?php
echo '<nav class="navbar navbar-expand-lg bg-body-tertiary navbar-dark bg-primary" style="padding: 0;">
<div class="container-fluid" style="background-color: #0a141d;">
  
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Principal</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="login.php">Administración</a>
            </li> 

            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Servicios
                </a>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="penales.php">Penales</a></li>
                <li><a class="dropdown-item" href="civiles.php">Civiles</a></li>
                <li><a class="dropdown-item" href="juicioaliment.php">Jucio de Alimentos</a></li>
                <li><a class="dropdown-item" href="transporte.php">Transporte</a></li>
                <li><a class="dropdown-item" href="regispropiedad.php">Registro de Propiedad</a></li>
                <li><a class="dropdown-item" href="constcompania.php">Constitucion de Compañias</a></li>
                <li><a class="dropdown-item" href="inda.php">INDA</a></li>
                <li><a class="dropdown-item" href="transdominio.php">Transferencia de Dominio</a></li>
                </ul>
            </li>
            
        </ul>
    </div>
</div>
</nav>';
?>
    </body>
</html>
