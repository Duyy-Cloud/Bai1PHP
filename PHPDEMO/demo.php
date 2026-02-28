<!DOCTYPE html>
<html>
<head>
    <title>Display Images</title>
</head>
<body>

<h2>Images</h2>

<?php for($i = 1; $i < 7; $i++) { ?>
    <img src="images/<?php echo $i; ?>.jpg" alt="" width="60">
<?php } ?>

</body>
</html>