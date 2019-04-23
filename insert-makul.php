<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $kd_mk=$_POST['kd_mk'];
 $nama_makul=$_POST['nama_makul'];
 $sks=$_POST['sks'];
 $q=mysqli_query($con,"INSERT INTO `makul` (`kd_mk`,`nama_makul`,`sks`) VALUES ('$kd_mk','$nama_makul','$sks')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>