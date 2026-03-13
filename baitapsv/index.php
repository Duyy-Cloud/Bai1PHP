<?php  
require 'person.php';


$person = null; 
// $person2 = null; 
$message = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        //lay du lieu tu form
        $name = htmlspecialchars($_POST["name"]);
        $age = intval($_POST["age"]);
        $email = htmlspecialchars($_POST["email"]);

        // kiem tra du lieu dau vao 
        if (empty($name) || empty($email) || $age <= 0) {
            throw new Exception("vui long nhap day du va chinh xac thong tin.");
        }

        // tao doi tuong person
        $person = new Person($name, $age, $email);

        $message = "Thong tin da duoc luu thanh cong!";
    } catch (Exception $e) {
        $message = "Loi: " . $e->getMessage();
    }
}
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quan ly thon tin ca nhan</title>
 </head>

 <body>
    
    <h1>Nhap Thong tin ca nhan</h1>
    <form method="POST" action="">
        <label for ="name">Ho va ten:</label><br>
        <input type="text" id="name" name="name" value="<?= isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '' ?>"require><br><br>

        <label for="age">Tuoi:</label><br>
        <input type="number" id="age" name="age" value="<?= isset($_POST['age']) ? intval($_POST['age']) : '' ?>" require><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>" require><br><br>

        <button type="submit">Luu Thong tin</button>
    </form>

    <hr> 

<!-- Hien thi thong tin da luu neu co -->
    <p style="color: <?= strpos($message, "Loi") === false ? "green" : "red" ?>;">
        <?= htmlspecialchars($message) ?>
    </p>



    <!-- hien thi thong tin nguoi dung tu object person --> 
     <?php if ($person): ?> 
        <h2>Thong thin da nhap</h2>
        <p><strong>Ho va ten:</strong> <?= htmlspecialchars($person->getName()) ?></p>
        <p><strong>Tuoi:</strong> <?= htmlspecialchars($person->getAge()) ?></p>
        <p><strong>Email:</strong> <?= htmlspecialchars($person->getEmail()) ?></p>
    <?php endif; ?>
 </body>
 </html>