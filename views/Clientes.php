<?php
require_once '../config/config.php';
require_once '../config/functions.php';

$conexion = connect($server, $port, $db, $user, $pass);
if(!$conexion){
   header('Location: Login.php');
}
$query =$conexion->prepare("SELECT Nombres, Apellidos, Telefono, DireccionF 
FROM clientes WHERE idClientes>1;");

$query->execute();
$resultado =$query->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles3.css">
    <link rel="icon" href="../img/clienteP.png">
    <title>Clientes</title>
</head>  
<body>
    <section>
            <?php foreach($resultado as $cliente) :?>
                <div class="cliente">
                    <h3> 
                    <?php echo $cliente['Nombres']?> 
                    <?php echo $cliente['Apellidos']?> 
                    </h3>
                    <p><?php echo $cliente['Telefono']?></p>
                    <p><?php echo $cliente['DireccionF']?></p>
                </div>           
            <?php endforeach; ?>
      </section>
</body>
</html>
<?php $conexion = null;?>