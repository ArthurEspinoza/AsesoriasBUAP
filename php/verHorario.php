<?php
header("Content-type:text/html; charset=utf-8");
include('config.php');
$conn = getDB();
//$conn->exec("set names 'utf8'");
$idProfe = $_GET['profe'];
$datosLunes;
$datosMartes;
$datosMiercoles;
$datosJueves;
$datosViernes;
//Nombre profe;
$profe = $conn->prepare('SELECT * FROM Profesor where noTrabajador=:nT');
$profe->bindParam(':nT', $idProfe, PDO::PARAM_INT);
$profe->execute();
$datosP = $profe->fetch(PDO::FETCH_ASSOC);
//HorarioProfe
$horarioLunes = $conn->prepare('SELECT * FROM lunes where noTrabajador=:nT');
$horarioMartes = $conn->prepare('SELECT * FROM martes where noTrabajador=:nT');
$horarioMiercoles = $conn->prepare('SELECT * FROM miercoles where noTrabajador=:nT'); 
$horarioJueves = $conn->prepare('SELECT * FROM jueves where noTrabajador=:nT');
$horarioViernes = $conn->prepare('SELECT * FROM viernes where noTrabajador=:nT');
$horarioLunes->bindParam(':nT', $idProfe, PDO::PARAM_INT);
$horarioMartes->bindParam(':nT', $idProfe, PDO::PARAM_INT);
$horarioMiercoles->bindParam(':nT', $idProfe, PDO::PARAM_INT);
$horarioJueves->bindParam(':nT', $idProfe, PDO::PARAM_INT);
$horarioViernes->bindParam(':nT', $idProfe, PDO::PARAM_INT);
if ($horarioLunes->execute()) {
    $datosLunes = $horarioLunes->fetchAll();
}else{echo"No hay lunes";}
if($horarioMartes->execute()){
    $datosMartes = $horarioMartes->fetchAll();
}else{echo"No hay martes";}
if ($horarioMiercoles->execute()) {
    $datosMiercoles = $horarioMiercoles->fetchAll();
}else{echo "No hay miercoles";}
if ($horarioJueves->execute()) {
    $datosJueves = $horarioJueves->fetchAll();
}else{echo"No hay jueves";}
if ($horarioViernes->execute()) {
    $datosViernes = $horarioViernes->fetchAll();
}else{echo"No hay viernes";}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/verHorario.css">
    <title>Horario Profesor</title>
</head>
<body>
    <div class="banner">
        <img src="../img/escudo_negativo.png" alt="LogoBuap">
        <h1>Profesor: <?php echo $datosP['nombre']?> </h1>
    </div>
    <section>
        <?php
            foreach($datosLunes as $lunes){
                foreach($datosMartes as $martes){
                    foreach($datosMiercoles as $miercoles){
                        foreach($datosJueves as $jueves){
                            foreach($datosViernes as $viernes){
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
            <td><?php echo $lunes["siete"]?></td>
            <td><?php echo $martes["siete"]?></td>
            <td><?php echo $miercoles["siete"]?></td>
            <td><?php echo $jueves["siete"]?></td>
            <td><?php echo $viernes["siete"]?></td>
        </tr>
        <tr>
            <th>8:00-9:00</th>
            <td><?php echo $lunes["ocho"]?></td>
            <td><?php echo $martes["ocho"]?></td>
            <td><?php echo $miercoles["ocho"]?></td>
            <td><?php echo $jueves["ocho"]?></td>
            <td><?php echo $viernes["ocho"]?></td>
        </tr>
        <tr>
            <th>9:00-10:00</th>
            <td><?php echo $lunes["nueve"]?></td>
            <td><?php echo $martes["nueve"]?></td>
            <td><?php echo $miercoles["nueve"]?></td>
            <td><?php echo $jueves["nueve"]?></td>
            <td><?php echo $viernes["nueve"]?></td>
        </tr>
        <tr>
            <th>10:00-11:00</th>
            <td><?php echo $lunes["diez"]?></td>
            <td><?php echo $martes["diez"]?></td>
            <td><?php echo $miercoles["diez"]?></td>
            <td><?php echo $jueves["diez"]?></td>
            <td><?php echo $viernes["diez"]?></td>
        </tr>
        <tr>
            <th>11:00-12:00</th>
            <td><?php echo $lunes["once"]?></td>
            <td><?php echo $martes["once"]?></td>
            <td><?php echo $miercoles["once"]?></td>
            <td><?php echo $jueves["once"]?></td>
            <td><?php echo $viernes["once"]?></td>
        </tr>
        <tr>
            <th>12:00-13:00</th>
            <td><?php echo $lunes["doce"]?></td>
            <td><?php echo $martes["doce"]?></td>
            <td><?php echo $miercoles["doce"]?></td>
            <td><?php echo $jueves["doce"]?></td>
            <td><?php echo $viernes["doce"]?></td>
        </tr>
        <tr>
            <th>13:00-14:00</th>
            <td><?php echo $lunes["trece"]?></td>
            <td><?php echo $martes["trece"]?></td>
            <td><?php echo $miercoles["trece"]?></td>
            <td><?php echo $jueves["trece"]?></td>
            <td><?php echo $viernes["trece"]?></td>
        </tr>
        <tr>
            <th>14:00-15:00</th>
            <td><?php echo $lunes["catorce"]?></td>
            <td><?php echo $martes["catorce"]?></td>
            <td><?php echo $miercoles["catorce"]?></td>
            <td><?php echo $jueves["catorce"]?></td>
            <td><?php echo $viernes["catorce"]?></td>
        </tr>
        <tr>
            <th>15:00-16:00</th>
            <td><?php echo $lunes["quince"]?></td>
            <td><?php echo $martes["quince"]?></td>
            <td><?php echo $miercoles["quince"]?></td>
            <td><?php echo $jueves["quince"]?></td>
            <td><?php echo $viernes["quince"]?></td>

        <tr>
            <th>16:00-17:00</th>
            <td><?php echo $lunes["diezseis"]?></td>
            <td><?php echo $martes["diezseis"]?></td>
            <td><?php echo $miercoles["diezseis"]?></td>
            <td><?php echo $jueves["diezseis"]?></td>
            <td><?php echo $viernes["diezseis"]?></td>
        </tr>
        <tr>
            <th>17:00-18:00</th>
            <td><?php echo $lunes["diezsiete"]?></td>
            <td><?php echo $martes["diezsiete"]?></td>
            <td><?php echo $miercoles["diezsiete"]?></td>
            <td><?php echo $jueves["diezsiete"]?></td>
            <td><?php echo $viernes["diezsiete"]?></td>
        </tr>
        <tr>
            <th>18:00-19:00</th>
            <td><?php echo $lunes["diezocho"]?></td>
            <td><?php echo $martes["diezocho"]?></td>
            <td><?php echo $miercoles["diezocho"]?></td>
            <td><?php echo $jueves["diezocho"]?></td>
            <td><?php echo $viernes["diezocho"]?></td>
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
    <a href="../agendarAsesoria.php" id="asesoria" class="stretch-link text-primary">Agendar Asesoria</a>
    </section>
</body>
</html>