<?php
session_start();
include("conn.php");

$query = 'SELECT * FROM items';
$result = mysqli_query($conn, $query);?>
<div id="cont" class="container-fluid py-1" style="top:0px">
        <div class="row mx-5  d-flex flex-row flex-wrap"> 
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
    


<?php
while ($row = $result->fetch_assoc()){

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="XD.css">



<div style="display:flex; align-items:center; flex-direction:column; margin-top: 200px;">
    
    <?php echo "<img src='{$row['item_pic']}' style='height:400px; width:600px; border: solid 3px black; border-radius:6px'>";?>

    <div style="display:flex; width:620px">
    <span class="inp"><?php echo $row['item_name'];?></span>
    <span class="inp"><?php echo $row['item_size'];?></span>
    <span class="inp"><?php echo $row['sku'];?></span>
    </div>
</div>
<?php
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
            img[0]='jpg1.jpg';
            img[1]='jpg2.jpg';
            img[2]='jpg3.jpg';
    
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