<?php
$id = $_REQUEST['id'];
$model = new Pesanan();
$pesanan = $model->getPesanan($id);

?>
<div>
    <h1 class="mt-4">Detail Pesanan tanggal <?= $pesanan['tanggal'] ?></h1>

    <div class="card mb-4">
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Total</th>
                        <th>Pelanggan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $pesanan['tanggal'] ?></td>
                        <td><?= $pesanan['total'] ?></td>
                        <td><?= $pesanan['nama_pelanggan'] ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div> 
</div>
