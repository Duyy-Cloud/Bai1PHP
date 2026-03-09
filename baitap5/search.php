<?php

$cities = ["Hà Nội","Đà Nẵng","Nha Trang","Sapa","Đà Lạt","Phú Quốc"];
$districts = ["Quận 1","Quận 2","Quận 3","Quận 7","Ba Đình","Hải Châu"];
$types = ["Villa","Hotel","Apartment","Resort","Homestay","Bungalow"];

shuffle($cities);
shuffle($districts);
shuffle($types);

?>

<div class="search">

<select>
<?php foreach($cities as $c){ ?>
<option><?php echo $c; ?></option>
<?php } ?>
</select>

<select>
<?php foreach($districts as $d){ ?>
<option><?php echo $d; ?></option>
<?php } ?>
</select>

<select>
<?php foreach($types as $t){ ?>
<option><?php echo $t; ?></option>
<?php } ?>
</select>

<button>Tìm kiếm</button>

</div>

<style>

.search{
background:white;
padding:25px;
text-align:center;
}

.search select{
padding:10px;
margin:8px;
width:200px;
}

.search button{
padding:10px 20px;
background:#007bff;
color:white;
border:none;
cursor:pointer;
}

</style>