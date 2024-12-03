<nav>
    <div class="text-capitalize mb-3 fs-3 fw-semibold ">
        <?php 
            if(strpos($_SERVER['REQUEST_URI'], '/form-survey') === 0){
                echo 'form penilaian kerja';
            
            } else {
                echo 'form data diri';
            }
        ?>
    </div>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a class="text-decoration-none" href="/kuesioner"><span class="bi bi-arrow-left-circle-fill me-2"></span>Kembali</a></li>
    </ol>
    <div class="d-none callout bg-light border rounded-2 p-4">
        <p class="text-capitalize fs-5 text-primary"><span class="bi bi-info-circle-fill me-2"></span>Information</p>
        <p class="text-secondary mb-0">Survei berikut ini dirancang untuk individu sebagai alat penilaian kinerja pegawai sekaligus evaluasi perilaku kerja. Tujuan dari survei ini adalah untuk mengukur dan memahami kontribusi, produktivitas, serta sikap kerja pegawai dalam lingkungan kerja.</p>
    </div>  
</nav>