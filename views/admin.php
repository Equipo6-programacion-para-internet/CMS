<?php

?>
<html>
<head>
<meta charset="utf-8">
<title>Eliminar Registros con Función PHPn</title>
<link type="text/css" href="../css/bootstrap.min.css" rel="stylesheet">
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
	width:98%;
	
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
<h1>Registros </h1>
<br><br>

<?php
	include("functionEliminar.php");
?>
<table border="1" width="100%">
	<tr>
	<th width="4%">Foto</th>
	<th width="18%">Nombres</th>
    <th width="24%">Apellidos</th>
    <th width="19%">Telefono</th>
    <th width="15%">Empresa</th>
    <th width="18%">Tarjeta</th>
	<th width="24%">FechaT</th>
    <th width="19%">CVV</th>
    <th width="24%">DireccionFiscal</th>
    <th width="18%">Descripcion</th>
	<th colspan="2">Opciones</th>
	</tr>
<?php 
	$sql = "select * from clientes";
	$result = db_query($sql);
	while($row = mysqli_fetch_object($result)){
	?>
	<tr>
		<td><?php echo $row->Foto;?></td>
        <td><?php echo $row->Nombres;?></td>
        <td><?php echo $row->Apellidos;?></td>
        <td><?php echo $row->Telefono;?></td>
        <td><?php echo $row->Empresa;?></td>
        <td><?php echo $row->Tarjeta;?></td>
        <td><?php echo $row->FechaT;?></td>
        <td><?php echo $row->CVV;?></td>
        <td><?php echo $row->DireccionF;?></td>
        <td><?php echo $row->Descripcion;?></td>
		<td>
        <a class="btn btn-primary" href="editar.php?id=<?php echo $row->idClientes; ?>">Editar<i class="fa fa-pencil fa-lg" aria-hidden="true"></i></a>
   <a class="btn btn-primary" href="eliminar.php?id=<?php echo $row->idClientes;?>" class="eliminar">Eliminar<i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></a>
        </td>
	</tr>
	<?php } ?>
</table>
</div>
        <script src="../js/confirmacion.js">
            
        </script>							
	</body>
</html>