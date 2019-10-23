<?php
header("Content-type:text/html; charset=utf-8");
//include('config.php');
//$conn = getDB();
//$conn->exec("set names 'utf8'");
$idProfe = $_GET['profe'];
//echo $idProf;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/horario.css">
    <title>Horario Profesor</title>
</head>
<body>
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
            $acentos = $mysqli->query("SET NAMES 'utf-8'");
            $datosq = $mysqli->query("SELECT * FROM profesor WHERE noTrabajador='$idProfe'");
            $resultado = $datosq->fetch_assoc();
    ?>
    <div class="banner">
        <img src="../img/escudo_negativo.png" alt="LogoBuap">
        <h1>Profesor: <?php echo $resultado['nombre']?> </h1>
    </div>
    <section>
        <?php
            $busqueda1=$mysqli->query("SELECT * from lunes where noTrabajador='$idProfe'");
            $busqueda2=$mysqli->query("SELECT * from martes where noTrabajador='$idProfe'");
            $busqueda3=$mysqli->query("SELECT * from miercoles where noTrabajador='$idProfe'");
            $busqueda4=$mysqli->query("SELECT * from jueves where noTrabajador='$idProfe'");
            $busqueda5=$mysqli->query("SELECT * from viernes where noTrabajador='$idProfe'");
        
            while($datos1=$busqueda1->fetch_array()){
                while($datos2=$busqueda2->fetch_array()){
                    while($datos3=$busqueda3->fetch_array()){
                        while($datos4=$busqueda4->fetch_array()){
                            while($datos5=$busqueda5->fetch_array()){
            ?>
        <table id="tablaH" border="1px" align="center" class="table table-sm">
        <thead>
            <tr>
                <th>Hora</th>
                <th>Lunes</th>
                <th>Martes</th>
                <th>Miércoles</th>
                <th>Jueves</th>
                <th>Viernes</th>
            </tr>
        </thead>
        <tr>
            <th>7:00-8:00</th>
            <td><?php echo $datos1["siete"]?></td>
            <td><?php echo $datos2["siete"]?></td>
            <td><?php echo $datos3["siete"]?></td>
            <td><?php echo $datos4["siete"]?></td>
            <td><?php echo $datos5["siete"]?></td>
        </tr>
        <tr>
            <th>8:00-9:00</th>
            <td><?php echo $datos1["ocho"]?></td>
            <td><?php echo $datos2["ocho"]?></td>
            <td><?php echo $datos3["ocho"]?></td>
            <td><?php echo $datos4["ocho"]?></td>
            <td><?php echo $datos5["ocho"]?></td>
        </tr>
        <tr>
            <th>9:00-10:00</th>
            <td><?php echo $datos1["nueve"]?></td>
            <td><?php echo $datos2["nueve"]?></td>
            <td><?php echo $datos3["nueve"]?></td>
            <td><?php echo $datos4["nueve"]?></td>
            <td><?php echo $datos5["nueve"]?></td>
        </tr>
        <tr>
            <th>10:00-11:00</th>
            <td><?php echo $datos1["diez"]?></td>
            <td><?php echo $datos2["diez"]?></td>
            <td><?php echo $datos3["diez"]?></td>
            <td><?php echo $datos4["diez"]?></td>
            <td><?php echo $datos5["diez"]?></td>
        </tr>
        <tr>
            <th>11:00-12:00</th>
            <td><?php echo $datos1["once"]?></td>
            <td><?php echo $datos2["once"]?></td>
            <td><?php echo $datos3["once"]?></td>
            <td><?php echo $datos4["once"]?></td>
            <td><?php echo $datos5["once"]?></td>
        </tr>
        <tr>
            <th>12:00-13:00</th>
            <td><?php echo $datos1["doce"]?></td>
            <td><?php echo $datos2["doce"]?></td>
            <td><?php echo $datos3["doce"]?></td>
            <td><?php echo $datos4["doce"]?></td>
            <td><?php echo $datos5["doce"]?></td>
        </tr>
        <tr>
            <th>13:00-14:00</th>
            <td><?php echo $datos1["trece"]?></td>
            <td><?php echo $datos2["trece"]?></td>
            <td><?php echo $datos3["trece"]?></td>
            <td><?php echo $datos4["trece"]?></td>
            <td><?php echo $datos5["trece"]?></td>
        </tr>
        <tr>
            <th>14:00-15:00</th>
            <td><?php echo $datos1["catorce"]?></td>
            <td><?php echo $datos2["catorce"]?></td>
            <td><?php echo $datos3["catorce"]?></td>
            <td><?php echo $datos4["catorce"]?></td>
            <td><?php echo $datos5["catorce"]?></td>
        </tr>
        <tr>
            <th>15:00-16:00</th>
            <td><?php echo $datos1["quince"]?></td>
            <td><?php echo $datos2["quince"]?></td>
            <td><?php echo $datos3["quince"]?></td>
            <td><?php echo $datos4["quince"]?></td>
            <td><?php echo $datos5["quince"]?></td>

        <tr>
            <th>16:00-17:00</th>
            <td><?php echo $datos1["diezseis"]?></td>
            <td><?php echo $datos2["diezseis"]?></td>
            <td><?php echo $datos3["diezseis"]?></td>
            <td><?php echo $datos4["diezseis"]?></td>
            <td><?php echo $datos5["diezseis"]?></td>
        </tr>
        <tr>
            <th>17:00-18:00</th>
            <td><?php echo $datos1["diezsiete"]?></td>
            <td><?php echo $datos2["diezsiete"]?></td>
            <td><?php echo $datos3["diezsiete"]?></td>
            <td><?php echo $datos4["diezsiete"]?></td>
            <td><?php echo $datos5["diezsiete"]?></td>
        </tr>
        <tr>
            <th>18:00-19:00</th>
            <td><?php echo $datos1["diezocho"]?></td>
            <td><?php echo $datos2["diezocho"]?></td>
            <td><?php echo $datos3["diezocho"]?></td>
            <td><?php echo $datos4["diezocho"]?></td>
            <td><?php echo $datos5["diezocho"]?></td>
        </tr>
    <?php 
                    }
                }
            }    
        }
    }
    ?>
    </table>
    <a href="../busqueda.php" id="liga" class="stretch-link text-primary">Volver al buscador</a>
    <a href="../agendarAsesoria.php" id="asesoria" class="stretch-link text-primary"></a>
    </section>
</body>
</html>