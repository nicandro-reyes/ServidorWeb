<?php
 $host_db = "internal-db.s194684.gridserver.com";
 $user_db = "db194684_fruit";
 $pass_db = "Jrnlyjcva86.";
 $db_name = "db194684_frutas";
 $tbl_name = "usuarios";
 $form_pass = $_POST['password'];
 $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}
$buscarUsuario = "SELECT * FROM $tbl_name
WHERE nombre_usuario = '$_POST[username]' ";

$result = $conexion->query($buscarUsuario);

$count = mysqli_num_rows($result);

if ($count == 1) {
echo "<br />". "Nombre de Usuario ya asignado, ingresa otro." . "<br />";

echo "<a href='index.php'>Por favor escoga otro Nombre</a>";
}
else{

$query = "INSERT INTO usuarios (nombre_usuario, password) VALUES ('$_POST[username]', '$form_pass')";

if ($conexion->query($query) === TRUE) {
// header('Location: http://localhost/Login/login.html');
echo "<br />" . "<h1>" . "Gracias por registrarse!" . "</h1>";
echo "<h3>" . "Bienvenido: " . $_POST['username'] . "</h3>" . "\n\n";
echo "<h3>" . "Iniciar Sesion: " . "<a href='index.php'>Login</a>" . "</h3>"; 
}

else {
echo "Error al crear el usuario." . $query . "<br>" . $conexion->error; 
  }
}
mysqli_close($conexion);
?>
