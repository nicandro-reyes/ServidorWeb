<?php
 $host_db = "internal-db.s194684.gridserver.com";
 $user_db = "db194684_fruit";
 $pass_db = "Jrnlyjcva86.";
 $db_name = "db194684_frutas";
 $tbl_name = "usuarios";
 $form_CODIGO = $_GET['id'];

exit;

 $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}
$consulta = "SELECT * FROM frutas WHERE codigo_fruta=$form_CODIGO ";
//Ejecutar la consulta
$resultado = mysqli_query($conexion, $consulta) or die(mysqli_error());

while($row = mysqli_fetch_array($resultado))

  {
?>
<form method="post" action="id">
    <input type="text" name="id" value=<?php $row["0"]; ?>>
</form>
<?php    
    
  }
  ?>