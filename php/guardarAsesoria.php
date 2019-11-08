<?php 
    header("Content-Type: application/json");
    include('config.php');
    $conn = getDB();
    $data = json_decode(file_get_contents("php://input"));
    $idProfe = $data->idProfe;
    $idCita = $data->idCita;
    $materia = $data->materia;
    $nombre = $data->nombre;
    $matricula = $data->matricula;
    $descrip = $data->descrip;
    //echo $idProfe.$idCita.$materia.$nombre.$matricula.$descrip;
    $queryAse = $conn->prepare('INSERT INTO asesoria(materia, nombreAlumno, matriculaAlumno, descripcion, idCita, noTrabajador)
                                                    VALUES(:m, :n, :ma, :d, :iC, :iP)');
    $queryAse->bindParam(':m', $materia, PDO::PARAM_STR);
    $queryAse->bindParam(':n', $nombre, PDO::PARAM_STR);
    $queryAse->bindParam(':ma', $matricula, PDO::PARAM_INT);
    $queryAse->bindParam(':d', $descrip, PDO::PARAM_STR);
    $queryAse->bindParam(':iC', $idCita, PDO::PARAM_INT);
    $queryAse->bindParam(':iP', $idProfe, PDO::PARAM_INT);

    if ($queryAse->execute()) {
        echo 1;
    }else{echo 0;}
?>