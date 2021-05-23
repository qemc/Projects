<?php
session_start();
require("conn.php");
//error_reporting(E_ERROR | E_PARSE);
$name = $_POST['name'];

$password = $_POST['password'];

if(!empty($name)&&!empty($password)){
    $result = "SELECT admin_name, admin_password FROM admins WHERE admin_name ='$name' AND admin_password = '$password'";

    $mysql = mysqli_query($conn, $result);

    $XD =0;
    $row = mysqli_fetch_array($mysql);


        if($row['admin_name']==$name && $row['admin_password']==$password){
            echo "logged in";
            $XD =1;
            $_SESSION['admin_name'] = $name;
            $_SESSION['ifadmin'] = 1;
            $_SESSION['adminstat'] = 'logged';
            echo $name;
            header("Location:profile.php");
        }else{
            echo "enter valid information - ";
            echo '<a href="adminlog.php"> try again</a>';
            
        }
    }
    else{
        echo "enter valid information - ";
        echo '<a href="adminlog.php"> try again</a>';
        
    }


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