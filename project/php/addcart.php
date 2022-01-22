<?php include "connect.php"?>
<?php 
        session_start();
        $var = $_POST["price"]*$_POST["piece"];
        $stmt = $pdo->prepare("INSERT INTO cart VALUES ('',?, ?, ?, ?)");
        $stmt->bindParam(1, $_SESSION["user_id"]);
        $stmt->bindParam(2, $_POST["name"]);
        $stmt->bindParam(3, $_POST["piece"]);
        $stmt->bindParam(4, $var);
        $stmt->execute();
        header('Location: ../page/profile.php');
?>