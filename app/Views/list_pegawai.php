<?= $this->extend('components/master_layout') ?>

<?= $this->section('content') ?>


<?php
    // foreach ($data_pegawai as $pegawai) {
    //     echo $pegawai['nama'].'<br>';
    // }
?>

<main class="p-3 m-3">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <div class="text-capitalize mb-3 fs-3 fw-semibold ">
            data pegawai pemerintah kota surabaya
        </div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">List Pegawai</a></li>
            <li class="breadcrumb-item active" aria-current="page">Semua Data</li>
        </ol>
    </nav>

    <div class="card mb-3">
        <div class="d-flex flex-row-reverse justify-content-between p-3">
            <div class="d-flex">
                <form method="post">
                    <button type="submit" name="category" value="pns" class="btn text-uppercase btn-primary">pns</button>
                    <button type="submit" name="category" value="pppk" class="btn ms-2 text-uppercase btn-primary">pppk</button>
                    <button type="submit" name="category" value="non asn" class="btn ms-2 text-uppercase btn-primary">non asn</button>
                </form>
                <button type="submit" class="btn ms-2 text-capitalize btn-primary"><i class="bi bi-filetype-xls me-2"></i>export excel</button>
            </div>
            <div class="col-4">
                <form action="" method="post">
                    <div class="input-group">
                        <input type="text" name="keyword" class="form-control" placeholder="Cari berdasarkan Nama dan NIP" value="<?= isset($_SESSION['keyword']) ? $_SESSION['keyword'] : '' ?>">
                        <?php if(isset($_SESSION['keyword'])) : ?>
                            <a href="#" class="btn btn-secondary"  onclick="location.href='/list-pegawai/clearSearch'"><i class="bi bi-arrow-clockwise"></i></a>
                        <?php else : ?>
                            <button class="btn btn-primary" type="submit" id="btn_search"><i class="bi bi-search"></i></button>
                        <?php endif; ?>
                    </div>
                </form>

            </div>
        </div>
        <?php if (isset($_SESSION['category'])): ?>
        
        <hr class="mt-1">
        <div class='d-flex justify-content-between px-3 mb-3 mx-2'>
            <?= "<div>" . "Filter berdasarkan kategori :  " . "<span class='badge rounded-pill text-uppercase text-bg-primary'>" .  $_SESSION['category'] . "</span>" . "</div>" ?>
            <button type="submit" onclick="location.href='/list-pegawai/clearFilter'" class="btn text-danger p-0 fs-5 bi bi-x-circle-fill">
        </div>
        
        <?php endif; ?>
    </div>

    <div class="card">
        <div class="card-body p-0 table-responsive">
            <table class="list-pegawai-tbl table table-bordered table-hover" style="border-color: #f0f2f5;">
                <thead class="border-bottom border-3 fw-bold text-white shadow-sm" style="background: linear-gradient(90deg, rgba(20,136,204,1) 0%, rgba(37,73,185,1) 45%, rgba(43,50,178,1) 100%);">
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
                    <?php 
                        $counter = 1 + (($pageEmployee - 1) * 10);
                        foreach($data_pegawai as $pegawai) {
                    ?>
                    <tr>
                        <td><?= $counter++ ?></td>
                        <td><?= $pegawai['nama'] ?></td>
                        <td><?= $pegawai['nip_nik'] ?></td>
                        <td><?= $pegawai['kategori'] ?></td>
                        <td><?= $pegawai['opd'] ?></td>
                        <td><?= $pegawai['unit_kerja'] ?></td>
                        <td><?= $pegawai['jabatan'] ?></td>
                        <td><?= $pegawai['jenis_kelamin'] ?></td>
                        <td><?= date( 'd-m-Y' , strtotime($pegawai['tgl_lahir'])) ?></td>
                        <!-- convert dari format date ke interger -->
                        <td><?= intval(date('Y') - date( 'Y' , strtotime($pegawai['tgl_lahir']))) ?></td>
                        <td><?= $pegawai['tk_pendidikan'] ?></td>
                        <td><?= $pegawai['golongan'] ?></td>
                        <td><?= $pegawai['jenisjabatan'] ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="card-footer p-3 d-flex justify-content-center">
            <?= $pager->links('employee', 'custom_paging') ?>
        </div>
    </div>
</main>

<?= $this->endSection() ?>
