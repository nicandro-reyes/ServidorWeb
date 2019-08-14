<?php
session_start();

?>
<?php

 $host_db = "internal-db.s194684.gridserver.com";
 $user_db = "db194684_fruit";
 $pass_db = "Jrnlyjcva86.";
 $db_name = "db194684_frutas";
 $tbl_name = "usuarios";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

 
$sql = "SELECT * FROM $tbl_name WHERE nombre_usuario = '$username'";


$result = $conexion->query($sql);


if ($result->num_rows > 0) {     }
	
 
  $row = $result->fetch_array(MYSQLI_ASSOC);
 // if (password_verify($password, $row['password'])) { 
if ($password==$row['password']) { 

 
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

    header('Location: welcome.html');//redirecciona a la pagina del usuario

 } else { 
   echo "Username o Password estan incorrectos.";

   echo "<br><a href='index.php'>Volver a Intentarlo</a>";
 }
 mysqli_close($conexion); 
 ?>