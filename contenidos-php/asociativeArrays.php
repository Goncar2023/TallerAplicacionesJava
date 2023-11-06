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

                    <?php includeFileWithVariables('layouts/page-title.php', array('pagetitle' => 'Inicio', 'title' => 'Arreglos Asociativos')); ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Arreglos Asociativos</h4>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                            <label for="popover-showcode" class="form-label text-muted">Mostrar código</label>
                                            <input class="form-check-input code-switcher" type="checkbox" id="popover-showcode">
                                        </div>
                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="lead">Un array asociativo utiliza claves personalizadas para acceder a los elementos del array.</p>
                                    <div class="live-preview">
                                        <h5>ARRAYS ASOCIATIVOS - CREACIÓN</h5>
                                        <p class="lead espaciado"><b>Crear un array asociativo</b></p>
                                        <p class="lead espaciado">$persona = array( </p>
                                        <p class="lead espaciadoExtra">"nombre" => "Clark", </p>
                                        <p class="lead espaciadoExtra">"apellido" => "Kent", </p>
                                        <p class="lead espaciadoExtra">"edad" => 28, </p>
                                        <p class="lead espaciadoExtra">"ciudad" => "Smallville" </p>
                                        <p class="lead espaciado">); </p>

                                        <p class="lead espaciado"><b>Otra forma a partir de PHP 5.4</b></p>
                                        <p class="lead espaciado">$persona = [ </p>
                                        <p class="lead espaciadoExtra">"nombre" => "Clark", </p>
                                        <p class="lead espaciadoExtra">"apellido" => "Kent", </p>
                                        <p class="lead espaciadoExtra">"edad" => 28, </p>
                                        <p class="lead espaciadoExtra">"ciudad" => "Smallville" </p>
                                        <p class="lead espaciado">]; </p>

                                        <h5>ACCESO Y MANIPULACIÓN</h5>
                                        <p class="lead espaciado"><b>Acceder a elementos en un array asociativo</b></p>
                                        <p class="lead espaciado">echo "Nombre completo: " . $persona["nombre"] . " " . $persona["apellido"] . "&lt;br&gt;"; </p>
                                        <p class="lead espaciado">echo "Ciudad: " . $persona["ciudad"] . "&lt;br&gt;"; </p>

                                        <p class="lead espaciado"><b>Modificar un elemento en un array asociativo</b></p>
                                        <p class="lead espaciado">$persona["edad"] = 30; </p>
                                        <p class="lead espaciado">echo "Edad: " . $persona["edad"] . "&lt;br&gt;"; </p>

                                        <p class="lead espaciado"><b>Añadir un elemento a un array asociativo</b></p>
                                        <p class="lead espaciado">$persona["profesion"] = "Reportero"; </p>
                                        <p class="lead espaciado">echo "Profesión: " . $persona["profesion"] . "&lt;br&gt;"; </p>

                                        <p class="lead espaciado"><b>Eliminar un elemento de un array asociativo</b></p>
                                        <p class="lead espaciado">unset($persona["ciudad"]); </p>
                                        <p class="lead espaciado">var_dump($persona); </p>

                                        <h5>ITERACIÓN A TRAVÉS DE UN ARRAY</h5>
                                        <p class="lead espaciado"><b>Obtener las claves del array asociativo</b></p>
                                        <p class="lead espaciado">$claves = array_keys($persona); </p>
                                        <p class="lead espaciado"><b>Obtener la longitud del array </p>
                                        <p class="lead espaciado">$longitud = count($claves); </p>
                                        <p class="lead espaciado"><b>Iterar a través del array asociativo utilizando un bucle for</b></p>
                                        <p class="lead espaciado">for ($i = 0; $i &lt; $longitud; $i++) { </p>
                                        <p class="lead espaciadoExtra">$clave = $claves[$i]; </p>
                                        <p class="lead espaciadoExtra">$valor = $persona[$clave]; </p>
                                        <p class="lead espaciadoExtra">echo "$clave: $valor " . "&lt;br&gt;"; </p>
                                        <p class="lead espaciado">} </p>

                                        <p class="lead espaciado"><b>Iterar a través de un array asociativo con foreach</b> </p>
                                        <p class="lead espaciado">foreach($persona as $clave => $valor) { </p>
                                        <p class="lead espaciadoExtra">echo $clave .": ". $valor ."&lt;br&gt;"; </p>
                                        <p class="lead espaciado">} </p>

                                        <h5>ARRAY ASOCIATIVO COMPLEJO</h5>
                                        <p class="lead espaciado"><b>Crear un array asociativo complejo</b></p>
                                        <p class="lead espaciado">$user = [ </p>
                                        <p class="lead espaciadoExtra">"nombre" => "Mario Rojas", </p>
                                        <p class="lead espaciadoExtra">"edad" => 30, </p>
                                        <p class="lead espaciadoExtra">"direc" => [ </p>
                                        <p class="lead extraSpace">"calle" => "Av. Francisco de Aguirre #321", </p>
                                        <p class="lead extraSpace">"ciudad" => "La Serena", </p>
                                        <p class="lead extraSpace">"codigo" => "170000" </p>
                                        <p class="lead espaciadoExtra">], </p>
                                        <p class="lead espaciadoExtra">"contacto" => [ </p>
                                        <p class="lead extraSpace">"email" => "mario@example.com", </p>
                                        <p class="lead extraSpace">"telefono" => "+569 98653214" </p>
                                        <p class="lead espaciadoExtra">], </p>
                                        <p class="lead espaciadoExtra">"intereses" => ["Programación", "Viajes", "Música"] </p>
                                        <p class="lead espaciado">]; </p>

                                        <p class="lead espaciado"><b>Acceder a los datos del array asociativo complejo</b></p>
                                        <p class="lead espaciado">echo "Nombre: " . $user["nombre"] . "&lt;br&gt;"; </p>
                                        <p class="lead espaciado">echo "Edad: " . $user["edad"] . "&lt;br&gt;"; </p>
                                        <p class="lead espaciado">echo "Dirección: " . $user["direc"]["calle"] . ", " . $user["direc"]["ciudad"]. "&lt;br&gt;"; </p>
                                        <p class="lead espaciado">echo "Email: " . $user["contacto"]["email"] . "&lt;br&gt;"; </p>
                                        <p class="lead espaciado">echo "Intereses: " . implode(", ", $user["intereses"]);</p>
                                        <p class="lead espaciado"><b>implode</b> → Convierte el array en una cadena separada por comas </p>
                                    </div>
                                    <div class="d-none code-view">
                                        <pre class="language-markup" style="height: auto;"><code>//ARRAYS ASOCIATIVOS - CREACIÓN

//Crear un array asociativo
$persona = array(
    "nombre" => "Clark",
    "apellido" => "Kent",
    "edad" => 28,
    "ciudad" => "Smallville"
);

//Otra forma a partir de PHP 5.4
$persona = [
    "nombre" => "Clark",
    "apellido" => "Kent",
    "edad" => 28,
    "ciudad" => "Smallville"
];

//ARRAYS ASOCIATIVOS - ACCESO Y MANIPULACIÓN
//Acceder a elementos en un array asociativo
echo "Nombre completo: ".$persona["nombre"]." ".$persona["apellido"]."&lt;br&gt;";
echo "Ciudad: ".$persona["ciudad"]."&lt;br&gt;";

//Modificar un elemento en un array asociativo
$persona["edad"] = 30;
echo "Edad: ".$persona["edad"]."&lt;br&gt;";

// Añadir un elemento a un array asociativo
$persona["profesion"] = "Reportero";
echo "Profesion: ".$persona["profesion"]."&lt;br&gt;";

// Eliminar un elemento de un array asociativo
unset($persona["ciudad"]);
var_dump($persona);

//ITERACIÓN A TRAVÉS DE UN ARRAY
// Obtener las claves del array asociativo
$claves = array_keys($persona);

// Obtener la longitud del array
$longitud = count($claves);

// Iterar a través del array asociativo utilizando un bucle for
for ($i = 0; $i < $longitud; $i++) {
    $clave = $claves[$i];
    $valor = $persona[$clave];
    echo "$clave: $valor "."&lt;br&gt;";
}

//Iterar a través de un array asociativo con foreach
foreach($persona as $clave => $valor) {
    echo $clave .": ". $valor ."&lt;br&gt;";
}

//ARRAY ASOCIATIVO COMPLEJO
//Crear un array asociativo complejo
$usuario = [
    "nombre" => "Mario Rojas",
    "edad" => 30,
    "direccion" => [
        "calle" => "Av. Francisco de Aguirre #321",
        "ciudad" => "La Serena",
        "codigo_postal" => "170000"
    ],
    "contacto" => [
        "email" => "mario@example.com",
        "telefono" => "+569 98653214"
    ],
    "intereses" => ["Programación", "Viajes", "Música"]
];

// Acceder a los datos del array asociativo complejo
echo "Nombre: " . $usuario["nombre"] . "&lt;br&gt;";
echo "Edad: " . $usuario["edad"] . "&lt;br&gt;";
echo "Dirección: " . $usuario["direccion"]["calle"] . ", " . $usuario["direccion"]["ciudad"] . ", " . $usuario["direccion"]["codigo_postal"] . "&lt;br&gt;";
echo "Email: " . $usuario["contacto"]["email"] . "&lt;br&gt;";
echo "Intereses: " . implode(", ", $usuario["intereses"]); //implode -> Convierte el array en una cadena separada por comas</code></pre>
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