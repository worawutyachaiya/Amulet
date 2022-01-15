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
                    <li>|</li>
                    <li class="m2"><a href="buy.php">เช่าบูชา</a></li>
                </ul>
            </div>
            <div class="headshop" id="headshop"></div>
            <div class="cart">
                <div class="topic">
                    ตะกร้า(Cart)
                </div>
                <form action="saveorder.php" method="post">
                        <table width="100%" border="" style="border: none;">
                                <tr>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>quantity</th>
                                    <th>total</th>
                                </tr>
                                    <?php 
                                        $total = 0;
                                        if(!empty($_SESSION['cart'])){
                                            foreach($_SESSION['cart'] as $product_id => $qty){
                                                $sql = "SELECT * FROM products WHERE product_id = $product_id";
                                                $query = mysqli_query($conn, $sql);
                                                $row = mysqli_fetch_assoc($query);
                                                $sum = $row['price'] * $qty;
                                                $total += $sum;
                                    ?>
                                <tr>
                                    <td><?php echo $row['product_name'];?></td>
                                    <td><?php echo number_format($row['price'],2);?></td>
                                    <td><?php echo $qty; ?></td>
                                    <td><?php echo number_format($sum,2) ?></td>
                                </tr>
                                <?php } ?>
                                <tr>
                                    <td colspan="3">ราคารวม</td>
                                    <td><?php echo number_format($total,2); ?></td>
                                </tr>
                                <?php } ?>
                        </table>
                        <br>
                        <table>
                            <?php 
                                $query = "SELECT * FROM users WHERE username = '".$_SESSION['username']."'" ;
                                $result = mysqli_query($conn, $query);
                                $row = mysqli_fetch_assoc($result);
                            ?>
                            <tr><th><span>รายละเอียดการส่งสินค้า</span></th></tr>
                            <input type="hidden" name="cust_name" value="<?php echo $row['username']; ?>">
                            <input type="hidden" name="total" value="<?php echo $total; ?>">
                            <tr>
                                <td>Full name</td>
                                <td><input type="text" name="name" placeholder="ชื่อ-สกุล" required></td>
                            </tr>
                            <tr>
                                <td>Phone number</td>
                                <td><input type="text" name="phone" placeholder="เบอร์โทรศัพท์" required></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input type="text" name="email" placeholder="อีเมล"></td required>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td><textarea name="address" placeholder="ที่อยู่" required></textarea></td>
                            </tr>
                            <tr>
                                <td colspan="2"><input type="submit" name="save_order" value="Confirm"></td>
                            </tr>
                        </table>
                </form>
            </div>
        </div>
        <div id="confirm"></div>
</body>
</html>