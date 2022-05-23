<?php
         require_once '../resources/config/consts.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="icon" href="../public/img/edit.png">
    
    <title>Registrar</title>
</head>
<body>
    <div class="container">
        <div class="container-register ">
            <div class="col-left">
                <h1>Registrar</h1>
                <form class="form-group" action="Register.php" method="POST">
                    <input type="text" class="input" placeholder="Correo" id="Correo" name="Correo">
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="../resources/js/funciones.js"></script>
  <script src="../resources/js/jquery-3.6.0.min.js"></script>    
    <?php
//ob_start();
include "../controllers/abrir_conexion.php";
include "../controllers/Hash.php";


  	if(isset($_POST['btn1'])){

      

  
  		$correo=$_POST['Correo'];
  		$contra=$_POST['Contra'];
          $rol="CLIENTE";


if($correo!=""&&$contra!=""){
    $contraEncriptada=SED::encryption($contra);

    $conexion->query("INSERT INTO usuarios (Email,Contra,Rol) values ('$correo','$contraEncriptada','$rol')");

if($conexion){
    echo '<script>alertaNoti("Se ha registrado con exito")</script>';
}

}else{
    echo '<script>alertaeNoti("Llena todos los campos")</script>';
}

         



      }

      ?>

</body>
</html> 

