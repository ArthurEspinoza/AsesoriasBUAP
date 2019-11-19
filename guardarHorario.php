<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Horario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/mostrarHorario.css">
</head>
<body>
    <div class="banner">
        <!-- <img src="img/escudo_negativo.png" alt="LogoBuap"> -->
        <h1>Horario del docente</h1>
    </div>
        <table border="1px" align="center">
        <tr>
            <th>Hora</th>
            <th>Lunes</th>
            <th>Martes</th>
            <th>Miércoles</th>
            <th>Jueves</th>
            <th>Viernes</th>
        </tr>
        <tr>
            <th>7:00-8:00</th>
            <td>
            <form name='datos' method='post' action='guardarDatos.php'> 
                <select name='11'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select>            
            </td>
            <td>
                <select name='12'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select> 
            </td>
            <td>
                <select name='13'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select> 
            </td>
            <td>
                <select name='14'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select> 
            </td>
            <td>
                <select name='15'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select> 
            </td>
        </tr>
        <tr>
            <th>8:00-9:00</th>
            <td>
                <select name='21'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select> 
            </td>
            <td>
                <select name='22'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select> 
            </td>
            <td>
                <select name='23'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select> 
            </td>
            <td> 
                <select name='24'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select> 
            </td>
            <td>
             <select name='25'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select> 
            </td>
        </tr>
        <tr>
            <th>9:00-10:00</th>
            <td>
                <select name='31'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select> 
            </td>
            <td>
                <select name='32'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select> 
            </td>
            <td>
                <select name='33'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select> 
            </td>
            <td>
                <select name='34'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select> 
            </td>
            <td>
                <select name='35'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select> 
            </td>
        </tr>
        <tr>
            <th>10:00-11:00</th>
            <td>
                <select name='41'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select> 
            </td>
            <td>
                <select name='42'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select> 
            </td>
            <td>
                <select name='43'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select> 
            </td>
            <td>
                <select name='44'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select> 
            </td>
            <td>
                <select name='45'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select> 
            </td>
        </tr>
        <tr>
            <th>11:00-12:00</th>
            <td>
                <select name='51'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select> 
            </td>
            <td>
                <select name='52'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select>
            </td>
            <td>
                <select name='53'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select>
            </td>
            <td>
                <select name='54'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select>
            </td>
            <td>
                <select name='55'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>12:00-13:00</th>
            <td>
                <select name='61'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select>
            </td>
            <td>
                <select name='62'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select>
            </td>
            <td>
                <select name='63'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select>
            </td>
            <td>
                <select name='64'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select>
            </td>
            <td>
                <select name='65'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>13:00-14:00</th>
            <td>
                <select name='71'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select>
            </td>
            <td>
                <select name='72'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select>
            </td>
            <td>
                <select name='73'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select>
            </td>
            <td>
                <select name='74'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select>
            </td>
            <td>
                <select name='75'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>14:00-15:00</th>
            <td>
                <select name='81'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select>
            </td>
            <td>
                <select name='82'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select>
            </td>
            <td>
                <select name='83'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select>
            </td>
            <td>
                <select name='84'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select>
            </td>
            <td>
                <select name='85'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>15:00-16:00</th>
            <td>
                <select name='91'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select>
            </td>
            <td>
                <select name='92'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select>
            </td>
            <td>
                <select name='93'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select>
            </td>
            <td>
                <select name='94'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select>
            </td>
            <td>
                <select name='95'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select>
            </td>

        <tr>
            <th>16:00-17:00</th>
            <td>
                <select name='101'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select>
            </td>
            <td>
                <select name='102'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select>
            </td>
            <td>
                <select name='103'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select>
            </td>
            <td>
                <select name='104'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select>
            </td>
            <td>
                <select name='105'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>17:00-18:00</th>
            <td>
                <select name='111'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select>
            </td>
            <td>
                <select name='112'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select>
            </td>
            <td>
                <select name='113'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select>
            </td>
            <td>
                <select name='114'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select>
            </td>
            <td>
                <select name='115'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>18:00-19:00</th>
            <td>
                <select name='121'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select>
            </td>
            <td>
                <select name='122'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select>
            </td>
            <td>
                <select name='123'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select>
            </td>
            <td>
                <select name='124'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select>
            </td>
            <td>
                <select name='125'>
                    <option value='' selected>-Seleccione-</option>
                    <option value='Tutoría'>Tutoría</option>
                    <option value='Asesoría'>Asesoría</option>
                    <option value='Docencia'>Docencia</option>
                    <option value='Investigación'>Investigación</option>
                    <option value='Gestión Académica'>Gestión Académica</option>
                </select>
            </td>
        </tr>
      <input type='submit' id="btnG" class="btn btn-outline-primary" name='btnG' value="Guardar Datos">
      </form>
    </table> 
</body>
</html>
    