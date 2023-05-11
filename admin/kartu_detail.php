<?php
$id = $_REQUEST['id'];
$model = new Kartu();
$kartu = $model->getKartu($id);

?>
<div>
    <h1 class="mt-4">Detail Kartu <?= $kartu['nama'] ?></h1>

    <div class="card mb-4">
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Diskon</th>
                        <th>Iuran</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $kartu['kode'] ?></td>
                        <td><?= $kartu['nama'] ?></td>
                        <td><?= $kartu['diskon'] ?></td>
                        <td><?= $kartu['iuran'] ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div> 
</div>