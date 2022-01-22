<?php include "connect.php"?>
<?php
    $stmt = $pdo->prepare("SELECT * FROM user");
    $stmt->execute();
    $check = false;
?>
    <?php while ($row = $stmt->fetch()) :?> 
        <?php if($row["user_n"] == $_POST["username"]){
            $check = true;
        }
        ?>
    <?php endwhile; ?>
<?php
    if($_POST["capture"] == $_POST["capture2"]){
        if($check != true){
            $stmt1 = $pdo->prepare("INSERT INTO user VALUES ('',?, ?, ?, ?, ?,'user', ?)");
            $stmt1->bindParam(1, $_POST["username"]);
            $stmt1->bindParam(2, $_POST["password"]);
            $stmt1->bindParam(3, $_POST["fnames"]);
            $stmt1->bindParam(4, $_POST["lastname"]);
            $stmt1->bindParam(5, $_POST["location"]);
            $stmt1->bindParam(6, $_POST["tel"]);
            $stmt1->execute();
            header('Location: ../page/login.php');
        }else{
            header('Location: ../page/register.php?fail=1');
        }
    }else{
        header('Location: ../page/register.php?fail=1');
    }
?>