<?php 
    session_start();
    $idProfe = $_SESSION['noTrabajador'];
    echo $idProfe;
/*for ($i=1; $i<=12; $i++) { 
    for ($j=1; $j<=5; $j++) { 
        ${$i.$j} = $_POST[$i.$j];
        echo "campo".$i.$j.":".${$i.$j};
        echo "<br>";
    }
}*/

    $mysqli = new mysqli('localhost', 'root', '', 'asesoria');

    if ($mysqli->connect_error) {
        die('Connect Error (' . $mysqli->connect_errno . ') '
                . $mysqli->connect_error);
    }

    if (mysqli_connect_error()) {
        die('Connect Error (' . mysqli_connect_errno() . ') '
                . mysqli_connect_error());
    }
    for ($i=1; $i<=12; $i++) { 
        for ($j=1; $j<=5; $j++) { 
            $GLOBALS[$i.$j] = $_POST[$i.$j];
            //echo "campo".$i.$j.":".$GLOBALS[$i.$j];
            //echo "<br>";
        }
    }
    $existe = $mysqli->query( "SELECT * FROM lunes WHERE noTrabajador='$idProfe'");
    if( $resultado = $existe->fetch_assoc()!=null){
        //echo "Entre al if";
        $busqueda1=$mysqli->query("UPDATE lunes SET siete='$GLOBALS[11]',ocho='$GLOBALS[21]',nueve='$GLOBALS[31]',diez='$GLOBALS[41]',once='$GLOBALS[51]',doce='$GLOBALS[61]',trece='$GLOBALS[71]',catorce='$GLOBALS[81]',quince='$GLOBALS[91]',diezseis='$GLOBALS[101]',diezsiete='$GLOBALS[111]',diezocho='$GLOBALS[121]' WHERE noTrabajador='$idProfe'");
        $busqueda2=$mysqli->query("UPDATE martes SET siete='$GLOBALS[12]',ocho='$GLOBALS[22]',nueve='$GLOBALS[32]',diez='$GLOBALS[42]',once='$GLOBALS[52]',doce='$GLOBALS[62]',trece='$GLOBALS[72]',catorce='$GLOBALS[82]',quince='$GLOBALS[92]',diezseis='$GLOBALS[102]',diezsiete='$GLOBALS[112]',diezocho='$GLOBALS[122]' WHERE noTrabajador=$idProfe");
        $busqueda3=$mysqli->query("UPDATE miercoles SET siete='$GLOBALS[13]',ocho='$GLOBALS[23]',nueve='$GLOBALS[33]',diez='$GLOBALS[43]',once='$GLOBALS[53]',doce='$GLOBALS[63]',trece='$GLOBALS[73]',catorce='$GLOBALS[83]',quince='$GLOBALS[93]',diezseis='$GLOBALS[103]',diezsiete='$GLOBALS[113]',diezocho='$GLOBALS[123]' WHERE noTrabajador=$idProfe");
        $busqueda4=$mysqli->query("UPDATE jueves SET siete='$GLOBALS[14]',ocho='$GLOBALS[24]',nueve='$GLOBALS[34]',diez='$GLOBALS[44]',once='$GLOBALS[54]',doce='$GLOBALS[64]',trece='$GLOBALS[74]',catorce='$GLOBALS[84]',quince='$GLOBALS[94]',diezseis='$GLOBALS[104]',diezsiete='$GLOBALS[114]',diezocho='$GLOBALS[124]' WHERE noTrabajador=$idProfe");
        $busqueda5=$mysqli->query("UPDATE viernes SET siete='$GLOBALS[15]',ocho='$GLOBALS[25]',nueve='$GLOBALS[35]',diez='$GLOBALS[45]',once='$GLOBALS[55]',doce='$GLOBALS[65]',trece='$GLOBALS[75]',catorce='$GLOBALS[85]',quince='$GLOBALS[95]',diezseis='$GLOBALS[105]',diezsiete='$GLOBALS[115]',diezocho='$GLOBALS[125]' WHERE noTrabajador=$idProfe");
    }else{
        //echo "entre al else";
        $busqueda1=$mysqli->query("INSERT INTO lunes(noTrabajador,siete,ocho,nueve,diez,once,doce,trece,catorce,quince,diezseis,diezsiete,diezocho) 
        VALUES ('$idProfe','$GLOBALS[11]','$GLOBALS[21]','$GLOBALS[31]','$GLOBALS[41]','$GLOBALS[51]','$GLOBALS[61]','$GLOBALS[71]','$GLOBALS[81]','$GLOBALS[91]','$GLOBALS[101]','$GLOBALS[111]','$GLOBALS[121]')");
        $busqueda2=$mysqli->query("INSERT INTO martes(noTrabajador,siete,ocho,nueve,diez,once,doce,trece,catorce,quince,diezseis,diezsiete,diezocho) 
        VALUES ('$idProfe','$GLOBALS[12]','$GLOBALS[22]','$GLOBALS[32]','$GLOBALS[42]','$GLOBALS[52]','$GLOBALS[62]','$GLOBALS[72]','$GLOBALS[82]','$GLOBALS[92]','$GLOBALS[102]','$GLOBALS[112]','$GLOBALS[122]')");
        $busqueda3=$mysqli->query("INSERT INTO miercoles(noTrabajador,siete,ocho,nueve,diez,once,doce,trece,catorce,quince,diezseis,diezsiete,diezocho) 
        VALUES ('$idProfe','$GLOBALS[13]','$GLOBALS[23]','$GLOBALS[33]','$GLOBALS[43]','$GLOBALS[53]','$GLOBALS[63]','$GLOBALS[73]','$GLOBALS[83]','$GLOBALS[93]','$GLOBALS[103]','$GLOBALS[113]','$GLOBALS[123]')");
        $busqueda4=$mysqli->query("INSERT INTO jueves(noTrabajador,siete,ocho,nueve,diez,once,doce,trece,catorce,quince,diezseis,diezsiete,diezocho) 
        VALUES ('$idProfe','$GLOBALS[14]','$GLOBALS[24]','$GLOBALS[34]','$GLOBALS[44]','$GLOBALS[54]','$GLOBALS[64]','$GLOBALS[74]','$GLOBALS[84]','$GLOBALS[94]','$GLOBALS[104]','$GLOBALS[114]','$GLOBALS[124]')");
        $busqueda5=$mysqli->query("INSERT INTO viernes(noTrabajador,siete,ocho,nueve,diez,once,doce,trece,catorce,quince,diezseis,diezsiete,diezocho) 
        VALUES ('$idProfe','$GLOBALS[15]','$GLOBALS[25]','$GLOBALS[35]','$GLOBALS[45]','$GLOBALS[55]','$GLOBALS[65]','$GLOBALS[75]','$GLOBALS[85]','$GLOBALS[95]','$GLOBALS[105]','$GLOBALS[115]','$GLOBALS[125]')");
    }
    echo '<script>
        window.location.href="horario.php";
    </script>'
/*$busqueda1=$mysqli->query("INSERT INTO lunes(noTrabajador,siete,ocho,nueve,diez,once,doce,trece,catorce,quince,diezseis,diezsiete,diezocho) 
VALUES ('$idProfe','$GLOBALS[11]','$GLOBALS[21]','$GLOBALS[31]','$GLOBALS[41]','$GLOBALS[51]','$GLOBALS[61]','$GLOBALS[71]','$GLOBALS[81]','$GLOBALS[91]','$GLOBALS[101]','$GLOBALS[111]','$GLOBALS[121]')");
$busqueda2=$mysqli->query("INSERT INTO martes(noTrabajador,siete,ocho,nueve,diez,once,doce,trece,catorce,quince,diezseis,diezsiete,diezocho) 
VALUES ('$idProfe','$GLOBALS[12]','$GLOBALS[22]','$GLOBALS[32]','$GLOBALS[42]','$GLOBALS[52]','$GLOBALS[62]','$GLOBALS[72]','$GLOBALS[82]','$GLOBALS[92]','$GLOBALS[102]','$GLOBALS[112]','$GLOBALS[122]')");
$busqueda3=$mysqli->query("INSERT INTO miercoles(noTrabajador,siete,ocho,nueve,diez,once,doce,trece,catorce,quince,diezseis,diezsiete,diezocho) 
VALUES ('$idProfe','$GLOBALS[13]','$GLOBALS[23]','$GLOBALS[33]','$GLOBALS[43]','$GLOBALS[53]','$GLOBALS[63]','$GLOBALS[73]','$GLOBALS[83]','$GLOBALS[93]','$GLOBALS[103]','$GLOBALS[113]','$GLOBALS[123]')");
$busqueda4=$mysqli->query("INSERT INTO jueves(noTrabajador,siete,ocho,nueve,diez,once,doce,trece,catorce,quince,diezseis,diezsiete,diezocho) 
VALUES ('$idProfe','$GLOBALS[14]','$GLOBALS[24]','$GLOBALS[34]','$GLOBALS[44]','$GLOBALS[54]','$GLOBALS[64]','$GLOBALS[74]','$GLOBALS[84]','$GLOBALS[94]','$GLOBALS[104]','$GLOBALS[114]','$GLOBALS[124]')");
$busqueda5=$mysqli->query("INSERT INTO viernes(noTrabajador,siete,ocho,nueve,diez,once,doce,trece,catorce,quince,diezseis,diezsiete,diezocho) 
VALUES ('$idProfe','$GLOBALS[15]','$GLOBALS[25]','$GLOBALS[35]','$GLOBALS[45]','$GLOBALS[55]','$GLOBALS[65]','$GLOBALS[75]','$GLOBALS[85]','$GLOBALS[95]','$GLOBALS[105]','$GLOBALS[115]','$GLOBALS[125]')");*/
?>