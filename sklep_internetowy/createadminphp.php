<?php

    require("conn.php");

    $name = $_POST['name'];
    
    $password = $_POST['password'];
    $password_con = $_POST['password_con'];

    $sql ="INSERT INTO admins(admin_name, admin_password, adimn_id) VALUES ('$name','$password','')";
    $sql2 = "SELECT admin_name , admin_mail FROM admins";
    $result = $conn->query($sql);
    $result2 = $conn->query($sql2);

    echo "Dodałeś admina";
    echo '<a href="profile.php"> wróć do swojego profilu</a>';


    



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