<?php
$id = $_REQUEST['id'];
$model = new Produk();
$produk = $model->getProduk($id);


?>
<div>
    <h1 class="mt-4">Detail Produk <?= $produk['nama'] ?></h1>
    <div class="card mb-4">
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Harga Beli</th>
                        <th>Harga Jual</th>
                        <th>Stok</th>
                        <th>Minimal Stok</th>
                        <th>Kategori</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $produk['kode'] ?></td>
                        <td><?= $produk['nama'] ?></td>
                        <td><?= $produk['harga_beli'] ?></td>
                        <td><?= $produk['harga_jual'] ?></td>
                        <td><?= $produk['stok'] ?></td>
                        <td><?= $produk['min_stok'] ?></td>
                        <td><?= $produk['Kategori'] ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>    



    
</div>