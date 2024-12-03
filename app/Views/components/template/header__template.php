<header>
    <nav class="navbar justify-content-start fixed-top w-100 navbar-expand-lg bg-light p-3 shadow-sm">
        <button class="btn" id="btnSideNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="ms-2">
            <a class="navbar-brand text-capitalize" href="#">
                <?php
                    if(strpos($_SERVER['REQUEST_URI'], '/list-pegawai') === 0){
                        echo 'list pegawai';
                    
                    } elseif(strpos($_SERVER['REQUEST_URI'], '/kuesioner') === 0) {
                        echo 'kuesioner';
                    
                    } elseif(strpos($_SERVER['REQUEST_URI'], '/form-bio') === 0 || strpos($_SERVER['REQUEST_URI'], '/form-survey') === 0 ) {
                        echo 'penilaian kinerja';
                    
                    } else {
                        echo 'dashboard';
                    }
                ?>
            </a>
            
        </div>
    </nav>
</header>