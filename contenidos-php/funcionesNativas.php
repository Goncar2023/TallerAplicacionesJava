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

                    <?php includeFileWithVariables('layouts/page-title.php', array('pagetitle' => 'Inicio', 'title' => 'Funciones Nativas')); ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Funciones Nativas</h4>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                            <label for="popover-showcode" class="form-label text-muted">Mostrar código</label>
                                            <input class="form-check-input code-switcher" type="checkbox" id="popover-showcode">
                                        </div>
                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="lead">PHP viene con una gran cantidad de funciones incorporadas que realizan una variedad de tareas, desde manipulación de cadenas hasta operaciones con bases de datos y manipulación de archivos</p>
                                    <div class="live-preview">
                                        <h5>Funciones de cadena</h5>
                                        <p class="lead espaciado">strlen(): Devuelve la longitud de una cadena.</p>
                                        <p class="lead espaciado">strpos(): Encuentra la posición de la primera aparición de un substring en una cadena.</p>
                                        <p class="lead espaciado">str_replace(): Reemplaza todas las apariciones del substring con otro valor en una cadena.</p>
                                        <p class="lead espaciado">strtolower(): Convierte una cadena a minúsculas.</p>
                                        <p class="lead espaciado">strtoupper(): Convierte una cadena a mayúsculas.</p>

                                        <h5>Funciones matemáticas</h5>
                                        <p class="lead espaciado">sqrt(): Devuelve la raíz cuadrada de un número.</p>
                                        <p class="lead espaciado">rand(): Genera un número aleatorio.</p>
                                        <p class="lead espaciado">round(): Redondea un número.</p>

                                        <h5>Funciones de fecha y hora</h5>
                                        <p class="lead espaciado">date(): Formatea una fecha/hora.</p>
                                        <p class="lead espaciado">time(): Devuelve la marca de tiempo actual.</p>
                                        <p class="lead espaciado">strtotime(): Convierte una fecha/hora textual en una marca de tiempo.</p>

                                        <h5>Funciones de archivos</h5>
                                        <p class="lead espaciado">file_exists(): Verifica si un archivo o directorio existe.</p>
                                        <p class="lead espaciado">file_get_contents(): Lee un archivo completo a una cadena.</p>
                                        <p class="lead espaciado">file_put_contents(): Escribe una cadena en un archivo.</p>
                                        <p class="lead espaciado">fopen(), fclose(), fwrite(): Funciones para manejar archivos.</p>

                                        <h5>Funciones de base de datos</h5>
                                        <p class="lead espaciado">mysqli_connect(): Establece una conexión a una base de datos MySQL.</p>
                                        <p class="lead espaciado">mysqli_query(): Realiza una consulta a la base de datos MySQL.</p>
                                        <p class="lead espaciado">mysqli_fetch_assoc(): Obtiene una fila de resultados como un array asociativo.</p>
                                        <p class="lead espaciado">mysqli_close(): Cierra la conexión a la base de datos MySQL.</p>

                                        <h5>Funciones JSON</h5>
                                        <p class="lead espaciado">json_encode(): Convierte un valor a formato JSON.</p>
                                        <p class="lead espaciado">json_decode(): Convierte una cadena JSON a un objeto PHP.</p>

                                        <h5>Funciones de validación</h5>
                                        <p class="lead espaciado">filter_var(): Filtra una variable con el filtro especificado.</p>
                                        <p class="lead espaciado">preg_match(): Realiza una coincidencia de expresión regular.</p>
                                    </div>
                                    <div class="d-none code-view">
                                        <pre class="language-markup" style="height: auto;"><code>//FUNCIONES DE CADENA
//strlen() -> Devuelve la longitud de una cadena
$longitud = strlen("Hola, mi nombre es: ...");

//str_replace() -> Reemplaza todas las apariciones de un substring con otro substring en una cadena.
$texto = "Hola mundo";
$newtext = str_replace("mundo", "usuario", $texto); // $newtext contendrá "Hola usuario"

//FUNCIONES NUMÉRICAS
// round() -> Redondea un número decimal al entero más cercano.
$decimal = 3.8;

$redondeado = round($decimal); // $redondeado tendrá el valor 4
// rand() -> Genera un número entero aleatorio.
$aleatorio = rand(1, 100); // Genera un número entre 1 y 100

//FUNCIONES DE FECHA Y HORA
// date() -> Formatea la fecha y la hora actual según el formato especificado.
$fecha = date("Y-m-d"); // Obtendrá la fecha actual en formato "año-mes-día"

//FUNCIONES DE ARRAYS
// count() -> Devuelve el número de elementos en un array.
$numeros = [1, 2, 3, 4, 5];
$cantidad = count($numeros);

// array_push() -> Añade uno o más elementos al final de un array.
$letras = ["A", "B", "C"];
array_push($letras, "D", "F");</code></pre>
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