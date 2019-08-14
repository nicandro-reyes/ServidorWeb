<!doctype html>
<html>
    <head>
        <title>
            Bienvenido a Tu pagina de Pedidos Fruits&Veggies
        </title>
        <!-- se vincula al hoja de estilo para definir el aspecto del formulario de login-->  
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <style>
            /*Background de pagina */
            html {
                background: url(imagenes/vegetables.jpg) no-repeat center fixed;
                background-size: cover;
            }

            
        </style>
    </head>

<!-- Inicio del cuerpo de la pagina-->
    <body>
            <div class="navegacion">
                    <span><img src="imagenes/logo.png" alt="Logo Frutas y Verduras" height="80"></span>
                    <img id="BUSCAR" src="imagenes/sesion.png" width="1" height="1">
                    <img id="INICIAR" src="imagenes/sesion.png" width="1" height="1">
                    <img id="CARRITO" src="imagenes/carrito.png" width="1" height="1">
                    <a href="index.php">INICIO DE SESSION</a>
                    <a href="#">ENVASADOS</a>
                    <a href="#">PROCESOS</a>
                    <a href="#">LA EMPRESA</a>
                    <a href="#">INICIO</a>
                </div>

            
                
                
<!-- Pie de pagina-->
            <div class="footer">
                    <p>2019 Expendio de Frutas y Verduras - fruits&veggies.com</p>
                </div>
    </body>
    <br><br><br><br><br><br>
    <h1 align="center">Inventario de Verduras Frescas</h1>
<br>
<table align="center" border="1" cellspacing=1 cellpadding=2 style="font-size: 8pt">
<tr>
<td><font face="verdana" align="center"><h2><b>Código</b></h2></font></td>
<td><font face="verdana" align="center"><h2><b>Fruta</b></h2></font></td>
<td><font face="verdana" align="center"><h2><b>Cantidad x Kg</b></h2></font></td>
<td><font face="verdana" align="center"><h2><b>Precio X Kg</b></h2></font></td>
<td><font face="verdana" align="center"><h2><b>Modificar</b></h2></font></td>
<td><font face="verdana" align="center"><h2><b>Eliminar</b></h2></font></td>
</tr>

<?php  
$host_db = "internal-db.s194684.gridserver.com";
$user_db = "db194684_fruit";
$pass_db = "Jrnlyjcva86.";
$db_name = "db194684_frutas";
$tbl_name = "frutas";
$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
if ($conexion->connect_error) {
die("La conexion falló: " . $conexion->connect_error);
}

$consulta = "SELECT * FROM verduras";
//Ejecutar la consulta
$resultado = mysqli_query($conexion, $consulta) or die(mysqli_error());



//Se crea una tabla para mostrar los resultados
$tabla = "<table border='1' cellpadding='10'>\n";
$tabla .= "<tr><th>ID</th><th>Verdura</th><th>Cantidad</th><th>Importe</th></tr>\n";
//Extraer fila a fila con un búcle while
while($row = mysqli_fetch_array($resultado))
  {
    echo "<tr><td width=\"15%\"><font face=\"verdana\"><h3>" . 
	    $row["codigo_verdura"] . "</h3></font></td>";
    echo "<td width=\"15%\"><font face=\"verdana\"><h3>" . 
	    $row["nombre_verdura"] . "</h3></font></td>";
    echo "<td width=\"15%\"><font face=\"verdana\"><h3>" . 
	    $row["cantidad_verdura"] . "</h3></font></td>";
    echo "<td width=\"15%\"><font face=\"verdana\"><h3>" . 
        $row["importe_verdura"]. "</h3></font></td>"; 
    echo "<td width=\"15%\"><font face=\"verdana\"><a href=modificar.php?id=".$row["codigo_verdura"].">modificar</a><h3></h3></font></td>";
    echo "<td width=\"15%\"><font face=\"verdana\"><h3>Eliminar</h3></font></td></tr>";
    
    
  }

//Cerrar la conexión
mysqli_close($conexion);
?>
</html>