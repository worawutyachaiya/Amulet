<?php
 include('server.php');
 session_start();
 $buy="thanks";
 if (isset($_POST['buy_items'])) {
    $code = mysqli_real_escape_string($conn, $_POST['code']);
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);

    $sql = "INSERT INTO buy (code, firstname, lastname, address, phone, date) VALUES ('$code', '$firstname', '$lastname', '$address', '$phone', '$date')";
    mysqli_query($conn, $sql);
    $_SESSION['buy'] = $buy;
    header('location: thanks.php');
 }
?>