<?php

include("con_db.php");

if (isset($_POST['registro'])) {
    if (strlen($_POST['id']) >= 1 && strlen($_POST['cedula']) >= 1 && strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['telefono']) >= 1 && strlen($_POST['correo']) >= 1) {
        $id = trim($_POST['id']);
        $cedula = trim($_POST['cedula']);
        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $telefono = trim($_POST['telefono']);
        $correo = trim($_POST['correo']);
        $consulta= "INSERT INTO estudiantes(id, cedula, nombre, apellido, telefono, correo) VALUES ('$id','$cedula','$nombre','$apellido','$telefono','$correo')";
        $despliegue = mysqli_query($conex, $consulta);
        if ($despliegue) {
            echo "registro Completo";
        } else{
            echo "error";
        }
    }
}
