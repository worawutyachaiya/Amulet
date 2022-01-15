<?php 
    session_start();
    include('server.php'); 
    if(!isset($_SESSION['username'])){
        header("location:login.php");
    }
    if(!isset($_SESSION['buy'])){
        header("location:cart.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> <link rel="stylesheet" href="main.css"> <link rel="icon" type="image/png" href="image/logo.png"/>
</head>
<body class="body_buy">
    <div class="thanks">
        <div class="title">Thank you.🙏</div>
        <div class="content">เราได้บันทึกการสั่งซื้อของท่านไว้แล้วท่านจะได้รับของภายใน 4-5 วันทำการ...<a link href="firstpage.php?back_buy=<?php echo $_SESSION['buy']; ?>">กลับหน้าแรก</a></div>
    </div>
</body>
</html>