<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Actualización</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
   <link rel="stylesheet" href="./css/estilos.css">
</head>

<body>
    <h1 class="text-center">consulta de Alumnos</h1>
    <form action="" method="post">
        <button type="submit" name="SelectDeal" class="btn btn-primary mx-auto d-block">Actualizar</button>
        <input type="hidden" name="record_id" value="<?php echo $row['id']; ?>" />
        <input type="hidden" name="1stdeal" value="1" />
    </form>
    <a href="./Form_Register/" class="btn btn-primary mx-auto d-block">Registro</a>

    <?php
    include("./logica/consulta.php");
    ?>
    <form method="post">
        <div class="form-group">
            <label for="usuario">ID del usuario:</label>
            <input type="text" name="id" id="id" class="form-control" required>
        </div>
        <input type="submit" name="eliminar" value="Borrar usuario" class="btn btn-danger">
    </form>
    <?php
    include("./logica/eliminacion.php");
    ?>
    
    <form method="post">
        <div class="form-group">
            <label for="id_usuario">ID del usuario:</label>
            <input type="text" maxlength="10" name="id" id="id" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" maxlength="20" name="nombre" id="nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="apellido">Apellido:</label>
            <input type="text" maxlength="20" name="apellido" id="apellido" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="cedula">cedula:</label>
            <input type="text" maxlength="16" name="cedula" id="cedula" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="telefono">telefono:</label>
            <input type="text" maxlength="16" name="telefono" id="telefono" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="correo">Email:</label>
            <input type="text" maxlength="33" name="correo" id="correo" class="form-control" required>
        </div>

        <input type="submit" name="modificacion" value="Modificar usuario" class="btn btn-primary">
    </form>
    <?php
    include("./logica/modificacion.php");
    ?>
    <!-- Add Bootstrap JS -->
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>