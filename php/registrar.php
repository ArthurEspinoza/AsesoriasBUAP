<?php
header("Content-type:text/html; charset=utf-8"); 
include('config.php');
    $conexion = getDB();
    //echo "Estoy en el archivo";
    $nombre = $_POST['nombre'];
    $email = $_POST['correo'];
    $noTrabajo = $_POST['ntrabajador'];
    $contrasena = $_POST['contra'];
    $cubo = $_POST['cubo'];
    $edificio = $_POST['edificio'];
    $existente = "SELECT * FROM profesor WHERE noTrabajador='$noTrabajo'";
    $stmt = $conexion->prepare($existente);
    $stmt->execute();
    if($stmt->rowCount()>0){
        echo "Existe un registro con la misma matricula";
    }else{
        try {
            $nuevousuario = $conexion->prepare("INSERT INTO profesor(noTrabajador,contra,nombre,email,cubiculo, edificio) 
                                                    VALUES(:noTrabajo,:contrasena,:nombre,:email,:cubo, :edificio)");
            $nuevousuario->bindParam(":noTrabajo",$noTrabajo,PDO::PARAM_INT);
            $nuevousuario->bindParam(":contrasena",$contrasena,PDO::PARAM_STR);
            $nuevousuario->bindParam(":nombre",$nombre,PDO::PARAM_STR);
            $nuevousuario->bindParam(":email",$email,PDO::PARAM_STR);
            $nuevousuario->bindParam(":cubo",$cubo,PDO::PARAM_STR);
            $nuevousuario->bindParam(":edificio",$edificio,PDO::PARAM_STR);
            $ejecutar=$nuevousuario->execute();
        } catch (PDOException $error) {
            print 'ERROR: '.$error->getMessage;
        }
        if($ejecutar){
            echo '<script>
            alert("Registro realizado con exito");
            window.location.href="../login.php";
            </script>';
        }
    }
?>