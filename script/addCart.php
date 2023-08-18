<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: ../login.php");
}
// Load file koneksi.php
include "koneksi.php";
include "hapus_semua.php";
// Ambil Data yang Dikirim dari Form
$namaPembeli = $_POST['nama_pembeli'];
$total = $_POST['total'];

    $query = "INSERT INTO belanja(nama_pembeli, total) VALUES('".$namaPembeli."','".$total."')";
    $sql = mysqli_query($koneksi, $query); 
    if($sql){ 
        header("location: navigasi.php"); 
        $sql2;
        // Redirect ke halaman index.php
    }else{
    // Jika Gagal, Lakukan :
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
    }

?>
