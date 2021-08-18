<?php
include("../functions/bd.php");


if (isset($_POST['save'])) {

    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $color = $_POST['color'];

    $comentario = $_POST['comentario'];
    $cantidad = 0;
    $valor = 0;
    $peso = 0;


    $query = "INSERT INTO camiones(marca,modelo,color,comentario,cantidad_lavadoras,valor,peso)
    VALUES('$marca','$modelo','$color','$comentario','$cantidad','$valor','$peso') ";

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

}


echo '<meta http-equiv = "refresh" content = " 0; url = ../inicio.php"/>';
?>