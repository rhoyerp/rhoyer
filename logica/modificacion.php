   <!-- <?php

// Conectar a la base de datos
include("con_db.php");
if (isset($_POST['modificar']))

// Comprobar si se ha enviado el formulario
    // Obtener los datos del usuario
    $id = trim($_POST['id']);
    $cedula = trim($_POST['cedula']);
    $nombre = trim($_POST['nombre']);
    $apellido = trim($_POST['apellido']);
    $telefono = trim($_POST['telefono']);
    $correo = trim($_POST['correo']);

    // Actualizar los datos del usuario
    $sql = "UPDATE estudiantes SET nombre = ?, correo = ? apellido = ? telefono = ? cedula = ? WHERE id = ?";
    $stmt = $conex->prepare($sql);
    $stmt->bind_param('ssi', $nombre, $correo,$apellido, $telefono, $cedula, $id, );
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "<p>Los datos del usuario han sido actualizados.</p>";
    } else {
        echo "<p>No se ha podido actualizar los datos del usuario.</p>";
    }

    $stmt->close();


// Obtener los datos del usuario a modificar
$id = $_GET['id'];
$sql = "SELECT * FROM estudiantes WHERE id_ = ?";
$stmt = $conex->prepare($sql);
$stmt->bind_param('i', $id);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows > 0) {
    $usuario = $resultado->fetch_assoc();
} else {echo "<p>No se ha encontrado el usuario.</p>";
    exit();
}

$stmt->close();

?> -->