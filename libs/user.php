<?php 

    include 'connect_db.php';

    class User extends Connect_db{
        public $name;
        public $correo; 




        public function userExists($email, $password){
            $passwordMd5 = md5($password);

            $query = $this->connect()->prepare("SELECT * FROM users WHERE email = '$email' AND password = '$passwordMd5';");
            $query->execute();

            if($query->rowCount() > 0){
                return true;
            }
            else{
                return false;
            }
        }


        public function setEmail($email){
            $query = $this->connect()->prepare("SELECT * FROM users WHERE email = :email");
            
            $query->execute([
                'email' => $email
            ]);

            foreach($query as $currentEmail){
                $this->correo = $currentEmail['email'];
                $this->name = $currentEmail['full_name'];

            }
        }

        public function getNombre(){
            return $this->name;
        }
    }



?>