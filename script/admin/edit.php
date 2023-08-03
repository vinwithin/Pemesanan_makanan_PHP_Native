<?php

session_start();

if (!isset($_SESSION['login'])) {
    header("Location: ../login.php");
}
?>
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
<?php
    // Load file koneksi.php
    include "../koneksi.php";
    // Ambil data NIS yang dikirim oleh index.php melalui URL
    $id = $_GET['id'];
    // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
    $query = "SELECT * FROM product WHERE id_brg='" . $id . "'";
    $sql = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi
    $sql
    ?>
    <div class="d-flex">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark " style="width: 280px; height:100vh; overflow-x: hidden; overflow-y: hidden; ">
            <a href="" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="52">
                    <use xlink:href="#bootstrap" />
                </svg>
                <span class="fs-4">Shopify</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="dashbord.php" class="nav-link text-white" aria-current="page">
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
        <div class="container">
            <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom ">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                    <svg class="bi me-2" width="40" height="32">
                        <use xlink:href="#bootstrap" />
                    </svg>
                    <span class="fs-4">Add Product</span>
                </a>
                <a href="cart.php" style="width:60px; height:30px;"><i class="fa-solid fa-cart-shopping fa-2xl"></i></a>


            </header>

            <div class="content">
                <div class="grid grid-cols-11 gap-x-6 mt-5 pb-20">
                    <!-- BEGIN: Notification -->
                    <div class="intro-y col-span-11 alert alert-primary alert-dismissible show flex items-center mb-6" role="alert">
                        <span><i data-lucide="info" class="w-4 h-4 mr-2"></i></span>
                        <span>Starting May 10, 2021, there will be changes to the Terms & Conditions regarding the number of products that may be added by the Seller. <a href="https://themeforest.net/item/midone-jquery-tailwindcss-html-admin-template/26366820" class="underline ml-1" target="blank">Learn More</a></span>
                        <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> <i data-lucide="x" class="w-4 h-4"></i> </button>
                    </div>
                    <!-- BEGIN: Notification -->
                    <div class="intro-y col-span-11 2xl:col-span-9">
                        <form action="proses_ubah.php?id=<?php echo $data['id_brg'] ?>" method="post" enctype="multipart/form-data">
                            <!-- BEGIN: Uplaod Product -->
                            <div class="card text-bg-info mb-3">
                                <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                                    <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5"> </i> Upload Product </div>
                                    <div class="mt-2">
                                        <div class="form-inline items-start flex-col xl:flex-row mt-2">
                                            <div class="form-label w-full xl:w-64 xl:!mr-10">
                                                <div class="text-left">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">Product Photos</div>
                                                        <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div>
                                                    </div>
                                                    <div class="leading-relaxed text-slate-500 text-xs mt-3">
                                                        <div>The image format is .jpg .jpeg .png and a minimum size of 300 x 300 pixels (For optimal images use a minimum size of 700 x 700 pixels).</div>
                                                        <div class="mt-2">Select product photos or drag and drop up to 5 photos at once here. Include min. 3 attractive photos to make the product more attractive to buyers.</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w-full mt-3 xl:mt-0 flex-1">
                                                <input id="product-name" name="gambar" type="file" class="form-control"  value="<?php echo $data['gambar'] ?>">
                                                <div class="form-help text-right">Required for file types with type jpg, jpeg or png</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Uplaod Product -->
                            <!-- BEGIN: Product Information -->
                            <div class="card text-bg-info mb-3">
                                <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5 bg-beige">
                                    <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">  Product Information </div>
                                    <div class="mt-2">
                                        <div class="form-inline ">
                                            <div class="form-label ">
                                                <div class="text-left">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">Product Name</div>
                                                        <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                            <div class="w-full mt-2 xl:mt-0 flex-1">
                                                <input id="product-name" type="text" name="nama_brg" class="form-control" value="<?php echo $data['nama_brg'] ?>">
                                                
                                            </div>
                                        </div>
                                        <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                            <div class="form-label xl:w-64 xl:!mr-10">
                                                <div class="text-left">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">Category</div>
                                                        <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w-full mt-3 xl:mt-0 flex-1">
                                                <select id="category" name="kategori" class="form-select" >
                                                    <option ><?php echo $data['kategori'] ?> </option>
                                                    <option value="T-Shirt">T-Shirt</option>
                                                    <option value="Jacket">Jacket</option>
                                                    <option value="Shoes">Shoes</option>
                                                    <option value="Electronic">Electronic</option>
                                                    <option value="Kids & Baby">Kids &amp; Baby</option>
                                                    <option value="Fashion & Make Up">Fashion &amp; Make Up</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                            <div class="form-label xl:w-64 xl:!mr-10">
                                                <div class="text-left">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">Product Description</div>
                                                        <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w-full mt-3 xl:mt-0 flex-1">
                                                <input id="product-name" type="text" name="keterangan" class="form-control" value="<?php echo $data['keterangan'] ?>">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Product Information -->

                            <!-- BEGIN: Product Management -->
                            <div class="card text-bg-info mb-3">
                                <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                                    <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5"> <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Product Management </div>
                                    <div class="mt-2">
                                        <div class="form-inline">
                                            <div class="form-label xl:w-64 xl:!mr-10">
                                                <div class="text-left">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">Product Stock</div>
                                                        <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w-full mt-2 xl:mt-0 flex-1">
                                                <input id="product-stock" type="text" name="stok" class="form-control" value="<?php echo $data['stok'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                            <div class="form-label xl:w-64 xl:!mr-10">
                                                <div class="text-left">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">Item Price</div>
                                                        <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div>
                                                    </div>
                                    
                                                </div>
                                            </div>
                                            <div class="w-full mt-2 xl:mt-0 flex-1">
                                                <input id="sku" name="harga" type="number" class="form-control" value="<?php echo $data['harga'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Product Management -->
                            <div class="flex justify-end flex-col md:flex-row gap-2 mt-5">
                                <a href="" class="btn py-3 border-slate-300 dark:border-darkmode-400 text-slate-500 w-full md:w-52">Cancel</a>
                                <button type="submit" class="btn py-3 btn-primary width-10">Save</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>


        </div>
    </div>
    <script src="https://kit.fontawesome.com/f10456a175.js" crossorigin="anonymous"></script>
</body>

</html>