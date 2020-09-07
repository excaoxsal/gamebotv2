<?php 
$config = mysqli_connect("localhost", "root", "", "0927");
if (!$config) {
	die('Gagal terhubung ke MySQLi :'.mysqli_connect_error() );
}
?>
