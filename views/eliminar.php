<?php 
include("functionEliminar.php");
$id = $_GET['id'];
delete('clientes','idClientes',$id);
header("location:admin.php");
?>