<?php include("../functions/bd.php");


$id = $_GET['id'];

$query = "SELECT * FROM lavadoras WHERE id_camion = $id";
$resultper = mysqli_query($conn,$query);

$query = "SELECT * FROM camiones WHERE id = $id";
$resultper1 = mysqli_query($conn,$query);
if (mysqli_num_rows($resultper1)>0) {
    $rowcam = mysqli_fetch_array($resultper1);
    $modelocam = $rowcam['modelo'];
    $marcacam =$rowcam['marca'];
    $cantidadcam =$rowcam['cantidad_lavadoras'];
    $valorcam =$rowcam['valor'];
    $pesocam =$rowcam['peso'];
}

?>
<style>
    table{
        width:100%;
        border:1px;

    }
    td,th{
        width:20%;
        border:1px solid black;
    }

    thead{
        font-weight:bold;

    }
    h2{
        text-align:center;
    }
</style>
<h2>Camion:<?php echo $marcacam;?>-<?php echo $modelocam;?> </h2>
<div class="row">
    <div class="col">
        <p><strong>Marca: </strong><?php echo $marcacam;?></p>
        <p><strong>Modelo: </strong><?php echo $modelocam;?></p>
            <p><strong>Cantidad de lavadoras: </strong><?php echo $cantidadcam; ?> </p>
            <p><strong>Valor total de la carga: </strong><?php echo $valorcam;?></p>
            <p><strong>Peso total de la carga: </strong><?php echo $pesocam;?></p>

    </div>

</div>

<br>
                        <table cellspacing="0">
                            <thead>
                                <tr>
                                    <th colspan="5">Lavadoras</th>
                                </tr>
                                <tr>
                                    <th >Codigo</th>
                                    <th >Marca</th>
                                    <th >Modelo</th>
                                    <th >Valor</th>
                                    <th >Peso en libras</th>


                                </tr>
                            </thead>
                            <tbody >


                                    <?php while ($row = mysqli_fetch_array($resultper)):?>
                                        <tr>
                                            <th >
                                                <?php echo $row['codigo'];?>
                                            </th>
                                            <th >
                                                <?php echo $row['marca'];?>
                                            </th>
                                            <th >
                                                <?php echo $row['modelo'];?>
                                            </th>
                                            <th >
                                                <?php echo $row['valor'];?>
                                            </th>
                                            <th >
                                                <?php echo $row['peso'];?>
                                            </th>

                                        </tr>

                                    <?php endwhile;?>

                            </tbody>
                        </table>


    </body>

</html>