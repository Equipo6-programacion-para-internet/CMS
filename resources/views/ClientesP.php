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
</html>
<?php $conexion = null;?>