<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
}

// Load file koneksi.php
include "koneksi.php";
// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$id_user = $_SESSION['id_user'];
$id = $_GET['id'];

$query = "SELECT * FROM product where id_brg='".$id."'";
$sql = mysqli_query($koneksi, $query);
$data = mysqli_fetch_array($sql);
$nama_brg = $data['nama_brg'];
$harga = $data['harga'];
$gambar = $data['gambar'];


// Ambil Data yang Dikirim dari Form

$query = "INSERT INTO cart(id_user,id_brg,nama_brg,jumlah,harga,gambar) VALUES('".$id_user."', '".$id."',
'".$nama_brg."',1, '".$harga."', '".$gambar."')";
$sql = mysqli_query($koneksi, $query); 
if($sql){ 
header("location: cart.php"); // Redirect ke halaman index.php
}else{
// Jika Gagal, Lakukan :
echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke
database.";

}

?>