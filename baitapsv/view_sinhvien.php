<?php 
// them file chua class SinhVien. 

require_once 'sinhvien.php';

// tao mang object sinh vien mau (du liuue cung - hard-code)

$dsSinhVien = [
    new SinhVien("SV001", "Nguyen Van A", 20, "an.nguyen@exmaple.com","CNTT K65", 8.5, "Dang hoc"),
    new SinhVien("SV002", "Tran Thi B", 21, "binh.tran@example.com", "KT K65", 7.2, "Dang hoc"),
    new SinhVien("SV003", "Le Van C", 22, "cuong.le@exmaple.com", "QTKD K65", 9.1, "tot nghiep"),
    new SinhVien("SV004", "Pham Thi D", 19, "dung.pham@example.com", "CNTT K65", 6.8, "Dang hoc"),
    new SinhVien("SV005", "Hoang Van E", 23, "em.doan@exmaple.com", "KT K65", 5.4, "bao luu"),
   

    new SinhVien("SV006", "Nguyen Minh Hoang", 20, "hoang.nguyen@example.com", "IT K66", 8.0, "Studying"),
    new SinhVien("SV007", "Tran Quoc Bao", 21, "bao.tran@example.com", "Business K65", 7.8, "Studying"),
    new SinhVien("SV008", "Le Thi Mai", 19, "mai.le@example.com", "Marketing K67", 6.9, "Studying"),
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>xem thong tin sinh vien </title>
</head>
<body>
   <div class="container">
      <h2 class="text-center">Danh sach sinh vien</h2>

      <?php if (empty($dsSinhVien)): ?>
         <div class="alert alert-info" role="alert">
             hien chua co thing tin sinh vien nao.
         </div>
      <?php else: ?>
         <div class ="table responsive">
            <table class ="table table-bordered table-hover">
               <thead></thead>
                  <tr>
                     <th>Ma SV</th>
                     <th>Ho va ten</th>
                     <th>Tuoi</th>
                     <th>Email</th>
                     <th>Lop</th>
                     <th>Diem TB</th>
                     <th>Trang thai</th>
                     <th>Hoc luc</th>
                  </tr>
               </thead>
               <tbody>
                  <?php foreach ($dsSinhVien as $index => $sv): ?>
                     <tr> 
                        <td><?= htmlspecialchars($sv->getMaSV())?></td>
                        <td><?= htmlspecialchars($sv->getName())?></td>
                        <td><?= htmlspecialchars($sv->getAge()) ?></td>
                        <td><?= htmlspecialchars($sv->getEmail())?></td>
                        <td><?= htmlspecialchars($sv->getLop())?></td>
                        <td><?= number_format($sv->getDiemTB(), 1) ?></td>
                        <td><?= htmlspecialchars($sv->getHocLuc()) ?></td>
                        <?php $status = strtolower($sv->getTrangThai()); ?>
                        <td class="<?php
                              if ($status === 'dang hoc') echo 'status-dang-hoc';
                              elseif ($status === 'tot nghiep') echo 'status-tot-nghiep';
                              else echo 'status-bao-luu';
                        ?>">
                            <?= htmlspecialchars($sv->getTrangThai()) ?>
                        </td>
                     </tr>
                  <?php endforeach; ?>
               </tbody>
            </table>
   </div>
      <?php endif; ?>
   </div>
</body>
</html>