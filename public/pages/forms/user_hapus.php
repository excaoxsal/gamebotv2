<?php 
include "config.php";
$user = $_GET['user_nama'];

$sql = "DELETE FROM user WHERE user_nama='$user'";

mysqli_query($config, $sql);
echo "<script> alert('Data berhasil dihapus')</script>";
header("location:../tables/user_tampil.php");
 ?>