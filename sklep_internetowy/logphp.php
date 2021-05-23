<?php
session_start();
require("conn.php");
//error_reporting(E_ERROR | E_PARSE);
$name = $_POST['name'];

$password = $_POST['password'];

if(!empty($name)&&!empty($password)){
    $result = "SELECT user_name, user_password FROM users WHERE user_name ='$name' AND user_password = '$password'";
    $mail = "SELECT  user_mail FROM users WHERE user_name = '$name'";
    $mysql = mysqli_query($conn, $result);
    $msql2 =mysqli_query($conn,$mail);

    $XD =0;
    $row = mysqli_fetch_array($mysql);
    $row2 = mysqli_fetch_array($msql2);
   


        if($row['user_name']==$name && $row['user_password']==$password){
            
            $XD =1;
            $d = $row2['user_mail'];
            $_SESSION['user_name'] = $name;
            $_SESSION['user_mail'] = $d;
            $_SESSION['userstat'] = 'logged as user';
            header("Location:index.php");
            
            
        }else{
            echo "enter valid information - ";
            echo '<a href="profile.php"> try again</a>';
            
        }
    }
    else{
        echo "enter valid information - ";
        echo '<a href="log.php"> try again</a>';
        
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <p id="XD">

    </p>
    <a id="XD1" href="index.php ">

    </a>
</head>
<body>
    <script>
        window.onload = function(){
            const XD = <?php echo json_encode($XD)?>;
            if(XD==1){
                document.getElementById("XD").innerHTML = "Witaj ";
                document.getElementById("XD1").innerHTML = "click here to start! ";
            }
        }

    </script>
  
    
</body>
</html>