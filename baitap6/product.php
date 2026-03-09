<?php 
include 'header.php';

$products = include 'data/product-data.php';
?>

<div class="row">

<?php foreach($products as $pro) : ?>

<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">

<div class="thumbnail">

<img src="images/<?php echo $pro['image']; ?>" alt="">

<div class="caption text-center">

<h3><?php echo $pro['name']; ?></h3>

<p>
<b>Giá: <?php echo number_format($pro['price']); ?> đ</b>
</p>

<p>
<a href="#" class="btn btn-xs btn-primary">View</a>
<a href="#" class="btn btn-xs btn-default">Add to Cart</a>
</p>

</div>
</div>

</div>

<?php endforeach; ?>

</div>

<?php include 'footer.php'; ?>