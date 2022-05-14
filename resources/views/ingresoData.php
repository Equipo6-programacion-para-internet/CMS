<?php
//establecer la base de datos
$db_host="localhost";
$db_user="nombre_de_usuario";
$db_password="contraseña";
$db_name="nombre_de_base_de_datos";
$db_table_name="nombre_de_tabla";
   $db_connection = mysql_connect($db_host, $db_user, $db_password);
 
if (!$db_connection) {
 die('No se ha podido conectar a la base de datos');
}
$subs_imagen = utf8_decode($_POST['imagen']);
$subs_name = utf8_decode($_POST['nombre']);
$subs_telefono = utf8_decode($_POST['telefono']);
$subs_email = utf8_decode($_POST['email']);
$subs_empresa = utf8_decode($_POST['empresa']);
$subs_card = utf8_decode($_POST['card']);
$subs_fechaV = utf8_decode($_POST['fechaV']);
$subs_cvv = utf8_decode($_POST['cvv']);
$subs_dir = utf8_decode($_POST['direccion']);
$subs_desc = utf8_decode($_POST['desc']);

 
$resultado=mysql_query("SELECT * FROM ".$db_table_name." WHERE Email = '".$subs_email."'", $db_connection);
 
if (mysql_num_rows($resultado)>0)
{
 
header('Location: Fallo.html');//Aun no estan definidas, pero se podrian usar para en caso de fallos
 
} else {
 
 $insert_value = 'INSERT INTO `' . $db_name . '`.`'.$db_table_name.'` (`Foto`, `Nombre` , `Apellidos` , `Email`, `Telefono`, `Empresa`, `Tarjeta`, `FechaT`, `CVV`, `DireccionF`, `Descripcion` ) VALUES ("' . $subs_imagen . '", "' . $subs_name . '", "' . $subs_last . '", "' . $subs_email . '","' . $subs_telefono . '", "' . $subs_empresa . '", "' . $subs_card . '", "' . $subs_fechaV . '", "' . $subs_cvv . '", "' . $subs_dir . '", "' . $subs_desc . '")';
 
mysql_select_db($db_name, $db_connection);
$retry_value = mysql_query($insert_value, $db_connection);
 
if (!$retry_value) {
   die('Error: ' . mysql_error());
}
 
header('Location: Exito.html');//Aun no estan definidas, pero se podrian usar para en caso de fallos
}
 
mysql_close($db_connection);
 
?>