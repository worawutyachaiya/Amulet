<?php 
    session_start();
    include('server.php'); 
    if(isset($_SESSION['login_seccess'])){
        header('location:firstpage.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=">
    <link rel="stylesheet" href="main.css">
    <title>Register</title> <link rel="icon" type="image/png" href="image/logo.png"/>
</head>
<body class="middle">
    <div class="container_reg">
        <h3>Register</h3>
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
            </div>
        <?php endif ?>
        <form action="register_db.php" method="post">
            <div class="data">
            <input type="text" placeholder="Username" name="username" autofocus>
            <input type="password" placeholder="Password" name="password_1">
            <input type="password" placeholder="Confirm password" name="password_2">
            <input type="email" placeholder="Email" name="email">
            </div>
            <div class="submit">
            <input type="submit" value="Register" name="reg_user">
            </div>
        </form>
            <div class="areyou">
            <p>You already have an account?...<a href="login.php">Login</a></p>
            </div>
    </div>
</body>
</html>