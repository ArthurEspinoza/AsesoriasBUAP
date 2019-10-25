function validar() {
    var nombre = document.getElementById('nombre').value;
    var correo = document.getElementById('correo').value;
    var ntrabajo = document.getElementById('ntrabajador').value;
    var contra = document.getElementById('contra').value;
    var ccontra = document.getElementById('ccontra').value;
    var cubo = document.getElementById('cubo').value;
    var edificio = document.getElementById('edificio').value;
    var expresion = /\w+@\w+\.+[a-z]/;

    console.log(nombre + " " + correo + " " + ntrabajo + " " + contra + " " + ccontra);

    if (nombre === '' || correo === '' || ntrabajo === '' || contra === '' || ccontra === '') {
        alert("Los campos con un * son obligatorios");
        document.getElementById('nombre').style.backgroundColor = '#FB953A';
        document.getElementById('correo').style.backgroundColor = '#FB953A';
        document.getElementById('ntrabajador').style.backgroundColor = '#FB953A';
        document.getElementById('contra').style.backgroundColor = '#FB953A';
        document.getElementById('ccontra').style.backgroundColor = '#FB953A';
        return false;
    } else if (nombre.length > 100) {
        alert("EL nombre es muy largo");
        document.getElementById('nombre').style.backgroundColor = '#FB953A';
        return false;
    } else if (correo.length > 250) {
        alert("EL correo es muy largo");
        document.getElementById('correo').style.backgroundColor = '#FB953A';
        return false;
    } else if (!expresion.test(correo)) {
        alert("EL correo no es valido");
        document.getElementById('correo').style.backgroundColor = '#FB953A';
        return false;
    } else if (ntrabajo.length > 11) {
        alert("EL No. Trabajador es muy largo");
        document.getElementById('ntrabajador').style.backgroundColor = '#FB953A';
        return false;
    } else if (isNaN(ntrabajo)) {
        alert("EL No. Trabajador deben ser solo numeros");
        document.getElementById('ntrabajador').style.backgroundColor = '#FB953A';
        return false;
    } else if (contra.length > 8) {
        alert("La contraseña es muy larga");
        document.getElementById('contra').style.backgroundColor = '#FB953A';
        return false;
    } else if (contra != ccontra) {
        alert("Las contraseñas no coinciden");
        document.getElementById('contra').style.backgroundColor = '#FB953A';
        document.getElementById('ccontra').style.backgroundColor = '#FB953A';
        return false;
    }
}

function cambiarColor(id) {
    document.getElementById(id).style.backgroundColor = '#ffffff';
}