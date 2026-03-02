
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>non</title>
</head>

<body>
    <form method="post">
        <h3> Moi nhap lai so</h3>
        <label>So a</label>
        <input type="number" name="s1" required><br><br>
        <label>So b</label>
        <input type="number" name="s2" required><br><br>

        <p>1. cong 2 so</p>
        <p>2. Tru 2 so</p>
        <p>3. Nhan 2 so</p>
        <p>4. Chia 2 so</p>

        <label> moi chon</label><br>
        <input type="number" name="chon"><br><br>
        <input type="submit" name="submit" value="Quat"><br> 
    </form>
<?php
If($_SERVER["REQUEST_METHOD"] == "POST")
{
    $choice = is_numeric(value: $_POST["chon"]) ? (int)$_POST["chon"] : "khong hop le";
    $a = is_numeric(value: $_POST["s1"]) ? (int)$_POST["s1"] : "khong hop le";
    $b = is_numeric(value: $_POST["s2"]) ? (int)$_POST["s2"] : "khong hop le";
}
     echo "<div class='result'>";
        switch($choice){
            case 1:
                $kqua = $a + $b;
                echo "Ket qua: $kqua";
                break;
            case 2:
                $kqua = $a - $b;
                echo "Ket qua: $kqua";
                break;
            case 3:
                $kqua = $a * $b;
                echo "Ket qua: $kqua";
                break;
            case 4:
                $kqua = $a / $b;
                echo "Ket qua: $kqua";
                break;
            default:
                echo "chi chon tu 1 den 4";
                break;

        }
        echo "</div>";

?>
</body>

</html>
