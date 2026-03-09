<?php
session_start();

if(!isset($_SESSION["username"]) && !isset($_COOKIE["username"])){

header("Location: login.php");
exit();

}

?>

<!DOCTYPE html>
<html>
<head>
<title>Products</title>
</head>

<body>

<h2>Product Page</h2>

<p>Welcome <?php echo $_SESSION["username"] ?? $_COOKIE["username"]; ?></p>

<ul>
<li>Laptop ASUS</li>
<li>Laptop MSI</li>
<li>Laptop Acer</li>
<li>Laptop Macbook</li>
</ul>

<a href="logout.php">Logout</a>

</body>
</html>