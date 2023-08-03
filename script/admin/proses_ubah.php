<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: ../login.php");
}
// Load file koneksi.php
include "koneksi.php";
// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$id = $_GET['id'];
// Ambil Data yang Dikirim dari Form
$gambar = $_POST['gambar'];
$nama = $_POST['nama_brg'];
$kategori = $_POST['kategori'];
$keterangan = $_POST['keterangan'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];

$query = "UPDATE product SET gambar='".$gambar."', nama_brg='".$nama."', kategori='".$kategori."',
 keterangan='".$keterangan."',stok='".$stok."',harga='".$harga."' WHERE id_brg='".$id."'";
$sql = mysqli_query($koneksi, $query); 
if($sql){ 
header("location: index.php"); 
}else{
// Jika Gagal, Lakukan :
echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan
data ke database.";
echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
}

?>