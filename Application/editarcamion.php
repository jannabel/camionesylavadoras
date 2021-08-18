<?php include("functions/bd.php") ;?>
<?php include("includes/head.php") ;?>
<?php include("includes/navbar.php");?>
<?php if (!isset($_SESSION['correo'])){
            $_SESSION['titulo']= 'QUE MAL!';
            $_SESSION['mensaje']= 'No se puede entrar a la pagina sin iniciar sesion primero';
            $_SESSION['color'] = 'danger';
echo '<meta http-equiv = "refresh" content = " 0; url = login.php"/>';
}

    ?>
<?php
$id = $_GET['id'];
$query = "SELECT * FROM camiones where id = $id";
$resultper = mysqli_query($conn,$query);
$row = mysqli_fetch_array($resultper);
?>


        <!-- Header -->
        <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 300px; background-image: url(images/shoto.png); background-size: cover; background-position: center top;">
            <!-- Mask -->
            <span class="mask bg-gradient-primary opacity-9"></span>

        </div>

        <!-- Page content -->
            <div class="container-fluid mt--6">
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
                <div class="row">
                    <div class="col-xl-12 order-xl-1">
                        <div class="card bg-secondary shadow">
                            <div class="card-header bg-white border-1">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <h3 class="mb-0">Editar informacion del Camion</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                             <form action="crudcamion/edit.php?id=<?php echo $id?>" method="POST" autocomplete="off">

                                    <h6 class="heading-small text-muted mb-4">Informacion del Camion</h6>
                                    <div class="pl-lg-4">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="inputGroup-sizing-default">Marca</span>
                                                        </div>
                                                        <input type="text" class="form-control" name="marca" value="<?php echo $row['marca'];?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="inputGroup-sizing-default">Modelo</span>
                                                        </div>
                                                        <input type="text" class="form-control" name="modelo" value="<?php echo $row['modelo'];?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="inputGroup-sizing-default">Color</span>
                                                        </div>
                                                        <input type="text" class="form-control" name="color" value="<?php echo $row['color'];?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Comentario</span>
                                                        </div>
                                                        <textarea class="form-control" name="comentario" aria-label="With textarea"><?php echo $row['comentario'];?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>


                                    <hr class="my-4" />
                                    <br>
                                    <!-- Description -->
                                    <div class="container-fluid d-flex align-items-center">

                                        <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Actualizar informacion</button>

                                    </div>
                                    <br>
                                    <!-- <div class="container-fluid d-flex align-items-center">
                                    <button type="button" class="btn btn-danger btn-lg btn-block">Eliminar</button>
                                    </div> -->
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

    </div>
    <br>
    <br>
    <?php include("includes/footer.php") ;?>

</body>

</html>