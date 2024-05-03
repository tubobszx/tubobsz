<?php require_once 'header.php' ?>

<?php
$sql = "SELECT count(produk_id) total FROM produk";
$result = $conn->query($sql);
$total_barang = $result->fetch_assoc()['total'];
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Beranda</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Cabang Kota Mekar Jaya</li>
            </ol>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">
                            Total Barang
                            <br>
                            <h1 class="mt-"><?php echo $total_barang ?></h1>
                        </div>
                        <!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <h1></h1>
</body>
</html>

                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="pendataan-barang.php">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php require_once 'footer.php' ?>
    