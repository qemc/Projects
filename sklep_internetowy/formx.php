<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="XD.css">
    <title>Document</title>
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


    
    <form action="mailto:oscarw.sf@gmail.com" id="form" style="top:100px">
        <p>Formularz zamówienia</p>
        <input class="inp" type="text" placeholder="imię">
        <input class="inp" type="text" placeholder="nazwisko">
        <input class="inp" type="text" placeholder="mail">
        <textarea class="inp" name= ""id="" cols="30"  rows="10">rozmiar: 

Nazwa modelu:
        </textarea>

        <input class="inp" type="submit">
        <p class="odp">* Maxymalny czas oczekiwania na odpowiedź to 2 dni. Prześlemy Tobie wstępną wycenę <br>oraz przybliżony czas oczekiwania na parę</p>

        <h1 style="margin-top:50px">Formularz zamówienia</h1>
    </form>
    
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