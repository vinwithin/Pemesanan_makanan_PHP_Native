<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
}
include "../koneksi.php";
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <script src="../assets/js/color-modes.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard Admin</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">




  <!-- Custom styles for this template -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="../../css/dashboard.css" rel="stylesheet">
</head>

<body>
  <div class="container-fluid ">
    <div class="row " style="background-color:#282a36;">
      <div class="sidebar  border-right col-md-3 col-lg-2 p-0 " style="background-color:#282a36; border-right: solid white 1px;  position:fixed; height:100vh;">
        <div class="offcanvas-md " tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <a href="" class="d-flex align-items-center ml-3 mb-md-3 me-md-auto text-white gap-2 text-decoration-none" style="align-items: center; margin-left: 40px; ">
                <i class="bi bi-bootstrap-fill" ></i>
                <span style="margin-top: 10px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;" class="fs-5">Shopify</span>
              </a>
          <div class="offcanvas-body d-md-flex flex-column p-4 pt-lg-2 overflow-y-auto">
            <ul class="nav flex-column">
             
            <li class="nav-item mb-2" >
                <a class="nav-link  active " aria-current="true" href="dashbord.php">
                
                <i class="fa-solid fa-house fa-xl mr-2" ></i>
                  Dashboard
                </a>
              </li>
              <li class="nav-item mb-2 ">
                <a class="nav-link text-white" href="add.php">
                <i class="fa-solid fa-bowl-food fa-xl"></i>
                  Product
                </a>
              </li>

              <li class="nav-item ml-2">
                <a class="nav-link text-white " href="logout.php">
                <i class="fa-solid fa-right-from-bracket fa-xl"></i>
                  Logout
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2 text-white" style="font-family: Georgia, 'Times New Roman', Times, serif;">Dashboard Admin</h1>

        </div>
  <div class="">
        <table class="table table-dark table-hover ">
          <h5 style="color: white; margin-top:10px; background-color:green;"  >
            PRODUCT LISTING
          </h5>
         <thead> 
            <tr class="text-center-row">
              <th scope="col">IMAGE</th>
              <th scope="col">PRODUCT NAME</th>
              <th scope="col">STOCK</th>
              <th scope="col">PRICE</th>
              <th scope="col">STATUS</th>
              <th style="text-align: center;" scope="col" colspan="2">ACTIONS</th>
            </tr>
          </thead>
          <tbody>
            <?php
             $query = "SELECT * FROM product";
             $sql = mysqli_query($koneksi, $query);
             while ($data = mysqli_fetch_array($sql)) :
            ?>
            <tr class="text-center-row">
              <th scope="row"><img src="../../image/<?php echo $data['gambar'] ?>" alt="gambar" width="80px" style="border-radius: 10px;" ></th>
              <td  style=" vertical-align: middle;"><?php echo $data['nama_brg'] ?></td>
              <td style=" vertical-align: middle;"><?php echo $data['stok'] ?></td>
              <td style=" vertical-align: middle;"><?php echo $data['harga'] ?></td>
              <td style=" vertical-align: middle;">ACTIVE</td>
              <td style=" vertical-align: middle; text-align:center;"><a href="edit.php?id=<?php echo $data['id_brg'] ?>" class="btn btn-warning">EDIT</a>
             <a href="edit.php?id=<?php echo $data['id_brg'] ?>" class="btn btn-danger">DELETE</a></td>
            </tr>
          </tbody>
          <?php endwhile ?>
        </table>
        </div>



      </main>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
  <script src="../../css/dashboard.js"></script>
  <script src="https://kit.fontawesome.com/f10456a175.js" crossorigin="anonymous"></script>
</body>

</html>