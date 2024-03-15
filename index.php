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
        <input type="hidden" name="record_id" value="<?php echo $row['id']; ?>" />
        <input type="hidden" name="1stdeal" value="1" />
    </form>

    <?php
    include("./logica/consulta.php");
    ?>
    <form method="post">
        <labelfor="id_usuario">ID del usuario:</label>
            <input type="text" name="id" id="id" required>
            <br>
            <input type="submit" name="eliminar" value="Borrar usuario">
    </form>
    <?php
    include("./logica/eliminacion.php");
    ?>
    <form method="post">
        <labelfor="id_usuario">ID del usuario:</label>
            <input type="text" name="id" id="id" required>
            <br>
            <input type="submit" name="modificar" value="Modificar usuario">
    </form>
    <?php
    include("./logica/autenticacion.php");
    ?>
    <form method="post">
        <labelfor="id_usuario">ID del usuario:</label>
            <input type="text" name="id" id="id" required>
            <br>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required>
            <br>
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" id="apellido" required>
            <br>
            <label for="cedula">cedula:</label>
            <input type="text" name="cedula" id="cedula" required>
            <br>
            <label for="telefono">telefono:</label>
            <input type="text" name="telefono" id="telefono" required>
            <br>
            <label for="correo">Email:</label>
            <input type="text" name="correo" id="correo" required>
            <br>

            <input type="submit" name="modificacion" value="Modificar usuario">
    </form>
    <?php
    include("./logica/modificacion.php");
    ?>
</body>

</html>