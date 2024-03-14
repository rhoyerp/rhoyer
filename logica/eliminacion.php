<?php
// Conectar a la base de datos
include("con_db.php");
if (isset($_POST['eliminar'])) {
    // Obtener el id del usuario a borrar
    $id = trim($_POST['id']);

    // Verificar si el id del usuario es correcto
    $sql = "SELECT * FROM estudiantes WHERE id = ?";
    $stmt = $conex->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        // Borrar el usuario si el id es correcto
        $sql = "DELETE FROM estudiantes WHERE id = ?";
        $stmt = $conex->prepare($sql);
        $stmt->bind_param('i', $id);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo "<p>El usuario ha sido eliminado.</p>";
        } else {
            echo "<p>El usuario NO ha sido eliminado.</p>";
        }
    } else {
        echo "<p>El id del usuario no es correcto.</p>";
    }
}

?>