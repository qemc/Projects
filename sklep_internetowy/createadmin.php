<?php
    


   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="XD.css">

    <title>Document</title>
</head>
<body>
    <form style="display:flex; flex-direction:column; align-items:center" action="createadminphp.php" method="post">
    
    <input class="inp" type="text" name="name" placeholder="name">
    
    <input class="inp" type="password" name="password" placeholder="password">
    <input class="inp" type="password" name="password_con" placeholder="pswd again">
    <input class="inp" type="submit" name="submit" value="dodaj admina">

    </form>
</body>
</html>