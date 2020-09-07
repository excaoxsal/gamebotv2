<?php
include "config.php";

$judul = $_POST["judul"];
$isiberita = $_POST["isi"];
$tgl_upload = $_POST["tanggal"];
$usernama = $_POST["user_nama"];
//echo $_FILES["gambar"]["name"];
$lokasifile = $_FILES['gambar']['tmp_name'];
//nama file temporary yang akan disimpan di server
$namafile = $_FILES['gambar']['name'];
//membaca nama file yang akan diupload

$uploaddir = "uploads/"; //folder penyimpanan berkas/file
$uploadfile = $uploaddir.$namafile;
//menggabungkan nama folder dan nama file

//Jika file berhasil di upload
if(move_uploaded_file($lokasifile, $uploadfile)) {
echo "Nama File : <b>$namafile</b> sukses di upload";

//masukkan informasi file ke dalam database
$sql = "INSERT INTO berita(berita_judul,
berita_isi,berita_gambar,berita_tanggal,user_nama)
VALUES('$judul','$isiberita','$uploadfile','$tgl_upload','$usernama')";
$hasil = mysqli_query($config, $sql);
header('location:../tables/berita_tampil.php');
} else {
echo "File gagal disimpan";
}
?>