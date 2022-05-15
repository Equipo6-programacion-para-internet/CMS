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
    <div class="container1">
    <section>
        <div class="container2">
            <h1>Registrar un nuevo cliente</h1>
            <p>Ingrese la información correspondiente <br> para registrar un nuevo cliente.La <br> información que es obligatoria está <br>marcada con un asterisco.</p>
            <div class="foto-cliente">
                <p>Foto de perfil</p>
                <input id="imagen" type="image">
                <button class="boton" >Elige una imagen</button>
            </div>
            <div class="descripcion">
                <p>Descripción</p>
                <input id="descripcion" type="text">
            </div>
        </div>
    </section>
    <section>
        <div class="container3">
            <h2>Datos Personales</h2>
            <div class="container4">
                <form class="formulario" action="">
                    <label for="name">Nombre<br>
                    <input class="inputs" id="name" type="text"></label>
                    <label  for="name">Apellido <br>
                    <input class="inputs" id="apellido" type="text" ></label> 
                    <label  for="mail">Correo Electrónico <br><input class="inputs" id="mail" type="text"></label>
                    <label for="phone">Número de Teléfono <br><input class="inputs" id="phone" type="text"></label>
                    <label  for="empresa">Empresa <br><input class="inputs" type="text"></label>
                    <label  for="card">Tarjeta de Crédito <br> <input class="inputs" type="text"></label>
                    <label  for="cvv">CVV<br><input class="inputs" type="text"></label>
                    <label  for="factura">Dirección de facturación <br><input class="inputs" type="text"></label>
                    <button class="boton">Guardar</button>
                </form>
            </div>

        </div>
    </section>
    </div>
</body>
</html>
