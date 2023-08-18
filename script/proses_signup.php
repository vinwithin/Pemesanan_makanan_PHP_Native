<?php
include "koneksi.php";
$username = $_POST['username'];
$email = $_POST['email'];
$password1 = mysqli_real_escape_string($koneksi, $_POST['password']) ;
$password2 = mysqli_real_escape_string($koneksi, $_POST['confirm_password']);

if($password1 !== $password2){
    echo "<script>
    alert('Konfirmasi Password Salah')
    </script>";
    return false;
    
}else{
    $password1 = password_hash($password1, PASSWORD_DEFAULT);
    mysqli_query($koneksi, "insert into user (nama_user, email, password, level) values ('$username', '$email', '$password1', 2)");
    header("location: navigasi.php");
}

?>