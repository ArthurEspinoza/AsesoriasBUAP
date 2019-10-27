<?php 
session_start();
include('php/config.php');
    $conexion = getDB();

    $noTrabajador = $_SESSION['noTrabajador'];
    $fecha = $_POST['fecha'];
    $materia = $_POST['materia'];
    $alumnos = $_POST['alumnos'];
    $descripcion = $_POST['descripcion'];

    //echo $noTrabajador.$fecha.$materia.$alumnos.$descripcion;
    $queryB = $conexion->prepare('INSERT INTO bitacora(fecha,materia,alumnos,descripcion,noTrabajador)
                                    VALUES(:fecha,:materia,:alumnos,:descripcion,:noTrabajador)');
    $queryB->bindParam(':fecha',$fecha,PDO::PARAM_STR);
    $queryB->bindParam(':materia',$materia,PDO::PARAM_STR);
    $queryB->bindParam(':alumnos',$alumnos,PDO::PARAM_STR);
    $queryB->bindParam(':descripcion',$descripcion,PDO::PARAM_STR);
    $queryB->BindParam(':noTrabajador',$noTrabajador,PDO::PARAM_STR);

    if($queryB->execute()){
        echo '<script>
             alert("Registro de bitácora realizado con exito");
             window.location.href="mostrarBitacora.php";
             </script>';
    }else{
        echo '<script>
             alert("Registro de bitácora fallido");
             window.location.href="bitacora.php";
             </script>';
    }
    // $existente = "SELECT * FROM profesor WHERE noTrabajador='$idProfe'";
    // $stmt = $conexion->prepare($existente);
    // $stmt->execute();
    // if($stmt->rowCount()>0){
    //     try {
    //         $nuevaBitacora = $conexion->prepare("INSERT INTO bitacora(noTrabajador,fecha,materia,alumnos,descripcion) 
    //                                                 VALUES(:noTrabajador,:fecha,:materia,:alumnos,:descripcion)");
    //         $nuevaBitacora->bindParam(":noTrabajador",$noTrabajador,PDO::PARAM_INT);
    //         $nuevaBitacora->bindParam(":fecha",$fecha,PDO::PARAM_STR);
    //         $nuevaBitacora->bindParam(":materia",$materia,PDO::PARAM_STR);
    //         $nuevaBitacora->bindParam(":alumnos",$alumnos,PDO::PARAM_STR);
    //         $nuevaBitacora->bindParam(":descripcion",$descripcion,PDO::PARAM_STR);
    //         $ejecutar=$nuevaBitacora->execute();
    //     } catch (PDOException $error) {
    //         print 'ERROR: '.$error->getMessage;
    //     }
    //     if($ejecutar){
    //         echo '<script>
    //         alert("Registro de bitácora realizado con exito");
    //         window.location.href="../horario.php";
    //         </script>';
    //     }
    // }else{

    // }


?>