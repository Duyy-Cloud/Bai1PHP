<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$name = "Nguyễn Huy Hoàng";
$age = 25;
$phone = "0986421127";
$email = "luongtvnsoft@gmail.com";
$address = "Số 7 - Mỹ Đình - Cầu Giấy - Hà Nội";

$first_name = "Nguyễn Huy";
$last_name = "Hoàng";
$full_name = $first_name . " " . $last_name;

$gender = 1;

$color = "blue";
$background = "red";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Session 1</title>
<style>
body{
    font-family: Arial;
    background:white;
    color:black;
}
table{
    border-collapse: collapse;
    margin-bottom: 30px;
}
td{
    border:1px solid #333;
    padding:8px 12px;
}
input[type=text]{
    width:250px;
    padding:5px;
}
</style>
</head>

<body>

<table>
<tr>
    <td>Name</td>
    <td><?php echo $name; ?></td>
</tr>
<tr>
    <td>Age</td>
    <td><?php echo $age; ?></td>
</tr>
<tr>
    <td>Phone</td>
    <td><?php echo $phone; ?></td>
</tr>
<tr>
    <td>Email</td>
    <td><?php echo $email; ?></td>
</tr>
<tr>
    <td>Address</td>
    <td><?php echo $address; ?></td>
</tr>
</table>

<table>
<tr>
    <td>Name</td>
    <td><input type="text" value="<?php echo $full_name; ?>"></td>
</tr>

<tr>
    <td>Age</td>
    <td><input type="text" value="<?php echo $age; ?>"></td>
</tr>

<tr>
    <td>Phone</td>
    <td><input type="text" value="<?php echo $phone; ?>"></td>
</tr>

<tr>
    <td>Email</td>
    <td><input type="text" value="<?php echo $email; ?>"></td>
</tr>

<tr>
    <td>Address</td>
    <td><input type="text" value="<?php echo $address; ?>"></td>
</tr>

<tr>
    <td>Gender</td>
    <td>
        <input type="radio" name="gender" value="1" <?php if($gender==1) echo "checked"; ?>> Nam
        <input type="radio" name="gender" value="0" <?php if($gender==0) echo "checked"; ?>> Nữ
    </td>
</tr>

<tr>
    <td>Avatar</td>
    <td>
        <img src="https://cdn-icons-png.flaticon.com/512/147/147144.png" width="70"><br><br>
        <input type="file">
    </td>
</tr>

<tr>
    <td colspan="2" align="center">
        <button>Update</button>
    </td>
</tr>

</table>

<div style="color: <?php echo $color; ?>; background: <?php echo $background; ?>; padding:15px; width:600px;">
Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus tenetur sint sapiente deleniti impedit accusamus incidunt, placeat dolorum culpa consequuntur odio, ad qui nulla recusandae! Sint temporibus fugiat autem repellat.
</div>

</body>
</html>