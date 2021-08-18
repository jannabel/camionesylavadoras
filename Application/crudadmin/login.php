<?php
include("../functions/bd.php");


if (isset($_POST['entrar'])) {

    $usuario = $_POST['usuario'];
    $pass = $_POST['pass'];

    $query = "SELECT * FROM administradores";
    $resultper = mysqli_query($conn,$query);

    while ($row = mysqli_fetch_array($resultper)){

        if ($usuario == $row['usuario']) {
            if ($pass == $row['pass']) {

                $_SESSION['id']= $row['id'];
                $_SESSION['usuario']= $row['usuario'];
                $_SESSION['nombre']= $row['nombre'];
                $_SESSION['correo'] = $row['correo'];

                $_SESSION['titulo']= 'Bienvenido:';
                $_SESSION['mensaje']= $row['correo'];
                $_SESSION['color'] = 'success';

                header('Location: ../inicio.php');
                exit();
            }else{
                $_SESSION['titulo']= 'QUE MAL!';
                $_SESSION['mensaje']= 'Contraseña Incorrecta...';
                $_SESSION['color'] = 'danger';
            }
        }else{
            $_SESSION['titulo']= 'QUE MAL!';
            $_SESSION['mensaje']= 'El usuario no existe...';
            $_SESSION['color'] = 'danger';
        }
    }
    echo '<meta http-equiv = "refresh" content = " 0; url = ../index.php"/>';
}

?>