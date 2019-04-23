<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nim=$_POST['nim'];
 $nama=$_POST['nama'];
 $kata=$_POST['prodi'];
 $q=mysqli_query($con,"INSERT INTO 'mahasiswaa' ('nim','nama','prodi') VALUES ('$nim','$nama','$kata')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>