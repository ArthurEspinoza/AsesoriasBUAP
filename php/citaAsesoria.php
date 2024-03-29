<?php 
header("Content-Type: application/json");
include('config.php');
$conn = getDB();
function imprimirHoras($i, $idP, $f, $db){
    $strTabla = '';
    switch ($i) {
        case 7:
            $queryEstado = $db->prepare('SELECT * from cita where fecha=:f AND hora = "07:00:00"');
            $queryEstado->bindParam(':f', $f, PDO::PARAM_STR);
            if ($queryEstado->execute()) {
                if ($queryEstado->rowCount()>0) {
                    $strTabla = $strTabla.'<tr>
                            <td>07:00 - 08:00</td>
                            <td class="ocupado">OCUPADO</td>
                            <td></td>
                        </tr>';
                }else{
                    $strTabla = $strTabla.'<tr>
                            <td>07:00 - 08:00</td>
                            <td class="libre">LIBRE</td>
                            <td><a href="./agendarAsesoria.php?profe='.urlencode($idP).'&fecha='.urlencode($f).'&hora=7">Agendar a esta hora</a></td>
                        </tr>';
                }
            }
            break;
        case 8:
            $queryEstado = $db->prepare('SELECT * from cita where fecha=:f AND hora = "08:00:00"');
            $queryEstado->bindParam(':f', $f, PDO::PARAM_STR);
            if ($queryEstado->execute) {
                if ($queryEstado->rowCount()>0) {
                    $strTabla = $strTabla.'<tr>
                            <td>08:00 - 09:00</td>
                            <td class="ocupado">OCUPADO</td>
                            <td></td>
                        </tr>';
                }else{
                    $strTabla = $strTabla.'<tr>
                            <td>08:00 - 09:00</td>
                            <td class="libre">LIBRE</td>
                            <td><a href="./agendarAsesoria.php?profe='.urlencode($idP).'&fecha='.urlencode($f).'&hora=8">Agendar a esta hora</a></td>
                        </tr>';
                }
            }
            break;
        case 9:
            $queryEstado = $db->prepare('SELECT * from cita where fecha=:f AND hora = "09:00:00"');
            $queryEstado->bindParam(':f', $f, PDO::PARAM_STR);
            if ($queryEstado->execute()) {
                if ($queryEstado->rowCount()>0) {
                    $strTabla = $strTabla.'<tr>
                            <td>09:00 - 10:00</td>
                            <td class="ocupado">OCUPADO</td>
                            <td></td>
                        </tr>';
                }else{
                    $strTabla = $strTabla.'<tr>
                            <td>09:00 - 10:00</td>
                            <td class="libre">LIBRE</td>
                            <td><a href="./agendarAsesoria.php?profe='.urlencode($idP).'&fecha='.urlencode($f).'&hora=9">Agendar a esta hora</a></td>
                        </tr>';
                }
            }
            break;
        case 10:
            $queryEstado = $db->prepare('SELECT * from cita where fecha=:f AND hora = "10:00:00"');
            $queryEstado->bindParam(':f', $f, PDO::PARAM_STR);
            if ($queryEstado->execute()) {
                if ($queryEstado->rowCount()>0) {
                    $strTabla = $strTabla.'<tr>
                            <td>10:00 - 11:00</td>
                            <td class="ocupado">OCUPADO</td>
                            <td></td>
                        </tr>';
                }else{
                    $strTabla = $strTabla.'<tr>
                            <td>10:00 - 11:00</td>
                            <td class="libre">LIBRE</td>
                            <td><a href="./agendarAsesoria.php?profe='.urlencode($idP).'&fecha='.urlencode($f).'&hora=10">Agendar a esta hora</a></td>
                        </tr>';
                }
            }
            break;
        case 11:
            $queryEstado = $db->prepare('SELECT * from cita where fecha=:f AND hora = "11:00:00"');
            $queryEstado->bindParam(':f', $f, PDO::PARAM_STR);
            if ($queryEstado->execute()) {
                if ($queryEstado->rowCount()>0) {
                    $strTabla = $strTabla.'<tr>
                            <td>11:00 - 12:00</td>
                            <td class="ocupado">OCUPADO</td>
                            <td></td>
                        </tr>';
                }else{
                    $strTabla = $strTabla.'<tr>
                            <td>11:00 - 12:00</td>
                            <td class="libre">LIBRE</td>
                            <td><a href="./agendarAsesoria.php?profe='.urlencode($idP).'&fecha='.urlencode($f).'&hora=11">Agendar a esta hora</a></td>
                        </tr>';
                }
            }
            break;
        case 12:
            $queryEstado = $db->prepare('SELECT * from cita where fecha=:f AND hora = "12:00:00"');
            $queryEstado->bindParam(':f', $f, PDO::PARAM_STR);
            if ($queryEstado->execute()) {
                if ($queryEstado->rowCount()>0) {
                     $strTabla = $strTabla.'<tr>
                            <td>12:00 - 13:00</td>
                            <td class="ocupado">OCUPADO</td>
                            <td></td>
                        </tr>';
                }else{
                     $strTabla = $strTabla.'<tr>
                            <td>12:00 - 13:00</td>
                            <td class="libre">LIBRE</td>
                            <td><a href="./agendarAsesoria.php?profe='.urlencode($idP).'&fecha='.urlencode($f).'&hora=12">Agendar a esta hora</a></td>
                        </tr>';
                }
            }
            break;
        case 13:
            $queryEstado = $db->prepare('SELECT * from cita where fecha=:f AND hora = "13:00:00"');
            $queryEstado->bindParam(':f', $f, PDO::PARAM_STR);
            if ($queryEstado->execute()) {
                if ($queryEstado->rowCount()>0) {
                    $strTabla = $strTabla.'<tr>
                            <td>13:00 - 14:00</td>
                            <td class="ocupado">OCUPADO</td>
                            <td></td>
                        </tr>';
                }else{
                    $strTabla = $strTabla.'<tr>
                            <td>13:00 - 14:00</td>
                            <td class="libre">LIBRE</td>
                            <td><a href="./agendarAsesoria.php?profe='.urlencode($idP).'&fecha='.urlencode($f).'&hora=13">Agendar a esta hora</a></td>
                        </tr>';
                }
            }
            break;
        case 14:
            $queryEstado = $db->prepare('SELECT * from cita where fecha=:f AND hora = "14:00:00"');
            $queryEstado->bindParam(':f', $f, PDO::PARAM_STR);
            if ($queryEstado->execute()) {
                if ($queryEstado->rowCount()>0) {
                    $strTabla = $strTabla.'<tr>
                            <td>14:00 - 15:00</td>
                            <td class="ocupado">OCUPADO</td>
                            <td></td>
                        </tr>';
                }else{
                    $strTabla = $strTabla.'<tr>
                            <td>14:00 - 15:00</td>
                            <td class="libre">LIBRE</td>
                            <td><a href="./agendarAsesoria.php?profe='.urlencode($idP).'&fecha='.urlencode($f).'&hora=14">Agendar a esta hora</a></td>
                        </tr>';
                }
            }
            break;
        case 15:
            $queryEstado = $db->prepare('SELECT * from cita where fecha=:f AND hora = "15:00:00"');
            $queryEstado->bindParam(':f', $f, PDO::PARAM_STR);
            if ($queryEstado->execute()) {
                if ($queryEstado->rowCount()>0) {
                    $strTabla = $strTabla.'<tr>
                            <td>15:00 - 16:00</td>
                            <td class="ocupado">OCUPADO</td>
                            <td></td>
                        </tr>';
                }else{
                    $strTabla = $strTabla.'<tr>
                            <td>15:00 - 16:00</td>
                            <td class="libre">LIBRE</td>
                            <td><a href="./agendarAsesoria.php?profe='.urlencode($idP).'&fecha='.urlencode($f).'&hora=15">Agendar a esta hora</a></td>
                        </tr>';
                }
            }
            break;
        case 16:
            $queryEstado = $db->prepare('SELECT * from cita where fecha=:f AND hora = "16:00:00"');
            $queryEstado->bindParam(':f', $f, PDO::PARAM_STR);
            if ($queryEstado->execute()) {
                if ($queryEstado->rowCount()>0) {
                    $strTabla = $strTabla.'<tr>
                            <td>16:00 - 17:00</td>
                            <td class="ocupado">OCUPADO</td>
                            <td></td>
                        </tr>';
                }else{
                    $strTabla = $strTabla.'<tr>
                            <td>16:00 - 17:00</td>
                            <td class="libre">LIBRE</td>
                            <td><a href="./agendarAsesoria.php?profe='.urlencode($idP).'&fecha='.urlencode($f).'&hora=16">Agendar a esta hora</a></td>
                        </tr>';
                }
            }
            break;
        case 17:
            $queryEstado = $db->prepare('SELECT * from cita where fecha=:f AND hora = "17:00:00"');
            $queryEstado->bindParam(':f', $f, PDO::PARAM_STR);
            if ($queryEstado->execute()) {
                if ($queryEstado->rowCount()>0) {
                    $strTabla = $strTabla.'<tr>
                            <td>17:00 - 18:00</td>
                            <td class="ocupado">OCUPADO</td>
                            <td></td>
                        </tr>';
                }else{
                    $strTabla = $strTabla.'<tr>
                            <td>17:00 - 18:00</td>
                            <td class="libre">LIBRE</td>
                            <td><a href="./agendarAsesoria.php?profe='.urlencode($idP).'&fecha='.urlencode($f).'&hora=17">Agendar a esta hora</a></td>
                        </tr>';
                }
            }
            break;
        case 18:
            $queryEstado = $db->prepare('SELECT * from cita where fecha=:f AND hora = "18:00:00"');
            $queryEstado->bindParam(':f', $f, PDO::PARAM_STR);
            if ($queryEstado->execute()) {
                if ($queryEstado->rowCount()>0) {
                    $strTabla = $strTabla.'<tr>
                            <td>18:00 - 19:00</td>
                            <td class="ocupado">OCUPADO</td>
                            <td><a href="./agendarAsesoria.php?profe='.urlencode($idP).'&fecha='.urlencode($f).'&hora=18">Agendar a esta hora</a></td>
                        </tr>';
                }else{
                    $strTabla = $strTabla.'<tr>
                            <td>18:00 - 19:00</td>
                            <td class="libre">LIBRE</td>
                            <td><a href="./agendarAsesoria.php?profe='.urlencode($idP).'&fecha='.urlencode($f).'&hora=18">Agendar a esta hora</a></td>
                        </tr>';
                }
            }
            break;
        default:
            echo "Error al crear las horas";
            break;
    }
    return $strTabla;
}
$data = json_decode(file_get_contents("php://input"));
//Almaceno los valores enviados por JS
$idProfe = $data->idProfe;
$fecha = $data->fecha;
$ase = "Asesoría";
//Consigo el dia de la fecha recibida
$dia = date("N", strtotime($fecha));
$tablaHtml = '<table class="table"><thead class="thead"><tr>
                <th>Hora</th>
                <th>Estado</th>
                <th></th>
              </tr></thead>
              <tbody>';
switch ($dia) {
    case "1":
        $i = 6;
        $lunes = $conn->prepare('SELECT * FROM Lunes WHERE noTrabajador=:p');
        $lunes->bindParam(':p', $idProfe, PDO::PARAM_STR);
        if ($lunes->execute()) {
            $horas = $lunes->fetch(PDO::FETCH_ASSOC);
            if (in_array('Asesoría', $horas)) {
                foreach ($horas as $h) {
                    if ($h == 'Asesoría') {
                        $tablaHtml = $tablaHtml.imprimirHoras($i, $idProfe, $fecha, $conn);
                    }
                    $i += 1;
                }
                unset($h);
                $tablaHtml = $tablaHtml.'</tbody></table>';
                echo $tablaHtml;
                //echo $fecha;
            }else {
                echo "El docente no da Asesorías el día Lunes";
            }
        }
        break;
    case "2":
        $i = 6;
        $lunes = $conn->prepare('SELECT * FROM Martes WHERE noTrabajador=:p');
        $lunes->bindParam(':p', $idProfe, PDO::PARAM_STR);
        if ($lunes->execute()) {
            $horas = $lunes->fetch(PDO::FETCH_ASSOC);
            if (in_array('Asesoría', $horas)) {
                foreach ($horas as $h) {
                    if ($h == 'Asesoría') {
                        $tablaHtml = $tablaHtml.imprimirHoras($i, $idProfe, $fecha, $conn);
                    }
                    $i += 1;
                }
                unset($h);
                $tablaHtml = $tablaHtml.'</tbody></table>';
                echo $tablaHtml;
            }else {
                echo "El docente no da Asesorías el día Martes";
            }
        }
        break;
    case 3:
        $i = 6;
        $lunes = $conn->prepare('SELECT * FROM Miercoles WHERE noTrabajador=:p');
        $lunes->bindParam(':p', $idProfe, PDO::PARAM_STR);
        if ($lunes->execute()) {
            $horas = $lunes->fetch(PDO::FETCH_ASSOC);
            if (in_array('Asesoría', $horas)) {
                foreach ($horas as $h) {
                    if ($h == 'Asesoría') {
                        $tablaHtml = $tablaHtml.imprimirHoras($i, $idProfe, $fecha, $conn);
                    }
                    $i += 1;
                }
                $tablaHtml = $tablaHtml.'</tbody></table>';
                echo $tablaHtml;
                unset($h);
            }else {
                echo "El docente no da Asesorías el día Miercoles";
            }
        }
        break;
    case 4:
        $i = 6;
        $lunes = $conn->prepare('SELECT * FROM Jueves WHERE noTrabajador=:p');
        $lunes->bindParam(':p', $idProfe, PDO::PARAM_STR);
        if ($lunes->execute()) {
            $horas = $lunes->fetch(PDO::FETCH_ASSOC);
            if (in_array('Asesoría', $horas)) {
                foreach ($horas as $h) {
                    if ($h == 'Asesoría') {
                        $tablaHtml = $tablaHtml.imprimirHoras($i, $idProfe, $fecha, $conn);
                    }
                    $i += 1;
                }
                $tablaHtml = $tablaHtml.'</tbody></table>';
                echo $tablaHtml;
                unset($h);
            }else {
                echo "El docente no da Asesorías el día Jueves";
            }
        }
        break;
    case 5:
        $i = 6;
        $lunes = $conn->prepare('SELECT * FROM Viernes WHERE noTrabajador=:p');
        $lunes->bindParam(':p', $idProfe, PDO::PARAM_STR);
        if ($lunes->execute()) {
            $horas = $lunes->fetch(PDO::FETCH_ASSOC);
            if (in_array('Asesoría', $horas)) {
                foreach ($horas as $h) {
                    if ($h == 'Asesoría') {
                        $tablaHtml = $tablaHtml.imprimirHoras($i, $idProfe, $fecha, $conn);
                    }
                    $i += 1;
                }
                $tablaHtml = $tablaHtml.'</tbody></table>';
                echo $tablaHtml;
                unset($h);
            }else {
                echo "El docente no da Asesorías el día Viernes";
            }
        }
        break;
    default:
        echo "Dia desconocido";
        break;
}
?>