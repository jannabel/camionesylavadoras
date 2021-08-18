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
<?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $_SESSION['idcam']=$id;
        $query = "SELECT * FROM lavadoras WHERE id_camion = $id";
        $resultper = mysqli_query($conn,$query);

        $query = "SELECT * FROM camiones WHERE id = $id";
        $resultper1 = mysqli_query($conn,$query);
        if (mysqli_num_rows($resultper1)>0) {
            $rowcam = mysqli_fetch_array($resultper1);
            $modelocam = $rowcam['modelo'];
            $marcacam =$rowcam['marca'];
        }
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
                                    <h1 class="mb-0">Camion: <?php echo $marcacam;?>-<?php echo $modelocam;?>  </h1>
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

            <div class="col-md-3">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Valor Total</span>
                                </div>
                                <input type="number" class="form-control" Disabled  aria-label="Sizing example input" value="<?php echo $rowcam['valor'];?>" aria-describedby="inputGroup-sizing-default">
                            </div>
                        </div>
            </div>

            <div class="col-md-3">
                    <div class="form-group">
                        <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Peso Total</span>
                                </div>
                            <input type="number" class="form-control" Disabled  aria-label="Sizing example input" value="<?php echo $rowcam['peso'];?>" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
            </div>
            <div class="col-md-3"></div>
                        <div class="col-md-3">
                        <a href="crearlavadora.php?id=<?php echo $id?>" >
                            <button class="btn btn-outline-info" id="boton" type="button">
                                    <span class="btn-inner--icon"><i class="fas fa-plus"></i> </span>
                                    <span class="btn-inner--text"> Agregar Lavadora</span>
                            </button>
                        </a>
                        </div>
                    </div>
                <br>
                <div class="table-responsive">

                    <div>
                        <table class="table align-items-center">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="Codigo">Codigo</th>
                                    <th scope="col" class="sort" data-sort="Marca">Marca</th>
                                    <th scope="col" class="sort" data-sort="Modelo">Modelo</th>
                                    <th scope="col" class="sort" data-sort="Valor">Valor</th>
                                    <th scope="col" class="sort" data-sort="Peso">Peso en libras</th>
                                    <th scope="col" class="sort" data-sort="Opciones">Opciones</th>

                                </tr>
                            </thead>
                            <tbody class="list">


                                    <?php while ($row = mysqli_fetch_array($resultper)):?>
                                        <tr>
                                        <th scope="row">
                                        <?php echo $row['codigo'];?>
                                        </th>
                                        <th scope="row">
                                            <?php echo $row['marca'];?>
                                        </th>
                                        <th scope="row">
                                            <?php echo $row['modelo'];?>
                                        </th>
                                        <th scope="row">
                                            <?php echo $row['valor'];?>
                                        </th>
                                        <th scope="row">
                                            <?php echo $row['peso'];?>
                                        </th>
                                        <th scope="row">
                                        <a href="editarlavadora.php?id=<?php echo $row['id']?>">
                                        <button class="btn btn-icon btn-success" type="button"data-toggle="tooltip" data-placement="top" title="Editar lavadora">
                                            <span class="btn-inner--icon"><i class="fas fa-edit"></i></span>
                                        </button>
                                        </a>
                                        <a href="crudlavadora/delete.php?id=<?php echo $row['id']?>">
                                        <button class="btn btn-icon btn-danger" type="button"data-toggle="tooltip" data-placement="top" title="Eliminar lavadora">
                                            <span class="btn-inner--icon"><i class="fas fa-trash-alt"></i></span>
                                        </button>
                                        </a>

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

</body>

</html>