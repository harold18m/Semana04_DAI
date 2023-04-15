<?php
    $nombre = $_POST["nombre"];
    $direccion = $_POST["direccion"];
    $correo = $_POST["correo"];
    $edad = $_POST["edad"];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Resultado</title>
</head>

<body>
    <div class="row">
        <div class="col-3">
            <button type="button" class="btn btn-success p-3 m-3">
                <a class="link-light" href="/Semana4/pregunta2.html">< Atras</a>
            </button>
        </div>
        <div class="col-6">
            <div id="datos" class="card m-5">
                <h3 class="card-header text-center">Bienvenido</h3>
                <div class="card-body">
                    <?php 
                        echo "<p>¡Hola $nombre!</p>";
                        echo "<p>Tu dirección es $direccion </p>";
                        echo "<p>Tienes $edad años y tu correo es $correo </p>";
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
