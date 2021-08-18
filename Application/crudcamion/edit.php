<?php
include("../functions/bd.php");

if (isset($_POST['save'])) {
    $id = $_GET['id'];

    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $color = $_POST['color'];

    $comentario = $_POST['comentario'];

    $query = "UPDATE camiones set marca = '$marca', modelo = '$modelo', color = '$color', comentario ='$comentario' WHERE id = $id";
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
}
echo '<meta http-equiv = "refresh" content = " 0; url = ../inicio.php"/>';
?>