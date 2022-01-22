<?php include "connect.php" ?>

<?php
session_start();
$_SESSION["name"] = $_POST["fnames"];
$_SESSION["sname"] = $_POST["lastname"];
$stmt = $pdo->prepare("UPDATE user SET user_n=?, pass=?,name=?, sname=?,address=?,phone=? WHERE user_id = ".$_SESSION["user_id"].";");
$stmt->bindParam(1, $_POST["username"]);
$stmt->bindParam(2, $_POST["password"]);
$stmt->bindParam(3, $_POST["fnames"]);
$stmt->bindParam(4, $_POST["lastname"]);
$stmt->bindParam(5, $_POST["location"]);
$stmt->bindParam(6, $_POST["tel"]);
if ($stmt->execute())
    header('Location: ../page/profile.php');
?>