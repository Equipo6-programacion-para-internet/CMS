<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/styles3.css">
    <link rel="icon" href="../public/img/cliente.png">
    <title>Document</title>
</head>
<body> 
<header>
        <div class="container"> <!-- Color del header -->
            <nav class="inicio">
                <a class="enlace">
                    <img src="../public/img/logo_princi.png" class="logo" alt="">  <!-- Icono DClient  -->
                </a>
                
            <ul class="ulmenu">
                <li><a href="inicio.php">Inicio</a></li>
                <li><a href="Clientes.php">Clientes</a></li>
                <li><a href="ClientesP.php">Clientes Potenciales</a></li>
                <li><a href="#" id="on"><img src="../public/img/on.png" alt=""></a></li>
                <li><a href="#" id="on"><img src="../public/img/cliente.png" alt=""></a></li>
                <li><a href="">Username</a></li>
            </ul>
            </nav>
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
           


        </div>
   </section>
    <section>
    <div class="container3">
            <h2>Datos Personales</h2>
            <div class="container4">
                <form class="formulario" action="ClientesStruct.php" method="POST" enctype="multipart/form-data">

                <div class="foto-cliente">
                <img class="entrada_texto"  id="imagen" type="image" name="imagen" src="../public/img/image.png">

               
<div class="custom-input-file col-md-6 col-sm-6 col-xs-6">
<input type="file" class="input-file" value="" id="subir_imagen" name="subir_imagen" accept="image/png, image/jpeg, image/jpg">
<img class="subir_foto" src="../public/img/subir_foto.png" alt="">
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

                    <label  for="factura" class="label_direc">Dirección de facturación <br>
                    <input class="entrada_texto" type="text" id="direccion" name="direccion"></label>

                  
                <label id="descripcion_label" for="desc">Descripción<br>
                <input class="entrada_texto" id="descripcion" type="text" name="desc"></label>
         

                    <input type="submit" class="boton" id="btn" name="btn" value="Guardar">
                </form>
            </div>

        </div>
    </section>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="../resources/js/funciones.js"></script>  
    <script src="../resources/js/jquery-3.6.0.min.js"></script>
    <script src="../resources/js/previsualizar_fotoperfil.js"></script>
    <?php
        include "../controllers/abrir_conexion.php";
        include "../controllers/Hash.php";
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
$destino="../resources/fotoClientes/".$foto;

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

$validar_campo_vacio = "";

if($subs_name==""){
    $validar_campo_vacio="El campo del Nombre esta vacio";

}else if($subs_last==""){

    $validar_campo_vacio="El campo del Apellido esta vacio";

}else if($subs_email==""){

    $validar_campo_vacio="El campo del Correo Electrónico esta vacio";

}else if($subs_telefono==""){

    $validar_campo_vacio="El campo del Número de Teléfono esta vacio";

}else if($subs_dir==""){

    $validar_campo_vacio="El campo de la Dirección de facturación esta vacio";
}

if($subs_name!=""&&$subs_last!=""&&$subs_email!=""&&$subs_telefono!=""&&$subs_dir!=""){

$extensiones = array(0=>'image/jpg',1=>'image/jpeg',2=>'image/png');

if ( in_array($_FILES['subir_imagen']['type'], $extensiones) || $ruta=="" ) {

    if($ruta!=""){
        copy($ruta,$destino);
        }else{
            $destino="";
            $destino.="../resources/fotoClientes/foto1.jpg";
        }
if(strpos($foto, " ")){
    echo '<script>alertaeNoti("El nombre del archivo contiene espacios vacios")</script>';

}else{
    $conexion->query("INSERT INTO clientes (Foto,Nombres,Apellidos,Email,Telefono,Empresa,Tarjeta,FechaT,CVV,DireccionF,Descripcion) values ('$destino','$subs_name','$subs_last','$subs_email','$subs_telefono','$subs_empresa','$subs_card','$subs_fechaV','$subs_cvv','$subs_dir','$subs_desc')");
       
    if($conexion){
        echo '<script>alertaNoti("Se ha registrado el cliente con exito")</script>';
    }
}
}else{
    echo '<script>alertaeNoti("La extension del archivo es incorrecta")</script>';
}

}else{


    echo "<script>alertaeNoti('$validar_campo_vacio')</script>";

   // $validar_campo_vacio = "";
}  
          }
    
    ?>

    </div>
        </main>
        <footer>

            <h4>Contactanos </h4>

            <div class="lista_footer">                  
                    <ul class="foot">
                        <li><a href=" https://web.whatsapp.com" target="_blank"><img src="../public/img/whatsapp.png" alt=""></a> </li>
                        <li><a href=" https://www.instagram.com" target="_blank"> <img src="../public/img/instagram.png" alt=""></a></li>
                        <li><a href=" https://www.facebook.com/" target="_blank"> <img src="../public/img/facebook.png" alt=""> </li>
                        <li><a href=" https://mx.linkedin.com" target="_blank"><img src="../public/img/linkedin.png" alt=""></a> </li>                  
                    </ul>
                </div>
                <h5> &#169 Dclient</h5>

        </footer>

</body>
</html>

