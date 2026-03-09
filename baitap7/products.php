<?php

$laptops = [
["name"=>"ASUS TUF Gaming","price"=>"$899","img"=>"https://images.unsplash.com/photo-1517336714731-489689fd1ca8"],
["name"=>"Acer Nitro 5","price"=>"$799","img"=>"https://images.unsplash.com/photo-1588872657578-7efd1f1555ed"],
["name"=>"MSI Gaming","price"=>"$999","img"=>"https://images.unsplash.com/photo-1593642634443-44adaa06623a"],
["name"=>"MacBook Pro","price"=>"$1499","img"=>"https://images.unsplash.com/photo-1515879218367-8466d910aaa4"],
["name"=>"ASUS ROG","price"=>"$1199","img"=>"https://images.unsplash.com/photo-1518770660439-4636190af475"],
["name"=>"Dell XPS","price"=>"$1299","img"=>"https://images.unsplash.com/photo-1496181133206-80ce9b88a853"],
["name"=>"HP Pavilion","price"=>"$699","img"=>"https://images.unsplash.com/photo-1511385348-a52b4a160dc2"],
["name"=>"Lenovo Legion","price"=>"$1099","img"=>"https://images.unsplash.com/photo-1519389950473-47ba0277781c"]
];

shuffle($laptops);

echo '<div class="products">';

foreach($laptops as $lap){

echo '
<div class="card">
<img src="'.$lap["img"].'">
<h4>'.$lap["name"].'</h4>
<p class="price">'.$lap["price"].'</p>
</div>
';

}

echo '</div>';

?>