<?php 
include "config.php";

$user = $_POST['username'];
$pass = $_POST['password'];
$nama = $_POST['namalengkap'];
$email = $_POST['email'];

$sql = "UPDATE user
		SET user_password = '$pass',
			user_namalengkap = '$nama',
			user_email='$email'
		WHERE user_nama = '$user'";

$hasil = mysqli_query($config, $sql);

if ($hasil) {
	echo header('location:../tables/user_tampil.php');
} else {
	echo "Data gagal diubah";
}
?>
