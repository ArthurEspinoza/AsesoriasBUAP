<?php
session_start();
$nombreUsuario = $_SESSION['nombre'];
$idProfe = $_SESSION['noTrabajador'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equip="Content-type" content="text/html;" charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bitacora.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Mis Horario</title>
</head>

<body>
    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>
    <div class="topnav" id="myTopnav">
        <div id="logo">
            <img src="img/logo.png" alt="logo">
        </div>
        <a href="horario.php" class="active">Mis Horarios</a>
        <a href="bitacora.php">Añadir Bitácora</a>
        <a href="#mostrarBitacora.php">Ver Bitácoras</a>
        <a href="php/destroy.php"class="active">Cerrar Sesión</a>
        <a href="#">Bienvenido <?php echo $nombreUsuario?></a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <div>
    <table id ="tablaB" border="1px" align="center" class="table table-sm">
        <thead>
            <tr>
                
                <th>Fecha</th>
                <th>Materia</th>
                <th>Alumnos</th>
                <th>Descripción</th>
            </tr>
        </thead>
    <?php
    $mysqli = new mysqli('localhost', 'root', '', 'asesoria');

    if ($mysqli->connect_error) {
        die('Connect Error (' . $mysqli->connect_errno . ') '
                . $mysqli->connect_error);
    }

    if (mysqli_connect_error()) {
        die('Connect Error (' . mysqli_connect_errno() . ') '
                . mysqli_connect_error());
    }
    
    $acentos = $mysqli->query("set names 'utf-8'");
    $busqueda1=$mysqli->query("SELECT * from bitacora where noTrabajador='$idProfe' ORDER BY fecha DESC");
    while($datos1=$busqueda1->fetch_array()){
    ?>
        <tr>
            <!-- <th><?php echo $datos1["idbitacora"]?></th> -->
            <td><?php echo $datos1["fecha"]?></td>
            <td><?php echo utf8_encode($datos1["materia"])?></td>
            <td><?php echo utf8_encode($datos1["alumnos"])?></td>
            <td><?php echo utf8_encode($datos1["descripcion"])?></td>
        </tr>
    <?php
    }
    ?>
    </table>
    </div>
</body>
</html>
