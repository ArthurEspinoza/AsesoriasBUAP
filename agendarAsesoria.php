<?php
header("Content-type:text/html; charset=utf-8");
include('php/config.php');
$conn = getDB();
$idProfe = $_GET['profe'];
$hora = $_GET['hora'];
$fecha = $_GET['fecha'];
$idCita;
if (strlen($hora)==2) {
    $hora = $hora.':00:00';
}else{
    $hora = '0'.$hora.':00:00';
}
$queryCita = $conn->prepare('INSERT INTO cita(fecha, hora, noTrabajador) VALUES(:f, :h, :nT)');
$queryCita->bindParam(':f', $fecha, PDO::PARAM_STR);
$queryCita->bindParam(':h', $hora, PDO::PARAM_STR);
$queryCita->bindParam(':nT', $idProfe, PDO::PARAM_STR);
if ($queryCita->execute()) {
    $idCita = $conn->lastInsertId();
}
//echo $idCita;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/cita.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/asesoria.js" type="text/javascript"></script>
    <title>AgendarAsesoria</title>
</head>
<body>
    <div class="banner">
        <img src="img/escudo_negativo.png" alt="LogoBuap">
        <h1 id="asesoria">Agendar Asesoria</h1>
    </div>
    <div id="divFormAse">
        <form>
            <div class="form-group">
                <label for="materia">Materia</label>
                <input type="text" onfocus="cambiarColor('materia')" name="materia" id="materia" class="form-control" placeholder="Escribe el nombre de la materia">
            </div>
            <div class="form-group">
                <label for="nombreA">Nombre</label>
                <input type="text" onfocus="cambiarColor('alumno')" name="alumno" id="alumno" class="form-control" placeholder="Escribe tu nombre">
            </div>
            <div class="form-group">
                <label for="matricula">Matricula</label>
                <input type="text" onfocus="cambiarColor('matricula')" name="matricula" id="matricula" class="form-control" placeholder="Escribe tu matricula">
            </div>
            <div class="form-group">
                <label for="descrip">Descripción</label>
                <textarea name="descrip" onfocus="cambiarColor('descrip')" id="descrip" cols="10" rows="5" class="form-control" placeholder="Describe lo que quieres tratar en la asesoría"></textarea>
            </div>
            <input type="button" onclick="verificarA(<?php echo $idProfe?>, <?php echo $idCita?>)" value="Guardar Asesoría">
        </form>
    </div>
</body>
</html>