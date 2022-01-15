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
    <title>C01</title> <link rel="stylesheet" href="main.css"> <link rel="icon" type="image/png" href="image/logo.png"/>
</head>
<body class="body_list">
<div id="backtop"></div>
    <div class="container_list">
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
                <li class="m1"><a href="firstpage.php">กลับหน้าแรก</a></li>
                <li>|</li>
                <li class="m1"><a href="firstpage.php#howtobuy">วิธีเช่าบูชา</a></li>
                <li>|</li>
                <li class="m2"><a href="firstpage.php#shop">เลือกซื้อ</a></li>
                <li>|</li>
                <li class="m3"><a href="about.php#about">About</a></li>
                <li>|</li>
                <li class="m3"><a href="firstpage.php#contact">Contact</a></li>
            </ul>
        </div>
        <div class="content_list">
            <div class="picture">
                <img src="image/list/c01.png" alt="">
                <img src="image/list/c01-b.png" alt="">
            </div>
            <div class="details">
                <div class="code">Code : <span>C01</span></div>
                <div class="name">หลวงปู่หลิว ปณุณโก รุ่น ปลดหนี้ ปี 2536</div>
                <div class="content">
                    เนื้อ : <span>ทองแดง</span><br>
                    ลงยา : <span>-</span><br>
                    ชนิดวัตถุมงคล : <span>เหรียญ</span><br>
                    ปลุกเสก : <span>วัดไร่แตงทอง อำเภอกำแพงแสน จังหวัดนครปฐม</span><br>
                    จำนวนการจัดสร้าง : <span>7,999 เหรียญ</span><br>
                    หมายเลข : <span>-</span><br>
                    สภาพ : <span>80%</span>
                    <div class="price">ราคา : <span>3,000</span> บาท</div>    
                    <div class="addtocart">
                    <button onclick="window.location.href='cart.php?addtocart=29'">Add to cart</button> 
                    </div>
                </div>
            </div>
            <div class="history">
                <p>ประวัติหลวงปู่หลิว</p>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/yD_wejOJjgk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="backtop">
            <button onclick="window.location.href='#backtop'">>กลับขึ้นด้านบน<</button>
            </div>
        </div>
    </div>
</body>
</html>