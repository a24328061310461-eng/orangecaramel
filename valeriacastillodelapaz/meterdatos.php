<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/lifestyle-marker-m54" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/kun" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/sa-inkspot" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <title>mostrar tabla</title>
    <style>
        :root {
            --color-de-fondo: #BFDBF7;
            --color-de-letras: #053C5E;
            --color-de-barra: #A31621;
            --color-de-botones: #1F7A8C;
            --color-extra: #DB222A;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: var(--color-de-letras);
            color: #ffffff;
            margin: 0;
            padding: 0;
        }

        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background: url('imagen.jpg') center/cover no-repeat;
            opacity: 0.3;
        }

        h1 {
            color: var(--color-extra);
            text-align: center;
            margin-top: 20px;
        }

        form {
            width: 50%;
            margin: auto;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 10px;
            margin-bottom: 50px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #ffffff;
        }

        input[type="text"],
        input[type="date"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid yellow;
            border-radius: 5px;
            background-color: #1f1f1f;
            color: #ffffff;
            box-sizing: border-box;
        }

        textarea {
            height: 80px;
            resize: vertical;
        }

        input[type="submit"] {
            background-color: yellow;
            color: #000;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-weight: bold;
            font-size: 16px;
            text-transform: uppercase;
        }

        input[type="submit"]:hover {
            background-color: #ffd700;
        }
    </style>
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

    <h1>Registro de Personajes</h1>

    <form method="post" action="guardar.php">
        
        <label for="nombrereal">Nombre Real:</label>
        <input type="text" name="nombrereal" required>

        <label for="personaje">Nombre del Personaje:</label>
        <input type="text" name="personaje" required>

        <label for="altura">Altura:</label>
        <input type="text" name="altura">

        <label for="peso">Peso:</label>
        <input type="text" name="peso">

        <label for="poderes">Poderes:</label>
        <input type="text" name="poderes">

        <label for="sexo">Sexo:</label>
        <input type="text" name="sexo">

        <label for="debilidad">Debilidad:</label>
        <input type="text" name="debilidad">

        <label for="creation">Fecha de Creación:</label>
        <input type="date" name="creation">

        <label for="biografia">Biografía:</label>
        <textarea name="biografia"></textarea>

        <input type="submit" value="Guardar Datos">
    </form>

</body>
</html>