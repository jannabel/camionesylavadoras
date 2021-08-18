<?php
include("../functions/bd.php");

if (isset($_POST['save'])) {
    $id = $_GET['id'];

    $codigo = $_POST['lcodigo'];
    $marca = $_POST['lmarca'];
    $modelo = $_POST['lmodelo'];

    $valor = $_POST['lvalor'];
    $peso = $_POST['lpeso'];

    $query = "SELECT * FROM lavadoras where id= $id";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result);
    $idcamion = $row['id_camion'];

    $query = "UPDATE lavadoras set codigo = '$codigo', marca = '$marca', modelo = '$modelo', valor =$valor , peso = $peso WHERE id = $id";
    $result = mysqli_query($conn,$query);

    if (!isset($result)) {
        $_SESSION['titulo']= 'QUE MAL!';
        $_SESSION['mensaje']= 'No se ha podido actualizar...';
        $_SESSION['color'] = 'danger';
    }else{
        $_SESSION['titulo']= 'QUE BIEN!';
        $_SESSION['mensaje']= 'Actualizado Correctamente';
        $_SESSION['color'] = 'success';
    }

    $query = "SELECT * FROM lavadoras where id_camion = $idcamion";
    $result = mysqli_query($conn,$query);
    $mivalor =0;
    $mipeso=0;
    while ($row = mysqli_fetch_array($result)){
        $cantidadla = mysqli_num_rows($result);
        $mivalor += $row['valor'];
        $mipeso += $row['peso'];
    }
    $query = "UPDATE camiones set cantidad_lavadoras = $cantidadla, valor = $mivalor, peso = $mipeso WHERE id = $idcamion";
    $result = mysqli_query($conn,$query);
}
echo '<meta http-equiv = "refresh" content = " 0; url = ../verlavadora.php?id=',$idcamion,'"/>';
?>