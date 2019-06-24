<!-- <!doctype html> -->
<html lang="en">
    <!-- Encabezado de proyecto -->
    <head>
        <meta charset="utf-8" />
        <title>Inicio de Sesión | Fruits & Veggies</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Pagina de Prueba para Frutas y Verduras en Linea." name="description" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        
        <!-- App favicon -->
        <link rel="shortcut icon" href="imagenes/favicon.ico">
        
        
        <!-- css style -->
		    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
			<!-- vinculo a bootstrap -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
			<!-- Temas -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
            <!-- se vincula al hoja de estilo para definir el aspecto del formulario de login-->  
            <link rel="stylesheet" type="text/css" href="css/estilo.css">
    </head>

    <body>
        <!--Referencia del logo -->
        <div id="estilo.css">
            <h2>
            <a href="index.php" class="text-success">
                <span><img src="imagenes/logo.png" alt="Logo Frutas y Verduras" height="80"></span>
            </a>
            </h2>

            <div id="Contenedor">
            <div class="Icon">
            <!--Icono de usuario-->
                <span class="glyphicon glyphicon-user"></span>
            </div>

            <!-- Peticion de acceso a archivo login.php -->
                <div class="ContentForm">
                <form action="usuario.php" method="post" name="FormEntrar">

                <!-- Ingresa Usuario -->
                <div class="input-group input-group-lg">
                     <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-envelope"></i></span> 
                        <input class="form-control" name="email" type="email" id="emailaddress" required="" placeholder="Correo">
                </div>
                <br>
                <!-- Ingresa Contraseña -->
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
                        <input class="form-control" name="password" type="password" required="" id="password" placeholder="******" min="8">
                </div>
                <br>
                <!-- Boton de Ingreso -->
                    <button class="btn btn-lg btn-primary btn-block btn-signin" id="IngresoLog" type="submit">Entrar</button>    

<!-- Pie de pagina-->
                <div class="footer">
                    <p>2019 Expendio de Frutas y Verduras - fruits&veggies.com</p>
                </div> 
            </form>
    </div>     
    </body>
</html>