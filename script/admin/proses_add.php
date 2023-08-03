<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: ../login.php");
}
// Load file koneksi.php
include "../koneksi.php";
// Ambil Data yang Dikirim dari Form
$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];
$nama = $_POST['nama_brg'];
$kategori = $_POST['kategori'];
$keterangan = $_POST['keterangan'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];

$path = "../../image".$gambar;

if(move_uploaded_file($tmp, $path)){
    $query = "INSERT INTO product(gambar, nama_brg, kategori, keterangan, stok, harga) VALUES('".$gambar."', '".$nama."',
    '".$kategori."','".$keterangan."','".$stok."','".$harga."')";
    $sql = mysqli_query($koneksi, $query); 
    if($sql){ 
        header("location: add.php"); // Redirect ke halaman index.php
    }else{
    // Jika Gagal, Lakukan :
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
    }
}else{
    echo "Maaf, Gambar gagal untuk diupload.";
    echo "<br><a href='add.php'>Kembali Ke Form</a>";
}
