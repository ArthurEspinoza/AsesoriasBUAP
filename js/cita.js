function verificarFecha(idProfe) {
    var fecha = document.getElementById('fecha').value;
    var xhr = new XMLHttpRequest();
    var url = 'php/citaAsesoria.php';
    xhr.open("POST", url, true);
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Print received data from server 
            document.getElementById('resultDiv').innerHTML = this.responseText;
        }
    };
    var data = JSON.stringify({
        "idProfe": idProfe,
        "fecha": fecha
    });
    xhr.send(data);
}