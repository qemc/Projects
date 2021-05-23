<?php
    


   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="XD.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


   
</head>
<body>
<div id="cont" class="container-fluid py-1  ">
        <div class="row mx-5  d-flex flex-wrap"> 
            <div class="col mx-4 d-flex flex-wrap" ><h1>SNS</h1>
            <h2>sneakers'n'stuff</h2></div>
            <div class="col d-flex flex-wrap mx-4">
            <div class="col  p-2"><span class="btn">home</span></div>
                <div class="col  p-2"><span class="btn">in_hand</span></div>
                <div class="col  p-2"><span class="btn">log</span></div>
                <div class="col  p-2"><span class="btn">form</span></div>
                <div class="col  p-2"><span class="btn">log_out</span></div>
                <div class="col  p-2"><span class="btn">profile</span></div>
            </div>
            
        </div>

    </div>

    


    <form id="form" action="rej.php" method="post" class="">
    
    <input type="text" class="inp" name="name" placeholder="name">
    <input type="text" class="inp" name="email" placeholder="email">
    <input type="password" class="inp" name="password" placeholder="password">
    <input type="password" class="inp" name="password_con" placeholder="pswd again">
    <input type="submit" class="inp" name="submit" value="zarejestruj się">

    </form>

    </div>

    <script>
         const XD = document.querySelectorAll(".btn");
            
            XD[0].addEventListener("click",function(){
                location.href = "index.php";
                var w=window.width;
            var h=window.height;
                document.getElementById("XD").innerHTML = h;
            })
            XD[1].addEventListener("click",function(){
                location.href = "shop.php";
            })
            XD[2].addEventListener("click",function(){
                location.href = "log.php";
            })
            XD[3].addEventListener("click",function(){
                location.href = "formx.php";
            })
            XD[4].addEventListener("click",function(){
                location.href = "logoutt.php";
            })
            XD[5].addEventListener("click",function(){
                location.href = "profile.php";
            })
        

    </script>
</body>
</html>