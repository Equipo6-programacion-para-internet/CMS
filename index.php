
<?php 
    include 'libs/user.php';
    include 'libs/user_session.php';

    

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
            
        }
        else{
            echo '<script>alert("Usuario o contraseña incorrectos")</script>';
            include_once 'resources/views/login.php';

        }
    }
    else{
        include_once 'resources/views/Login.php';
    }

    
    
?>



   


