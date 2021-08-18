<body class="">
    <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
        <div class="container-fluid">
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Brand -->
            <a class="navbar-brand pt-0" href="./index.html">
                <img src="images/blue.png" class="navbar-brand-img" alt="...">
            </a>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Collapse header -->
                <div class="navbar-collapse-header d-md-none">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="../index.html">
                                <img src="images/blue.png">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Form -->
                <!-- Navigation -->
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="inicio.php">
                        <i class="fas fa-mouse-pointer"></i> Inicio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="veradmin.php">
                        <i class="fas fa-user-plus"></i>Agregar Administrador
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="crear.php">
                        <i class="fas fa-truck-moving"></i> Agregar Camión
                        </a>
                    </li>

                </ul>
                <br>
                <br>
                <!-- Divider -->
                <hr class="my-3">
                <h6 class="navbar-heading text-muted">Sesion</h6>
                <ul class="navbar-nav mb-md-3">
                <li class="nav-item">
                        <a class="nav-link" href="editaradmin.php?id=<?php echo $_SESSION['id']?>">
                        <i class="fas fa-user"></i> <?php echo $_SESSION['correo']?>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="index.php?close=true">
                        <i class="fas fa-sign-out-alt"></i>Cerrar Sesion
                        </a>
                    </li>
                </ul>
                <span></span>
                <span></span>
                <br>      <br>     <br>   <br>  <br>  <br>      <br>
                <!-- Divider -->
                <h6 class="navbar-heading text-muted">Acerca del autor</h6>
                <ul class="navbar-nav mb-md-3">
                    <li class="nav-item ">
                        <a class="nav-link" href="acercade.php">
                        <i class="far fa-copyright"></i> Acerca de
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="main-content">
        <!-- Navbar -->
        <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
            <div class="container-fluid">
                <!-- Brand -->
                <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./index.html">Inicio</a>

            </div>
        </nav>
        <!-- End Navbar -->