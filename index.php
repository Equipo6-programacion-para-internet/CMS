
<?php 
    include 'libs/user.php';
    include 'libs/user_session.php';
    require_once 'resources/config/consts.php';

    

    $user = new User();

   

    if(isset($_SESSION['user'])){
        echo "Hay sesion";
    }
    elseif(isset($_POST['email']) && isset($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        if($user->userExists($email, $password)){
            $user->setEmail($email);
            $userSession = new UserSession();
            $userSession->setCurrentUser($user);
            echo 'Usuario logueado';
            
        }
        else{
            echo '<script>alert("Usuario o contraseña incorrectos")</script>';
            include_once 'views/login.php';

        }
    }
    else{
        include_once 'views/Login.php';
    }

    
    
?>



   


