<?php include "connect.php"?>
<link rel="stylesheet" href="../css/table.css">
<?php 
        $keyword = $_GET["keyword"];
        $stmt = $pdo->prepare("SELECT * FROM user WHERE name LIKE '%$keyword%';");
        $stmt->execute();
?>
<?php while ($row = $stmt->fetch()) : ?>
    <div>
         <table cellpadding="0" cellspacing="0" border="0">
            <tbody>
                <tr>
                    <td><?=$row["user_id"]?></td>
                    <td><?=$row["user_n"]?></td>
                    <td><?=$row["name"]?></td>
                    <td><?=$row["sname"]?></td>
                    <td><?=$row["phone"]?></td>
                </tr>
            </tbody>
        </table>
<?php endwhile; ?>