<?php
include("../functions/bd.php");

if (isset($_POST['save'])) {
    $id = $_GET['id'];

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    $pass = $_POST['pass'];


    $query = "UPDATE administradores set nombre = '$nombre', correo = '$correo', pass = '$pass' WHERE id = $id";
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