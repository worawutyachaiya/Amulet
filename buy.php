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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy</title> <link rel="stylesheet" href="main.css"> <link rel="icon" type="image/png" href="image/logo.png"/>
</head>
<body class="body_buy">
        <div class="container_buy">
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
                <li class="m3"><a href="about.php#about">About</a></li>
                <li>|</li>
                <li class="m3"><a href="#contact">Contact</a></li>
            </ul>
        </div>
            <div class="content">
                
                <div class="title">สั่งซื้อ(Buy)</div>
                <form action="buy_db.php" method="post">
                    <div class="input_buy">
                    <span>รหัสวัตถุมงคล(Code)</span>
                    <input type="text"required name="code">
                    <span>ชื่อ(First name)</span>
                    <input type="text"required name="firstname">
                    <span>สกุล(Last name)</span>
                    <input type="text"required name="lastname">
                    <span>ที่อยู่จัดส่ง(Address)</span>
                    <input type="text"required name="address">
                    <span>หมายเลขโทรศัพท์(Phone number)</span>
                    <input type="tel" pattern="{1}[0]{9}[0-9]" required name="phone">
                    </div>
                    <span>วันที่สั่งซื้อ(Date)</span>
                    <input type="date"required name="date">
                    <div class="warning">*การสั่งซื้อเป็นแบบชำระเงินปลายทาง*</div>
                    <div class="submit">
                    <input onclick="areyousure()" type="submit" value="สั่งซื้อ(Confirm)" name="buy_items">
                    <input type="reset" value="ล้างข้อมูล(Clear)">
                    </div>
                </form>
            </div>
        </div>
    <div id="buy"></div>


        <script src="script.js"></script>
        <script></script>
</body>
</html>