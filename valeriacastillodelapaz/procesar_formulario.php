<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Procesar Personaje</title>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "personajes";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST["nombre"];
    $personaje = $_POST["personaje"];
    $altura = $_POST["altura"];
    $peso = $_POST["peso"];
    $poderes = $_POST["poderes"];
    $debilidad = $_POST["debilidad"];
    $creacion = $_POST["creacion"];
    $biografia = $_POST["biografia"];

    $sql = "INSERT INTO personajes 
    (nombre, personaje, altura, peso, poderes, debilidad, creacion, biografia) 
    VALUES ('$nombre', '$personaje', '$altura', '$peso', '$poderes', '$debilidad', '$creacion', '$biografia')";

    if ($conn->query($sql) === TRUE) {
        echo "<h2>✅ Nuevo personaje creado con éxito</h2>";
        echo "<a href='index.html'>Volver</a>";
    } else {
        echo "❌ Error al agregar el personaje: " . $conn->error;
    }
}

$conn->close();
?>

</body>
</html>