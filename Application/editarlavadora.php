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
$query = "SELECT * FROM lavadoras where id = $id";
$resultper = mysqli_query($conn,$query);
$row = mysqli_fetch_array($resultper);
?>


        <!-- Header -->
        <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 300px; background-image: url(../Tarea4/images/shoto.png); background-size: cover; background-position: center top;">
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
                                        <h3 class="mb-0">Editar informacion de Lavadora</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                             <form action="crudlavadora/edit.php?id=<?php echo $id?>" method="POST" autocomplete="off">
                                    <!-- Address -->
                                    <h6 class="heading-small text-muted mb-4">Informacion de la lavadora</h6>
                                    <div class="pl-lg-4">


                                        <?php ?>
                                        <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="inputGroup-sizing-default">Codigo</span>
                                                            </div>
                                                            <input type="text" class="form-control" name="lcodigo" value="<?php echo $row['codigo'];?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="inputGroup-sizing-default">Marca</span>
                                                            </div>
                                                            <input type="text" class="form-control" name="lmarca" value="<?php echo $row['marca'];?>"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="inputGroup-sizing-default">Modelo</span>
                                                            </div>
                                                            <input type="text" class="form-control" name="lmodelo" value="<?php echo $row['modelo'];?>"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="inputGroup-sizing-default">Valor</span>
                                                            </div>
                                                            <input type="number" class="form-control" name="lvalor" value="<?php echo $row['valor'];?>"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="inputGroup-sizing-default">Peso en libras</span>
                                                            </div>
                                                            <input type="number" class="form-control" name="lpeso" value="<?php echo $row['peso'];?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php ?>
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