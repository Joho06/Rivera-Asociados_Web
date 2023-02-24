<?php
include("conexion.php");

	

if(isset($_POST['registrar'])){
    if(strlen($_POST['nombres']) >= 1 && strlen($_POST['apellidos']) >= 1 &&
    strlen($_POST['cedula']) >= 1 && strlen($_POST['celular']) >= 1 && strlen($_POST['correo']) >= 1 &&
        strlen($_POST['descripcion']) >= 1 ){
        $nom = trim($_POST['nombres']);
        $ape = trim($_POST['apellidos']);
        $ced = trim($_POST['cedula']);
        $celular = trim($_POST['celular']);
        $cor = trim($_POST['correo']);
      
        $des = trim($_POST['descripcion']);
        $consulta ="INSERT INTO agendar_citas(Nombres,Apellidos,Cedula,Celular,Correo_electronico,Descripcion) VALUES ('$nom','$ape','$ced','$celular','$cor','$des')";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado) {
            ?>
            <h3 class="ok">!Se agendo correctamente¡</h3>
            <?php
        }else{
            ?>
            <h3 class="bad">!Ups ocurrio un problema¡</h3>
            <?php
        }
        
    }else{
        ?>
        <h3 class="bad" >!Por favor complete los datos¡</h3>
        <?php
    }
}




?>
