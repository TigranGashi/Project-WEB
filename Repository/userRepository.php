<?php

include_once '../Database/databaseConnection.php';

class UserRepository{
    private $connection;

    function __construct()
    {
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }

    function insertUser($user){
        $conn = $this->connection;

        $id = $user->getId();
        $name = $user->getName();
        $surname = $user->getSurname();
        $email = $user->getEmail();
        $username = $user->getUsername();
        $password = $user->getPassword();
    
        $sql = "INSERT INTO user(id,name,surname,email,username,password) VALUES (?,?,?,?,?,?)";

    
        $statement = $conn->prepare($sql);
        $statement->execute([$id,$name,$surname,$email,$username,$password]);
        
        echo "<script>alert('User has been inserted succesfuly!');</script>";
    }

    function getAllUsers(){
        $conn = $this->connection;

        $sql = "SELECT * FROM user";

        $statement = $conn->query($sql);
                            //Ju qaset te dhenave ne pjesen e databases edhe i bon fetchAll
        $users = $statement->fetchAll();

        return $users;
    }

    function getUserByUsernameAndPassword($username,$password){
      
    }

    function getUserById($id){
        $conn = $this->connection;
        $sql = "SELECT * FROM user WHERE id='$id'";

        $statement = $conn->query($sql);
        $user = $statement->fetch();

        return $user;
    }

    function deleteUser($id){
        $conn =  $this->connection;

        $sql = "DELETE FROM user WHERE id=?";

        $statement = $conn->prepare(($sql));
        $statement->execute([$id]);
        echo "<script>alert('delete was successful);</script>";
    }

    function updateUser($id,$name,$surname,$email,$username,$password){
        $conn = $this->connection;

        $sql = "UPDATE user SET name=?,surname=?,email=?,username=?,password=? WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id,$name,$surname,$email,$username,$password]);
        echo "<script>alert('update was successful);</script>";
    }


}


?>