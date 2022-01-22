<?php include "connect.php"?>
<link rel="stylesheet" href="../css/homepage.css">
<link rel="stylesheet" href="../css/button2.css">
<?php 
        $stmt = $pdo->prepare("SELECT * FROM product WHERE p_type = 'อาหาร'");
        $stmt->execute();
?>
<h1>อาหาร</h1>
<br>
<div class="slider">
    <div class="bar"></div>
</div><br>
<?php while ($row = $stmt->fetch()) : ?>
    <div class="display">
                <img class="product" src='../image/<?=$row["p_id"]?>.jpg'>
                <div class="font-product">
                    <br>
                    <?=$row ["p_name"]?>
                    <br>
                    <?=$row ["p_price"]?> บาท
                </div>
                <br>
                <div class="wrap">
                    <a href="../page/login.php"><button class="button" >สั่งซื้อสินค้า</button></a>
                </div>
            </div>
<?php endwhile; ?>