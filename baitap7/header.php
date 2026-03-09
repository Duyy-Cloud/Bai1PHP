<!DOCTYPE html>
<html>
<head>
<title>Demo Shop </title>
<style>
body{
font-family: Arial;
background:#f5f5f5;
margin:0;
}

.banner{
width:100%;
height:220px;
background:url("https://images.unsplash.com/photo-1517336714731-489689fd1ca8") center/cover;
display:flex;
align-items:center;
justify-content:center;
color:white;
font-size:40px;
font-weight:bold;
}

.container{
width:1100px;
margin:auto;
}

.products{
display:grid;
grid-template-columns:repeat(4,1fr);
gap:20px;
margin-top:20px;
}

.card{
background:white;
padding:10px;
border-radius:8px;
text-align:center;
box-shadow:0 2px 5px rgba(0,0,0,0.1);
}

.card img{
width:100%;
height:150px;
object-fit:cover;
}

.price{
color:red;
font-weight:bold;
}

.menu{
background:#d70018;
color:white;
padding:10px;
text-align:center;
}

.menu a{
color:white;
margin:0 15px;
text-decoration:none;
font-weight:bold;
}

.footer{
background:#333;
color:white;
text-align:center;
padding:20px;
margin-top:30px;
}
</style>
</head>
<body>

<div class="banner">
Laptop Store
</div>

<div class="container">