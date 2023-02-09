<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once('dashboard.php');
    ?>
   
   <table border="2" style="margin-left: 500px; margin-top: 100px;" align="center" >
   <p style="margin-left: 100px; margin-top: 70px; font-size: 25px;" >Comments:</p>

<tr>
    <td><i><b>ID</b></i></td>
    <td><i><b>NAME</b></i></td>
    <td><i><b>SURNAME</b></i></td>
    <td><i><b>EMAIL</b></i></td>
    <td><i><b>COMMENTS</b></i></td>
    <td><i><b>DELETE</b></i></td>
</tr>

<?php
    include_once('../repository/commentsRepository.php');

    $commentRepository = new CommentRepository;

    $comments=$commentRepository->getAllComments();

    foreach($comments as $comment){
        echo "
        <tr>
        <td>$comment[Id]</td>
        <td>$comment[Name]</td>
        <td>$comment[Surname]</td>
        <td>$comment[Email]</td>
        <td>$comment[Comment]</td>
        <td><a href='deleteComment.php?id=$comment[Id]'>Delete</a></td>
        </tr>
        ";
    }
    ?>
</table>
</body>
</html>
