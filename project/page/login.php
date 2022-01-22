<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="../css/login.css">
      <link rel="stylesheet" href="../css/button.css">
   </head>
   <body>
      <div class="container">
         <div class="signup-contentr">
            <div class="form">
               <div>
                  <a class="navbar-brand" href="homepage.php"><img src="../image/Logo.png" alt="image"></a>
               </div>
               <div>
                  <form action="../PHP/check-login.php" method="post">
                     <p>Username:</p>
                     <input type="text" name="user_n" placeholder="ชื่อผู้ใช้งาน"><br><br>
                     <p>Password:</p>
                     <input type="password" name="pass" placeholder="รหัสผ่าน"><br>                    
                     <?php 
                        if(isset($_GET['fail']) == true){
                           echo "<p class='errorword'>ชื่อผู้ใช้งานหรือรหัสผ่านไม่ถูกต้อง</p>";
                        }else{
                           echo "<br><br><br>";
                        }
                     ?>
                     <div class="wrap">
                        <button class="button">เข้าสู่ระบบ</button>
                     </div>
                     <br><br>
                     <div>
                        <p class="font">ยังไม่สมัครสมาชิกใช่ไหม?  <a href="./register.php">สมัครสมาชิก</a></p>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>