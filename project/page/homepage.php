<?php include "../php/connect.php"?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../CSS/homepage.css">
        <script src="../js/search.js"></script>
    </head>
    <body onload="send4()">
        <div class="head">
            <a class="navbar-brand" href="homepage.php"><img src="../image/Logo.png" alt="image">
         </div>
        <nav class="slidemenu">
            
            <!-- Item 1 -->
            <input type="radio" name="slideItem" id="slide-item-1" class="slide-toggle" checked/>
            <label><img class="icon" src="../image/หน้าหลัก.png" onmousemove="send4()"><span>หน้าหลัก</span></label>
            
            <!-- Item 2 -->
            <input type="radio" name="slideItem" id="slide-item-2" class="slide-toggle"/>
            <label><img class="icon" src="../image/อาหาร.png" onmousemove="send5()"><span>อาหาร</span></label>
            
            <!-- Item 3 -->
            <input type="radio" name="slideItem" id="slide-item-3" class="slide-toggle"/>
            <label><img class="icon" src="../image/เครื่องดื่ม.png" onmousemove="send6()"><span>เครื่องดื่ม</span></label>
            
            <!-- Item 4 -->
            <input type="radio" name="slideItem" id="slide-item-4" class="slide-toggle"/>
            <label ><img class="icon" src="../image/ของหวาน.png" onmousemove="send7()"><span>ของหวาน</span></label>
            
            <!-- Item 5 -->
            <input type="radio" name="slideItem" id="slide-item-5" class="slide-toggle"/>
            <a href="./register.php" ><label ><img class="icon" src="../image/สมัครสมาชิก.png"><span>สมัครสมาชิก</span></label></a>
            
            <!-- Item 6 -->
            <input type="radio" name="slideItem" id="slide-item-6" class="slide-toggle"/>
            <a href="./login.php" ><label><img class="icon" src="../image/เข้าสู่ระบบ.png"><span>เข้าสู่ระบบ</span></label></a>
            
            <div class="clear"></div>
            
            <!-- Bar -->
            <div class="slider">
              <div class="bar"></div>
            </div>
   
        </nav>
        <div id="result"></div>
    </body>
</html>