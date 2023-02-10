<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body bgcolor="lightblue" >
<?php
    include_once('dashboard.php');
    ?>
    <table border="2" style="margin-left: 500px; margin-top: 100px;" align="center" >
    <p style="margin-left: 100px; margin-top: 70px; font-size: 25px;" >Users on our app:</p>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Email</th>
            <th>Username</th>
            <th>Password</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
        include_once '../repository/userRepository.php';

        $userRepository  = new UserRepository();
        $users = $userRepository->getAllUsers();

        foreach($users as $user){
           echo 
           "
           <tr>
               <td>$user[Id]</td>
               <td>$user[Name]</td>
               <td>$user[Surname]</td>
               <td>$user[Email]</td>
               <td>$user[Username]</td>
               <td>$user[Password]</td>
               <td><a href='edit.php?id=$user[Id]'>Edit</a></td>
               <td><a href='delete.php?id=$user[Id]'>Delete</a></td>
           </tr>
           ";
        }
        ?>
    </table>
</body>
</html>



