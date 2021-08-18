<?php
include("../functions/bd.php");

if (isset($_GET['id'])) {
    //este id es el de la lavadora, asi que tengo que buscar el id del camion
  $id = $_GET['id'];

  $query = "SELECT * FROM lavadoras where id = $id";
  $resultper = mysqli_query($conn,$query);
  $row = mysqli_fetch_array($resultper);

  $idcamion =$row['id_camion'];
//elimino
  $query = "DELETE FROM lavadoras WHERE id = $id";
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

}else{
    $_SESSION['titulo']= 'QUE MAL!';
    $_SESSION['mensaje']= 'La pagina a la que ingresaste no existe... Como llegaste ahi?';
    $_SESSION['color'] = 'danger';
}


echo '<meta http-equiv = "refresh" content = " 0; url = ../verlavadora.php?id=',$idcamion,'"/>';

?>