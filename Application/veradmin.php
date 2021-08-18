<?php include("functions/bd.php") ;?>
<?php include("includes/head.php") ;?>
<?php include("includes/navbar.php") ;?>
<?php if (!isset($_SESSION['correo'])){
            $_SESSION['titulo']= 'QUE MAL!';
            $_SESSION['mensaje']= 'No se puede entrar a la pagina sin iniciar sesion primero';
            $_SESSION['color'] = 'danger';
echo '<meta http-equiv = "refresh" content = " 0; url = login.php"/>';
}

    ?>
        <!-- Header -->
        <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
            <div class="container-fluid">
                <div class="header-body">
                    <!-- Card stats -->
                    <div class="row">
                        <div class="col">
                            <div class="card shadow">
                                <div class="card-header bg-transparent">
                                    <h1 class="mb-0">Administradores</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if (isset($_SESSION['mensaje'])):?>
                    <div class="alert alert-<?=$_SESSION['color']?> alert-dismissible fade show" role="alert">
                        <span class="alert-text"><strong><?=$_SESSION['titulo'];?></strong> <?= $_SESSION['mensaje']?></span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php                 unset($_SESSION['mensaje']);
                unset($_SESSION['titulo']);
                unset($_SESSION['color']); endif; ?>
        <div class="container-fluid">
        <br>
        <div class="row">
                    <div class="col-md-9"></div>
                        <div class="col-md-3">
                            <button class="btn btn-outline-info" id="boton" onclick="ira();" type="button">
                                    <span class="btn-inner--icon"><i class="fas fa-plus"></i> </span>
                                    <span class="btn-inner--text"> Agregar Administrador</span>
                            </button>

                        </div>
                    </div>
                <br>
                <div class="table-responsive">

                    <div>
                        <table class="table align-items-center">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="name">Usuario</th>
                                    <th scope="col" class="sort" data-sort="budget">Correo</th>
                                    <th scope="col" class="sort" data-sort="status">Nombre</th>
                                </tr>
                            </thead>
                            <tbody class="list">


                                <?php

                                    $query = "SELECT * FROM administradores";
                                    $resultper = mysqli_query($conn,$query);

                                    while ($row = mysqli_fetch_array($resultper)):
                                    ?>
                                    <tr>
                                    <th scope="row">
                                        <?php echo $row['usuario'];?>
                                    </th>
                                    <th scope="row">
                                        <?php echo $row['correo'];?>
                                    </th>
                                    <th scope="row">
                                        <?php echo $row['nombre'];?>
                                    </th>
                                    </tr>
                                    <?php endwhile;?>

                            </tbody>
                        </table>
                    </div>
                </div>

        </div>

        <?php include("includes/footer.php") ;?>

   </div>
   <script>
       function ira(){
        window.location="crearadmin.php";
       }
   </script>
</body>

</html>