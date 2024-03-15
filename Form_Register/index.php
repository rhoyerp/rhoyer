<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../css/bootstrap.min.css">
   <link rel="stylesheet" href="../css/estilos.css">
    <title>Formulario de Registro de Alumnos</title>
</head>
<body>

    <h1>Registro de Alumnos</h1>
    <form method="post" class="form-horizontal">
  <div class="form-group">
    <label for="id" class="col-sm-2 control-label">ID:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="id" name="id" required>
    </div>
  </div>

  <div class="form-group">
    <label for="cedula" class="col-sm-2 control-label">Cédula:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="cedula" name="cedula" required>
    </div>
  </div>

  <div class="form-group">
    <label for="nombre" class="col-sm-2 control-label">Nombre:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nombre" name="nombre" required>
    </div>
  </div>

  <div class="form-group">
    <label for="apellido" class="col-sm-2 control-label">Apellido:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="apellido" name="apellido" required>
    </div>
  </div>

  <div class="form-group">
    <label for="telefono" class="col-sm-2 control-label">Teléfono:</label>
    <div class="col-sm-10">
      <input type="tel" class="form-control" id="telefono" name="telefono" required>
    </div>
  </div>

  <div class="form-group">
    <label for="correo" class="col-sm-2 control-label">Correo:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="correo" name="correo" required>
    </div>
  </div>
<br/>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" name="registro" value="Guardar" class="btn btn-primary">
    </div>
  </div>
</form>
    <?php
    include("../logica/guardar_registro.php");  
    ?>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>