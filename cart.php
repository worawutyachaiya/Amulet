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
            <div class="cart">
                <div class="topic">
                    ตะกร้า(Cart)
                </div>
                <div class="myorder"><a href="my_orders.php">ประวัติการสั่งซื้อ</a></div>
                <?php 
				if (isset($_GET['addtocart'])) {
					$product_id = $_GET['addtocart'];

					if (isset($_SESSION['cart'][$product_id])) {
						$_SESSION['cart'][$product_id]++;
					} else {
						$_SESSION['cart'][$product_id] = 1;
					}
				} 
				if (isset($_GET['remove'])) {
					$product_id = $_GET['remove'];
					unset($_SESSION['cart'][$product_id]);
				}
				if (isset($_GET['update'])) {
					$amount_array = $_POST['amount'];
					foreach($amount_array as $product_id => $amount) {
						$_SESSION['cart'][$product_id] = $amount;
					}
				}
			?>
                <form action="?update" method="post" name="cart">
                        <table width="100%" border="" style="border:none;">
                                <tr>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>quantity</th>
                                    <th>total</th>
                                    <th>Cancel</td>
                                </tr>
                                <?php 
                                        $total = 0;
                                        if (!empty($_SESSION['cart'])) {
                                    foreach ($_SESSION['cart'] as $product_id => $qty) {
                                        $sql = "SELECT * FROM products WHERE product_id = $product_id";
                                        $query = mysqli_query($conn, $sql);
                                        $row = mysqli_fetch_assoc($query);
                                        $sum = $row['price'] * $qty;
                                        $total += $sum;
                                ?>
                                <tr>
                                    <td><?php echo $row['product_name'];?></td>
                                    <td><?php echo number_format($row['price'],2);?></td>
                                    <td><input type="number" name="amount[<?php echo $product_id; ?>]" value="<?php echo $qty; ?>"></td>
                                    <td><?php echo number_format($sum,2) ?></td>
                                    <td><a href="cart.php?remove=<?php echo $product_id; ?>">Delete</a></td>
                                </tr>
                                <?php } ?>
                                <tr>
                                    <td colspan="3">ราคารวม</td>
                                    <td><?php echo number_format($total,2); ?></td>
                                </tr>
                                <tr align="center">
                                    <td align="left" colspan="3">
                                        <a href="firstpage.php#shop">กลับไปเลือกซื้อ</a>
                                    </td>
                                    <td>
                                        <input type="submit" name="button" value="Edit">
                                    </td>   
                                    <td>
                                        <input type="button" value="Confirm" onclick="window.location='confirm.php#confirm'">
                                    </td>
                                </tr>
                                <?php } ?>
                        </table>
                </form>
            </div>
        </div>
</body>
</html>