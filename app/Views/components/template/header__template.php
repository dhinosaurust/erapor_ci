<header>
    <nav class="navbar fixed-top w-100 navbar-expand-lg bg-light p-3 shadow-sm">
        <button class="btn" id="btnSideNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container-fluid">
            <a class="navbar-brand text-capitalize" href="#">
                <?php
                    if($_SERVER['REQUEST_URI'] == '/list-pegawai'){
                        echo 'list pegawai';
                    } else {
                        echo 'home';
                    }
                ?>
            </a>
            
        </div>
    </nav>
</header>