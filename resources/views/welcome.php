<!DOCTYPE html>
<html>
<head>
	<title>Halaman Welcome</title>
</head>
<body>
<?php 
session_start(); //memulai session
	if(isset($_SESSION['username'])) { ?>
		<h2 align="center">Control Panel</h2>
		<p align="center">Selamat Datang
		"<?php echo $_SESSION['username']; ?>".<br>
		Klik <a href="logout.php">disini</a> untuk logout.<p>
	<?php 
	echo "<p align=center> Berikut ini adalah menu navigasi anda</p>";
	echo "<p align=center><a href='halamanberita.php'> Halaman Berita </a>
	<a href='halamanuser.php'> Halaman User </a>";
} else { ?>
	<h2>Maaf...</h2>
	<p>Anda tidak berhak mengakses halaman ini. Silahkan <a href="login.php">Login </a> terlebih dahulu. </p>
<?php } ?>
</body>
</html>