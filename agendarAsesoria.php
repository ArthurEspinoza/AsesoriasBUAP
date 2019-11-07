<?php
header("Content-type:text/html; charset=utf-8");
include('php/config.php');
$conn = getDB();
$idProfe = $_GET['profe'];
$hora = $_GET['hora'];
$fecha = $_GET['fecha'];
echo strlen($hora);
/*$queryCita = $conn->prepare('INSERT INTO cita(fecha, hora, noTrabajador) VALUES(:f, :h, :nT)');
$queryCita->bindParam(':f', $fecha, PDO::PARAM_STR);
$queryCita->bindParam(':h', $hora, PDO::PARAM_STR);
$queryCita->bindParam(':nT', $idProfe, PDO::PARAM_STR);
if ($queryCita->execute()) {
    echo "Se inserto la cita con exito";
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AgendarAsesoria</title>
</head>
<body>
    Hola mundo
</body>
</html>