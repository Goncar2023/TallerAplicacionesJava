<?php include 'layouts/session.php'; ?>
<?php include 'layouts/main.php'; ?>

<head>

    <?php includeFileWithVariables('layouts/title-meta.php', array('title' => 'Condicionales')); ?>

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

                    <?php includeFileWithVariables('layouts/page-title.php', array('pagetitle' => 'Páginas', 'title' => 'Condicionales')); ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">IF - ELSE</h4>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                            <label for="popover-showcode" class="form-label text-muted">Mostrar código</label>
                                            <input class="form-check-input code-switcher" type="checkbox" id="popover-showcode">
                                        </div>
                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="lead">Los condicionales son estructuras de control que te permiten tomar decisiones en función de ciertas condiciones.</h5>
                                    <div class="live-preview">
                                        <h5>Ejemplo 1: Verificar si un número es positivo, negativo o cero</h5>
                                        <p class="lead espaciado">$numero = 15;</p>
                                        <p class="lead espaciado">if ($numero > 0) {</p>
                                        <p class="lead espaciadoExtra">echo "El número es positivo";</p>
                                        <p class="lead espaciado">} else if ($numero < 0) {</p>
                                        <p class="lead espaciadoExtra">echo "El número es negativo";</p>
                                        <p class="lead espaciado">} else {</p>
                                        <p class="lead espaciadoExtra">echo "El número es cero";</p>
                                        <p class="lead espaciado">}</p>
                                        <p class="lead"></p>
                                        <h5>Ejemplo 2: Determinar si un número es par o impar</h5>
                                        <p class="lead espaciado">$numero = 15;</p>
                                        <p class="lead espaciado">if ($numero % 2 == 0) {</p>
                                        <p class="lead espaciadoExtra">echo "El número es par";</p>
                                        <p class="lead espaciado">} else {</p>
                                        <p class="lead espaciadoExtra">echo "El número es impar";</p>
                                        <p class="lead espaciado">}</p>
                                        <p class="lead espaciado"></p>
                                    </div>
                                    <div class="d-none code-view">
                                        <pre class="language-markup" style="height: auto;"><code>//VARIABLES A UTILIZAR
$numero = 15;
//EJEMPLO 1
if ($numero > 0) {
    echo "El número es positivo";
} else if ($numero < 0) {
    echo "El número es negativo";
} else {
    echo "El número es cero";
}

//EJEMPLO 2
if ($numero % 2 == 0) {
    echo "El número es par";
} else {
    echo "El número es impar";
}</code></pre>
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
                                    <h4 class="card-title mb-0 flex-grow-1">Operador Ternario</h4>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                            <label for="popover-showcode" class="form-label text-muted">Mostrar código</label>
                                            <input class="form-check-input code-switcher" type="checkbox" id="popover-showcode">
                                        </div>
                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="lead">El operador ternario es una forma simplificada y concisa de escribir una estructura IF-ELSE en una sola línea</p>
                                    <div class="live-preview">
                                        <h5>Sintaxis del operador ternario:</h5>
                                        <p class="lead espaciado">$variable = (condición) ? <b>si es verdadero</b> :<b> si es falso</b>;</p>
                                        <h5>EJEMPLO 1</h5>
                                        <p class="lead espaciado">$edad = 36;</p>
                                        <p class="lead espaciado">$estado = ($edad >= 18) ? "Mayor de edad" : "Menor de edad";</p>
                                        <p class="lead espaciado">echo $estado;</p>
                                        <p class="lead espaciado">Se mostrará "Es mayor de edad"</p>
                                        <p class="lead espaciado"></p>
                                        <h5>EJEMPLO 2</h5>
                                        <p class="lead espaciado">$numero = 37;</p>
                                        <p class="lead espaciado">$tipo = ($numero > 0) ? "POSITIVO" : (($numero < 0) ? "NEGATIVO" : "cero");</p>
                                        <p class="lead espaciado">echo "El número es $tipo.";</p>
                                        <p class="lead espaciado">Se mostrará: "El número es POSITIVO"</p>
                                    </div>
                                    <div class="d-none code-view">
                                        <pre class="language-markup" style="height: auto;"><code>//EJEMPLO 1
$edad = 36;
$estado = ($edad >= 18) ? "mayor de edad" : "menor de edad";
echo $estado;

//EJEMPLO 2
$numero = 37;
$tipo = ($numero > 0) ? "POSITIVO" : (($numero < 0) ? "NEGATIVO" : "CERO");
echo "El número es $tipo.";</code></pre>
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