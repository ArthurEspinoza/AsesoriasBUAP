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
//var_dump($dP);
function update(){
    $noTrabajador = $_POST['ntrabajador'];
    $nombre = $_POST['nombre'];
    $contra = $_POST['contra'];
    $correo = $_POST['correo'];
    $cubo = $_POST['cubo'];
    $edificio = $_POST['edificio'];
    echo $noTrabajador + $nombre + $contra + $correo + $cubo + $edificio;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/registro.css">
    <script src="js/validar.js"></script>
    <title>Editar Informacion</title>
</head>
<body>
    <div class="banner">
        <img src="img/escudo_negativo.png" alt="LogoBuap">
        <h1>Editar mi información</h1>
    </div>
    <div class="container">
        <div id="contenedorForm">
            <form action="php/editarInfo.php" method="post" onsubmit="return validar()">
                <div class="form-group row">
                    <label for="nombre" class="col-sm-2 col-form-label">Nombre*</label>
                    <div class="col-sm-10">
                        <input type="text" onfocus='cambiarColor("nombre")' class="form-control" name="nombre" id="nombre" value="<?php echo $dP['nombre']?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Correo Electrónico*</label>
                    <div class="col-sm-10">
                        <input type="text" onfocus='cambiarColor("correo")' class="form-control" name="correo" id="correo" value="<?php echo $dP['email']?>" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ntrabajador" class="col-sm-2 col-form-label">No. Trabajador*</label>
                    <div class="col-sm-10">
                        <input type="text" onfocus='cambiarColor("ntrabajador")' class="form-control" name="ntrabajador" id="ntrabajador" value="<?php echo $dP['noTrabajador']?>" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="contra" class="col-sm-2 col-form-label">Contraseña*</label>
                    <div class="col-sm-10">
                        <input type="password" onfocus='cambiarColor("contra")' class="form-control" name="contra" id="contra" placeholder="Ingrese una contraseña">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ccontrasena" class="col-sm-2 col-form-label">Confirmar Contraseña*</label>
                    <div class="col-sm-10">
                        <input type="password" onfocus='cambiarColor("ccontra")' class="form-control" name="ccontra" id="ccontra" placeholder="Vuelva a ingresar la contraseña" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="cubo" class="col-sm-2 col-form-label">Cubículo</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="cubo" id="cubo" value="<?php echo $dP['cubiculo']?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="edificio" class="col-sm-2 col-form-label">Edificio</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="edificio" id="edificio" value="<?php echo $dP['edificio']?>">
                    </div>
                </div>
                <input type="submit" value="Crear Cuenta" id="regbtn" class="btn btn-outline-primary">
            </form>
        </div>
    </div>
</body>
</html>