<?php include 'layouts/session.php'; ?>
<?php include 'layouts/main.php'; ?>

<head>

    <?php includeFileWithVariables('layouts/title-meta.php', array('title' => 'Funciones')); ?>

    <?php include 'layouts/head-css.php'; ?>

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php include 'layouts/menu.php'; ?>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <?php includeFileWithVariables('layouts/page-title.php', array('pagetitle' => 'Inicio', 'title' => 'Funciones')); ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">DECLARACIÓN DE FUNCIONES</h4>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                            <label for="popover-showcode" class="form-label text-muted">Mostrar código</label>
                                            <input class="form-check-input code-switcher" type="checkbox" id="popover-showcode">
                                        </div>
                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="lead">Una función es un bloque de código que realiza una tarea específica y puede ser llamado y ejecutado en cualquier parte de un script PHP. Las funciones se utilizan para organizar el código en bloques reutilizables, lo que facilita el mantenimiento y la modificación del código.</p>
                                    <div class="live-preview">
                                        <h5>Ejemplo de función básica</h5>
                                        <p class="lead espaciado">function saludo() {</p>
                                        <p class="lead espaciadoExtra">echo "¡Hola, mundo! &lt;br&gt;";</p>
                                        <p class="lead espaciado">}</p>
                                        <p class="lead espaciado">saludo(); → Invocar a la función</p>
                                    </div>
                                    <div class="d-none code-view">
                                        <pre class="language-markup" style="height: auto;"><code>//DECLARACIÓN DE FUNCIONES
function saludo() {
    echo "¡Hola, mundo! &lt;br&gt;";
}

saludo();  // Llama a la función</code></pre>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">FUNCIONES CON PARÁMETROS Y VALOR DE RETORNO</h4>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                            <label for="popover-showcode" class="form-label text-muted">Mostrar código</label>
                                            <input class="form-check-input code-switcher" type="checkbox" id="popover-showcode">
                                        </div>
                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="lead">Las funciones pueden aceptar parámetros y devolver un valor usando la palabra clave <b>return</b></p>
                                    <div class="live-preview">
                                        <p class="lead"></p>
                                    </div>
                                    <div class="d-none code-view">
                                        <pre class="language-markup" style="height: auto;"><code>//FUNCIONES CON PARÁMETROS Y VALOR DE RETORNO
function sumar($a, $b) {
    return $a + $b; //DEVUELVE LA SUMA
}

function restar($a, $b) {
    return $a -$b;
}

function multiplicar($a, $b) {
    return $a * $b;
}

function dividir($a, $b) {
    return $a / $b;
}

//LLAMA A CADA FUNCIÓN Y SE LE ENTREGAN DOS ARGUMENTOS
$suma = sumar(3, 5);
$resta = restar(10, 5);
$multiplicacion = multiplicar(4, 6);
$division = dividir(100, 5);

//IMPRIMIR RESULTADOS
echo "La suma es: $suma &lt;br&gt; ";
echo "La resta es: $resta &lt;br&gt;" ;
echo "La multiplicacion es: $multiplicacion &lt;br&gt;" ;
echo "La division es: $division &lt;br&gt;" ;</code></pre>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">FUNCIONES CON PARÁMETROS PREDETERMINADOS</h4>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                            <label for="popover-showcode" class="form-label text-muted">Mostrar código</label>
                                            <input class="form-check-input code-switcher" type="checkbox" id="popover-showcode">
                                        </div>
                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="lead">Se pueden asignar valores predeterminados a los parámetros de una función. Si un valor para un parámetro no se pasa al llamar a la función, se utilizará el valor predeterminado.</p>
                                    <div class="live-preview">
                                        <p class="lead">Las funciones con parámetros predeterminados son una forma eficaz de hacer que tus funciones sean más flexibles y fáciles de usar.</p>
                                    </div>
                                    <div class="d-none code-view">
                                        <pre class="language-markup" style="height: auto;"><code>//FUNCIONES CON PARÁMETROS PREDETERMINADOS

function bienvenida($nombre = "Usuario") {
    echo "Bienvenid@, $nombre! &lt;br&gt;";
}

bienvenida();  // Imprime el valor predeterminado
bienvenida("Eliana González");// Imprime el valor enviado</code></pre>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">FUNCIONES CON ARGUMENTOS VARIABLES</h4>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                            <label for="popover-showcode" class="form-label text-muted">Mostrar código</label>
                                            <input class="form-check-input code-switcher" type="checkbox" id="popover-showcode">
                                        </div>
                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="lead">Se pueden pasar un número variable de argumentos a una función. Esto se hace utilizando el operador ... (elipsis) antes del nombre del parámetro en la definición de la función.</p>
                                    <div class="live-preview">
                                        <p class="lead">Los argumentos se manejarán como un array dentro de la función.</p>
                                    </div>
                                    <div class="d-none code-view">
                                        <pre class="language-markup" style="height: auto;"><code>//EJEMPLO 1
//Esta función toma un número variable de argumentos y los imprime uno por uno en líneas separadas.
function listarCiudades(...$ciudades) {
    foreach ($ciudades as $ciudad) {
        echo "$ciudad &lt;br&gt;";
    }
}

listarCiudades("La Serena", "Santiago", "Iquique","Vicuña");  // Imprime cada ciudad en una nueva línea

//EJEMPLO 2

function sumar(...$numeros) {
    $total = 0;
    foreach ($numeros as $numero) {
        $total += $numero;
    }
    return $total;
}

// Llamando a la función con diferentes números como argumentos
echo sumar(2, 2, 10); // Esto imprimirá "10"
echo sumar(4, 15, 1, 7); //imprimirá "27"</code></pre>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <?php include 'layouts/footer.php'; ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <?php include 'layouts/vendor-scripts.php'; ?>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>

</html>