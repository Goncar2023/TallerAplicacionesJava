<?php include 'layouts/session.php'; ?>
<?php include 'layouts/main.php'; ?>

<head>

    <?php includeFileWithVariables('layouts/title-meta.php', array('title' => 'Arreglos')); ?>

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

                    <?php includeFileWithVariables('layouts/page-title.php', array('pagetitle' => 'Inicio', 'title' => 'Arreglos')); ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Arreglos</h4>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                            <label for="popover-showcode" class="form-label text-muted">Mostrar código</label>
                                            <input class="form-check-input code-switcher" type="checkbox" id="popover-showcode">
                                        </div>
                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="lead">Son estructuras de datos que pueden contener múltiples valores. Pueden almacenar diversos tipos de datos, como números, cadenas, objetos y hasta otros arrays.</p>
                                    <div class="live-preview">
                                        <h5>ARREGLOS INDEXADOS - CREACIÓN</h5>
                                        <p class="lead espaciado">$colores = array("Rojo", "Amarillo","Verde", "Azul");</p>
                                        <P class="lead espaciado">$colores = ["Rojo", "Amarillo","Verde", "Azul"]; → Desde PHP 5.4</P>

                                        <h5>ARREGLOS INDEXADOS - ACCESO Y MANIPULACIÓN</h5>
                                        <P class="lead espaciado"><b>Acceder a elementos en un array indexado</b></P>
                                        <P class="lead espaciado">echo $colores[0] ."&lt;br&gt;";</P>
                                        <P class="lead espaciado">echo $colores[1] ."&lt;br&gt;";</P>
                                        <P class="lead espaciado">echo $colores[2] ."&lt;br&gt;";</P>
                                        <P class="lead espaciado">echo $colores[3] ."&lt;br&gt;";</P>
                                        <p class="lead espaciado"><b>Modificar un elemento en un array indexado</b></p>
                                        <p class="lead espaciado">$colores[1] = "Rosado"; </p>
                                        <p class="lead espaciado">echo "Color modificado: " . $colores[1] . "&lt;br&gt;"; </p>

                                        <p class="lead espaciado"><b>Añadir un elemento al final de un array indexado</b></p>
                                        <p class="lead espaciado">$colores[] = "Calipso"; </p>
                                        <p class="lead espaciado">echo "Color agregado: " . $colores[4] . "&lt;br&gt;"; </p>

                                        <p class="lead espaciado"><b>Eliminar un elemento de un array indexado</b></p>
                                        <p class="lead espaciado">echo "Arreglo antes de eliminar un elemento"; </p>
                                        <p class="lead espaciado">var_dump($colores); </p>
                                        <p class="lead espaciado">unset($colores[1]); </p>
                                        <p class="lead espaciado">echo "Arreglo después de eliminar un elemento"; </p>
                                        <p class="lead espaciado">var_dump($colores); </p>

                                        <h5>ITERACIÓN A TRAVÉS DE UN ARRAY</h5>
                                        <p class="lead espaciado"><b>Iteración con for</b></p>
                                        <p class="lead espaciado">$colores = array("Rojo", "Amarillo", "Verde", "Azul"); </p>
                                        <p class="lead espaciadoExtra">for ($i = 0; $i &lt; count($colores); $i++) { </p>
                                        <p class="lead espaciadoExtra">echo $colores[$i] . "&lt;br&gt;"; </p>
                                        <p class="lead espaciado">} </p>

                                        <p class="lead espaciado"><b>Iteración con foreach</b></p>
                                        <p class="lead espaciado">foreach($colores as $color) { </p>
                                        <p class="lead espaciadoExtra">echo $color . "&lt;br&gt;"; </p>
                                        <p class="lead espaciado">} </p>
                                    </div>
                                    <div class="d-none code-view">
                                        <pre class="language-markup" style="height: auto;"><code>//ARRAYS INDEXADOS - CREACIÓN

//Un array indexado utiliza índices numéricos para acceder a los elementos del array.
$colores = array("Rojo", "Amarillo","Verde", "Azul");// Crear un array indexado

// Otra forma de crear un array indexado
$colores = ["Rojo", "Amarillo","Verde", "Azul"]; //A partir de PHP 5.4

//ARRAYS INDEXADOS - ACCESO Y MANIPULACIÓN

// Acceder a elementos en un array indexado
echo $colores[0] ."&lt;br&gt;";
echo $colores[1]."&lt;br&gt;";
echo $colores[2]."&lt;br&gt;";
echo $colores[3] ."&lt;br&gt;";

// Modificar un elemento en un array indexado
$colores[1] = "Rosado";
echo "Color modificado: ".$colores[1]."&lt;br&gt;";

// Añadir un elemento al final de un array indexado
$colores[] = "Calipso";
echo "Color agregado: ".$colores[4]."&lt;br&gt;";

// Eliminar un elemento de un array indexado
echo "Arreglo antes de eliminar un elemento";
var_dump($colores);
unset($colores[1]);
echo "Arreglo después de eliminar un elemento";
var_dump($colores);

//ITERACIÓN A TRAVÉS DE UN ARRAY

//Iteración con for
$colores = array("Rojo", "Amarillo","Verde", "Azul");
for ($i = 0; $i < count($colores); $i++) {
    echo $colores[$i] . "&lt;br&gt;"";
}

//Iteración con foreach
foreach($colores as $color) {
    echo $color."&lt;br&gt;";
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