<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Editar Registros Mysql Mediante Funcion</title>
<link type="text/css" href="bootstrap.min.css" rel="stylesheet">
<link type="text/css" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<style>
table {
    border-collapse: collapse;
    width: 100%;
}
th, td {
    text-align: left;
    padding: 4px;
}
tr:nth-child(even){background-color: #f2f2f2}
th {
    background-color: #4CAF50;
    color: white;
}
.main-wrapper{
	width:50%;
	
	background:#E0E4E5;
	border:1px solid #292929;
	padding:25px;
}
hr {
    margin-top: 5px;
    margin-bottom: 5px;
    border: 0;
    border-top: 1px solid #eee;
}
</style>
</head>

<body>
<div class="main-wrapper">
<h1>Editar Registro </h1>
<br><br>
<?php 
include("functionEditar.php");
$id = $_GET['id'];
select_id('clientes','idClientes',$id);
?>
<form action="" method="post">
	<input type="text" value="<?php echo $row->Nombres;?>" name="nombres">
	<input type="text" value="<?php echo $row->Apellidos;?>" name="apellidos">
    <input type="text" value="<?php echo $row->Telefono;?>" name="telefono">
	<input type="text" value="<?php echo $row->Empresa;?>" name="empresa">
    <input type="text" value="<?php echo $row->Tarjeta;?>" name="tarjeta">
	<input type="text" value="<?php echo $row->FechaT;?>" name="fechat">
    <input type="text" value="<?php echo $row->CVV;?>" name="cvv">
	<input type="text" value="<?php echo $row->DireccionF;?>" name="direccionf">
    <input type="text" value="<?php echo $row->Descripcion;?>" name="descripcion">
	<input type="submit" name="submit">
</form>

<?php
	
	if(isset($_POST['submit'])){
		$field = array("nombres"=>$_POST['nombres'], "apellidos"=>$_POST['apellidos'],"telefono"=>$_POST['telefono'],
        "empresa"=>$_POST['empresa'],"tarjeta"=>$_POST['trajeta'],"fechat"=>$_POST['fechat'],"cvv"=>$_POST['cvv'],
        "direccionf"=>$_POST['direccionf'],"descripcion"=>$_POST['descripcion']);
		$tbl = "clientes";
		edit($tbl,$field,'idClientes',$id);
		header("location:admin.php");
	}
?>
</div>
</body>
</html>