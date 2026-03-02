<!DOCTYPE html>
<html>
<head>
    <title>Images With Modal</title>

    <style>
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.7);
            text-align: center;
        }

        .modal-content {
            margin-top: 100px;
        }

        .modal img {
            width: 400px;
        }

        .close {
            color: white;
            font-size: 25px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<h2>Images With View Button</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Image</th>
        <th>Name</th>
        <th>Action</th>
    </tr>

<?php for($i = 1; $i <= 6; $i++) { ?>
    <tr>
        <td><?= $i ?></td>
        <td>
            <img src="images/<?= $i ?>.jpg" width="60">
        </td>
        <td>Image <?= $i ?></td>
        <td>
            <button onclick="openModal(<?= $i ?>)">View</button>
        </td>
    </tr>
<?php } ?>

</table>

<?php for($i = 1; $i <= 6; $i++) { ?>
<div id="modal<?= $i ?>" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal(<?= $i ?>)">Close</span><br><br>
        <img src="images/<?= $i ?>.jpg">
    </div>
</div>
<?php } ?>

<script>
function openModal(id) {
    document.getElementById("modal" + id).style.display = "block";
}

function closeModal(id) {
    document.getElementById("modal" + id).style.display = "none";
}
</script>

</body>
</html>