<?php 
    session_start();
    include('server.php');
    if (isset($_SESSION['login_seccess'])){
        header('location:firstpage.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=">
    <link rel="stylesheet" href="main.css">
    <title>Login</title> <link rel="icon" type="image/png" href="image/logo.png"/>
</head>
<body class="middle">
    <div class="container_log">
        <h3>Login</h3>
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
            </div>
        <?php endif ?>
        <form action="login_db.php" method="post">
            <div class="data">
            <input type="text" placeholder="Username" name="username" autofocus>
            <input type="password" placeholder="Password" name="password">
            </div>
            <div class="submit">
            <input type="submit" value="Login" name="login_user">
            </div>
        </form>
        <div class="areyou">
        <p>You don't have an account?...<a href="register.php">Register</a></p>
        </div>
    </div>
</body>
</html>