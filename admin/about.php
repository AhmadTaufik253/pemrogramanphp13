<?php
include_once 'top.php';
include_once 'menu.php';
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
        <h1 class="mt-4">About</h1>
        <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Master Data</a></li>
                <li class="breadcrumb-item active">About</li>
            </ol>
            <div class="row">
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            Biodata
                        </div>
                        <div class="card-body">
                            <header>
                                <figure>
                                    <img style="width: 125px;" src="assets/img/img.jpg" alt="foto bio" />
                                </figure>
                            </header>
                            <section>
                                <table>
                                    <tr>
                                        <th>Nama</th>
                                        <td>: Ahmad Taufik Aurahman</td>
                                    </tr>
                                    <tr>
                                        <th>Tempat Lahir</th>
                                        <td>: Tangerang</td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Lahir</th>
                                        <td>: 25 Maret 2002</td>
                                    </tr>
                                    <tr>
                                        <th>Domisili</th>
                                        <td>: Tangerang Selatan</td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>: Mahasiswa</td>
                                    </tr>
                                    <tr>
                                        <th>Kampus</th>
                                        <td>: Universitas Budi Luhur</td>
                                    </tr>
                                </table>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php
include_once 'bottom.php';
?>