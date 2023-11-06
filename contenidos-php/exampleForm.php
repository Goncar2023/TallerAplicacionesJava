<?php include 'layouts/session.php'; ?>
<?php include 'layouts/main.php'; ?>

<head>

    <?php includeFileWithVariables('layouts/title-meta.php', array('title' => 'Formulario')); ?>

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

                    <?php includeFileWithVariables('layouts/page-title.php', array('pagetitle' => 'Inicio', 'title' => 'Formulario Ejemplo')); ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Formulario Ejemplo</h4>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                            <a href="useForm.php" class="link-primary link-offset-2 text-decoration-underline link-underline-opacity-25 link-underline-opacity-100-hover">Volver a formularios</a>
                                        </div>
                                    </div>
                                </div><!-- end card header -->
                            </div><!-- end card -->
                            <div class="form-container">
                                <h2>Formulario de Registro</h2>
                                <form action="procesarForm.php" method="POST" ><!-- method="GET" -->
                                    <div class="form-group">
                                        <label for="nombre">Nombre:</label>
                                        <input type="text" id="nombre" name="nombre" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Correo Electrónico:</label>
                                        <input type="email" id="email" name="email" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="genero">Género:</label>
                                        <div class="radio-group">
                                            <input type="radio" id="masculino" name="genero" value="masculino">
                                            <label for="masculino">Masculino</label>
                                            <input type="radio" id="femenino" name="genero" value="femenino">
                                            <label for="femenino">Femenino</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="comentarios">Comentarios:</label><br>
                                        <textarea id="comentarios" name="comentarios" rows="4" cols="30"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="pais">País:</label>
                                        <select id="pais" name="pais">
                                            <option value="Mexico">México</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Chile">Chile</option>
                                            <option value="España">España</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit">Registrar</button>
                                    </div>
                                </form>
                            </div>
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