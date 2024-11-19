<header>
    <nav class="navbar fixed-top w-100 navbar-expand-lg bg-light p-3 shadow-sm">
        <button class="btn" id="btnSideNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container-fluid">
            <a class="navbar-brand text-capitalize" href="#">
                <?php
                    if(strpos($_SERVER['REQUEST_URI'], '/list-pegawai') === 0){
                        echo 'list pegawai';
                    
                    } elseif(strpos($_SERVER['REQUEST_URI'], '/kuisoner') === 0) {
                        echo 'kuisoner';
                    
                    } elseif(strpos($_SERVER['REQUEST_URI'], '/hasil-penilaian') === 0) {
                        echo 'hasil penilaian';

                    } else {
                        echo 'dashboard';
                    }
                ?>
            </a>
            
        </div>
    </nav>
</header>