<!DOCTYPE html>
<html>
    <?php session_start(); ?>
    <head>
        <meta charset="utf-8">
        <?php include "../php/cal.php"?>
        <link rel="stylesheet" href="../css/profile.css">
        <link rel="stylesheet" href="../css/button3.css">
        <link rel="stylesheet" href="../css/table.css">
        <script src="../js/search.js"></script>
    </head>
    <body onload="send13()">
            <div class="box-left">
                <nav class="slidemenu">
                
                    <!-- Item 1 -->
                    <input type="radio" name="slideItem" id="slide-item-1" class="slide-toggle" checked/>
                    <label><img class="icon" src="../image/หน้าหลัก.png" onclick="send9()"><span>หน้าหลัก</span></label>
                    
                    <!-- Item 2 -->
                    <input type="radio" name="slideItem" id="slide-item-2" class="slide-toggle"/>
                    <label><img class="icon" src="../image/อาหาร.png" onclick="send10()"><span>อาหาร</span></label>
                    
                    <!-- Item 3 -->
                    <input type="radio" name="slideItem" id="slide-item-3" class="slide-toggle"/>
                    <label><img class="icon" src="../image/เครื่องดื่ม.png" onclick="send11()"><span>เครื่องดื่ม</span></label>
                    
                    <!-- Item 4 -->
                    <input type="radio" name="slideItem" id="slide-item-4" class="slide-toggle"/>
                    <label ><img class="icon" src="../image/ของหวาน.png" onclick="send12()"><span>ของหวาน</span></label>
                    
                    <div class="clear"></div>
                
                </nav>
                    <div id="result" class="scroll"></div>
            </div>
            <div class="box-right">
                <div class="user">
                    <img src="../image/Logo.png" alt="image">
                    <p> คุณ <?=$_SESSION["name"]?> <?=$_SESSION["sname"]?> <a href="../page/EditUser.php">(แก้ไข)</a></p>
                    <form action="../php/logout.php" method="post">
                        <div class="wrap">
                           <button class="button">ล็อกเอาท์</button>
                        </div>
                     </form>
                </div>
                <div class="cart">
                    <h2>รายการสินค้าที่เลือก</h2>
                    <div class="tbl-header">
                        <table cellpadding="0" cellspacing="0" border="0">
                            <thead>
                                <tr>
                                    <th>รายการ</th>
                                    <th>จำนวน</th>
                                    <th>ราคา</th>
                                    <th>ยกเลิก</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="tbl-content">
                        <table cellpadding="0" cellspacing="0" border="0">
                            <tbody>
                                <div id="result3"></div>
                            </tbody>
                        </table>
                    </div>
                    <div id="result4"></div>
                    <form action="../php/addhis.php">
                        <div class="wrap">
                           <button class="button" onclick="return confirm('ต้องการสั่งซื้อรายการทั้งหมดนี้ใช่หรือไม่')" >ยืนยัน</button>
                        </div>
                    </form>
                </div>
            </div>
        <div class="history-box">
            <h1>ประวัติการสั่งซื้อ</h1>
            <br>
            <div id="result2"></div>
            <br><br>
            <div class="wrap">
                    <button class="button" onclick="send8()">ดูประวัติการสั่งซื้อ</button>
            </div>
        </div>
    </body>
</html>