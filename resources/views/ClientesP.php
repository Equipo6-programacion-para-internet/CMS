<?php
require_once '../config/config.php';
require_once '../config/functions.php';

$conexion = connect($server, $port, $db, $user, $pass);
if(!$conexion){
   header('Location: Login.php');
}
$query =$conexion->prepare("SELECT Nombres, Apellidos, Telefono, DireccionF, Descripcion
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
    <link rel="stylesheet" href="../css/style7.css">
    <link rel="stylesheet" href="../css/styles3.css">

    <link rel="icon" href="../img/clienteP.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  
    <title>Clientes</title>
</head>
<header>
        <div class="container">
            <section>
        <nav class="inicio">
            <a class="enlace">
                <img src="../img/logo_princi.png" class="logo" alt="">
            </a>
            
                
            <ul class="ulmenu">
                <li><a href="inicio.php">Inicio</a></li>
                <li><a href="clientes.php">Clientes</a></li>
                <li><a href="clientesP.php">Clientes Potenciales</a></li>
                <li><a href="#" id="on"><img src="../img/on.png" alt=""></a></li>
            </ul>
        
       
        </nav>
        </section>
    </div>
    </header>
    <ul class="tilesWrap">
      <?php foreach($resultado as $cliente) :?>
   
	    <li>
		    <h2><img src="../img/image.png" alt=""></h2>
		    <h3>
                <?php echo $cliente['Nombres']?> 
                <?php echo $cliente['Apellidos']?>
            </h3>
            <p>
                    <?php echo $cliente['Telefono']?>
                    <?php echo $cliente['DireccionF']?>
            </p>
		    <p>
                    <?php echo $cliente['Descripcion']?>
		    </p>
		    <button>Ver mas</button>
	    </li>
    
        
        <?php endforeach; ?>
        </ul>

    <footer>

        <h4>Contactanos </h4>

        <div class="lista_footer">                  
                <ul class="foot">
                    <li><a href=" https://web.whatsapp.com" target="_blank"><img src="../img/whatsapp.png" alt=""></a> </li>
                    <li><a href=" https://www.instagram.com" target="_blank"> <img src="../img/instagram.png" alt=""></a></li>
                    <li><a href=" https://www.facebook.com/" target="_blank"> <img src="../img/facebook.png" alt=""> </li>
                    <li><a href=" https://mx.linkedin.com" target="_blank"><img src="../img/linkedin.png" alt=""></a> </li>                  
                </ul>
            </div>
            <h5> &#169 Dclient</h5>

    </footer>


</html> 
<?php $conexion = null;?>