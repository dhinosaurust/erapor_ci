<aside id="sideNav" class="d-flex flex-column flex-shrink-0 p-3">
    <a href="/" class="d-flex my-3 mb-md-0 me-md-auto fw-semibold text-white text-decoration-none text-uppercase" id="logo">
        <img src="assets/img/logo_pemkot.png" alt="logo-pemkot" style="width: 60px;">
        <p class="mb-0">sekretariat</p>
    </a>
    <hr class="text-white">
    <ul class="nav nav-pills mb-auto">
        <li class="nav-item">
            <a href="/" class="nav-link p-3 text-white <?= $_SERVER['REQUEST_URI'] == '/' ? 'active' : '' ;?>" aria-current="page">
                <i class="bi bi-speedometer"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="list-pegawai" class="nav-link p-3 mt-3 text-white <?= strpos($_SERVER['REQUEST_URI'], '/list-pegawai') === 0 ? 'active' : ''; ?>" aria-current="page">
                <i class="bi bi-person-circle"></i>
                <span>List Pegawai</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="kuesioner" class="nav-link p-3 mt-3 text-white <?= strpos($_SERVER['REQUEST_URI'], '/kuesioner') === 0 || strpos($_SERVER['REQUEST_URI'], '/form-bio') === 0 || strpos($_SERVER['REQUEST_URI'], '/form-survey') === 0 ? 'active' : ''; ?>" aria-current="page">
                <i class="bi bi-pencil-square"></i>
                <span>Kuesioner</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="hasil-penilaian" class="nav-link p-3 mt-3 text-white <?= strpos($_SERVER['REQUEST_URI'], '/hasil-penilaian') === 0 ? 'active' : ''; ?>" aria-current="page">
                <i class="bi bi-trophy"></i>
                <span>Hasil Penilaian</span>
            </a>
        </li>
    </ul>
    <hr class="text-white">
    <div class="dropdown">
    <a href="#" class="d-flex align-items-center justify-content-center justify-content-sm-start text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="assets/img/blank-usr.jpg" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong class="d-none d-md-inline-block">mdo</strong>
    </a>
    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#" onclick="location.href='/logout'">Sign out</a></li>
    </ul>
    </div>
</aside>