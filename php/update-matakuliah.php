<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $kode=$_POST['kode'];
 $matakuliah=$_POST['matakuliah'];
 $sks=$_POST['sks'];
 $q=mysqli_query($con,"UPDATE `matakuliah` SET `kode`='$kode',`matakuliah`='$matakuliah',`sks`='$sks' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>