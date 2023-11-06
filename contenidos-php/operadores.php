<?php include 'layouts/session.php'; ?>
<?php include 'layouts/main.php'; ?>

<head>

    <?php includeFileWithVariables('layouts/title-meta.php', array('title' => 'Operadores')); ?>

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

                    <?php includeFileWithVariables('layouts/page-title.php', array('pagetitle' => 'Inicio', 'title' => 'Operadores')); ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Operadores aritméticos</h4>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                            <label for="popover-showcode" class="form-label text-muted">Mostrar código</label>
                                            <input class="form-check-input code-switcher" type="checkbox" id="popover-showcode">
                                        </div>
                                    </div>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <p class="lead">Los operadores aritméticos en PHP se utilizan para realizar operaciones matemáticas en variables y valores</p>
                                    <div class="live-preview">
                                        <p class="lead espaciado">+  Suma</p>
                                        <p class="lead espaciado">-  Resta</p>
                                        <p class="lead espaciado">*  Multiplicación</p>
                                        <p class="lead espaciado">/  División</p>
                                        <p class="lead espaciado">%  Módulo (resto de la división)</p>
                                        <p class="lead espaciado">**  Exponenciación</p>
                                    </div>

                                    <div class="d-none code-view">
                                        <pre class="language-markup" style="height: auto;"><code>//VARIABLES A UTILIZAR
$numberOne = 10;
$numberTwo = 2;

//OPERADORES ARITMÉTICOS
$suma = $numberOne + $numberTwo; // Suma
echo($suma)."&lt;br&gt;";
$resta = $numberOne - $numberTwo; // Resta
echo($resta)."&lt;br&gt;";
$multiplicacion = $numberOne * $numberTwo; // Multiplicación
echo($multiplicacion)."&lt;br&gt;";
$division = $numberOne / $numberTwo; // División
echo($division)."&lt;br&gt;";
$modulo = $numberOne % $numberTwo; // Módulo
echo($modulo)."&lt;br&gt;";
$potencia =$numberOne**$numberTwo;
echo($potencia)."&lt;br&gt;";</code></pre>
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
                                    <h4 class="card-title mb-0 flex-grow-1">Operadores de comparación</h4>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                            <label for="popover-showcode" class="form-label text-muted">Mostrar código</label>
                                            <input class="form-check-input code-switcher" type="checkbox" id="popover-showcode">
                                        </div>
                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="lead">Los operadores de comparación se utilizan para comparar dos valores y determinar si una relación es verdadera o falsa</p>
                                    <div class="live-preview">
                                        <p class="lead espaciado">== Igual a</p>
                                        <p class="lead espaciado">=== Estrictamente igual</p>
                                        <p class="lead espaciado">!= Diferente de</p>
                                        <p class="lead espaciado">!== Estrictamente diferente</p>
                                        <p class="lead espaciado">< Menor que </p>
                                        <p class="lead espaciado">> Mayor que</p>
                                        <p class="lead espaciado"><= Menor o igual que</p>
                                        <p class="lead espaciado">>= Mayor o igual que</p>
                                    </div>

                                    <div class="d-none code-view">
                                        <pre class="language-markup" style="height: auto;"><code>//VARIABLES A UTILIZAR
$numberOne = 10;
$numberTwo = 2;

//OPERADORES DE COMPARACIÓN
$igual = ($numberOne == $numberTwo);      // Igual a
echo($igual)."&lt;br&gt;";
$diferente = ($numberOne != $numberTwo);  // Diferente de
echo($diferente)."&lt;br&gt;";
$menor = ($numberOne < $numberTwo);        // Menor que
echo($menor)."&lt;br&gt;";
$mayor = ($numberOne > $numberTwo);        // Mayor que
echo($mayor)."&lt;br&gt;";
$menorIgual = ($numberOne <= $numberTwo);  // Menor o igual que
echo($menorIgual)."&lt;br&gt;";
$mayorIgual = ($numberOne >= $numberTwo);  // Mayor o igual que
echo($mayorIgual)."&lt;br&gt;";
                                        </code></pre>
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
                                    <h4 class="card-title mb-0 flex-grow-1">Operadores lógicos</h4>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                            <label for="popover-showcode" class="form-label text-muted">Mostrar código</label>
                                            <input class="form-check-input code-switcher" type="checkbox" id="popover-showcode">
                                        </div>
                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="lead">Los operadores lógicos se utilizan para combinar expresiones condicionales y determinar si una condición compuesta es verdadera o falsa.</p>
                                    <div class="live-preview">
                                        <p class="lead espaciado">&& AND</p>
                                        <p class="lead espaciado">|| OR</p>
                                        <p class="lead espaciado">! NOT</p>
                                    </div>

                                    <div class="d-none code-view">
                                        <pre class="language-markup" style="height: auto;"><code>//VARIABLES A UTILIZAR
$numberOne = 10;
$numberTwo = 2;
$activo = true;

//OPERADORES LÓGICOS
$and = ($activo && $numberOne > 0);  // AND
echo($and)."&lt;br&gt;";
$or = ($activo || $numberOne > 0);   // OR
echo($or)."&lt;br&gt;";
$not = !$activo; // NOT
echo($not)."&lt;br&gt;";</code></pre>
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
                                    <h4 class="card-title mb-0 flex-grow-1">Operadores de asignación</h4>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                            <label for="popover-showcode" class="form-label text-muted">Mostrar código</label>
                                            <input class="form-check-input code-switcher" type="checkbox" id="popover-showcode">
                                        </div>
                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="lead">Además de la asignación básica, hay operadores de asignación compuesta que combinan la asignación con una operación aritmética, lógica o de cadena</p>
                                    <div class="live-preview">
                                        <P class="lead espaciado">=  Asignación básica</p>
                                        <P class="lead espaciado">+=  Asignación con suma</p>
                                        <P class="lead espaciado">-=  Asignación con resta</p>
                                        <P class="lead espaciado">*=  Asignación con multiplicación</p>
                                        <P class="lead espaciado">/=  Asignación con división</p>
                                        <P class="lead espaciado">%=  Asignación con módulo</p>
                                        <P class="lead espaciado">**=  Asignación con exponenciación</p>
                                        <P class="lead espaciado">.=  Asignación con concatenación</p>
                                    </div>

                                    <div class="d-none code-view">
                                        <pre class="language-markup" style="height: auto;"><code>//OPERADORES DE ASIGNACIÓN
$asignacion = 5;  // Asignación simple
echo($asignacion)."&lt;br&gt;";
$asignacion += 2; // Asignación con suma
echo($asignacion)."&lt;br&gt;";
$asignacion -= 3; // Asignación con resta
echo($asignacion)."&lt;br&gt;";
$asignacion *= 4; // Asignación con multiplicación
echo($asignacion)."&lt;br&gt;";
$asignacion /= 2; // Asignación con división
echo($asignacion)."&lt;br&gt;";
$asignacion **= 2;
echo($asignacion)."&lt;br&gt;";
$ciudad = "La Serena";
$ciudad .= ", Chile";
echo($ciudad)."&lt;br&gt;";</code></pre>
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