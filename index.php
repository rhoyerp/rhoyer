<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Actualización</title>
</head>
<body>
    <h1>consulta de Alumnos</h1>
    <form action="" method="post">
	<button class="btn btn-default" type="submit" name="SelectDeal">1st Deal</button>
	<input type="hidden" name="record_id" value="<?php echo $row['id']; ?>"/>
	<input type="hidden" name="1stdeal" value="1"/>
</form>

<?php
if (isset($_POST['SelectDeal']) && !empty($_POST['record_id'])) {
	$record_id = $_POST['record_id'];
	$field_name = '1stdeal';
	$field_value = (!empty($_POST[$field_name]) ? 1 : 0);

	// Update the corresponding field in the database
	$query = "UPDATE table_name SET $field_name = $field_value WHERE id = $record_id";
	mysqli_query($conn, $query);
}
?>
    <h2>Editar Registro</h2>
    <form action="actualizar.php" method="POST">

        <label for="id">ID:</label>
        <input type="text" id="id" name="id" value="id actual del registro"><br>

        <label for="cedula">Cédula:</label>
        <input type="text" id="cedula" name="cedula" value="cedula actual del registro"><br>

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="Nombre actual del registro"><br>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" value="Apellido actual del registro"><br>

        <label for="numero_telefono">Teléfono:</label>
        <input type="tel" id="numero_telefono" name="numero_telefono" value="telefono actual del registro"><br>

        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" value="correo actual del registro"><br>


        <input type="hidden" id="id_registro" name="id_registro" value="123">

        <input type="submit" value="Actualizar">
    </form>
</body>
</html>