<?php

class DataBaseConnection{
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "Tech14";

    function startConnection(){
        try{
            //Koneksioni PDO-(PHP DATA OBJECT)
            $conn = new PDO("mysql:host=$this->server; dbname=$this->database, $this->username, $this->password");
            //PDO error
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }catch(PDOException $e){
            //Mesazhi
            echo "Database Connection Failed" .$e->getMessage();
            return null;
        }

    }
}
?>
