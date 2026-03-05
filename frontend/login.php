<?php

$Employee = [
    "NguyenVan_An" => "abc123",
    "Tran_Thi_Bich" => "B715",
    "Le_Van_Cuong" => "C_lo_vo_92",
    "Pham_Thi_Dung" => "De_PT_68",
    "Doan_Van_Em" => "E_v58"
];

function _login($username, $pass, $Employee)
{
    if (array_key_exists($username, $Employee)) {
        if ($Employee[$username] === $pass) {
            return "success";
        } else {
            return "wrong_password";
        }
    } else {
        return "wrong_username";
    }
}

$message = "";
$color = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = isset($_POST["username"]) ? trim($_POST["username"]) : "";
    $pass = isset($_POST["password"]) ? trim($_POST["password"]) : "";

    $result = _login($username, $pass, $Employee);

    if ($result === "success") {
        $message = "Đăng nhập thành công!";
        $color = "green";
    } else {
        $message = "Sai username hoặc password!";
        $color = "red";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

<h2>Login user Form </h2>

<form method="post">
    Username:
    <input type="text" name="username" required><br><br>

    Password:
    <input type="password" name="password" required><br><br>

    <input type="submit" value="Login">
</form>

<?php
if ($message != "") {
    echo "<h3 style='color:$color'>$message</h3>";
}
?>

</body>
</html>