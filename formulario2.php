<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Actualización</title>
</head>
<body>
    <h1>Editar Registro</h1>
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