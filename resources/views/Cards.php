<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles2.css">
    <link rel="icon" href="../img/buscar.png">
    <title>Ver</title>
</head>
<body> 
    <header>
        <div class="container">
            <section>
        <nav class="inicio">
            <a class="enlace">
                <img src="../img/logo_princi.png" class="logo" alt="">
            </a>
            
                
            <ul class="ulmenu">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="clientes.php">Clientes</a></li>
                <li><a href="clientesP.php">Clientes Potenciales</a></li>
                <li><a href="#" id="on"><img src="../img/on.png" alt=""></a></li>
            </ul>
        
       
        </nav>
        </section>
    </div>
    </header>
    <section>
        <div>
            <form action="" class="formulario" action="Cards.php" method="POST" >
                <div class="inputs">
                    
                      <input class="entrada_texto" type="image" id="imagen" name="imagen" src="../img/image.png">

                    <div class="custom-input-file col-md-6 col-sm-6 col-xs-6">
<input type="file" class="input-file" value="" id="subir_imagen" name="subir_imagen">
<img class="subir_foto" src="../img/subir_foto.png" alt="">
</div>
                    <input class="entrada_texto" type="text" id="name" name="nombre" style="width:23%;" placeholder="Nombre">
                    <input class="entrada_texto" type="text" id="lastname" name="apellido" style="padding: 10px; height: 10px; width: 23%;" placeholder="Apellido">
                    <input class="entrada_texto" type="text" id="phone" name="telefono" placeholder="Teléfono">
                    <input class="entrada_texto" type="email" id="mail" name="mail" placeholder="Correo Electrónico">
                    <input class="entrada_texto" type="text" id="empresa" name="empresa" placeholder="Empresa">
                    <input class="entrada_texto" type="text" id="card" name="card" placeholder="Tarjeta de crédito">
                    <input class="entrada_texto" type="text" id="fecha" name="fechaV" placeholder="Fecha vencimiento">
                    <input class="entrada_texto" type="text" id="cvv" name="cvv" placeholder="CVV">
                    <input class="entrada_texto" type="text" id="direccion" name="direccion" style="padding: 10px; height: 10px; width: 100%;" placeholder="Direccion Fiscal">
                    <input class="entrada_texto" type="text" id="desc" name="desc" placeholder="Descripción del cliente">
                    <!--<input type="submit" class="btn btn-success" value="Registrar" id="btn" name="btn">-->
                    <input type="submit" class="boton" id="btn" name="btn" value="Registrar">
                    <?php
        include "../../controllers/abrir_conexion.php";
        include "../../controllers/Hash.php";
        if(isset($_POST['btn'])){
            $subs_imagen = $_POST['imagen'];
            $subs_name = $_POST['nombre'];
              $subs_last = $_POST['apellido'];
            $subs_telefono = $_POST['telefono'];
            $subs_email = $_POST['email'];
            $subs_empresa = $_POST['empresa'];
            $subs_card = $_POST['card'];
            $subs_fechaV = $_POST['fechaV'];
            $subs_cvv = $_POST['cvv'];
            $subs_dir = $_POST['direccion'];
            $subs_desc = $_POST['desc'];

        
            $conexion->query("INSERT INTO clientes (Foto,Nombres,Apellidos,Telefono,Empresa,Tarjeta,FechaT,CVV,DireccionF,Descripcion) values ('$subs_imagen','$subs_name','$subs_last','$subs_telefono','$subs_empresa','$subs_card','$subs_fechaV','$subs_cvv','$subs_dir','$subs_desc')");
            
    
    
          }
    
    ?>
                </div>
                    
            </form>
        </div>
    </section>

    
</body>
</html>
