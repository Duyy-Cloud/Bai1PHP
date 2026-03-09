<?php
session_start();

$username = $_POST["username"];
$password = $_POST["password"];

$file = "users.txt";

$data = $username . "|" . $password . "\n";

file_put_contents($file,$data,FILE_APPEND);

header("Location: login.php");
exit();
?>