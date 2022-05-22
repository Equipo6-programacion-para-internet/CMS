<?php 
      require_once '../resources/config/consts.php';
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/styleAnyView.css">
    <title>View Any</title>
</head>
<body>
    <div class="container-header">
        <header >
            <nav>
                <div class="logo">
                    <img  src="<?php echo constant('URL');?>public/img/logo.png" alt="logo">
                </div>
                <div class="elementos">
                    <ul>
                    <li><a class="" href="#">Inicio</a></li>
                        <li><a class="active" href="#">Clientes</a></li>
                        <li><a href="#">Clientes potenciales</a></li>
                        <li><a href="#">Registrarse</a></li>
                    </ul>
                </div>
                </nav>
            
        </header>
    </div>

    <main class="main">
        <div class="container">
            <div class="title">
                <h2>Clientes</h2>
            </div>
            <div class="barra-busqueda">
                <input type="text" class="busqueda" placeholder="Buscar cliente">
            </div>
        
            <div class="cards">
                <div class="card">
                    <div class="card-header">
                        <div class="avatar-card">

                        </div>
                    </div>
                    <div class="card-body">
                        <h3>Rebeca Fox</h3>
                        <p class="small-title">Empresa</p>
                        <p class="normal-title">Cliente</p>
    
                        
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <div class="avatar-card">

                        </div>
                    </div>
                    <div class="card-body">
                        <h3>Rebeca Fox</h3>
                        <p class="small-title">Empresa</p>
                        <p class="normal-title">Cliente</p>
    
                        
                    </div>
                </div>
            </div>

        </div>


    </main>

    <footer>
        <div class="container-footer">
            <div class="footer">
                <h4>Todos los derechos reservados.@copyright Programacion para la internet</h4>  
            </div>
        </div>
    </footer>
</body>
</html>