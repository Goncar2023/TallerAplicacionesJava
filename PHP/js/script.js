function cargar(pagina) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("contenido").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", pagina, true);
    xhttp.send();
}

document.addEventListener("DOMContentLoaded", function() {
    var clipboard = new ClipboardJS('#btn-copiar', {
        text: function(trigger) {
            var codigoElement = document.getElementById("codigo");
            var codigoClon = codigoElement.cloneNode(true);
            var botones = codigoClon.getElementsByTagName("button");
            for (var i = 0; i < botones.length; i++) {
                botones[i].parentNode.removeChild(botones[i]);
            }
            return codigoClon.textContent;
        }
    });

    clipboard.on('success', function(e) {
        alert('Código copiado');
    });

    clipboard.on('error', function(e) {
        alert('Error al intentar copiar el código');
    });
});