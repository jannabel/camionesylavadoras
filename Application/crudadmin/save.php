<?php
include("../functions/bd.php");


if (isset($_POST['save'])) {

    $usuario = $_POST['usuario'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    $pass = $_POST['pass'];

    $query = "INSERT INTO administradores(usuario,nombre,correo,pass)
    VALUES('$usuario','$nombre','$correo','$pass')";

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


echo '<meta http-equiv = "refresh" content = " 0; url = ../veradmin.php"/>';
?>