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
            <div class="sidebar  border-right col-md-3 col-lg-2 p-0 " style="background-color:#282a36; border-right: solid white 1px;  position:fixed; height:100vh;">
                <div class="offcanvas-md " tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
                    <a href="" class="d-flex align-items-center ml-3 mb-md-3 me-md-auto text-white gap-2 text-decoration-none" style="align-items: center; margin-left: 40px; ">
                        <i class="bi bi-bootstrap-fill" style="margin-top: 10px;"></i>
                        <span style="margin-top: 10px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;" class="fs-5">Shopify</span>
                    </a>
                    <div class="offcanvas-body d-md-flex flex-column p-4 pt-lg-2 overflow-y-auto">
                        <ul class="nav flex-column">

                            <li class="nav-item mb-2">
                                <a class="nav-link" href="dashbord.php">

                                    <i class="fa-solid fa-house fa-lg mr-2"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="nav-item mb-2">
                                <a class="nav-link text-white" href="cart.php">

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
                    <h1 class="h2 text-white" style="font-family: Georgia, 'Times New Roman', Times, serif;">Product List</h1>
                    <a href="cart.php" style="width:60px; height:30px;"><i class="fa-solid fa-cart-shopping fa-bounce fa-2xl" style="color: #f2d545;"></i></a>
                </div>

                <?php
                if (is_file('dashboard.php')) {
                    include "dashboard.php";
                }
                ?>


        </div>
    </div>
    </div>
    <script src="https://kit.fontawesome.com/f10456a175.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f10456a175.js" crossorigin="anonymous"></script>
</body>

</html>