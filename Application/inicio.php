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
                                    <h1 class="mb-0">Camiones</h1>
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
                <?php
                unset($_SESSION['mensaje']);
                unset($_SESSION['titulo']);
                unset($_SESSION['color']);
                endif; ?>
        <div class="container-fluid">


                <div class="table-responsive">

                    <div>
                        <table class="table align-items-center">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="name">Marca</th>
                                    <th scope="col" class="sort" data-sort="budget">Modelo</th>
                                    <th scope="col" class="sort" data-sort="status">Color</th>
                                    <th scope="col">Comentario</th>
                                    <th scope="col">Cantidad de Lavadoras</th>
                                    <th scope="col">Valor total</th>
                                    <th scope="col">Peso total </th>
                                    <th scope="col" class="sort" data-sort="completion">Opciones</th>

                                </tr>
                            </thead>
                            <tbody class="list">


                                <?php

                                    $query = "SELECT * FROM camiones";
                                    $resultper = mysqli_query($conn,$query);

                                    while ($row = mysqli_fetch_array($resultper)):
                                ?>
                                <tr>
                                    <th scope="row">
                                    <?php echo $row['marca'];?>
                                    </th>
                                    <th scope="row">
                                    <?php echo $row['modelo'];?>
                                    </th>
                                    <th scope="row">
                                    <?php echo $row['color'];?>
                                    </th>
                                    <th scope="row">
                                    <?php echo $row['comentario'];?>
                                    </th>
                                    <th scope="row">
                                    <?php echo $row['cantidad_lavadoras'];?>
                                    </th>
                                    <th scope="row">
                                    <?php echo $row['valor'];?>
                                    </th>
                                    <th scope="row">
                                    <?php echo $row['peso'];?>
                                    </th>
                                    <th scope="row">
                                    <a href="pdf/generarpdf.php?id=<?php echo $row['id']?>" >
                                        <button class="btn btn-outline-danger" type="button"data-toggle="tooltip" data-placement="top" title="Descargar PDF">
                                            <span class="btn-inner--icon"><i class="far fa-file-pdf"></i></span>
                                        </button>
                                    </a>
                                    <a href="verlavadora.php?id=<?php echo $row['id']?>" >
                                        <button class="btn btn-icon btn-success" type="button"data-toggle="tooltip" data-placement="top" title="ver/agregar lavadora">
                                            <span class="btn-inner--icon"><i class="fas fa-truck-loading"></i></span>
                                        </button>
                                    </a>
                                    <a href="editarcamion.php?id=<?php echo $row['id']?>" >
                                        <button class="btn btn-icon btn-warning" type="button"data-toggle="tooltip" data-placement="top" title="Editar info del Camion">
                                            <span class="btn-inner--icon"><i class="fas fa-edit"></i></span>
                                        </button>
                                    </a>
                                    <a data-toggle="modal" data-target="#eliminar<?php echo $row['id']?>">
                                        <button class="btn btn-icon btn-danger" type="button"data-toggle="tooltip" data-placement="top" title="Eliminar Camion">
                                            <span class="btn-inner--icon"><i class="fas fa-trash-alt"></i></span>
                                        </button>
                                    </a>
                                    </th>
                                </tr>
                                <div class="modal fade" id="eliminar<?php echo $row['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Seguro que desea eliminar el Camion?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body right">

                                        <p><strong><?php echo $row['marca'];?> - <?php echo $row['modelo'];?>, <?php echo $row['color'];?></strong> </p>
                                        <br>
                                        <p><strong>Todas las lavadoras afiliadas a este camion se borrara de forma definitiva junto con el camion</strong> </p>
                                        <br><p><strong>Info: </strong></p>
                                        <p><strong>Cantidad de lavadoras: </strong><?php echo $row['cantidad_lavadoras'];?></p>
                                        <p><strong>Valor total de la carga: </strong><?php echo $row['valor'];?></p>
                                        <p><strong>Peso total de la carga: </strong><?php echo $row['peso'];?></p>
                                    </div>
                                    <div class="modal-footer">
                                    <a href="crudcamion/delete.php?id=<?php echo $row['id'];?>"> <button type="button" class="btn btn-outline-danger btn-lg">Eliminar <i class="fas fa-trash"></i></button></a>

                                        <!--<button type="button" class="btn btn-default btn-lg btn-block"data-dismiss="modal">Cerrar</button>-->
                                    </div>
                                    </div>
                                </div>
                                </div>
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