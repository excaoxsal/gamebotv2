<?php 
include "config.php";
$user = $_POST['username'];
$pass = $_POST['password'];
$nama = $_POST['namalengkap'];
$email = $_POST['email'];
$sql = "INSERT INTO user (user_nama,user_password,user_namalengkap,user_email)
		VALUES ('$user', '$pass', '$nama', '$email');";

$hasil = mysqli_query($config, $sql);

if($hasil) {
	header('location:../tables/user_tampil.php');
} else {
	echo "Data gagal disimpan";
}
?>
