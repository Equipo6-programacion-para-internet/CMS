<?php

                     // usuario de base de datos en hosting
/*$host = 'localhost';
$db_username = 'id18051717_admin';
$db_password = 'Equipo-6-Base-de-datos';
$db_name = 'id18051717_agenda';
*/
$host = 'localhost';                //usuario de base de datos en localhost
$db_username = 'root';
$db_password = 'root';
$db_name = 'cms';


$conexion = mysqli_connect($host,$db_username,$db_password,$db_name) or die ("Ha fallado la conexion".mysql_error());

/*if($conexion){
	echo "Conectado";
}
*/
?>