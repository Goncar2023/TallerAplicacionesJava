<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP</title>
        <link rel="stylesheet" href="styles/style.css">
        <script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.8/dist/clipboard.min.js"></script>
    </head>
    <body>
        <div class="content">
            <div class="menu">
                <ul>
                    <li><a href="#" class="activo" onclick="cargar('variables.php')">Variables</a></li>
                    <li><a href="#" onclick="cargar('operadores.php')">Operadores</a></li>
                    <li><a href="#" onclick="cargar('condicionales.php')">Condicionales</a></li>
                    <li><a href="#" onclick="cargar('bucles.php')">Bucles</a></li>
                    <li><a href="#" onclick="cargar('funciones.php')">Funciones</a></li>
                    <li><a href="#" onclick="cargar('funcionesIncorp.php')">Funciones Nativas</a></li>
                    <li><a href="#" onclick="cargar('formularios.php')">Formularios</a></li>
                </ul>
            </div>
            <div id="contenido">
                <!-- El contenido se cargará aquí -->
            </div>
        </div>
        <footer class="footer">
            <p>&copy; <?php echo date("Y"); ?> Todos los derechos reservados.</p>
        </footer>
        <script>
            window.onload = function() {
                var enlace = document.querySelector('.menu ul li a');
                enlace.classList.add('activo');
                cargar(enlace.getAttribute('onclick').split("'")[1]);
            };
        </script>
        <script src="js/script.js"></script>
    </body>
</html>