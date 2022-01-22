<?php include "connect.php"?>
<link rel="stylesheet" href="../css/table.css">
<?php 
        session_start();
        $stmt = $pdo->prepare("SELECT * FROM cart WHERE u_id = ".$_SESSION["user_id"].";");
        $stmt->execute();
        $SUM = 0;
?>
<?php while ($row = $stmt->fetch()) : ?>
    <div>
         <table cellpadding="0" cellspacing="0" border="0">
            <tbody>
                <tr>
                    <td><?=$row["p_name"]?></td>
                    <td><?=$row["p_piece"]?></td>
                    <td><?=$row["p_amount"]?></td>
                    <td><form action="../php/delete.php" method="POST"><input type="hidden" name="order"value="<?=$row["order_id"]?>"><button>ลบ</button></form></td>
                </tr>
            </tbody>
        </table>
<?php endwhile; ?>