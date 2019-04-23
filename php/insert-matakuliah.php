<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
    $id=$_POST['id'];
    $kode=$_POST['kode'];
    $matakuliah=$_POST['matakuliah'];
    $sks=$_POST['sks'];
 $q=mysqli_query($con,"INSERT INTO `matakuliah` (`id`,`kode`,`matakuliah`,`sks`) VALUES ('$id','$kode','$matakuliah','$sks')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>