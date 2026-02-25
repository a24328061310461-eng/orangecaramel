<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Mostrar tabla</title>
</head>
<body>

<h1>Aqui voy a mostrar mi tabla</h1>
<h3>Valeria Castillo</h3>

<?php
$username = "root";
$password = "";
$server = "localhost";
$database = "elotes";

$conexion = new mysqli($server, $username, $password, $database);

if ($conexion->connect_error) {
    die("Conexion fallida: " . $conexion->connect_error);
}

$sql = "SELECT * FROM personajes";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Personaje</th>
            <th>Altura</th>
            <th>Peso</th>
            <th>Poderes</th>
            <th>Sexo</th>
            <th>Debilidad</th>
            <th>Creacion</th>
            <th>Biografia</th>
          </tr>";

    while ($row = $resultado->fetch_assoc()) {
        echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["nombrereal"]."</td>
                <td>".$row["personaje"]."</td>
                <td>".$row["altura"]."</td>
                <td>".$row["peso"]."</td>
                <td>".$row["poderes"]."</td>
                <td>".$row["sexo"]."</td>
                <td>".$row["debilidad"]."</td>
                <td>".$row["creation"]."</td>
                <td>".$row["biografia"]."</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No se encontraron registros en la base de datos";
}

$conexion->close();
?>

</body>
</html>
