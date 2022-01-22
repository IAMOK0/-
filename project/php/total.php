<?php include "connect.php"?>
<?php 
        session_start();
        $stmt = $pdo->prepare("SELECT * FROM cart WHERE u_id = ".$_SESSION["user_id"].";");
        $stmt->execute();
        $SUM = 0;
?>
<?php while ($row = $stmt->fetch()) : ?>
        <?php $SUM += $row["p_amount"]?>
<?php endwhile; ?>
<div class="n"><h2>Total : <?=$SUM?> บาท </h2></div>