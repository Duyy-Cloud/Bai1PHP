<!DOCTYPE html>
<html>
<head>
    <title>Images Table</title>
</head>
<body>

<h2>Image Table</h2>

<table border="1" cellspacing="0" cellpadding="10">
    <tr>
        <th>Nr</th>
        <th>Image</th>
        <th>Name</th>
    </tr>

<?php
for($i = 1; $i <= 6; $i++) {
?>
    <tr>
        <td><?php echo $i; ?></td>
        <td>
            <img src="https://picsum.photos/100?random=<?php echo $i; ?>">
        </td>
        <td>Image <?php echo $i; ?></td>
    </tr>
<?php
}
?>

</table>

</body>
</html>