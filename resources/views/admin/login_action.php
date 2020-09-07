<?php 
session_start();
include ("pages/forms/config.php");

$sql = "SELECT user_nama FROM user ";
$sql.= "WHERE user_nama ='".$_POST['txtUsername']."' ";
$sql.= "AND user_password ='".$_POST['txtPassword']."' ";
$hasil = mysqli_query($config, $sql) or exit("Error query : <b>".$sql."</b>.");

if(mysqli_num_rows($hasil) > 0 ) {
	$data = mysqli_fetch_array($hasil);
	$_SESSION['username'] = $data['user_nama'];
		header("Location:index.php");
		exit();

} else { ?>
		<h2>Maaf . . </h2>
		<p> Username atau Password salah. Klik <a href="login.php"> disini</a> untuk kembali login. </p>
		<?php
}
?>