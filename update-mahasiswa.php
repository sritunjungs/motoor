<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $nim=$_POST['nim'];
 $nama=$_POST['nama'];
 $kata=$_POST['prodi'];
 $q=mysqli_query($con,"UPDATE `mahasiswa` SET `nim`='$nim',`nama`='$nama',`prodi`='$kata' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>