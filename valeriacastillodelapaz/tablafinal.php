<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link href="https://fonts.cdnfonts.com/css/lifestyle-marker-m54" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/kun" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/sa-inkspot" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<title>Mostrar tabla</title>
</head>
<body>
<div>
    <nav class="navbar navbar-light" style="background-color:var(--color-barra);">
        <div class="container">
            <a class="navbar-brand" href="index.html" style="color:var(--color-de-lertras); font-family: 'Times New Roman', Times, serif">Inicio</a>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="nav navbar-nav">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Unidad 1
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                            <a class="dropdown-item" href="mostrar.php">Primera Tabla</a><br>
                            <a class="dropdown-item" href="meterdatos.php">Formulario</a><br>
                            <a class="dropdown-item" href="tablafinal.php">Personajes</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Unidad 2
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                            <a class="dropdown-item" href="valeria04.html">Perfil </a><br>
                            <a class="dropdown-item" href="valeria05.html">Calculadora</a><br>
                            <a class="dropdown-item" href="valeria06.html">Tienda parte 1</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Unidad 3
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink3">
                            <a class="dropdown-item" href="valeria07.html">Perfil</a><br>
                            <a class="dropdown-item" href="valeria08.html">Calculadora</a><br>
                            <a class="dropdown-item" href="valeria09.html">Tienda parte 1</a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</div>


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
