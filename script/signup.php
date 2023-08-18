
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
    <div class="signup-form">
      <form action="proses_signup.php" method="POST">
        <h2>Registrasi Akun</h2>
        <p class="hint-text">Registrasi dengan akun media sosial atau alamat email Anda</p>

        <div class="form-group">
          <input type="text" class="form-control input-lg" name="username" placeholder="Username" required="required" />
        </div>
        <div class="form-group">
          <input type="email" class="form-control input-lg" name="email" placeholder="Email address" required="required" />
        </div>
        <div class="form-group">
          <input type="password" class="form-control input-lg" name="password" placeholder="Password" required="required" />
        </div>
        <div class="form-group">
          <input type="password" class="form-control input-lg" name="confirm_password" placeholder="Confirm password" required="required" />
        </div>
        <div class="form-group text-center">
          <button type="submit" name="register" class="btn btn-success btn-block signup-btn">Daftar</button>
        </div>
        <div class="or-seperator"><b>or</b></div>
        <div class="social-btn text-center">
          <a href="#" class="btn btn-primary">Facebook</a>
          <a href="#" class="btn btn-info">Twitter</a>
          <a href="#" class="btn btn-danger">Google</a>
        </div>
      </form>
      <div class="text-center">Sudah memiliki akun? <a href="login.php">Login disini</a></div>
    </div>
  </body>
</html>
