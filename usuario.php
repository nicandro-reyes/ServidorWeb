<?php 

$user = $_POST['user']; //recepcion de valor POST usuario del archivo index.php en variable $user
$pass= $_POST['password']; //recepcion de valor POST password del archivo index.php en variable $pass

$correcto = false; //bandera indicador logeo correcto o erroneo
$archivo = "clientes2.txt"; // se asigna el txt a variable archivo 

$abrearchivo = fopen($archivo,"r") or die("Error consulta a tu administrador."); // se abre el archivo y se asigna a variable
$contenido = fread($abrearchivo,filesize($archivo)); //lee el archivo y su longitud en bytes y lo asigna avariable
$lineas = explode("\n",$contenido); //divide una cadena en varias cadenas


for($i=0;$i<count($lineas);$i++){ //sentencia de control FOR empieza a realizar iteracion por cada linea leida del archivo txt

    $posTab = strpos($lineas[$i],"\t"); //Posicion del tabulador

    $users[] = substr($lineas[$i],0,$posTab); // se empieza a realizar la separacion del usuario y password posteriormente
    $passwords[] = substr($lineas[$i],$posTab,strlen($lineas[$i]));
  
    if(($user == $users[$i]) && ($pass == trim($passwords[$i]))){ // validacion de nuestro datos ingresados en el logea con respecto a lo registrado en txt
        $correcto = true; //El usuario ha ingresado correctamente
    }
}
if($correcto==true){
    echo "El usuario ha ingresado correctamente!";
}else{
    echo "Nombre de usuario y/o password inv&aacute;lidos";
}

?>