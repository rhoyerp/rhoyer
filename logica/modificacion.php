<?php

// Conectar a la base de datos
include("con_db.php");
if (isset($_POST['modificacion'])) {

    // Comprobar si se ha enviado el formulario
    // Obtener los datos del usuario
    $id = trim($_POST['id']);
    $nombre = trim($_POST['nombre']);
    $apellido = trim($_POST['apellido']);
    $cedula = trim($_POST['cedula']);
    $telefono = trim($_POST['telefono']);
    $correo = trim($_POST['correo']);

    // Actualizar los datos del usuario
    $sql = "UPDATE estudiantes SET nombre = ?, apellido = ?, telefono = ?, cedula = ?, correo = ? WHERE id = ?";
    $stmt = $conex->prepare($sql);
    $stmt->bind_param('ssissi', $nombre, $apellido, $telefono, $cedula, $correo, $id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "<p>Los datos del usuario han sido actualizados.</p>";
    } else {
        echo "<p>No se ha podido actualizar los datos del usuario.</p>";
    }

    $stmt->close();


    // Obtener los datos del usuario a modificar
}
