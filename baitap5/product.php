<div style="display:flex;gap:20px;padding:30px;justify-content:center;flex-wrap:wrap;">

<?php foreach($products as $p){ ?>

<div style="background:white;width:220px;text-align:center;border-radius:6px;box-shadow:0 0 5px rgba(0,0,0,0.1);">

<img src="<?php echo $p['img']; ?>" style="width:100%;">

<h3><?php echo $p['name']; ?></h3>

<?php if($p['old_price'] != ""){ ?>
<div style="text-decoration:line-through;color:gray;">
<?php echo $p['old_price']; ?>
</div>
<?php } ?>

<div style="color:red;font-weight:bold;">
<?php echo $p['price']; ?>
</div>

<button>View</button>
<button>Add to list</button>

</div>

<?php } ?>

</div>