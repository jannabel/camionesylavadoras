<?php
include("../functions/bd.php");


if (isset($_POST['save'])) {

    $id = $_GET['id'];


    $codigo = $_POST['lcodigo'];
    $marca = $_POST['lmarca'];
    $modelo = $_POST['lmodelo'];

    $valor = $_POST['lvalor'];;
    $peso = $_POST['lpeso'];;


    $query = "INSERT INTO lavadoras(id_camion,codigo,marca,modelo,valor,peso)
    VALUES('$id','$codigo','$marca','$modelo','$valor','$peso') ";

    $result = mysqli_query($conn,$query);
    if (!isset($result)) {
        $_SESSION['titulo']= 'QUE MAL!';
        $_SESSION['mensaje']= 'No se ha podido guardar...';
        $_SESSION['color'] = 'danger';
        die("hay un error");
    }else{
        $_SESSION['titulo']= 'QUE BIEN!';
        $_SESSION['mensaje']= 'Guardado exitosamente';
        $_SESSION['color'] = 'success';
    }
    $query = "SELECT * FROM lavadoras where id_camion = $id";
    $resultper = mysqli_query($conn,$query);
    $mivalor=0;
    $mipeso =0;
    while ($row = mysqli_fetch_array($resultper)){
        $cantidadla = mysqli_num_rows($resultper);
        $mivalor += $row['valor'];
        $mipeso += $row['peso'];
    }
    $query = "UPDATE camiones set cantidad_lavadoras = $cantidadla, valor = $mivalor ,peso = $mipeso WHERE id = $id";
    $result = mysqli_query($conn,$query);
}


echo '<meta http-equiv = "refresh" content = " 0; url = ../verlavadora.php?id=',$id,'"/>';
?>