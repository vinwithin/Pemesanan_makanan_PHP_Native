<?php


if (!isset($_SESSION['login'])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<div class="row row-cols-1 row-cols-md-4 g-4 flex-wrap">
    
    <?php include "koneksi.php"; 
    
    ?>

    <?php
    $query = "SELECT * FROM product";
    $sql = mysqli_query($koneksi, $query);
    while ($data = mysqli_fetch_array($sql)) :
    ?>
        
            <div class=" col">
            <div class="card  text-bg-success mb-3 h-100 mx-auto" >
                <img src="../image/<?php echo $data['gambar'] ?>" class="card-img-top h-50 mx-auto " style="height: 250px ;max-width:300px;" alt="...">
                <div class="card-body">
                    <h4 class="card-title" style="font-family: 'Times New Roman', Times, serif; ">Rp. <?php echo number_format($data['harga'])  ?></h4>
                    <h5 class="card-title"><?php echo $data['nama_brg'] ?></h5>
                    <p class="card-text"><?php echo $data['keterangan'] ?></p>
                 
                </div>
                <div class="text-center pb-2">   <a class="flex items-center btn btn-sm btn-warning mr-4" style="width: 150px;" href="tambah_cart.php?id=<?php echo $data['id_brg'] ?>"> <i data-lucide="shopping-cart"></i> Add to Cart </a></div>
            </div>
        </div>
        



        
    <?php
    endwhile
    ?>
</div>
<script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
</body>

</html>