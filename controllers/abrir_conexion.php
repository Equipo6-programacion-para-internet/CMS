<?php

                     // usuario de base de datos en hosting

$host = 'localhost';                //usuario de base de datos en localhost
$db_username = 'root';
$db_password = 'root';
$db_name = 'dclient';


$conexion = mysqli_connect($host,$db_username,$db_password,$db_name) or die ("Ha fallado la conexion".mysql_error());

/*if($conexion){
	echo "Conectado";
}
*/
?>
