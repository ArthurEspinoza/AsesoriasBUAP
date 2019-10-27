<?php
header("Content-type:text/html; charset=utf-8");
session_start();
include('php/config.php');
$conn = getDB();
$nombreUsuario = $_SESSION['nombre'];
$idProfe = $_SESSION['noTrabajador'];
$cita = $conn->prepare('SELECT * from Cita WHERE noTrabajador=:nT');
$cita->bindParam(':nT', $idProfe, PDO::PARAM_INT);
$datosCita;
$datosAsesoria;
if ($cita->execute()) {
    $datosCita = $cita->fetchAll();

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
    <header>
        <img src="img/escudo_negativo.png" alt="LogoBuap">
        <nav>
            <ul>
                <li>
                    <a href="horario.php">Mi Horario</a>
                </li>
                <li>
                    <a href="mostrarBitacora.php">Ver Bitácoras</a>
                </li>
                <li>
                    <a href="editarProfe.php">Bienvenido <?php echo $nombreUsuario?></a>
                </li>
                <li>
                    <a href="php/destroy.php" id="cerrarS">Cerrar Sesión</a>
                </li>
            </ul>
        </nav>
    </header>
    <div>
    <table id ="tablaB" border="1px" align="center" class="table table-sm">
        <thead>
            <tr>
                
                <th>Fecha</th>
                <th>Hora</th>
                <th>Materia</th>
                <th>Alumnos</th>
                <th>Descripción</th>
            </tr>
        </thead>
    <?php
    
    foreach($datosCita as $row){
        $asesoria = $conn->prepare('SELECT * FROM Asesoria WHERE idCita=:cita');
        $asesoria->bindParam(':cita', $row['idCita'], PDO::PARAM_INT);
        if ($asesoria->execute()) {
            $datosAsesoria = $asesoria->fetch(PDO::FETCH_ASSOC);
        
        
    ?>
        <tr>
            <th><?php echo $row["fecha"]?></th>
            <td><?php echo $row["hora"]?></td>
            <td><?php echo $datosAsesoria["materia"]?></td>
            <td><?php echo $datosAsesoria["nombreAlumno"]?></td>
            <td><?php echo $datosAsesoria["descripcion"]?></td>
        </tr>
    <?php
            }else{
                echo "Hubo un error al obtener datos de Asesoria";
            }
        }
    }else{
        echo "No hay cita para ese profe";
    }
    ?>
    </table>
    </div>
</body>
</html>
