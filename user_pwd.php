<html>
<head><title><h1>LOGIN a Celuloide</h1></title>
</head>
<body style="background-color:gainsboro;">

<?php
//mandar usuario y password por POST al archivo
$user_input = $_POST['usuario'];
$password_input = ($_POST['password']);

//Abrir archivo de usuario y password
$archivo = fopen('usuario_pwd.txt', 'r');

//verificar antes de fin de archivo
while(!feof($archivo)){
    $linea = fgets($archivo);
    list($usuario, $password) = explode(':', $linea);
    if(trim($usuario) == $user_input && trim($password) == $password_input){
        echo 'Loggeado';
        break;
    }
}
//Cerrar archivo
fclose($archivo);
?>

</body>
</html>