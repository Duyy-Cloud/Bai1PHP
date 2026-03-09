<?php
session_start();

include "users.php";

$username = $_POST["username"];
$password = $_POST["password"];

if(isset($users[$username]) && $users[$username] == $password){

$_SESSION["username"] = $username;

if(isset($_POST["remember"])){
setcookie("username",$username,time()+3600);
}

header("Location: product.php");
exit();

}else{

echo "Login failed";
echo "<br><a href='login.php'>Try again</a>";

}
?>