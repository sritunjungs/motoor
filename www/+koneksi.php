<?php 
// koneksi dengan PDO extension

$host = 'sql202.epizy.com';
$db = 'epiz_24241322_motor';
$user = 'epiz_24241322';
$pass = 'EG01CKAJX9YqE';
 
try {
    // http://php.net/manual/en/pdo.connections.php
    $con = new PDO("mysql:host={$host};dbname={$db}", $user, $pass);
    
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Setting Error Mode as Exception
    // More on setAttribute: http://php.net/manual/en/pdo.setattribute.php
} catch(PDOException $e) {
    echo $e->getMessage();
}

/*
Code by YukCoding Tutor
www.yukcoding.id
*/
?>
