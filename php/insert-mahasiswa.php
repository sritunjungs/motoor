<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $id=$_POST['id'];
 $nim=$_POST['nim'];
 $nama=$_POST['nama'];
 $prodi=$_POST['prodi'];
 $q=mysqli_query($con,"INSERT INTO `mahasiswa` (`id`,`nim`,`nama`,`prodi`) VALUES ('$id','$nim','$nama','$prodi')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>