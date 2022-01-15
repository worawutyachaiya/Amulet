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
    <title>Amulet thailand official</title> <link rel="stylesheet" href="main.css">
    <link rel="icon" href="image/logo.png">
</head>
<body style="padding-bottom: 2rem;">
        <div class="container">
            <div class="header">
                <div class="header1">
                    <a href="firstpage.php"><img src="image/logoindex.png" alt=""></a>
                    <ul class="topright">
                        <li class="l1"><a href="firstpage.php#contact">Contact</a></li>
                        <li>|</li>
                        <li class="l2"><a href="about.php#about">About</a></li>
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
                    <li class="m3"><a href="firstpage.php#shop">เลือกซื้อ</a></li>
                </ul>
            </div>
            <div class="headshop" id="headshop"></div>
            <div class="myorders">
                <div class="topic">
                    ประวัติการสั่งซื้อ(History)
                </div>
                <?php   $query = "SELECT * FROM orders WHERE cust_name = '".$_SESSION['username']."'"; 
                        $result = mysqli_query($conn, $query);
                ?>
                <table width="100%">
                    <tr>
                        <th>ID สินค้า</th>
                        <th>วันที่สั่ง</th>
                        <th>ชื่อผู้สั่ง</th>
                        <th>อีเมล</th>
                        <th>เบอร์โทรศัพท์</th>
                        <th>ที่อยู่</th>
                        <th>ยอดรวม</th>
                    </tr>   
                    <?php while($row = mysqli_fetch_assoc($result)){ ?>
                    <tr>
                        <td><?php echo $row['order_id']; ?></td>
                        <td><?php echo $row['order_date']; ?></td>
                        <td><?php echo $row['order_name']; ?></td>
                        <td><?php echo $row['order_email']; ?></td>
                        <td><?php echo $row['order_phone']; ?></td>
                        <td><?php echo $row['order_address']; ?></td>
                        <td><?php echo $row['total']; ?></td>
                    </tr>
                    <?php } ?>
                </table>

            </div>
        </div>
</body>
</html>