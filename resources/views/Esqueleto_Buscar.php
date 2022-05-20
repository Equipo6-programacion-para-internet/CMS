<?php
require_once '../config/config.php';
require_once '../config/functions.php';

/*$conexion = connect($server, $port, $db, $user, $pass);


if(!$conexion){
   header('Location: Login.php');
}*/
$mysqli = new mysqli("localhost","root","root","dclient");

//$mysqli =$conexion->prepare("SELECT Nombres, Apellidos, Telefono, DireccionF,Empresa
//FROM clientes WHERE idClientes>1;");

$salida = "";

$query = "SELECT * FROM clientes WHERE idClientes>=2 ORDER By idClientes";

if(isset($_POST['consulta'])){
$q = $mysqli->real_escape_string($_POST['consulta']);

$query = "SELECT Nombres, Apellidos, Telefono, DireccionF,Empresa FROM clientes WHERE Nombres LIKE '%".$q."%' OR Apellidos LIKE '%".$q."%' OR Telefono LIKE '%".$q."%' OR DireccionF LIKE '%".$q."%' OR Empresa LIKE '%".$q."%'";

}

//$mysqli->execute();
//$resultado =$mysqli->fetchAll();

$resultado = $mysqli->query($query);

if($resultado->num_rows > 0){
$resultados_encontrados = "<div>Resultados encontrados:</div>";
$salida.= "
<thead>
<tbody>
<div class='pd-ltr-20'>
<div class='contact-directory-list'>
<ul class='row'>";

    while($fila = $resultado->fetch_assoc()){
        $salida.= "
      
            
           
                <li class='col-xl-4 col-lg-4 col-md-6 col-sm-12'>
                    <div class='contact-directory-box'>
                        <div class='contact-dire-info text-center'>
                            <div class='contact-avatar'>
                                <span>
                                   <!-- <img src='../img/Yael.jpg' alt=''>-->
                                </span>
                            </div>
                            <div class='contact-name'>
                                <h4>".$fila['Nombres']." ".$fila['Apellidos']." </h4>
                                <p>".$fila['Telefono']."</p>
                                <div class='work text-success'><i class='ion-android-person'></i>".$fila['Empresa']."</div>
                            </div>
                          
                            <div class='profile-sort-desc'>
                            ".$fila['DireccionF']."
                            </div>
                        </div>
                    <div class='view-contact'>
                            <a href='#'>Ver mas</a>
                        </div>
                    </div>
                </li>";  
           
       
    }

    $salida.=" </ul>
    </div>
    </div>
    </tbody>
    </thead>";

}else{
$salida.="No hay datos :(";
}

echo $resultados_encontrados;
echo $salida;

$resultados_encontrados= "";
//$mysqli->close();

?>