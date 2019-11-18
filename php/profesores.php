<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Horarios BUAP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/busqueda.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php 
 include('config.php');
 $conn = getDB();
 $tabla = "";
 $query = "SELECT * FROM profesor ORDER BY noTrabajador";
 $q;
 if(isset($_POST['consulta'])){
     //echo "<script>alert('entre al if')</script>";
     //$q = $conn->real_escape_string($_POST['alumnos']);
     $q = '%'.$_POST['consulta'].'%';
     //echo $q;
     $query = "SELECT * FROM profesor WHERE nombre LIKE '$q'";
 }
 //echo $query;
 $consulta = $conn->prepare($query);
 //$consulta->bindParam(':q',$q,PDO::PARAM_STR);
 $consulta->execute();
 if($consulta->rowCount()>0){
     $tabla.='
     <table class="table table-sm">
        <thead> 
        <tr>
         <th>No. Trabajador</th>
         <th>Nombre</th>
         <th>Email</th>
         <th>Cubículo</th>
         <th>Edificio</th>
         <th></th>
         </tr>
         </thead>
         ';
         //<td><a href="verHorario.php" >Ver horario</a></td>
     while ($datos = $consulta->fetch(PDO::FETCH_ASSOC)) {
         $tabla.='
         <tr>
             <td>'.$datos['noTrabajador'].'</td>
             <td>'.$datos['nombre'].'</td>
             <td>'.$datos['email'].'</td>
             <td>'.$datos['cubiculo'].'</td>
             <td>'.$datos['edificio'].'</td>
             <td><a href="php/verHorario.php?profe='.urlencode($datos['noTrabajador']).'">Ver horario</a></td>
         </tr>
         ';
     }
     $tabla.='</table>';
 }else{
     $tabla="No se encontraron resultados con sus criterios de busqueda.";
 }
 echo $tabla;
 //include('config.php');
// $conn = getDB();
// //$request = $conn->quote($_POST['query']);
// $request = 'josue';
// $query = "SELECT nombre FROM profesor WHERE nombre LIKE '%".$request."%'";
// $consulta = $conn->prepare($query);
// $consulta->execute();
// $data = array();
// if($consulta->rowCount()>0){
//     while($row=$consulta->fetch(PDO::FETCH_ASSOC))
//     {
//         $data[] = $row['nombre'];
//     }
// }
// echo json_encode($data);
?>