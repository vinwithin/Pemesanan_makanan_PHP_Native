<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Selamat Datang</title>
    <!-- Bootstrap core css -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="../assets/style.css" rel="stylesheet" />
  </head>
  <body>
  <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
  ?>
    <div class="signup-form">
      <form action="cek_login.php" method="POST">
        <h2>Login Akun</h2>
        <p class="hint-text">Login dengan akun media sosial atau alamat email Anda</p>

        <div class="form-group">
          <input type="text" class="form-control input-lg" name="username" placeholder="Masukkan Username / E-mail" required="required" />
        </div>
        <div class="form-group">
          <input type="password" class="form-control input-lg" name="password" placeholder="Masukkan Password" required="required" />
        </div>
        <div class="form-group text-center">
          <button type="submit" class="btn btn-success btn-block signup-btn">Login</button>
        </div>
        <div class="or-seperator"><b>or</b></div>
        <div class="social-btn text-center">
          <a href="#" class="btn btn-primary">Facebook</a>
          <a href="#" class="btn btn-info">Twitter</a>
          <a href="#" class="btn btn-danger">Google</a>
        </div>
      </form>
      <div class="text-center">Belum memiliki akun? <a href="signup.php">Register disini</a></div>
    </div>
  </body>
</html>
