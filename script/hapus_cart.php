<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
}
// Load file koneksi.php
include "koneksi.php";
// Ambil data NIS yang dikirim oleh index.php melalui URL
$id = $_GET['id'];
// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
$query2 = "DELETE FROM cart WHERE id='".$id."'";
$sql2 = mysqli_query($koneksi, $query2); 
if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
// Jika Sukses, Lakukan :
header("location: cart.php"); // Redirect ke halaman index.php
}else{
// Jika Gagal, Lakukan :
echo "Data gagal dihapus.";
}
?>