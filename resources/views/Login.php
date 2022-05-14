<?php
require_once '../config/config.php';
require_once '../config/functions.php';
$conexion = connect($server,$port,$db,$user,$pass);

if(!$conexion){
    die("Conexion fallida: " . mysqli_connect_error());
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
$usuario = $_POST['usuario'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE Email = '$usuario' AND Contra = '$password'";

$query = $conexion->prepare($sql);
$query->execute();
$resultado = $query->fetchAll();

if($resultado[0]['Rol'] == "ADMINISTRADOR"){
 
    echo "<br>-------Bienvenido Administrador\n---------";
    header('Location: Clientes.php?Rol='.$resultado[0]['Rol']);
    
}else if($resultado[0]['Rol'] == "CLIENTE"){

    echo "<br>-------Bienvenido Cliente\n---------";
    header('Location: Clientes.php?Rol='.$resultado[0]['Rol']);
}else{
    echo'<script type="text/javascript">
        alert("Error el email o contraseña son invalidos");
        </script>';
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="container-login">
            <div class="col-left">
                <h1>Ingresar</h1>
                <form class="form-group" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                    <input type="text" name="usuario" class="input" placeholder="Correo" required>
                    <input type="password" name="password" class="input" placeholder="Contraseña" required>
                    <input type="submit" class="btn" value="Ingresar">
                
                        <a href="Clientes.php?Rol=ANONIMO">Ingresar como invitado</a>
                </form> 
            </div>
            <div class="col-right">
                <div class="content-text">
                    <h2>Hola de nuevo</h2>
                    <p>Ingresa el correo y la contraseña para iniciar sesion</p>
                    <p>Si no tienes una cuenta puedes crear una aqui</p>
                    <button id="btn-register"><a href="./Register.php">Registrar</a></button>
                </div>
            </div>
        </div>

    </div>
</body>
</html>