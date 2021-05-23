<?php
error_reporting(E_ERROR | E_PARSE);
session_start();



 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="XD.css">

    <style>
      
    </style>
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
    
    <div class="bot">
        <div class="container-fluid d-flex flex-column">
            <div class="container" style="top: 200px; display: flex; flex-direction:column; align-items:center; height:100%">
                <img id="img" class=""style="top: 200px; max-width: 700px; marigin-bottom:-200px" src="jpg1.jpg" alt="">


              


            <div>
            <div style="margin-top:300px; display:flex"   class="content">
            <div  style="flex-direction:column; display:flex; justify-content:center" class="opis" style="top:200px">
            <p style="text-align:center;max-width: 700px; font-size:20px;">Darmowa dostawa dla osób zalogowanych!
</p>
        <p style="text-align:center;max-width: 700px; font-size:30px; " >Witamy w SNS, w miejsciu, w którym niemożliwe staje się możliwe. Tutaj zamówisz swoje wymarzone buty.
             Granice nie istnieją, cokolwiek przyjdzie Ci do głowy, w ciągu tygodnia wyląduje na Twoich nogach </p>
             <p style="text-align:center;max-width: 700px; font-size:20px;">wszystkie zamówienia prosimy kierować przez formularz, dostępny w zakładce FORM.

                Wszystkie buty, które dostarczamy naszym klientom są w 100% ooryginalne.
                Przedmioty, które znajdziesz w zakładce IN HAND, są dostępne od ręki.
            </p>
        </div>
            </div>
            
        </div>

        
    </div>


    
  
  
  

  
  <div class="text-center p-3 " style="background-color: rgba(0, 0, 0, 0.2); margin-left:-15px; margin-right:-15px; margin-top:70px; ">
    © 2021 Copyright: Grzegorz Fabis
    
  </div>
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
            var w=window.width;
            var h=window.height;
            console.log(h);
    
            var i =0;
            var img1 = document.querySelector("#img");
            var img=[];
            var time = 3000;
            img[0]='slider1.jpg';
            img[1]='slider2.jpg';
            img[2]='slider3.jpg';
    
            function XDD(){
                var img1 = document.querySelector("#img");
                
                img1.src = img[i];
    
                if(i<img.length-1){
                    i++;
                }else{
                    i=0;
                }
                setTimeout("XDD()",time);

                
            
                document.getElementById("log").innerHTML = ff;
    
            }
    
            window.onload = XDD;
          
      
    
            
           
    
        </script>
</body>
</html>