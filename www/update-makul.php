<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $kd_mk=$_POST['kd_mk'];
 $nama_makul=$_POST['nama_makul'];
 $sks=$_POST['sks'];
 $q=mysqli_query($con,"UPDATE `makul` SET `kd_mk`='$kd_mk',`nama_makul`='$nama_makul',`sks`='$sks' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>