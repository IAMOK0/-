<?php include "connect.php"?>
<link rel="stylesheet" href="../css/table.css">
<?php 
        session_start();
        $stmt = $pdo->prepare("SELECT * FROM history WHERE user_id = ".$_SESSION["user_id"].";");
        $stmt->execute();
?>
<div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th>รหัสผู้ใช้งาน</th>
                        <th>ชื่อสินค้า</th>
                        <th>จำนวนสินค้า</th>
                        <th>ราคาสินค้า</th>
                        <th>เวลาที่ซื้อ</th>
                    </tr>
                </thead>
            </tabel>
        </div>
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
            <div>
        <?php endwhile; ?>
    </table>
</div>