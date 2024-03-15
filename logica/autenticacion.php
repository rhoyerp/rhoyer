<?php
include("con_db.php");
if (isset($_POST['modificar'])) {

    $id = $_POST['id'];
    $sql = "SELECT * FROM estudiantes WHERE id = ?";
    $stmt = $conex->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
       $usuario = $resultado->fetch_assoc();
       echo "<tr><td>".$usuario["id"]."</td><td>".$usuario["nombre"]."</td><td>".$usuario["apellido"]."</td><td>".$usuario["cedula"]."</td><td>".$usuario["telefono"]."</td><td>".$usuario["correo"]."</td></tr>";
    } else {
        echo "<p>No se ha encontrado el usuario.</p>";
        exit();
    }
}
