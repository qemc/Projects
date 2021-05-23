<?php

include("conn.php");


if(isset($_POST['btn']))
	{
		$name=$_POST['name'];
        $sz = $_POST['sz'];
        $sku = $_POST['sku'];
		$images=$_FILES['img']['name'];
		$tmp_dir=$_FILES['img']['tmp_name'];
		$imageSize=$_FILES['img']['size'];

		$upload_dir='uploads/';
		$imgExt=strtolower(pathinfo($images,PATHINFO_EXTENSION));
		$valid_extensions=array('jpeg', 'jpg', 'png', 'gif', 'pdf');
		$picProfile=rand(1000, 1000000).".".$imgExt;
		move_uploaded_file($tmp_dir, $picProfile);
		$stmt=$conn->prepare("INSERT INTO items(item_name, item_size,item_pic,sku) VALUES ('$name','$sz','$picProfile','$sku')");

		if($stmt->execute())
		{
		echo "jest git";

        $_SESSION['szs'] = $sz;
        $_SESSION['itemss'] = $name;
        $_SESSION['picss'] = $picProfile;


        
       
            
		}else 

		{
		echo "nie jest git";
		}

	}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="XD.css">

    <title>Document</title>
</head>
<body>

<div id="cont" class="container-fluid py-1 "style="top:0px">
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





    <form style="display:flex; flex-direction:column; align-items:center; margin-top:200px"method="post" enctype="multipart/form-data">
        <input class="inp" placeholder="ID" type="text" name="name">
        <input class="inp" placeholder="size" type="text" name="sz">
        <input class="inp" placeholder="~ price" type="text" name="sku">
        <input class="inp"  type="file" name="img">
        <input class="inp"type="submit" name="btn">

        


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