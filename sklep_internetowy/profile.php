
<?php
    error_reporting(E_ERROR | E_PARSE);
    session_start();
    $stat = 0;

    
  

    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Document</title>
    <link rel="stylesheet" href="XD.css">

    <style>
        .divlog{
            position:relative;
            top:200px;
            display:flex;
            flex-direction:column;
            margin-left: 100px;
            
        }
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

    </div>
    <div class="divlog">
        name
        <p class="inp"><?php echo $_SESSION['user_name']; echo $_SESSION['admin_name']?></p>
        mail
        <p class="inp"><?php echo $_SESSION['user_mail']; echo $_SESSION['ifadmin'] ?></p>
        status
        <p  class="inp"><?php echo $_SESSION['adminstat']; echo $_SESSION['userstat'] ?></p>
        
        
    </div>
    

   
    
  <script>
        
            
            window.onload = function(){

                var tab = document.querySelectorAll(".inp");

                var ifadmin = tab[1].textContent;

                if (ifadmin==1){
                    tab[2].innerHTML = "logged as an admin";
                    
                    var przy = document.createElement("button");
                    przy.classList.add("inp");
                    przy.innerHTML = "dodaj przedmiot";
                    przy.onclick = function(){
                        location.href = "additem.php";


                    }
                    document.querySelector(".divlog").appendChild(przy);
                     var przy1 = document.createElement("button");
                    przy1.classList.add("inp");
                    przy1.innerHTML = "dodaj admina";
                    przy1.onclick = function(){
                        location.href = "createadmin.php";
                        

                    }
                    document.querySelector(".divlog").appendChild(przy1);

                    
                }
                else{
                   
                }



            }


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