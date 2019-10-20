<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Horarios BUAP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/busqueda.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="banner">
        <img src="img/escudo_negativo.png" alt="LogoBuap">
        <h1>Busca a tu docente</h1>
        <a href="login.php">
            <img src="img/accdocente.png" alt="docente.png">
        </a>
    </div>
    <div class="search-container">
        <input type="text" name="busqueda" id="busqueda" placeholder="Escribe el nombre del docente">
    </div>
    <section id="datos"><!--Aqui se va a mostrar el resultado--></section>    
    <script src="js/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
