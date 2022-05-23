﻿<?php
         require_once '../resources/config/consts.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/style.css">
    <link rel="icon" href="../img/edit.png">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="container-register ">
            <div class="col-left">
                <h1>Registrar</h1>
                <form class="form-group" action="Register.php" method="POST">
                    <input type="text" class="input" placeholder="Nombre completo" id="Nombre_completo" name="Nombre_completo">
                    <input type="text" class="input " placeholder="Correo" id="Correo" name="Correo">
                    <input type="password" class="input" placeholder="Contraseña" id="Contra" name="Contra">
                    <input type="submit" class="btn btn-success" value="Registrarse" id="btn1" name="btn1">
                </form> 
            </div>
            <div class="col-right border-radius">
                <div class="content-text">
                    <h2>Bienvenido</h2>
                    <p>Ingresa los datos requeridos para crear una cuenta</p>
                    <p>¿Ya tienes una cuenta? inicia sesión</p>
                    <button id="btn-register"><a class="btn-ref" href="Login.php">Iniciar sesión</a></button>
                </div>
            </div>
        </div>

    </div>

  


</body>
</html> 