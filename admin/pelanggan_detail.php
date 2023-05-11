<?php

$id = $_REQUEST['id'];
$model = new Pelanggan();
$pelanggan = $model->getPelanggan($id);


?>
<div>
    <h1 class="mt-4">Detail Pelanggan <?= $pelanggan['nama_pelanggan'] ?></h1>

    <div class="card mb-4">
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Nama Pelanggan</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>Kartu</th>
                    </tr>
                </thead>
                <tbody>
                    <td><?= $pelanggan['kode'] ?></td>
                    <td><?= $pelanggan['nama_pelanggan'] ?></td>
                    <td><?= $pelanggan['jk'] ?></td>
                    <td><?= $pelanggan['tmp_lahir'] ?></td>
                    <td><?= $pelanggan['tgl_lahir'] ?></td>
                    <td><?= $pelanggan['alamat'] ?></td>
                    <td><?= $pelanggan['email'] ?></td>
                    <td><?= $pelanggan['kartu'] ?></td>
                </tbody>
            </table>
        </div>
    </div>    
</div>