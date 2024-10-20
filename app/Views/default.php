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
        <?php include 'template/sidebar.php' ?>
        <div class="w-100 vh-100 overflow-auto">
            <header>
                <nav class="navbar position-fixed w-100 navbar-expand-lg bg-light p-3">
                    <button class="btn" id="btnSideNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="container-fluid">
                        <a class="navbar-brand text-capitalize" href="#">
                            home
                        </a>
                        
                    </div>
                </nav>
            </header>
            <main class="p-3 m-3">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Semua Data</li>
                    </ol>
                </nav>    

                <div class="card-body border rounded p-3">
                    <h5 class="card-title mb-3 mt-1">Jumlah <b>ASN & NON ASN</b> Berdasarkan <b>Jenis Kelamin & Usia</b></h5>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" width="100%" align="center">
                        <thead align="center" class="bg-primary">
                            <tr align="center" style="vertical-align: middle;">
                                <th class="text-white" rowspan="2">No</th>
                                <th class="text-white" rowspan="2">Usia</th>
                                <th class="text-white" colspan="2">Jenis Kelamin</th>
                                <th class="text-white" rowspan="2">Jumlah</th>
                            </tr>
                            <tr>
                                <th class="text-white">Laki - Laki</th>
                                <th class="text-white">Perempuan</th>
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
            </main>
            <footer class="d-flex flex-wrap justify-content-between align-items-center p-3 border-top">
                <div class="col-md-4 ms-3 d-flex align-items-center">
                    <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-uppercase text-dark text-decoration-none lh-1">
                        <img src="assets/img/logo_pemkot.png" alt="logo-pemkot" style="width: 60px;">
                        sekretariat
                    </a>
                </div>

                <ul class="nav col-md-4 me-3 justify-content-end">
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
                </ul>
            </footer>
        </div>
    </div>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>