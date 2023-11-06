<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-sintaxis">Sintaxis Básica</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="variables.php">
                        <i class="bx bx-dollar"></i> <span data-key="t-variable">Variables</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="operadores.php">
                        <i class="bx bx-math"></i> <span data-key="t-operators">Operadores</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#controlStructures" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTables">
                        <i class="bx bx-repost"></i> <span data-key="t-structures">Estructuras de control</span>
                    </a>
                    <div class="collapse menu-dropdown" id="controlStructures">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="condicionales.php" class="nav-link" data-key="t-conditionals">Condicionales</a>
                            </li>
                            <li class="nav-item">
                                <a href="bucles.php" class="nav-link" data-key="t-loops">Bucles</a>
                            </li>
                            <li class="nav-item">
                                <a href="switchCase.php" class="nav-link" data-key="t-switchs">Switch Case</a>
                            </li>
                        </ul>
                    </div>
                </li><!--end sintaxis -->

                <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-functions">Funciones</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="funciones.php">
                        <i class="bx bx-cog"></i> <span data-key="t-funct">Funciones</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="funcionesNativas.php">
                        <i class="bx bx-cog"></i> <span data-key="t-variable">Funciones Nativas</span>
                    </a>
                </li>
                </li><!--end funciones -->

                <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-arrays">Arreglos</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="arrays.php">
                        <i class="bx bx-dots-horizontal"></i> <span data-key="t-array">Arreglos</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="asociativeArrays.php">
                        <i class="bx bx-sitemap"></i> <span data-key="t-arrayAsoc">Arreglos Asociativos</span>
                    </a>
                </li><!--end arrays -->

                <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-forms">Formularios</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="useForm.php">
                        <i class="bx bx-receipt"></i> <span data-key="t-useForm">Uso de formularios</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="getPost.php">
                        <i class="bx bx-sort-alt-2"></i> <span data-key="t-getAndPost">GET y POST</span>
                    </a>
                </li><!--end forms -->

                <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-files">Archivos</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="archivo.php">
                        <i class="bx bx-file"></i> <span data-key="t-connection">Archivo....</span>
                    </a>
                </li><!--end files -->

                <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-database">Bases de datos</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="conexion.php">
                        <i class="bx bx-plug"></i> <span data-key="t-connection">Conexión</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="crud.php">
                        <i class="bx bx-data"></i> <span data-key="t-form">Manipulación de DB</span>
                    </a>
                </li><!--end database -->
            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>