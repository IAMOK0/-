<?php include "connect.php"?>
<?php 
        $stmt = $pdo->prepare("DELETE FROM cart WHERE order_id = ?");
        $stmt->bindParam(1, $_POST["order"]);
        if ($stmt->execute())
            header("location: ../page/profile.php");
?>