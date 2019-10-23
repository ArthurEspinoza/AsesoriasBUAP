<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/registro.css">
    <script src="js/validar.js"></script>
    <title>Registro</title>
</head>

<body>
    <div class="banner">
        <img src="img/escudo_negativo.png" alt="LogoBuap">
        <h1>Registro de docentes</h1>
    </div>
    <div class="container">
        <div id="contenedorForm">
            <form action="php/registrar.php" method="post" onsubmit="return validar()">
                <div class="form-group row">
                    <label for="nombre" class="col-sm-2 col-form-label">Nombre*</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese su número de trabajador">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Correo Electrónico*</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="correo" id="correo" placeholder="Ingrese su correo electrónico" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ntrabajador" class="col-sm-2 col-form-label">No. Trabajador*</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="ntrabajador" id="ntrabajador" placeholder="Ingrese su No. Trabajador" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="contra" class="col-sm-2 col-form-label">Contraseña*</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="contra" id="contra" placeholder="Ingrese una contraseña">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ccontrasena" class="col-sm-2 col-form-label">Confirmar Contraseña*</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="ccontra" id="ccontra" placeholder="Vuelva a ingresar la contraseña" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="cubo" class="col-sm-2 col-form-label">Cubículo</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="cubo" id="cubo" placeholder="Ingrese su cubículo">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="edificio" class="col-sm-2 col-form-label">Edificio</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="edificio" id="edificio" placeholder="Ingrese el edificio correspondiente">
                    </div>
                </div>
                <input type="submit" value="Crear Cuenta" id="regbtn" class="btn btn-outline-primary">
            </form>
        </div>
    </div>
</body>

</html>