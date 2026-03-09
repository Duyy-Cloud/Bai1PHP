<?php
session_start();

if(isset($_SESSION["username"]) || isset($_COOKIE["username"])){
header("Location: product.php");
exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>

<body>

<h2>Login</h2>

<form action="process_login.php" method="post">

Username:
<input type="text" name="username" required>
<br><br>

Password:
<input type="password" name="password" required>
<br><br>

<input type="checkbox" name="remember"> Remember me

<br><br>

<button type="submit">Login</button>

</form>

<br>

<a href="register.php">Register</a>

</body>
</html>