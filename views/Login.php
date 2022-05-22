<?php
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/style.css">
    <link rel="icon" href="../img/login.png">
    <title>Login</title>
</head>

<body>

            <div class="boton-modal">
                    <label for="btn-modal">
                    &nbsp;  i &nbsp; 
                    </label>
            </div>
    <div class="container">
        <div class="container-login">
            <div class="col-left">
                <h1>Ingresar</h1>
                <form class="form-group" method="POST">
                    <input type="text" class="input " placeholder="Correo" name="email">
                    <input type="password" class="input" placeholder="Contraseña" name="password">
                    <input type="submit" class="btn" value="Ingresar">
                
                        <a href="<?php echo constant('URL');?>views/AnyView.php">Ingresar como invitado</a>
                </form> 
            </div>
            <div class="col-right">
                <div class="content-text">
                    <h2>Hola de nuevo</h2>
                    <p>Ingresa el correo y la contraseña para iniciar sesion</p>
                    <p>Si no tienes una cuenta puedes crear una aqui</p>
                    <button id="btn-register"><a href="<?php echo constant('URL');?>views/Register.php">Registrar</a></button>
                </div>
            </div>
        </div>

    </div>

    <!--Ventana modal  -->
    <input type="checkbox" id="btn-modal"> <!-- Para que aparesca -->

    <div class="container-modal">
            
        <div class="content-modal">
                <div class="btn-cerrar">
                        <label for="btn-modal">  &nbsp;  X &nbsp;  </label>
                </div>
            
                <div class="texto_info">
                    <h2>Universidad de Guadalajara</h2>
                     <p>   Programación para internet 
                    
                    <ul>
                        <li> &nbsp; Alexis de Jesús Aguirre Lara. </li>
                        <li> &nbsp; Aarón Yael Carranza Vera. </li>
                        <li> &nbsp; Stephany Michelle Cortés González. </li>
                        <li> &nbsp; Juan Pedro Domíngez Padilla.</li>
                        <li> &nbsp; Admin Yair Gutiérrez Domínguez.</li>
                        <li> &nbsp; Jazmin Alejandra Lomelí Zermeño.</li>

                    </ul>
                </div>
    
         </div>
         <label for="btn-modal" class="cerrar-modal"></label>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"> 
    </script>
</body>
</html>

