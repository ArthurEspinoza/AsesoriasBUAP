function verificarA(idProfe, idCita) {
    var materia = document.getElementById('materia').value;
    var nombre = document.getElementById('alumno').value;
    var matricula = document.getElementById('matricula').value;
    var descrip = document.getElementById('descrip').value;
    console.log(idProfe, idCita, materia, nombre, matricula, descrip);
    if (nombre === '' || materia === '' || matricula === '' || descrip === '') {
        alert("Los campos con un * son obligatorios");
        document.getElementById('materia').style.backgroundColor = '#FB953A';
        document.getElementById('alumno').style.backgroundColor = '#FB953A';
        document.getElementById('matricula').style.backgroundColor = '#FB953A';
        document.getElementById('descrip').style.backgroundColor = '#FB953A';
        return false;
    } else if (isNaN(matricula)) {
        alert("La matricula debe tener solo números");
        document.getElementById('ntrabajador').style.backgroundColor = '#FB953A';
        return false;
    } else {
        var xhr = new XMLHttpRequest();
        var url = 'php/guardarAsesoria.php';
        xhr.open("POST", url, true);
        xhr.setRequestHeader("Content-Type", "application/json");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Print received data from server 
                if (this.responseText == 1) {
                    alert("Asesoria guardada exitosamente");
                    location.href = "busqueda.php";
                } else {
                    alert("Algo pasó con la consulta" + this.responseText);
                }
            }
        };
        var data = JSON.stringify({
            "idProfe": idProfe,
            "idCita": idCita,
            "materia": materia,
            "nombre": nombre,
            "matricula": matricula,
            "descrip": descrip
        });
        xhr.send(data);
    }
}

function cambiarColor(id) {
    document.getElementById(id).style.backgroundColor = '#ffffff';
}