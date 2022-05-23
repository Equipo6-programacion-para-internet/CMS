<?php      
        include "../../controllers/abrir_conexion.php";
        $email = $_POST['email'];
        $password = $_POST['password'];  
            //to prevent from mysqli injection  
            $email = stripcslashes($email);  
            $password = stripcslashes($password);  
            $email = mysqli_real_escape_string($conexion, $email);  
            $password = mysqli_real_escape_string($conexion, $password); 
              
            
            $sql = "select *from usuarios where Email = '$email' and Contra = '$password'";

            $result = mysqli_query($conexion, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);
            if($count == 1){      
            if ($row['Rol'] == 'CLIENTE') {
                header("location:inicio.php");
              } elseif($row['Rol'] == 'ADMINISTRADOR'){
                header("location:admin.php");
              }
               
            }else{
                
                    echo "<h1> Login failed. Invalid username or password.</h1>"; 
                    header("location:Login.php");
                   
            }
    ?>  
