<?php 

    include 'connect_db.php';

    class User extends Connect_db{
        public $name;
        public $rol; 




        public function userExists($email, $password){
            // $passwordMd5 = md5($password);
            
            $query = $this->connect()->prepare("SELECT * FROM usuarios WHERE Email = '$email' AND Contra = '$password';");
            $query->execute();

            if($query->rowCount() > 0){
                return true;
            }
            else{
                return false;
            }
        }


        public function setEmail($email){
            $query = $this->connect()->prepare("SELECT * FROM usuarios WHERE Email = '$email';");
            
            $query->execute();

            foreach($query as $currentEmail){
                $this->rol = $currentEmail['Rol'];
            }
        }

        public function getNombre(){
            return $this->name;
        }

        public function getRol(){
            return $this->rol;
        }
    }



?>