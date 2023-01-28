<!DOCTYPE html>
<html>
    <title>Dashboard</title>
</head>
<body bgcolor="lightblue">
    <table border="1">
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
        include_once '../Repository/userRepository.php';

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