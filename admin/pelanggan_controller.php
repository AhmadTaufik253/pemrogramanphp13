<?php
include_once 'koneksi.php';
include_once 'models/Pelanggan.php';

// menangkap request form
$kode = $_POST['kode'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$jk = $_POST['jk'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$kartu_id = $_POST['kartu_id'];

// menangkap form diatas dan dijadikan array
$data = [
    $kode,
    $nama_pelanggan,
    $jk,
    $tmp_lahir,
    $tgl_lahir,
    $alamat,
    $email,
    $kartu_id,
];

$model = new Pelanggan();
$tombol = $_REQUEST['proses'];
switch ($tombol) {
    case 'simpan':$model->simpan($data);
    break;
    case 'ubah' :
        $data[] = $_POST['idx']; $model->ubah($data);
    break;
    
    default:
        header('Location:index.php?url=pelanggan');
     break;
}
header('Location:index.php?url=pelanggan');


?>