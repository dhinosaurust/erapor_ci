<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi E-Rapor - BKPSDM</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="bootstrap-icons/bootstrap-icons.min.css">
</head>
<body class="h-100">
    <div class="d-flex vh-100">
        <?php include_once 'template/sidebar.php' ?>
        <div class="w-100 vh-100 overflow-auto">
            <?php include_once 'template/header.php'?>
            <main class="p-3 m-3">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">List Pegawai</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Semua Data</li>
                    </ol>
                </nav>    

                <div class="card">
                    <div class="card-header">
                        <p class="card-title mt-2 d-flex align-items-center"><i class="bi bi-person-circle fs-3 me-3"></i>Data Pegawai Pemerintah Kota Surabaya</p>
                        <hr>
                        <div class="d-flex flex-row my-3">
                            <button class="btn text-uppercase btn-primary">pns</button>
                            <button class="btn ms-2 text-uppercase btn-primary">ppk</button>
                            <button class="btn ms-2 text-uppercase btn-primary">non asn</button>
                            <button class="btn ms-2 text-capitalize btn-primary"><i class="bi bi-filetype-xls me-2"></i>export excel</button>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-3">
                        <table class="list-pegawai-tbl table table-hover table-bordered">
                            <thead class="table-primary text-primary">
                                <tr style="vertical-align: middle;">
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>NIP/NIK</th>
                                    <th>Jenis</th>
                                    <th>OPD</th>
                                    <th>Unit Kerja</th>
                                    <th>Jabatan</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tgl lahir</th>
                                    <th>Umur</th>
                                    <th>Tingkat Pendidikan</th>
                                    <th>Gol</th>
                                    <th>Jenis Jabatan</th>
                                </tr>
                            </thead>
                            <tbody id="allDataEmployee">
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer p-3 d-flex justify-content-between">
                        <p class="mb-0">Showing 1 to 10 of 57 entries</p>
                        <ul class="list-unstyled d-flex mb-0">
                            <?php for ($i=1; $i <= 5; $i++) { ?>
                            <li class="me-2"><a class="text-decoration-none" href="#"><?php echo $i?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </main>
            <?php include_once 'template/footer.php'?>
        </div>
    </div>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>