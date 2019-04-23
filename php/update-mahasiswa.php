<?php
 include "db.php";
 if(isset($_POST['update']))
 {
    $id=$_POST['id'];
    $nim=$_POST['nim'];
    $nama=$_POST['nama'];
    $prodi=$_POST['prodi'];
 $q=mysqli_query($con,"UPDATE `mahasiswa` SET `nim`='$nim',`nama`='$nama',`prodi`='$prodi' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>