<?php include 'layouts/session.php'; ?>
<?php include 'layouts/main.php'; ?>

<head>

    <?php includeFileWithVariables('layouts/title-meta.php', array('title' => 'Bucles')); ?>

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

                    <?php includeFileWithVariables('layouts/page-title.php', array('pagetitle' => 'Inicio', 'title' => 'Bucles')); ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Bucles en PHP</h4>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                            <label for="popover-showcode" class="form-label text-muted">Mostrar código</label>
                                            <input class="form-check-input code-switcher" type="checkbox" id="popover-showcode">
                                        </div>
                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="lead">Las estructuras de control permiten ejecutar un bloque de código varias veces</p>
                                    <div class="live-preview">
                                        <h5>BUCLE FOR</h5>
                                        <p class="lead">Se utiliza cuando se conoce de antemano cuántas veces se desea que se ejecute el bloque de código</p>
                                        <p class="lead espaciado">for ($i = 0; $i < 5; $i++) {</p>
                                        <p class="lead espaciadoExtra">echo "Número: $i &lt;br&gt;";</p>
                                        <p class="lead espaciado">}</p>
                                        <hr>
                                        <h5>BUCLE WHILE</h5>
                                        <p class="lead">Se utiliza cuando se quiere ejecutar un bloque de código mientras una condición sea verdadera.</p>
                                        <p class="lead espaciado">$i = 0; -> ITERADOR</p>
                                        <p class="lead espaciado">while ($i < 5) {</p>
                                        <p class="lead espaciadoExtra">echo "Número: $i &lt;br&gt;";</p>
                                        <p class="lead espaciadoExtra"> $i++;</p>
                                        <p class="lead espaciado">}<p>
                                        <hr>
                                        <h5>BUCLE DO-WHILE</h5>
                                        <p class="lead">Es similar al bucle WHILE, pero la diferencia es que el bloque de código se ejecuta al menos una vez antes de verificar la condición.</p>
                                        <p class="lead espaciado">$i = 0; -> ITERADOR</p>
                                        <p class="lead espaciado">do {</p>
                                        <p class="lead espaciadoExtra">echo "Número: $i &lt;br&gt;";</p>
                                        <p class="lead espaciadoExtra">$i++;</p>
                                        <p class="lead espaciado">} while ($i < 5);<p>
                                        <hr>
                                        <h5>BUCLE FOREACH</h5>
                                        <p class="lead">Se utiliza para recorrer arrays y objetos. Es especialmente útil cuando se quiere iterar sobre los elementos de un array.</p>
                                        <p class="lead espaciado">$nombres = array("Jorge", "María", "Julia");</p>
                                        <p class="lead espaciado">foreach ($nombres as $nombre) {</p>
                                        <p class="lead espaciadoExtra">echo $nombre . "&lt;br&gt;";</p>
                                        <p class="lead espaciado">}</p>
                                    </div>
                                    <div class="d-none code-view">
                                        <pre class="language-markup" style="height: auto;"><code>//FOR
for ($i = 0; $i < 5; $i++) {
    echo "Número: $i &lt;br&gt;";
}

//WHILE
$i = 0;//ITERADOR
while ($i < 5) {
    echo "Número: $i &lt;br&gt;";
    $i++;
}

//DO-WHILE
$i = 0;//ITERADOR
do {
    echo "Número: $i &lt;br&gt;";
    $i++;
} while ($i < 5);

//FOREACH
$nombres = array("Jorge", "María", "Julia");
foreach ($nombres as $nombre) {
    echo $nombre . "&lt;br&gt;";
}
</code></pre>
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