w<?php include 'layouts/session.php'; ?>
<?php include 'layouts/main.php'; ?>

<head>

    <?php includeFileWithVariables('layouts/title-meta.php', array('title' => 'Formularios')); ?>

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

                    <?php includeFileWithVariables('layouts/page-title.php', array('pagetitle' => 'Inicio', 'title' => 'Formularios')); ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Uso de formularios</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="lead">Los formularios son una parte fundamental de las páginas web interactivas. Permiten a los usuarios enviar datos al servidor web para su procesamiento posterior. </p>
                                    <div class="live-preview">
                                        <a href="exampleForm.php" class="link-primary link-offset-2 text-decoration-underline link-underline-opacity-25 link-underline-opacity-100-hover">Ir al formulario de ejemplo</a>
                                    </div>
                                    <div class="d-none code-view">
                                        <pre class="language-markup" style="height: auto;"><code>

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
                                    <h4 class="card-title mb-0 flex-grow-1">Procesamiento del formulario</h4>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                            <label for="popover-showcode" class="form-label text-muted">Mostrar código</label>
                                            <input class="form-check-input code-switcher" type="checkbox" id="popover-showcode">
                                        </div>
                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="lead">Los formularios son una parte fundamental de las páginas web interactivas. Permiten a los usuarios enviar datos al servidor web para su procesamiento posterior. </p>
                                    <div class="live-preview">
                                        <p class="lead"><b>POST</b> y <b>GET</b> son dos superglobales que se utilizan para recopilar datos de formularios HTML u otras fuentes de entrada del usuario.
                                        Ambos métodos permiten que los datos ingresados por el usuario sean accesibles en el script PHP para su procesamiento.</p>
                                        <h5>$_POST en PHP:</h5>
                                        <p class="lead">$_POST es una superglobal en PHP que se utiliza para recopilar datos del formulario enviado usando el método POST en HTML.
                                            Cuando un formulario se envía con <b>method="post"</b>, los datos del formulario se almacenan en el array asociativo $_POST.</p>
                                        <h5>Método GET:</h5>
                                        <p class="lead">Cuando se utiliza el método <b>GET</b> en un formulario, los datos del formulario se envían como parte de la URL en la barra de direcciones
                                            del navegador. Los datos son visibles para el usuario en la URL y pueden ser marcados como favoritos o
                                            compartidos fácilmente. Es útil para enviar datos no sensibles y para propósitos de navegación o marcadores de página.</p>
                                    </div>
                                    <div class="d-none code-view">
                                        <pre class="language-markup" style="height: auto;"><code>if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $genero = $_POST["genero"];
    $comentarios = $_POST["comentarios"];
    $pais = $_POST["pais"];

    // Realizar acciones con los datos (por ejemplo, almacenar en una base de datos)

    // Mostrar un mensaje de éxito al usuario
    echo "¡Gracias por registrarte, $nombre! &lt;br&gt;";
    echo "Correo Electrónico: $email &lt;br&gt;";
    echo "Género: $genero &lt;br&gt;";
    echo "Comentarios: $comentarios &lt;br&gt;";
    echo "País: $pais &lt;br&gt;";
    echo "<a href='useForm.php' class='link-primary link-offset-2 text-decoration-underline link-underline-opacity-25 link-underline-opacity-100-hover'>Volver</a>";

} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Procesar datos del formulario enviado por GET
    $nombre = $_GET["nombre"];
    $email = $_GET["email"];
    $genero = $_GET["genero"];
    $comentarios = $_GET["comentarios"];
    $pais = $_GET["pais"];

    // Mostrar un mensaje de éxito al usuario
    echo "¡Gracias por registrarte, $nombre! &lt;br&gt;";
    echo "Correo Electrónico: $email &lt;br&gt;";
    echo "Género: $genero &lt;br&gt;";
    echo "Comentarios: $comentarios &lt;br&gt;";
    echo "País: $pais &lt;br&gt;";
    echo "<a href='useForm.php' class='link-primary link-offset-2 text-decoration-underline link-underline-opacity-25 link-underline-opacity-100-hover'>Volver</a>";
}else {
    // Si el formulario no se envió correctamente, redirigir o mostrar un mensaje de error
    echo "Error al procesar el formulario.";
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