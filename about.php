<?php 
    session_start();
    include('server.php'); 
    if(!isset($_SESSION['username'])){
        header("location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel="stylesheet" href="main.css">
    <title>About</title> <link rel="icon" type="image/png" href="image/logo.png"/>
</head>
<body class="body_about">
    <div class="container_about">
    <div class="header">
            <div class="header1">
                <a href="firstpage.php"><img src="image/logoindex.png" alt=""></a>
                <ul class="topright">
                    <li class="l2"><a href="cart.php">ตะกร้าสินค้า</a></li>
                    <li>|</li>
                    <li class="l3"><a href="firstpage.php?logout=<?php echo $_SESSION['username']; ?>">Logout</a></li>
                    <li>|</li>
                    <li class="l4">Logged in : <span><?php echo $_SESSION['username']; ?></span></li>
                </ul>
            </div>
            <div class="header2">
                <img src="image/header.gif" alt="">
            </div>
            <ul class="menu">
                <li class="m1"><a href="#howtobuy">วิธีเช่าบูชา</a></li>
                <li>|</li>
                <li class="m2"><a href="#shop">เลือกซื้อ</a></li>
                <li>|</li>
                <li class="m3"><a href="firstpage.php">กลับหน้าแรก</a></li>
                <li>|</li>
                <li class="m3"><a href="firstpage.php#contact">Contact</a></li>
            </ul>
        </div>
    <div class="about">
            <div class="title">
            <img src="image/get.jpg" alt="">
            </div>
            <div class="content">
            <h3>Hi,i'm worawut</h3>
            <p>สวัสดีครับ ผม วรวุฒิ ยาชัยยะ หรือเกซ อายุ 18 ปี ปัจจุบันเรียนอยู่ที่ วิทยาลัยอาชีวศึกษาพระนครศรีอยุธยา เป็นผู้พัฒนาและดูแลเว็บไซต์นี้ครับผมมีความชื่นชมและหลงไหลในพระเครื่องเพราะนอกจากเป็นเครื่องยึดเหนี่ยวจิตใจแล้วยังสามารถเก็บสะสมเป็นทรัพย์สินของมีค่าได้อีกด้วยเพราะยิ่งเวลาผ่านไปนานวัตถุมงคลแต่ละรุ่นยิ่งหายากขึ้นทำให้ราคาสูงขึ้นเรื่อย ๆ นั้นเองครับ</p>
            <button class="button_contact" onclick="window.location.href='firstpage.php#contact'">Contact</button>
            </div>
    </div>
    <div id="about"></div>
    </div>
</body>
</html>