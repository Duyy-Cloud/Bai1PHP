<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
    <style>
        .product {
            width: 200px;
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
            float: left;
            margin: 10px;
        }
        .old-price {
            text-decoration: line-through;
            color: gray;
        }
        .sale-price {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php

$products = [
    ["name"=>"Vegetable 1","price"=>150000,"sale_price"=>0,"image"=>"images/.jpg"],
    ["name"=>"Vegetable 2","price"=>180000,"sale_price"=>160000,"image"=>"images/.jpg"],
    ["name"=>"Vegetable 3","price"=>100000,"sale_price"=>90000,"image"=>"images/.jpg"],
    ["name"=>"Vegetable 4","price"=>120000,"sale_price"=>0,"image"=>"images/.jpg"]
];

foreach($products as $p){
?>

<div class="product">
    <img src="images/image.jpg" width="150"><br><br>

    <b><?php echo $p['name']; ?></b><br><br>

    <?php if($p['sale_price'] == 0){ ?>
        <span><?= number_format($p['price']) ?> đ</span>
    <?php } else { ?>
        <span class="old-price"><?= number_format($p['price']) ?> đ</span><br>
        <span class="sale-price"><?= number_format($p['sale_price']) ?> đ</span>
    <?php } ?>

</div>

<?php } ?>

</body>
</html>