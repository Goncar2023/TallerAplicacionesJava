<?php include 'layouts/session.php'; ?>
<?php include 'layouts/main.php'; ?>

    <head>

        <?php includeFileWithVariables('layouts/title-meta.php', array('title' => 'Inicio')); ?>

        <!-- jsvectormap css -->
        <link href="assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

        <!--Swiper slider css-->
        <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />
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

                        <div class="row">
                            <div class="col">

                                <div class="h-100">
                                    <div class="row">
                                        <div class="col-xl-3 col-md-6">
                                            <!-- card -->
                                            <div class="card card-animate">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Documentación PHP</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                                        <div>
                                                            <a href="https://www.php.net/manual/es/index.php" target="_blank" class="text-decoration-underline">Ir al manual</a>
                                                        </div>
                                                        <div class="avatar-sm flex-shrink-0">
                                                            <span class="avatar-title bg-primary-subtle rounded fs-3">
                                                                <i class="bx bx-file-find text-primary"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div><!-- end card body -->
                                            </div><!-- end card -->
                                        </div><!-- end col -->

                                        <div class="col-xl-3 col-md-6">
                                            <!-- card -->
                                            <div class="card card-animate">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 overflow-hidden">
                                                         <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Bucles</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                                        <div>
                                                            <a href="bucles.php" class="text-decoration-underline">Ir a bucles</a>
                                                        </div>
                                                        <div class="avatar-sm flex-shrink-0">
                                                            <span class="avatar-title bg-info-subtle rounded fs-3">
                                                                <i class="bx bx-repost text-info"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div><!-- end card body -->
                                            </div><!-- end card -->
                                        </div><!-- end col -->

                                        <div class="col-xl-3 col-md-6">
                                            <!-- card -->
                                            <div class="card card-animate">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Funciones</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                                        <div>
                                                            <a href="funciones.php" class="text-decoration-underline">Ir a funciones</a>
                                                        </div>
                                                        <div class="avatar-sm flex-shrink-0">
                                                            <span class="avatar-title bg-primary-subtle rounded fs-3">
                                                                <i class="bx bx-cog text-primary"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div><!-- end card body -->
                                            </div><!-- end card -->
                                        </div><!-- end col -->

                                        <div class="col-xl-3 col-md-6">
                                            <!-- card -->
                                            <div class="card card-animate">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> My Balance</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                                        <div>
                                                            <a href="" class="text-decoration-underline">Withdraw money</a>
                                                        </div>
                                                        <div class="avatar-sm flex-shrink-0">
                                                            <span class="avatar-title bg-info-subtle rounded fs-3">
                                                                <i class="bx bx-wallet text-info"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div><!-- end card body -->
                                            </div><!-- end card -->
                                        </div><!-- end col -->
                                    </div> <!-- end row-->
                                </div> <!-- end .rightbar-->
                            </div> <!-- end col -->
                        </div>
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

        <!-- apexcharts -->
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- Vector map-->
        <script src="assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
        <script src="assets/libs/jsvectormap/maps/world-merc.js"></script>

        <!--Swiper slider js-->
        <script src="assets/libs/swiper/swiper-bundle.min.js"></script>

        <!-- Dashboard init -->
        <script src="assets/js/pages/dashboard-ecommerce.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>

</html>