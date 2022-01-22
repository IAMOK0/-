<?php include "connect.php"?>
<link rel="stylesheet" href="../css/table.css">
<?php 
        $keyword = $_GET["keyword"];
        $stmt = $pdo->prepare("SELECT * FROM history WHERE user_id LIKE '%$keyword%';");
        $stmt->execute();
?>
<?php while ($row = $stmt->fetch()) : ?>
    <div>
         <table cellpadding="0" cellspacing="0" border="0">
            <tbody>
                <tr>
                    <td><?=$row["user_id"]?></td>
                    <td><?=$row["p_name"]?></td>
                    <td><?=$row["p_piece"]?></td>
                    <td><?=$row["p_amount"]?></td>
                    <td><?=$row["Date_sale"]?></td>
                </tr>
            </tbody>
        </table>
<?php endwhile; ?>