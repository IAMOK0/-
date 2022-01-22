<?php include "connect.php"?>
<?php 
        session_start();
        $stmt = $pdo->prepare("SELECT * FROM cart WHERE u_id = ".$_SESSION["user_id"].";");
        $stmt->execute();
        date_default_timezone_set("Asia/Bangkok");
        $date = date("Y-m-d H:i:s");
?>
        <?php while ($row = $stmt->fetch()) : ?>
            <?php
                $stmt1 = $pdo->prepare("INSERT INTO history VALUES ('',?, ?, ?, ?, ?)");
                $stmt1->bindParam(1, $_SESSION["user_id"]);
                $stmt1->bindParam(2, $row["p_name"]);
                $stmt1->bindParam(3, $row["p_piece"]);
                $stmt1->bindParam(4, $row["p_amount"]);
                $stmt1->bindParam(5, $date);
                $stmt1->execute();
                $stmt2 = $pdo->prepare("DELETE FROM cart WHERE order_id = ?");
                $stmt2->bindParam(1, $row["order_id"]);
                $stmt2->execute();
            ?>
        <?php endwhile; ?>
        <?php header("location: ../page/profile.php"); ?>