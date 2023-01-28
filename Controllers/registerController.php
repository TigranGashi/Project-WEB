<?php

include_once '../Repository/userRepository.php';
include_once '../Models/user.php';

if(isset($_POST['registerBtn'])){
    if(empty($_POST['name'] || empty($_POST['surname']) || empty($_POST['email']) || empty($_POST['username']) ||  empty($_POST['password']))){
        echo "Please fill all fields";
    }else{
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $username.rand(1,9999);
    
        $user = new User($id,$name,$surname,$email,$username,$password);
        $userRepository = new UserRepository();

        $userRepository->insertUser($user);
    }

}



?>