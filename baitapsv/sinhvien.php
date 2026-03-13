<?php 
// them class person.php de ke thua 

require_once 'person.php';

// tao class SinhVien ke thua tu Person 

class SinhVien extends Person {
  //thuoc tinh moi cho class sinh vien 
  private $maSV;
  private $lop;
  private $diemTB;
  private $trangThai;

  // Constructor - goi constructor cua lop cha + them thuoc tinh moi 
  public function __construct($maSV, $name, $age, $email, $lop, $diemTB, $trangThai = "Dang hoc") {
        // goi constructor cua lop cha (Person)
       parent::__construct($name, $age, $email); 
      $this->maSV = $maSV;
      $this->lop = $lop;
      $this->diemTB = $diemTB;
      $this->trangThai = $trangThai;
  }

// Getters cho cac thuoc tinh moi 

public function getMaSV() {
    return $this->maSV;
}
public function getLop() {
    return $this->lop;
}
public function getDiemTB() {
    return $this->diemTB;
}
public function getTrangThai() {
    return $this->trangThai;
}

// Setters cho cac thuoc tinh moi

public function setMaSV($maSV) {
    $this->maSV = $maSV;
}
public function setLop($lop) {
    $this->lop = $lop;
}
public function setDiemTB($diemTB) {  
    $this->diemTB = $diemTB;
}
public function setTrangThai($trangThai) {
    $this->trangThai = $trangThai;
}

// phuong thuc hien thi thong tin sinh vien
public function getSinhVienInfo(){
  return "Ma SV: {$this->maSV} | "
    . parent::getInfo() . " | "
    . "Lop: {$this->lop} | "
    . "Diem TB: {$this->diemTB} | "
    . "Trang thai: {$this->trangThai}";
 }

 //phuong thuc kiem tra hoc luc (vi du) 
 public function getHocLuc() {
    if ($this->diemTB >= 9) {
        return "Xuat sac";
    } elseif ($this->diemTB >= 8) {
        return "Gioi";
    } elseif ($this->diemTB >= 6.5) {
        return "Kha";
    } elseif ($this->diemTB >= 5) {
        return "Trung binh";
    } else {
        return "Yeu";
    }
 }
}
?>