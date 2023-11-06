<?php include 'layouts/session.php'; ?>
<?php include 'layouts/main.php'; ?>

<head>

    <?php includeFileWithVariables('layouts/title-meta.php', array('title' => 'Switch')); ?>

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

                    <?php includeFileWithVariables('layouts/page-title.php', array('pagetitle' => 'Inicio', 'title' => 'Switch - case')); ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Switch Case</h4>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                            <label for="popover-showcode" class="form-label text-muted">Mostrar código</label>
                                            <input class="form-check-input code-switcher" type="checkbox" id="popover-showcode">
                                        </div>
                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="lead">Se utiliza para realizar diferentes acciones basadas en diferentes condiciones. Es una alternativa a la estructura IF-ELSE cuando se necesita comparar una variable con múltiples valores posibles</p>
                                    <div class="live-preview">
                                        <p class="lead espaciado">$diaSemana = 3</p>
                                        <p class="lead espaciado">switch ($diaSemana) {</p>
                                        <p class="lead espaciadoExtra">case 1:</p>
                                        <p class="lead extraSpace">echo "Lunes";</p>
                                        <p class="lead extraSpace">break;</p>
                                        <p class="lead espaciadoExtra">case 2:</p>
                                        <p class="lead extraSpace">echo "Martes";</p>
                                        <p class="lead extraSpace">break;</p>
                                        <p class="lead espaciadoExtra">case 3:</p>
                                        <p class="lead extraSpace">echo "Miércoles";</p>
                                        <p class="lead extraSpace">break;</p>
                                        <p class="lead espaciadoExtra">case 4:</p>
                                        <p class="lead extraSpace">echo "Jueves";</p>
                                        <p class="lead extraSpace">break;</p>
                                        <p class="lead espaciadoExtra">case 5:</p>
                                        <p class="lead extraSpace">echo "Viernes";</p>
                                        <p class="lead extraSpace">break;</p>
                                        <p class="lead espaciadoExtra">case 6:</p>
                                        <p class="lead extraSpace">echo "Sábado";</p>
                                        <p class="lead extraSpace">break;</p>
                                        <p class="lead espaciadoExtra">case 7:</p>
                                        <p class="lead extraSpace">echo "Domingo";</p>
                                        <p class="lead extraSpace">break;</p>
                                        <p class="lead espaciadoExtra">default</p>
                                        <p class="lead extraSpace">echo "Día no válido";</p>
                                        <p class="lead extraSpace">break;</p>
                                        <p class="lead espaciado">}</p>
                                    </div>
                                    <div class="d-none code-view">
                                        <pre class="language-markup" style="height: auto;"><code>//SWITCH CASE
$diaSemana = 3;
switch ($diaSemana) {
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miércoles";
        break;
    case 4:
        echo "Jueves";
        break;
    case 5:
        echo "Viernes";
        break;
    case 6:
        echo "Sábado";
        break;
    case 7:
        echo "Domingo";
        break;
    default:
        echo "Día no válido";
        break;
}</code></pre>
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