<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $nip=$_POST['nip'];
 $nama=$_POST['nama'];
 $matakuliah=$_POST['matakuliah'];
 $q=mysqli_query($con,"UPDATE `dosen` SET `nip`='$nip',`nama`='$nama',`matakuliah`='$matakuliah' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>