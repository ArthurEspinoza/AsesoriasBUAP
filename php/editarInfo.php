<?php 
session_start();
include('config.php');
$conn = getDB();
$id = $_SESSION['noTrabajador'];
$noTrabajador = $_POST['ntrabajador'];
$nombre = $_POST['nombre'];
$contra = $_POST['contra'];
$correo = $_POST['correo'];
$cubo = $_POST['cubo'];
$edificio = $_POST['edificio'];

$update = $conn->prepare('UPDATE profesor SET nombre=:nombre, noTrabajador=:nT, email=:correo, contra=:contra, 
                                              cubo=:cubo, edificio=:edificio where noTrabajador=:Nt');
$update->bindParam(':nombre',$nombre,PDO::PARAM_STR);
$update->bindParam(':nT',$noTrabajador,PDO::PARAM_INT);
$update->bindParam(':correo',$correo,PDO::PARAM_STR);
$update->bindParam(':contra',$contra,PDO::PARAM_STR);
$update->bindParam(':cubo',$cubo,PDO::PARAM_INT);
$update->bindParam(':edificio',$edificio,PDO::PARAM_STR);
$update->bindParam(':Nt',$id,PDO::PARAM_INT);

if ($update->execute()) {
    echo "Se actualizo correctamente";
}else{
    echo "Algo malo paso...";
}
?>