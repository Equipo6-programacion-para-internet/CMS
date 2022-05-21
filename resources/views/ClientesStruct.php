<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles3.css">
    <link rel="icon" href="../img/cliente.png">
    <title>Document</title>
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
                <li><a href="index.html">Inicio</a></li>
                <li><a href="clientes.html">Clientes</a></li>
                <li><a href="clientesP.html">Clientes Potenciales</a></li>
                <li><a href="#" id="on"><img src="../img/on.png" alt=""></a></li>
            </ul>
        
       
        </nav>
        </section>
    </div>
    </header>

<main>
    <div class="container1">
    <section>
        <div class="container2">

            <h1>Registrar un nuevo cliente</h1>
            <p>Ingrese la información correspondiente <br> para registrar un nuevo cliente.La <br> información que es obligatoria está <br>marcada con un asterisco.</p>
            <!--<div class="foto-cliente">
                <p>Foto de perfil</p>
               
            </div>-->
            <div class="descripcion">
                <p>Descripción</p>
                <input id="descripcion" type="text" name="desc">
            </div>
        </div>
   </section>
    <section>
    <div class="container3">
            <h2>Datos Personales</h2>
            <div class="container4">
                <form class="formulario" action="ClientesStruct.php" method="POST" enctype="multipart/form-data">

                <div class="foto-cliente">
                <img class="entrada_texto"  id="imagen" type="image" name="imagen" src="../img/image.png">

               
<div class="custom-input-file col-md-6 col-sm-6 col-xs-6">
<input type="file" class="input-file" value="" id="subir_imagen" name="subir_imagen" accept="image/png, image/jpeg, image/jpg">
<img class="subir_foto" src="../img/subir_foto.png" alt="">
</div>
</div>
                    <label for="name" >Nombre<br>
                    <input class="entrada_texto" id="nombre" type="text" name="nombre" ></label>

                    <label  for="name">Apellido <br>
                    <input class="entrada_texto" id="apellido" type="text"  name="apellido"></label> 

                    <label  for="mail">Correo Electrónico <br>
                    <input class="entrada_texto" id="email" type="text" name="email"></label>

                    <label for="phone">Número de Teléfono <br>
                    <input class="entrada_texto" id="telefono" type="text" name="telefono"></label>

                    <label  for="empresa">Empresa <br>
                    <input class="entrada_texto" type="text" id="empresa" name="empresa"></label>

                    <label  for="card">Tarjeta de Crédito <br> 
                    <input class="entrada_texto" type="text" id="card" name="card"></label>

                    <label  for="cvv">Fecha vencimiento<br>
                    <input class="entrada_texto" type="text" id="fechaV" name="fechaV"></label>

                    <label  for="cvv">CVV<br>
                    <input class="entrada_texto" type="text" id="cvv" name="cvv"></label>

                    <label  for="factura">Dirección de facturación <br>
                    <input class="entrada_texto" type="text" id="direccion" name="direccion"></label>

                    <input type="submit" class="boton" id="btn" name="btn" value="Guardar">
                </form>
            </div>

        </div>
    </section>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/previsualizar_fotoperfil.js"></script>
    <?php
        include "../../controllers/abrir_conexion.php";
        include "../../controllers/Hash.php";
        if(isset($_POST['btn'])){
           // $subs_imagen = $_POST['subir_imagen'];
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

$tipo = $_FILES['subir_imagen']['type'];         
$foto=$_FILES['subir_imagen']['name'];
$ruta=$_FILES['subir_imagen']['tmp_name'];
$destino="../fotoClientes/".$foto;

/*echo 'Nombre'.$subs_name; 
echo 'Apellido'.$subs_last ;
echo 'telefono'.$subs_telefono ;
echo 'email'.$subs_email; 
echo 'empresa'.$subs_empresa; 
echo 'tarjeta'.$subs_card ;
echo 'fechaV'.$subs_fechaV; 
echo 'CVV'.$subs_cvv ;
echo 'Direccion'.$subs_dir ;
echo 'Descripcion'.$subs_desc ;*/

$extensiones = array(0=>'image/jpg',1=>'image/jpeg',2=>'image/png');

if ( in_array($_FILES['subir_imagen']['type'], $extensiones) || $ruta=="" ) {

    if($ruta!=""){
        copy($ruta,$destino);
        }else{
            $destino="";
            $destino.="../fotoClientes/foto1.jpg";
        }

    $conexion->query("INSERT INTO clientes (Foto,Nombres,Apellidos,Telefono,Empresa,Tarjeta,FechaT,CVV,DireccionF,Descripcion) values ('$destino','$subs_name','$subs_last','$subs_telefono','$subs_empresa','$subs_card','$subs_fechaV','$subs_cvv','$subs_dir','$subs_desc')");
            

}else{
    echo '<script>alert("La extension del archivo es incorrecta")</script>';
}

    
          }
    
    ?>

    </div>
        </main>
  

</body>
</html>
