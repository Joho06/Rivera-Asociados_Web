<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_cliente']))
{
    $id = mysqli_real_escape_string($con, $_POST['delete_cliente']);

    $query = "DELETE FROM agendar_citas WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Eliminado Correctamente";
        header("Location: home.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Error al eliminar";
        header("Location: home.php");
        exit(0);
    }
}

if(isset($_POST['update_cliente']))
{
    $id = mysqli_real_escape_string($con, $_POST['id']);

    $Nombres = mysqli_real_escape_string($con, $_POST['Nombres']);
    $Apellidos = mysqli_real_escape_string($con, $_POST['Apellidos']);
    $Cedula = mysqli_real_escape_string($con, $_POST['Cedula']);
    $Celular = mysqli_real_escape_string($con, $_POST['Celular']);
    $Correo_electronico = mysqli_real_escape_string($con, $_POST['Correo_electronico']);
    $Tipo_de_caso = mysqli_real_escape_string($con, $_POST['Tipo_de_caso']);
    $Descripcion = mysqli_real_escape_string($con, $_POST['Descripcion']);

    $query = "UPDATE agendar_citas SET  Nombres='$Nombres', Apellidos='$Apellidos', Cedula='$Cedula',Celular='$Celular', Correo_electronico='$Correo_electronico',Tipo_de_caso='$Tipo_de_caso', Descripcion='$Descripcion' WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Actualizado Correctamente";
        header("Location: home.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Error al actualizar";
        header("Location: home.php");
        exit(0);
    }

}


if(isset($_POST['save_student']))
{
    $Nombres = mysqli_real_escape_string($con, $_POST['Nombres']);
    $Apellidos = mysqli_real_escape_string($con, $_POST['Apellidos']);
    $Cedula = mysqli_real_escape_string($con, $_POST['Cedula']);
    $Celular = mysqli_real_escape_string($con, $_POST['Celular']);
    $Correo_electronico = mysqli_real_escape_string($con, $_POST['Correo_electronico']);
    $Tipo_de_caso = mysqli_real_escape_string($con, $_POST['Tipo_de_caso']);
    $Descripcion = mysqli_real_escape_string($con, $_POST['Descripcion']);

    $query = "INSERT INTO students (Nombres,email,phone,course) VALUES ('$Nombres','$email','$phone','$course')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Student Created Successfully";
        header("Location: student-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Created";
        header("Location: student-create.php");
        exit(0);
    }
}

?>
