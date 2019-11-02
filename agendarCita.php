<?php
$idProfe = $_GET['profe'];
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
    <script src="js/cita.js"></script>
    <title>AgendarCita</title>
</head>
<body>
    <div id="formDiv">
        <form>            
            <div class="form-group">
                <label for="fecha">Selecciona la fecha</label>
                <input type="date" name="fecha" id="fecha" class="form-control">
            </div>
            <input type="button" onclick="verificarFecha(<?php echo $idProfe?>)" value="Verificar">
        </form>
    </div>
    <div id="resultDiv">

    </div>
</body>
</html>