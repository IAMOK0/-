<?php include "connect.php"?>
<link rel="stylesheet" href="../css/profile.css">
<link rel="stylesheet" href="../css/button4.css">
<?php 
        $stmt = $pdo->prepare("SELECT * FROM product WHERE p_type = 'อาหาร'");
        $stmt->execute();
?>
<br>
<?php while ($row = $stmt->fetch()) : ?>
    <div class="display">
        <img class="product" src='../image/<?=$row["p_id"]?>.jpg'>
        <div class="font-product">
            <br>
            <?=$row ["p_name"]?> ราคา <?=$row ["p_price"]?> บาท
            <br><br>
            <div class="plus">
            <div class="wrap">
                    <button class="button2" onclick="minus<?=$row['p_id']?>()">-</button>
                </div>   
                <input type="text" class="form-control" value="1"readonly id="piece<?=$row["p_id"]?>">         
                <div class="wrap">
                    <button class="button2" onclick="plus<?=$row['p_id']?>()">+</button>
                </div>
            </div>
            <br>
            <form action="../php/addcart.php?" method="POST">
                <input type="hidden" name="piece" value="1"readonly id="piece<?=$row["p_id"]?>add">
                <input type="hidden" name="name" value="<?=$row["p_name"]?>">
                <input type="hidden" name="price" value="<?=$row["p_price"]?>">
            <div class="wrap">
                <button class="button1">เลือกสินค้า</button>
            </div>
        </form>
        </div>
    </div>
    <br>
    <div class="slider">
    <div class="bar"></div>
</div>
<br>
<?php endwhile; ?>