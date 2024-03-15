<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro de estudiantes</title>
</head>
<body>
    <h1>Registro de Alumnos</h1>
    <form action="guardar_registro.php" method="POST">
        <label for="id">ID:</label>
        <input type="text" id="id" name="id" required><br>

        <label for="cedula">Cédula:</label>
        <input type="text" id="cedula" name="cedula" required><br>

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required><br>

        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" required><br>

        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" required><br>

        <input type="submit" value="Guardar">
    </form>
</body>
</html>