<?php include "../php/connect.php"?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../css/EditUser.css">
        <link rel="stylesheet" href="../css/button5.css">
    </head>
    <body>
        <?php 
            session_start();
            $stmt = $pdo->prepare("SELECT * FROM user WHERE user_id = ".$_SESSION["user_id"].";");
            $stmt->execute();
        ?>
        <?php while ($row = $stmt->fetch()) : ?>
        <h1>ข้อมูลผู้ใช้งาน</h1>
        <form action=../php/update.php method="POST" id="signup-form" class="signup-form">
                    <div class="main-form">
                        <b>ชื่อผู้ใช้งาน: </b>
                        <div class="form-group">
                            <input type="text" class="form-input" name="username" id="username" value=<?=$row["user_n"]?> placeholder="ชื่อผู้ใช้" required="required">
                        </div>
                        <b>รหัสผ่าน: </b>
                        <div class="form-group">
                        <input type="text" class="form-input" name="password" id="password"value=<?=$row["pass"]?> placeholder="รหัสผ่าน" required="required">
                        </div>
                        <b>ชื่อ: </b><br>
                        <div class="form-group">
                        <input type="text" class="form-input" name="fnames" id="fnames"value=<?=$row["name"]?> placeholder="ชื่อ" required="required">
                        </div>
                        <b>นามสกุล: </b>
                        <div class="form-group">
                        <input type="text" class="form-input" name="lastname" id="lastname"value=<?=$row["sname"]?> placeholder="นามสกุล" required="required">
                        </div>
                        <b>ที่อยู่: </b>
                        <div class="form-group">
                        <input type="text" class="form-input" name="location" id="location" value=<?=$row["address"]?> placeholder="ที่อยู่" required="required">
                        </div>
                        <b>เบอร์โทรศัพท์: </b>
                        <div class="form-group">
                        <input type="tel" class="form-input" name="tel" id="tel"  value=<?=$row["phone"]?> placeholder="เบอร์โทรศัพท์" required="required">
                        </div>

                        <br>
                        <?php 
                        if(isset($_GET['fail']) == true){
                           echo "<p class='errorword'>รหัสผ่านไม่ถูกต้อง</p><br>";
                        }else{
                           echo "<br>";
                        }
                        ?>
                    <div class="button1">
                        <div class="wrap">
                            <button class="button" >ยืนยัน</button>                           
                        </div>
                </form>
                <form action=../page/profile.php> 
                        <div class="wrap">                          
                           <button class="button">ยกเลิก</button>                                                             
                        </div>
                    </div>
                    </div>
                </form>
            <?php endwhile; ?>
    </body>
</html>