<?php
session_start();
include_once 'koneksi.php';
include_once 'models/Produk.php';
include_once 'models/jenis_produk.php';
include_once 'models/kartu.php';
include_once 'models/Pelanggan.php';
include_once 'models/Pesanan.php';
include_once 'models/Member.php';
include_once 'top.php';
include_once 'menu.php';
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <?php
            $url = $_GET['url'];
            if($url == 'dashboard'){
                include_once 'dashboard.php';
            } else if(!empty($url)){
                include_once ''.$url.'.php';
            } else {
                'dashboard.php';
            }
            ?>
        </div>
    </main>
<?php
include_once 'bottom.php';
?>