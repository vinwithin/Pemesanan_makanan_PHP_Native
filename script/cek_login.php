<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
session_start();
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from user where email='$username' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);


if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['login'] = true;
	
	$row = mysqli_fetch_assoc($data);
	
	$_SESSION['id_user'] = $row['id_user'];
	$_SESSION['level'] = $row['level'];
      //Store the name in the session
   
	if ($_SESSION['level'] == 1) { 
		header("location:admin/dashbord.php");
	} else {
		header("location:navigasi.php");
	}
	
}else{
	header("location:login.php?pesan=gagal");
}
?>