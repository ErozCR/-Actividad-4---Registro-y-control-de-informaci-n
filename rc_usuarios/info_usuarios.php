<?php

include_once('../config/config.php');
include('usuarios.php');

$consulta = new usuario();
$data = $consulta->getAll();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Usuarios</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <div class="contenedor"></div>
    <h1>Consulta Usuarios</h1>
    <div class ="row">
        <?php

if ($data->num_rows > 0) {
    echo "<table>";
    echo "<tr>
            <th>Id</th>
            <th>Cédula</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Contraseña</th>
            <th>Correo</th>
            <th>Estado</th>
            <th>Rol</th>
            <th>Fecha de Modificación</th>
        </tr>";

        while ($row = mysqli_fetch_object($data)) {
            
            echo "<tr>";
            echo "<td>$row->id</td>";
            echo "<td>$row->cedula</td>";
            echo "<td>$row->nombre</td>";
            echo "<td>$row->apellido</td>";
            echo "<td>$row->contraseña</td>";
            echo "<td>$row->correo</td>";
            echo "<td>$row->estado</td>";
            echo "<td>$row->rol</td>";
            echo "<td>$row->fecha_mod</td>";
            echo "</tr>";

        }

        echo"</table>";
        
    }else {
        echo "No se encontraron datos en la tabla rc_usuarios.";
    }
        ?>
    </div>
    
</body>
</html>