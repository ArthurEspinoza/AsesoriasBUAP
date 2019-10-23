<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Horario</title>
    <link rel="stylesheet" href="css/mostrarHorario.css">
</head>
<body>
<?php
    $mysqli = new mysqli('localhost', 'root', 'root', 'asesoria');

    if ($mysqli->connect_error) {
        die('Connect Error (' . $mysqli->connect_errno . ') '
                . $mysqli->connect_error);
    }

    if (mysqli_connect_error()) {
        die('Connect Error (' . mysqli_connect_errno() . ') '
                . mysqli_connect_error());
    }
    $busqueda1=$mysqli->query('SELECT * from lunes where noTrabajador=201503731');
    $busqueda2=$mysqli->query("SELECT * from martes where noTrabajador=201503731");
    $busqueda3=$mysqli->query("SELECT * from miercoles where noTrabajador=201503731");
    $busqueda4=$mysqli->query("SELECT * from jueves where noTrabajador=201503731");
    $busqueda5=$mysqli->query("SELECT * from viernes where noTrabajador=201503731");

    while($datos1=$busqueda1->fetch_array()){
        while($datos2=$busqueda2->fetch_array()){
            while($datos3=$busqueda3->fetch_array()){
                while($datos4=$busqueda4->fetch_array()){
                    while($datos5=$busqueda5->fetch_array()){
    ?>
    <h1>Horario del Profesor</h1>
        <table border="1px" align="center">
        <tr>
            <th>Hora</th>
            <th>Lunes</th>
            <th>Martes</th>
            <th>Miércoles</th>
            <th>Jueves</th>
            <th>Viernes</th>
        </tr>
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
</body>
</html>
    