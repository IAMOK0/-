<!DOCTYPE html>
<?php include '../php/connect.php'?>
<html>
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="../css/adminpage.css">
      <link rel="stylesheet" href="../css/button.css">
      <link rel="stylesheet" href="../css/table.css">
      <script src="../js/search.js"></script>
   </head>
   <body onload="send()">
      <div class="container">
         <div class="signup-content">
            <section>
               <img src="../image/Logo.png" alt="image">
               <h1>ตาราง History</h1>
               <input type="text" id="keyword" onkeyup="send()" placeholder="กรอกรหัสผู้ใช้งาน">
               <br><br>
                  <div class="tbl-header">
                     <table cellpadding="0" cellspacing="0" border="0">
                        <thead>
                        <tr>
                           <th>รหัสผู้ใช้งาน</th>
                           <th>ชื่อสินค้า</th>
                           <th>จำนวนสินค้า</th>
                           <th>ราคารวมสินค้า</th>
                           <th>เวลาที่ซื้อ</th>
                        </tr>
                        </thead>
                     </table>
                  </div>
                  <div class="tbl-content">
                     <table cellpadding="0" cellspacing="0" border="0">
                        <tbody>
                           <div id="result"></div>
                        </tbody>
                     </table>
                  </div>
               <h1>ตาราง User</h1>
               <input type="text" id="keyword2" onkeyup="send()" placeholder="กรอกชื่อผู้ใช้งาน">
               <br><br>   
                  <div class="tbl-header">
                     <table cellpadding="0" cellspacing="0" border="0">
                        <thead>
                        <tr>
                           <th>รหัสผู้ใช้งาน</th>
                           <th>ชื่อผู้ใช้งาน</th>
                           <th>ชื่อจริง</th>
                           <th>นามสกุล</th>
                           <th>เบอร์โทรศัพท์</th>
                        </tr>
                        </thead>
                     </table>
                  </div>
                  <div class="tbl-content">
                     <table cellpadding="0" cellspacing="0" border="0">
                        <tbody>
                           <div id="result2"></div>
                        </tbody>
                     </table>
                  </div>
                  <h1>ตาราง Product</h1>
               <input type="text" id="keyword3" onkeyup="send()" placeholder="กรอกประเภทสินค้า">
               <br><br>   
                  <div class="tbl-header">
                     <table cellpadding="0" cellspacing="0" border="0">
                        <thead>
                        <tr>
                           <th>รหัสสินค้า</th>
                           <th>ชื่อสินค้า</th>
                           <th>ราคาสินค้า</th>
                           <th>ประเภทสินค้า</th>
                        </tr>
                        </thead>
                     </table>
                  </div>
                  <div class="tbl-content">
                     <table cellpadding="0" cellspacing="0" border="0">
                        <tbody>
                           <div id="result3" onload="send3()"></div>
                        </tbody>
                     </table>
                  </div> 
                  <br><br>                
                  <div>
                     <form action="../php/logout.php" method="post">
                        <div class="wrap">
                           <button class="button">ล็อกเอาท์</button>
                        </div>
                     </form>
                  </div>
            </section>
         </div>
      </div>
   </body>
</html>