<?php

session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/sidebars.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">





    <title>Document</title>
</head>

<body>
    <div class="container-fluid ">
        <div class="row " style="background-color:#282a36;">
            <div class="sidebar  border-right col-md-3 col-lg-2 p-0 " style="background-color:#282a36; border-right: solid white 1px;  position:fixed; height:100vh; ">
                <div class="offcanvas-md " tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
                    <a href="" class="d-flex align-items-center ml-3 mb-md-3 me-md-auto text-white gap-2 text-decoration-none" style="align-items: center; margin-left: 40px; ">
                        <i class="bi bi-bootstrap-fill" style="margin-top: 10px;"></i>
                        <span style="margin-top: 10px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;" class="fs-5">Shopify</span>
                    </a>
                    <div class="offcanvas-body d-md-flex flex-column p-4 pt-lg-2 overflow-y-auto">
                        <ul class="nav flex-column">

                            <li class="nav-item mb-2">
                                <a class="nav-link text-white" href="navigasi.php">

                                    <i class="fa-solid fa-house fa-lg mr-2"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="nav-item mb-2">
                                <a class="nav-link "  href="cart.php">

                                    <i class="fa-solid fa-cart-shopping fa-lg" style="color: #faf9f5;"></i>
                                    Cart
                                </a>
                            </li>
                            <li class="nav-item mb-2 ">
                                <a class="nav-link text-white" href="order.php">
                                    <i class="fa-solid fa-bag-shopping fa-lg"></i>
                                    Order History
                                </a>
                            </li>

                            <li class="nav-item ml-2">
                                <a class="nav-link text-white " href="logout.php">
                                    <i class="fa-solid fa-right-from-bracket fa-lg"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2 text-white" style="font-family: Georgia, 'Times New Roman', Times, serif;">Cart List</h1>
                    <a href="cart.php" style="width:60px; height:30px;"><i class="fa-solid fa-cart-shopping fa-bounce fa-2xl" style="color: #f2d545;"></i></a>
                </div>


                
                <div class="content">
                    <div class="intro-y flex flex-col sm:flex-row items-center mt-0">
                        <div class=" flex mt-4 sm:mt-0 float-end ">
                            <a href="Hapus_semua.php" class="btn btn-primary shadow-md mr-2 ">Clear Cart</a>
                            <a href="navigasi.php" class="btn btn-danger shadow-md mr-2 ">Continue Shopping</a>
                            
                        </div>
                    </div>
                    
                    <div class="intro-y grid grid-cols-11 gap-5 mt-5">

                        <div class="col-span-4 lg:col-span-4 2xl:col-span-2">
                            <div class="box p-5 rounded-md">

                                <form action="addCart.php" method="POST">
                                <button  class="flex items-center ml-auto btn btn-primary shadow-md mr-2"><i class="fa-solid fa-chart-line"></i>&nbsp;CHECKOUT </button>



                                <div class="">
                                    <table class="table table-dark table-striped">
                                        <thead>
                                            <tr>
                                                <th >
                                                    <input class="form-check-input" type="checkbox">
                                                </th>
                                                <th >Product Item</th>
                                                <th>Unit Price</th>
                                                <th>Qty</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php include "koneksi.php";


                                            $query = "SELECT * FROM cart where id_user='" . $_SESSION['id_user'] . "'";
                                            $sql = mysqli_query($koneksi, $query);
                                            while ($data = mysqli_fetch_array($sql)) :
                                            ?>
                                                <tr>
                                                    <td style="vertical-align: middle;"><a href="hapus_cart.php?id=<?php echo $data['id'] ?>"><i class="fa-solid fa-trash" style="color: #f4f5f5;"></i></a></td>
                                                    <td class="py-4" style="vertical-align: middle; text-align: center;">
                                                        <div class="d-flex items-center">
                                                            <div class="w-10 h-10 image-fit zoom-in">
                                                                <img alt="Midone - HTML Admin Template" class="rounded-lg border-2 border-white shadow-md " style="width: 60px; height:60px; border-radius: 10px;" src="../image/<?php echo $data['gambar']; ?>">
                                                            </div>
                                                            <a style="margin-left: 10px; text-decoration:none; color:white; text-align:center;" class="font-medium whitespace-nowrap ml-4 items-center"><?php echo $data['nama_brg']; ?></a>
                                                            
                                                            <input type="hidden" name="nama_pembeli" value="<?php echo $_SESSION['username'] ?>">
                                                            
                                                        </div>

                                                    </td>
                                                    <td class="text-right" style="vertical-align: middle;">Rp. <?= number_format($data['harga'], 0, ',', '.') ?></td>
                                                   
                                                    <td class="text-right" style="vertical-align: middle;"><?= number_format($data['jumlah'], 0, ',', '.') ?></td>

                                                    <td style="vertical-align: middle;">Rp. <a class="harga text-right" style="text-decoration: none; color:white;"> <?= $data['harga'] ?></a></td>
                                                </tr>
                                            <?php endwhile ?>
                                            <tr>
                                                <td colspan="4"></td>
                                                <td><input type="text" class="form-control" id="totals" name="total1" disabled value=""></td>
                                                
                                            </tr>
                                            
                                            <tr>
                                                <td colspan="4"></td>
                                                
                                                <td><strong id="diskon" style="visibility: hidden; ">diskon 20%</strong><input type="text" name="total" class="form-control" id="total" disabled ></td>
                                            </tr>
                                            </form>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <canvas class="my-4 w-100" id="myChart" width="900" height="210"></canvas>
                    </div>
                                                
                   
                </div>

            </main>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/f10456a175.js" crossorigin="anonymous"></script>
    <script>
        const Harga = document.getElementsByClassName('harga');
        const totals = document.getElementById('total');
        const totals1 = document.getElementById('totals');
        const diskon = document.getElementById('diskon');
        var total = 0;

        for (i = 0; i < Harga.length; i++) {
            total += parseInt(Harga[i].innerHTML);
            totals1.value = "Rp. " + total;
            if (total >= 100000) {
                totals.value = "Rp. " + (total - 0.2 * total);
                diskon.style.visibility = "visible" ;
            } else {
                totals.value = "Rp. " + total;
            }
        }
    </script>
</body>

</html>