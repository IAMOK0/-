<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/register.css">
    <link rel="stylesheet" href="../css/button.css">
    <meta charset="UTF-8">
    <script src="../js/recapture.js"></script>
</head>

<body onload="cap()">
        <div class="container">
            <div class="signup-content">
                <form action=../php/registeruser.php method="POST" id="signup-form" class="signup-form">
                    <div>
                        <div>
                            <div class="logo_sections">
                                <a class="navbar-brand" href="homepage.php"><img src="../image/Logo.png" alt="image"></a>
                            </div>
                        </div>
                        <h2 class="form-title">สร้างบัญชีใหม่</h2>
                        <b>กรุณากรอกข้อมูลให้ครบและถูกต้อง</b>
                        <div class="form-group">
                            <input type="text" class="form-input" name="username" id="username" placeholder="ชื่อผู้ใช้" pattern="[A-Za-z0-9]+{8,16}" required="required">
                        </div>
                        <b>มีตัวอักษรและตัวเลขรวมกัน 8 - 16 ตัว</b>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="รหัสผ่าน" pattern="[A-Za-z0-9]{8,}" required="required">
                        </div>
                        <b>รหัสผ่านอย่างน้อย 8 ตัว โดยใช้อักษรพิเศษไม่ได้</b>
                        <div class="form-group">
                            <input type="text" class="form-input" name="fnames" id="fnames" placeholder="ชื่อ" pattern="{1,}" required="required">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="lastname" id="lastname" placeholder="นามสกุล" pattern="{1,}" required="required">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="location" id="location"placeholder="ที่อยู่" pattern="{1,}" required="required">
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-input" name="tel" id="tel" placeholder="เบอร์โทรศัพท์" pattern="[0-9]{10,10}" required="required">
                        </div>
                        <div>
                            <p class="text-sim">กรุณากรอก Captcha:</p><br>
                            <input type="text" class="form-control" readonly id="capt" name="capture">
                            <p class="text-sim">ไม่เห็น Captcha กดที่รูป <img class="refresh" src="../image/refresh.png" width="12px" onclick="cap()"></p><br>
                            <input type="text" class="form-control" id="textinput" name="capture2" placeholder="กรอก Captcha ตรงนี้">
                        </div>
                        <br>
                        <?php 
                        if(isset($_GET['fail']) == true){
                           echo "<p class='errorword'>ชื่อบัญชีถูกใช้งานไปแล้ว หรือ Captcha ไม่ถูกต้อง กรุณาลองอีกครั้ง</p><br>";
                        }else{
                           echo "<br>";
                        }
                        ?>
                        <div class="wrap">
                            <button class="button">ยืนยัน</button>
                        </div>
                    </div>
                </form>
                <p class="loginhere">
                    สมัครสมาชิกแล้วใช่ใหม? <a href="./login.php" class="loginhere-link">เข้าสู่ระบบ</a>
                </p>
            </div>
        </div>
</body>

</html>