<?php

    require("conn.php");

    $name = $_POST['name'];
    $mail = $_POST['email'];
    $password = $_POST['password'];
    $password_con = $_POST['password_con'];

    $sql ="INSERT INTO users(user_name, user_mail, user_password, user_id) VALUES ('$name','$mail','$password','')";
    $sql2 = "SELECT user_name , user_mail FROM users";
    $result = $conn->query($sql);
    $result2 = $conn->query($sql2);

    header('Location: log.php');
    


    



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
</body>
</html>