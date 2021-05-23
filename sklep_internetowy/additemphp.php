<?php
    session_start();
    require("conn.php");
    



if(isset($_POST['additem'])){
    $item_name = $_POST['item_name'];
    $item_size = $_POST['item_size'];
    $item_image = $_FILES['img']['name'];
    $tmp_dir = $_FILES['img']['tmp_name'];
    $image_size = $_FILES['img']['size'];
    $upload_dir = 'uploads';
    $img_Ext = strtolower(pathinfo($item_image, PATHINFO_EXTENSION));
    $valid_extension = array('jpeg', 'jpg', 'png');

    $picProfile = rand(1000,1000000).".".$img_Ext;
    move_uploaded_file($tmp_dir,$upload_dir,$picProfile);
    $stmt=$conn->prepare("INSERT INTO items(item_id, item_name, item_size, item_pic) VALUES ('',:iname, :isize, :ipic)");
    $stmt->bindParam(':iname',$item_name);
    $stmt->bindParam(':isize',$item_size);
    $stmt->bindParam(':ipic',$picProfile);


    if($stmt->execute()){
        ?>
        <script>
            alert('added');
        </script>
        <?php
    }
    
}

?>