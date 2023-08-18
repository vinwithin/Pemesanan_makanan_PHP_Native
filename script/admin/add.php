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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">





    <title>Shopify</title>
</head>

<body>
<div class="container-fluid ">
    <div class="row " style="background-color:#282a36;">
      <div class="sidebar  border-right col-md-3 col-lg-2 p-0 mt-6" style="background-color:#282a36; border-right: solid white 1px;  position:fixed; height:100vh;">
        <div class="offcanvas-md " tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <a href="" class="d-flex align-items-center ml-3 mb-md-3 me-md-auto text-white gap-2 text-decoration-none" style="align-items: center; margin-left: 40px; ">
            <i style="margin-top: 10px;" class="bi bi-bootstrap-fill " ></i>
            <span style="margin-top: 10px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;" class="fs-5">Shopify</span>
        </a>
          <div class="offcanvas-body d-md-flex flex-column p-4 pt-lg-2 my-3 "  >
            <ul class="nav flex-column">
             
              <li class="nav-item mb-2" >
                <a class="nav-link text-white " href="dashbord.php">
                
                <i class="fa-solid fa-house fa-lg" ></i>
                  Dashboard
                </a>
              </li>
              <li class="nav-item mb-2 ">
                <a class="nav-link active" aria-current="true" href="add.php">
                <i class="fa-solid fa-bowl-food fa-lg"></i>
                  Product
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
          <h1 class="h2 text-white" style="font-family: Georgia, 'Times New Roman', Times, serif;">ADD PRODUCT</h1>
         
        </div>

        <!-- END: Side Menu -->
        <div class="container">

            <div class="content">
                <div class="grid grid-cols-11 gap-x-6 mt-5 pb-20">
                   
                    <div class="intro-y col-span-11 alert alert-primary alert-dismissible show flex items-center mb-6" role="alert">
                        <span><i data-lucide="info" class="w-4 h-4 mr-2"></i></span>
                        <span>Starting May 10, 2021, there will be changes to the Terms & Conditions regarding the number of products that may be added by the Seller. <a href="https://themeforest.net/item/midone-jquery-tailwindcss-html-admin-template/26366820" class="underline ml-1" target="blank">Learn More</a></span>
                        <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> <i data-lucide="x" class="w-4 h-4"></i> </button>
                    </div>
                   
                    <div class="intro-y col-span-11 2xl:col-span-9">
                        <form action="proses_add.php" method="post" enctype="multipart/form-data">
                          
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
                                                <input id="product-name" name="gambar" type="file" class="form-control" placeholder="Product name">
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
                                                <input id="product-name" type="text" name="nama_brg" class="form-control" placeholder="Product name">
                                                
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
                                                <select id="category" name="kategori" class="form-select">
                                                    <option hidden>-- Select Categories --</option>
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
                                                <input id="product-name" type="text" name="keterangan" class="form-control" placeholder="Product description">
                                                
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
                                                <input id="product-stock" type="text" name="stok" class="form-control" placeholder="Input Product Stock">
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
                                                <input id="sku" name="harga" type="number" class="form-control" placeholder="Rp. 0">
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
</main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f10456a175.js" crossorigin="anonymous"></script>
</body>

</html>