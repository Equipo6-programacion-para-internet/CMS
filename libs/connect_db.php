<?php


    class Connect_db {

        public function __construct() {
            $this->server = "localhost";
            $this->port = "3306";
            $this->user = "root";
            $this->pass = "javascript";
            $this->db = "cms";    
        }

        public function connect(){
            try{
                $conexion = new PDO("mysql:host=$this->server;port=$this->port;dbname=$this->db", $this->user, $this->pass);
                return $conexion;
            }catch(Exception $e){
                return false;
            }
        }
     

    
    //  require_once 'config/keys.php';
    
    //  $db = pg_connect("host=$server port=$port dbname=$db user=$user password=$pass");

    //     if($db){
            
    //         return $db;
    //     }
    //     else {
    //         echo "Conexion fallida";

    //     }

     
    
    }
    
?>
