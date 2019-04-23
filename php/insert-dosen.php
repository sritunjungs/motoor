<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
    $id=$_POST['id'];
    $nip=$_POST['nip'];
    $nama=$_POST['nama'];
    $matakuliah=$_POST['matakuliah'];
 $q=mysqli_query($con,"INSERT INTO `dosen` (`id`,`nip`,`nama`,`matakuliah`) VALUES ('$id','$nip','$nama','$matakuliah')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>