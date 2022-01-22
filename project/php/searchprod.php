<?php include "connect.php"?>
<link rel="stylesheet" href="../css/table.css">
<?php 
        $keyword = $_GET["keyword"];
        $stmt = $pdo->prepare("SELECT * FROM product WHERE p_type LIKE '%$keyword%';");
        $stmt->execute();
?>
<?php while ($row = $stmt->fetch()) : ?>
    <div>
         <table cellpadding="0" cellspacing="0" border="0">
            <tbody>
                <tr>
                    <td><?=$row["p_id"]?></td>
                    <td><?=$row["p_name"]?></td>
                    <td><?=$row["p_price"]?></td>
                    <td><?=$row["p_type"]?></td>
                </tr>
            </tbody>
        </table>
<?php endwhile; ?>