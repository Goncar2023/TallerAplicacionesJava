<?php include 'layouts/session.php'; ?>
<?php include 'layouts/main.php'; ?>

<head>

    <?php includeFileWithVariables('layouts/title-meta.php', array('title' => 'Variables')); ?>

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

                    <?php includeFileWithVariables('layouts/page-title.php', array('pagetitle' => 'Inicio', 'title' => 'Variables')); ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Declaración y asignación</h4>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                            <label for="popover-showcode" class="form-label text-muted">Mostrar código</label>
                                            <input class="form-check-input code-switcher" type="checkbox" id="popover-showcode">
                                        </div>
                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="lead">A diferencia de otros lenguajes de programación, en PHP no es necesario declarar el tipo de datos de una variable antes de usarla. PHP automáticamente convierte el tipo de datos según el valor asignado a la variable.</p>
                                    <div class="live-preview">
                                        <h5>Declaración de variables y constantes</h5>
                                        <p class="lead espaciado">$variable = "Hola mundo!!!"</p>
                                        <p class="lead espaciado">define("PI", 3.14159);</p>

                                        <h5>Tipos de datos</h5>
                                        <p class="lead espaciado">$numero = 250</p>
                                        <p class="lead espaciado">$decimal = 6.8</p>
                                        <p class="lead espaciado">$activo = true</p>
                                        <p class="lead espaciado">$colores = array("Verde", "Naranja","Café")</p>
                                    </div>

                                    <div class="d-none code-view">
                                        <pre class="language-markup" style="height: auto;"><code>// Declaración de Variables y Constantes
$variable = "Hola mundo!!!"; // Variable
define("PI", 3.14159);       // Constante

// Tipos de Datos
$numero = 10;              // Entero
$decimal = 6.8;           // Decimal
$nombre = "Bruce Wayne";   // Cadenas de texto
$activo = true;            // Booleano
$colores = array("Verde", "Naranja","Café"); // Arreglo</code></pre>
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