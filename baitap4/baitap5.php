<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart</title>
</head>
<body>

<?php

$cart = [
    ["id"=>1,"name"=>"Vegetable 1","price"=>150000,"quantity"=>2],
    ["id"=>2,"name"=>"Vegetable 2","price"=>180000,"quantity"=>3],
    ["id"=>3,"name"=>"Vegetable 3","price"=>100000,"quantity"=>5],
    ["id"=>4,"name"=>"Vegetable 4","price"=>120000,"quantity"=>9]
];

$total_quantity = 0;
$total_price = 0;

?>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Sub Total</th>
    </tr>

<?php foreach($cart as $item): 
    $sub_total = $item['price'] * $item['quantity'];
    $total_quantity += $item['quantity'];
    $total_price += $sub_total;
?>

<tr>
    <td><?php echo $item['id']; ?></td>
    <td><img src="images/image.jpg" width="50"></td>
    <td><?php echo $item['name']; ?></td>
    <td><?php echo number_format($item['price']); ?> đ</td>
    <td><?php echo $item['quantity']; ?></td>
    <td><?php echo number_format($sub_total); ?> đ</td>
</tr>

<?php endforeach; ?>

<tr>
    <td colspan="4"><b>Total quantity</b></td>
    <td colspan="2"><?php echo $total_quantity; ?></td>
</tr>

<tr>
    <td colspan="4"><b>Total price</b></td>
    <td colspan="2"><?php echo number_format($total_price); ?> đ</td>
</tr>

</table>

</body>
</html>