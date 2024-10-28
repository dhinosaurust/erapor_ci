<?= $this->extend('components/master_layout') ?>

<?= $this->section('content') ?>

<main class="p-3 m-3">
    
    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success ">
            <?php echo session()->getFlashdata('success'); ?>
        </div>
    <?php endif; ?>

    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Semua Data</li>
        </ol>
    </nav>    
    <div class="card">
        <div class="card-header">
            <p class="card-title mt-2">Jumlah <b>ASN & NON ASN</b> Berdasarkan <b>Jenis Kelamin & Usia</b></p>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered" width="100%" align="center">
                <thead align="center" class="table-primary">
                    <tr align="center" style="vertical-align: middle;">
                        <th class="text-primary" rowspan="2">No</th>
                        <th class="text-primary" rowspan="2">Usia</th>
                        <th class="text-primary" colspan="2">Jenis Kelamin</th>
                        <th class="text-primary" rowspan="2">Jumlah</th>
                    </tr>
                    <tr>
                        <th class="text-primary">Laki - Laki</th>
                        <th class="text-primary">Perempuan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr align="center">
                    <th>
                        1
                    </th>
                    <th>
                        18 - 20
                    </th>
                    <th>
                        2.799                          </th>
                    <th>
                        710                          </th>
                    <th>3.509</th>
                    </tr>
                    <tr align="center">
                    <th>
                        2
                    </th>
                    <th>
                        21 - 30
                    </th>
                    <th>
                        133.093                          </th>
                    <th>
                        94.384                          </th>
                    <th>227.477</th>
                    </tr>
                    <tr align="center">
                    <th>
                        3
                    </th>
                    <th>
                        31 - 40
                    </th>
                    <th>
                        265.467                          </th>
                    <th>
                        169.624                          </th>
                    <th>227.477</th>
                    </tr>
                    <tr align="center">
                    <th>
                        4
                    </th>
                    <th>
                        41 - 50
                    </th>
                    <th>
                        272.433                          </th>
                    <th>
                        165.712                          </th>
                    <th>438.145</th>
                    </tr>
                    <tr align="center">
                    <th>
                        5
                    </th>
                    <th>
                        51 - 60
                    </th>
                    <th>
                        225.957                          </th>
                    <th>
                        190.763                          </th>
                    <th>416.720</th>
                    </tr>
                    <tr align="center">
                    <th>
                        6
                    </th>
                    <th>
                        Diatas 60
                    </th>
                    <th>
                        28.022                          </th>
                    <th>
                        8.546                          </th>
                    <th>36.568</th>
                    </tr>
                    <tr align="center">
                    <th colspan="2">Jumlah</th>
                    <th>
                        927.771                          </th>
                    <th>
                        629.739                          </th>
                    <th>
                        1.557.510                          </th>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<?= $this->endSection() ?>

