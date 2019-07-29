<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $nip=$_POST['nip'];
 $nama_dosen=$_POST['nama_dosen'];
 $q=mysqli_query($con,"UPDATE `dosen` SET `nip`='$nip',`nama_dosen`='$nama_dosen' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>