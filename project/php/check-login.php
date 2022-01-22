<?php
  include "connect.php";
  
  session_start();

  $stmt = $pdo->prepare("SELECT * FROM user WHERE user_n = ? AND pass = ?");
  $stmt->bindParam(1, $_POST["user_n"]);
  $stmt->bindParam(2, $_POST["pass"]);
  $stmt->execute();
  $row = $stmt->fetch();

  // หาก username และ password ตรงกัน จะมีข้อมูลในตัวแปร $row
  if (!empty($row)) { 
    
    // นำข้อมูลผู้ใช้จากฐานข้อมูลเขียนลง session 2 ค่า
    $_SESSION["name"] = $row["name"];   
    $_SESSION["sname"] = $row["sname"];
    $_SESSION["user_id"] = $row["user_id"];
    
    if($row["status"] == "admin"){
      header('Location: ../page/adminpage.php');
    }
    else{
      header('Location: ../page/profile.php');
    }
  // กรณี username และ password ไม่ตรงกัน
  } else {
    header('Location: ../page/login.php?fail=1');
  }
?>
