<?php
include("con_db.php");

    $sql = "SELECT id, nombre, apellido, cedula, telefono, correo FROM estudiantes";
    $result = $conex->query($sql);

    if ($result) { // Check if the query was successful
        if ($result->num_rows > 0) {
            echo "<table><tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>cedula</th><th>telefono</th><th>correo</th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["id"]."</td><td>".$row["nombre"]."</td><td>".$row["apellido"]."</td><td>".$row["cedula"]."</td><td>".$row["telefono"]."</td><td>".$row["correo"]."</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
    } else {
        echo "Error: " . $conex->error; // Display the error message if the query failed
    }

?>