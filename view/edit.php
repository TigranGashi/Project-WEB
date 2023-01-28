<?php

include_once '../Repository/userRepository.php';

$userId = $_GET['id'];

$userRepository = new UserRepository();

$user = $userRepository->getUserById($userId);

?>

    <h3>Edit User</h3>
    <form action="" method="POST">
        <input type="text" name="id" value="<?=$user['Id']?>" readonly><br><br>
        <input type="text" name="name" value="<?=$user['Name']?>"><br><br>
        <input type="text" name="surname" value="<?=$user['Surname']?>"><br><br>
        <input type="text" name="email" value="<?=$user['Email']?>"><br><br>
        <input type="text" name="username" value="<?=$user['Username']?>"><br><br>
        <input type="text" name="password" value="<?=$user['Password']?>"><br><br>
        
        <input type="submit" name="save" value="save"> <br><br>
    </form>
    
</body>
</html>

<?php
if(isset($_POST['save'])){
    $id = $userId;
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password =$_POST['password'];

    $userRepository->updateUser($id,$name,$surname,$email,$username,$password);
    header("location:dashboard.php");
}

?>