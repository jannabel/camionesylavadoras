<?php
include("../functions/bd.php");

if (isset($_GET['id'])) {

  $id = $_GET['id'];

//elimino
  $query = "DELETE FROM lavadoras WHERE id_camion = $id";
  $result = mysqli_query($conn,$query);

  $query = "DELETE FROM camiones WHERE id = $id";
  $result = mysqli_query($conn,$query);

  if (!isset($result)) {
      $_SESSION['titulo']= 'QUE MAL!';
      $_SESSION['mensaje']= 'No se ha podido eliminar...';
      $_SESSION['color'] = 'danger';
  }else{
      $_SESSION['titulo']= 'QUE BIEN!';
      $_SESSION['mensaje']= 'Eliminado Correctamente';
      $_SESSION['color'] = 'success';
  }


}else{
    $_SESSION['titulo']= 'QUE MAL!';
    $_SESSION['mensaje']= 'La pagina a la que ingresaste no existe... Como llegaste ahi?';
    $_SESSION['color'] = 'danger';
}


echo '<meta http-equiv = "refresh" content = " 0; url = ../inicio.php"/>';

?>