<?php 
header("Content-type:text/html; charset=utf-8");
session_start();
include('php/config.php');
$conn = getDB();
$nombreUsuario = $_SESSION['nombre'];
$idProfe = $_SESSION['noTrabajador'];
$datosProfe = $conn->prepare('SELECT * FROM profesor WHERE noTrabajador = :noTrabajador');
$datosProfe->bindParam(':noTrabajador',$idProfe,PDO::PARAM_INT);
$datosProfe->execute();
$dP;
if ($datosProfe->rowCount() > 0) {
    $datos = $datosProfe->fetch(PDO::FETCH_ASSOC);
    $dP = $datos;
}
var_dump($dP);
?>