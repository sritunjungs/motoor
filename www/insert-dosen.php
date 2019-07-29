<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nip=$_POST['nip'];
 $nama_dosen=$_POST['nama_dosen'];
 $q=mysqli_query($con,"INSERT INTO `dosenn` (`nip`,`nama_dosen`) VALUES ('$nip','$nama_dosen')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>