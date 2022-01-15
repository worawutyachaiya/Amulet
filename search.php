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
    <title>Amulet thailand official</title>
    <link rel="stylesheet" href="main.css">
    <link rel="icon" href="image/logo.png">
</head>
<body>
    <div class="container_result">
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
        <div class="title_result">
                <?php if (isset($_GET['search_name'])){
                    $search_name = $_GET['search_name'];
                }
                echo "<span>ผลการค้นหา : </span>" . $search_name;
                ?>
                <form action="search.php" method="get">
                <input type="text" placeholder="Search"  name="search_name" required>
                <input type="submit" name="search_btn" value="Enter">
                </form>
        </div>
                

            <?php
            
            if(isset($_GET['search_name'])){
                $search_name = $_GET['search_name'];
                $query = "SELECT * FROM items WHERE name_db LIKE '%".$search_name."%'";
                $result = mysqli_query($conn, $query);
            
            
            ?>


        <div class="content">
            <?php

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){

            ?>
                    <div class="picture">
                        <img src="image/list/<?php echo $row['items_img']; ?>">
                        <p><?php echo $row['items_name']; ?><br>รุ่น <?php echo $row['items_gen'] ; ?><br><button class="c1"
                                onclick="window.location.href='<?php echo $row['items_link']; ?>'">View!</button></p>
                    </div>
                    
                    <?php }
                        }else{
                            echo "<span>ไม่มีสิ่งที่คุณตามหา! T^T</span>";
                        }
                    }
                    ?>

                </div>




        
    </div>
</body>
</html>