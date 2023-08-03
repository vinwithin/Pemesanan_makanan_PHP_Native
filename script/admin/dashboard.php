<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/sidebars.css">


    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">





    <title>Document</title>
</head>

<body>
    <div class="d-flex flex-row" style="display: inline;" >
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark " style="width: 280px; height:100vh; overflow-x: hidden; overflow-y: hidden; z-index:1; display:block; float:left;">
            <a href="" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="52">
                    <use xlink:href="#bootstrap" />
                </svg>
                <span class="fs-4">Shopify</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link active" aria-current="page">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#home" />
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="add.php" class="nav-link text-white">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#speedometer2" />
                        </svg>
                        Product
                    </a>
                </li>
                <li>
                    <a href="logout.php" class="nav-link text-white">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#table" />
                        </svg>
                        Logout
                    </a>
                </li>
            </ul>
            <hr>

        </div>

       

        <!-- END: Side Menu -->
        <div class="container " style="position: fixed; z-index:2; float:right; " >
            
            <header class="d-flex justify-content-center py-3 mb-4 border-bottom " >
                <a href="/" class=" align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                    <svg class="bi me-2" width="40" height="32">
                        <use xlink:href="#bootstrap" />
                    </svg>
                    <span class="fs-4">Product List</span>
                </a>
                <a href="cart.php"  style="width:60px; height:30px;"><i class="fa-solid fa-cart-shopping fa-2xl"></i></a>


            </header>
        </div>   
    </div>
            
            <div class="d-flex intro-y col-span-12 overflow-auto 2xl:overflow-visible ">
               <table class="table table-report -mt-2">
                   <thead>
                       <tr>
                           <th class="whitespace-nowrap">
                               <input class="form-check-input" type="checkbox">
                           </th>
                           <th class="whitespace-nowrap">IMAGES</th>
                           <th class="whitespace-nowrap">PRODUCT NAME</th>
                           <th class="whitespace-nowrap">STOCK</th>
                           <th class="text-center whitespace-nowrap">PRICE</th>
                           <th class="text-center whitespace-nowrap">STATUS</th>
                           <th class="text-center whitespace-nowrap">ACTIONS</th>
                       </tr>
                   </thead>
                   <tbody>
                   <?php
                   include "../koneksi.php";
                        $query = "SELECT * FROM product";
                        $sql = mysqli_query($koneksi, $query);
                        while ($data = mysqli_fetch_array($sql)) :
                        ?>
                           <tr class="intro-x">
                               <td class="w-10">
                                   <input class="form-check-input" type="checkbox">
                               </td>
                               <td class="py-4">
                                   <div class="d-flex items-center">
                                       <div class="w-10 h-10 ">
                                           <img  class="rounded-lg border-1 border-white shadow-md " style="width: 60px; border-radius:10px;" src="../../image/<?php echo $data['gambar'] ?>">
                                       </div>
                                       <a style="margin-left: 10px;"><?= $data['kategori'] ?></a>
                                   </div>
                               </td>
                               <td class="whitespace-nowrap"> <a  ><?= $data['nama_brg'] ?></a> </td>
                               <td class="text-center">
                                   <div class="flex items-center">
                                       <div class="text-xs text-slate-500 ml-1">( <?= $data['stok'] ?> ) </div>
                                   </div>
                               </td>
                               <td class="text-center whitespace-nowrap">Rp. <?= number_format($data['harga'], 0, ',', '.') ?></td>
                               <td class="w-40">
                                   <div class="flex items-center justify-center text-success"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                               </td>
                               <td class="table-report__action w-56">
                                   <div class="flex justify-center items-center">
                                       <a class="flex items-center mr-3" href="edit.php?id=<?php echo $data['id_brg'] ?>"> <i class="fa-solid fa-pen-to-square"></i> Edit </a>
                                       <a class="flex items-center text-danger" href="hapus.php?id=<?php echo $data['id_brg'] ?>" > <i class="fa-solid fa-delete-left"></i> Delete </a>
                                   </div>
                               </td>
                           </tr>
                       <?php endwhile ?>
                   </tbody>
               </table>
           </div>

       
      
    
   
    <script src="https://kit.fontawesome.com/f10456a175.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f10456a175.js" crossorigin="anonymous"></script>
</body>

</html>