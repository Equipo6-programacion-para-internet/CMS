<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <link rel="icon" href="../img/buscar.png">
    <title>Ver</title>
</head>
<body> 
    <div class="container-header">
        <header >
            <nav>
                <div class="logo">
                    <img  src="../img/logo.png" alt="logo">
                </div>
                <div class="elementos">
                    <ul>
                        <li><a class="active" href="#">Clientes</a></li>
                        <li><a href="#">Clientes potenciales</a></li>
                        <li><a href="#">Registrarse</a></li>
                    </ul>
                </div>
                </nav>
            
        </header>
    </div>
    <main class="margen">
         <div class="container">
        <div class="col-left">
            <div class="description">
                <h1>Registrar un nuevo cliente</h1>
                <p>Ingrese la informacion correspondiente para guardar un nuevo cliente. La infromacion que es obligatoria esta marcada con un asterisco.</p>

            </div>

            <div class="foto-perfil">
                <img src="./img/image.png" alt="foto-perfil">
                <input type="file"  value="Subir una foto" id="subir_imagen" name="subir_imagen" value="">
            </div>
            <div class="input-description">
                <label>Descripción del cliente</label>
                <textarea id="">

                </textarea>
            </div>

        </div>
        <div class="col-right">
            <h3>Datos personales</h3>
            <div class="inputs-group">
                <div class="group-1">
                    <input class="entrada_texto" type="text" id="lastname" name="apellido" placeholder="Nombre">
                    <input class="entrada_texto" type="text" id="lastname" name="apellido" placeholder="Apellido">
                </div>
                <div class="group-2">
                    <input class="entrada_texto" type="email" id="mail" name="mail" placeholder="Correo Electrónico">
                    <input class="entrada_texto" type="text" id="phone" name="telefono" placeholder="Teléfono">
                </div>
                <div class="group-3">
                    <input class="entrada_texto type-g" type="text" id="empresa" name="empresa" placeholder="Empresa">
                    <input class="entrada_texto type-g" type="text" id="card" name="card" placeholder="Tarjeta de crédito">
                    <input class="entrada_texto type-s" type="text" id="cvv" name="cvv" placeholder="CVV">
                    
                </div>
                <div class="group-2">

                    <input class="entrada_texto " type="text" id="fecha" name="fechaV" placeholder="Fecha vencimiento">
                        <input class="entrada_texto " type="text" id="direccion" name="direccion" placeholder="Direccion Fiscal">
                        
                       
                    </div>
                    <div class="submit">
                        <input type="submit" class="boton" id="btn" name="btn" value="Registrar"> 
                    </div>
            </div>
        </div>
        

        
                <!-- <form action="" class="formulario" action="Cards.php" method="POST" >
                    <div class="inputs">
    <!--                     
                          <input class="entrada_texto" type="image" id="imagen" name="imagen" src="../img/image.png">
    
                        <div class="custom-input-file col-md-6 col-sm-6 col-xs-6">
    <input type="file" class="input-file" value="" id="subir_imagen" name="subir_imagen">
    <img class="subir_foto" src="../img/subir_foto.png" alt=""> -->
                     
                        <!-- <input class="entrada_texto" type="text" id="name" name="nombre" placeholder="Nombre">
                        <input class="entrada_texto" type="text" id="lastname" name="apellido" placeholder="Apellido">
                        <input class="entrada_texto" type="text" id="phone" name="telefono" placeholder="Teléfono">
                        <input class="entrada_texto" type="email" id="mail" name="mail" placeholder="Correo Electrónico">
                        <input class="entrada_texto" type="text" id="empresa" name="empresa" placeholder="Empresa">
                        <input class="entrada_texto" type="text" id="card" name="card" placeholder="Tarjeta de crédito">
                        <input class="entrada_texto" type="text" id="fecha" name="fechaV" placeholder="Fecha vencimiento">
                        <input class="entrada_texto" type="text" id="cvv" name="cvv" placeholder="CVV">
                        <input class="entrada_texto" type="text" id="direccion" name="direccion" placeholder="Direccion Fiscal">
                        <input class="entrada_texto" type="text" id="desc" name="desc" placeholder="Descripción del cliente">
                       
                        <input type="submit" class="boton" id="btn" name="btn" value="Registrar"> -->
                        <!-- <?php
            // include "../../controllers/abrir_conexion.php";
            // include "../../controllers/Hash.php";
            // if(isset($_POST['btn'])){
            //     $subs_imagen = $_POST['imagen'];
            //     $subs_name = $_POST['nombre'];
            //       $subs_last = $_POST['apellido'];
            //     $subs_telefono = $_POST['telefono'];
            //     $subs_email = $_POST['email'];
            //     $subs_empresa = $_POST['empresa'];
            //     $subs_card = $_POST['card'];
            //     $subs_fechaV = $_POST['fechaV'];
            //     $subs_cvv = $_POST['cvv'];
            //     $subs_dir = $_POST['direccion'];
            //     $subs_desc = $_POST['desc'];
    
            
            //     $conexion->query("INSERT INTO clientes (Foto,Nombres,Apellidos,Telefono,Empresa,Tarjeta,FechaT,CVV,DireccionF,Descripcion) values ('$subs_imagen','$subs_name','$subs_last','$subs_telefono','$subs_empresa','$subs_card','$subs_fechaV','$subs_cvv','$subs_dir','$subs_desc')");
                
        
        
            //   }
        
        ?> -->
                    <!-- </div>
                        
                </form>
             -->
        
            </div>
    </main>


    <footer>

        <h4>Contactanos </h4>

           <div class="lista_footer">                  
                <ul class="foot">
                    <li><a href=" https://web.whatsapp.com" target="_blank"><img src="../img/whatsapp.png" alt=""></a> </li>
                    <li><a href=" https://www.instagram.com" target="_blank"> <img src="../img/instagram.png" alt=""></a></li>
                    <li><a href=" https://www.facebook.com/" target="_blank"> <img src="../img/facebook.png" alt=""> </li>
                    <li><a href=" https://mx.linkedin.com" target="_blank"><img src="../img/linkedin.png" alt=""></a></li>                  
                </ul>
            </div>
            <h5> &#169 Dclient</h5>

        </footer>
    
</body>
</html>
